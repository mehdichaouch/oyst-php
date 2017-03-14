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
     * @var string
     */
    private $userAgent;

    /**
     * @param string $apiEndPoint
     * @param string $apiKey
     * @param string $userAgent
     */
    final public function __construct($apiEndPoint, $apiKey, $userAgent)
    {
        $this->apiEndPoint = $apiEndPoint;
        $this->apiKey      = $apiKey;
        $this->userAgent   = $userAgent;
    }

    /**
     * @param string $method
     * @param string $url
     * @param array  $data
     *
     * @return mixed $response The result on success, false on failure
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
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: '.($data ? strlen($dataJson) : 0),
            'User-Agent: '.$this->userAgent,
            'Authorization: Bearer '.$this->apiKey
        ));

        if ($data && in_array($method, array("POST", "PUT"))) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dataJson);
        }

        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }
}
