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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * FulfillmentShipmentItem.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerSKU: string</li>
 * <li>SellerFulfillmentOrderItemId: string</li>
 * <li>Quantity: int</li>
 * <li>PackageNumber: int</li>
 *
 * </ul>
 */
class FulfillmentShipmentItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerSKU'                    => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerFulfillmentOrderItemId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Quantity'                     => ['FieldValue' => null, 'FieldType' => 'int'],
            'PackageNumber'                => ['FieldValue' => null, 'FieldType' => 'int'],
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
     * Get the value of the SellerFulfillmentOrderItemId property.
     *
     * @return string sellerFulfillmentOrderItemId
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerFulfillmentOrderItemId($value)
    {
        $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerFulfillmentOrderItemId is set.
     *
     * @return true if SellerFulfillmentOrderItemId is set
     */
    public function isSetSellerFulfillmentOrderItemId()
    {
        return null !== $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }

    /**
     * Set the value of SellerFulfillmentOrderItemId, return this.
     *
     * @param sellerFulfillmentOrderItemId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerFulfillmentOrderItemId($value)
    {
        $this->setSellerFulfillmentOrderItemId($value);

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
     * Get the value of the PackageNumber property.
     *
     * @return int packageNumber
     */
    public function getPackageNumber()
    {
        return $this->_fields['PackageNumber']['FieldValue'];
    }

    /**
     * Set the value of the PackageNumber property.
     *
     * @param int packageNumber
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageNumber($value)
    {
        $this->_fields['PackageNumber']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageNumber is set.
     *
     * @return true if PackageNumber is set
     */
    public function isSetPackageNumber()
    {
        return null !== $this->_fields['PackageNumber']['FieldValue'];
    }

    /**
     * Set the value of PackageNumber, return this.
     *
     * @param packageNumber
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageNumber($value)
    {
        $this->setPackageNumber($value);

        return $this;
    }
}
