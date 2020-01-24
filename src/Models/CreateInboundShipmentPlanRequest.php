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
 * CreateInboundShipmentPlanRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>ShipFromAddress: Address</li>
 * <li>LabelPrepPreference: string</li>
 * <li>ShipToCountryCode: string</li>
 * <li>ShipToCountrySubdivisionCode: string</li>
 * <li>InboundShipmentPlanRequestItems: InboundShipmentPlanRequestItemList</li>
 *
 * </ul>
 */
class CreateInboundShipmentPlanRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'                        => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'                    => ['FieldValue' => null, 'FieldType' => 'string'],
            'Marketplace'                     => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipFromAddress'                 => ['FieldValue' => null, 'FieldType' => 'Address'],
            'LabelPrepPreference'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipToCountryCode'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipToCountrySubdivisionCode'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'InboundShipmentPlanRequestItems' => ['FieldValue' => null, 'FieldType' => 'InboundShipmentPlanRequestItemList'],
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

    /**
     * Get the value of the LabelPrepPreference property.
     *
     * @return string labelPrepPreference
     */
    public function getLabelPrepPreference()
    {
        return $this->_fields['LabelPrepPreference']['FieldValue'];
    }

    /**
     * Set the value of the LabelPrepPreference property.
     *
     * @param string labelPrepPreference
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLabelPrepPreference($value)
    {
        $this->_fields['LabelPrepPreference']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LabelPrepPreference is set.
     *
     * @return true if LabelPrepPreference is set
     */
    public function isSetLabelPrepPreference()
    {
        return null !== $this->_fields['LabelPrepPreference']['FieldValue'];
    }

    /**
     * Set the value of LabelPrepPreference, return this.
     *
     * @param labelPrepPreference
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLabelPrepPreference($value)
    {
        $this->setLabelPrepPreference($value);

        return $this;
    }

    /**
     * Get the value of the ShipToCountryCode property.
     *
     * @return string shipToCountryCode
     */
    public function getShipToCountryCode()
    {
        return $this->_fields['ShipToCountryCode']['FieldValue'];
    }

    /**
     * Set the value of the ShipToCountryCode property.
     *
     * @param string shipToCountryCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipToCountryCode($value)
    {
        $this->_fields['ShipToCountryCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipToCountryCode is set.
     *
     * @return true if ShipToCountryCode is set
     */
    public function isSetShipToCountryCode()
    {
        return null !== $this->_fields['ShipToCountryCode']['FieldValue'];
    }

    /**
     * Set the value of ShipToCountryCode, return this.
     *
     * @param shipToCountryCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipToCountryCode($value)
    {
        $this->setShipToCountryCode($value);

        return $this;
    }

    /**
     * Get the value of the ShipToCountrySubdivisionCode property.
     *
     * @return string shipToCountrySubdivisionCode
     */
    public function getShipToCountrySubdivisionCode()
    {
        return $this->_fields['ShipToCountrySubdivisionCode']['FieldValue'];
    }

    /**
     * Set the value of the ShipToCountrySubdivisionCode property.
     *
     * @param string shipToCountrySubdivisionCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipToCountrySubdivisionCode($value)
    {
        $this->_fields['ShipToCountrySubdivisionCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipToCountrySubdivisionCode is set.
     *
     * @return true if ShipToCountrySubdivisionCode is set
     */
    public function isSetShipToCountrySubdivisionCode()
    {
        return null !== $this->_fields['ShipToCountrySubdivisionCode']['FieldValue'];
    }

    /**
     * Set the value of ShipToCountrySubdivisionCode, return this.
     *
     * @param shipToCountrySubdivisionCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipToCountrySubdivisionCode($value)
    {
        $this->setShipToCountrySubdivisionCode($value);

        return $this;
    }

    /**
     * Get the value of the InboundShipmentPlanRequestItems property.
     *
     * @return InboundShipmentPlanRequestItemList inboundShipmentPlanRequestItems
     */
    public function getInboundShipmentPlanRequestItems()
    {
        return $this->_fields['InboundShipmentPlanRequestItems']['FieldValue'];
    }

    /**
     * Set the value of the InboundShipmentPlanRequestItems property.
     *
     * @param InboundShipmentPlanRequestItemList inboundShipmentPlanRequestItems
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInboundShipmentPlanRequestItems($value)
    {
        $this->_fields['InboundShipmentPlanRequestItems']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InboundShipmentPlanRequestItems is set.
     *
     * @return true if InboundShipmentPlanRequestItems is set
     */
    public function isSetInboundShipmentPlanRequestItems()
    {
        return null !== $this->_fields['InboundShipmentPlanRequestItems']['FieldValue'];
    }

    /**
     * Set the value of InboundShipmentPlanRequestItems, return this.
     *
     * @param inboundShipmentPlanRequestItems
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInboundShipmentPlanRequestItems($value)
    {
        $this->setInboundShipmentPlanRequestItems($value);

        return $this;
    }
}
