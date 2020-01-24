<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * Constraint.
 *
 * Properties:
 * <ul>
 *
 * <li>ValidationRegEx: string</li>
 * <li>ValidationString: string</li>
 *
 * </ul>
 */
class Constraint extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ValidationRegEx'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'ValidationString' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ValidationRegEx property.
     *
     * @return string validationRegEx
     */
    public function getValidationRegEx()
    {
        return $this->_fields['ValidationRegEx']['FieldValue'];
    }

    /**
     * Set the value of the ValidationRegEx property.
     *
     * @param string validationRegEx
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValidationRegEx($value)
    {
        $this->_fields['ValidationRegEx']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValidationRegEx is set.
     *
     * @return true if ValidationRegEx is set
     */
    public function isSetValidationRegEx()
    {
        return null !== $this->_fields['ValidationRegEx']['FieldValue'];
    }

    /**
     * Set the value of ValidationRegEx, return this.
     *
     * @param validationRegEx
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValidationRegEx($value)
    {
        $this->setValidationRegEx($value);

        return $this;
    }

    /**
     * Get the value of the ValidationString property.
     *
     * @return string validationString
     */
    public function getValidationString()
    {
        return $this->_fields['ValidationString']['FieldValue'];
    }

    /**
     * Set the value of the ValidationString property.
     *
     * @param string validationString
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setValidationString($value)
    {
        $this->_fields['ValidationString']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ValidationString is set.
     *
     * @return true if ValidationString is set
     */
    public function isSetValidationString()
    {
        return null !== $this->_fields['ValidationString']['FieldValue'];
    }

    /**
     * Set the value of ValidationString, return this.
     *
     * @param validationString
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withValidationString($value)
    {
        $this->setValidationString($value);

        return $this;
    }
}
