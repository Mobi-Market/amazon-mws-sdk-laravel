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
 * ChargeComponent.
 *
 * Properties:
 * <ul>
 *
 * <li>ChargeType: string</li>
 * <li>ChargeAmount: Currency</li>
 *
 * </ul>
 */
class ChargeComponent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ChargeType'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'ChargeAmount' => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ChargeType property.
     *
     * @return string chargeType
     */
    public function getChargeType()
    {
        return $this->_fields['ChargeType']['FieldValue'];
    }

    /**
     * Set the value of the ChargeType property.
     *
     * @param string chargeType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setChargeType($value)
    {
        $this->_fields['ChargeType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ChargeType is set.
     *
     * @return true if ChargeType is set
     */
    public function isSetChargeType()
    {
        return null !== $this->_fields['ChargeType']['FieldValue'];
    }

    /**
     * Set the value of ChargeType, return this.
     *
     * @param chargeType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withChargeType($value)
    {
        $this->setChargeType($value);

        return $this;
    }

    /**
     * Get the value of the ChargeAmount property.
     *
     * @return Currency chargeAmount
     */
    public function getChargeAmount()
    {
        return $this->_fields['ChargeAmount']['FieldValue'];
    }

    /**
     * Set the value of the ChargeAmount property.
     *
     * @param Currency chargeAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setChargeAmount($value)
    {
        $this->_fields['ChargeAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ChargeAmount is set.
     *
     * @return true if ChargeAmount is set
     */
    public function isSetChargeAmount()
    {
        return null !== $this->_fields['ChargeAmount']['FieldValue'];
    }

    /**
     * Set the value of ChargeAmount, return this.
     *
     * @param chargeAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withChargeAmount($value)
    {
        $this->setChargeAmount($value);

        return $this;
    }
}
