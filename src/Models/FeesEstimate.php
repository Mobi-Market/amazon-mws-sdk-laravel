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
 * FeesEstimate.
 *
 * Properties:
 * <ul>
 *
 * <li>TimeOfFeesEstimation: string</li>
 * <li>TotalFeesEstimate: MoneyType</li>
 * <li>FeeDetailList: FeeDetailList</li>
 *
 * </ul>
 */
class FeesEstimate extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TimeOfFeesEstimation' => ['FieldValue' => null, 'FieldType' => 'string'],
            'TotalFeesEstimate'    => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'FeeDetailList'        => ['FieldValue' => null, 'FieldType' => 'FeeDetailList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TimeOfFeesEstimation property.
     *
     * @return XMLGregorianCalendar timeOfFeesEstimation
     */
    public function getTimeOfFeesEstimation()
    {
        return $this->_fields['TimeOfFeesEstimation']['FieldValue'];
    }

    /**
     * Set the value of the TimeOfFeesEstimation property.
     *
     * @param string timeOfFeesEstimation
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTimeOfFeesEstimation($value)
    {
        $this->_fields['TimeOfFeesEstimation']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TimeOfFeesEstimation is set.
     *
     * @return true if TimeOfFeesEstimation is set
     */
    public function isSetTimeOfFeesEstimation()
    {
        return null !== $this->_fields['TimeOfFeesEstimation']['FieldValue'];
    }

    /**
     * Set the value of TimeOfFeesEstimation, return this.
     *
     * @param timeOfFeesEstimation
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTimeOfFeesEstimation($value)
    {
        $this->setTimeOfFeesEstimation($value);

        return $this;
    }

    /**
     * Get the value of the TotalFeesEstimate property.
     *
     * @return MoneyType totalFeesEstimate
     */
    public function getTotalFeesEstimate()
    {
        return $this->_fields['TotalFeesEstimate']['FieldValue'];
    }

    /**
     * Set the value of the TotalFeesEstimate property.
     *
     * @param MoneyType totalFeesEstimate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTotalFeesEstimate($value)
    {
        $this->_fields['TotalFeesEstimate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TotalFeesEstimate is set.
     *
     * @return true if TotalFeesEstimate is set
     */
    public function isSetTotalFeesEstimate()
    {
        return null !== $this->_fields['TotalFeesEstimate']['FieldValue'];
    }

    /**
     * Set the value of TotalFeesEstimate, return this.
     *
     * @param totalFeesEstimate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTotalFeesEstimate($value)
    {
        $this->setTotalFeesEstimate($value);

        return $this;
    }

    /**
     * Get the value of the FeeDetailList property.
     *
     * @return FeeDetailList feeDetailList
     */
    public function getFeeDetailList()
    {
        return $this->_fields['FeeDetailList']['FieldValue'];
    }

    /**
     * Set the value of the FeeDetailList property.
     *
     * @param FeeDetailList feeDetailList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeeDetailList($value)
    {
        $this->_fields['FeeDetailList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FeeDetailList is set.
     *
     * @return true if FeeDetailList is set
     */
    public function isSetFeeDetailList()
    {
        return null !== $this->_fields['FeeDetailList']['FieldValue'];
    }

    /**
     * Set the value of FeeDetailList, return this.
     *
     * @param feeDetailList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFeeDetailList($value)
    {
        $this->setFeeDetailList($value);

        return $this;
    }
}
