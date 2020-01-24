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
 * OfferListingCountType.
 *
 * Properties:
 * <ul>
 *
 * <li>Value: int</li>
 * <li>condition: string</li>
 *
 * </ul>
 */
class OfferListingCountType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Value'     => ['FieldValue' => null, 'FieldType' => '.int'],
            'condition' => ['FieldValue' => null, 'FieldType' => '@string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Value property.
     *
     * @return int value
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of the Value property.
     *
     * @param int value
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
     * Get the value of the condition property.
     *
     * @return string condition
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if condition is set.
     *
     * @return true if condition is set
     */
    public function isSetcondition()
    {
        return null !== $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of condition, return this.
     *
     * @param condition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withcondition($value)
    {
        $this->setcondition($value);

        return $this;
    }
}
