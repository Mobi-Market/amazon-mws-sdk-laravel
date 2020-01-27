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
 * InvalidSKU.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerSKU: string</li>
 * <li>ErrorReason: string</li>
 *
 * </ul>
 */
class InvalidSKU extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerSKU'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'ErrorReason' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return string sellerSKU
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set
     */
    public function isSetSellerSKU()
    {
        return null !== $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);

        return $this;
    }

    /**
     * Get the value of the ErrorReason property.
     *
     * @return string errorReason
     */
    public function getErrorReason()
    {
        return $this->_fields['ErrorReason']['FieldValue'];
    }

    /**
     * Set the value of the ErrorReason property.
     *
     * @param string errorReason
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setErrorReason($value)
    {
        $this->_fields['ErrorReason']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ErrorReason is set.
     *
     * @return true if ErrorReason is set
     */
    public function isSetErrorReason()
    {
        return null !== $this->_fields['ErrorReason']['FieldValue'];
    }

    /**
     * Set the value of ErrorReason, return this.
     *
     * @param errorReason
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withErrorReason($value)
    {
        $this->setErrorReason($value);

        return $this;
    }
}
