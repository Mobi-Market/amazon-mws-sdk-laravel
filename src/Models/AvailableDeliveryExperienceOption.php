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
 * AvailableDeliveryExperienceOption.
 *
 * Properties:
 * <ul>
 *
 * <li>DeliveryExperienceOption: string</li>
 * <li>Charge: CurrencyAmount</li>
 *
 * </ul>
 */
class AvailableDeliveryExperienceOption extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'DeliveryExperienceOption' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Charge'                   => ['FieldValue' => null, 'FieldType' => 'CurrencyAmount'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryExperienceOption property.
     *
     * @return string deliveryExperienceOption
     */
    public function getDeliveryExperienceOption()
    {
        return $this->_fields['DeliveryExperienceOption']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryExperienceOption property.
     *
     * @param string deliveryExperienceOption
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDeliveryExperienceOption($value)
    {
        $this->_fields['DeliveryExperienceOption']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DeliveryExperienceOption is set.
     *
     * @return true if DeliveryExperienceOption is set
     */
    public function isSetDeliveryExperienceOption()
    {
        return null !== $this->_fields['DeliveryExperienceOption']['FieldValue'];
    }

    /**
     * Set the value of DeliveryExperienceOption, return this.
     *
     * @param deliveryExperienceOption
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDeliveryExperienceOption($value)
    {
        $this->setDeliveryExperienceOption($value);

        return $this;
    }

    /**
     * Get the value of the Charge property.
     *
     * @return CurrencyAmount charge
     */
    public function getCharge()
    {
        return $this->_fields['Charge']['FieldValue'];
    }

    /**
     * Set the value of the Charge property.
     *
     * @param CurrencyAmount charge
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCharge($value)
    {
        $this->_fields['Charge']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Charge is set.
     *
     * @return true if Charge is set
     */
    public function isSetCharge()
    {
        return null !== $this->_fields['Charge']['FieldValue'];
    }

    /**
     * Set the value of Charge, return this.
     *
     * @param charge
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCharge($value)
    {
        $this->setCharge($value);

        return $this;
    }
}
