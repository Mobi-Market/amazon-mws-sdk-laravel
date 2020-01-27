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
 * ListMatchingProductsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Products: ProductList</li>
 *
 * </ul>
 */
class ListMatchingProductsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Products' => ['FieldValue' => null, 'FieldType' => 'ProductList'],
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
}
