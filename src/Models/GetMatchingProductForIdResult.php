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
 * GetMatchingProductForIdResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Products: ProductList</li>
 * <li>Error: Error</li>
 * <li>Id: string</li>
 * <li>IdType: string</li>
 * <li>status: string</li>
 *
 * </ul>
 */
class GetMatchingProductForIdResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Products' => ['FieldValue' => null, 'FieldType' => 'ProductList'],
            'Error'    => ['FieldValue' => null, 'FieldType' => 'Error'],
            'Id'       => ['FieldValue' => null, 'FieldType' => '@string'],
            'IdType'   => ['FieldValue' => null, 'FieldType' => '@string'],
            'status'   => ['FieldValue' => null, 'FieldType' => '@string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Products property.
     *
     * @return ProductList products
     */
    public function getProducts()
    {
        return $this->_fields['Products']['FieldValue'];
    }

    /**
     * Set the value of the Products property.
     *
     * @param ProductList products
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProducts($value)
    {
        $this->_fields['Products']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Products is set.
     *
     * @return true if Products is set
     */
    public function isSetProducts()
    {
        return null !== $this->_fields['Products']['FieldValue'];
    }

    /**
     * Set the value of Products, return this.
     *
     * @param products
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProducts($value)
    {
        $this->setProducts($value);

        return $this;
    }

    /**
     * Get the value of the Error property.
     *
     * @return Error error
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }

    /**
     * Set the value of the Error property.
     *
     * @param Error error
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setError($value)
    {
        $this->_fields['Error']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Error is set.
     *
     * @return true if Error is set
     */
    public function isSetError()
    {
        return null !== $this->_fields['Error']['FieldValue'];
    }

    /**
     * Set the value of Error, return this.
     *
     * @param error
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withError($value)
    {
        $this->setError($value);

        return $this;
    }

    /**
     * Get the value of the Id property.
     *
     * @return string id
     */
    public function getId()
    {
        return $this->_fields['Id']['FieldValue'];
    }

    /**
     * Set the value of the Id property.
     *
     * @param string id
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setId($value)
    {
        $this->_fields['Id']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Id is set.
     *
     * @return true if Id is set
     */
    public function isSetId()
    {
        return null !== $this->_fields['Id']['FieldValue'];
    }

    /**
     * Set the value of Id, return this.
     *
     * @param id
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withId($value)
    {
        $this->setId($value);

        return $this;
    }

    /**
     * Get the value of the IdType property.
     *
     * @return string idType
     */
    public function getIdType()
    {
        return $this->_fields['IdType']['FieldValue'];
    }

    /**
     * Set the value of the IdType property.
     *
     * @param string idType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIdType($value)
    {
        $this->_fields['IdType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IdType is set.
     *
     * @return true if IdType is set
     */
    public function isSetIdType()
    {
        return null !== $this->_fields['IdType']['FieldValue'];
    }

    /**
     * Set the value of IdType, return this.
     *
     * @param idType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIdType($value)
    {
        $this->setIdType($value);

        return $this;
    }

    /**
     * Get the value of the status property.
     *
     * @return string status
     */
    public function getstatus()
    {
        return $this->_fields['status']['FieldValue'];
    }

    /**
     * Set the value of the status property.
     *
     * @param string status
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setstatus($value)
    {
        $this->_fields['status']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if status is set.
     *
     * @return true if status is set
     */
    public function isSetstatus()
    {
        return null !== $this->_fields['status']['FieldValue'];
    }

    /**
     * Set the value of status, return this.
     *
     * @param status
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withstatus($value)
    {
        $this->setstatus($value);

        return $this;
    }
}
