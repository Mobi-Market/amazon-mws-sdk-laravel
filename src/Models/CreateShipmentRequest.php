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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * CreateShipmentRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>ShipmentRequestDetails: ShipmentRequestDetails</li>
 * <li>ShippingServiceId: string</li>
 * <li>ShippingServiceOfferId: string</li>
 * <li>HazmatType: string</li>
 * <li>LabelFormatOption: LabelFormatOptionRequest</li>
 * <li>ShipmentLevelSellerInputsList: array</li>
 *
 * </ul>
 */
class CreateShipmentRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'                      => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipmentRequestDetails'        => ['FieldValue' => null, 'FieldType' => 'ShipmentRequestDetails'],
            'ShippingServiceId'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippingServiceOfferId'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'HazmatType'                    => ['FieldValue' => null, 'FieldType' => 'string'],
            'LabelFormatOption'             => ['FieldValue' => null, 'FieldType' => 'LabelFormatOptionRequest'],
            'ShipmentLevelSellerInputsList' => ['FieldValue' => [], 'FieldType' => ['AdditionalSellerInputs'], 'ListMemberName' => 'member'],
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
     * Get the value of the ShipmentRequestDetails property.
     *
     * @return ShipmentRequestDetails shipmentRequestDetails
     */
    public function getShipmentRequestDetails()
    {
        return $this->_fields['ShipmentRequestDetails']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentRequestDetails property.
     *
     * @param ShipmentRequestDetails shipmentRequestDetails
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentRequestDetails($value)
    {
        $this->_fields['ShipmentRequestDetails']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentRequestDetails is set.
     *
     * @return true if ShipmentRequestDetails is set
     */
    public function isSetShipmentRequestDetails()
    {
        return null !== $this->_fields['ShipmentRequestDetails']['FieldValue'];
    }

    /**
     * Set the value of ShipmentRequestDetails, return this.
     *
     * @param shipmentRequestDetails
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentRequestDetails($value)
    {
        $this->setShipmentRequestDetails($value);

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
     * Get the value of the ShippingServiceOfferId property.
     *
     * @return string shippingServiceOfferId
     */
    public function getShippingServiceOfferId()
    {
        return $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOfferId property.
     *
     * @param string shippingServiceOfferId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingServiceOfferId($value)
    {
        $this->_fields['ShippingServiceOfferId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingServiceOfferId is set.
     *
     * @return true if ShippingServiceOfferId is set
     */
    public function isSetShippingServiceOfferId()
    {
        return null !== $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }

    /**
     * Set the value of ShippingServiceOfferId, return this.
     *
     * @param shippingServiceOfferId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingServiceOfferId($value)
    {
        $this->setShippingServiceOfferId($value);

        return $this;
    }

    /**
     * Get the value of the HazmatType property.
     *
     * @return string hazmatType
     */
    public function getHazmatType()
    {
        return $this->_fields['HazmatType']['FieldValue'];
    }

    /**
     * Set the value of the HazmatType property.
     *
     * @param string hazmatType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setHazmatType($value)
    {
        $this->_fields['HazmatType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if HazmatType is set.
     *
     * @return true if HazmatType is set
     */
    public function isSetHazmatType()
    {
        return null !== $this->_fields['HazmatType']['FieldValue'];
    }

    /**
     * Set the value of HazmatType, return this.
     *
     * @param hazmatType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withHazmatType($value)
    {
        $this->setHazmatType($value);

        return $this;
    }

    /**
     * Get the value of the LabelFormatOption property.
     *
     * @return LabelFormatOptionRequest labelFormatOption
     */
    public function getLabelFormatOption()
    {
        return $this->_fields['LabelFormatOption']['FieldValue'];
    }

    /**
     * Set the value of the LabelFormatOption property.
     *
     * @param LabelFormatOptionRequest labelFormatOption
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLabelFormatOption($value)
    {
        $this->_fields['LabelFormatOption']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LabelFormatOption is set.
     *
     * @return true if LabelFormatOption is set
     */
    public function isSetLabelFormatOption()
    {
        return null !== $this->_fields['LabelFormatOption']['FieldValue'];
    }

    /**
     * Set the value of LabelFormatOption, return this.
     *
     * @param labelFormatOption
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLabelFormatOption($value)
    {
        $this->setLabelFormatOption($value);

        return $this;
    }

    /**
     * Get the value of the ShipmentLevelSellerInputsList property.
     *
     * @return List<AdditionalSellerInputs> shipmentLevelSellerInputsList
     */
    public function getShipmentLevelSellerInputsList()
    {
        if (null == $this->_fields['ShipmentLevelSellerInputsList']['FieldValue']) {
            $this->_fields['ShipmentLevelSellerInputsList']['FieldValue'] = [];
        }

        return $this->_fields['ShipmentLevelSellerInputsList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentLevelSellerInputsList property.
     *
     * @param array shipmentLevelSellerInputsList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentLevelSellerInputsList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ShipmentLevelSellerInputsList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ShipmentLevelSellerInputsList.
     */
    public function unsetShipmentLevelSellerInputsList(): void
    {
        $this->_fields['ShipmentLevelSellerInputsList']['FieldValue'] = [];
    }

    /**
     * Check to see if ShipmentLevelSellerInputsList is set.
     *
     * @return true if ShipmentLevelSellerInputsList is set
     */
    public function isSetShipmentLevelSellerInputsList()
    {
        return !empty($this->_fields['ShipmentLevelSellerInputsList']['FieldValue']);
    }

    /**
     * Add values for ShipmentLevelSellerInputsList, return this.
     *
     * @param shipmentLevelSellerInputsList
     *             New values to add
     *
     * @return $this instance
     */
    public function withShipmentLevelSellerInputsList()
    {
        foreach (\func_get_args() as $ShipmentLevelSellerInputsList) {
            $this->_fields['ShipmentLevelSellerInputsList']['FieldValue'][] = $ShipmentLevelSellerInputsList;
        }

        return $this;
    }
}
