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
 * TaxClassification.
 *
 * Properties:
 * <ul>
 *
 * <li>Name: string</li>
 * <li>Value: string</li>
 *
 * </ul>
 */
class TaxClassification extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Name'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'Value' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Name property.
     *
     * @return string name
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Set the value of the Name property.
     *
     * @param string name
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setName($value)
    {
        $this->_fields['Name']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Name is set.
     *
     * @return true if Name is set
     */
    public function isSetName()
    {
        return null !== $this->_fields['Name']['FieldValue'];
    }

    /**
     * Set the value of Name, return this.
     *
     * @param name
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withName($value)
    {
        $this->setName($value);

        return $this;
    }

    /**
     * Get the value of the Value property.
     *
     * @return string value
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of the Value property.
     *
     * @param string value
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValue($value)
    {
        $this->_fields['Value']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Value is set.
     *
     * @return true if Value is set
     */
    public function isSetValue()
    {
        return null !== $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of Value, return this.
     *
     * @param value
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValue($value)
    {
        $this->setValue($value);

        return $this;
    }
}
