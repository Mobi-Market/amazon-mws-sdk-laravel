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
 * DirectPayment.
 *
 * Properties:
 * <ul>
 *
 * <li>DirectPaymentType: string</li>
 * <li>DirectPaymentAmount: Currency</li>
 *
 * </ul>
 */
class DirectPayment extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'DirectPaymentType'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'DirectPaymentAmount' => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the DirectPaymentType property.
     *
     * @return string directPaymentType
     */
    public function getDirectPaymentType()
    {
        return $this->_fields['DirectPaymentType']['FieldValue'];
    }

    /**
     * Set the value of the DirectPaymentType property.
     *
     * @param string directPaymentType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDirectPaymentType($value)
    {
        $this->_fields['DirectPaymentType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DirectPaymentType is set.
     *
     * @return true if DirectPaymentType is set
     */
    public function isSetDirectPaymentType()
    {
        return null !== $this->_fields['DirectPaymentType']['FieldValue'];
    }

    /**
     * Set the value of DirectPaymentType, return this.
     *
     * @param directPaymentType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDirectPaymentType($value)
    {
        $this->setDirectPaymentType($value);

        return $this;
    }

    /**
     * Get the value of the DirectPaymentAmount property.
     *
     * @return Currency directPaymentAmount
     */
    public function getDirectPaymentAmount()
    {
        return $this->_fields['DirectPaymentAmount']['FieldValue'];
    }

    /**
     * Set the value of the DirectPaymentAmount property.
     *
     * @param Currency directPaymentAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDirectPaymentAmount($value)
    {
        $this->_fields['DirectPaymentAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DirectPaymentAmount is set.
     *
     * @return true if DirectPaymentAmount is set
     */
    public function isSetDirectPaymentAmount()
    {
        return null !== $this->_fields['DirectPaymentAmount']['FieldValue'];
    }

    /**
     * Set the value of DirectPaymentAmount, return this.
     *
     * @param directPaymentAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDirectPaymentAmount($value)
    {
        $this->setDirectPaymentAmount($value);

        return $this;
    }
}
