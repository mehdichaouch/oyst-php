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
     * Catalog API
     *
     * @param $data
     *
     * @return array
     */
    public function postCatalog($data)
    {
        $url = 'products';

        return $this->send('POST', $url, $data);
    }

    /**
     * Catalog API
     *
     * @param $data
     *
     * @return array
     */
    public function putCatalog($data)
    {
        $url = 'products';

        return $this->send('PUT', $url, $data);
    }

    /**
     * Catalog API
     *
     * @param $data
     *
     * @return array
     */
    public function productPostRequest($data)
    {
        $url  = 'products';
        $data = array('products' => $data);

        return $this->send('POST', $url, $data);
    }
}
