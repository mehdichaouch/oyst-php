<?php

/**
 * Class User
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class User implements ArrayableInterface
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $language;

    /**
     * @var array
     */
    private $additionalData;

    /**
     * @var array
     */
    private $addresses;

    /**
     * @var array
     */
    private $billingAddresses;

    public function __construct()
    {
        $this->addresses        = array();
        $this->billingAddresses = array();
    }

    /**
     * @return string
     */
    private function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    private function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    private function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    private function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    private function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return array
     */
    private function getAdditionalData()
    {
        return $this->additionalData;
    }

    /**
     * @param array $additionalData Custom array
     */
    public function setAdditionalData($additionalData)
    {
        $this->additionalData = $additionalData;
    }

    /**
     * @return array
     */
    private function getAddresses()
    {
        return CollectionHelper::collectionToArray($this->addresses);
    }

    /**
     * @param array $addresses An array of Address
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @param Address $address
     */
    public function addAddress(Address $address)
    {
        $this->addresses[] = $address;
    }

    /**
     * @return array
     */
    private function getBillingAddresses()
    {
        return CollectionHelper::collectionToArray($this->billingAddresses);
    }

    /**
     * @param array $billingAddresses An array of Address
     */
    public function setBillingAddresses($billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;
    }

    /**
     * @param Address $billingAddress
     */
    public function addBillingAddress(Address $billingAddress)
    {
        $this->billingAddresses[] = $billingAddress;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $user = array(
            'first_name'        => $this->getFirstName(),
            'last_name'         => $this->getLastName(),
            'language'          => $this->getLanguage(),
            'email'             => $this->getEmail(),
            'phone'             => $this->getPhone(),
            'additional_data'   => $this->getAdditionalData(),
            'addresses'         => $this->getAddresses(),
            'billing_addresses' => $this->getBillingAddresses(),
        );

        return $user;
    }
}
