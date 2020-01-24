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
 * Contact.
 *
 * Properties:
 * <ul>
 *
 * <li>Name: string</li>
 * <li>Phone: string</li>
 * <li>Email: string</li>
 * <li>Fax: string</li>
 *
 * </ul>
 */
class Contact extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Name'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'Phone' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Email' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Fax'   => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * Get the value of the Phone property.
     *
     * @return string phone
     */
    public function getPhone()
    {
        return $this->_fields['Phone']['FieldValue'];
    }

    /**
     * Set the value of the Phone property.
     *
     * @param string phone
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPhone($value)
    {
        $this->_fields['Phone']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Phone is set.
     *
     * @return true if Phone is set
     */
    public function isSetPhone()
    {
        return null !== $this->_fields['Phone']['FieldValue'];
    }

    /**
     * Set the value of Phone, return this.
     *
     * @param phone
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPhone($value)
    {
        $this->setPhone($value);

        return $this;
    }

    /**
     * Get the value of the Email property.
     *
     * @return string email
     */
    public function getEmail()
    {
        return $this->_fields['Email']['FieldValue'];
    }

    /**
     * Set the value of the Email property.
     *
     * @param string email
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEmail($value)
    {
        $this->_fields['Email']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Email is set.
     *
     * @return true if Email is set
     */
    public function isSetEmail()
    {
        return null !== $this->_fields['Email']['FieldValue'];
    }

    /**
     * Set the value of Email, return this.
     *
     * @param email
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEmail($value)
    {
        $this->setEmail($value);

        return $this;
    }

    /**
     * Get the value of the Fax property.
     *
     * @return string fax
     */
    public function getFax()
    {
        return $this->_fields['Fax']['FieldValue'];
    }

    /**
     * Set the value of the Fax property.
     *
     * @param string fax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFax($value)
    {
        $this->_fields['Fax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Fax is set.
     *
     * @return true if Fax is set
     */
    public function isSetFax()
    {
        return null !== $this->_fields['Fax']['FieldValue'];
    }

    /**
     * Set the value of Fax, return this.
     *
     * @param fax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFax($value)
    {
        $this->setFax($value);

        return $this;
    }
}
