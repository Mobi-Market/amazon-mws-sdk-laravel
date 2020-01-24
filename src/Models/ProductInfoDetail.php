<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 22:40:38 UTC 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ProductInfoDetail.
 *
 * Properties:
 * <ul>
 *
 * <li>NumberOfItems: int</li>
 *
 * </ul>
 */
class ProductInfoDetail extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'NumberOfItems' => ['FieldValue' => null, 'FieldType' => 'int'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the NumberOfItems property.
     *
     * @return int numberOfItems
     */
    public function getNumberOfItems()
    {
        return $this->_fields['NumberOfItems']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfItems property.
     *
     * @param int numberOfItems
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfItems($value)
    {
        $this->_fields['NumberOfItems']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfItems is set.
     *
     * @return true if NumberOfItems is set
     */
    public function isSetNumberOfItems()
    {
        return null !== $this->_fields['NumberOfItems']['FieldValue'];
    }

    /**
     * Set the value of NumberOfItems, return this.
     *
     * @param numberOfItems
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfItems($value)
    {
        $this->setNumberOfItems($value);

        return $this;
    }
}
