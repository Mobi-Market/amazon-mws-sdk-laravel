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
 * TrackingAddress.
 *
 * Properties:
 * <ul>
 *
 * <li>City: string</li>
 * <li>State: string</li>
 * <li>Country: string</li>
 *
 * </ul>
 */
class TrackingAddress extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'City'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'State'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'Country' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the City property.
     *
     * @return string city
     */
    public function getCity()
    {
        return $this->_fields['City']['FieldValue'];
    }

    /**
     * Set the value of the City property.
     *
     * @param string city
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCity($value)
    {
        $this->_fields['City']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if City is set.
     *
     * @return true if City is set
     */
    public function isSetCity()
    {
        return null !== $this->_fields['City']['FieldValue'];
    }

    /**
     * Set the value of City, return this.
     *
     * @param city
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCity($value)
    {
        $this->setCity($value);

        return $this;
    }

    /**
     * Get the value of the State property.
     *
     * @return string state
     */
    public function getState()
    {
        return $this->_fields['State']['FieldValue'];
    }

    /**
     * Set the value of the State property.
     *
     * @param string state
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setState($value)
    {
        $this->_fields['State']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if State is set.
     *
     * @return true if State is set
     */
    public function isSetState()
    {
        return null !== $this->_fields['State']['FieldValue'];
    }

    /**
     * Set the value of State, return this.
     *
     * @param state
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withState($value)
    {
        $this->setState($value);

        return $this;
    }

    /**
     * Get the value of the Country property.
     *
     * @return string country
     */
    public function getCountry()
    {
        return $this->_fields['Country']['FieldValue'];
    }

    /**
     * Set the value of the Country property.
     *
     * @param string country
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCountry($value)
    {
        $this->_fields['Country']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Country is set.
     *
     * @return true if Country is set
     */
    public function isSetCountry()
    {
        return null !== $this->_fields['Country']['FieldValue'];
    }

    /**
     * Set the value of Country, return this.
     *
     * @param country
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCountry($value)
    {
        $this->setCountry($value);

        return $this;
    }
}
