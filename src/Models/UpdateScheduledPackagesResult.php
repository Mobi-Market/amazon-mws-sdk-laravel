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
 * UpdateScheduledPackagesResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ScheduledPackageList: array</li>
 *
 * </ul>
 */
class UpdateScheduledPackagesResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ScheduledPackageList' => ['FieldValue' => [], 'FieldType' => ['Package'], 'ListMemberName' => 'Package'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ScheduledPackageList property.
     *
     * @return List<Package> scheduledPackageList
     */
    public function getScheduledPackageList()
    {
        if (null == $this->_fields['ScheduledPackageList']['FieldValue']) {
            $this->_fields['ScheduledPackageList']['FieldValue'] = [];
        }

        return $this->_fields['ScheduledPackageList']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackageList property.
     *
     * @param array scheduledPackageList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledPackageList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ScheduledPackageList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ScheduledPackageList.
     */
    public function unsetScheduledPackageList(): void
    {
        $this->_fields['ScheduledPackageList']['FieldValue'] = [];
    }

    /**
     * Check to see if ScheduledPackageList is set.
     *
     * @return true if ScheduledPackageList is set
     */
    public function isSetScheduledPackageList()
    {
        return !empty($this->_fields['ScheduledPackageList']['FieldValue']);
    }

    /**
     * Add values for ScheduledPackageList, return this.
     *
     * @param scheduledPackageList
     *             New values to add
     *
     * @return $this instance
     */
    public function withScheduledPackageList()
    {
        foreach (\func_get_args() as $ScheduledPackageList) {
            $this->_fields['ScheduledPackageList']['FieldValue'][] = $ScheduledPackageList;
        }

        return $this;
    }
}
