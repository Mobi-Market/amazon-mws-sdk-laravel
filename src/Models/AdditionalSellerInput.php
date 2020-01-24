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
 * AdditionalSellerInput.
 *
 * Properties:
 * <ul>
 *
 * <li>DataType: string</li>
 * <li>ValueAsString: string</li>
 * <li>ValueAsBoolean: bool</li>
 * <li>ValueAsInteger: int</li>
 * <li>ValueAsTimestamp: string</li>
 * <li>ValueAsAddress: Address</li>
 * <li>ValueAsWeight: Weight</li>
 * <li>ValueAsDimension: Length</li>
 * <li>ValueAsCurrency: CurrencyAmount</li>
 *
 * </ul>
 */
class AdditionalSellerInput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'DataType'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'ValueAsString'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'ValueAsBoolean'   => ['FieldValue' => null, 'FieldType' => 'bool'],
            'ValueAsInteger'   => ['FieldValue' => null, 'FieldType' => 'int'],
            'ValueAsTimestamp' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ValueAsAddress'   => ['FieldValue' => null, 'FieldType' => 'Address'],
            'ValueAsWeight'    => ['FieldValue' => null, 'FieldType' => 'Weight'],
            'ValueAsDimension' => ['FieldValue' => null, 'FieldType' => 'Length'],
            'ValueAsCurrency'  => ['FieldValue' => null, 'FieldType' => 'CurrencyAmount'],
        ];
        parent::__construct($data);
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
     * Get the value of the ValueAsString property.
     *
     * @return string valueAsString
     */
    public function getValueAsString()
    {
        return $this->_fields['ValueAsString']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsString property.
     *
     * @param string valueAsString
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValueAsString($value)
    {
        $this->_fields['ValueAsString']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValueAsString is set.
     *
     * @return true if ValueAsString is set
     */
    public function isSetValueAsString()
    {
        return null !== $this->_fields['ValueAsString']['FieldValue'];
    }

    /**
     * Set the value of ValueAsString, return this.
     *
     * @param valueAsString
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValueAsString($value)
    {
        $this->setValueAsString($value);

        return $this;
    }

    /**
     * Check the value of ValueAsBoolean.
     *
     * @return true if ValueAsBoolean is set to true
     */
    public function isValueAsBoolean()
    {
        return null !== $this->_fields['ValueAsBoolean']['FieldValue'] && $this->_fields['ValueAsBoolean']['FieldValue'];
    }

    /**
     * Get the value of the ValueAsBoolean property.
     *
     * @return bool valueAsBoolean
     */
    public function getValueAsBoolean()
    {
        return $this->_fields['ValueAsBoolean']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsBoolean property.
     *
     * @param bool valueAsBoolean
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValueAsBoolean($value)
    {
        $this->_fields['ValueAsBoolean']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValueAsBoolean is set.
     *
     * @return true if ValueAsBoolean is set
     */
    public function isSetValueAsBoolean()
    {
        return null !== $this->_fields['ValueAsBoolean']['FieldValue'];
    }

    /**
     * Set the value of ValueAsBoolean, return this.
     *
     * @param valueAsBoolean
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValueAsBoolean($value)
    {
        $this->setValueAsBoolean($value);

        return $this;
    }

    /**
     * Get the value of the ValueAsInteger property.
     *
     * @return int valueAsInteger
     */
    public function getValueAsInteger()
    {
        return $this->_fields['ValueAsInteger']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsInteger property.
     *
     * @param int valueAsInteger
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValueAsInteger($value)
    {
        $this->_fields['ValueAsInteger']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValueAsInteger is set.
     *
     * @return true if ValueAsInteger is set
     */
    public function isSetValueAsInteger()
    {
        return null !== $this->_fields['ValueAsInteger']['FieldValue'];
    }

    /**
     * Set the value of ValueAsInteger, return this.
     *
     * @param valueAsInteger
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValueAsInteger($value)
    {
        $this->setValueAsInteger($value);

        return $this;
    }

    /**
     * Get the value of the ValueAsTimestamp property.
     *
     * @return XMLGregorianCalendar valueAsTimestamp
     */
    public function getValueAsTimestamp()
    {
        return $this->_fields['ValueAsTimestamp']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsTimestamp property.
     *
     * @param string valueAsTimestamp
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValueAsTimestamp($value)
    {
        $this->_fields['ValueAsTimestamp']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValueAsTimestamp is set.
     *
     * @return true if ValueAsTimestamp is set
     */
    public function isSetValueAsTimestamp()
    {
        return null !== $this->_fields['ValueAsTimestamp']['FieldValue'];
    }

    /**
     * Set the value of ValueAsTimestamp, return this.
     *
     * @param valueAsTimestamp
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValueAsTimestamp($value)
    {
        $this->setValueAsTimestamp($value);

        return $this;
    }

    /**
     * Get the value of the ValueAsAddress property.
     *
     * @return Address valueAsAddress
     */
    public function getValueAsAddress()
    {
        return $this->_fields['ValueAsAddress']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsAddress property.
     *
     * @param Address valueAsAddress
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValueAsAddress($value)
    {
        $this->_fields['ValueAsAddress']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValueAsAddress is set.
     *
     * @return true if ValueAsAddress is set
     */
    public function isSetValueAsAddress()
    {
        return null !== $this->_fields['ValueAsAddress']['FieldValue'];
    }

    /**
     * Set the value of ValueAsAddress, return this.
     *
     * @param valueAsAddress
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValueAsAddress($value)
    {
        $this->setValueAsAddress($value);

        return $this;
    }

    /**
     * Get the value of the ValueAsWeight property.
     *
     * @return Weight valueAsWeight
     */
    public function getValueAsWeight()
    {
        return $this->_fields['ValueAsWeight']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsWeight property.
     *
     * @param Weight valueAsWeight
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValueAsWeight($value)
    {
        $this->_fields['ValueAsWeight']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValueAsWeight is set.
     *
     * @return true if ValueAsWeight is set
     */
    public function isSetValueAsWeight()
    {
        return null !== $this->_fields['ValueAsWeight']['FieldValue'];
    }

    /**
     * Set the value of ValueAsWeight, return this.
     *
     * @param valueAsWeight
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValueAsWeight($value)
    {
        $this->setValueAsWeight($value);

        return $this;
    }

    /**
     * Get the value of the ValueAsDimension property.
     *
     * @return Length valueAsDimension
     */
    public function getValueAsDimension()
    {
        return $this->_fields['ValueAsDimension']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsDimension property.
     *
     * @param Length valueAsDimension
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValueAsDimension($value)
    {
        $this->_fields['ValueAsDimension']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValueAsDimension is set.
     *
     * @return true if ValueAsDimension is set
     */
    public function isSetValueAsDimension()
    {
        return null !== $this->_fields['ValueAsDimension']['FieldValue'];
    }

    /**
     * Set the value of ValueAsDimension, return this.
     *
     * @param valueAsDimension
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValueAsDimension($value)
    {
        $this->setValueAsDimension($value);

        return $this;
    }

    /**
     * Get the value of the ValueAsCurrency property.
     *
     * @return CurrencyAmount valueAsCurrency
     */
    public function getValueAsCurrency()
    {
        return $this->_fields['ValueAsCurrency']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsCurrency property.
     *
     * @param CurrencyAmount valueAsCurrency
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValueAsCurrency($value)
    {
        $this->_fields['ValueAsCurrency']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValueAsCurrency is set.
     *
     * @return true if ValueAsCurrency is set
     */
    public function isSetValueAsCurrency()
    {
        return null !== $this->_fields['ValueAsCurrency']['FieldValue'];
    }

    /**
     * Set the value of ValueAsCurrency, return this.
     *
     * @param valueAsCurrency
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValueAsCurrency($value)
    {
        $this->setValueAsCurrency($value);

        return $this;
    }
}
