<?php

require_once(__DIR__.'/../helper/APIHelper.php');

/**
 * Class PaymentAPI
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class PaymentAPI extends APIHelper
{
    /**
     * Payment API
     *
     * @param $data
     *
     * @return array
     */
    public function payment($data)
    {
        $url = 'payments';

        return $this->send('POST', $url, $data);
    }
}
