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
 * ASINOfferDetail.
 *
 * Properties:
 * <ul>
 *
 * <li>SubCondition: string</li>
 * <li>SellerFeedbackRating: SellerFeedbackType</li>
 * <li>ShippingTime: DetailedShippingTimeType</li>
 * <li>ListingPrice: MoneyType</li>
 * <li>Points: Points</li>
 * <li>Shipping: MoneyType</li>
 * <li>ShipsFrom: ShipsFromType</li>
 * <li>IsFulfilledByAmazon: bool</li>
 * <li>IsBuyBoxWinner: bool</li>
 * <li>IsFeaturedMerchant: bool</li>
 *
 * </ul>
 */
class ASINOfferDetail extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SubCondition'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerFeedbackRating' => ['FieldValue' => null, 'FieldType' => 'SellerFeedbackType'],
            'ShippingTime'         => ['FieldValue' => null, 'FieldType' => 'DetailedShippingTimeType'],
            'ListingPrice'         => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'Points'               => ['FieldValue' => null, 'FieldType' => 'Points'],
            'Shipping'             => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'ShipsFrom'            => ['FieldValue' => null, 'FieldType' => 'ShipsFromType'],
            'IsFulfilledByAmazon'  => ['FieldValue' => null, 'FieldType' => 'bool'],
            'IsBuyBoxWinner'       => ['FieldValue' => null, 'FieldType' => 'bool'],
            'IsFeaturedMerchant'   => ['FieldValue' => null, 'FieldType' => 'bool'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SubCondition property.
     *
     * @return string subCondition
     */
    public function getSubCondition()
    {
        return $this->_fields['SubCondition']['FieldValue'];
    }

    /**
     * Set the value of the SubCondition property.
     *
     * @param string subCondition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSubCondition($value)
    {
        $this->_fields['SubCondition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SubCondition is set.
     *
     * @return true if SubCondition is set
     */
    public function isSetSubCondition()
    {
        return null !== $this->_fields['SubCondition']['FieldValue'];
    }

    /**
     * Set the value of SubCondition, return this.
     *
     * @param subCondition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSubCondition($value)
    {
        $this->setSubCondition($value);

        return $this;
    }

    /**
     * Get the value of the SellerFeedbackRating property.
     *
     * @return SellerFeedbackType sellerFeedbackRating
     */
    public function getSellerFeedbackRating()
    {
        return $this->_fields['SellerFeedbackRating']['FieldValue'];
    }

    /**
     * Set the value of the SellerFeedbackRating property.
     *
     * @param SellerFeedbackType sellerFeedbackRating
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerFeedbackRating($value)
    {
        $this->_fields['SellerFeedbackRating']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerFeedbackRating is set.
     *
     * @return true if SellerFeedbackRating is set
     */
    public function isSetSellerFeedbackRating()
    {
        return null !== $this->_fields['SellerFeedbackRating']['FieldValue'];
    }

    /**
     * Set the value of SellerFeedbackRating, return this.
     *
     * @param sellerFeedbackRating
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerFeedbackRating($value)
    {
        $this->setSellerFeedbackRating($value);

        return $this;
    }

    /**
     * Get the value of the ShippingTime property.
     *
     * @return DetailedShippingTimeType shippingTime
     */
    public function getShippingTime()
    {
        return $this->_fields['ShippingTime']['FieldValue'];
    }

    /**
     * Set the value of the ShippingTime property.
     *
     * @param DetailedShippingTimeType shippingTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingTime($value)
    {
        $this->_fields['ShippingTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingTime is set.
     *
     * @return true if ShippingTime is set
     */
    public function isSetShippingTime()
    {
        return null !== $this->_fields['ShippingTime']['FieldValue'];
    }

    /**
     * Set the value of ShippingTime, return this.
     *
     * @param shippingTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingTime($value)
    {
        $this->setShippingTime($value);

        return $this;
    }

    /**
     * Get the value of the ListingPrice property.
     *
     * @return MoneyType listingPrice
     */
    public function getListingPrice()
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }

    /**
     * Set the value of the ListingPrice property.
     *
     * @param MoneyType listingPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setListingPrice($value)
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ListingPrice is set.
     *
     * @return true if ListingPrice is set
     */
    public function isSetListingPrice()
    {
        return null !== $this->_fields['ListingPrice']['FieldValue'];
    }

    /**
     * Set the value of ListingPrice, return this.
     *
     * @param listingPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withListingPrice($value)
    {
        $this->setListingPrice($value);

        return $this;
    }

    /**
     * Get the value of the Points property.
     *
     * @return Points points
     */
    public function getPoints()
    {
        return $this->_fields['Points']['FieldValue'];
    }

    /**
     * Set the value of the Points property.
     *
     * @param Points points
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPoints($value)
    {
        $this->_fields['Points']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Points is set.
     *
     * @return true if Points is set
     */
    public function isSetPoints()
    {
        return null !== $this->_fields['Points']['FieldValue'];
    }

    /**
     * Set the value of Points, return this.
     *
     * @param points
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPoints($value)
    {
        $this->setPoints($value);

        return $this;
    }

    /**
     * Get the value of the Shipping property.
     *
     * @return MoneyType shipping
     */
    public function getShipping()
    {
        return $this->_fields['Shipping']['FieldValue'];
    }

    /**
     * Set the value of the Shipping property.
     *
     * @param MoneyType shipping
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipping($value)
    {
        $this->_fields['Shipping']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Shipping is set.
     *
     * @return true if Shipping is set
     */
    public function isSetShipping()
    {
        return null !== $this->_fields['Shipping']['FieldValue'];
    }

    /**
     * Set the value of Shipping, return this.
     *
     * @param shipping
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipping($value)
    {
        $this->setShipping($value);

        return $this;
    }

    /**
     * Get the value of the ShipsFrom property.
     *
     * @return ShipsFromType shipsFrom
     */
    public function getShipsFrom()
    {
        return $this->_fields['ShipsFrom']['FieldValue'];
    }

    /**
     * Set the value of the ShipsFrom property.
     *
     * @param ShipsFromType shipsFrom
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipsFrom($value)
    {
        $this->_fields['ShipsFrom']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipsFrom is set.
     *
     * @return true if ShipsFrom is set
     */
    public function isSetShipsFrom()
    {
        return null !== $this->_fields['ShipsFrom']['FieldValue'];
    }

    /**
     * Set the value of ShipsFrom, return this.
     *
     * @param shipsFrom
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipsFrom($value)
    {
        $this->setShipsFrom($value);

        return $this;
    }

    /**
     * Check the value of IsFulfilledByAmazon.
     *
     * @return true if IsFulfilledByAmazon is set to true
     */
    public function isIsFulfilledByAmazon()
    {
        return $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Get the value of the IsFulfilledByAmazon property.
     *
     * @return bool isFulfilledByAmazon
     */
    public function getIsFulfilledByAmazon()
    {
        return $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Set the value of the IsFulfilledByAmazon property.
     *
     * @param bool isFulfilledByAmazon
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsFulfilledByAmazon($value)
    {
        $this->_fields['IsFulfilledByAmazon']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsFulfilledByAmazon is set.
     *
     * @return true if IsFulfilledByAmazon is set
     */
    public function isSetIsFulfilledByAmazon()
    {
        return null !== $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Set the value of IsFulfilledByAmazon, return this.
     *
     * @param isFulfilledByAmazon
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsFulfilledByAmazon($value)
    {
        $this->setIsFulfilledByAmazon($value);

        return $this;
    }

    /**
     * Check the value of IsBuyBoxWinner.
     *
     * @return true if IsBuyBoxWinner is set to true
     */
    public function isIsBuyBoxWinner()
    {
        return null !== $this->_fields['IsBuyBoxWinner']['FieldValue'] && $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }

    /**
     * Get the value of the IsBuyBoxWinner property.
     *
     * @return bool isBuyBoxWinner
     */
    public function getIsBuyBoxWinner()
    {
        return $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }

    /**
     * Set the value of the IsBuyBoxWinner property.
     *
     * @param bool isBuyBoxWinner
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsBuyBoxWinner($value)
    {
        $this->_fields['IsBuyBoxWinner']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsBuyBoxWinner is set.
     *
     * @return true if IsBuyBoxWinner is set
     */
    public function isSetIsBuyBoxWinner()
    {
        return null !== $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }

    /**
     * Set the value of IsBuyBoxWinner, return this.
     *
     * @param isBuyBoxWinner
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsBuyBoxWinner($value)
    {
        $this->setIsBuyBoxWinner($value);

        return $this;
    }

    /**
     * Check the value of IsFeaturedMerchant.
     *
     * @return true if IsFeaturedMerchant is set to true
     */
    public function isIsFeaturedMerchant()
    {
        return null !== $this->_fields['IsFeaturedMerchant']['FieldValue'] && $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }

    /**
     * Get the value of the IsFeaturedMerchant property.
     *
     * @return bool isFeaturedMerchant
     */
    public function getIsFeaturedMerchant()
    {
        return $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }

    /**
     * Set the value of the IsFeaturedMerchant property.
     *
     * @param bool isFeaturedMerchant
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsFeaturedMerchant($value)
    {
        $this->_fields['IsFeaturedMerchant']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsFeaturedMerchant is set.
     *
     * @return true if IsFeaturedMerchant is set
     */
    public function isSetIsFeaturedMerchant()
    {
        return null !== $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }

    /**
     * Set the value of IsFeaturedMerchant, return this.
     *
     * @param isFeaturedMerchant
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsFeaturedMerchant($value)
    {
        $this->setIsFeaturedMerchant($value);

        return $this;
    }
}
