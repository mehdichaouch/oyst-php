<?php

class Product
{
    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $merchantRef;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var bool
     */
    private $materialized;

    /**
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
    private $meta;

    /**
     * @var array
     */
    private $tags;

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
     * @var int
     */
    private $minimumOrderableQuantity;

    /**
     * @var string
     */
    private $outStockMessage;

    /**
     * @var string
     */
    private $inStockMessage;

    /**
     * @var bool
     */
    private $orderableOutStock;

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
    private $combinations;

    public function __construct()
    {
        $this->combinations     = array();
        $this->excludingTax     = array();
        $this->includingTax     = array();
        $this->saleExcludingTax = array();
        $this->saleIncludingTax = array();
        $this->categories       = array();
        $this->shipments        = array();
        $this->tags             = array();
        $this->images           = array();
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
     * @return string
     */
    private function getMerchantRef()
    {
        return $this->merchantRef;
    }

    /**
     * @param string $merchantRef
     */
    public function setMerchantRef($merchantRef)
    {
        $this->merchantRef = $merchantRef;
    }

    /**
     * @return bool
     */
    public function isActive()
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
    public function isMaterialized()
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
     * Either 'new', 'reused' or 'refurbished'
     *
     * @param string $condition
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
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Custom array
     *
     * @param array $meta
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return array
     */
    private function getTags()
    {
        return $this->tags;
    }

    /**
     * Array of string
     *
     * @param array $tags
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
        return $this->collectionToArray($this->categories);
    }

    /**
     * Array of Combination
     *
     * @param array $categories
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
        return $this->collectionToArray($this->shipments);
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
     * @return int
     */
    private function getMinimumOrderableQuantity()
    {
        return $this->minimumOrderableQuantity;
    }

    /**
     * @param int $minimumOrderableQuantity
     */
    public function setMinimumOrderableQuantity($minimumOrderableQuantity)
    {
        $this->minimumOrderableQuantity = $minimumOrderableQuantity;
    }

    /**
     * @return string
     */
    private function getOutStockMessage()
    {
        return $this->outStockMessage;
    }

    /**
     * @param string $outStockMessage
     */
    public function setOutStockMessage($outStockMessage)
    {
        $this->outStockMessage = $outStockMessage;
    }

    /**
     * @return string
     */
    private function getInStockMessage()
    {
        return $this->inStockMessage;
    }

    /**
     * @param string $inStockMessage
     */
    public function setInStockMessage($inStockMessage)
    {
        $this->inStockMessage = $inStockMessage;
    }

    /**
     * @return bool
     */
    private function isOrderableOutStock()
    {
        return $this->orderableOutStock;
    }

    /**
     * @param bool $orderableOutStock
     */
    public function setOrderableOutStock($orderableOutStock)
    {
        $this->orderableOutStock = $orderableOutStock;
    }

    /**
     * @return array
     */
    private function getImages()
    {
        return $this->collectionToArray($this->images);
    }

    /**
     * Array of Image
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
        $this->images[] = new Image($url);
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
    private function getCombinations()
    {
        return $this->collectionToArray($this->combinations);
    }

    /**
     * Array of Combination
     *
     * @param array $combinations
     */
    public function setCombinations($combinations)
    {
        $this->combinations = $combinations;
    }

    /**
     * @param Combination $combination
     */
    public function addCombination(Combination $combination)
    {
        $this->combinations[] = $combination;
    }

    /**
     * @param $collection
     *
     * @return array
     */
    private function collectionToArray($collection)
    {
        $data = array();

        foreach ($collection as $element) {
            $data[] = $element->toArray();
        }

        return $data;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $product = array(
            'reference'                   => $this->getRef(),
            'merchant_reference'          => $this->getMerchantRef(),
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
            'meta'                        => $this->getMeta(),
            'url'                         => $this->getUrl(),
            'categories'                  => $this->getCategories(),
            'category'                    => $this->getMainCategory(),
            'manufacturer'                => $this->getManufacturer(),
            'shipments'                   => $this->getShipments(),
            'available_quantity'          => $this->getAvailableQuantity(),
            'minimum_orderable_quantity'  => $this->getMinimumOrderableQuantity(),
            'outstock_message'            => $this->getOutStockMessage(),
            'instock_message'             => $this->getInStockMessage(),
            'is_orderable_outstock'       => $this->isOrderableOutStock(),
            'images'                      => $this->getImages(),
            'informations'                => $this->getInformation(),
            'skus'                        => $this->getCombinations(),
        );

        return $product;
    }
}
