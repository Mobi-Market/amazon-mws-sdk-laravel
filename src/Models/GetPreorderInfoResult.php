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
 * GetPreorderInfoResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ShipmentContainsPreorderableItems: bool</li>
 * <li>ShipmentConfirmedForPreorder: bool</li>
 * <li>NeedByDate: string</li>
 * <li>ConfirmedFulfillableDate: string</li>
 *
 * </ul>
 */
class GetPreorderInfoResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShipmentContainsPreorderableItems' => ['FieldValue' => null, 'FieldType' => 'bool'],
            'ShipmentConfirmedForPreorder'      => ['FieldValue' => null, 'FieldType' => 'bool'],
            'NeedByDate'                        => ['FieldValue' => null, 'FieldType' => 'string'],
            'ConfirmedFulfillableDate'          => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Check the value of ShipmentContainsPreorderableItems.
     *
     * @return true if ShipmentContainsPreorderableItems is set to true
     */
    public function isShipmentContainsPreorderableItems()
    {
        return null !== $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'] && $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'];
    }

    /**
     * Get the value of the ShipmentContainsPreorderableItems property.
     *
     * @return bool shipmentContainsPreorderableItems
     */
    public function getShipmentContainsPreorderableItems()
    {
        return $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentContainsPreorderableItems property.
     *
     * @param bool shipmentContainsPreorderableItems
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentContainsPreorderableItems($value)
    {
        $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentContainsPreorderableItems is set.
     *
     * @return true if ShipmentContainsPreorderableItems is set
     */
    public function isSetShipmentContainsPreorderableItems()
    {
        return null !== $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'];
    }

    /**
     * Set the value of ShipmentContainsPreorderableItems, return this.
     *
     * @param shipmentContainsPreorderableItems
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentContainsPreorderableItems($value)
    {
        $this->setShipmentContainsPreorderableItems($value);

        return $this;
    }

    /**
     * Check the value of ShipmentConfirmedForPreorder.
     *
     * @return true if ShipmentConfirmedForPreorder is set to true
     */
    public function isShipmentConfirmedForPreorder()
    {
        return null !== $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'] && $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'];
    }

    /**
     * Get the value of the ShipmentConfirmedForPreorder property.
     *
     * @return bool shipmentConfirmedForPreorder
     */
    public function getShipmentConfirmedForPreorder()
    {
        return $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentConfirmedForPreorder property.
     *
     * @param bool shipmentConfirmedForPreorder
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentConfirmedForPreorder($value)
    {
        $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentConfirmedForPreorder is set.
     *
     * @return true if ShipmentConfirmedForPreorder is set
     */
    public function isSetShipmentConfirmedForPreorder()
    {
        return null !== $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'];
    }

    /**
     * Set the value of ShipmentConfirmedForPreorder, return this.
     *
     * @param shipmentConfirmedForPreorder
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentConfirmedForPreorder($value)
    {
        $this->setShipmentConfirmedForPreorder($value);

        return $this;
    }

    /**
     * Get the value of the NeedByDate property.
     *
     * @return string needByDate
     */
    public function getNeedByDate()
    {
        return $this->_fields['NeedByDate']['FieldValue'];
    }

    /**
     * Set the value of the NeedByDate property.
     *
     * @param string needByDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNeedByDate($value)
    {
        $this->_fields['NeedByDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NeedByDate is set.
     *
     * @return true if NeedByDate is set
     */
    public function isSetNeedByDate()
    {
        return null !== $this->_fields['NeedByDate']['FieldValue'];
    }

    /**
     * Set the value of NeedByDate, return this.
     *
     * @param needByDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNeedByDate($value)
    {
        $this->setNeedByDate($value);

        return $this;
    }

    /**
     * Get the value of the ConfirmedFulfillableDate property.
     *
     * @return string confirmedFulfillableDate
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->_fields['ConfirmedFulfillableDate']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmedFulfillableDate property.
     *
     * @param string confirmedFulfillableDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConfirmedFulfillableDate($value)
    {
        $this->_fields['ConfirmedFulfillableDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ConfirmedFulfillableDate is set.
     *
     * @return true if ConfirmedFulfillableDate is set
     */
    public function isSetConfirmedFulfillableDate()
    {
        return null !== $this->_fields['ConfirmedFulfillableDate']['FieldValue'];
    }

    /**
     * Set the value of ConfirmedFulfillableDate, return this.
     *
     * @param confirmedFulfillableDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withConfirmedFulfillableDate($value)
    {
        $this->setConfirmedFulfillableDate($value);

        return $this;
    }
}
