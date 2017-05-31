<?php

namespace Oyst\Api;

use Symfony\Component\Yaml\Parser;

/**
 * Class OystApiConfiguration
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OystApiConfiguration
{
    /**
     * @var string
     */
    private $parametersFile;

    /**
     * @var Parser
     */
    private $yamlParser;

    /**
     * @var array
     */
    private $parameters;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $environment;

    /**
     * @var string
     */
    private $entity;

    /**
     * @param Parser $yamlParser
     * @param string $descriptionFile
     */
    public function __construct(Parser $yamlParser, $descriptionFile)
    {
        $this->parametersFile = $descriptionFile;
        $this->yamlParser     = $yamlParser;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param $environment
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        if (!isset($this->parameters['api']['path'][$entity])) {
            throw new \Exception('The entity "'.$entity.'" does not exist.');
        }

        $this->entity = $entity;

        return $this;
    }

    /**
     * @return string|null
     *
     * @throws \Exception
     */
    public function getApiUrl()
    {
        $apiUrl = '';

        if (!is_null($this->url)) {
            $apiUrl = trim($this->url, '/');
        } elseif (isset($this->parameters['api']['env'][$this->environment])) {
            $apiUrl = $this->parameters['api']['env'][$this->environment];
        } else {
            throw new \Exception('The url was not set for the environment '.$this->environment.'.');
        }

        $apiUrl .= '/'.trim($this->parameters['api']['path'][$this->entity], '/');

        return $apiUrl;
    }

    /**
     * Load the parameters
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function load()
    {
        if (!file_exists($this->parametersFile)) {
            throw new \Exception('Configuration file missing: '.$this->parametersFile);
        }

        if (!isset($this->parameters)) {
            $this->parameters = $this->yamlParser->parse(file_get_contents($this->parametersFile));
        }

        return $this;
    }
}
