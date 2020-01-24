<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
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
 * @package  MWS Easy Ship Section Service
 * @version  2018-09-01
 * Library Version: 2018-09-01
 * Generated: Thu Sep 27 07:44:07 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * PickupSlot.
 *
 * Properties:
 * <ul>
 *
 * <li>SlotId: string</li>
 * <li>PickupTimeStart: string</li>
 * <li>PickupTimeEnd: string</li>
 *
 * </ul>
 */
class PickupSlot extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SlotId'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'PickupTimeStart' => ['FieldValue' => null, 'FieldType' => 'string'],
            'PickupTimeEnd'   => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SlotId property.
     *
     * @return string slotId
     */
    public function getSlotId()
    {
        return $this->_fields['SlotId']['FieldValue'];
    }

    /**
     * Set the value of the SlotId property.
     *
     * @param string slotId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSlotId($value)
    {
        $this->_fields['SlotId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SlotId is set.
     *
     * @return true if SlotId is set
     */
    public function isSetSlotId()
    {
        return null !== $this->_fields['SlotId']['FieldValue'];
    }

    /**
     * Set the value of SlotId, return this.
     *
     * @param slotId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSlotId($value)
    {
        $this->setSlotId($value);

        return $this;
    }

    /**
     * Get the value of the PickupTimeStart property.
     *
     * @return XMLGregorianCalendar pickupTimeStart
     */
    public function getPickupTimeStart()
    {
        return $this->_fields['PickupTimeStart']['FieldValue'];
    }

    /**
     * Set the value of the PickupTimeStart property.
     *
     * @param string pickupTimeStart
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPickupTimeStart($value)
    {
        $this->_fields['PickupTimeStart']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PickupTimeStart is set.
     *
     * @return true if PickupTimeStart is set
     */
    public function isSetPickupTimeStart()
    {
        return null !== $this->_fields['PickupTimeStart']['FieldValue'];
    }

    /**
     * Set the value of PickupTimeStart, return this.
     *
     * @param pickupTimeStart
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPickupTimeStart($value)
    {
        $this->setPickupTimeStart($value);

        return $this;
    }

    /**
     * Get the value of the PickupTimeEnd property.
     *
     * @return XMLGregorianCalendar pickupTimeEnd
     */
    public function getPickupTimeEnd()
    {
        return $this->_fields['PickupTimeEnd']['FieldValue'];
    }

    /**
     * Set the value of the PickupTimeEnd property.
     *
     * @param string pickupTimeEnd
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPickupTimeEnd($value)
    {
        $this->_fields['PickupTimeEnd']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PickupTimeEnd is set.
     *
     * @return true if PickupTimeEnd is set
     */
    public function isSetPickupTimeEnd()
    {
        return null !== $this->_fields['PickupTimeEnd']['FieldValue'];
    }

    /**
     * Set the value of PickupTimeEnd, return this.
     *
     * @param pickupTimeEnd
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPickupTimeEnd($value)
    {
        $this->setPickupTimeEnd($value);

        return $this;
    }
}
