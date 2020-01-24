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
 * GetScheduledPackageResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ScheduledPackage: Package</li>
 *
 * </ul>
 */
class GetScheduledPackageResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ScheduledPackage' => ['FieldValue' => null, 'FieldType' => 'Package'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ScheduledPackage property.
     *
     * @return Package scheduledPackage
     */
    public function getScheduledPackage()
    {
        return $this->_fields['ScheduledPackage']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackage property.
     *
     * @param Package scheduledPackage
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledPackage($value)
    {
        $this->_fields['ScheduledPackage']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ScheduledPackage is set.
     *
     * @return true if ScheduledPackage is set
     */
    public function isSetScheduledPackage()
    {
        return null !== $this->_fields['ScheduledPackage']['FieldValue'];
    }

    /**
     * Set the value of ScheduledPackage, return this.
     *
     * @param scheduledPackage
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withScheduledPackage($value)
    {
        $this->setScheduledPackage($value);

        return $this;
    }
}
