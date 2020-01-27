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
 * AmazonPrepFeesDetails.
 *
 * Properties:
 * <ul>
 *
 * <li>PrepInstruction: string</li>
 * <li>FeePerUnit: Amount</li>
 *
 * </ul>
 */
class AmazonPrepFeesDetails extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PrepInstruction' => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeePerUnit'      => ['FieldValue' => null, 'FieldType' => 'Amount'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PrepInstruction property.
     *
     * @return string prepInstruction
     */
    public function getPrepInstruction()
    {
        return $this->_fields['PrepInstruction']['FieldValue'];
    }

    /**
     * Set the value of the PrepInstruction property.
     *
     * @param string prepInstruction
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPrepInstruction($value)
    {
        $this->_fields['PrepInstruction']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PrepInstruction is set.
     *
     * @return true if PrepInstruction is set
     */
    public function isSetPrepInstruction()
    {
        return null !== $this->_fields['PrepInstruction']['FieldValue'];
    }

    /**
     * Set the value of PrepInstruction, return this.
     *
     * @param prepInstruction
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPrepInstruction($value)
    {
        $this->setPrepInstruction($value);

        return $this;
    }

    /**
     * Get the value of the FeePerUnit property.
     *
     * @return Amount feePerUnit
     */
    public function getFeePerUnit()
    {
        return $this->_fields['FeePerUnit']['FieldValue'];
    }

    /**
     * Set the value of the FeePerUnit property.
     *
     * @param Amount feePerUnit
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeePerUnit($value)
    {
        $this->_fields['FeePerUnit']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FeePerUnit is set.
     *
     * @return true if FeePerUnit is set
     */
    public function isSetFeePerUnit()
    {
        return null !== $this->_fields['FeePerUnit']['FieldValue'];
    }

    /**
     * Set the value of FeePerUnit, return this.
     *
     * @param feePerUnit
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFeePerUnit($value)
    {
        $this->setFeePerUnit($value);

        return $this;
    }
}
