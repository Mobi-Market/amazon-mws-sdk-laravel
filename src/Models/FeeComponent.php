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
 * FeeComponent.
 *
 * Properties:
 * <ul>
 *
 * <li>FeeType: string</li>
 * <li>FeeAmount: Currency</li>
 *
 * </ul>
 */
class FeeComponent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'FeeType'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeeAmount' => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the FeeType property.
     *
     * @return string feeType
     */
    public function getFeeType()
    {
        return $this->_fields['FeeType']['FieldValue'];
    }

    /**
     * Set the value of the FeeType property.
     *
     * @param string feeType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeeType($value)
    {
        $this->_fields['FeeType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FeeType is set.
     *
     * @return true if FeeType is set
     */
    public function isSetFeeType()
    {
        return null !== $this->_fields['FeeType']['FieldValue'];
    }

    /**
     * Set the value of FeeType, return this.
     *
     * @param feeType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFeeType($value)
    {
        $this->setFeeType($value);

        return $this;
    }

    /**
     * Get the value of the FeeAmount property.
     *
     * @return Currency feeAmount
     */
    public function getFeeAmount()
    {
        return $this->_fields['FeeAmount']['FieldValue'];
    }

    /**
     * Set the value of the FeeAmount property.
     *
     * @param Currency feeAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeeAmount($value)
    {
        $this->_fields['FeeAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FeeAmount is set.
     *
     * @return true if FeeAmount is set
     */
    public function isSetFeeAmount()
    {
        return null !== $this->_fields['FeeAmount']['FieldValue'];
    }

    /**
     * Set the value of FeeAmount, return this.
     *
     * @param feeAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFeeAmount($value)
    {
        $this->setFeeAmount($value);

        return $this;
    }
}
