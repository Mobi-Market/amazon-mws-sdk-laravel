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
 * Error.
 *
 * Properties:
 * <ul>
 *
 * <li>Type: string</li>
 * <li>Code: string</li>
 * <li>Message: string</li>
 * <li>Detail: ErrorDetail</li>
 *
 * </ul>
 */
class Error extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Type'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'Code'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'Message' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Detail'  => ['FieldValue' => null, 'FieldType' => 'ErrorDetail'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Type property.
     *
     * @return string type
     */
    public function getType()
    {
        return $this->_fields['Type']['FieldValue'];
    }

    /**
     * Set the value of the Type property.
     *
     * @param string type
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setType($value)
    {
        $this->_fields['Type']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Type is set.
     *
     * @return true if Type is set
     */
    public function isSetType()
    {
        return null !== $this->_fields['Type']['FieldValue'];
    }

    /**
     * Set the value of Type, return this.
     *
     * @param type
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withType($value)
    {
        $this->setType($value);

        return $this;
    }

    /**
     * Get the value of the Code property.
     *
     * @return string code
     */
    public function getCode()
    {
        return $this->_fields['Code']['FieldValue'];
    }

    /**
     * Set the value of the Code property.
     *
     * @param string code
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCode($value)
    {
        $this->_fields['Code']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Code is set.
     *
     * @return true if Code is set
     */
    public function isSetCode()
    {
        return null !== $this->_fields['Code']['FieldValue'];
    }

    /**
     * Set the value of Code, return this.
     *
     * @param code
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCode($value)
    {
        $this->setCode($value);

        return $this;
    }

    /**
     * Get the value of the Message property.
     *
     * @return string message
     */
    public function getMessage()
    {
        return $this->_fields['Message']['FieldValue'];
    }

    /**
     * Set the value of the Message property.
     *
     * @param string message
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMessage($value)
    {
        $this->_fields['Message']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Message is set.
     *
     * @return true if Message is set
     */
    public function isSetMessage()
    {
        return null !== $this->_fields['Message']['FieldValue'];
    }

    /**
     * Set the value of Message, return this.
     *
     * @param message
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMessage($value)
    {
        $this->setMessage($value);

        return $this;
    }

    /**
     * Get the value of the Detail property.
     *
     * @return ErrorDetail detail
     */
    public function getDetail()
    {
        return $this->_fields['Detail']['FieldValue'];
    }

    /**
     * Set the value of the Detail property.
     *
     * @param ErrorDetail detail
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDetail($value)
    {
        $this->_fields['Detail']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Detail is set.
     *
     * @return true if Detail is set
     */
    public function isSetDetail()
    {
        return null !== $this->_fields['Detail']['FieldValue'];
    }

    /**
     * Set the value of Detail, return this.
     *
     * @param detail
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDetail($value)
    {
        $this->setDetail($value);

        return $this;
    }
}
