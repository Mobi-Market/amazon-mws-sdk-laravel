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
 * GetLastUpdatedTimeForRecommendationsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>InventoryRecommendationsLastUpdated: string</li>
 * <li>SelectionRecommendationsLastUpdated: string</li>
 * <li>FulfillmentRecommendationsLastUpdated: string</li>
 * <li>PricingRecommendationsLastUpdated: string</li>
 * <li>GlobalSellingRecommendationsLastUpdated: string</li>
 * <li>AdvertisingRecommendationsLastUpdated: string</li>
 *
 * </ul>
 */
class GetLastUpdatedTimeForRecommendationsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'InventoryRecommendationsLastUpdated'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'SelectionRecommendationsLastUpdated'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentRecommendationsLastUpdated'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'PricingRecommendationsLastUpdated'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'GlobalSellingRecommendationsLastUpdated' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AdvertisingRecommendationsLastUpdated'   => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the InventoryRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar inventoryRecommendationsLastUpdated
     */
    public function getInventoryRecommendationsLastUpdated()
    {
        return $this->_fields['InventoryRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the InventoryRecommendationsLastUpdated property.
     *
     * @param string inventoryRecommendationsLastUpdated
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInventoryRecommendationsLastUpdated($value)
    {
        $this->_fields['InventoryRecommendationsLastUpdated']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InventoryRecommendationsLastUpdated is set.
     *
     * @return true if InventoryRecommendationsLastUpdated is set
     */
    public function isSetInventoryRecommendationsLastUpdated()
    {
        return null !== $this->_fields['InventoryRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of InventoryRecommendationsLastUpdated, return this.
     *
     * @param inventoryRecommendationsLastUpdated
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInventoryRecommendationsLastUpdated($value)
    {
        $this->setInventoryRecommendationsLastUpdated($value);

        return $this;
    }

    /**
     * Get the value of the SelectionRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar selectionRecommendationsLastUpdated
     */
    public function getSelectionRecommendationsLastUpdated()
    {
        return $this->_fields['SelectionRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the SelectionRecommendationsLastUpdated property.
     *
     * @param string selectionRecommendationsLastUpdated
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSelectionRecommendationsLastUpdated($value)
    {
        $this->_fields['SelectionRecommendationsLastUpdated']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SelectionRecommendationsLastUpdated is set.
     *
     * @return true if SelectionRecommendationsLastUpdated is set
     */
    public function isSetSelectionRecommendationsLastUpdated()
    {
        return null !== $this->_fields['SelectionRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of SelectionRecommendationsLastUpdated, return this.
     *
     * @param selectionRecommendationsLastUpdated
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSelectionRecommendationsLastUpdated($value)
    {
        $this->setSelectionRecommendationsLastUpdated($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar fulfillmentRecommendationsLastUpdated
     */
    public function getFulfillmentRecommendationsLastUpdated()
    {
        return $this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentRecommendationsLastUpdated property.
     *
     * @param string fulfillmentRecommendationsLastUpdated
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentRecommendationsLastUpdated($value)
    {
        $this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentRecommendationsLastUpdated is set.
     *
     * @return true if FulfillmentRecommendationsLastUpdated is set
     */
    public function isSetFulfillmentRecommendationsLastUpdated()
    {
        return null !== $this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentRecommendationsLastUpdated, return this.
     *
     * @param fulfillmentRecommendationsLastUpdated
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentRecommendationsLastUpdated($value)
    {
        $this->setFulfillmentRecommendationsLastUpdated($value);

        return $this;
    }

    /**
     * Get the value of the PricingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar pricingRecommendationsLastUpdated
     */
    public function getPricingRecommendationsLastUpdated()
    {
        return $this->_fields['PricingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the PricingRecommendationsLastUpdated property.
     *
     * @param string pricingRecommendationsLastUpdated
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPricingRecommendationsLastUpdated($value)
    {
        $this->_fields['PricingRecommendationsLastUpdated']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PricingRecommendationsLastUpdated is set.
     *
     * @return true if PricingRecommendationsLastUpdated is set
     */
    public function isSetPricingRecommendationsLastUpdated()
    {
        return null !== $this->_fields['PricingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of PricingRecommendationsLastUpdated, return this.
     *
     * @param pricingRecommendationsLastUpdated
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPricingRecommendationsLastUpdated($value)
    {
        $this->setPricingRecommendationsLastUpdated($value);

        return $this;
    }

    /**
     * Get the value of the GlobalSellingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar globalSellingRecommendationsLastUpdated
     */
    public function getGlobalSellingRecommendationsLastUpdated()
    {
        return $this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the GlobalSellingRecommendationsLastUpdated property.
     *
     * @param string globalSellingRecommendationsLastUpdated
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGlobalSellingRecommendationsLastUpdated($value)
    {
        $this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GlobalSellingRecommendationsLastUpdated is set.
     *
     * @return true if GlobalSellingRecommendationsLastUpdated is set
     */
    public function isSetGlobalSellingRecommendationsLastUpdated()
    {
        return null !== $this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of GlobalSellingRecommendationsLastUpdated, return this.
     *
     * @param globalSellingRecommendationsLastUpdated
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGlobalSellingRecommendationsLastUpdated($value)
    {
        $this->setGlobalSellingRecommendationsLastUpdated($value);

        return $this;
    }

    /**
     * Get the value of the AdvertisingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar advertisingRecommendationsLastUpdated
     */
    public function getAdvertisingRecommendationsLastUpdated()
    {
        return $this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the AdvertisingRecommendationsLastUpdated property.
     *
     * @param string advertisingRecommendationsLastUpdated
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAdvertisingRecommendationsLastUpdated($value)
    {
        $this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AdvertisingRecommendationsLastUpdated is set.
     *
     * @return true if AdvertisingRecommendationsLastUpdated is set
     */
    public function isSetAdvertisingRecommendationsLastUpdated()
    {
        return null !== $this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of AdvertisingRecommendationsLastUpdated, return this.
     *
     * @param advertisingRecommendationsLastUpdated
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAdvertisingRecommendationsLastUpdated($value)
    {
        $this->setAdvertisingRecommendationsLastUpdated($value);

        return $this;
    }
}
