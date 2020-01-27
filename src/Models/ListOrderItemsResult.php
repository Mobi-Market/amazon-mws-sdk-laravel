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
 * ListOrderItemsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>AmazonOrderId: string</li>
 * <li>OrderItems: array</li>
 *
 * </ul>
 */
class ListOrderItemsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'NextToken'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmazonOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderItems'    => ['FieldValue' => [], 'FieldType' => ['OrderItem'], 'ListMemberName' => 'OrderItem'],
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
     * Get the value of the AmazonOrderId property.
     *
     * @return string amazonOrderId
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set
     */
    public function isSetAmazonOrderId()
    {
        return null !== $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);

        return $this;
    }

    /**
     * Get the value of the OrderItems property.
     *
     * @return List<OrderItem> orderItems
     */
    public function getOrderItems()
    {
        if (null == $this->_fields['OrderItems']['FieldValue']) {
            $this->_fields['OrderItems']['FieldValue'] = [];
        }

        return $this->_fields['OrderItems']['FieldValue'];
    }

    /**
     * Set the value of the OrderItems property.
     *
     * @param array orderItems
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderItems($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OrderItems']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear OrderItems.
     */
    public function unsetOrderItems(): void
    {
        $this->_fields['OrderItems']['FieldValue'] = [];
    }

    /**
     * Check to see if OrderItems is set.
     *
     * @return true if OrderItems is set
     */
    public function isSetOrderItems()
    {
        return !empty($this->_fields['OrderItems']['FieldValue']);
    }

    /**
     * Add values for OrderItems, return this.
     *
     * @param orderItems
     *             New values to add
     *
     * @return $this instance
     */
    public function withOrderItems()
    {
        foreach (\func_get_args() as $OrderItems) {
            $this->_fields['OrderItems']['FieldValue'][] = $OrderItems;
        }

        return $this;
    }
}
