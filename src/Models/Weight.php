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
 * Weight.
 *
 * Properties:
 * <ul>
 *
 * <li>Value: float</li>
 * <li>Unit: string</li>
 *
 * </ul>
 */
class Weight extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Value' => ['FieldValue' => null, 'FieldType' => 'float'],
            'Unit'  => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Value property.
     *
     * @return BigDecimal value
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of the Value property.
     *
     * @param float value
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValue($value)
    {
        $this->_fields['Value']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Value is set.
     *
     * @return true if Value is set
     */
    public function isSetValue()
    {
        return null !== $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of Value, return this.
     *
     * @param value
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValue($value)
    {
        $this->setValue($value);

        return $this;
    }

    /**
     * Get the value of the Unit property.
     *
     * @return string unit
     */
    public function getUnit()
    {
        return $this->_fields['Unit']['FieldValue'];
    }

    /**
     * Set the value of the Unit property.
     *
     * @param string unit
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setUnit($value)
    {
        $this->_fields['Unit']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Unit is set.
     *
     * @return true if Unit is set
     */
    public function isSetUnit()
    {
        return null !== $this->_fields['Unit']['FieldValue'];
    }

    /**
     * Set the value of Unit, return this.
     *
     * @param unit
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withUnit($value)
    {
        $this->setUnit($value);

        return $this;
    }
}
