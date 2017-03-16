<?php

require_once(__DIR__.'/../../autoload.php');

/**
 * Class OystCatalogAPI
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OystCatalogAPI extends OystAPIHelper
{
    /**
     * POST /products
     *
     * @param array|OystProduct $postData An array of Product or a Product
     *
     * @return array
     */
    public function postProduct($postData)
    {
        $url  = 'products';
        $data = array();

        if ($postData instanceof OystProduct) {
            $product = $postData->toArray();

            $data = array('product' => $product);
        } else {
            $products = array();

            /** @var OystArrayInterface $product */
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
     * @param OystProduct $product
     *
     * @return array
     */
    public function putProduct(OystProduct $product)
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
