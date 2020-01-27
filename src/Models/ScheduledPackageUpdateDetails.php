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
 * ScheduledPackageUpdateDetails.
 *
 * Properties:
 * <ul>
 *
 * <li>ScheduledPackageId: ScheduledPackageId</li>
 * <li>PackagePickupSlot: PickupSlot</li>
 *
 * </ul>
 */
class ScheduledPackageUpdateDetails extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ScheduledPackageId' => ['FieldValue' => null, 'FieldType' => 'ScheduledPackageId'],
            'PackagePickupSlot'  => ['FieldValue' => null, 'FieldType' => 'PickupSlot'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ScheduledPackageId property.
     *
     * @return ScheduledPackageId scheduledPackageId
     */
    public function getScheduledPackageId()
    {
        return $this->_fields['ScheduledPackageId']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackageId property.
     *
     * @param ScheduledPackageId scheduledPackageId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledPackageId($value)
    {
        $this->_fields['ScheduledPackageId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ScheduledPackageId is set.
     *
     * @return true if ScheduledPackageId is set
     */
    public function isSetScheduledPackageId()
    {
        return null !== $this->_fields['ScheduledPackageId']['FieldValue'];
    }

    /**
     * Set the value of ScheduledPackageId, return this.
     *
     * @param scheduledPackageId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withScheduledPackageId($value)
    {
        $this->setScheduledPackageId($value);

        return $this;
    }

    /**
     * Get the value of the PackagePickupSlot property.
     *
     * @return PickupSlot packagePickupSlot
     */
    public function getPackagePickupSlot()
    {
        return $this->_fields['PackagePickupSlot']['FieldValue'];
    }

    /**
     * Set the value of the PackagePickupSlot property.
     *
     * @param PickupSlot packagePickupSlot
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackagePickupSlot($value)
    {
        $this->_fields['PackagePickupSlot']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackagePickupSlot is set.
     *
     * @return true if PackagePickupSlot is set
     */
    public function isSetPackagePickupSlot()
    {
        return null !== $this->_fields['PackagePickupSlot']['FieldValue'];
    }

    /**
     * Set the value of PackagePickupSlot, return this.
     *
     * @param packagePickupSlot
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackagePickupSlot($value)
    {
        $this->setPackagePickupSlot($value);

        return $this;
    }
}
