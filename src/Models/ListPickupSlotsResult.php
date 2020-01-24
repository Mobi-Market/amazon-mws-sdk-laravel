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
 * ListPickupSlotsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonOrderId: string</li>
 * <li>PickupSlotList: array</li>
 *
 * </ul>
 */
class ListPickupSlotsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonOrderId'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'PickupSlotList' => ['FieldValue' => [], 'FieldType' => ['PickupSlot'], 'ListMemberName' => 'PickupSlot'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return string amazonOrderId
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set
     */
    public function isSetAmazonOrderId()
    {
        return null !== $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);

        return $this;
    }

    /**
     * Get the value of the PickupSlotList property.
     *
     * @return List<PickupSlot> pickupSlotList
     */
    public function getPickupSlotList()
    {
        if (null == $this->_fields['PickupSlotList']['FieldValue']) {
            $this->_fields['PickupSlotList']['FieldValue'] = [];
        }

        return $this->_fields['PickupSlotList']['FieldValue'];
    }

    /**
     * Set the value of the PickupSlotList property.
     *
     * @param array pickupSlotList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPickupSlotList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PickupSlotList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PickupSlotList.
     */
    public function unsetPickupSlotList(): void
    {
        $this->_fields['PickupSlotList']['FieldValue'] = [];
    }

    /**
     * Check to see if PickupSlotList is set.
     *
     * @return true if PickupSlotList is set
     */
    public function isSetPickupSlotList()
    {
        return !empty($this->_fields['PickupSlotList']['FieldValue']);
    }

    /**
     * Add values for PickupSlotList, return this.
     *
     * @param pickupSlotList
     *             New values to add
     *
     * @return $this instance
     */
    public function withPickupSlotList()
    {
        foreach (\func_get_args() as $PickupSlotList) {
            $this->_fields['PickupSlotList']['FieldValue'][] = $PickupSlotList;
        }

        return $this;
    }
}
