<?php

class Product
{
    /**
     * @param array $details
     * @param array $taxes
     * @param array $shipments
     * @param array $combinations
     * @param array $images
     * @param array $info
     * @param array $stock
     * @param array $tagsAndCategories
     *
     * @return array
     */
    static public function getAllData($details, $taxes, $shipments, $combinations, $images, $info, $stock, $tagsAndCategories)
    {
        $product = array(
            'shipments'    => $shipments,
            'skus'         => $combinations,
            'images'       => $images,
            'informations' => $info,
        );

        $product = array_merge($product, $details, $taxes, $stock, $tagsAndCategories);

        return $product;
    }

    /**
     * @param string $ref
     * @param string $merchantRef
     * @param bool   $isActive
     * @param bool   $isMaterialized
     * @param string $title
     * @param string $condition
     * @param string $shortDescription
     * @param string $description
     * @param string $manufacturer
     * @param string $url
     *
     * @return array
     */
    static public function getDetails($ref, $merchantRef, $isActive, $isMaterialized, $title, $condition, $shortDescription, $description, $manufacturer, $url)
    {
        $info = array(
            'reference'          => $ref,
            'merchant_reference' => $merchantRef,
            'is_active'          => (bool) $isActive,
            'is_materialized'    => (bool) $isMaterialized,
            'title'              => $title,
            'condition'          => $condition,
            'short_description'  => $shortDescription,
            'description'        => $description,
            'manufacturer'       => $manufacturer,
            'url'                => $url,
        );

        return $info;
    }

    /**
     * @param array $tags
     * @param array $categories
     * @param array $mainCategory
     *
     * @return array
     */
    static public function getTagsAndCategories($tags, $categories, $mainCategory)
    {
        $tagsAndCategories = array(
            'categories' => $categories,
            'category'   => $mainCategory,
            'tags'       => $tags,
        );

        return $tagsAndCategories;
    }

    /**
     * @param string $currency
     * @param int    $amountExcluding
     * @param int    $amountIncluding
     * @param int    $saleExcluding
     * @param int    $saleIncluding
     *
     * @return array
     */
    static public function getTaxes($currency, $amountExcluding, $amountIncluding, $saleExcluding, $saleIncluding, $vat)
    {
        $taxes = array(
            'amount_excluding_taxes' => array(
                'value'    => $amountExcluding,
                'currency' => $currency,
            ),
            'amount_including_taxes' => array(
                'value'    => $amountIncluding,
                'currency' => $currency,
            ),
            'sale_amount_excluding_taxes' => array(
                'value'    => $saleExcluding,
                'currency' => $currency,
            ),
            'sale_amount_including_taxes' => array(
                'value'    => $saleIncluding,
                'currency' => $currency,
            ),
            'vat' => $vat
        );

        return $taxes;
    }

    /**
     * @param string $countryName
     * @param string $carrierName
     * @param int    $delay
     * @param string $method
     * @param int    $quantity
     * @param int    $amount
     * @param string $currency
     * @param int    $vat
     *
     * @return array
     */
    static public function getShipment($countryName, $carrierName, $delay, $method, $quantity, $amount, $currency, $vat)
    {
        $shipment = array(
            'area'            => $countryName,
            'carrier'         => $carrierName,
            'delay'           => $delay,
            'method'          => $method,
            'quantity'        => $quantity,
            'vat'             => $vat,
            'shipment_amount' => array(
                'value'    => $amount,
                'currency' => $currency,
            ),
        );

        return $shipment;
    }

    /**
     * @param string $ref
     * @param string $title
     * @param int    $quantity
     * @param string $ean
     * @param string $upc
     * @param int    $minimumQuantity
     * @param string $weight
     * @param int    $vat
     * @param array  $taxes
     * @param array  $shipments
     * @param array  $images
     *
     * @return array
     */
    static public function getCombination($ref, $title, $quantity, $ean, $upc, $minimumQuantity, $weight, $vat, $taxes, $shipments, $images)
    {
        $combination = array(
            'reference'                  => $ref,
            'title'                      => $title,
            'vat'                        => $vat,
            'available_quantity'         => $quantity,
            'weight'                     => $weight,
            'minimum_orderable_quantity' => $minimumQuantity,
            'shipments'                  => $shipments,
            'images'                     => $images,
            'ean'                        => $ean,
            'upc'                        => $upc,
        );

        $combination = array_merge($combination, $taxes);

        return $combination;
    }

    /**
     * @param int    $availableQuantity
     * @param int    $minOrderableQuantity
     * @param string $outStockMessage
     * @param string $inStockMessage
     * @param bool   $isOrderableOutStock
     *
     * @return array
     */
    static public function getStock($availableQuantity, $minOrderableQuantity, $outStockMessage, $inStockMessage, $isOrderableOutStock)
    {
        $stock = array(
            'available_quantity'         => (int) $availableQuantity,
            'minimum_orderable_quantity' => (int) $minOrderableQuantity,
            'outstock_message'           => $outStockMessage,
            'instock_message'            => $inStockMessage,
            'is_orderable_outstock'      => (bool) $isOrderableOutStock,
        );

        return $stock;
    }

    /**
     * @param $urls
     *
     * @return array
     */
    static public function getImages($urls)
    {
        $images = array_map(function($url) {
            return array('url' => $url);
        }, $urls);

        return $images;
    }

    /**
     * @param array  $titles
     * @param string $ref
     *
     * @return array
     */
    static public function getCategory($categoryTitles, $ref)
    {
        $category = array(
            'titles'    => $categoryTitles,
            'reference' => $ref,
        );

        return $category;
    }

    /**
     * @param string $name
     * @param string $lang
     *
     * @return array
     */
    static public function getCategoryTitle($name, $lang)
    {
        $categoryTitle = array(
            'name'     => $name,
            'language' => $lang,
        );

        return $categoryTitle;
    }
}
