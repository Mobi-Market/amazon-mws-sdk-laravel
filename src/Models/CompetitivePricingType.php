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
 * CompetitivePricingType.
 *
 * Properties:
 * <ul>
 *
 * <li>CompetitivePrices: CompetitivePriceList</li>
 * <li>NumberOfOfferListings: NumberOfOfferListingsList</li>
 * <li>TradeInValue: MoneyType</li>
 *
 * </ul>
 */
class CompetitivePricingType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CompetitivePrices'     => ['FieldValue' => null, 'FieldType' => 'CompetitivePriceList'],
            'NumberOfOfferListings' => ['FieldValue' => null, 'FieldType' => 'NumberOfOfferListingsList'],
            'TradeInValue'          => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the CompetitivePrices property.
     *
     * @return CompetitivePriceList competitivePrices
     */
    public function getCompetitivePrices()
    {
        return $this->_fields['CompetitivePrices']['FieldValue'];
    }

    /**
     * Set the value of the CompetitivePrices property.
     *
     * @param CompetitivePriceList competitivePrices
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCompetitivePrices($value)
    {
        $this->_fields['CompetitivePrices']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CompetitivePrices is set.
     *
     * @return true if CompetitivePrices is set
     */
    public function isSetCompetitivePrices()
    {
        return null !== $this->_fields['CompetitivePrices']['FieldValue'];
    }

    /**
     * Set the value of CompetitivePrices, return this.
     *
     * @param competitivePrices
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCompetitivePrices($value)
    {
        $this->setCompetitivePrices($value);

        return $this;
    }

    /**
     * Get the value of the NumberOfOfferListings property.
     *
     * @return NumberOfOfferListingsList numberOfOfferListings
     */
    public function getNumberOfOfferListings()
    {
        return $this->_fields['NumberOfOfferListings']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfOfferListings property.
     *
     * @param NumberOfOfferListingsList numberOfOfferListings
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfOfferListings($value)
    {
        $this->_fields['NumberOfOfferListings']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfOfferListings is set.
     *
     * @return true if NumberOfOfferListings is set
     */
    public function isSetNumberOfOfferListings()
    {
        return null !== $this->_fields['NumberOfOfferListings']['FieldValue'];
    }

    /**
     * Set the value of NumberOfOfferListings, return this.
     *
     * @param numberOfOfferListings
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfOfferListings($value)
    {
        $this->setNumberOfOfferListings($value);

        return $this;
    }

    /**
     * Get the value of the TradeInValue property.
     *
     * @return MoneyType tradeInValue
     */
    public function getTradeInValue()
    {
        return $this->_fields['TradeInValue']['FieldValue'];
    }

    /**
     * Set the value of the TradeInValue property.
     *
     * @param MoneyType tradeInValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTradeInValue($value)
    {
        $this->_fields['TradeInValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TradeInValue is set.
     *
     * @return true if TradeInValue is set
     */
    public function isSetTradeInValue()
    {
        return null !== $this->_fields['TradeInValue']['FieldValue'];
    }

    /**
     * Set the value of TradeInValue, return this.
     *
     * @param tradeInValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTradeInValue($value)
    {
        $this->setTradeInValue($value);

        return $this;
    }
}
