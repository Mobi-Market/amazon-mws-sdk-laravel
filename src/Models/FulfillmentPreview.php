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
 * FulfillmentPreview.
 *
 * Properties:
 * <ul>
 *
 * <li>ShippingSpeedCategory: string</li>
 * <li>ScheduledDeliveryInfo: ScheduledDeliveryInfo</li>
 * <li>IsFulfillable: bool</li>
 * <li>IsCODCapable: bool</li>
 * <li>EstimatedShippingWeight: Weight</li>
 * <li>EstimatedFees: FeeList</li>
 * <li>FulfillmentPreviewShipments: FulfillmentPreviewShipmentList</li>
 * <li>UnfulfillablePreviewItems: UnfulfillablePreviewItemList</li>
 * <li>OrderUnfulfillableReasons: StringList</li>
 * <li>MarketplaceId: string</li>
 *
 * </ul>
 */
class FulfillmentPreview extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShippingSpeedCategory'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'ScheduledDeliveryInfo'       => ['FieldValue' => null, 'FieldType' => 'ScheduledDeliveryInfo'],
            'IsFulfillable'               => ['FieldValue' => null, 'FieldType' => 'bool'],
            'IsCODCapable'                => ['FieldValue' => null, 'FieldType' => 'bool'],
            'EstimatedShippingWeight'     => ['FieldValue' => null, 'FieldType' => 'Weight'],
            'EstimatedFees'               => ['FieldValue' => null, 'FieldType' => 'FeeList'],
            'FulfillmentPreviewShipments' => ['FieldValue' => null, 'FieldType' => 'FulfillmentPreviewShipmentList'],
            'UnfulfillablePreviewItems'   => ['FieldValue' => null, 'FieldType' => 'UnfulfillablePreviewItemList'],
            'OrderUnfulfillableReasons'   => ['FieldValue' => null, 'FieldType' => 'StringList'],
            'MarketplaceId'               => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ShippingSpeedCategory property.
     *
     * @return string shippingSpeedCategory
     */
    public function getShippingSpeedCategory()
    {
        return $this->_fields['ShippingSpeedCategory']['FieldValue'];
    }

    /**
     * Set the value of the ShippingSpeedCategory property.
     *
     * @param string shippingSpeedCategory
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingSpeedCategory($value)
    {
        $this->_fields['ShippingSpeedCategory']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingSpeedCategory is set.
     *
     * @return true if ShippingSpeedCategory is set
     */
    public function isSetShippingSpeedCategory()
    {
        return null !== $this->_fields['ShippingSpeedCategory']['FieldValue'];
    }

    /**
     * Set the value of ShippingSpeedCategory, return this.
     *
     * @param shippingSpeedCategory
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingSpeedCategory($value)
    {
        $this->setShippingSpeedCategory($value);

        return $this;
    }

    /**
     * Get the value of the ScheduledDeliveryInfo property.
     *
     * @return ScheduledDeliveryInfo scheduledDeliveryInfo
     */
    public function getScheduledDeliveryInfo()
    {
        return $this->_fields['ScheduledDeliveryInfo']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledDeliveryInfo property.
     *
     * @param ScheduledDeliveryInfo scheduledDeliveryInfo
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledDeliveryInfo($value)
    {
        $this->_fields['ScheduledDeliveryInfo']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ScheduledDeliveryInfo is set.
     *
     * @return true if ScheduledDeliveryInfo is set
     */
    public function isSetScheduledDeliveryInfo()
    {
        return null !== $this->_fields['ScheduledDeliveryInfo']['FieldValue'];
    }

    /**
     * Set the value of ScheduledDeliveryInfo, return this.
     *
     * @param scheduledDeliveryInfo
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withScheduledDeliveryInfo($value)
    {
        $this->setScheduledDeliveryInfo($value);

        return $this;
    }

    /**
     * Check the value of IsFulfillable.
     *
     * @return true if IsFulfillable is set to true
     */
    public function isIsFulfillable()
    {
        return $this->_fields['IsFulfillable']['FieldValue'];
    }

    /**
     * Get the value of the IsFulfillable property.
     *
     * @return bool isFulfillable
     */
    public function getIsFulfillable()
    {
        return $this->_fields['IsFulfillable']['FieldValue'];
    }

    /**
     * Set the value of the IsFulfillable property.
     *
     * @param bool isFulfillable
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsFulfillable($value)
    {
        $this->_fields['IsFulfillable']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsFulfillable is set.
     *
     * @return true if IsFulfillable is set
     */
    public function isSetIsFulfillable()
    {
        return null !== $this->_fields['IsFulfillable']['FieldValue'];
    }

    /**
     * Set the value of IsFulfillable, return this.
     *
     * @param isFulfillable
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsFulfillable($value)
    {
        $this->setIsFulfillable($value);

        return $this;
    }

    /**
     * Check the value of IsCODCapable.
     *
     * @return true if IsCODCapable is set to true
     */
    public function isIsCODCapable()
    {
        return null !== $this->_fields['IsCODCapable']['FieldValue'] && $this->_fields['IsCODCapable']['FieldValue'];
    }

    /**
     * Get the value of the IsCODCapable property.
     *
     * @return bool isCODCapable
     */
    public function getIsCODCapable()
    {
        return $this->_fields['IsCODCapable']['FieldValue'];
    }

    /**
     * Set the value of the IsCODCapable property.
     *
     * @param bool isCODCapable
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsCODCapable($value)
    {
        $this->_fields['IsCODCapable']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsCODCapable is set.
     *
     * @return true if IsCODCapable is set
     */
    public function isSetIsCODCapable()
    {
        return null !== $this->_fields['IsCODCapable']['FieldValue'];
    }

    /**
     * Set the value of IsCODCapable, return this.
     *
     * @param isCODCapable
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsCODCapable($value)
    {
        $this->setIsCODCapable($value);

        return $this;
    }

    /**
     * Get the value of the EstimatedShippingWeight property.
     *
     * @return Weight estimatedShippingWeight
     */
    public function getEstimatedShippingWeight()
    {
        return $this->_fields['EstimatedShippingWeight']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedShippingWeight property.
     *
     * @param Weight estimatedShippingWeight
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEstimatedShippingWeight($value)
    {
        $this->_fields['EstimatedShippingWeight']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EstimatedShippingWeight is set.
     *
     * @return true if EstimatedShippingWeight is set
     */
    public function isSetEstimatedShippingWeight()
    {
        return null !== $this->_fields['EstimatedShippingWeight']['FieldValue'];
    }

    /**
     * Set the value of EstimatedShippingWeight, return this.
     *
     * @param estimatedShippingWeight
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEstimatedShippingWeight($value)
    {
        $this->setEstimatedShippingWeight($value);

        return $this;
    }

    /**
     * Get the value of the EstimatedFees property.
     *
     * @return FeeList estimatedFees
     */
    public function getEstimatedFees()
    {
        return $this->_fields['EstimatedFees']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedFees property.
     *
     * @param FeeList estimatedFees
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEstimatedFees($value)
    {
        $this->_fields['EstimatedFees']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EstimatedFees is set.
     *
     * @return true if EstimatedFees is set
     */
    public function isSetEstimatedFees()
    {
        return null !== $this->_fields['EstimatedFees']['FieldValue'];
    }

    /**
     * Set the value of EstimatedFees, return this.
     *
     * @param estimatedFees
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEstimatedFees($value)
    {
        $this->setEstimatedFees($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentPreviewShipments property.
     *
     * @return FulfillmentPreviewShipmentList fulfillmentPreviewShipments
     */
    public function getFulfillmentPreviewShipments()
    {
        return $this->_fields['FulfillmentPreviewShipments']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentPreviewShipments property.
     *
     * @param FulfillmentPreviewShipmentList fulfillmentPreviewShipments
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentPreviewShipments($value)
    {
        $this->_fields['FulfillmentPreviewShipments']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentPreviewShipments is set.
     *
     * @return true if FulfillmentPreviewShipments is set
     */
    public function isSetFulfillmentPreviewShipments()
    {
        return null !== $this->_fields['FulfillmentPreviewShipments']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentPreviewShipments, return this.
     *
     * @param fulfillmentPreviewShipments
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentPreviewShipments($value)
    {
        $this->setFulfillmentPreviewShipments($value);

        return $this;
    }

    /**
     * Get the value of the UnfulfillablePreviewItems property.
     *
     * @return UnfulfillablePreviewItemList unfulfillablePreviewItems
     */
    public function getUnfulfillablePreviewItems()
    {
        return $this->_fields['UnfulfillablePreviewItems']['FieldValue'];
    }

    /**
     * Set the value of the UnfulfillablePreviewItems property.
     *
     * @param UnfulfillablePreviewItemList unfulfillablePreviewItems
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setUnfulfillablePreviewItems($value)
    {
        $this->_fields['UnfulfillablePreviewItems']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if UnfulfillablePreviewItems is set.
     *
     * @return true if UnfulfillablePreviewItems is set
     */
    public function isSetUnfulfillablePreviewItems()
    {
        return null !== $this->_fields['UnfulfillablePreviewItems']['FieldValue'];
    }

    /**
     * Set the value of UnfulfillablePreviewItems, return this.
     *
     * @param unfulfillablePreviewItems
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withUnfulfillablePreviewItems($value)
    {
        $this->setUnfulfillablePreviewItems($value);

        return $this;
    }

    /**
     * Get the value of the OrderUnfulfillableReasons property.
     *
     * @return StringList orderUnfulfillableReasons
     */
    public function getOrderUnfulfillableReasons()
    {
        return $this->_fields['OrderUnfulfillableReasons']['FieldValue'];
    }

    /**
     * Set the value of the OrderUnfulfillableReasons property.
     *
     * @param StringList orderUnfulfillableReasons
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderUnfulfillableReasons($value)
    {
        $this->_fields['OrderUnfulfillableReasons']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderUnfulfillableReasons is set.
     *
     * @return true if OrderUnfulfillableReasons is set
     */
    public function isSetOrderUnfulfillableReasons()
    {
        return null !== $this->_fields['OrderUnfulfillableReasons']['FieldValue'];
    }

    /**
     * Set the value of OrderUnfulfillableReasons, return this.
     *
     * @param orderUnfulfillableReasons
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderUnfulfillableReasons($value)
    {
        $this->setOrderUnfulfillableReasons($value);

        return $this;
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
}
