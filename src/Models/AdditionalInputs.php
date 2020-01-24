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
 * AdditionalInputs.
 *
 * Properties:
 * <ul>
 *
 * <li>AdditionalInputFieldName: string</li>
 * <li>SellerInputDefinition: SellerInputDefinition</li>
 *
 * </ul>
 */
class AdditionalInputs extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AdditionalInputFieldName' => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerInputDefinition'    => ['FieldValue' => null, 'FieldType' => 'SellerInputDefinition'],
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
     * Get the value of the SellerInputDefinition property.
     *
     * @return SellerInputDefinition sellerInputDefinition
     */
    public function getSellerInputDefinition()
    {
        return $this->_fields['SellerInputDefinition']['FieldValue'];
    }

    /**
     * Set the value of the SellerInputDefinition property.
     *
     * @param SellerInputDefinition sellerInputDefinition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerInputDefinition($value)
    {
        $this->_fields['SellerInputDefinition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerInputDefinition is set.
     *
     * @return true if SellerInputDefinition is set
     */
    public function isSetSellerInputDefinition()
    {
        return null !== $this->_fields['SellerInputDefinition']['FieldValue'];
    }

    /**
     * Set the value of SellerInputDefinition, return this.
     *
     * @param sellerInputDefinition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerInputDefinition($value)
    {
        $this->setSellerInputDefinition($value);

        return $this;
    }
}
