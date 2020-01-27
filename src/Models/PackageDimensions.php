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
 * PackageDimensions.
 *
 * Properties:
 * <ul>
 *
 * <li>Length: float</li>
 * <li>Width: float</li>
 * <li>Height: float</li>
 * <li>Unit: string</li>
 * <li>PredefinedPackageDimensions: string</li>
 *
 * </ul>
 */
class PackageDimensions extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Length'                      => ['FieldValue' => null, 'FieldType' => 'float'],
            'Width'                       => ['FieldValue' => null, 'FieldType' => 'float'],
            'Height'                      => ['FieldValue' => null, 'FieldType' => 'float'],
            'Unit'                        => ['FieldValue' => null, 'FieldType' => 'string'],
            'PredefinedPackageDimensions' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Length property.
     *
     * @return BigDecimal length
     */
    public function getLength()
    {
        return $this->_fields['Length']['FieldValue'];
    }

    /**
     * Set the value of the Length property.
     *
     * @param float length
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLength($value)
    {
        $this->_fields['Length']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Length is set.
     *
     * @return true if Length is set
     */
    public function isSetLength()
    {
        return null !== $this->_fields['Length']['FieldValue'];
    }

    /**
     * Set the value of Length, return this.
     *
     * @param length
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLength($value)
    {
        $this->setLength($value);

        return $this;
    }

    /**
     * Get the value of the Width property.
     *
     * @return BigDecimal width
     */
    public function getWidth()
    {
        return $this->_fields['Width']['FieldValue'];
    }

    /**
     * Set the value of the Width property.
     *
     * @param float width
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setWidth($value)
    {
        $this->_fields['Width']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Width is set.
     *
     * @return true if Width is set
     */
    public function isSetWidth()
    {
        return null !== $this->_fields['Width']['FieldValue'];
    }

    /**
     * Set the value of Width, return this.
     *
     * @param width
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withWidth($value)
    {
        $this->setWidth($value);

        return $this;
    }

    /**
     * Get the value of the Height property.
     *
     * @return BigDecimal height
     */
    public function getHeight()
    {
        return $this->_fields['Height']['FieldValue'];
    }

    /**
     * Set the value of the Height property.
     *
     * @param float height
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setHeight($value)
    {
        $this->_fields['Height']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Height is set.
     *
     * @return true if Height is set
     */
    public function isSetHeight()
    {
        return null !== $this->_fields['Height']['FieldValue'];
    }

    /**
     * Set the value of Height, return this.
     *
     * @param height
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withHeight($value)
    {
        $this->setHeight($value);

        return $this;
    }

    /**
     * Get the value of the Unit property.
     *
     * @return string unit
     */
    public function getUnit()
    {
        return $this->_fields['Unit']['FieldValue'];
    }

    /**
     * Set the value of the Unit property.
     *
     * @param string unit
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setUnit($value)
    {
        $this->_fields['Unit']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Unit is set.
     *
     * @return true if Unit is set
     */
    public function isSetUnit()
    {
        return null !== $this->_fields['Unit']['FieldValue'];
    }

    /**
     * Set the value of Unit, return this.
     *
     * @param unit
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withUnit($value)
    {
        $this->setUnit($value);

        return $this;
    }

    /**
     * Get the value of the PredefinedPackageDimensions property.
     *
     * @return string predefinedPackageDimensions
     */
    public function getPredefinedPackageDimensions()
    {
        return $this->_fields['PredefinedPackageDimensions']['FieldValue'];
    }

    /**
     * Set the value of the PredefinedPackageDimensions property.
     *
     * @param string predefinedPackageDimensions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPredefinedPackageDimensions($value)
    {
        $this->_fields['PredefinedPackageDimensions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PredefinedPackageDimensions is set.
     *
     * @return true if PredefinedPackageDimensions is set
     */
    public function isSetPredefinedPackageDimensions()
    {
        return null !== $this->_fields['PredefinedPackageDimensions']['FieldValue'];
    }

    /**
     * Set the value of PredefinedPackageDimensions, return this.
     *
     * @param predefinedPackageDimensions
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPredefinedPackageDimensions($value)
    {
        $this->setPredefinedPackageDimensions($value);

        return $this;
    }
}
