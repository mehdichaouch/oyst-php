<?php

require_once(__DIR__.'/../helper/APIHelper.php');

/**
 * Class OrderAPI
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OrderAPI extends APIHelper
{
    /**
     * GET /orders
     *
     * @param $data
     *
     * @return array
     */
    public function getOrder($orderId)
    {
        $url = 'orders/'.$orderId;

        return $this->send('GET', $url);
    }

    /**
     * PUT /orders/{id}
     *
     * @param $data
     *
     * @return array
     */
    public function putOrder($data)
    {
        $url = 'orders/'.$data['oyst_order_id'];

        unset($data['oyst_order_id']);

        return $this->send('PUT', $url, $data);
    }
}
