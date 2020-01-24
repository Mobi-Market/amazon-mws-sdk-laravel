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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2019-02-25
 * Generated: Wed Mar 13 08:17:11 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ChargeInstrument.
 *
 * Properties:
 * <ul>
 *
 * <li>Description: string</li>
 * <li>Tail: string</li>
 * <li>Amount: Currency</li>
 *
 * </ul>
 */
class ChargeInstrument extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Description' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Tail'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'Amount'      => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Description property.
     *
     * @return string description
     */
    public function getDescription()
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Set the value of the Description property.
     *
     * @param string description
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDescription($value)
    {
        $this->_fields['Description']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Description is set.
     *
     * @return true if Description is set
     */
    public function isSetDescription()
    {
        return null !== $this->_fields['Description']['FieldValue'];
    }

    /**
     * Set the value of Description, return this.
     *
     * @param description
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDescription($value)
    {
        $this->setDescription($value);

        return $this;
    }

    /**
     * Get the value of the Tail property.
     *
     * @return string tail
     */
    public function getTail()
    {
        return $this->_fields['Tail']['FieldValue'];
    }

    /**
     * Set the value of the Tail property.
     *
     * @param string tail
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTail($value)
    {
        $this->_fields['Tail']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Tail is set.
     *
     * @return true if Tail is set
     */
    public function isSetTail()
    {
        return null !== $this->_fields['Tail']['FieldValue'];
    }

    /**
     * Set the value of Tail, return this.
     *
     * @param tail
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTail($value)
    {
        $this->setTail($value);

        return $this;
    }

    /**
     * Get the value of the Amount property.
     *
     * @return Currency amount
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param Currency amount
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
