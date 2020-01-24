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
 * OfferType.
 *
 * Properties:
 * <ul>
 *
 * <li>BuyingPrice: PriceType</li>
 * <li>RegularPrice: MoneyType</li>
 * <li>FulfillmentChannel: string</li>
 * <li>ItemCondition: string</li>
 * <li>ItemSubCondition: string</li>
 * <li>SellerId: string</li>
 * <li>SellerSKU: string</li>
 *
 * </ul>
 */
class OfferType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'BuyingPrice'        => ['FieldValue' => null, 'FieldType' => 'PriceType'],
            'RegularPrice'       => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'FulfillmentChannel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ItemCondition'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'ItemSubCondition'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerId'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerSKU'          => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the BuyingPrice property.
     *
     * @return PriceType buyingPrice
     */
    public function getBuyingPrice()
    {
        return $this->_fields['BuyingPrice']['FieldValue'];
    }

    /**
     * Set the value of the BuyingPrice property.
     *
     * @param PriceType buyingPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyingPrice($value)
    {
        $this->_fields['BuyingPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyingPrice is set.
     *
     * @return true if BuyingPrice is set
     */
    public function isSetBuyingPrice()
    {
        return null !== $this->_fields['BuyingPrice']['FieldValue'];
    }

    /**
     * Set the value of BuyingPrice, return this.
     *
     * @param buyingPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyingPrice($value)
    {
        $this->setBuyingPrice($value);

        return $this;
    }

    /**
     * Get the value of the RegularPrice property.
     *
     * @return MoneyType regularPrice
     */
    public function getRegularPrice()
    {
        return $this->_fields['RegularPrice']['FieldValue'];
    }

    /**
     * Set the value of the RegularPrice property.
     *
     * @param MoneyType regularPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRegularPrice($value)
    {
        $this->_fields['RegularPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RegularPrice is set.
     *
     * @return true if RegularPrice is set
     */
    public function isSetRegularPrice()
    {
        return null !== $this->_fields['RegularPrice']['FieldValue'];
    }

    /**
     * Set the value of RegularPrice, return this.
     *
     * @param regularPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRegularPrice($value)
    {
        $this->setRegularPrice($value);

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
     * Get the value of the ItemSubCondition property.
     *
     * @return string itemSubCondition
     */
    public function getItemSubCondition()
    {
        return $this->_fields['ItemSubCondition']['FieldValue'];
    }

    /**
     * Set the value of the ItemSubCondition property.
     *
     * @param string itemSubCondition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemSubCondition($value)
    {
        $this->_fields['ItemSubCondition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemSubCondition is set.
     *
     * @return true if ItemSubCondition is set
     */
    public function isSetItemSubCondition()
    {
        return null !== $this->_fields['ItemSubCondition']['FieldValue'];
    }

    /**
     * Set the value of ItemSubCondition, return this.
     *
     * @param itemSubCondition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemSubCondition($value)
    {
        $this->setItemSubCondition($value);

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
}
