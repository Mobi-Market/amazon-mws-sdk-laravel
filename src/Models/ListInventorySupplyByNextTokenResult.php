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
 * ListInventorySupplyByNextTokenResult.
 *
 * Properties:
 * <ul>
 *
 * <li>MarketplaceId: string</li>
 * <li>InventorySupplyList: InventorySupplyList</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */
class ListInventorySupplyByNextTokenResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'MarketplaceId'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'InventorySupplyList' => ['FieldValue' => null, 'FieldType' => 'InventorySupplyList'],
            'NextToken'           => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return string marketplaceId
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set
     */
    public function isSetMarketplaceId()
    {
        return null !== $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);

        return $this;
    }

    /**
     * Get the value of the InventorySupplyList property.
     *
     * @return InventorySupplyList inventorySupplyList
     */
    public function getInventorySupplyList()
    {
        return $this->_fields['InventorySupplyList']['FieldValue'];
    }

    /**
     * Set the value of the InventorySupplyList property.
     *
     * @param InventorySupplyList inventorySupplyList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInventorySupplyList($value)
    {
        $this->_fields['InventorySupplyList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InventorySupplyList is set.
     *
     * @return true if InventorySupplyList is set
     */
    public function isSetInventorySupplyList()
    {
        return null !== $this->_fields['InventorySupplyList']['FieldValue'];
    }

    /**
     * Set the value of InventorySupplyList, return this.
     *
     * @param inventorySupplyList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInventorySupplyList($value)
    {
        $this->setInventorySupplyList($value);

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
