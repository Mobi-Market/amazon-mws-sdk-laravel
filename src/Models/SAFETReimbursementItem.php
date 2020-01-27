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
 * SAFETReimbursementItem.
 *
 * Properties:
 * <ul>
 *
 * <li>itemChargeList: array</li>
 * <li>productDescription: string</li>
 * <li>quantity: string</li>
 *
 * </ul>
 */
class SAFETReimbursementItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'itemChargeList'     => ['FieldValue' => [], 'FieldType' => ['ChargeComponent'], 'ListMemberName' => 'ChargeComponent'],
            'productDescription' => ['FieldValue' => null, 'FieldType' => 'string'],
            'quantity'           => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the itemChargeList property.
     *
     * @return List<ChargeComponent> itemChargeList
     */
    public function getitemChargeList()
    {
        if (null == $this->_fields['itemChargeList']['FieldValue']) {
            $this->_fields['itemChargeList']['FieldValue'] = [];
        }

        return $this->_fields['itemChargeList']['FieldValue'];
    }

    /**
     * Set the value of the itemChargeList property.
     *
     * @param array itemChargeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setitemChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['itemChargeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear itemChargeList.
     */
    public function unsetitemChargeList(): void
    {
        $this->_fields['itemChargeList']['FieldValue'] = [];
    }

    /**
     * Check to see if itemChargeList is set.
     *
     * @return true if itemChargeList is set
     */
    public function isSetitemChargeList()
    {
        return !empty($this->_fields['itemChargeList']['FieldValue']);
    }

    /**
     * Add values for itemChargeList, return this.
     *
     * @param itemChargeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withitemChargeList()
    {
        foreach (\func_get_args() as $itemChargeList) {
            $this->_fields['itemChargeList']['FieldValue'][] = $itemChargeList;
        }

        return $this;
    }

    /**
     * Get the value of the productDescription property.
     *
     * @return string productDescription
     */
    public function getproductDescription()
    {
        return $this->_fields['productDescription']['FieldValue'];
    }

    /**
     * Set the value of the productDescription property.
     *
     * @param string productDescription
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setproductDescription($value)
    {
        $this->_fields['productDescription']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if productDescription is set.
     *
     * @return true if productDescription is set
     */
    public function isSetproductDescription()
    {
        return null !== $this->_fields['productDescription']['FieldValue'];
    }

    /**
     * Set the value of productDescription, return this.
     *
     * @param productDescription
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withproductDescription($value)
    {
        $this->setproductDescription($value);

        return $this;
    }

    /**
     * Get the value of the quantity property.
     *
     * @return string quantity
     */
    public function getquantity()
    {
        return $this->_fields['quantity']['FieldValue'];
    }

    /**
     * Set the value of the quantity property.
     *
     * @param string quantity
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setquantity($value)
    {
        $this->_fields['quantity']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if quantity is set.
     *
     * @return true if quantity is set
     */
    public function isSetquantity()
    {
        return null !== $this->_fields['quantity']['FieldValue'];
    }

    /**
     * Set the value of quantity, return this.
     *
     * @param quantity
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withquantity($value)
    {
        $this->setquantity($value);

        return $this;
    }
}
