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
 * GlobalSellingRecommendation.
 *
 * Properties:
 * <ul>
 *
 * <li>LastUpdated: string</li>
 * <li>ItemIdentifier: ProductIdentifier</li>
 * <li>ItemName: string</li>
 * <li>BrandName: string</li>
 * <li>ProductCategory: string</li>
 * <li>SalesRank: int</li>
 * <li>BuyboxPrice: Price</li>
 * <li>NumberOfOffers: int</li>
 * <li>NumberOfOffersFulfilledByAmazon: int</li>
 * <li>AverageCustomerReview: float</li>
 * <li>NumberOfCustomerReviews: int</li>
 * <li>ItemDimensions: ItemDimensions</li>
 * <li>RecommendationId: string</li>
 * <li>RecommendationReason: string</li>
 *
 * </ul>
 */
class GlobalSellingRecommendation extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'LastUpdated'                     => ['FieldValue' => null, 'FieldType' => 'string'],
            'ItemIdentifier'                  => ['FieldValue' => null, 'FieldType' => 'ProductIdentifier'],
            'ItemName'                        => ['FieldValue' => null, 'FieldType' => 'string'],
            'BrandName'                       => ['FieldValue' => null, 'FieldType' => 'string'],
            'ProductCategory'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'SalesRank'                       => ['FieldValue' => null, 'FieldType' => 'int'],
            'BuyboxPrice'                     => ['FieldValue' => null, 'FieldType' => 'Price'],
            'NumberOfOffers'                  => ['FieldValue' => null, 'FieldType' => 'int'],
            'NumberOfOffersFulfilledByAmazon' => ['FieldValue' => null, 'FieldType' => 'int'],
            'AverageCustomerReview'           => ['FieldValue' => null, 'FieldType' => 'float'],
            'NumberOfCustomerReviews'         => ['FieldValue' => null, 'FieldType' => 'int'],
            'ItemDimensions'                  => ['FieldValue' => null, 'FieldType' => 'ItemDimensions'],
            'RecommendationId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'RecommendationReason'            => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * Get the value of the BrandName property.
     *
     * @return string brandName
     */
    public function getBrandName()
    {
        return $this->_fields['BrandName']['FieldValue'];
    }

    /**
     * Set the value of the BrandName property.
     *
     * @param string brandName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBrandName($value)
    {
        $this->_fields['BrandName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BrandName is set.
     *
     * @return true if BrandName is set
     */
    public function isSetBrandName()
    {
        return null !== $this->_fields['BrandName']['FieldValue'];
    }

    /**
     * Set the value of BrandName, return this.
     *
     * @param brandName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBrandName($value)
    {
        $this->setBrandName($value);

        return $this;
    }

    /**
     * Get the value of the ProductCategory property.
     *
     * @return string productCategory
     */
    public function getProductCategory()
    {
        return $this->_fields['ProductCategory']['FieldValue'];
    }

    /**
     * Set the value of the ProductCategory property.
     *
     * @param string productCategory
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProductCategory($value)
    {
        $this->_fields['ProductCategory']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ProductCategory is set.
     *
     * @return true if ProductCategory is set
     */
    public function isSetProductCategory()
    {
        return null !== $this->_fields['ProductCategory']['FieldValue'];
    }

    /**
     * Set the value of ProductCategory, return this.
     *
     * @param productCategory
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProductCategory($value)
    {
        $this->setProductCategory($value);

        return $this;
    }

    /**
     * Get the value of the SalesRank property.
     *
     * @return int salesRank
     */
    public function getSalesRank()
    {
        return $this->_fields['SalesRank']['FieldValue'];
    }

    /**
     * Set the value of the SalesRank property.
     *
     * @param int salesRank
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSalesRank($value)
    {
        $this->_fields['SalesRank']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SalesRank is set.
     *
     * @return true if SalesRank is set
     */
    public function isSetSalesRank()
    {
        return null !== $this->_fields['SalesRank']['FieldValue'];
    }

    /**
     * Set the value of SalesRank, return this.
     *
     * @param salesRank
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSalesRank($value)
    {
        $this->setSalesRank($value);

        return $this;
    }

    /**
     * Get the value of the BuyboxPrice property.
     *
     * @return Price buyboxPrice
     */
    public function getBuyboxPrice()
    {
        return $this->_fields['BuyboxPrice']['FieldValue'];
    }

    /**
     * Set the value of the BuyboxPrice property.
     *
     * @param Price buyboxPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyboxPrice($value)
    {
        $this->_fields['BuyboxPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyboxPrice is set.
     *
     * @return true if BuyboxPrice is set
     */
    public function isSetBuyboxPrice()
    {
        return null !== $this->_fields['BuyboxPrice']['FieldValue'];
    }

    /**
     * Set the value of BuyboxPrice, return this.
     *
     * @param buyboxPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyboxPrice($value)
    {
        $this->setBuyboxPrice($value);

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
     * Get the value of the NumberOfOffersFulfilledByAmazon property.
     *
     * @return int numberOfOffersFulfilledByAmazon
     */
    public function getNumberOfOffersFulfilledByAmazon()
    {
        return $this->_fields['NumberOfOffersFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfOffersFulfilledByAmazon property.
     *
     * @param int numberOfOffersFulfilledByAmazon
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfOffersFulfilledByAmazon($value)
    {
        $this->_fields['NumberOfOffersFulfilledByAmazon']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfOffersFulfilledByAmazon is set.
     *
     * @return true if NumberOfOffersFulfilledByAmazon is set
     */
    public function isSetNumberOfOffersFulfilledByAmazon()
    {
        return null !== $this->_fields['NumberOfOffersFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Set the value of NumberOfOffersFulfilledByAmazon, return this.
     *
     * @param numberOfOffersFulfilledByAmazon
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfOffersFulfilledByAmazon($value)
    {
        $this->setNumberOfOffersFulfilledByAmazon($value);

        return $this;
    }

    /**
     * Get the value of the AverageCustomerReview property.
     *
     * @return BigDecimal averageCustomerReview
     */
    public function getAverageCustomerReview()
    {
        return $this->_fields['AverageCustomerReview']['FieldValue'];
    }

    /**
     * Set the value of the AverageCustomerReview property.
     *
     * @param float averageCustomerReview
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAverageCustomerReview($value)
    {
        $this->_fields['AverageCustomerReview']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AverageCustomerReview is set.
     *
     * @return true if AverageCustomerReview is set
     */
    public function isSetAverageCustomerReview()
    {
        return null !== $this->_fields['AverageCustomerReview']['FieldValue'];
    }

    /**
     * Set the value of AverageCustomerReview, return this.
     *
     * @param averageCustomerReview
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAverageCustomerReview($value)
    {
        $this->setAverageCustomerReview($value);

        return $this;
    }

    /**
     * Get the value of the NumberOfCustomerReviews property.
     *
     * @return int numberOfCustomerReviews
     */
    public function getNumberOfCustomerReviews()
    {
        return $this->_fields['NumberOfCustomerReviews']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfCustomerReviews property.
     *
     * @param int numberOfCustomerReviews
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfCustomerReviews($value)
    {
        $this->_fields['NumberOfCustomerReviews']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfCustomerReviews is set.
     *
     * @return true if NumberOfCustomerReviews is set
     */
    public function isSetNumberOfCustomerReviews()
    {
        return null !== $this->_fields['NumberOfCustomerReviews']['FieldValue'];
    }

    /**
     * Set the value of NumberOfCustomerReviews, return this.
     *
     * @param numberOfCustomerReviews
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfCustomerReviews($value)
    {
        $this->setNumberOfCustomerReviews($value);

        return $this;
    }

    /**
     * Get the value of the ItemDimensions property.
     *
     * @return ItemDimensions itemDimensions
     */
    public function getItemDimensions()
    {
        return $this->_fields['ItemDimensions']['FieldValue'];
    }

    /**
     * Set the value of the ItemDimensions property.
     *
     * @param ItemDimensions itemDimensions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemDimensions($value)
    {
        $this->_fields['ItemDimensions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemDimensions is set.
     *
     * @return true if ItemDimensions is set
     */
    public function isSetItemDimensions()
    {
        return null !== $this->_fields['ItemDimensions']['FieldValue'];
    }

    /**
     * Set the value of ItemDimensions, return this.
     *
     * @param itemDimensions
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemDimensions($value)
    {
        $this->setItemDimensions($value);

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
