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
     * @var string
     */
    private $condition;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @var string
     */
    private $description;

    /**
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
     * @var int
     */
    private $vat;

    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $categories;

    /**
     * @var Category
     */
    private $mainCategory;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var array
     */
    private $shipments;

    /**
     * @var int
     */
    private $availableQuantity;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var bool
     */
    private $discounted;

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
     * @var array
     */
    private $images;

    /**
     * @var array
     */
    private $information;

    /**
     * @var array
     */
    private $relatedProducts;

    /**
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
    private function getExcludingTax()
    {
        return $this->excludingTax;
    }

    /**
     * @param Tax $excludingTax
     */
    public function setExcludingTax($excludingTax)
    {
        $this->excludingTax = $excludingTax;
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
     * @return Tax
     */
    private function getSaleExcludingTax()
    {
        return $this->saleExcludingTax;
    }

    /**
     * @param Tax $saleExcludingTax
     */
    public function setSaleExcludingTax($saleExcludingTax)
    {
        $this->saleExcludingTax = $saleExcludingTax;
    }

    /**
     * @return Tax
     */
    private function getSaleIncludingTax()
    {
        return $this->saleIncludingTax;
    }

    /**
     * @param Tax $saleIncludingTax
     */
    public function setSaleIncludingTax($saleIncludingTax)
    {
        $this->saleIncludingTax = $saleIncludingTax;
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
     * @return Category
     */
    private function getMainCategory()
    {
        return $this->mainCategory;
    }

    /**
     * @param Category $mainCategory
     */
    public function setMainCategory($mainCategory)
    {
        $this->mainCategory = $mainCategory;
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
            'amount_excluding_taxes'      => $this->getExcludingTax(),
            'amount_including_taxes'      => $this->getIncludingTax(),
            'sale_amount_excluding_taxes' => $this->getSaleExcludingTax(),
            'sale_amount_including_taxes' => $this->getSaleIncludingTax(),
            'vat'                         => $this->getVat(),
            'url'                         => $this->getUrl(),
            'categories'                  => $this->getCategories(),
            'category'                    => $this->getMainCategory(),
            'manufacturer'                => $this->getManufacturer(),
            'shipments'                   => $this->getShipments(),
            'available_quantity'          => $this->getAvailableQuantity(),
            'is_discounted'               => $this->isDiscounted(),
            'images'                      => $this->getImages(),
            'informations'                => $this->getInformation(),
            'related_products'            => $this->getRelatedProducts(),
            'variations'                  => $this->getVariations(),
        );

        return $product;
    }
}
