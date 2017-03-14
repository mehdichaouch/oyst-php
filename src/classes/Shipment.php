<?php

/**
 * Class Shipment
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class Shipment implements ArrayableInterface
{
    /**
     * @var string
     */
    private $zone;

    /**
     * @var string
     */
    private $carrier;

    /**
     * @var string
     */
    private $delay;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $currency;

    /**
     * @return string
     */
    private function getZone()
    {
        return $this->zone;
    }

    /**
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * @return string
     */
    private function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param string $carrier
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * @return string
     */
    private function getDelay()
    {
        return $this->delay;
    }

    /**
     * @param string $delay
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;
    }

    /**
     * @return string
     */
    private function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    private function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $shipment = array(
            'zone'    => $this->getZone(),
            'carrier' => $this->getCarrier(),
            'delay'   => $this->getDelay(),
            'amount'  => array(
                'value'    => $this->getValue(),
                'currency' => $this->getCurrency(),
            ),
        );

        return $shipment;
    }
}
