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
 * FulfillmentShipmentPackage.
 *
 * Properties:
 * <ul>
 *
 * <li>PackageNumber: int</li>
 * <li>CarrierCode: string</li>
 * <li>TrackingNumber: string</li>
 * <li>EstimatedArrivalDateTime: string</li>
 *
 * </ul>
 */
class FulfillmentShipmentPackage extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PackageNumber'            => ['FieldValue' => null, 'FieldType' => 'int'],
            'CarrierCode'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'TrackingNumber'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'EstimatedArrivalDateTime' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PackageNumber property.
     *
     * @return int packageNumber
     */
    public function getPackageNumber()
    {
        return $this->_fields['PackageNumber']['FieldValue'];
    }

    /**
     * Set the value of the PackageNumber property.
     *
     * @param int packageNumber
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageNumber($value)
    {
        $this->_fields['PackageNumber']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageNumber is set.
     *
     * @return true if PackageNumber is set
     */
    public function isSetPackageNumber()
    {
        return null !== $this->_fields['PackageNumber']['FieldValue'];
    }

    /**
     * Set the value of PackageNumber, return this.
     *
     * @param packageNumber
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageNumber($value)
    {
        $this->setPackageNumber($value);

        return $this;
    }

    /**
     * Get the value of the CarrierCode property.
     *
     * @return string carrierCode
     */
    public function getCarrierCode()
    {
        return $this->_fields['CarrierCode']['FieldValue'];
    }

    /**
     * Set the value of the CarrierCode property.
     *
     * @param string carrierCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCarrierCode($value)
    {
        $this->_fields['CarrierCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CarrierCode is set.
     *
     * @return true if CarrierCode is set
     */
    public function isSetCarrierCode()
    {
        return null !== $this->_fields['CarrierCode']['FieldValue'];
    }

    /**
     * Set the value of CarrierCode, return this.
     *
     * @param carrierCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCarrierCode($value)
    {
        $this->setCarrierCode($value);

        return $this;
    }

    /**
     * Get the value of the TrackingNumber property.
     *
     * @return string trackingNumber
     */
    public function getTrackingNumber()
    {
        return $this->_fields['TrackingNumber']['FieldValue'];
    }

    /**
     * Set the value of the TrackingNumber property.
     *
     * @param string trackingNumber
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTrackingNumber($value)
    {
        $this->_fields['TrackingNumber']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TrackingNumber is set.
     *
     * @return true if TrackingNumber is set
     */
    public function isSetTrackingNumber()
    {
        return null !== $this->_fields['TrackingNumber']['FieldValue'];
    }

    /**
     * Set the value of TrackingNumber, return this.
     *
     * @param trackingNumber
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTrackingNumber($value)
    {
        $this->setTrackingNumber($value);

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
}
