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
 * GetLowestPricedOffersSkuIdentifier.
 *
 * Properties:
 * <ul>
 *
 * <li>MarketplaceId: string</li>
 * <li>SellerSKU: string</li>
 * <li>ItemCondition: string</li>
 * <li>TimeOfOfferChange: string</li>
 *
 * </ul>
 */
class GetLowestPricedOffersSkuIdentifier extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'MarketplaceId'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerSKU'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'ItemCondition'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'TimeOfOfferChange' => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * Get the value of the SellerSKU property.
     *
     * @return string sellerSKU
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set
     */
    public function isSetSellerSKU()
    {
        return null !== $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);

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
     * Get the value of the TimeOfOfferChange property.
     *
     * @return XMLGregorianCalendar timeOfOfferChange
     */
    public function getTimeOfOfferChange()
    {
        return $this->_fields['TimeOfOfferChange']['FieldValue'];
    }

    /**
     * Set the value of the TimeOfOfferChange property.
     *
     * @param string timeOfOfferChange
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTimeOfOfferChange($value)
    {
        $this->_fields['TimeOfOfferChange']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TimeOfOfferChange is set.
     *
     * @return true if TimeOfOfferChange is set
     */
    public function isSetTimeOfOfferChange()
    {
        return null !== $this->_fields['TimeOfOfferChange']['FieldValue'];
    }

    /**
     * Set the value of TimeOfOfferChange, return this.
     *
     * @param timeOfOfferChange
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTimeOfOfferChange($value)
    {
        $this->setTimeOfOfferChange($value);

        return $this;
    }
}
