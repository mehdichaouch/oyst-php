<?php

/**
 *
 * Class APIHelper
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
abstract class APIHelper
{
    /**
     * @var string
     */
    private $apiEndPoint;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @param string $apiEndPoint
     * @param string $apiKey
     */
    final public function __construct($apiEndPoint, $apiKey)
    {
        $this->apiEndPoint = $apiEndPoint;
        $this->apiKey      = $apiKey;
    }

    /**
     * @param string $method
     * @param string $url
     * @param array  $data
     *
     * @return array
     *
     * @throws Exception
     */
    final protected function send($method, $url, $data = array())
    {
        $targetUrl = trim($this->apiEndPoint, '/').'/'.trim($url, '/');
        $dataJson  = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $targetUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 2000);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: '.($data ? strlen($dataJson) : 0),
            'User-Agent: Oyst API',
            'Authorization: Bearer '.$this->apiKey
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        if ($data && in_array($method, array("POST", "PUT"))) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dataJson);
        }

        $response = curl_exec($ch);
        $info     = curl_getinfo($ch);

        curl_close($ch);

        if ($response === false) {
            throw new \Exception(curl_error($ch), $info['http_code']);
        }

        return $response;
    }
}
