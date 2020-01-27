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
 * AvailableShippingServiceOptions.
 *
 * Properties:
 * <ul>
 *
 * <li>AvailableCarrierWillPickUpOptions: array</li>
 * <li>AvailableDeliveryExperienceOptions: array</li>
 *
 * </ul>
 */
class AvailableShippingServiceOptions extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AvailableCarrierWillPickUpOptions'  => ['FieldValue' => [], 'FieldType' => ['AvailableCarrierWillPickUpOption'], 'ListMemberName' => 'AvailableCarrierWillPickUpOption'],
            'AvailableDeliveryExperienceOptions' => ['FieldValue' => [], 'FieldType' => ['AvailableDeliveryExperienceOption'], 'ListMemberName' => 'AvailableDeliveryExperienceOption'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AvailableCarrierWillPickUpOptions property.
     *
     * @return List<AvailableCarrierWillPickUpOption> availableCarrierWillPickUpOptions
     */
    public function getAvailableCarrierWillPickUpOptions()
    {
        if (null == $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue']) {
            $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'] = [];
        }

        return $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'];
    }

    /**
     * Set the value of the AvailableCarrierWillPickUpOptions property.
     *
     * @param array availableCarrierWillPickUpOptions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAvailableCarrierWillPickUpOptions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AvailableCarrierWillPickUpOptions.
     */
    public function unsetAvailableCarrierWillPickUpOptions(): void
    {
        $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'] = [];
    }

    /**
     * Check to see if AvailableCarrierWillPickUpOptions is set.
     *
     * @return true if AvailableCarrierWillPickUpOptions is set
     */
    public function isSetAvailableCarrierWillPickUpOptions()
    {
        return !empty($this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue']);
    }

    /**
     * Add values for AvailableCarrierWillPickUpOptions, return this.
     *
     * @param availableCarrierWillPickUpOptions
     *             New values to add
     *
     * @return $this instance
     */
    public function withAvailableCarrierWillPickUpOptions()
    {
        foreach (\func_get_args() as $AvailableCarrierWillPickUpOptions) {
            $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'][] = $AvailableCarrierWillPickUpOptions;
        }

        return $this;
    }

    /**
     * Get the value of the AvailableDeliveryExperienceOptions property.
     *
     * @return List<AvailableDeliveryExperienceOption> availableDeliveryExperienceOptions
     */
    public function getAvailableDeliveryExperienceOptions()
    {
        if (null == $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue']) {
            $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'] = [];
        }

        return $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'];
    }

    /**
     * Set the value of the AvailableDeliveryExperienceOptions property.
     *
     * @param array availableDeliveryExperienceOptions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAvailableDeliveryExperienceOptions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AvailableDeliveryExperienceOptions.
     */
    public function unsetAvailableDeliveryExperienceOptions(): void
    {
        $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'] = [];
    }

    /**
     * Check to see if AvailableDeliveryExperienceOptions is set.
     *
     * @return true if AvailableDeliveryExperienceOptions is set
     */
    public function isSetAvailableDeliveryExperienceOptions()
    {
        return !empty($this->_fields['AvailableDeliveryExperienceOptions']['FieldValue']);
    }

    /**
     * Add values for AvailableDeliveryExperienceOptions, return this.
     *
     * @param availableDeliveryExperienceOptions
     *             New values to add
     *
     * @return $this instance
     */
    public function withAvailableDeliveryExperienceOptions()
    {
        foreach (\func_get_args() as $AvailableDeliveryExperienceOptions) {
            $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'][] = $AvailableDeliveryExperienceOptions;
        }

        return $this;
    }
}
