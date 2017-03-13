<?php

/**
 * Class Tax
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class Tax implements ArrayableInterface
{
    /**
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $currency;

    /**
     * @param int    $value
     * @param string $currency
     */
    public function __construct($value, $currency)
    {
        $this->value    = $value;
        $this->currency = $currency;
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

    /**
     * @return array
     */
    public function toArray()
    {
        $tax = array(
            'value'    => $this->getValue(),
            'currency' => $this->getCurrency()
        );

        return $tax;
    }
}
