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
 * InboundShipmentPlanItem.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerSKU: string</li>
 * <li>FulfillmentNetworkSKU: string</li>
 * <li>Quantity: int</li>
 * <li>PrepDetailsList: PrepDetailsList</li>
 *
 * </ul>
 */
class InboundShipmentPlanItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerSKU'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentNetworkSKU' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Quantity'              => ['FieldValue' => null, 'FieldType' => 'int'],
            'PrepDetailsList'       => ['FieldValue' => null, 'FieldType' => 'PrepDetailsList'],
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
     * Get the value of the FulfillmentNetworkSKU property.
     *
     * @return string fulfillmentNetworkSKU
     */
    public function getFulfillmentNetworkSKU()
    {
        return $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentNetworkSKU property.
     *
     * @param string fulfillmentNetworkSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentNetworkSKU($value)
    {
        $this->_fields['FulfillmentNetworkSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentNetworkSKU is set.
     *
     * @return true if FulfillmentNetworkSKU is set
     */
    public function isSetFulfillmentNetworkSKU()
    {
        return null !== $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentNetworkSKU, return this.
     *
     * @param fulfillmentNetworkSKU
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentNetworkSKU($value)
    {
        $this->setFulfillmentNetworkSKU($value);

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
