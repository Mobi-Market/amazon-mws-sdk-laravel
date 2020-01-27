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
 * Categories.
 *
 * Properties:
 * <ul>
 *
 * <li>ProductCategoryId: string</li>
 * <li>ProductCategoryName: string</li>
 * <li>Parent: Categories</li>
 *
 * </ul>
 */
class Categories extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ProductCategoryId'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'ProductCategoryName' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Parent'              => ['FieldValue' => null, 'FieldType' => 'Categories'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ProductCategoryId property.
     *
     * @return string productCategoryId
     */
    public function getProductCategoryId()
    {
        return $this->_fields['ProductCategoryId']['FieldValue'];
    }

    /**
     * Set the value of the ProductCategoryId property.
     *
     * @param string productCategoryId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProductCategoryId($value)
    {
        $this->_fields['ProductCategoryId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ProductCategoryId is set.
     *
     * @return true if ProductCategoryId is set
     */
    public function isSetProductCategoryId()
    {
        return null !== $this->_fields['ProductCategoryId']['FieldValue'];
    }

    /**
     * Set the value of ProductCategoryId, return this.
     *
     * @param productCategoryId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProductCategoryId($value)
    {
        $this->setProductCategoryId($value);

        return $this;
    }

    /**
     * Get the value of the ProductCategoryName property.
     *
     * @return string productCategoryName
     */
    public function getProductCategoryName()
    {
        return $this->_fields['ProductCategoryName']['FieldValue'];
    }

    /**
     * Set the value of the ProductCategoryName property.
     *
     * @param string productCategoryName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProductCategoryName($value)
    {
        $this->_fields['ProductCategoryName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ProductCategoryName is set.
     *
     * @return true if ProductCategoryName is set
     */
    public function isSetProductCategoryName()
    {
        return null !== $this->_fields['ProductCategoryName']['FieldValue'];
    }

    /**
     * Set the value of ProductCategoryName, return this.
     *
     * @param productCategoryName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProductCategoryName($value)
    {
        $this->setProductCategoryName($value);

        return $this;
    }

    /**
     * Get the value of the Parent property.
     *
     * @return Categories parent
     */
    public function getParent()
    {
        return $this->_fields['Parent']['FieldValue'];
    }

    /**
     * Set the value of the Parent property.
     *
     * @param Categories parent
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setParent($value)
    {
        $this->_fields['Parent']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Parent is set.
     *
     * @return true if Parent is set
     */
    public function isSetParent()
    {
        return null !== $this->_fields['Parent']['FieldValue'];
    }

    /**
     * Set the value of Parent, return this.
     *
     * @param parent
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withParent($value)
    {
        $this->setParent($value);

        return $this;
    }
}
