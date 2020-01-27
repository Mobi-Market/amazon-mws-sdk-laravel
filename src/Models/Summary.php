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
 * Summary.
 *
 * Properties:
 * <ul>
 *
 * <li>TotalOfferCount: int</li>
 * <li>NumberOfOffers: NumberOfOffers</li>
 * <li>LowestPrices: LowestPrices</li>
 * <li>BuyBoxPrices: BuyBoxPrices</li>
 * <li>ListPrice: MoneyType</li>
 * <li>SuggestedLowerPricePlusShipping: MoneyType</li>
 * <li>BuyBoxEligibleOffers: BuyBoxEligibleOffers</li>
 * <li>OffersAvailableTime: string</li>
 *
 * </ul>
 */
class Summary extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TotalOfferCount'                 => ['FieldValue' => null, 'FieldType' => 'int'],
            'NumberOfOffers'                  => ['FieldValue' => null, 'FieldType' => 'NumberOfOffers'],
            'LowestPrices'                    => ['FieldValue' => null, 'FieldType' => 'LowestPrices'],
            'BuyBoxPrices'                    => ['FieldValue' => null, 'FieldType' => 'BuyBoxPrices'],
            'ListPrice'                       => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'SuggestedLowerPricePlusShipping' => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'BuyBoxEligibleOffers'            => ['FieldValue' => null, 'FieldType' => 'BuyBoxEligibleOffers'],
            'OffersAvailableTime'             => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TotalOfferCount property.
     *
     * @return int totalOfferCount
     */
    public function getTotalOfferCount()
    {
        return $this->_fields['TotalOfferCount']['FieldValue'];
    }

    /**
     * Set the value of the TotalOfferCount property.
     *
     * @param int totalOfferCount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTotalOfferCount($value)
    {
        $this->_fields['TotalOfferCount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TotalOfferCount is set.
     *
     * @return true if TotalOfferCount is set
     */
    public function isSetTotalOfferCount()
    {
        return null !== $this->_fields['TotalOfferCount']['FieldValue'];
    }

    /**
     * Set the value of TotalOfferCount, return this.
     *
     * @param totalOfferCount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTotalOfferCount($value)
    {
        $this->setTotalOfferCount($value);

        return $this;
    }

    /**
     * Get the value of the NumberOfOffers property.
     *
     * @return NumberOfOffers numberOfOffers
     */
    public function getNumberOfOffers()
    {
        return $this->_fields['NumberOfOffers']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfOffers property.
     *
     * @param NumberOfOffers numberOfOffers
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfOffers($value)
    {
        $this->_fields['NumberOfOffers']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfOffers is set.
     *
     * @return true if NumberOfOffers is set
     */
    public function isSetNumberOfOffers()
    {
        return null !== $this->_fields['NumberOfOffers']['FieldValue'];
    }

    /**
     * Set the value of NumberOfOffers, return this.
     *
     * @param numberOfOffers
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfOffers($value)
    {
        $this->setNumberOfOffers($value);

        return $this;
    }

    /**
     * Get the value of the LowestPrices property.
     *
     * @return LowestPrices lowestPrices
     */
    public function getLowestPrices()
    {
        return $this->_fields['LowestPrices']['FieldValue'];
    }

    /**
     * Set the value of the LowestPrices property.
     *
     * @param LowestPrices lowestPrices
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLowestPrices($value)
    {
        $this->_fields['LowestPrices']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LowestPrices is set.
     *
     * @return true if LowestPrices is set
     */
    public function isSetLowestPrices()
    {
        return null !== $this->_fields['LowestPrices']['FieldValue'];
    }

    /**
     * Set the value of LowestPrices, return this.
     *
     * @param lowestPrices
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLowestPrices($value)
    {
        $this->setLowestPrices($value);

        return $this;
    }

    /**
     * Get the value of the BuyBoxPrices property.
     *
     * @return BuyBoxPrices buyBoxPrices
     */
    public function getBuyBoxPrices()
    {
        return $this->_fields['BuyBoxPrices']['FieldValue'];
    }

    /**
     * Set the value of the BuyBoxPrices property.
     *
     * @param BuyBoxPrices buyBoxPrices
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyBoxPrices($value)
    {
        $this->_fields['BuyBoxPrices']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyBoxPrices is set.
     *
     * @return true if BuyBoxPrices is set
     */
    public function isSetBuyBoxPrices()
    {
        return null !== $this->_fields['BuyBoxPrices']['FieldValue'];
    }

    /**
     * Set the value of BuyBoxPrices, return this.
     *
     * @param buyBoxPrices
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyBoxPrices($value)
    {
        $this->setBuyBoxPrices($value);

        return $this;
    }

    /**
     * Get the value of the ListPrice property.
     *
     * @return MoneyType listPrice
     */
    public function getListPrice()
    {
        return $this->_fields['ListPrice']['FieldValue'];
    }

    /**
     * Set the value of the ListPrice property.
     *
     * @param MoneyType listPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setListPrice($value)
    {
        $this->_fields['ListPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ListPrice is set.
     *
     * @return true if ListPrice is set
     */
    public function isSetListPrice()
    {
        return null !== $this->_fields['ListPrice']['FieldValue'];
    }

    /**
     * Set the value of ListPrice, return this.
     *
     * @param listPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withListPrice($value)
    {
        $this->setListPrice($value);

        return $this;
    }

    /**
     * Get the value of the SuggestedLowerPricePlusShipping property.
     *
     * @return MoneyType suggestedLowerPricePlusShipping
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->_fields['SuggestedLowerPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the SuggestedLowerPricePlusShipping property.
     *
     * @param MoneyType suggestedLowerPricePlusShipping
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSuggestedLowerPricePlusShipping($value)
    {
        $this->_fields['SuggestedLowerPricePlusShipping']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SuggestedLowerPricePlusShipping is set.
     *
     * @return true if SuggestedLowerPricePlusShipping is set
     */
    public function isSetSuggestedLowerPricePlusShipping()
    {
        return null !== $this->_fields['SuggestedLowerPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of SuggestedLowerPricePlusShipping, return this.
     *
     * @param suggestedLowerPricePlusShipping
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSuggestedLowerPricePlusShipping($value)
    {
        $this->setSuggestedLowerPricePlusShipping($value);

        return $this;
    }

    /**
     * Get the value of the BuyBoxEligibleOffers property.
     *
     * @return BuyBoxEligibleOffers buyBoxEligibleOffers
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->_fields['BuyBoxEligibleOffers']['FieldValue'];
    }

    /**
     * Set the value of the BuyBoxEligibleOffers property.
     *
     * @param BuyBoxEligibleOffers buyBoxEligibleOffers
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyBoxEligibleOffers($value)
    {
        $this->_fields['BuyBoxEligibleOffers']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyBoxEligibleOffers is set.
     *
     * @return true if BuyBoxEligibleOffers is set
     */
    public function isSetBuyBoxEligibleOffers()
    {
        return null !== $this->_fields['BuyBoxEligibleOffers']['FieldValue'];
    }

    /**
     * Set the value of BuyBoxEligibleOffers, return this.
     *
     * @param buyBoxEligibleOffers
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyBoxEligibleOffers($value)
    {
        $this->setBuyBoxEligibleOffers($value);

        return $this;
    }

    /**
     * Get the value of the OffersAvailableTime property.
     *
     * @return XMLGregorianCalendar offersAvailableTime
     */
    public function getOffersAvailableTime()
    {
        return $this->_fields['OffersAvailableTime']['FieldValue'];
    }

    /**
     * Set the value of the OffersAvailableTime property.
     *
     * @param string offersAvailableTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOffersAvailableTime($value)
    {
        $this->_fields['OffersAvailableTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OffersAvailableTime is set.
     *
     * @return true if OffersAvailableTime is set
     */
    public function isSetOffersAvailableTime()
    {
        return null !== $this->_fields['OffersAvailableTime']['FieldValue'];
    }

    /**
     * Set the value of OffersAvailableTime, return this.
     *
     * @param offersAvailableTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOffersAvailableTime($value)
    {
        $this->setOffersAvailableTime($value);

        return $this;
    }
}
