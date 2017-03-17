<?php

/**
 * Class OystProduct
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OystProduct implements OystArrayInterface
{
    /**
     * Mandatory
     *
     * @var string
     */
    private $ref;

    /**
     * Optional
     *
     * @var bool
     */
    private $active;

    /**
     * Optional
     *
     * @var bool
     */
    private $materialized;

    /**
     * Mandatory
     *
     * @var string
     */
    private $title;

    /**
     * Optional
     *
     * @var string
     */
    private $condition;

    /**
     * Optional
     *
     * @var string
     */
    private $shortDescription;

    /**
     * Optional
     *
     * @var string
     */
    private $description;

    /**
     * Optional
     *
     * @var array
     */
    private $tags;

    /**
     * Mandatory
     *
     * @var OystPrice
     */
    private $amountIncludingTax;

    /**
     * Optional
     *
     * @var string
     */
    private $url;

    /**
     * Mandatory
     *
     * @var array
     */
    private $categories;

    /**
     * Optional
     *
     * @var string
     */
    private $manufacturer;

    /**
     * Optional
     *
     * @var array
     */
    private $shipments;

    /**
     * Optional
     *
     * @var string
     */
    private $size;

    /**
     * Optional
     *
     * @var int
     */
    private $availableQuantity;

    /**
     * Optional
     *
     * @var string
     */
    private $weight;

    /**
     * Optional
     *
     * @var bool
     */
    private $discounted;

    /**
     * Optional
     *
     * @var string
     */
    private $ean;

    /**
     * Optional
     *
     * @var string
     */
    private $upc;

    /**
     * Optional
     *
     * @var string
     */
    private $isbn;

    /**
     * Mandatory
     *
     * @var array
     */
    private $images;

    /**
     * Optional
     *
     * @var array
     */
    private $information;

    /**
     * Optional
     *
     * @var array
     */
    private $relatedProducts;

    /**
     * Optional
     *
     * @var array
     */
    private $variations;

    public function __construct()
    {
        $this->condition       = 'new';
        $this->discounted      = false;
        $this->categories      = array();
        $this->shipments       = array();
        $this->tags            = array();
        $this->images          = array();
        $this->relatedProducts = array();
        $this->variations      = array();
    }

    /**
     * @return string
     */
    private function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     *
     * @return OystProduct
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return bool
     */
    private function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return OystProduct
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return bool
     */
    private function isMaterialized()
    {
        return $this->materialized;
    }

    /**
     * @param bool $materialized
     *
     * @return OystProduct
     */
    public function setMaterialized($materialized)
    {
        $this->materialized = $materialized;

        return $this;
    }

    /**
     * @return string
     */
    private function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return OystProduct
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    private function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param string $condition Either 'new', 'reused' or 'refurbished'
     *
     * @return OystProduct
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @return string
     */
    private function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     *
     * @return OystProduct
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * @return string
     */
    private function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return OystProduct
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return array
     */
    private function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags An array of string
     *
     * @return OystProduct
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return OystProduct
     */
    public function addTag($tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * @return OystPrice
     */
    private function getAmountIncludingTax()
    {
        return $this->amountIncludingTax;
    }

    /**
     * @param OystPrice $amountIncludingTax
     *
     * @return OystProduct
     */
    public function setAmountIncludingTax($amountIncludingTax)
    {
        $this->amountIncludingTax = $amountIncludingTax;

        return $this;
    }

    /**
     * @return string
     */
    private function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return OystProduct
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return array
     */
    private function getCategories()
    {
        return OystCollectionHelper::collectionToArray($this->categories);
    }

    /**
     * @param array $categories An array of Category
     *
     * @return OystProduct
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @param OystCategory $category
     *
     * @return OystProduct
     */
    public function addCategory(OystCategory $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * @return string
     */
    private function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     *
     * @return OystProduct
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * @return array
     */
    private function getShipments()
    {
        return OystCollectionHelper::collectionToArray($this->shipments);
    }

    /**
     * Array of Shipment
     *
     * @param array $shipments
     *
     * @return OystProduct
     */
    public function setShipments($shipments)
    {
        $this->shipments = $shipments;

        return $this;
    }

    /**
     * @param OystShipment $shipment
     *
     * @return OystProduct
     */
    public function addShipment(OystShipment $shipment)
    {
        $this->shipments[] = $shipment;

        return $this;
    }

    /**
     * @return string
     */
    private function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     *
     * @return OystProduct
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    private function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @param int $availableQuantity
     *
     * @return OystProduct
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }

    /**
     * @return string
     */
    private function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     *
     * @return OystProduct
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return bool
     */
    private function isDiscounted()
    {
        return $this->discounted;
    }

    /**
     * @param bool $discounted
     *
     * @return OystProduct
     */
    public function setDiscounted($discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @return string
     */
    private function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     *
     * @return OystProduct
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return string
     */
    private function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param string $upc
     *
     * @return OystProduct
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * @return string
     */
    private function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     *
     * @return OystProduct
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * @return array
     */
    private function getImages()
    {
        return $this->images;
    }

    /**
     * Array of string
     *
     * @param array $images
     *
     * @return OystProduct
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return OystProduct
     */
    public function addImage($url)
    {
        $this->images[] = $url;

        return $this;
    }

    /**
     * @return array
     */
    private function getInformation()
    {
        return $this->information;
    }

    /**
     * Custom array
     *
     * @param array $information
     *
     * @return OystProduct
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * @return array
     */
    private function getRelatedProducts()
    {
        return $this->relatedProducts;
    }

    /**
     * @param array $relatedProducts
     *
     * @return OystProduct
     */
    public function setRelatedProducts($relatedProducts)
    {
        $this->relatedProducts = $relatedProducts;

        return $this;
    }

    /**
     * @param string $ref
     *
     * @return OystProduct
     */
    public function addRelatedProduct($ref)
    {
        $this->relatedProducts[] = $ref;

        return $this;
    }

    /**
     * @return array
     */
    private function getVariations()
    {
        return OystCollectionHelper::collectionToArray($this->variations);
    }

    /**
     * Array of Product
     *
     * @param array $variations
     *
     * @return OystProduct
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;

        return $this;
    }

    /**
     * @param OystProduct $variation
     *
     * @return OystProduct
     */
    public function addVariation(OystProduct $variation)
    {
        $this->variations[] = $variation;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $product = array(
            'reference'              => $this->getRef(),
            'is_active'              => $this->isActive(),
            'is_materialized'        => $this->isMaterialized(),
            'title'                  => $this->getTitle(),
            'condition'              => $this->getCondition(),
            'short_description'      => $this->getShortDescription(),
            'description'            => $this->getDescription(),
            'tags'                   => $this->getTags(),
            'amount_including_taxes' => $this->getAmountIncludingTax(),
            'url'                    => $this->getUrl(),
            'categories'             => $this->getCategories(),
            'manufacturer'           => $this->getManufacturer(),
            'shipments'              => $this->getShipments(),
            'size'                   => $this->getSize(),
            'available_quantity'     => $this->getAvailableQuantity(),
            'weight'                 => $this->getWeight(),
            'is_discounted'          => $this->isDiscounted(),
            'ean'                    => $this->getEan(),
            'upc'                    => $this->getUpc(),
            'isbn'                   => $this->getIsbn(),
            'images'                 => $this->getImages(),
            'informations'           => $this->getInformation(),
            'related_products'       => $this->getRelatedProducts(),
            'variations'             => $this->getVariations(),
        );

        return $product;
    }
}
