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
 * FeeDetail.
 *
 * Properties:
 * <ul>
 *
 * <li>FeeType: string</li>
 * <li>FeeAmount: MoneyType</li>
 * <li>FeePromotion: MoneyType</li>
 * <li>TaxAmount: MoneyType</li>
 * <li>FinalFee: MoneyType</li>
 * <li>IncludedFeeDetailList: FeeDetailList</li>
 *
 * </ul>
 */
class FeeDetail extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'FeeType'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeeAmount'             => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'FeePromotion'          => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'TaxAmount'             => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'FinalFee'              => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
            'IncludedFeeDetailList' => ['FieldValue' => null, 'FieldType' => 'FeeDetailList'],
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
     * @return MoneyType feeAmount
     */
    public function getFeeAmount()
    {
        return $this->_fields['FeeAmount']['FieldValue'];
    }

    /**
     * Set the value of the FeeAmount property.
     *
     * @param MoneyType feeAmount
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

    /**
     * Get the value of the FeePromotion property.
     *
     * @return MoneyType feePromotion
     */
    public function getFeePromotion()
    {
        return $this->_fields['FeePromotion']['FieldValue'];
    }

    /**
     * Set the value of the FeePromotion property.
     *
     * @param MoneyType feePromotion
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeePromotion($value)
    {
        $this->_fields['FeePromotion']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FeePromotion is set.
     *
     * @return true if FeePromotion is set
     */
    public function isSetFeePromotion()
    {
        return null !== $this->_fields['FeePromotion']['FieldValue'];
    }

    /**
     * Set the value of FeePromotion, return this.
     *
     * @param feePromotion
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFeePromotion($value)
    {
        $this->setFeePromotion($value);

        return $this;
    }

    /**
     * Get the value of the TaxAmount property.
     *
     * @return MoneyType taxAmount
     */
    public function getTaxAmount()
    {
        return $this->_fields['TaxAmount']['FieldValue'];
    }

    /**
     * Set the value of the TaxAmount property.
     *
     * @param MoneyType taxAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxAmount($value)
    {
        $this->_fields['TaxAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TaxAmount is set.
     *
     * @return true if TaxAmount is set
     */
    public function isSetTaxAmount()
    {
        return null !== $this->_fields['TaxAmount']['FieldValue'];
    }

    /**
     * Set the value of TaxAmount, return this.
     *
     * @param taxAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTaxAmount($value)
    {
        $this->setTaxAmount($value);

        return $this;
    }

    /**
     * Get the value of the FinalFee property.
     *
     * @return MoneyType finalFee
     */
    public function getFinalFee()
    {
        return $this->_fields['FinalFee']['FieldValue'];
    }

    /**
     * Set the value of the FinalFee property.
     *
     * @param MoneyType finalFee
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFinalFee($value)
    {
        $this->_fields['FinalFee']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FinalFee is set.
     *
     * @return true if FinalFee is set
     */
    public function isSetFinalFee()
    {
        return null !== $this->_fields['FinalFee']['FieldValue'];
    }

    /**
     * Set the value of FinalFee, return this.
     *
     * @param finalFee
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFinalFee($value)
    {
        $this->setFinalFee($value);

        return $this;
    }

    /**
     * Get the value of the IncludedFeeDetailList property.
     *
     * @return FeeDetailList includedFeeDetailList
     */
    public function getIncludedFeeDetailList()
    {
        return $this->_fields['IncludedFeeDetailList']['FieldValue'];
    }

    /**
     * Set the value of the IncludedFeeDetailList property.
     *
     * @param FeeDetailList includedFeeDetailList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIncludedFeeDetailList($value)
    {
        $this->_fields['IncludedFeeDetailList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IncludedFeeDetailList is set.
     *
     * @return true if IncludedFeeDetailList is set
     */
    public function isSetIncludedFeeDetailList()
    {
        return null !== $this->_fields['IncludedFeeDetailList']['FieldValue'];
    }

    /**
     * Set the value of IncludedFeeDetailList, return this.
     *
     * @param includedFeeDetailList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIncludedFeeDetailList($value)
    {
        $this->setIncludedFeeDetailList($value);

        return $this;
    }
}
