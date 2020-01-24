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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * InboundShipmentPlanRequestItem.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerSKU: string</li>
 * <li>ASIN: string</li>
 * <li>Condition: string</li>
 * <li>Quantity: int</li>
 * <li>QuantityInCase: int</li>
 * <li>PrepDetailsList: PrepDetailsList</li>
 *
 * </ul>
 */
class InboundShipmentPlanRequestItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerSKU'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'ASIN'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'Condition'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'Quantity'        => ['FieldValue' => null, 'FieldType' => 'int'],
            'QuantityInCase'  => ['FieldValue' => null, 'FieldType' => 'int'],
            'PrepDetailsList' => ['FieldValue' => null, 'FieldType' => 'PrepDetailsList'],
        ];
        parent::__construct($data);
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

    /**
     * Get the value of the Condition property.
     *
     * @return string condition
     */
    public function getCondition()
    {
        return $this->_fields['Condition']['FieldValue'];
    }

    /**
     * Set the value of the Condition property.
     *
     * @param string condition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCondition($value)
    {
        $this->_fields['Condition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Condition is set.
     *
     * @return true if Condition is set
     */
    public function isSetCondition()
    {
        return null !== $this->_fields['Condition']['FieldValue'];
    }

    /**
     * Set the value of Condition, return this.
     *
     * @param condition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCondition($value)
    {
        $this->setCondition($value);

        return $this;
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return int quantity
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
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
     * Get the value of the QuantityInCase property.
     *
     * @return int quantityInCase
     */
    public function getQuantityInCase()
    {
        return $this->_fields['QuantityInCase']['FieldValue'];
    }

    /**
     * Set the value of the QuantityInCase property.
     *
     * @param int quantityInCase
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantityInCase($value)
    {
        $this->_fields['QuantityInCase']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if QuantityInCase is set.
     *
     * @return true if QuantityInCase is set
     */
    public function isSetQuantityInCase()
    {
        return null !== $this->_fields['QuantityInCase']['FieldValue'];
    }

    /**
     * Set the value of QuantityInCase, return this.
     *
     * @param quantityInCase
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantityInCase($value)
    {
        $this->setQuantityInCase($value);

        return $this;
    }

    /**
     * Get the value of the PrepDetailsList property.
     *
     * @return PrepDetailsList prepDetailsList
     */
    public function getPrepDetailsList()
    {
        return $this->_fields['PrepDetailsList']['FieldValue'];
    }

    /**
     * Set the value of the PrepDetailsList property.
     *
     * @param PrepDetailsList prepDetailsList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPrepDetailsList($value)
    {
        $this->_fields['PrepDetailsList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PrepDetailsList is set.
     *
     * @return true if PrepDetailsList is set
     */
    public function isSetPrepDetailsList()
    {
        return null !== $this->_fields['PrepDetailsList']['FieldValue'];
    }

    /**
     * Set the value of PrepDetailsList, return this.
     *
     * @param prepDetailsList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPrepDetailsList($value)
    {
        $this->setPrepDetailsList($value);

        return $this;
    }
}
