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
 * Pallet.
 *
 * Properties:
 * <ul>
 *
 * <li>Dimensions: Dimensions</li>
 * <li>Weight: Weight</li>
 * <li>IsStacked: bool</li>
 *
 * </ul>
 */
class Pallet extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Dimensions' => ['FieldValue' => null, 'FieldType' => 'Dimensions'],
            'Weight'     => ['FieldValue' => null, 'FieldType' => 'Weight'],
            'IsStacked'  => ['FieldValue' => null, 'FieldType' => 'bool'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Dimensions property.
     *
     * @return Dimensions dimensions
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Set the value of the Dimensions property.
     *
     * @param Dimensions dimensions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDimensions($value)
    {
        $this->_fields['Dimensions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Dimensions is set.
     *
     * @return true if Dimensions is set
     */
    public function isSetDimensions()
    {
        return null !== $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Set the value of Dimensions, return this.
     *
     * @param dimensions
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDimensions($value)
    {
        $this->setDimensions($value);

        return $this;
    }

    /**
     * Get the value of the Weight property.
     *
     * @return Weight weight
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of the Weight property.
     *
     * @param Weight weight
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

    /**
     * Check the value of IsStacked.
     *
     * @return true if IsStacked is set to true
     */
    public function isIsStacked()
    {
        return $this->_fields['IsStacked']['FieldValue'];
    }

    /**
     * Get the value of the IsStacked property.
     *
     * @return bool isStacked
     */
    public function getIsStacked()
    {
        return $this->_fields['IsStacked']['FieldValue'];
    }

    /**
     * Set the value of the IsStacked property.
     *
     * @param bool isStacked
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsStacked($value)
    {
        $this->_fields['IsStacked']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsStacked is set.
     *
     * @return true if IsStacked is set
     */
    public function isSetIsStacked()
    {
        return null !== $this->_fields['IsStacked']['FieldValue'];
    }

    /**
     * Set the value of IsStacked, return this.
     *
     * @param isStacked
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsStacked($value)
    {
        $this->setIsStacked($value);

        return $this;
    }
}
