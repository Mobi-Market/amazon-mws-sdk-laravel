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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ShippingServiceOptions.
 *
 * Properties:
 * <ul>
 *
 * <li>DeliveryExperience: string</li>
 * <li>DeclaredValue: CurrencyAmount</li>
 * <li>CarrierWillPickUp: bool</li>
 * <li>CarrierWillPickUpOption: string</li>
 * <li>LabelFormat: string</li>
 *
 * </ul>
 */
class ShippingServiceOptions extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'DeliveryExperience'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'DeclaredValue'           => ['FieldValue' => null, 'FieldType' => 'CurrencyAmount'],
            'CarrierWillPickUp'       => ['FieldValue' => null, 'FieldType' => 'bool'],
            'CarrierWillPickUpOption' => ['FieldValue' => null, 'FieldType' => 'string'],
            'LabelFormat'             => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryExperience property.
     *
     * @return string deliveryExperience
     */
    public function getDeliveryExperience()
    {
        return $this->_fields['DeliveryExperience']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryExperience property.
     *
     * @param string deliveryExperience
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDeliveryExperience($value)
    {
        $this->_fields['DeliveryExperience']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DeliveryExperience is set.
     *
     * @return true if DeliveryExperience is set
     */
    public function isSetDeliveryExperience()
    {
        return null !== $this->_fields['DeliveryExperience']['FieldValue'];
    }

    /**
     * Set the value of DeliveryExperience, return this.
     *
     * @param deliveryExperience
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDeliveryExperience($value)
    {
        $this->setDeliveryExperience($value);

        return $this;
    }

    /**
     * Get the value of the DeclaredValue property.
     *
     * @return CurrencyAmount declaredValue
     */
    public function getDeclaredValue()
    {
        return $this->_fields['DeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of the DeclaredValue property.
     *
     * @param CurrencyAmount declaredValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDeclaredValue($value)
    {
        $this->_fields['DeclaredValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DeclaredValue is set.
     *
     * @return true if DeclaredValue is set
     */
    public function isSetDeclaredValue()
    {
        return null !== $this->_fields['DeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of DeclaredValue, return this.
     *
     * @param declaredValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDeclaredValue($value)
    {
        $this->setDeclaredValue($value);

        return $this;
    }

    /**
     * Check the value of CarrierWillPickUp.
     *
     * @return true if CarrierWillPickUp is set to true
     */
    public function isCarrierWillPickUp()
    {
        return null !== $this->_fields['CarrierWillPickUp']['FieldValue'] && $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Get the value of the CarrierWillPickUp property.
     *
     * @return bool carrierWillPickUp
     */
    public function getCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Set the value of the CarrierWillPickUp property.
     *
     * @param bool carrierWillPickUp
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCarrierWillPickUp($value)
    {
        $this->_fields['CarrierWillPickUp']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CarrierWillPickUp is set.
     *
     * @return true if CarrierWillPickUp is set
     */
    public function isSetCarrierWillPickUp()
    {
        return null !== $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Set the value of CarrierWillPickUp, return this.
     *
     * @param carrierWillPickUp
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCarrierWillPickUp($value)
    {
        $this->setCarrierWillPickUp($value);

        return $this;
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
     * Get the value of the LabelFormat property.
     *
     * @return string labelFormat
     */
    public function getLabelFormat()
    {
        return $this->_fields['LabelFormat']['FieldValue'];
    }

    /**
     * Set the value of the LabelFormat property.
     *
     * @param string labelFormat
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLabelFormat($value)
    {
        $this->_fields['LabelFormat']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LabelFormat is set.
     *
     * @return true if LabelFormat is set
     */
    public function isSetLabelFormat()
    {
        return null !== $this->_fields['LabelFormat']['FieldValue'];
    }

    /**
     * Set the value of LabelFormat, return this.
     *
     * @param labelFormat
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLabelFormat($value)
    {
        $this->setLabelFormat($value);

        return $this;
    }
}
