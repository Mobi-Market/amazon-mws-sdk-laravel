<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
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
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2014-10-01
 * Generated: Wed Sep 12 07:35:28 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ItemDimensions.
 *
 * Properties:
 * <ul>
 *
 * <li>Height: DimensionMeasure</li>
 * <li>Width: DimensionMeasure</li>
 * <li>Length: DimensionMeasure</li>
 * <li>Weight: WeightMeasure</li>
 *
 * </ul>
 */
class ItemDimensions extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Height' => ['FieldValue' => null, 'FieldType' => 'DimensionMeasure'],
            'Width'  => ['FieldValue' => null, 'FieldType' => 'DimensionMeasure'],
            'Length' => ['FieldValue' => null, 'FieldType' => 'DimensionMeasure'],
            'Weight' => ['FieldValue' => null, 'FieldType' => 'WeightMeasure'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Height property.
     *
     * @return DimensionMeasure height
     */
    public function getHeight()
    {
        return $this->_fields['Height']['FieldValue'];
    }

    /**
     * Set the value of the Height property.
     *
     * @param DimensionMeasure height
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
     * Get the value of the Width property.
     *
     * @return DimensionMeasure width
     */
    public function getWidth()
    {
        return $this->_fields['Width']['FieldValue'];
    }

    /**
     * Set the value of the Width property.
     *
     * @param DimensionMeasure width
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
     * Get the value of the Length property.
     *
     * @return DimensionMeasure length
     */
    public function getLength()
    {
        return $this->_fields['Length']['FieldValue'];
    }

    /**
     * Set the value of the Length property.
     *
     * @param DimensionMeasure length
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
     * Get the value of the Weight property.
     *
     * @return WeightMeasure weight
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of the Weight property.
     *
     * @param WeightMeasure weight
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Weight is set.
     *
     * @return true if Weight is set
     */
    public function isSetWeight()
    {
        return null !== $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of Weight, return this.
     *
     * @param weight
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withWeight($value)
    {
        $this->setWeight($value);

        return $this;
    }
}
