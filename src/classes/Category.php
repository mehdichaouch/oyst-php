<?php

/**
 * Class Category
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class Category implements ArrayableInterface
{
    /**
     * @var string
     */
    private $ref;

    /**
     * @var array
     */
    private $titles;

    /**
     * @param string $ref
     */
    public function __construct($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    private function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return array
     */
    private function getTitles()
    {
        return $this->titles;
    }

    /**
     * @param string $name
     * @param string $lang
     */
    public function addTitle($name, $lang)
    {
        $this->titles[] = array(
            'name' => $name,
            'lang' => $lang
        );
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $category = array(
            'titles'    => $this->getTitles(),
            'reference' => $this->getRef()
        );

        return $category;
    }
}
