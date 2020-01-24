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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * PartneredSmallParcelPackageOutput.
 *
 * Properties:
 * <ul>
 *
 * <li>Dimensions: Dimensions</li>
 * <li>Weight: Weight</li>
 * <li>CarrierName: string</li>
 * <li>TrackingId: string</li>
 * <li>PackageStatus: string</li>
 *
 * </ul>
 */
class PartneredSmallParcelPackageOutput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Dimensions'    => ['FieldValue' => null, 'FieldType' => 'Dimensions'],
            'Weight'        => ['FieldValue' => null, 'FieldType' => 'Weight'],
            'CarrierName'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'TrackingId'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'PackageStatus' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Dimensions property.
     *
     * @return Dimensions dimensions
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Set the value of the Dimensions property.
     *
     * @param Dimensions dimensions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDimensions($value)
    {
        $this->_fields['Dimensions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Dimensions is set.
     *
     * @return true if Dimensions is set
     */
    public function isSetDimensions()
    {
        return null !== $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Set the value of Dimensions, return this.
     *
     * @param dimensions
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDimensions($value)
    {
        $this->setDimensions($value);

        return $this;
    }

    /**
     * Get the value of the Weight property.
     *
     * @return Weight weight
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of the Weight property.
     *
     * @param Weight weight
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Weight is set.
     *
     * @return true if Weight is set
     */
    public function isSetWeight()
    {
        return null !== $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of Weight, return this.
     *
     * @param weight
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withWeight($value)
    {
        $this->setWeight($value);

        return $this;
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return string carrierName
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set
     */
    public function isSetCarrierName()
    {
        return null !== $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);

        return $this;
    }

    /**
     * Get the value of the TrackingId property.
     *
     * @return string trackingId
     */
    public function getTrackingId()
    {
        return $this->_fields['TrackingId']['FieldValue'];
    }

    /**
     * Set the value of the TrackingId property.
     *
     * @param string trackingId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTrackingId($value)
    {
        $this->_fields['TrackingId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TrackingId is set.
     *
     * @return true if TrackingId is set
     */
    public function isSetTrackingId()
    {
        return null !== $this->_fields['TrackingId']['FieldValue'];
    }

    /**
     * Set the value of TrackingId, return this.
     *
     * @param trackingId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTrackingId($value)
    {
        $this->setTrackingId($value);

        return $this;
    }

    /**
     * Get the value of the PackageStatus property.
     *
     * @return string packageStatus
     */
    public function getPackageStatus()
    {
        return $this->_fields['PackageStatus']['FieldValue'];
    }

    /**
     * Set the value of the PackageStatus property.
     *
     * @param string packageStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageStatus($value)
    {
        $this->_fields['PackageStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageStatus is set.
     *
     * @return true if PackageStatus is set
     */
    public function isSetPackageStatus()
    {
        return null !== $this->_fields['PackageStatus']['FieldValue'];
    }

    /**
     * Set the value of PackageStatus, return this.
     *
     * @param packageStatus
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageStatus($value)
    {
        $this->setPackageStatus($value);

        return $this;
    }
}
