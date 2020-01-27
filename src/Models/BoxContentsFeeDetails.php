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
 * BoxContentsFeeDetails.
 *
 * Properties:
 * <ul>
 *
 * <li>TotalUnits: int</li>
 * <li>FeePerUnit: Amount</li>
 * <li>TotalFee: Amount</li>
 *
 * </ul>
 */
class BoxContentsFeeDetails extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TotalUnits' => ['FieldValue' => null, 'FieldType' => 'int'],
            'FeePerUnit' => ['FieldValue' => null, 'FieldType' => 'Amount'],
            'TotalFee'   => ['FieldValue' => null, 'FieldType' => 'Amount'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TotalUnits property.
     *
     * @return int totalUnits
     */
    public function getTotalUnits()
    {
        return $this->_fields['TotalUnits']['FieldValue'];
    }

    /**
     * Set the value of the TotalUnits property.
     *
     * @param int totalUnits
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTotalUnits($value)
    {
        $this->_fields['TotalUnits']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TotalUnits is set.
     *
     * @return true if TotalUnits is set
     */
    public function isSetTotalUnits()
    {
        return null !== $this->_fields['TotalUnits']['FieldValue'];
    }

    /**
     * Set the value of TotalUnits, return this.
     *
     * @param totalUnits
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTotalUnits($value)
    {
        $this->setTotalUnits($value);

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

    /**
     * Get the value of the TotalFee property.
     *
     * @return Amount totalFee
     */
    public function getTotalFee()
    {
        return $this->_fields['TotalFee']['FieldValue'];
    }

    /**
     * Set the value of the TotalFee property.
     *
     * @param Amount totalFee
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTotalFee($value)
    {
        $this->_fields['TotalFee']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TotalFee is set.
     *
     * @return true if TotalFee is set
     */
    public function isSetTotalFee()
    {
        return null !== $this->_fields['TotalFee']['FieldValue'];
    }

    /**
     * Set the value of TotalFee, return this.
     *
     * @param totalFee
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTotalFee($value)
    {
        $this->setTotalFee($value);

        return $this;
    }
}
