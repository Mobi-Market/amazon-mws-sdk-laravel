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
 * ShippingTimeType.
 *
 * Properties:
 * <ul>
 *
 * <li>Max: string</li>
 *
 * </ul>
 */
class ShippingTimeType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Max' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Max property.
     *
     * @return string max
     */
    public function getMax()
    {
        return $this->_fields['Max']['FieldValue'];
    }

    /**
     * Set the value of the Max property.
     *
     * @param string max
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMax($value)
    {
        $this->_fields['Max']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Max is set.
     *
     * @return true if Max is set
     */
    public function isSetMax()
    {
        return null !== $this->_fields['Max']['FieldValue'];
    }

    /**
     * Set the value of Max, return this.
     *
     * @param max
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMax($value)
    {
        $this->setMax($value);

        return $this;
    }
}
