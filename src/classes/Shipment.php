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
    private $area;

    /**
     * @var string
     */
    private $carrier;

    /**
     * @var int
     */
    private $delay;

    /**
     * @var string
     */
    private $method;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $vat;

    /**
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $currency;

    /**
     * @return string
     */
    private function getArea()
    {
        return $this->area;
    }

    /**
     * @param string $area
     */
    public function setArea($area)
    {
        $this->area = $area;
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
     * @return int
     */
    private function getDelay()
    {
        return $this->delay;
    }

    /**
     * @param int $delay
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;
    }

    /**
     * @return string
     */
    private function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return int
     */
    private function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    private function getVat()
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return int
     */
    private function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
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

    public function toArray()
    {
        $shipment = array(
            'area'            => $this->getArea(),
            'carrier'         => $this->getCarrier(),
            'delay'           => $this->getDelay(),
            'method'          => $this->getMethod(),
            'quantity'        => $this->getQuantity(),
            'vat'             => $this->getVat(),
            'shipment_amount' => array(
                'value'    => $this->getValue(),
                'currency' => $this->getCurrency(),
            ),
        );

        return $shipment;
    }
}
