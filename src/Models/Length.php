<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * Length.
 *
 * Properties:
 * <ul>
 *
 * <li>value: float</li>
 * <li>unit: string</li>
 *
 * </ul>
 */
class Length extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'value' => ['FieldValue' => null, 'FieldType' => 'float'],
            'unit'  => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the value property.
     *
     * @return BigDecimal value
     */
    public function getvalue()
    {
        return $this->_fields['value']['FieldValue'];
    }

    /**
     * Set the value of the value property.
     *
     * @param float value
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setvalue($value)
    {
        $this->_fields['value']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if value is set.
     *
     * @return true if value is set
     */
    public function isSetvalue()
    {
        return null !== $this->_fields['value']['FieldValue'];
    }

    /**
     * Set the value of value, return this.
     *
     * @param value
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withvalue($value)
    {
        $this->setvalue($value);

        return $this;
    }

    /**
     * Get the value of the unit property.
     *
     * @return string unit
     */
    public function getunit()
    {
        return $this->_fields['unit']['FieldValue'];
    }

    /**
     * Set the value of the unit property.
     *
     * @param string unit
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setunit($value)
    {
        $this->_fields['unit']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if unit is set.
     *
     * @return true if unit is set
     */
    public function isSetunit()
    {
        return null !== $this->_fields['unit']['FieldValue'];
    }

    /**
     * Set the value of unit, return this.
     *
     * @param unit
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withunit($value)
    {
        $this->setunit($value);

        return $this;
    }
}
