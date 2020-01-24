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
 * Timepoint.
 *
 * Properties:
 * <ul>
 *
 * <li>TimepointType: string</li>
 * <li>DateTime: string</li>
 *
 * </ul>
 */
class Timepoint extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TimepointType' => ['FieldValue' => null, 'FieldType' => 'string'],
            'DateTime'      => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TimepointType property.
     *
     * @return string timepointType
     */
    public function getTimepointType()
    {
        return $this->_fields['TimepointType']['FieldValue'];
    }

    /**
     * Set the value of the TimepointType property.
     *
     * @param string timepointType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTimepointType($value)
    {
        $this->_fields['TimepointType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TimepointType is set.
     *
     * @return true if TimepointType is set
     */
    public function isSetTimepointType()
    {
        return null !== $this->_fields['TimepointType']['FieldValue'];
    }

    /**
     * Set the value of TimepointType, return this.
     *
     * @param timepointType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTimepointType($value)
    {
        $this->setTimepointType($value);

        return $this;
    }

    /**
     * Get the value of the DateTime property.
     *
     * @return XMLGregorianCalendar dateTime
     */
    public function getDateTime()
    {
        return $this->_fields['DateTime']['FieldValue'];
    }

    /**
     * Set the value of the DateTime property.
     *
     * @param string dateTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDateTime($value)
    {
        $this->_fields['DateTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DateTime is set.
     *
     * @return true if DateTime is set
     */
    public function isSetDateTime()
    {
        return null !== $this->_fields['DateTime']['FieldValue'];
    }

    /**
     * Set the value of DateTime, return this.
     *
     * @param dateTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDateTime($value)
    {
        $this->setDateTime($value);

        return $this;
    }
}
