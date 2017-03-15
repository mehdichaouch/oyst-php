<?php

/**
 * Class Product
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class Product implements ArrayableInterface
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
     * @var Tax
     */
    private $includingTax;

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
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
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
     */
    public function setActive($active)
    {
        $this->active = $active;
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
     */
    public function setMaterialized($materialized)
    {
        $this->materialized = $materialized;
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
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
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
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @param string $tag
     */
    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    /**
     * @return Tax
     */
    private function getIncludingTax()
    {
        return $this->includingTax;
    }

    /**
     * @param Tax $includingTax
     */
    public function setIncludingTax($includingTax)
    {
        $this->includingTax = $includingTax;
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
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return array
     */
    private function getCategories()
    {
        return CollectionHelper::collectionToArray($this->categories);
    }

    /**
     * @param array $categories An array of Category
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @param Category $category
     */
    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
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
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return array
     */
    private function getShipments()
    {
        return CollectionHelper::collectionToArray($this->shipments);
    }

    /**
     * Array of Shipment
     *
     * @param array $shipments
     */
    public function setShipments($shipments)
    {
        $this->shipments = $shipments;
    }

    /**
     * @param Shipment $shipment
     */
    public function addShipment(Shipment $shipment)
    {
        $this->shipments[] = $shipment;
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
     */
    public function setSize($size)
    {
        $this->size = $size;
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
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
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
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
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
     */
    public function setDiscounted($discounted)
    {
        $this->discounted = $discounted;
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
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
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
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;
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
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
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
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @param string $url
     */
    public function addImage($url)
    {
        $this->images[] = $url;
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
     */
    public function setInformation($information)
    {
        $this->information = $information;
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
     */
    public function setRelatedProducts($relatedProducts)
    {
        $this->relatedProducts = $relatedProducts;
    }

    /**
     * @param string $ref
     */
    public function addRelatedProduct($ref)
    {
        $this->relatedProducts[] = $ref;
    }

    /**
     * @return array
     */
    private function getVariations()
    {
        return CollectionHelper::collectionToArray($this->variations);
    }

    /**
     * Array of Product
     *
     * @param array $variations
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;
    }

    /**
     * @param Product $variation
     */
    public function addVariation(Product $variation)
    {
        $this->variations[] = $variation;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $product = array(
            'reference'                   => $this->getRef(),
            'is_active'                   => $this->isActive(),
            'is_materialized'             => $this->isMaterialized(),
            'title'                       => $this->getTitle(),
            'condition'                   => $this->getCondition(),
            'short_description'           => $this->getShortDescription(),
            'description'                 => $this->getDescription(),
            'tags'                        => $this->getTags(),
            'amount_including_taxes'      => $this->getIncludingTax(),
            'url'                         => $this->getUrl(),
            'categories'                  => $this->getCategories(),
            'manufacturer'                => $this->getManufacturer(),
            'shipments'                   => $this->getShipments(),
            'size'                        => $this->getSize(),
            'available_quantity'          => $this->getAvailableQuantity(),
            'weight'                      => $this->getWeight(),
            'is_discounted'               => $this->isDiscounted(),
            'ean'                         => $this->getEan(),
            'upc'                         => $this->getUpc(),
            'isbn'                        => $this->getIsbn(),
            'images'                      => $this->getImages(),
            'informations'                => $this->getInformation(),
            'related_products'            => $this->getRelatedProducts(),
            'variations'                  => $this->getVariations(),
        );

        return $product;
    }
}
