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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * Amount.
 *
 * Properties:
 * <ul>
 *
 * <li>CurrencyCode: string</li>
 * <li>Value: float</li>
 *
 * </ul>
 */
class Amount extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CurrencyCode' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Value'        => ['FieldValue' => null, 'FieldType' => 'float'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the CurrencyCode property.
     *
     * @return string currencyCode
     */
    public function getCurrencyCode()
    {
        return $this->_fields['CurrencyCode']['FieldValue'];
    }

    /**
     * Set the value of the CurrencyCode property.
     *
     * @param string currencyCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCurrencyCode($value)
    {
        $this->_fields['CurrencyCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CurrencyCode is set.
     *
     * @return true if CurrencyCode is set
     */
    public function isSetCurrencyCode()
    {
        return null !== $this->_fields['CurrencyCode']['FieldValue'];
    }

    /**
     * Set the value of CurrencyCode, return this.
     *
     * @param currencyCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCurrencyCode($value)
    {
        $this->setCurrencyCode($value);

        return $this;
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
}
