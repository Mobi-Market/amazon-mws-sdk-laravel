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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * GetCompetitivePricingForSKUResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Product: Product</li>
 * <li>Error: Error</li>
 * <li>SellerSKU: string</li>
 * <li>status: string</li>
 *
 * </ul>
 */
class GetCompetitivePricingForSKUResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Product'   => ['FieldValue' => null, 'FieldType' => 'Product'],
            'Error'     => ['FieldValue' => null, 'FieldType' => 'Error'],
            'SellerSKU' => ['FieldValue' => null, 'FieldType' => '@string'],
            'status'    => ['FieldValue' => null, 'FieldType' => '@string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Product property.
     *
     * @return Product product
     */
    public function getProduct()
    {
        return $this->_fields['Product']['FieldValue'];
    }

    /**
     * Set the value of the Product property.
     *
     * @param Product product
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProduct($value)
    {
        $this->_fields['Product']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Product is set.
     *
     * @return true if Product is set
     */
    public function isSetProduct()
    {
        return null !== $this->_fields['Product']['FieldValue'];
    }

    /**
     * Set the value of Product, return this.
     *
     * @param product
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProduct($value)
    {
        $this->setProduct($value);

        return $this;
    }

    /**
     * Get the value of the Error property.
     *
     * @return Error error
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }

    /**
     * Set the value of the Error property.
     *
     * @param Error error
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setError($value)
    {
        $this->_fields['Error']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Error is set.
     *
     * @return true if Error is set
     */
    public function isSetError()
    {
        return null !== $this->_fields['Error']['FieldValue'];
    }

    /**
     * Set the value of Error, return this.
     *
     * @param error
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withError($value)
    {
        $this->setError($value);

        return $this;
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return string sellerSKU
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set
     */
    public function isSetSellerSKU()
    {
        return null !== $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);

        return $this;
    }

    /**
     * Get the value of the status property.
     *
     * @return string status
     */
    public function getstatus()
    {
        return $this->_fields['status']['FieldValue'];
    }

    /**
     * Set the value of the status property.
     *
     * @param string status
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setstatus($value)
    {
        $this->_fields['status']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if status is set.
     *
     * @return true if status is set
     */
    public function isSetstatus()
    {
        return null !== $this->_fields['status']['FieldValue'];
    }

    /**
     * Set the value of status, return this.
     *
     * @param status
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withstatus($value)
    {
        $this->setstatus($value);

        return $this;
    }
}
