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
 * PaymentExecutionDetailItem.
 *
 * Properties:
 * <ul>
 *
 * <li>Payment: Money</li>
 * <li>PaymentMethod: string</li>
 *
 * </ul>
 */
class PaymentExecutionDetailItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Payment'       => ['FieldValue' => null, 'FieldType' => 'Money'],
            'PaymentMethod' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Payment property.
     *
     * @return Money payment
     */
    public function getPayment()
    {
        return $this->_fields['Payment']['FieldValue'];
    }

    /**
     * Set the value of the Payment property.
     *
     * @param Money payment
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPayment($value)
    {
        $this->_fields['Payment']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Payment is set.
     *
     * @return true if Payment is set
     */
    public function isSetPayment()
    {
        return null !== $this->_fields['Payment']['FieldValue'];
    }

    /**
     * Set the value of Payment, return this.
     *
     * @param payment
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPayment($value)
    {
        $this->setPayment($value);

        return $this;
    }

    /**
     * Get the value of the PaymentMethod property.
     *
     * @return string paymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->_fields['PaymentMethod']['FieldValue'];
    }

    /**
     * Set the value of the PaymentMethod property.
     *
     * @param string paymentMethod
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPaymentMethod($value)
    {
        $this->_fields['PaymentMethod']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PaymentMethod is set.
     *
     * @return true if PaymentMethod is set
     */
    public function isSetPaymentMethod()
    {
        return null !== $this->_fields['PaymentMethod']['FieldValue'];
    }

    /**
     * Set the value of PaymentMethod, return this.
     *
     * @param paymentMethod
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPaymentMethod($value)
    {
        $this->setPaymentMethod($value);

        return $this;
    }
}
