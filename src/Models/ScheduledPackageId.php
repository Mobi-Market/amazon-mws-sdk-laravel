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
 * ScheduledPackageId.
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonOrderId: string</li>
 * <li>PackageId: string</li>
 *
 * </ul>
 */
class ScheduledPackageId extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'PackageId'     => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return string amazonOrderId
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set
     */
    public function isSetAmazonOrderId()
    {
        return null !== $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);

        return $this;
    }

    /**
     * Get the value of the PackageId property.
     *
     * @return string packageId
     */
    public function getPackageId()
    {
        return $this->_fields['PackageId']['FieldValue'];
    }

    /**
     * Set the value of the PackageId property.
     *
     * @param string packageId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageId($value)
    {
        $this->_fields['PackageId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageId is set.
     *
     * @return true if PackageId is set
     */
    public function isSetPackageId()
    {
        return null !== $this->_fields['PackageId']['FieldValue'];
    }

    /**
     * Set the value of PackageId, return this.
     *
     * @param packageId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageId($value)
    {
        $this->setPackageId($value);

        return $this;
    }
}
