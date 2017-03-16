<?php

require_once(__DIR__.'/../../autoload.php');

/**
 * Class OystOrder
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OystOrder
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $productReference;

    /**
     * @var string
     */
    private $skuReference;

    /**
     * @var int
     */
    private $productAmount;

    /**
     * @var string
     */
    private $productCurrency;

    /**
     * @var int
     */
    private $orderAmount;

    /**
     * @var string
     */
    private $orderCurrency;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $currentStatus;

    /**
     * @var OystShipment
     */
    private $shipment;

    /**
     * @var array
     */
    private $statusHistoric;

    /**
     * @var OystUser
     */
    private $user;

    /**
     * @var string
     */
    private $cpa;

    /**
     * @var string
     */
    private $commissionValue;

    /**
     * @var string
     */
    private $commissionCurrency;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->id               = OystObjectHelper::getValue($data['id']);
        $this->productReference = OystObjectHelper::getValue($data['reference']);
        $this->skuReference     = OystObjectHelper::getValue($data['sku_reference']);
        $this->productAmount    = OystObjectHelper::getValue($data['product_amount']['value']);
        $this->productCurrency  = OystObjectHelper::getValue($data['product_amount']['currency']);
        $this->orderAmount      = OystObjectHelper::getValue($data['order_amount']['value']);
        $this->orderCurrency    = OystObjectHelper::getValue($data['order_amount']['currency']);
        $this->currentStatus    = OystObjectHelper::getValue($data['current_status']);
        $this->createdAt        = OystObjectHelper::getDate($data['created_at']);
        $this->updatedAt        = OystObjectHelper::getDate($data['updated_at']);
        $this->quantity         = OystObjectHelper::getValue($data['quantity']);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * @param string $productReference
     */
    public function setProductReference($productReference)
    {
        $this->productReference = $productReference;
    }

    /**
     * @return string
     */
    public function getSkuReference()
    {
        return $this->skuReference;
    }

    /**
     * @param string $skuReference
     */
    public function setSkuReference($skuReference)
    {
        $this->skuReference = $skuReference;
    }

    /**
     * @return int
     */
    public function getProductAmount()
    {
        return $this->productAmount;
    }

    /**
     * @param int $productAmount
     */
    public function setProductAmount($productAmount)
    {
        $this->productAmount = $productAmount;
    }

    /**
     * @return string
     */
    public function getProductCurrency()
    {
        return $this->productCurrency;
    }

    /**
     * @param string $productCurrency
     */
    public function setProductCurrency($productCurrency)
    {
        $this->productCurrency = $productCurrency;
    }

    /**
     * @return int
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * @param int $orderAmount
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
    }

    /**
     * @return string
     */
    public function getOrderCurrency()
    {
        return $this->orderCurrency;
    }

    /**
     * @param string $orderCurrency
     */
    public function setOrderCurrency($orderCurrency)
    {
        $this->orderCurrency = $orderCurrency;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param string $currentStatus
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus = $currentStatus;
    }

    /**
     * @return OystShipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param OystShipment $shipment
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
    }

    /**
     * @return array
     */
    public function getStatusHistoric()
    {
        return $this->statusHistoric;
    }

    /**
     * @param array $statusHistoric
     */
    public function setStatusHistoric($statusHistoric)
    {
        $this->statusHistoric = $statusHistoric;
    }

    /**
     * @return OystUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param OystUser $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getCpa()
    {
        return $this->cpa;
    }

    /**
     * @param string $cpa
     */
    public function setCpa($cpa)
    {
        $this->cpa = $cpa;
    }

    /**
     * @return string
     */
    public function getCommissionValue()
    {
        return $this->commissionValue;
    }

    /**
     * @param string $commissionValue
     */
    public function setCommissionValue($commissionValue)
    {
        $this->commissionValue = $commissionValue;
    }

    /**
     * @return string
     */
    public function getCommissionCurrency()
    {
        return $this->commissionCurrency;
    }

    /**
     * @param string $commissionCurrency
     */
    public function setCommissionCurrency($commissionCurrency)
    {
        $this->commissionCurrency = $commissionCurrency;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}