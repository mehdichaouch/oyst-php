<?php

class Combination
{
    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Tax
     */
    private $excludingTax;

    /**
     * @var Tax
     */
    private $includingTax;

    /**
     * @var Tax
     */
    private $saleExcludingTax;

    /**
     * @var Tax
     */
    private $saleIncludingTax;

    /**
     * @var array<Shipment>
     */
    private $shipments;

    /**
     * @var int
     */
    private $vat;

    /**
     * @var int
     */
    private $availableQuantity;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var int
     */
    private $minimumOrderableQuantity;

    /**
     * @var string
     */
    //private $options;

    /**
     * @var array<Image>
     */
    private $images;

    /**
     * @var string
     */
    private $warranty;

    /**
     * @var string
     */
    private $pg;

    /**
     * @var string
     */
    private $ean;

    /**
     * @var string
     */
    private $upc;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var \DateTime
     */
    private $startAt;

    /**
     * @var \DateTime
     */
    private $endAt;

    /**
     * @return array
     */
    public function toArray()
    {
        $combination = array(

        );

        return $combination;
    }
}
