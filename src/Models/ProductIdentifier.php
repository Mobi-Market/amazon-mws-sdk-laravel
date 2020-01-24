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
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2014-10-01
 * Generated: Wed Sep 12 07:35:28 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ProductIdentifier.
 *
 * Properties:
 * <ul>
 *
 * <li>Asin: string</li>
 * <li>Sku: string</li>
 * <li>Upc: string</li>
 *
 * </ul>
 */
class ProductIdentifier extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Asin' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Sku'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'Upc'  => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Asin property.
     *
     * @return string asin
     */
    public function getAsin()
    {
        return $this->_fields['Asin']['FieldValue'];
    }

    /**
     * Set the value of the Asin property.
     *
     * @param string asin
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAsin($value)
    {
        $this->_fields['Asin']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Asin is set.
     *
     * @return true if Asin is set
     */
    public function isSetAsin()
    {
        return null !== $this->_fields['Asin']['FieldValue'];
    }

    /**
     * Set the value of Asin, return this.
     *
     * @param asin
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAsin($value)
    {
        $this->setAsin($value);

        return $this;
    }

    /**
     * Get the value of the Sku property.
     *
     * @return string sku
     */
    public function getSku()
    {
        return $this->_fields['Sku']['FieldValue'];
    }

    /**
     * Set the value of the Sku property.
     *
     * @param string sku
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSku($value)
    {
        $this->_fields['Sku']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Sku is set.
     *
     * @return true if Sku is set
     */
    public function isSetSku()
    {
        return null !== $this->_fields['Sku']['FieldValue'];
    }

    /**
     * Set the value of Sku, return this.
     *
     * @param sku
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSku($value)
    {
        $this->setSku($value);

        return $this;
    }

    /**
     * Get the value of the Upc property.
     *
     * @return string upc
     */
    public function getUpc()
    {
        return $this->_fields['Upc']['FieldValue'];
    }

    /**
     * Set the value of the Upc property.
     *
     * @param string upc
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setUpc($value)
    {
        $this->_fields['Upc']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Upc is set.
     *
     * @return true if Upc is set
     */
    public function isSetUpc()
    {
        return null !== $this->_fields['Upc']['FieldValue'];
    }

    /**
     * Set the value of Upc, return this.
     *
     * @param upc
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withUpc($value)
    {
        $this->setUpc($value);

        return $this;
    }
}
