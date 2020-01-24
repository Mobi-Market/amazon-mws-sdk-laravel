<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 22:40:38 UTC 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ListOrdersResult.
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>Orders: array</li>
 *
 * </ul>
 */
class ListOrdersResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'NextToken'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'CreatedBefore'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'LastUpdatedBefore' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Orders'            => ['FieldValue' => [], 'FieldType' => ['Order'], 'ListMemberName' => 'Order'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return string nextToken
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set
     */
    public function isSetNextToken()
    {
        return null !== $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);

        return $this;
    }

    /**
     * Get the value of the CreatedBefore property.
     *
     * @return XMLGregorianCalendar createdBefore
     */
    public function getCreatedBefore()
    {
        return $this->_fields['CreatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the CreatedBefore property.
     *
     * @param string createdBefore
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCreatedBefore($value)
    {
        $this->_fields['CreatedBefore']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CreatedBefore is set.
     *
     * @return true if CreatedBefore is set
     */
    public function isSetCreatedBefore()
    {
        return null !== $this->_fields['CreatedBefore']['FieldValue'];
    }

    /**
     * Set the value of CreatedBefore, return this.
     *
     * @param createdBefore
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCreatedBefore($value)
    {
        $this->setCreatedBefore($value);

        return $this;
    }

    /**
     * Get the value of the LastUpdatedBefore property.
     *
     * @return XMLGregorianCalendar lastUpdatedBefore
     */
    public function getLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedBefore property.
     *
     * @param string lastUpdatedBefore
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLastUpdatedBefore($value)
    {
        $this->_fields['LastUpdatedBefore']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LastUpdatedBefore is set.
     *
     * @return true if LastUpdatedBefore is set
     */
    public function isSetLastUpdatedBefore()
    {
        return null !== $this->_fields['LastUpdatedBefore']['FieldValue'];
    }

    /**
     * Set the value of LastUpdatedBefore, return this.
     *
     * @param lastUpdatedBefore
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLastUpdatedBefore($value)
    {
        $this->setLastUpdatedBefore($value);

        return $this;
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
