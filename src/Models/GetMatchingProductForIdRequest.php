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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * GetMatchingProductForIdRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>IdType: string</li>
 * <li>IdList: IdListType</li>
 *
 * </ul>
 */
class GetMatchingProductForIdRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'IdType'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'IdList'        => ['FieldValue' => null, 'FieldType' => 'IdListType'],
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
     * Get the value of the MarketplaceId property.
     *
     * @return string marketplaceId
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set
     */
    public function isSetMarketplaceId()
    {
        return null !== $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);

        return $this;
    }

    /**
     * Get the value of the IdType property.
     *
     * @return string idType
     */
    public function getIdType()
    {
        return $this->_fields['IdType']['FieldValue'];
    }

    /**
     * Set the value of the IdType property.
     *
     * @param string idType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIdType($value)
    {
        $this->_fields['IdType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IdType is set.
     *
     * @return true if IdType is set
     */
    public function isSetIdType()
    {
        return null !== $this->_fields['IdType']['FieldValue'];
    }

    /**
     * Set the value of IdType, return this.
     *
     * @param idType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIdType($value)
    {
        $this->setIdType($value);

        return $this;
    }

    /**
     * Get the value of the IdList property.
     *
     * @return IdListType idList
     */
    public function getIdList()
    {
        return $this->_fields['IdList']['FieldValue'];
    }

    /**
     * Set the value of the IdList property.
     *
     * @param IdListType idList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIdList($value)
    {
        $this->_fields['IdList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IdList is set.
     *
     * @return true if IdList is set
     */
    public function isSetIdList()
    {
        return null !== $this->_fields['IdList']['FieldValue'];
    }

    /**
     * Set the value of IdList, return this.
     *
     * @param idList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIdList($value)
    {
        $this->setIdList($value);

        return $this;
    }
}
