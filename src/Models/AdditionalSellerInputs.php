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
 * AdditionalSellerInputs.
 *
 * Properties:
 * <ul>
 *
 * <li>AdditionalInputFieldName: string</li>
 * <li>AdditionalSellerInput: AdditionalSellerInput</li>
 *
 * </ul>
 */
class AdditionalSellerInputs extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AdditionalInputFieldName' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AdditionalSellerInput'    => ['FieldValue' => null, 'FieldType' => 'AdditionalSellerInput'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AdditionalInputFieldName property.
     *
     * @return string additionalInputFieldName
     */
    public function getAdditionalInputFieldName()
    {
        return $this->_fields['AdditionalInputFieldName']['FieldValue'];
    }

    /**
     * Set the value of the AdditionalInputFieldName property.
     *
     * @param string additionalInputFieldName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAdditionalInputFieldName($value)
    {
        $this->_fields['AdditionalInputFieldName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AdditionalInputFieldName is set.
     *
     * @return true if AdditionalInputFieldName is set
     */
    public function isSetAdditionalInputFieldName()
    {
        return null !== $this->_fields['AdditionalInputFieldName']['FieldValue'];
    }

    /**
     * Set the value of AdditionalInputFieldName, return this.
     *
     * @param additionalInputFieldName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAdditionalInputFieldName($value)
    {
        $this->setAdditionalInputFieldName($value);

        return $this;
    }

    /**
     * Get the value of the AdditionalSellerInput property.
     *
     * @return AdditionalSellerInput additionalSellerInput
     */
    public function getAdditionalSellerInput()
    {
        return $this->_fields['AdditionalSellerInput']['FieldValue'];
    }

    /**
     * Set the value of the AdditionalSellerInput property.
     *
     * @param AdditionalSellerInput additionalSellerInput
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAdditionalSellerInput($value)
    {
        $this->_fields['AdditionalSellerInput']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AdditionalSellerInput is set.
     *
     * @return true if AdditionalSellerInput is set
     */
    public function isSetAdditionalSellerInput()
    {
        return null !== $this->_fields['AdditionalSellerInput']['FieldValue'];
    }

    /**
     * Set the value of AdditionalSellerInput, return this.
     *
     * @param additionalSellerInput
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAdditionalSellerInput($value)
    {
        $this->setAdditionalSellerInput($value);

        return $this;
    }
}
