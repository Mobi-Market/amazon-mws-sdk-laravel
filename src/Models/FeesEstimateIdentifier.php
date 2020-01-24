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
 * FeesEstimateIdentifier.
 *
 * Properties:
 * <ul>
 *
 * <li>MarketplaceId: string</li>
 * <li>SellerId: string</li>
 * <li>IdType: string</li>
 * <li>IdValue: string</li>
 * <li>IsAmazonFulfilled: bool</li>
 * <li>PriceToEstimateFees: PriceToEstimateFees</li>
 * <li>SellerInputIdentifier: string</li>
 *
 * </ul>
 */
class FeesEstimateIdentifier extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'MarketplaceId'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'IdType'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'IdValue'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsAmazonFulfilled'     => ['FieldValue' => null, 'FieldType' => 'bool'],
            'PriceToEstimateFees'   => ['FieldValue' => null, 'FieldType' => 'PriceToEstimateFees'],
            'SellerInputIdentifier' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
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
     * Get the value of the IdValue property.
     *
     * @return string idValue
     */
    public function getIdValue()
    {
        return $this->_fields['IdValue']['FieldValue'];
    }

    /**
     * Set the value of the IdValue property.
     *
     * @param string idValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIdValue($value)
    {
        $this->_fields['IdValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IdValue is set.
     *
     * @return true if IdValue is set
     */
    public function isSetIdValue()
    {
        return null !== $this->_fields['IdValue']['FieldValue'];
    }

    /**
     * Set the value of IdValue, return this.
     *
     * @param idValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIdValue($value)
    {
        $this->setIdValue($value);

        return $this;
    }

    /**
     * Check the value of IsAmazonFulfilled.
     *
     * @return true if IsAmazonFulfilled is set to true
     */
    public function isIsAmazonFulfilled()
    {
        return null !== $this->_fields['IsAmazonFulfilled']['FieldValue'] && $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }

    /**
     * Get the value of the IsAmazonFulfilled property.
     *
     * @return bool isAmazonFulfilled
     */
    public function getIsAmazonFulfilled()
    {
        return $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }

    /**
     * Set the value of the IsAmazonFulfilled property.
     *
     * @param bool isAmazonFulfilled
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsAmazonFulfilled($value)
    {
        $this->_fields['IsAmazonFulfilled']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsAmazonFulfilled is set.
     *
     * @return true if IsAmazonFulfilled is set
     */
    public function isSetIsAmazonFulfilled()
    {
        return null !== $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }

    /**
     * Set the value of IsAmazonFulfilled, return this.
     *
     * @param isAmazonFulfilled
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsAmazonFulfilled($value)
    {
        $this->setIsAmazonFulfilled($value);

        return $this;
    }

    /**
     * Get the value of the PriceToEstimateFees property.
     *
     * @return PriceToEstimateFees priceToEstimateFees
     */
    public function getPriceToEstimateFees()
    {
        return $this->_fields['PriceToEstimateFees']['FieldValue'];
    }

    /**
     * Set the value of the PriceToEstimateFees property.
     *
     * @param PriceToEstimateFees priceToEstimateFees
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPriceToEstimateFees($value)
    {
        $this->_fields['PriceToEstimateFees']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PriceToEstimateFees is set.
     *
     * @return true if PriceToEstimateFees is set
     */
    public function isSetPriceToEstimateFees()
    {
        return null !== $this->_fields['PriceToEstimateFees']['FieldValue'];
    }

    /**
     * Set the value of PriceToEstimateFees, return this.
     *
     * @param priceToEstimateFees
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPriceToEstimateFees($value)
    {
        $this->setPriceToEstimateFees($value);

        return $this;
    }

    /**
     * Get the value of the SellerInputIdentifier property.
     *
     * @return string sellerInputIdentifier
     */
    public function getSellerInputIdentifier()
    {
        return $this->_fields['SellerInputIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the SellerInputIdentifier property.
     *
     * @param string sellerInputIdentifier
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerInputIdentifier($value)
    {
        $this->_fields['SellerInputIdentifier']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerInputIdentifier is set.
     *
     * @return true if SellerInputIdentifier is set
     */
    public function isSetSellerInputIdentifier()
    {
        return null !== $this->_fields['SellerInputIdentifier']['FieldValue'];
    }

    /**
     * Set the value of SellerInputIdentifier, return this.
     *
     * @param sellerInputIdentifier
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerInputIdentifier($value)
    {
        $this->setSellerInputIdentifier($value);

        return $this;
    }
}
