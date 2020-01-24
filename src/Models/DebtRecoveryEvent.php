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
 * DebtRecoveryEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>DebtRecoveryType: string</li>
 * <li>RecoveryAmount: Currency</li>
 * <li>OverPaymentCredit: Currency</li>
 * <li>DebtRecoveryItemList: array</li>
 * <li>ChargeInstrumentList: array</li>
 *
 * </ul>
 */
class DebtRecoveryEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'DebtRecoveryType'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'RecoveryAmount'       => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'OverPaymentCredit'    => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'DebtRecoveryItemList' => ['FieldValue' => [], 'FieldType' => ['DebtRecoveryItem'], 'ListMemberName' => 'DebtRecoveryItem'],
            'ChargeInstrumentList' => ['FieldValue' => [], 'FieldType' => ['ChargeInstrument'], 'ListMemberName' => 'ChargeInstrument'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the DebtRecoveryType property.
     *
     * @return string debtRecoveryType
     */
    public function getDebtRecoveryType()
    {
        return $this->_fields['DebtRecoveryType']['FieldValue'];
    }

    /**
     * Set the value of the DebtRecoveryType property.
     *
     * @param string debtRecoveryType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDebtRecoveryType($value)
    {
        $this->_fields['DebtRecoveryType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DebtRecoveryType is set.
     *
     * @return true if DebtRecoveryType is set
     */
    public function isSetDebtRecoveryType()
    {
        return null !== $this->_fields['DebtRecoveryType']['FieldValue'];
    }

    /**
     * Set the value of DebtRecoveryType, return this.
     *
     * @param debtRecoveryType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDebtRecoveryType($value)
    {
        $this->setDebtRecoveryType($value);

        return $this;
    }

    /**
     * Get the value of the RecoveryAmount property.
     *
     * @return Currency recoveryAmount
     */
    public function getRecoveryAmount()
    {
        return $this->_fields['RecoveryAmount']['FieldValue'];
    }

    /**
     * Set the value of the RecoveryAmount property.
     *
     * @param Currency recoveryAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRecoveryAmount($value)
    {
        $this->_fields['RecoveryAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RecoveryAmount is set.
     *
     * @return true if RecoveryAmount is set
     */
    public function isSetRecoveryAmount()
    {
        return null !== $this->_fields['RecoveryAmount']['FieldValue'];
    }

    /**
     * Set the value of RecoveryAmount, return this.
     *
     * @param recoveryAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRecoveryAmount($value)
    {
        $this->setRecoveryAmount($value);

        return $this;
    }

    /**
     * Get the value of the OverPaymentCredit property.
     *
     * @return Currency overPaymentCredit
     */
    public function getOverPaymentCredit()
    {
        return $this->_fields['OverPaymentCredit']['FieldValue'];
    }

    /**
     * Set the value of the OverPaymentCredit property.
     *
     * @param Currency overPaymentCredit
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOverPaymentCredit($value)
    {
        $this->_fields['OverPaymentCredit']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OverPaymentCredit is set.
     *
     * @return true if OverPaymentCredit is set
     */
    public function isSetOverPaymentCredit()
    {
        return null !== $this->_fields['OverPaymentCredit']['FieldValue'];
    }

    /**
     * Set the value of OverPaymentCredit, return this.
     *
     * @param overPaymentCredit
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOverPaymentCredit($value)
    {
        $this->setOverPaymentCredit($value);

        return $this;
    }

    /**
     * Get the value of the DebtRecoveryItemList property.
     *
     * @return List<DebtRecoveryItem> debtRecoveryItemList
     */
    public function getDebtRecoveryItemList()
    {
        if (null == $this->_fields['DebtRecoveryItemList']['FieldValue']) {
            $this->_fields['DebtRecoveryItemList']['FieldValue'] = [];
        }

        return $this->_fields['DebtRecoveryItemList']['FieldValue'];
    }

    /**
     * Set the value of the DebtRecoveryItemList property.
     *
     * @param array debtRecoveryItemList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDebtRecoveryItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['DebtRecoveryItemList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear DebtRecoveryItemList.
     */
    public function unsetDebtRecoveryItemList(): void
    {
        $this->_fields['DebtRecoveryItemList']['FieldValue'] = [];
    }

    /**
     * Check to see if DebtRecoveryItemList is set.
     *
     * @return true if DebtRecoveryItemList is set
     */
    public function isSetDebtRecoveryItemList()
    {
        return !empty($this->_fields['DebtRecoveryItemList']['FieldValue']);
    }

    /**
     * Add values for DebtRecoveryItemList, return this.
     *
     * @param debtRecoveryItemList
     *             New values to add
     *
     * @return $this instance
     */
    public function withDebtRecoveryItemList()
    {
        foreach (\func_get_args() as $DebtRecoveryItemList) {
            $this->_fields['DebtRecoveryItemList']['FieldValue'][] = $DebtRecoveryItemList;
        }

        return $this;
    }

    /**
     * Get the value of the ChargeInstrumentList property.
     *
     * @return List<ChargeInstrument> chargeInstrumentList
     */
    public function getChargeInstrumentList()
    {
        if (null == $this->_fields['ChargeInstrumentList']['FieldValue']) {
            $this->_fields['ChargeInstrumentList']['FieldValue'] = [];
        }

        return $this->_fields['ChargeInstrumentList']['FieldValue'];
    }

    /**
     * Set the value of the ChargeInstrumentList property.
     *
     * @param array chargeInstrumentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setChargeInstrumentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ChargeInstrumentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ChargeInstrumentList.
     */
    public function unsetChargeInstrumentList(): void
    {
        $this->_fields['ChargeInstrumentList']['FieldValue'] = [];
    }

    /**
     * Check to see if ChargeInstrumentList is set.
     *
     * @return true if ChargeInstrumentList is set
     */
    public function isSetChargeInstrumentList()
    {
        return !empty($this->_fields['ChargeInstrumentList']['FieldValue']);
    }

    /**
     * Add values for ChargeInstrumentList, return this.
     *
     * @param chargeInstrumentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withChargeInstrumentList()
    {
        foreach (\func_get_args() as $ChargeInstrumentList) {
            $this->_fields['ChargeInstrumentList']['FieldValue'][] = $ChargeInstrumentList;
        }

        return $this;
    }
}
