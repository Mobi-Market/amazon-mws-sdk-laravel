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
 * GetOrderResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Orders: array</li>
 *
 * </ul>
 */
class GetOrderResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Orders' => ['FieldValue' => [], 'FieldType' => ['Order'], 'ListMemberName' => 'Order'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Orders property.
     *
     * @return List<Order> orders
     */
    public function getOrders()
    {
        if (null == $this->_fields['Orders']['FieldValue']) {
            $this->_fields['Orders']['FieldValue'] = [];
        }

        return $this->_fields['Orders']['FieldValue'];
    }

    /**
     * Set the value of the Orders property.
     *
     * @param array orders
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrders($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Orders']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Orders.
     */
    public function unsetOrders(): void
    {
        $this->_fields['Orders']['FieldValue'] = [];
    }

    /**
     * Check to see if Orders is set.
     *
     * @return true if Orders is set
     */
    public function isSetOrders()
    {
        return !empty($this->_fields['Orders']['FieldValue']);
    }

    /**
     * Add values for Orders, return this.
     *
     * @param orders
     *             New values to add
     *
     * @return $this instance
     */
    public function withOrders()
    {
        foreach (\func_get_args() as $Orders) {
            $this->_fields['Orders']['FieldValue'][] = $Orders;
        }

        return $this;
    }
}
