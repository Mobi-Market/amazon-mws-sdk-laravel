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
 * GetPrepInstructionsForASINRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>AsinList: AsinList</li>
 * <li>ShipToCountryCode: string</li>
 *
 * </ul>
 */
class GetPrepInstructionsForASINRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'AsinList'          => ['FieldValue' => null, 'FieldType' => 'AsinList'],
            'ShipToCountryCode' => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * Get the value of the AsinList property.
     *
     * @return AsinList asinList
     */
    public function getAsinList()
    {
        return $this->_fields['AsinList']['FieldValue'];
    }

    /**
     * Set the value of the AsinList property.
     *
     * @param AsinList asinList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAsinList($value)
    {
        $this->_fields['AsinList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AsinList is set.
     *
     * @return true if AsinList is set
     */
    public function isSetAsinList()
    {
        return null !== $this->_fields['AsinList']['FieldValue'];
    }

    /**
     * Set the value of AsinList, return this.
     *
     * @param asinList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAsinList($value)
    {
        $this->setAsinList($value);

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
}
