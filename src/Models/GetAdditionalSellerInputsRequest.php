<?php

declare(strict_types=1);
/**
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");.
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 *
 * @category Amazon
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * GetAdditionalSellerInputsRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>OrderId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>SellerId: string</li>
 * <li>ShippingServiceId: string</li>
 * <li>ShipFromAddress: Address</li>
 *
 * </ul>
 */
class GetAdditionalSellerInputsRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'OrderId'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerId'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippingServiceId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipFromAddress'   => ['FieldValue' => null, 'FieldType' => 'Address'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the OrderId property.
     *
     * @return string orderId
     */
    public function getOrderId()
    {
        return $this->_fields['OrderId']['FieldValue'];
    }

    /**
     * Set the value of the OrderId property.
     *
     * @param string orderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderId($value)
    {
        $this->_fields['OrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderId is set.
     *
     * @return true if OrderId is set
     */
    public function isSetOrderId()
    {
        return null !== $this->_fields['OrderId']['FieldValue'];
    }

    /**
     * Set the value of OrderId, return this.
     *
     * @param orderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderId($value)
    {
        $this->setOrderId($value);

        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set
     */
    public function isSetMWSAuthToken()
    {
        return null !== $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return string sellerId
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set
     */
    public function isSetSellerId()
    {
        return null !== $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);

        return $this;
    }

    /**
     * Get the value of the ShippingServiceId property.
     *
     * @return string shippingServiceId
     */
    public function getShippingServiceId()
    {
        return $this->_fields['ShippingServiceId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceId property.
     *
     * @param string shippingServiceId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingServiceId($value)
    {
        $this->_fields['ShippingServiceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingServiceId is set.
     *
     * @return true if ShippingServiceId is set
     */
    public function isSetShippingServiceId()
    {
        return null !== $this->_fields['ShippingServiceId']['FieldValue'];
    }

    /**
     * Set the value of ShippingServiceId, return this.
     *
     * @param shippingServiceId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingServiceId($value)
    {
        $this->setShippingServiceId($value);

        return $this;
    }

    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return Address shipFromAddress
     */
    public function getShipFromAddress()
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShipFromAddress property.
     *
     * @param Address shipFromAddress
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipFromAddress($value)
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipFromAddress is set.
     *
     * @return true if ShipFromAddress is set
     */
    public function isSetShipFromAddress()
    {
        return null !== $this->_fields['ShipFromAddress']['FieldValue'];
    }

    /**
     * Set the value of ShipFromAddress, return this.
     *
     * @param shipFromAddress
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipFromAddress($value)
    {
        $this->setShipFromAddress($value);

        return $this;
    }
}
