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
 * Item.
 *
 * Properties:
 * <ul>
 *
 * <li>OrderItemId: string</li>
 * <li>Quantity: int</li>
 * <li>transparencyCodeList: array</li>
 * <li>ItemLevelSellerInputsList: array</li>
 *
 * </ul>
 */
class Item extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'OrderItemId'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'Quantity'                  => ['FieldValue' => null, 'FieldType' => 'int'],
            'transparencyCodeList'      => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'member'],
            'ItemLevelSellerInputsList' => ['FieldValue' => [], 'FieldType' => ['AdditionalSellerInputs'], 'ListMemberName' => 'member'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the OrderItemId property.
     *
     * @return string orderItemId
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderItemId is set.
     *
     * @return true if OrderItemId is set
     */
    public function isSetOrderItemId()
    {
        return null !== $this->_fields['OrderItemId']['FieldValue'];
    }

    /**
     * Set the value of OrderItemId, return this.
     *
     * @param orderItemId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderItemId($value)
    {
        $this->setOrderItemId($value);

        return $this;
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return int quantity
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set
     */
    public function isSetQuantity()
    {
        return null !== $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);

        return $this;
    }

    /**
     * Get the value of the transparencyCodeList property.
     *
     * @return List<String> transparencyCodeList
     */
    public function gettransparencyCodeList()
    {
        if (null == $this->_fields['transparencyCodeList']['FieldValue']) {
            $this->_fields['transparencyCodeList']['FieldValue'] = [];
        }

        return $this->_fields['transparencyCodeList']['FieldValue'];
    }

    /**
     * Set the value of the transparencyCodeList property.
     *
     * @param array transparencyCodeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function settransparencyCodeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['transparencyCodeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear transparencyCodeList.
     */
    public function unsettransparencyCodeList(): void
    {
        $this->_fields['transparencyCodeList']['FieldValue'] = [];
    }

    /**
     * Check to see if transparencyCodeList is set.
     *
     * @return true if transparencyCodeList is set
     */
    public function isSettransparencyCodeList()
    {
        return !empty($this->_fields['transparencyCodeList']['FieldValue']);
    }

    /**
     * Add values for transparencyCodeList, return this.
     *
     * @param transparencyCodeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withtransparencyCodeList()
    {
        foreach (\func_get_args() as $transparencyCodeList) {
            $this->_fields['transparencyCodeList']['FieldValue'][] = $transparencyCodeList;
        }

        return $this;
    }

    /**
     * Get the value of the ItemLevelSellerInputsList property.
     *
     * @return List<AdditionalSellerInputs> itemLevelSellerInputsList
     */
    public function getItemLevelSellerInputsList()
    {
        if (null == $this->_fields['ItemLevelSellerInputsList']['FieldValue']) {
            $this->_fields['ItemLevelSellerInputsList']['FieldValue'] = [];
        }

        return $this->_fields['ItemLevelSellerInputsList']['FieldValue'];
    }

    /**
     * Set the value of the ItemLevelSellerInputsList property.
     *
     * @param array itemLevelSellerInputsList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemLevelSellerInputsList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ItemLevelSellerInputsList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ItemLevelSellerInputsList.
     */
    public function unsetItemLevelSellerInputsList(): void
    {
        $this->_fields['ItemLevelSellerInputsList']['FieldValue'] = [];
    }

    /**
     * Check to see if ItemLevelSellerInputsList is set.
     *
     * @return true if ItemLevelSellerInputsList is set
     */
    public function isSetItemLevelSellerInputsList()
    {
        return !empty($this->_fields['ItemLevelSellerInputsList']['FieldValue']);
    }

    /**
     * Add values for ItemLevelSellerInputsList, return this.
     *
     * @param itemLevelSellerInputsList
     *             New values to add
     *
     * @return $this instance
     */
    public function withItemLevelSellerInputsList()
    {
        foreach (\func_get_args() as $ItemLevelSellerInputsList) {
            $this->_fields['ItemLevelSellerInputsList']['FieldValue'][] = $ItemLevelSellerInputsList;
        }

        return $this;
    }
}
