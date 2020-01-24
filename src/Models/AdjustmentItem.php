<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2019-02-25
 * Generated: Wed Mar 13 08:17:11 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * AdjustmentItem.
 *
 * Properties:
 * <ul>
 *
 * <li>Quantity: string</li>
 * <li>PerUnitAmount: Currency</li>
 * <li>TotalAmount: Currency</li>
 * <li>SellerSKU: string</li>
 * <li>FnSKU: string</li>
 * <li>ProductDescription: string</li>
 * <li>ASIN: string</li>
 *
 * </ul>
 */
class AdjustmentItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Quantity'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'PerUnitAmount'      => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'TotalAmount'        => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'SellerSKU'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'FnSKU'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'ProductDescription' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ASIN'               => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return string quantity
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param string quantity
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set
     */
    public function isSetQuantity()
    {
        return null !== $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);

        return $this;
    }

    /**
     * Get the value of the PerUnitAmount property.
     *
     * @return Currency perUnitAmount
     */
    public function getPerUnitAmount()
    {
        return $this->_fields['PerUnitAmount']['FieldValue'];
    }

    /**
     * Set the value of the PerUnitAmount property.
     *
     * @param Currency perUnitAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPerUnitAmount($value)
    {
        $this->_fields['PerUnitAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PerUnitAmount is set.
     *
     * @return true if PerUnitAmount is set
     */
    public function isSetPerUnitAmount()
    {
        return null !== $this->_fields['PerUnitAmount']['FieldValue'];
    }

    /**
     * Set the value of PerUnitAmount, return this.
     *
     * @param perUnitAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPerUnitAmount($value)
    {
        $this->setPerUnitAmount($value);

        return $this;
    }

    /**
     * Get the value of the TotalAmount property.
     *
     * @return Currency totalAmount
     */
    public function getTotalAmount()
    {
        return $this->_fields['TotalAmount']['FieldValue'];
    }

    /**
     * Set the value of the TotalAmount property.
     *
     * @param Currency totalAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTotalAmount($value)
    {
        $this->_fields['TotalAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TotalAmount is set.
     *
     * @return true if TotalAmount is set
     */
    public function isSetTotalAmount()
    {
        return null !== $this->_fields['TotalAmount']['FieldValue'];
    }

    /**
     * Set the value of TotalAmount, return this.
     *
     * @param totalAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTotalAmount($value)
    {
        $this->setTotalAmount($value);

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
     * Get the value of the FnSKU property.
     *
     * @return string fnSKU
     */
    public function getFnSKU()
    {
        return $this->_fields['FnSKU']['FieldValue'];
    }

    /**
     * Set the value of the FnSKU property.
     *
     * @param string fnSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFnSKU($value)
    {
        $this->_fields['FnSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FnSKU is set.
     *
     * @return true if FnSKU is set
     */
    public function isSetFnSKU()
    {
        return null !== $this->_fields['FnSKU']['FieldValue'];
    }

    /**
     * Set the value of FnSKU, return this.
     *
     * @param fnSKU
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFnSKU($value)
    {
        $this->setFnSKU($value);

        return $this;
    }

    /**
     * Get the value of the ProductDescription property.
     *
     * @return string productDescription
     */
    public function getProductDescription()
    {
        return $this->_fields['ProductDescription']['FieldValue'];
    }

    /**
     * Set the value of the ProductDescription property.
     *
     * @param string productDescription
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProductDescription($value)
    {
        $this->_fields['ProductDescription']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ProductDescription is set.
     *
     * @return true if ProductDescription is set
     */
    public function isSetProductDescription()
    {
        return null !== $this->_fields['ProductDescription']['FieldValue'];
    }

    /**
     * Set the value of ProductDescription, return this.
     *
     * @param productDescription
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProductDescription($value)
    {
        $this->setProductDescription($value);

        return $this;
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return string ASIN
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set
     */
    public function isSetASIN()
    {
        return null !== $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withASIN($value)
    {
        $this->setASIN($value);

        return $this;
    }
}
