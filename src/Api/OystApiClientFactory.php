<?php

namespace Oyst\Api;

use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Symfony\Component\Yaml\Parser;

/**
 * Class OystApiClientFactory
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OystApiClientFactory
{
    const ENTITY_CATALOG  = 'catalog';
    const ENTITY_ORDER    = 'order';
    const ENTITY_PAYMENT  = 'payment';
    const ENTITY_ONECLICK = 'oneclick';

    const ENV_PROD    = 'prod';
    const ENV_PREPROD = 'preprod';

    /**
     * Returns the right API for the entityName passed in the parameters
     *
     * @param string $entityName
     * @param string $apiKey
     * @param string $userAgent
     * @param string $env
     * @param string $url
     *
     * @return AbstractOystApiClient
     *
     * @throws \Exception
     */
    public static function getClient($entityName, $apiKey, $userAgent, $env = self::ENV_PROD, $url = null)
    {
        $client = static::createClient($entityName, $env, $url);

        switch ($entityName) {
            case self::ENTITY_CATALOG:
                $oystClientAPI = new OystCatalogApi($client, $apiKey, $userAgent);
                break;
            case self::ENTITY_ORDER:
                $oystClientAPI = new OystOrderApi($client, $apiKey, $userAgent);
                break;
            case self::ENTITY_PAYMENT:
                $oystClientAPI = new OystPaymentApi($client, $apiKey, $userAgent);
                break;
            case self::ENTITY_ONECLICK:
                $oystClientAPI = new OystOneClickApi($client, $apiKey, $userAgent);
                break;
            default:
                throw new \Exception('Entity not managed or do not exist: '.$entityName);
                break;
        }

        return $oystClientAPI;
    }

    /**
     * Create a Guzzle Client
     *
     * @param string $entityName
     * @param string $env
     * @param string $url
     *
     * @return Client
     */
    private static function createClient($entityName, $env, $url)
    {
        $configurationLoader = static::getApiConfiguration($entityName, $env, $url);
        $description = static::getApiDescription($entityName);

        $baseUrl = $configurationLoader->getApiUrl();

        if (!in_array($entityName, array(static::ENTITY_PAYMENT))) {
            $baseUrl .= '/'.$description->getApiVersion();
        }

        $client = new Client($baseUrl);
        $client->setDescription($description);

        return $client;
    }

    /**
     * Create the API Configuration by loading parameters according to the env or the url passed in parameters
     *
     * @param string $entity
     * @param string $env
     * @param string $url
     *
     * @return OystApiConfiguration
     */
    private static function getApiConfiguration($entity, $env, $url)
    {
        $parametersFile = __DIR__.'/../Config/parameters.yml';
        $parserYml      = new Parser();
        $configuration  = new OystApiConfiguration($parserYml, $parametersFile);
        $configuration->load();
        $configuration->setEnvironment($env);
        $configuration->setUrl($url);
        $configuration->setEntity($entity);

        return $configuration;
    }

    /**
     * Returns a Service Description by loading the right JSON file according to the entityName passed in parameters
     *
     * @param string $entityName
     *
     * @return ServiceDescription
     */
    private static function getApiDescription($entityName)
    {
        $configurationFile = __DIR__.'/../Config/description_'.$entityName.'.json';
        $description       = ServiceDescription::factory($configurationFile);

        return $description;
    }
}
