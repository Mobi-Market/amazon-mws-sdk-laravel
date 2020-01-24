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
 * ListAllFulfillmentOrdersRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>QueryStartDateTime: string</li>
 * <li>FulfillmentMethod: FulfillmentMethodList</li>
 *
 * </ul>
 */
class ListAllFulfillmentOrdersRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'Marketplace'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'QueryStartDateTime' => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentMethod'  => ['FieldValue' => null, 'FieldType' => 'FulfillmentMethodList'],
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
     * Get the value of the QueryStartDateTime property.
     *
     * @return XMLGregorianCalendar queryStartDateTime
     */
    public function getQueryStartDateTime()
    {
        return $this->_fields['QueryStartDateTime']['FieldValue'];
    }

    /**
     * Set the value of the QueryStartDateTime property.
     *
     * @param string queryStartDateTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQueryStartDateTime($value)
    {
        $this->_fields['QueryStartDateTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if QueryStartDateTime is set.
     *
     * @return true if QueryStartDateTime is set
     */
    public function isSetQueryStartDateTime()
    {
        return null !== $this->_fields['QueryStartDateTime']['FieldValue'];
    }

    /**
     * Set the value of QueryStartDateTime, return this.
     *
     * @param queryStartDateTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQueryStartDateTime($value)
    {
        $this->setQueryStartDateTime($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentMethod property.
     *
     * @return FulfillmentMethodList fulfillmentMethod
     */
    public function getFulfillmentMethod()
    {
        return $this->_fields['FulfillmentMethod']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentMethod property.
     *
     * @param FulfillmentMethodList fulfillmentMethod
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentMethod($value)
    {
        $this->_fields['FulfillmentMethod']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentMethod is set.
     *
     * @return true if FulfillmentMethod is set
     */
    public function isSetFulfillmentMethod()
    {
        return null !== $this->_fields['FulfillmentMethod']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentMethod, return this.
     *
     * @param fulfillmentMethod
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentMethod($value)
    {
        $this->setFulfillmentMethod($value);

        return $this;
    }
}
