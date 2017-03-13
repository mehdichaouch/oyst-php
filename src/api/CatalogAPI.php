<?php

require_once(__DIR__.'/../helper/APIHelper.php');

/**
 * Class CatalogAPI
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class CatalogAPI extends APIHelper
{
    /**
     * POST /products
     *
     * @param array|Product $postData An array of Product or a Product
     *
     * @return array
     */
    public function postProduct($postData)
    {
        $url  = 'products';
        $data = array();

        if ($postData instanceof Product) {
            $product = $postData->toArray();

            $data = array('product' => $product);
        } else {
            $products = array();

            /** @var ArrayableInterface $product */
            foreach ($postData as $product) {
                $products[] = $product->toArray();
            }

            $data = array('products' => $products);
        }

        return $this->send('POST', $url, $data);
    }

    /**
     * PUT /products/{id}
     *
     * @param Product $product
     *
     * @return array
     */
    public function putProduct(Product $product)
    {
        $url  = 'products/'.$product->getId();
        $data = $product->toArray();

        return $this->send('PUT', $url, $data);
    }

    /**
     * DELETE /products/{id}
     *
     * @param string $productId
     *
     * @return array
     */
    public function deleteProduct($productId)
    {
        $url  = 'products/'.$productId;

        return $this->send('DELETE', $url);
    }
}
