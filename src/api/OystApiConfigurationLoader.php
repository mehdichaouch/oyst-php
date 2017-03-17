<?php

abstract class OystApiConfigurationLoader extends OystConfigurationLoader
{
    const ENV_PROD = 'prod';

    const ENV_DEV = 'dev';

    /** @var  string */
    private $environment = self::ENV_PROD;

    /**
     * @return array
     */
    final public function getParameters()
    {
        return parent::getParameters()['api'];
    }

    /**
     * @return array
     */
    final public function getEndpoints()
    {
        return $this->getParameters()['endpoints'];
    }

    /**
     * @return array
     */
    final public function getCatalogEndpoints()
    {
        return $this->getEndpoints()['catalog'];
    }

    /**
     * @return array
     */
    final public function getOrderEndpoints()
    {
        return $this->getEndpoints()['order'];
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param $environment
     * @return $this
     */
    public function setEnvironment($environment)
    {
        if (in_array($environment, [self::ENV_PROD, self::ENV_DEV])) {
            $this->environment = $environment;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApiUrl()
    {
        return $this->getParameters()[$this->environment]['url'];
    }
}