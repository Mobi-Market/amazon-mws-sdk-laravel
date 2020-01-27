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

/**
 * UpdateInboundShipmentRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>ShipmentId: string</li>
 * <li>InboundShipmentHeader: InboundShipmentHeader</li>
 * <li>InboundShipmentItems: InboundShipmentItemList</li>
 *
 * </ul>
 */
class UpdateInboundShipmentRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'Marketplace'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipmentId'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'InboundShipmentHeader' => ['FieldValue' => null, 'FieldType' => 'InboundShipmentHeader'],
            'InboundShipmentItems'  => ['FieldValue' => null, 'FieldType' => 'InboundShipmentItemList'],
        ];
        parent::__construct($data);
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
     * Get the value of the Marketplace property.
     *
     * @return string marketplace
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set
     */
    public function isSetMarketplace()
    {
        return null !== $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of Marketplace, return this.
     *
     * @param marketplace
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);

        return $this;
    }

    /**
     * Get the value of the ShipmentId property.
     *
     * @return string shipmentId
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set
     */
    public function isSetShipmentId()
    {
        return null !== $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);

        return $this;
    }

    /**
     * Get the value of the InboundShipmentHeader property.
     *
     * @return InboundShipmentHeader inboundShipmentHeader
     */
    public function getInboundShipmentHeader()
    {
        return $this->_fields['InboundShipmentHeader']['FieldValue'];
    }

    /**
     * Set the value of the InboundShipmentHeader property.
     *
     * @param InboundShipmentHeader inboundShipmentHeader
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInboundShipmentHeader($value)
    {
        $this->_fields['InboundShipmentHeader']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InboundShipmentHeader is set.
     *
     * @return true if InboundShipmentHeader is set
     */
    public function isSetInboundShipmentHeader()
    {
        return null !== $this->_fields['InboundShipmentHeader']['FieldValue'];
    }

    /**
     * Set the value of InboundShipmentHeader, return this.
     *
     * @param inboundShipmentHeader
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInboundShipmentHeader($value)
    {
        $this->setInboundShipmentHeader($value);

        return $this;
    }

    /**
     * Get the value of the InboundShipmentItems property.
     *
     * @return InboundShipmentItemList inboundShipmentItems
     */
    public function getInboundShipmentItems()
    {
        return $this->_fields['InboundShipmentItems']['FieldValue'];
    }

    /**
     * Set the value of the InboundShipmentItems property.
     *
     * @param InboundShipmentItemList inboundShipmentItems
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInboundShipmentItems($value)
    {
        $this->_fields['InboundShipmentItems']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InboundShipmentItems is set.
     *
     * @return true if InboundShipmentItems is set
     */
    public function isSetInboundShipmentItems()
    {
        return null !== $this->_fields['InboundShipmentItems']['FieldValue'];
    }

    /**
     * Set the value of InboundShipmentItems, return this.
     *
     * @param inboundShipmentItems
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInboundShipmentItems($value)
    {
        $this->setInboundShipmentItems($value);

        return $this;
    }
}
