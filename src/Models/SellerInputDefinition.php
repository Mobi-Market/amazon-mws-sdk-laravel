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
 * SellerInputDefinition.
 *
 * Properties:
 * <ul>
 *
 * <li>IsRequired: bool</li>
 * <li>DataType: string</li>
 * <li>Constraints: array</li>
 * <li>InputDisplayText: string</li>
 * <li>InputTarget: string</li>
 * <li>StoredValue: AdditionalSellerInput</li>
 * <li>RestrictedSetValues: array</li>
 *
 * </ul>
 */
class SellerInputDefinition extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'IsRequired'          => ['FieldValue' => null, 'FieldType' => 'bool'],
            'DataType'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'Constraints'         => ['FieldValue' => [], 'FieldType' => ['Constraint'], 'ListMemberName' => 'member'],
            'InputDisplayText'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'InputTarget'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'StoredValue'         => ['FieldValue' => null, 'FieldType' => 'AdditionalSellerInput'],
            'RestrictedSetValues' => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'member'],
        ];
        parent::__construct($data);
    }

    /**
     * Check the value of IsRequired.
     *
     * @return true if IsRequired is set to true
     */
    public function isIsRequired()
    {
        return $this->_fields['IsRequired']['FieldValue'];
    }

    /**
     * Get the value of the IsRequired property.
     *
     * @return bool isRequired
     */
    public function getIsRequired()
    {
        return $this->_fields['IsRequired']['FieldValue'];
    }

    /**
     * Set the value of the IsRequired property.
     *
     * @param bool isRequired
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsRequired($value)
    {
        $this->_fields['IsRequired']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsRequired is set.
     *
     * @return true if IsRequired is set
     */
    public function isSetIsRequired()
    {
        return null !== $this->_fields['IsRequired']['FieldValue'];
    }

    /**
     * Set the value of IsRequired, return this.
     *
     * @param isRequired
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsRequired($value)
    {
        $this->setIsRequired($value);

        return $this;
    }

    /**
     * Get the value of the DataType property.
     *
     * @return string dataType
     */
    public function getDataType()
    {
        return $this->_fields['DataType']['FieldValue'];
    }

    /**
     * Set the value of the DataType property.
     *
     * @param string dataType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDataType($value)
    {
        $this->_fields['DataType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DataType is set.
     *
     * @return true if DataType is set
     */
    public function isSetDataType()
    {
        return null !== $this->_fields['DataType']['FieldValue'];
    }

    /**
     * Set the value of DataType, return this.
     *
     * @param dataType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDataType($value)
    {
        $this->setDataType($value);

        return $this;
    }

    /**
     * Get the value of the Constraints property.
     *
     * @return List<Constraint> constraints
     */
    public function getConstraints()
    {
        if (null == $this->_fields['Constraints']['FieldValue']) {
            $this->_fields['Constraints']['FieldValue'] = [];
        }

        return $this->_fields['Constraints']['FieldValue'];
    }

    /**
     * Set the value of the Constraints property.
     *
     * @param array constraints
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConstraints($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Constraints']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Constraints.
     */
    public function unsetConstraints(): void
    {
        $this->_fields['Constraints']['FieldValue'] = [];
    }

    /**
     * Check to see if Constraints is set.
     *
     * @return true if Constraints is set
     */
    public function isSetConstraints()
    {
        return !empty($this->_fields['Constraints']['FieldValue']);
    }

    /**
     * Add values for Constraints, return this.
     *
     * @param constraints
     *             New values to add
     *
     * @return $this instance
     */
    public function withConstraints()
    {
        foreach (\func_get_args() as $Constraints) {
            $this->_fields['Constraints']['FieldValue'][] = $Constraints;
        }

        return $this;
    }

    /**
     * Get the value of the InputDisplayText property.
     *
     * @return string inputDisplayText
     */
    public function getInputDisplayText()
    {
        return $this->_fields['InputDisplayText']['FieldValue'];
    }

    /**
     * Set the value of the InputDisplayText property.
     *
     * @param string inputDisplayText
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInputDisplayText($value)
    {
        $this->_fields['InputDisplayText']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InputDisplayText is set.
     *
     * @return true if InputDisplayText is set
     */
    public function isSetInputDisplayText()
    {
        return null !== $this->_fields['InputDisplayText']['FieldValue'];
    }

    /**
     * Set the value of InputDisplayText, return this.
     *
     * @param inputDisplayText
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInputDisplayText($value)
    {
        $this->setInputDisplayText($value);

        return $this;
    }

    /**
     * Get the value of the InputTarget property.
     *
     * @return string inputTarget
     */
    public function getInputTarget()
    {
        return $this->_fields['InputTarget']['FieldValue'];
    }

    /**
     * Set the value of the InputTarget property.
     *
     * @param string inputTarget
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInputTarget($value)
    {
        $this->_fields['InputTarget']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InputTarget is set.
     *
     * @return true if InputTarget is set
     */
    public function isSetInputTarget()
    {
        return null !== $this->_fields['InputTarget']['FieldValue'];
    }

    /**
     * Set the value of InputTarget, return this.
     *
     * @param inputTarget
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInputTarget($value)
    {
        $this->setInputTarget($value);

        return $this;
    }

    /**
     * Get the value of the StoredValue property.
     *
     * @return AdditionalSellerInput storedValue
     */
    public function getStoredValue()
    {
        return $this->_fields['StoredValue']['FieldValue'];
    }

    /**
     * Set the value of the StoredValue property.
     *
     * @param AdditionalSellerInput storedValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStoredValue($value)
    {
        $this->_fields['StoredValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if StoredValue is set.
     *
     * @return true if StoredValue is set
     */
    public function isSetStoredValue()
    {
        return null !== $this->_fields['StoredValue']['FieldValue'];
    }

    /**
     * Set the value of StoredValue, return this.
     *
     * @param storedValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withStoredValue($value)
    {
        $this->setStoredValue($value);

        return $this;
    }

    /**
     * Get the value of the RestrictedSetValues property.
     *
     * @return List<String> restrictedSetValues
     */
    public function getRestrictedSetValues()
    {
        if (null == $this->_fields['RestrictedSetValues']['FieldValue']) {
            $this->_fields['RestrictedSetValues']['FieldValue'] = [];
        }

        return $this->_fields['RestrictedSetValues']['FieldValue'];
    }

    /**
     * Set the value of the RestrictedSetValues property.
     *
     * @param array restrictedSetValues
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRestrictedSetValues($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['RestrictedSetValues']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear RestrictedSetValues.
     */
    public function unsetRestrictedSetValues(): void
    {
        $this->_fields['RestrictedSetValues']['FieldValue'] = [];
    }

    /**
     * Check to see if RestrictedSetValues is set.
     *
     * @return true if RestrictedSetValues is set
     */
    public function isSetRestrictedSetValues()
    {
        return !empty($this->_fields['RestrictedSetValues']['FieldValue']);
    }

    /**
     * Add values for RestrictedSetValues, return this.
     *
     * @param restrictedSetValues
     *             New values to add
     *
     * @return $this instance
     */
    public function withRestrictedSetValues()
    {
        foreach (\func_get_args() as $RestrictedSetValues) {
            $this->_fields['RestrictedSetValues']['FieldValue'][] = $RestrictedSetValues;
        }

        return $this;
    }
}
