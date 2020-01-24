<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2019-02-25
 * Generated: Wed Mar 13 08:17:11 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * AdjustmentEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>AdjustmentType: string</li>
 * <li>PostedDate: string</li>
 * <li>AdjustmentAmount: Currency</li>
 * <li>AdjustmentItemList: array</li>
 *
 * </ul>
 */
class AdjustmentEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AdjustmentType'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'PostedDate'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'AdjustmentAmount'   => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'AdjustmentItemList' => ['FieldValue' => [], 'FieldType' => ['AdjustmentItem'], 'ListMemberName' => 'AdjustmentItem'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AdjustmentType property.
     *
     * @return string adjustmentType
     */
    public function getAdjustmentType()
    {
        return $this->_fields['AdjustmentType']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentType property.
     *
     * @param string adjustmentType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAdjustmentType($value)
    {
        $this->_fields['AdjustmentType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AdjustmentType is set.
     *
     * @return true if AdjustmentType is set
     */
    public function isSetAdjustmentType()
    {
        return null !== $this->_fields['AdjustmentType']['FieldValue'];
    }

    /**
     * Set the value of AdjustmentType, return this.
     *
     * @param adjustmentType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAdjustmentType($value)
    {
        $this->setAdjustmentType($value);

        return $this;
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
     * Get the value of the AdjustmentAmount property.
     *
     * @return Currency adjustmentAmount
     */
    public function getAdjustmentAmount()
    {
        return $this->_fields['AdjustmentAmount']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentAmount property.
     *
     * @param Currency adjustmentAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAdjustmentAmount($value)
    {
        $this->_fields['AdjustmentAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AdjustmentAmount is set.
     *
     * @return true if AdjustmentAmount is set
     */
    public function isSetAdjustmentAmount()
    {
        return null !== $this->_fields['AdjustmentAmount']['FieldValue'];
    }

    /**
     * Set the value of AdjustmentAmount, return this.
     *
     * @param adjustmentAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAdjustmentAmount($value)
    {
        $this->setAdjustmentAmount($value);

        return $this;
    }

    /**
     * Get the value of the AdjustmentItemList property.
     *
     * @return List<AdjustmentItem> adjustmentItemList
     */
    public function getAdjustmentItemList()
    {
        if (null == $this->_fields['AdjustmentItemList']['FieldValue']) {
            $this->_fields['AdjustmentItemList']['FieldValue'] = [];
        }

        return $this->_fields['AdjustmentItemList']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentItemList property.
     *
     * @param array adjustmentItemList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAdjustmentItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AdjustmentItemList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AdjustmentItemList.
     */
    public function unsetAdjustmentItemList(): void
    {
        $this->_fields['AdjustmentItemList']['FieldValue'] = [];
    }

    /**
     * Check to see if AdjustmentItemList is set.
     *
     * @return true if AdjustmentItemList is set
     */
    public function isSetAdjustmentItemList()
    {
        return !empty($this->_fields['AdjustmentItemList']['FieldValue']);
    }

    /**
     * Add values for AdjustmentItemList, return this.
     *
     * @param adjustmentItemList
     *             New values to add
     *
     * @return $this instance
     */
    public function withAdjustmentItemList()
    {
        foreach (\func_get_args() as $AdjustmentItemList) {
            $this->_fields['AdjustmentItemList']['FieldValue'][] = $AdjustmentItemList;
        }

        return $this;
    }
}
