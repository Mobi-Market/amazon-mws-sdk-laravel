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
 * ConfirmPreorderResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ConfirmedNeedByDate: string</li>
 * <li>ConfirmedFulfillableDate: string</li>
 *
 * </ul>
 */
class ConfirmPreorderResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ConfirmedNeedByDate'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'ConfirmedFulfillableDate' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ConfirmedNeedByDate property.
     *
     * @return string confirmedNeedByDate
     */
    public function getConfirmedNeedByDate()
    {
        return $this->_fields['ConfirmedNeedByDate']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmedNeedByDate property.
     *
     * @param string confirmedNeedByDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConfirmedNeedByDate($value)
    {
        $this->_fields['ConfirmedNeedByDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ConfirmedNeedByDate is set.
     *
     * @return true if ConfirmedNeedByDate is set
     */
    public function isSetConfirmedNeedByDate()
    {
        return null !== $this->_fields['ConfirmedNeedByDate']['FieldValue'];
    }

    /**
     * Set the value of ConfirmedNeedByDate, return this.
     *
     * @param confirmedNeedByDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withConfirmedNeedByDate($value)
    {
        $this->setConfirmedNeedByDate($value);

        return $this;
    }

    /**
     * Get the value of the ConfirmedFulfillableDate property.
     *
     * @return string confirmedFulfillableDate
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->_fields['ConfirmedFulfillableDate']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmedFulfillableDate property.
     *
     * @param string confirmedFulfillableDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConfirmedFulfillableDate($value)
    {
        $this->_fields['ConfirmedFulfillableDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ConfirmedFulfillableDate is set.
     *
     * @return true if ConfirmedFulfillableDate is set
     */
    public function isSetConfirmedFulfillableDate()
    {
        return null !== $this->_fields['ConfirmedFulfillableDate']['FieldValue'];
    }

    /**
     * Set the value of ConfirmedFulfillableDate, return this.
     *
     * @param confirmedFulfillableDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withConfirmedFulfillableDate($value)
    {
        $this->setConfirmedFulfillableDate($value);

        return $this;
    }
}
