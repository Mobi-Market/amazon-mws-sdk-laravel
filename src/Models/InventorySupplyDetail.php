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
 * @package  FBA Inventory Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Tue Sep 11 14:38:40 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * InventorySupplyDetail.
 *
 * Properties:
 * <ul>
 *
 * <li>Quantity: int</li>
 * <li>SupplyType: string</li>
 * <li>EarliestAvailableToPick: Timepoint</li>
 * <li>LatestAvailableToPick: Timepoint</li>
 *
 * </ul>
 */
class InventorySupplyDetail extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Quantity'                => ['FieldValue' => null, 'FieldType' => 'int'],
            'SupplyType'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'EarliestAvailableToPick' => ['FieldValue' => null, 'FieldType' => 'Timepoint'],
            'LatestAvailableToPick'   => ['FieldValue' => null, 'FieldType' => 'Timepoint'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return int quantity
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set
     */
    public function isSetQuantity()
    {
        return null !== $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);

        return $this;
    }

    /**
     * Get the value of the SupplyType property.
     *
     * @return string supplyType
     */
    public function getSupplyType()
    {
        return $this->_fields['SupplyType']['FieldValue'];
    }

    /**
     * Set the value of the SupplyType property.
     *
     * @param string supplyType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSupplyType($value)
    {
        $this->_fields['SupplyType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SupplyType is set.
     *
     * @return true if SupplyType is set
     */
    public function isSetSupplyType()
    {
        return null !== $this->_fields['SupplyType']['FieldValue'];
    }

    /**
     * Set the value of SupplyType, return this.
     *
     * @param supplyType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSupplyType($value)
    {
        $this->setSupplyType($value);

        return $this;
    }

    /**
     * Get the value of the EarliestAvailableToPick property.
     *
     * @return Timepoint earliestAvailableToPick
     */
    public function getEarliestAvailableToPick()
    {
        return $this->_fields['EarliestAvailableToPick']['FieldValue'];
    }

    /**
     * Set the value of the EarliestAvailableToPick property.
     *
     * @param Timepoint earliestAvailableToPick
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEarliestAvailableToPick($value)
    {
        $this->_fields['EarliestAvailableToPick']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EarliestAvailableToPick is set.
     *
     * @return true if EarliestAvailableToPick is set
     */
    public function isSetEarliestAvailableToPick()
    {
        return null !== $this->_fields['EarliestAvailableToPick']['FieldValue'];
    }

    /**
     * Set the value of EarliestAvailableToPick, return this.
     *
     * @param earliestAvailableToPick
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEarliestAvailableToPick($value)
    {
        $this->setEarliestAvailableToPick($value);

        return $this;
    }

    /**
     * Get the value of the LatestAvailableToPick property.
     *
     * @return Timepoint latestAvailableToPick
     */
    public function getLatestAvailableToPick()
    {
        return $this->_fields['LatestAvailableToPick']['FieldValue'];
    }

    /**
     * Set the value of the LatestAvailableToPick property.
     *
     * @param Timepoint latestAvailableToPick
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLatestAvailableToPick($value)
    {
        $this->_fields['LatestAvailableToPick']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LatestAvailableToPick is set.
     *
     * @return true if LatestAvailableToPick is set
     */
    public function isSetLatestAvailableToPick()
    {
        return null !== $this->_fields['LatestAvailableToPick']['FieldValue'];
    }

    /**
     * Set the value of LatestAvailableToPick, return this.
     *
     * @param latestAvailableToPick
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLatestAvailableToPick($value)
    {
        $this->setLatestAvailableToPick($value);

        return $this;
    }
}
