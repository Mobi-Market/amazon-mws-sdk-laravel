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
 * LowestPriceType.
 *
 * Properties:
 * <ul>
 *
 * <li>condition: string</li>
 * <li>fulfillmentChannel: string</li>
 * <li>LandedPrice: MoneyType</li>
 * <li>ListingPrice: MoneyType</li>
 * <li>Shipping: MoneyType</li>
 * <li>Points: Points</li>
 *
 * </ul>
 */
class LowestPriceType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'condition'          => ['FieldValue' => null, 'FieldType' => '@string'],
            'fulfillmentChannel' => ['FieldValue' => null, 'FieldType' => '@string'],
            'LandedPrice'        => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'ListingPrice'       => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'Shipping'           => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'Points'             => ['FieldValue' => null, 'FieldType' => 'Points'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the condition property.
     *
     * @return string condition
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if condition is set.
     *
     * @return true if condition is set
     */
    public function isSetcondition()
    {
        return null !== $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of condition, return this.
     *
     * @param condition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withcondition($value)
    {
        $this->setcondition($value);

        return $this;
    }

    /**
     * Get the value of the fulfillmentChannel property.
     *
     * @return string fulfillmentChannel
     */
    public function getfulfillmentChannel()
    {
        return $this->_fields['fulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the fulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setfulfillmentChannel($value)
    {
        $this->_fields['fulfillmentChannel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if fulfillmentChannel is set.
     *
     * @return true if fulfillmentChannel is set
     */
    public function isSetfulfillmentChannel()
    {
        return null !== $this->_fields['fulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of fulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withfulfillmentChannel($value)
    {
        $this->setfulfillmentChannel($value);

        return $this;
    }

    /**
     * Get the value of the LandedPrice property.
     *
     * @return MoneyType landedPrice
     */
    public function getLandedPrice()
    {
        return $this->_fields['LandedPrice']['FieldValue'];
    }

    /**
     * Set the value of the LandedPrice property.
     *
     * @param MoneyType landedPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLandedPrice($value)
    {
        $this->_fields['LandedPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LandedPrice is set.
     *
     * @return true if LandedPrice is set
     */
    public function isSetLandedPrice()
    {
        return null !== $this->_fields['LandedPrice']['FieldValue'];
    }

    /**
     * Set the value of LandedPrice, return this.
     *
     * @param landedPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLandedPrice($value)
    {
        $this->setLandedPrice($value);

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
}
