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
 * DeliveryWindow.
 *
 * Properties:
 * <ul>
 *
 * <li>StartDateTime: string</li>
 * <li>EndDateTime: string</li>
 *
 * </ul>
 */
class DeliveryWindow extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'StartDateTime' => ['FieldValue' => null, 'FieldType' => 'string'],
            'EndDateTime'   => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the StartDateTime property.
     *
     * @return XMLGregorianCalendar startDateTime
     */
    public function getStartDateTime()
    {
        return $this->_fields['StartDateTime']['FieldValue'];
    }

    /**
     * Set the value of the StartDateTime property.
     *
     * @param string startDateTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStartDateTime($value)
    {
        $this->_fields['StartDateTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if StartDateTime is set.
     *
     * @return true if StartDateTime is set
     */
    public function isSetStartDateTime()
    {
        return null !== $this->_fields['StartDateTime']['FieldValue'];
    }

    /**
     * Set the value of StartDateTime, return this.
     *
     * @param startDateTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withStartDateTime($value)
    {
        $this->setStartDateTime($value);

        return $this;
    }

    /**
     * Get the value of the EndDateTime property.
     *
     * @return XMLGregorianCalendar endDateTime
     */
    public function getEndDateTime()
    {
        return $this->_fields['EndDateTime']['FieldValue'];
    }

    /**
     * Set the value of the EndDateTime property.
     *
     * @param string endDateTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEndDateTime($value)
    {
        $this->_fields['EndDateTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EndDateTime is set.
     *
     * @return true if EndDateTime is set
     */
    public function isSetEndDateTime()
    {
        return null !== $this->_fields['EndDateTime']['FieldValue'];
    }

    /**
     * Set the value of EndDateTime, return this.
     *
     * @param endDateTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEndDateTime($value)
    {
        $this->setEndDateTime($value);

        return $this;
    }
}
