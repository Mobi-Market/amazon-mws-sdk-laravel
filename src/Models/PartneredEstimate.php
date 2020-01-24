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
 * PartneredEstimate.
 *
 * Properties:
 * <ul>
 *
 * <li>Amount: Amount</li>
 * <li>ConfirmDeadline: string</li>
 * <li>VoidDeadline: string</li>
 *
 * </ul>
 */
class PartneredEstimate extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Amount'          => ['FieldValue' => null, 'FieldType' => 'Amount'],
            'ConfirmDeadline' => ['FieldValue' => null, 'FieldType' => 'string'],
            'VoidDeadline'    => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Amount property.
     *
     * @return Amount amount
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param Amount amount
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

    /**
     * Get the value of the ConfirmDeadline property.
     *
     * @return string confirmDeadline
     */
    public function getConfirmDeadline()
    {
        return $this->_fields['ConfirmDeadline']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmDeadline property.
     *
     * @param string confirmDeadline
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConfirmDeadline($value)
    {
        $this->_fields['ConfirmDeadline']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ConfirmDeadline is set.
     *
     * @return true if ConfirmDeadline is set
     */
    public function isSetConfirmDeadline()
    {
        return null !== $this->_fields['ConfirmDeadline']['FieldValue'];
    }

    /**
     * Set the value of ConfirmDeadline, return this.
     *
     * @param confirmDeadline
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withConfirmDeadline($value)
    {
        $this->setConfirmDeadline($value);

        return $this;
    }

    /**
     * Get the value of the VoidDeadline property.
     *
     * @return string voidDeadline
     */
    public function getVoidDeadline()
    {
        return $this->_fields['VoidDeadline']['FieldValue'];
    }

    /**
     * Set the value of the VoidDeadline property.
     *
     * @param string voidDeadline
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setVoidDeadline($value)
    {
        $this->_fields['VoidDeadline']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if VoidDeadline is set.
     *
     * @return true if VoidDeadline is set
     */
    public function isSetVoidDeadline()
    {
        return null !== $this->_fields['VoidDeadline']['FieldValue'];
    }

    /**
     * Set the value of VoidDeadline, return this.
     *
     * @param voidDeadline
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withVoidDeadline($value)
    {
        $this->setVoidDeadline($value);

        return $this;
    }
}
