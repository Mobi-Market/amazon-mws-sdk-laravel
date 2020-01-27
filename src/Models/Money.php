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
 * Money.
 *
 * Properties:
 * <ul>
 *
 * <li>CurrencyCode: string</li>
 * <li>Amount: string</li>
 *
 * </ul>
 */
class Money extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CurrencyCode' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Amount'       => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * Get the value of the Amount property.
     *
     * @return string amount
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param string amount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set
     */
    public function isSetAmount()
    {
        return null !== $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmount($value)
    {
        $this->setAmount($value);

        return $this;
    }
}
