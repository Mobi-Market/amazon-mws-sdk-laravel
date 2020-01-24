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
 * ReasonCodeDetails.
 *
 * Properties:
 * <ul>
 *
 * <li>ReturnReasonCode: string</li>
 * <li>Description: string</li>
 * <li>TranslatedDescription: string</li>
 *
 * </ul>
 */
class ReasonCodeDetails extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ReturnReasonCode'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'Description'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'TranslatedDescription' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ReturnReasonCode property.
     *
     * @return string returnReasonCode
     */
    public function getReturnReasonCode()
    {
        return $this->_fields['ReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the ReturnReasonCode property.
     *
     * @param string returnReasonCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReturnReasonCode($value)
    {
        $this->_fields['ReturnReasonCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReturnReasonCode is set.
     *
     * @return true if ReturnReasonCode is set
     */
    public function isSetReturnReasonCode()
    {
        return null !== $this->_fields['ReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of ReturnReasonCode, return this.
     *
     * @param returnReasonCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReturnReasonCode($value)
    {
        $this->setReturnReasonCode($value);

        return $this;
    }

    /**
     * Get the value of the Description property.
     *
     * @return string description
     */
    public function getDescription()
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Set the value of the Description property.
     *
     * @param string description
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDescription($value)
    {
        $this->_fields['Description']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Description is set.
     *
     * @return true if Description is set
     */
    public function isSetDescription()
    {
        return null !== $this->_fields['Description']['FieldValue'];
    }

    /**
     * Set the value of Description, return this.
     *
     * @param description
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDescription($value)
    {
        $this->setDescription($value);

        return $this;
    }

    /**
     * Get the value of the TranslatedDescription property.
     *
     * @return string translatedDescription
     */
    public function getTranslatedDescription()
    {
        return $this->_fields['TranslatedDescription']['FieldValue'];
    }

    /**
     * Set the value of the TranslatedDescription property.
     *
     * @param string translatedDescription
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTranslatedDescription($value)
    {
        $this->_fields['TranslatedDescription']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TranslatedDescription is set.
     *
     * @return true if TranslatedDescription is set
     */
    public function isSetTranslatedDescription()
    {
        return null !== $this->_fields['TranslatedDescription']['FieldValue'];
    }

    /**
     * Set the value of TranslatedDescription, return this.
     *
     * @param translatedDescription
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTranslatedDescription($value)
    {
        $this->setTranslatedDescription($value);

        return $this;
    }
}
