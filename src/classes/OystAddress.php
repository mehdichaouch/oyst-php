<?php

require_once(__DIR__.'/../../autoload.php');

/**
 * Class OystAddress
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class OystAddress implements OystArrayInterface
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
    private $companyName;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $complementary;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $country;

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
     * @return OystAddress
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
     * @return OystAddress
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    private function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return OystAddress
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    private function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return OystAddress
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    private function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     *
     * @return OystAddress
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    private function getComplementary()
    {
        return $this->complementary;
    }

    /**
     * @param string $complementary
     *
     * @return OystAddress
     */
    public function setComplementary($complementary)
    {
        $this->complementary = $complementary;

        return $this;
    }

    /**
     * @return string
     */
    private function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return OystAddress
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    private function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     *
     * @return OystAddress
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * @return string
     */
    private function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     *
     * @return OystAddress
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return string
     */
    private function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return OystAddress
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $address = array(
            'first_name'    => $this->getFirstName(),
            'last_name'     => $this->getLastName(),
            'company_name'  => $this->getCompanyName(),
            'label'         => $this->getLabel(),
            'street'        => $this->getStreet(),
            'complementary' => $this->getComplementary(),
            'postcode'      => $this->getPostCode(),
            'city'          => $this->getCity(),
            'region'        => $this->getRegion(),
            'country'       => $this->getCountry(),
        );

        return $address;
    }
}
