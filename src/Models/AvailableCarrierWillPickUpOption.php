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
 * AvailableCarrierWillPickUpOption.
 *
 * Properties:
 * <ul>
 *
 * <li>CarrierWillPickUpOption: string</li>
 * <li>Charge: CurrencyAmount</li>
 *
 * </ul>
 */
class AvailableCarrierWillPickUpOption extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CarrierWillPickUpOption' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Charge'                  => ['FieldValue' => null, 'FieldType' => 'CurrencyAmount'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the CarrierWillPickUpOption property.
     *
     * @return string carrierWillPickUpOption
     */
    public function getCarrierWillPickUpOption()
    {
        return $this->_fields['CarrierWillPickUpOption']['FieldValue'];
    }

    /**
     * Set the value of the CarrierWillPickUpOption property.
     *
     * @param string carrierWillPickUpOption
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCarrierWillPickUpOption($value)
    {
        $this->_fields['CarrierWillPickUpOption']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CarrierWillPickUpOption is set.
     *
     * @return true if CarrierWillPickUpOption is set
     */
    public function isSetCarrierWillPickUpOption()
    {
        return null !== $this->_fields['CarrierWillPickUpOption']['FieldValue'];
    }

    /**
     * Set the value of CarrierWillPickUpOption, return this.
     *
     * @param carrierWillPickUpOption
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCarrierWillPickUpOption($value)
    {
        $this->setCarrierWillPickUpOption($value);

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
