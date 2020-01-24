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
 * Fee.
 *
 * Properties:
 * <ul>
 *
 * <li>Name: string</li>
 * <li>Amount: Currency</li>
 *
 * </ul>
 */
class Fee extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Name'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'Amount' => ['FieldValue' => null, 'FieldType' => 'Currency'],
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
     * Get the value of the Amount property.
     *
     * @return Currency amount
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param Currency amount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set
     */
    public function isSetAmount()
    {
        return null !== $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmount($value)
    {
        $this->setAmount($value);

        return $this;
    }
}
