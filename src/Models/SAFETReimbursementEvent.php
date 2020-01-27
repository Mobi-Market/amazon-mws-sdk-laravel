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
 * SAFETReimbursementEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>PostedDate: string</li>
 * <li>SAFETClaimId: string</li>
 * <li>ReimbursedAmount: Currency</li>
 * <li>ReasonCode: string</li>
 * <li>SAFETReimbursementItemList: array</li>
 *
 * </ul>
 */
class SAFETReimbursementEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PostedDate'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'SAFETClaimId'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReimbursedAmount'           => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'ReasonCode'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'SAFETReimbursementItemList' => ['FieldValue' => [], 'FieldType' => ['SAFETReimbursementItem'], 'ListMemberName' => 'SAFETReimbursementItem'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar postedDate
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set
     */
    public function isSetPostedDate()
    {
        return null !== $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);

        return $this;
    }

    /**
     * Get the value of the SAFETClaimId property.
     *
     * @return string SAFETClaimId
     */
    public function getSAFETClaimId()
    {
        return $this->_fields['SAFETClaimId']['FieldValue'];
    }

    /**
     * Set the value of the SAFETClaimId property.
     *
     * @param string safetClaimId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSAFETClaimId($value)
    {
        $this->_fields['SAFETClaimId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SAFETClaimId is set.
     *
     * @return true if SAFETClaimId is set
     */
    public function isSetSAFETClaimId()
    {
        return null !== $this->_fields['SAFETClaimId']['FieldValue'];
    }

    /**
     * Set the value of SAFETClaimId, return this.
     *
     * @param safetClaimId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSAFETClaimId($value)
    {
        $this->setSAFETClaimId($value);

        return $this;
    }

    /**
     * Get the value of the ReimbursedAmount property.
     *
     * @return Currency reimbursedAmount
     */
    public function getReimbursedAmount()
    {
        return $this->_fields['ReimbursedAmount']['FieldValue'];
    }

    /**
     * Set the value of the ReimbursedAmount property.
     *
     * @param Currency reimbursedAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReimbursedAmount($value)
    {
        $this->_fields['ReimbursedAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReimbursedAmount is set.
     *
     * @return true if ReimbursedAmount is set
     */
    public function isSetReimbursedAmount()
    {
        return null !== $this->_fields['ReimbursedAmount']['FieldValue'];
    }

    /**
     * Set the value of ReimbursedAmount, return this.
     *
     * @param reimbursedAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReimbursedAmount($value)
    {
        $this->setReimbursedAmount($value);

        return $this;
    }

    /**
     * Get the value of the ReasonCode property.
     *
     * @return string reasonCode
     */
    public function getReasonCode()
    {
        return $this->_fields['ReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the ReasonCode property.
     *
     * @param string reasonCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReasonCode($value)
    {
        $this->_fields['ReasonCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReasonCode is set.
     *
     * @return true if ReasonCode is set
     */
    public function isSetReasonCode()
    {
        return null !== $this->_fields['ReasonCode']['FieldValue'];
    }

    /**
     * Set the value of ReasonCode, return this.
     *
     * @param reasonCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReasonCode($value)
    {
        $this->setReasonCode($value);

        return $this;
    }

    /**
     * Get the value of the SAFETReimbursementItemList property.
     *
     * @return list<SAFETReimbursementItem> SAFETReimbursementItemList
     */
    public function getSAFETReimbursementItemList()
    {
        if (null == $this->_fields['SAFETReimbursementItemList']['FieldValue']) {
            $this->_fields['SAFETReimbursementItemList']['FieldValue'] = [];
        }

        return $this->_fields['SAFETReimbursementItemList']['FieldValue'];
    }

    /**
     * Set the value of the SAFETReimbursementItemList property.
     *
     * @param array safetReimbursementItemList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSAFETReimbursementItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['SAFETReimbursementItemList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear SAFETReimbursementItemList.
     */
    public function unsetSAFETReimbursementItemList(): void
    {
        $this->_fields['SAFETReimbursementItemList']['FieldValue'] = [];
    }

    /**
     * Check to see if SAFETReimbursementItemList is set.
     *
     * @return true if SAFETReimbursementItemList is set
     */
    public function isSetSAFETReimbursementItemList()
    {
        return !empty($this->_fields['SAFETReimbursementItemList']['FieldValue']);
    }

    /**
     * Add values for SAFETReimbursementItemList, return this.
     *
     * @param safetReimbursementItemList
     *             New values to add
     *
     * @return $this instance
     */
    public function withSAFETReimbursementItemList()
    {
        foreach (\func_get_args() as $SAFETReimbursementItemList) {
            $this->_fields['SAFETReimbursementItemList']['FieldValue'][] = $SAFETReimbursementItemList;
        }

        return $this;
    }
}
