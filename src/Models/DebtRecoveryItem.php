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
 * DebtRecoveryItem.
 *
 * Properties:
 * <ul>
 *
 * <li>RecoveryAmount: Currency</li>
 * <li>OriginalAmount: Currency</li>
 * <li>GroupBeginDate: string</li>
 * <li>GroupEndDate: string</li>
 *
 * </ul>
 */
class DebtRecoveryItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'RecoveryAmount' => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'OriginalAmount' => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'GroupBeginDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'GroupEndDate'   => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
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
     * Get the value of the OriginalAmount property.
     *
     * @return Currency originalAmount
     */
    public function getOriginalAmount()
    {
        return $this->_fields['OriginalAmount']['FieldValue'];
    }

    /**
     * Set the value of the OriginalAmount property.
     *
     * @param Currency originalAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOriginalAmount($value)
    {
        $this->_fields['OriginalAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OriginalAmount is set.
     *
     * @return true if OriginalAmount is set
     */
    public function isSetOriginalAmount()
    {
        return null !== $this->_fields['OriginalAmount']['FieldValue'];
    }

    /**
     * Set the value of OriginalAmount, return this.
     *
     * @param originalAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOriginalAmount($value)
    {
        $this->setOriginalAmount($value);

        return $this;
    }

    /**
     * Get the value of the GroupBeginDate property.
     *
     * @return XMLGregorianCalendar groupBeginDate
     */
    public function getGroupBeginDate()
    {
        return $this->_fields['GroupBeginDate']['FieldValue'];
    }

    /**
     * Set the value of the GroupBeginDate property.
     *
     * @param string groupBeginDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGroupBeginDate($value)
    {
        $this->_fields['GroupBeginDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GroupBeginDate is set.
     *
     * @return true if GroupBeginDate is set
     */
    public function isSetGroupBeginDate()
    {
        return null !== $this->_fields['GroupBeginDate']['FieldValue'];
    }

    /**
     * Set the value of GroupBeginDate, return this.
     *
     * @param groupBeginDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGroupBeginDate($value)
    {
        $this->setGroupBeginDate($value);

        return $this;
    }

    /**
     * Get the value of the GroupEndDate property.
     *
     * @return XMLGregorianCalendar groupEndDate
     */
    public function getGroupEndDate()
    {
        return $this->_fields['GroupEndDate']['FieldValue'];
    }

    /**
     * Set the value of the GroupEndDate property.
     *
     * @param string groupEndDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGroupEndDate($value)
    {
        $this->_fields['GroupEndDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GroupEndDate is set.
     *
     * @return true if GroupEndDate is set
     */
    public function isSetGroupEndDate()
    {
        return null !== $this->_fields['GroupEndDate']['FieldValue'];
    }

    /**
     * Set the value of GroupEndDate, return this.
     *
     * @param groupEndDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGroupEndDate($value)
    {
        $this->setGroupEndDate($value);

        return $this;
    }
}
