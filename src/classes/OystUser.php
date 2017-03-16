<?php

require_once(__DIR__.'/../../autoload.php');

/**
 * Class OystUser
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OystUser implements OystArrayInterface
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
     *
     * @return OystUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
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
     *
     * @return OystUser
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
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
     *
     * @return OystUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     *
     * @return OystUser
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
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
     *
     * @return OystUser
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
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
     *
     * @return OystUser
     */
    public function setAdditionalData($additionalData)
    {
        $this->additionalData = $additionalData;

        return $this;
    }

    /**
     * @return array
     */
    private function getAddresses()
    {
        return OystCollectionHelper::collectionToArray($this->addresses);
    }

    /**
     * @param array $addresses An array of Address
     *
     * @return OystUser
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @param OystAddress $address
     *
     * @return OystUser
     */
    public function addAddress(OystAddress $address)
    {
        $this->addresses[] = $address;

        return $this;
    }

    /**
     * @return array
     */
    private function getBillingAddresses()
    {
        return OystCollectionHelper::collectionToArray($this->billingAddresses);
    }

    /**
     * @param array $billingAddresses An array of Address
     *
     * @return OystUser
     */
    public function setBillingAddresses($billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;

        return $this;
    }

    /**
     * @param OystAddress $billingAddress
     *
     * @return OystUser
     */
    public function addBillingAddress(OystAddress $billingAddress)
    {
        $this->billingAddresses[] = $billingAddress;

        return $this;
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
