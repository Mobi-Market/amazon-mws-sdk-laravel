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
 * Participation.
 *
 * Properties:
 * <ul>
 *
 * <li>MarketplaceId: string</li>
 * <li>SellerId: string</li>
 * <li>HasSellerSuspendedListings: string</li>
 *
 * </ul>
 */
class Participation extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'MarketplaceId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerId'                   => ['FieldValue' => null, 'FieldType' => 'string'],
            'HasSellerSuspendedListings' => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * Get the value of the HasSellerSuspendedListings property.
     *
     * @return string hasSellerSuspendedListings
     */
    public function getHasSellerSuspendedListings()
    {
        return $this->_fields['HasSellerSuspendedListings']['FieldValue'];
    }

    /**
     * Set the value of the HasSellerSuspendedListings property.
     *
     * @param string hasSellerSuspendedListings
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setHasSellerSuspendedListings($value)
    {
        $this->_fields['HasSellerSuspendedListings']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if HasSellerSuspendedListings is set.
     *
     * @return true if HasSellerSuspendedListings is set
     */
    public function isSetHasSellerSuspendedListings()
    {
        return null !== $this->_fields['HasSellerSuspendedListings']['FieldValue'];
    }

    /**
     * Set the value of HasSellerSuspendedListings, return this.
     *
     * @param hasSellerSuspendedListings
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withHasSellerSuspendedListings($value)
    {
        $this->setHasSellerSuspendedListings($value);

        return $this;
    }
}
