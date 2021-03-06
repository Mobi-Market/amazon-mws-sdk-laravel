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
 * ListInboundShipmentItemsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ItemData: InboundShipmentItemList</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */
class ListInboundShipmentItemsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ItemData'  => ['FieldValue' => null, 'FieldType' => 'InboundShipmentItemList'],
            'NextToken' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ItemData property.
     *
     * @return InboundShipmentItemList itemData
     */
    public function getItemData()
    {
        return $this->_fields['ItemData']['FieldValue'];
    }

    /**
     * Set the value of the ItemData property.
     *
     * @param InboundShipmentItemList itemData
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemData($value)
    {
        $this->_fields['ItemData']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemData is set.
     *
     * @return true if ItemData is set
     */
    public function isSetItemData()
    {
        return null !== $this->_fields['ItemData']['FieldValue'];
    }

    /**
     * Set the value of ItemData, return this.
     *
     * @param itemData
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemData($value)
    {
        $this->setItemData($value);

        return $this;
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
}
