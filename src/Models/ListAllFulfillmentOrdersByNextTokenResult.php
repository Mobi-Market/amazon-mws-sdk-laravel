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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ListAllFulfillmentOrdersByNextTokenResult.
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>FulfillmentOrders: FulfillmentOrderList</li>
 *
 * </ul>
 */
class ListAllFulfillmentOrdersByNextTokenResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'NextToken'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentOrders' => ['FieldValue' => null, 'FieldType' => 'FulfillmentOrderList'],
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
     * Get the value of the FulfillmentOrders property.
     *
     * @return FulfillmentOrderList fulfillmentOrders
     */
    public function getFulfillmentOrders()
    {
        return $this->_fields['FulfillmentOrders']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrders property.
     *
     * @param FulfillmentOrderList fulfillmentOrders
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentOrders($value)
    {
        $this->_fields['FulfillmentOrders']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentOrders is set.
     *
     * @return true if FulfillmentOrders is set
     */
    public function isSetFulfillmentOrders()
    {
        return null !== $this->_fields['FulfillmentOrders']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentOrders, return this.
     *
     * @param fulfillmentOrders
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentOrders($value)
    {
        $this->setFulfillmentOrders($value);

        return $this;
    }
}
