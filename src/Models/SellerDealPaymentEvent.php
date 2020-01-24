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
 * SellerDealPaymentEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>postedDate: string</li>
 * <li>dealId: string</li>
 * <li>dealDescription: string</li>
 * <li>eventType: string</li>
 * <li>feeType: string</li>
 * <li>feeAmount: Currency</li>
 * <li>taxAmount: Currency</li>
 * <li>totalAmount: Currency</li>
 *
 * </ul>
 */
class SellerDealPaymentEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'postedDate'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'dealId'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'dealDescription' => ['FieldValue' => null, 'FieldType' => 'string'],
            'eventType'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'feeType'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'feeAmount'       => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'taxAmount'       => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'totalAmount'     => ['FieldValue' => null, 'FieldType' => 'Currency'],
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
     * Get the value of the dealId property.
     *
     * @return string dealId
     */
    public function getdealId()
    {
        return $this->_fields['dealId']['FieldValue'];
    }

    /**
     * Set the value of the dealId property.
     *
     * @param string dealId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setdealId($value)
    {
        $this->_fields['dealId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if dealId is set.
     *
     * @return true if dealId is set
     */
    public function isSetdealId()
    {
        return null !== $this->_fields['dealId']['FieldValue'];
    }

    /**
     * Set the value of dealId, return this.
     *
     * @param dealId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withdealId($value)
    {
        $this->setdealId($value);

        return $this;
    }

    /**
     * Get the value of the dealDescription property.
     *
     * @return string dealDescription
     */
    public function getdealDescription()
    {
        return $this->_fields['dealDescription']['FieldValue'];
    }

    /**
     * Set the value of the dealDescription property.
     *
     * @param string dealDescription
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setdealDescription($value)
    {
        $this->_fields['dealDescription']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if dealDescription is set.
     *
     * @return true if dealDescription is set
     */
    public function isSetdealDescription()
    {
        return null !== $this->_fields['dealDescription']['FieldValue'];
    }

    /**
     * Set the value of dealDescription, return this.
     *
     * @param dealDescription
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withdealDescription($value)
    {
        $this->setdealDescription($value);

        return $this;
    }

    /**
     * Get the value of the eventType property.
     *
     * @return string eventType
     */
    public function geteventType()
    {
        return $this->_fields['eventType']['FieldValue'];
    }

    /**
     * Set the value of the eventType property.
     *
     * @param string eventType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function seteventType($value)
    {
        $this->_fields['eventType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if eventType is set.
     *
     * @return true if eventType is set
     */
    public function isSeteventType()
    {
        return null !== $this->_fields['eventType']['FieldValue'];
    }

    /**
     * Set the value of eventType, return this.
     *
     * @param eventType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function witheventType($value)
    {
        $this->seteventType($value);

        return $this;
    }

    /**
     * Get the value of the feeType property.
     *
     * @return string feeType
     */
    public function getfeeType()
    {
        return $this->_fields['feeType']['FieldValue'];
    }

    /**
     * Set the value of the feeType property.
     *
     * @param string feeType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setfeeType($value)
    {
        $this->_fields['feeType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if feeType is set.
     *
     * @return true if feeType is set
     */
    public function isSetfeeType()
    {
        return null !== $this->_fields['feeType']['FieldValue'];
    }

    /**
     * Set the value of feeType, return this.
     *
     * @param feeType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withfeeType($value)
    {
        $this->setfeeType($value);

        return $this;
    }

    /**
     * Get the value of the feeAmount property.
     *
     * @return Currency feeAmount
     */
    public function getfeeAmount()
    {
        return $this->_fields['feeAmount']['FieldValue'];
    }

    /**
     * Set the value of the feeAmount property.
     *
     * @param Currency feeAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setfeeAmount($value)
    {
        $this->_fields['feeAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if feeAmount is set.
     *
     * @return true if feeAmount is set
     */
    public function isSetfeeAmount()
    {
        return null !== $this->_fields['feeAmount']['FieldValue'];
    }

    /**
     * Set the value of feeAmount, return this.
     *
     * @param feeAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withfeeAmount($value)
    {
        $this->setfeeAmount($value);

        return $this;
    }

    /**
     * Get the value of the taxAmount property.
     *
     * @return Currency taxAmount
     */
    public function gettaxAmount()
    {
        return $this->_fields['taxAmount']['FieldValue'];
    }

    /**
     * Set the value of the taxAmount property.
     *
     * @param Currency taxAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function settaxAmount($value)
    {
        $this->_fields['taxAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if taxAmount is set.
     *
     * @return true if taxAmount is set
     */
    public function isSettaxAmount()
    {
        return null !== $this->_fields['taxAmount']['FieldValue'];
    }

    /**
     * Set the value of taxAmount, return this.
     *
     * @param taxAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withtaxAmount($value)
    {
        $this->settaxAmount($value);

        return $this;
    }

    /**
     * Get the value of the totalAmount property.
     *
     * @return Currency totalAmount
     */
    public function gettotalAmount()
    {
        return $this->_fields['totalAmount']['FieldValue'];
    }

    /**
     * Set the value of the totalAmount property.
     *
     * @param Currency totalAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function settotalAmount($value)
    {
        $this->_fields['totalAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if totalAmount is set.
     *
     * @return true if totalAmount is set
     */
    public function isSettotalAmount()
    {
        return null !== $this->_fields['totalAmount']['FieldValue'];
    }

    /**
     * Set the value of totalAmount, return this.
     *
     * @param totalAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withtotalAmount($value)
    {
        $this->settotalAmount($value);

        return $this;
    }
}
