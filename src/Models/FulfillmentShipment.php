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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * FulfillmentShipment.
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonShipmentId: string</li>
 * <li>FulfillmentCenterId: string</li>
 * <li>FulfillmentShipmentStatus: string</li>
 * <li>ShippingDateTime: string</li>
 * <li>EstimatedArrivalDateTime: string</li>
 * <li>FulfillmentShipmentItem: FulfillmentShipmentItemList</li>
 * <li>FulfillmentShipmentPackage: FulfillmentShipmentPackageList</li>
 *
 * </ul>
 */
class FulfillmentShipment extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonShipmentId'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentCenterId'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentShipmentStatus'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippingDateTime'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'EstimatedArrivalDateTime'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentShipmentItem'    => ['FieldValue' => null, 'FieldType' => 'FulfillmentShipmentItemList'],
            'FulfillmentShipmentPackage' => ['FieldValue' => null, 'FieldType' => 'FulfillmentShipmentPackageList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AmazonShipmentId property.
     *
     * @return string amazonShipmentId
     */
    public function getAmazonShipmentId()
    {
        return $this->_fields['AmazonShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonShipmentId property.
     *
     * @param string amazonShipmentId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonShipmentId($value)
    {
        $this->_fields['AmazonShipmentId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonShipmentId is set.
     *
     * @return true if AmazonShipmentId is set
     */
    public function isSetAmazonShipmentId()
    {
        return null !== $this->_fields['AmazonShipmentId']['FieldValue'];
    }

    /**
     * Set the value of AmazonShipmentId, return this.
     *
     * @param amazonShipmentId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonShipmentId($value)
    {
        $this->setAmazonShipmentId($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentCenterId property.
     *
     * @return string fulfillmentCenterId
     */
    public function getFulfillmentCenterId()
    {
        return $this->_fields['FulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentCenterId property.
     *
     * @param string fulfillmentCenterId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentCenterId($value)
    {
        $this->_fields['FulfillmentCenterId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentCenterId is set.
     *
     * @return true if FulfillmentCenterId is set
     */
    public function isSetFulfillmentCenterId()
    {
        return null !== $this->_fields['FulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentCenterId, return this.
     *
     * @param fulfillmentCenterId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentCenterId($value)
    {
        $this->setFulfillmentCenterId($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentShipmentStatus property.
     *
     * @return string fulfillmentShipmentStatus
     */
    public function getFulfillmentShipmentStatus()
    {
        return $this->_fields['FulfillmentShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipmentStatus property.
     *
     * @param string fulfillmentShipmentStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentShipmentStatus($value)
    {
        $this->_fields['FulfillmentShipmentStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentShipmentStatus is set.
     *
     * @return true if FulfillmentShipmentStatus is set
     */
    public function isSetFulfillmentShipmentStatus()
    {
        return null !== $this->_fields['FulfillmentShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentShipmentStatus, return this.
     *
     * @param fulfillmentShipmentStatus
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentShipmentStatus($value)
    {
        $this->setFulfillmentShipmentStatus($value);

        return $this;
    }

    /**
     * Get the value of the ShippingDateTime property.
     *
     * @return XMLGregorianCalendar shippingDateTime
     */
    public function getShippingDateTime()
    {
        return $this->_fields['ShippingDateTime']['FieldValue'];
    }

    /**
     * Set the value of the ShippingDateTime property.
     *
     * @param string shippingDateTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingDateTime($value)
    {
        $this->_fields['ShippingDateTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingDateTime is set.
     *
     * @return true if ShippingDateTime is set
     */
    public function isSetShippingDateTime()
    {
        return null !== $this->_fields['ShippingDateTime']['FieldValue'];
    }

    /**
     * Set the value of ShippingDateTime, return this.
     *
     * @param shippingDateTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingDateTime($value)
    {
        $this->setShippingDateTime($value);

        return $this;
    }

    /**
     * Get the value of the EstimatedArrivalDateTime property.
     *
     * @return XMLGregorianCalendar estimatedArrivalDateTime
     */
    public function getEstimatedArrivalDateTime()
    {
        return $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedArrivalDateTime property.
     *
     * @param string estimatedArrivalDateTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEstimatedArrivalDateTime($value)
    {
        $this->_fields['EstimatedArrivalDateTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EstimatedArrivalDateTime is set.
     *
     * @return true if EstimatedArrivalDateTime is set
     */
    public function isSetEstimatedArrivalDateTime()
    {
        return null !== $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }

    /**
     * Set the value of EstimatedArrivalDateTime, return this.
     *
     * @param estimatedArrivalDateTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEstimatedArrivalDateTime($value)
    {
        $this->setEstimatedArrivalDateTime($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentShipmentItem property.
     *
     * @return FulfillmentShipmentItemList fulfillmentShipmentItem
     */
    public function getFulfillmentShipmentItem()
    {
        return $this->_fields['FulfillmentShipmentItem']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipmentItem property.
     *
     * @param FulfillmentShipmentItemList fulfillmentShipmentItem
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentShipmentItem($value)
    {
        $this->_fields['FulfillmentShipmentItem']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentShipmentItem is set.
     *
     * @return true if FulfillmentShipmentItem is set
     */
    public function isSetFulfillmentShipmentItem()
    {
        return null !== $this->_fields['FulfillmentShipmentItem']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentShipmentItem, return this.
     *
     * @param fulfillmentShipmentItem
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentShipmentItem($value)
    {
        $this->setFulfillmentShipmentItem($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentShipmentPackage property.
     *
     * @return FulfillmentShipmentPackageList fulfillmentShipmentPackage
     */
    public function getFulfillmentShipmentPackage()
    {
        return $this->_fields['FulfillmentShipmentPackage']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipmentPackage property.
     *
     * @param FulfillmentShipmentPackageList fulfillmentShipmentPackage
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentShipmentPackage($value)
    {
        $this->_fields['FulfillmentShipmentPackage']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentShipmentPackage is set.
     *
     * @return true if FulfillmentShipmentPackage is set
     */
    public function isSetFulfillmentShipmentPackage()
    {
        return null !== $this->_fields['FulfillmentShipmentPackage']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentShipmentPackage, return this.
     *
     * @param fulfillmentShipmentPackage
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentShipmentPackage($value)
    {
        $this->setFulfillmentShipmentPackage($value);

        return $this;
    }
}
