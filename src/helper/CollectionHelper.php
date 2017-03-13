<?php

/**
 * Class CollectionHelper
 *
 * PHP version 5.2
 *
 * @category Oyst
 * @author   Oyst <dev@oyst.com>
 * @license  Copyright 2017, Oyst
 * @link     http://www.oyst.com
 */
class CollectionHelper
{
    /**
     * @param $collection
     *
     * @return array
     */
    static public function collectionToArray($collection)
    {
        $data = array();

        /** @var ArrayableInterface $element */
        foreach ($collection as $element) {
            $data[] = $element->toArray();
        }

        return $data;
    }
}
