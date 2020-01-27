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
 * GetLowestOfferListingsForASINRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>ASINList: ASINListType</li>
 * <li>ItemCondition: string</li>
 * <li>ExcludeMe: bool</li>
 *
 * </ul>
 */
class GetLowestOfferListingsForASINRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ASINList'      => ['FieldValue' => null, 'FieldType' => 'ASINListType'],
            'ItemCondition' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ExcludeMe'     => ['FieldValue' => null, 'FieldType' => 'bool'],
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
     * Get the value of the ASINList property.
     *
     * @return ASINListType ASINList
     */
    public function getASINList()
    {
        return $this->_fields['ASINList']['FieldValue'];
    }

    /**
     * Set the value of the ASINList property.
     *
     * @param ASINListType asinList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASINList($value)
    {
        $this->_fields['ASINList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ASINList is set.
     *
     * @return true if ASINList is set
     */
    public function isSetASINList()
    {
        return null !== $this->_fields['ASINList']['FieldValue'];
    }

    /**
     * Set the value of ASINList, return this.
     *
     * @param asinList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withASINList($value)
    {
        $this->setASINList($value);

        return $this;
    }

    /**
     * Get the value of the ItemCondition property.
     *
     * @return string itemCondition
     */
    public function getItemCondition()
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }

    /**
     * Set the value of the ItemCondition property.
     *
     * @param string itemCondition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemCondition($value)
    {
        $this->_fields['ItemCondition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemCondition is set.
     *
     * @return true if ItemCondition is set
     */
    public function isSetItemCondition()
    {
        return null !== $this->_fields['ItemCondition']['FieldValue'];
    }

    /**
     * Set the value of ItemCondition, return this.
     *
     * @param itemCondition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemCondition($value)
    {
        $this->setItemCondition($value);

        return $this;
    }

    /**
     * Check the value of ExcludeMe.
     *
     * @return true if ExcludeMe is set to true
     */
    public function isExcludeMe()
    {
        return null !== $this->_fields['ExcludeMe']['FieldValue'] && $this->_fields['ExcludeMe']['FieldValue'];
    }

    /**
     * Get the value of the ExcludeMe property.
     *
     * @return bool excludeMe
     */
    public function getExcludeMe()
    {
        return $this->_fields['ExcludeMe']['FieldValue'];
    }

    /**
     * Set the value of the ExcludeMe property.
     *
     * @param bool excludeMe
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setExcludeMe($value)
    {
        $this->_fields['ExcludeMe']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ExcludeMe is set.
     *
     * @return true if ExcludeMe is set
     */
    public function isSetExcludeMe()
    {
        return null !== $this->_fields['ExcludeMe']['FieldValue'];
    }

    /**
     * Set the value of ExcludeMe, return this.
     *
     * @param excludeMe
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withExcludeMe($value)
    {
        $this->setExcludeMe($value);

        return $this;
    }
}
