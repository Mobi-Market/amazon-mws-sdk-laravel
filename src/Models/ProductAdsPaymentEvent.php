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
 * ProductAdsPaymentEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>postedDate: string</li>
 * <li>transactionType: string</li>
 * <li>invoiceId: string</li>
 * <li>baseValue: Currency</li>
 * <li>taxValue: Currency</li>
 * <li>transactionValue: Currency</li>
 *
 * </ul>
 */
class ProductAdsPaymentEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'postedDate'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'transactionType'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'invoiceId'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'baseValue'        => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'taxValue'         => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'transactionValue' => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the postedDate property.
     *
     * @return XMLGregorianCalendar postedDate
     */
    public function getpostedDate()
    {
        return $this->_fields['postedDate']['FieldValue'];
    }

    /**
     * Set the value of the postedDate property.
     *
     * @param string postedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setpostedDate($value)
    {
        $this->_fields['postedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if postedDate is set.
     *
     * @return true if postedDate is set
     */
    public function isSetpostedDate()
    {
        return null !== $this->_fields['postedDate']['FieldValue'];
    }

    /**
     * Set the value of postedDate, return this.
     *
     * @param postedDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withpostedDate($value)
    {
        $this->setpostedDate($value);

        return $this;
    }

    /**
     * Get the value of the transactionType property.
     *
     * @return string transactionType
     */
    public function gettransactionType()
    {
        return $this->_fields['transactionType']['FieldValue'];
    }

    /**
     * Set the value of the transactionType property.
     *
     * @param string transactionType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function settransactionType($value)
    {
        $this->_fields['transactionType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if transactionType is set.
     *
     * @return true if transactionType is set
     */
    public function isSettransactionType()
    {
        return null !== $this->_fields['transactionType']['FieldValue'];
    }

    /**
     * Set the value of transactionType, return this.
     *
     * @param transactionType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withtransactionType($value)
    {
        $this->settransactionType($value);

        return $this;
    }

    /**
     * Get the value of the invoiceId property.
     *
     * @return string invoiceId
     */
    public function getinvoiceId()
    {
        return $this->_fields['invoiceId']['FieldValue'];
    }

    /**
     * Set the value of the invoiceId property.
     *
     * @param string invoiceId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setinvoiceId($value)
    {
        $this->_fields['invoiceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if invoiceId is set.
     *
     * @return true if invoiceId is set
     */
    public function isSetinvoiceId()
    {
        return null !== $this->_fields['invoiceId']['FieldValue'];
    }

    /**
     * Set the value of invoiceId, return this.
     *
     * @param invoiceId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withinvoiceId($value)
    {
        $this->setinvoiceId($value);

        return $this;
    }

    /**
     * Get the value of the baseValue property.
     *
     * @return Currency baseValue
     */
    public function getbaseValue()
    {
        return $this->_fields['baseValue']['FieldValue'];
    }

    /**
     * Set the value of the baseValue property.
     *
     * @param Currency baseValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setbaseValue($value)
    {
        $this->_fields['baseValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if baseValue is set.
     *
     * @return true if baseValue is set
     */
    public function isSetbaseValue()
    {
        return null !== $this->_fields['baseValue']['FieldValue'];
    }

    /**
     * Set the value of baseValue, return this.
     *
     * @param baseValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withbaseValue($value)
    {
        $this->setbaseValue($value);

        return $this;
    }

    /**
     * Get the value of the taxValue property.
     *
     * @return Currency taxValue
     */
    public function gettaxValue()
    {
        return $this->_fields['taxValue']['FieldValue'];
    }

    /**
     * Set the value of the taxValue property.
     *
     * @param Currency taxValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function settaxValue($value)
    {
        $this->_fields['taxValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if taxValue is set.
     *
     * @return true if taxValue is set
     */
    public function isSettaxValue()
    {
        return null !== $this->_fields['taxValue']['FieldValue'];
    }

    /**
     * Set the value of taxValue, return this.
     *
     * @param taxValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withtaxValue($value)
    {
        $this->settaxValue($value);

        return $this;
    }

    /**
     * Get the value of the transactionValue property.
     *
     * @return Currency transactionValue
     */
    public function gettransactionValue()
    {
        return $this->_fields['transactionValue']['FieldValue'];
    }

    /**
     * Set the value of the transactionValue property.
     *
     * @param Currency transactionValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function settransactionValue($value)
    {
        $this->_fields['transactionValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if transactionValue is set.
     *
     * @return true if transactionValue is set
     */
    public function isSettransactionValue()
    {
        return null !== $this->_fields['transactionValue']['FieldValue'];
    }

    /**
     * Set the value of transactionValue, return this.
     *
     * @param transactionValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withtransactionValue($value)
    {
        $this->settransactionValue($value);

        return $this;
    }
}
