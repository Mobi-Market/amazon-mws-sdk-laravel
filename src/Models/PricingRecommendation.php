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
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2014-10-01
 * Generated: Wed Sep 12 07:35:28 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * PricingRecommendation.
 *
 * Properties:
 * <ul>
 *
 * <li>LastUpdated: string</li>
 * <li>ItemIdentifier: ProductIdentifier</li>
 * <li>ItemName: string</li>
 * <li>Condition: string</li>
 * <li>SubCondition: string</li>
 * <li>FulfillmentChannel: string</li>
 * <li>YourPricePlusShipping: Price</li>
 * <li>LowestPricePlusShipping: Price</li>
 * <li>PriceDifferenceToLowPrice: Price</li>
 * <li>MedianPricePlusShipping: Price</li>
 * <li>LowestMerchantFulfilledOfferPrice: Price</li>
 * <li>LowestAmazonFulfilledOfferPrice: Price</li>
 * <li>NumberOfOffers: int</li>
 * <li>NumberOfMerchantFulfilledOffers: int</li>
 * <li>NumberOfAmazonFulfilledOffers: int</li>
 * <li>RecommendationId: string</li>
 * <li>RecommendationReason: string</li>
 *
 * </ul>
 */
class PricingRecommendation extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'LastUpdated'                       => ['FieldValue' => null, 'FieldType' => 'string'],
            'ItemIdentifier'                    => ['FieldValue' => null, 'FieldType' => 'ProductIdentifier'],
            'ItemName'                          => ['FieldValue' => null, 'FieldType' => 'string'],
            'Condition'                         => ['FieldValue' => null, 'FieldType' => 'string'],
            'SubCondition'                      => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentChannel'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'YourPricePlusShipping'             => ['FieldValue' => null, 'FieldType' => 'Price'],
            'LowestPricePlusShipping'           => ['FieldValue' => null, 'FieldType' => 'Price'],
            'PriceDifferenceToLowPrice'         => ['FieldValue' => null, 'FieldType' => 'Price'],
            'MedianPricePlusShipping'           => ['FieldValue' => null, 'FieldType' => 'Price'],
            'LowestMerchantFulfilledOfferPrice' => ['FieldValue' => null, 'FieldType' => 'Price'],
            'LowestAmazonFulfilledOfferPrice'   => ['FieldValue' => null, 'FieldType' => 'Price'],
            'NumberOfOffers'                    => ['FieldValue' => null, 'FieldType' => 'int'],
            'NumberOfMerchantFulfilledOffers'   => ['FieldValue' => null, 'FieldType' => 'int'],
            'NumberOfAmazonFulfilledOffers'     => ['FieldValue' => null, 'FieldType' => 'int'],
            'RecommendationId'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'RecommendationReason'              => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the LastUpdated property.
     *
     * @return XMLGregorianCalendar lastUpdated
     */
    public function getLastUpdated()
    {
        return $this->_fields['LastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdated property.
     *
     * @param string lastUpdated
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLastUpdated($value)
    {
        $this->_fields['LastUpdated']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LastUpdated is set.
     *
     * @return true if LastUpdated is set
     */
    public function isSetLastUpdated()
    {
        return null !== $this->_fields['LastUpdated']['FieldValue'];
    }

    /**
     * Set the value of LastUpdated, return this.
     *
     * @param lastUpdated
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLastUpdated($value)
    {
        $this->setLastUpdated($value);

        return $this;
    }

    /**
     * Get the value of the ItemIdentifier property.
     *
     * @return ProductIdentifier itemIdentifier
     */
    public function getItemIdentifier()
    {
        return $this->_fields['ItemIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the ItemIdentifier property.
     *
     * @param ProductIdentifier itemIdentifier
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemIdentifier($value)
    {
        $this->_fields['ItemIdentifier']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemIdentifier is set.
     *
     * @return true if ItemIdentifier is set
     */
    public function isSetItemIdentifier()
    {
        return null !== $this->_fields['ItemIdentifier']['FieldValue'];
    }

    /**
     * Set the value of ItemIdentifier, return this.
     *
     * @param itemIdentifier
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemIdentifier($value)
    {
        $this->setItemIdentifier($value);

        return $this;
    }

    /**
     * Get the value of the ItemName property.
     *
     * @return string itemName
     */
    public function getItemName()
    {
        return $this->_fields['ItemName']['FieldValue'];
    }

    /**
     * Set the value of the ItemName property.
     *
     * @param string itemName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemName($value)
    {
        $this->_fields['ItemName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemName is set.
     *
     * @return true if ItemName is set
     */
    public function isSetItemName()
    {
        return null !== $this->_fields['ItemName']['FieldValue'];
    }

    /**
     * Set the value of ItemName, return this.
     *
     * @param itemName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemName($value)
    {
        $this->setItemName($value);

        return $this;
    }

    /**
     * Get the value of the Condition property.
     *
     * @return string condition
     */
    public function getCondition()
    {
        return $this->_fields['Condition']['FieldValue'];
    }

    /**
     * Set the value of the Condition property.
     *
     * @param string condition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCondition($value)
    {
        $this->_fields['Condition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Condition is set.
     *
     * @return true if Condition is set
     */
    public function isSetCondition()
    {
        return null !== $this->_fields['Condition']['FieldValue'];
    }

    /**
     * Set the value of Condition, return this.
     *
     * @param condition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCondition($value)
    {
        $this->setCondition($value);

        return $this;
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
     * Get the value of the FulfillmentChannel property.
     *
     * @return string fulfillmentChannel
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set
     */
    public function isSetFulfillmentChannel()
    {
        return null !== $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);

        return $this;
    }

    /**
     * Get the value of the YourPricePlusShipping property.
     *
     * @return Price yourPricePlusShipping
     */
    public function getYourPricePlusShipping()
    {
        return $this->_fields['YourPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the YourPricePlusShipping property.
     *
     * @param Price yourPricePlusShipping
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setYourPricePlusShipping($value)
    {
        $this->_fields['YourPricePlusShipping']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if YourPricePlusShipping is set.
     *
     * @return true if YourPricePlusShipping is set
     */
    public function isSetYourPricePlusShipping()
    {
        return null !== $this->_fields['YourPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of YourPricePlusShipping, return this.
     *
     * @param yourPricePlusShipping
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withYourPricePlusShipping($value)
    {
        $this->setYourPricePlusShipping($value);

        return $this;
    }

    /**
     * Get the value of the LowestPricePlusShipping property.
     *
     * @return Price lowestPricePlusShipping
     */
    public function getLowestPricePlusShipping()
    {
        return $this->_fields['LowestPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the LowestPricePlusShipping property.
     *
     * @param Price lowestPricePlusShipping
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLowestPricePlusShipping($value)
    {
        $this->_fields['LowestPricePlusShipping']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LowestPricePlusShipping is set.
     *
     * @return true if LowestPricePlusShipping is set
     */
    public function isSetLowestPricePlusShipping()
    {
        return null !== $this->_fields['LowestPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of LowestPricePlusShipping, return this.
     *
     * @param lowestPricePlusShipping
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLowestPricePlusShipping($value)
    {
        $this->setLowestPricePlusShipping($value);

        return $this;
    }

    /**
     * Get the value of the PriceDifferenceToLowPrice property.
     *
     * @return Price priceDifferenceToLowPrice
     */
    public function getPriceDifferenceToLowPrice()
    {
        return $this->_fields['PriceDifferenceToLowPrice']['FieldValue'];
    }

    /**
     * Set the value of the PriceDifferenceToLowPrice property.
     *
     * @param Price priceDifferenceToLowPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPriceDifferenceToLowPrice($value)
    {
        $this->_fields['PriceDifferenceToLowPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PriceDifferenceToLowPrice is set.
     *
     * @return true if PriceDifferenceToLowPrice is set
     */
    public function isSetPriceDifferenceToLowPrice()
    {
        return null !== $this->_fields['PriceDifferenceToLowPrice']['FieldValue'];
    }

    /**
     * Set the value of PriceDifferenceToLowPrice, return this.
     *
     * @param priceDifferenceToLowPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPriceDifferenceToLowPrice($value)
    {
        $this->setPriceDifferenceToLowPrice($value);

        return $this;
    }

    /**
     * Get the value of the MedianPricePlusShipping property.
     *
     * @return Price medianPricePlusShipping
     */
    public function getMedianPricePlusShipping()
    {
        return $this->_fields['MedianPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the MedianPricePlusShipping property.
     *
     * @param Price medianPricePlusShipping
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMedianPricePlusShipping($value)
    {
        $this->_fields['MedianPricePlusShipping']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MedianPricePlusShipping is set.
     *
     * @return true if MedianPricePlusShipping is set
     */
    public function isSetMedianPricePlusShipping()
    {
        return null !== $this->_fields['MedianPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of MedianPricePlusShipping, return this.
     *
     * @param medianPricePlusShipping
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMedianPricePlusShipping($value)
    {
        $this->setMedianPricePlusShipping($value);

        return $this;
    }

    /**
     * Get the value of the LowestMerchantFulfilledOfferPrice property.
     *
     * @return Price lowestMerchantFulfilledOfferPrice
     */
    public function getLowestMerchantFulfilledOfferPrice()
    {
        return $this->_fields['LowestMerchantFulfilledOfferPrice']['FieldValue'];
    }

    /**
     * Set the value of the LowestMerchantFulfilledOfferPrice property.
     *
     * @param Price lowestMerchantFulfilledOfferPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLowestMerchantFulfilledOfferPrice($value)
    {
        $this->_fields['LowestMerchantFulfilledOfferPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LowestMerchantFulfilledOfferPrice is set.
     *
     * @return true if LowestMerchantFulfilledOfferPrice is set
     */
    public function isSetLowestMerchantFulfilledOfferPrice()
    {
        return null !== $this->_fields['LowestMerchantFulfilledOfferPrice']['FieldValue'];
    }

    /**
     * Set the value of LowestMerchantFulfilledOfferPrice, return this.
     *
     * @param lowestMerchantFulfilledOfferPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLowestMerchantFulfilledOfferPrice($value)
    {
        $this->setLowestMerchantFulfilledOfferPrice($value);

        return $this;
    }

    /**
     * Get the value of the LowestAmazonFulfilledOfferPrice property.
     *
     * @return Price lowestAmazonFulfilledOfferPrice
     */
    public function getLowestAmazonFulfilledOfferPrice()
    {
        return $this->_fields['LowestAmazonFulfilledOfferPrice']['FieldValue'];
    }

    /**
     * Set the value of the LowestAmazonFulfilledOfferPrice property.
     *
     * @param Price lowestAmazonFulfilledOfferPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLowestAmazonFulfilledOfferPrice($value)
    {
        $this->_fields['LowestAmazonFulfilledOfferPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LowestAmazonFulfilledOfferPrice is set.
     *
     * @return true if LowestAmazonFulfilledOfferPrice is set
     */
    public function isSetLowestAmazonFulfilledOfferPrice()
    {
        return null !== $this->_fields['LowestAmazonFulfilledOfferPrice']['FieldValue'];
    }

    /**
     * Set the value of LowestAmazonFulfilledOfferPrice, return this.
     *
     * @param lowestAmazonFulfilledOfferPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLowestAmazonFulfilledOfferPrice($value)
    {
        $this->setLowestAmazonFulfilledOfferPrice($value);

        return $this;
    }

    /**
     * Get the value of the NumberOfOffers property.
     *
     * @return int numberOfOffers
     */
    public function getNumberOfOffers()
    {
        return $this->_fields['NumberOfOffers']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfOffers property.
     *
     * @param int numberOfOffers
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
     * Get the value of the NumberOfMerchantFulfilledOffers property.
     *
     * @return int numberOfMerchantFulfilledOffers
     */
    public function getNumberOfMerchantFulfilledOffers()
    {
        return $this->_fields['NumberOfMerchantFulfilledOffers']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfMerchantFulfilledOffers property.
     *
     * @param int numberOfMerchantFulfilledOffers
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfMerchantFulfilledOffers($value)
    {
        $this->_fields['NumberOfMerchantFulfilledOffers']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfMerchantFulfilledOffers is set.
     *
     * @return true if NumberOfMerchantFulfilledOffers is set
     */
    public function isSetNumberOfMerchantFulfilledOffers()
    {
        return null !== $this->_fields['NumberOfMerchantFulfilledOffers']['FieldValue'];
    }

    /**
     * Set the value of NumberOfMerchantFulfilledOffers, return this.
     *
     * @param numberOfMerchantFulfilledOffers
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfMerchantFulfilledOffers($value)
    {
        $this->setNumberOfMerchantFulfilledOffers($value);

        return $this;
    }

    /**
     * Get the value of the NumberOfAmazonFulfilledOffers property.
     *
     * @return int numberOfAmazonFulfilledOffers
     */
    public function getNumberOfAmazonFulfilledOffers()
    {
        return $this->_fields['NumberOfAmazonFulfilledOffers']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfAmazonFulfilledOffers property.
     *
     * @param int numberOfAmazonFulfilledOffers
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfAmazonFulfilledOffers($value)
    {
        $this->_fields['NumberOfAmazonFulfilledOffers']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfAmazonFulfilledOffers is set.
     *
     * @return true if NumberOfAmazonFulfilledOffers is set
     */
    public function isSetNumberOfAmazonFulfilledOffers()
    {
        return null !== $this->_fields['NumberOfAmazonFulfilledOffers']['FieldValue'];
    }

    /**
     * Set the value of NumberOfAmazonFulfilledOffers, return this.
     *
     * @param numberOfAmazonFulfilledOffers
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfAmazonFulfilledOffers($value)
    {
        $this->setNumberOfAmazonFulfilledOffers($value);

        return $this;
    }

    /**
     * Get the value of the RecommendationId property.
     *
     * @return string recommendationId
     */
    public function getRecommendationId()
    {
        return $this->_fields['RecommendationId']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationId property.
     *
     * @param string recommendationId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRecommendationId($value)
    {
        $this->_fields['RecommendationId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RecommendationId is set.
     *
     * @return true if RecommendationId is set
     */
    public function isSetRecommendationId()
    {
        return null !== $this->_fields['RecommendationId']['FieldValue'];
    }

    /**
     * Set the value of RecommendationId, return this.
     *
     * @param recommendationId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRecommendationId($value)
    {
        $this->setRecommendationId($value);

        return $this;
    }

    /**
     * Get the value of the RecommendationReason property.
     *
     * @return string recommendationReason
     */
    public function getRecommendationReason()
    {
        return $this->_fields['RecommendationReason']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationReason property.
     *
     * @param string recommendationReason
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRecommendationReason($value)
    {
        $this->_fields['RecommendationReason']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RecommendationReason is set.
     *
     * @return true if RecommendationReason is set
     */
    public function isSetRecommendationReason()
    {
        return null !== $this->_fields['RecommendationReason']['FieldValue'];
    }

    /**
     * Set the value of RecommendationReason, return this.
     *
     * @param recommendationReason
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRecommendationReason($value)
    {
        $this->setRecommendationReason($value);

        return $this;
    }
}
