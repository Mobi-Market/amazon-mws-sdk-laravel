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
 * ShipmentItem.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerSKU: string</li>
 * <li>OrderItemId: string</li>
 * <li>OrderAdjustmentItemId: string</li>
 * <li>QuantityShipped: int</li>
 * <li>ItemChargeList: array</li>
 * <li>ItemChargeAdjustmentList: array</li>
 * <li>ItemFeeList: array</li>
 * <li>ItemFeeAdjustmentList: array</li>
 * <li>ItemTaxWithheldList: array</li>
 * <li>PromotionList: array</li>
 * <li>PromotionAdjustmentList: array</li>
 * <li>CostOfPointsGranted: Currency</li>
 * <li>CostOfPointsReturned: Currency</li>
 *
 * </ul>
 */
class ShipmentItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerSKU'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderItemId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderAdjustmentItemId'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'QuantityShipped'          => ['FieldValue' => null, 'FieldType' => 'int'],
            'ItemChargeList'           => ['FieldValue' => [], 'FieldType' => ['ChargeComponent'], 'ListMemberName' => 'ChargeComponent'],
            'ItemChargeAdjustmentList' => ['FieldValue' => [], 'FieldType' => ['ChargeComponent'], 'ListMemberName' => 'ChargeComponent'],
            'ItemFeeList'              => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
            'ItemFeeAdjustmentList'    => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
            'ItemTaxWithheldList'      => ['FieldValue' => [], 'FieldType' => ['TaxWithheldComponent'], 'ListMemberName' => 'TaxWithheldComponent'],
            'PromotionList'            => ['FieldValue' => [], 'FieldType' => ['Promotion'], 'ListMemberName' => 'Promotion'],
            'PromotionAdjustmentList'  => ['FieldValue' => [], 'FieldType' => ['Promotion'], 'ListMemberName' => 'Promotion'],
            'CostOfPointsGranted'      => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'CostOfPointsReturned'     => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return string sellerSKU
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set
     */
    public function isSetSellerSKU()
    {
        return null !== $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);

        return $this;
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
     * Get the value of the OrderAdjustmentItemId property.
     *
     * @return string orderAdjustmentItemId
     */
    public function getOrderAdjustmentItemId()
    {
        return $this->_fields['OrderAdjustmentItemId']['FieldValue'];
    }

    /**
     * Set the value of the OrderAdjustmentItemId property.
     *
     * @param string orderAdjustmentItemId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderAdjustmentItemId($value)
    {
        $this->_fields['OrderAdjustmentItemId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderAdjustmentItemId is set.
     *
     * @return true if OrderAdjustmentItemId is set
     */
    public function isSetOrderAdjustmentItemId()
    {
        return null !== $this->_fields['OrderAdjustmentItemId']['FieldValue'];
    }

    /**
     * Set the value of OrderAdjustmentItemId, return this.
     *
     * @param orderAdjustmentItemId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderAdjustmentItemId($value)
    {
        $this->setOrderAdjustmentItemId($value);

        return $this;
    }

    /**
     * Get the value of the QuantityShipped property.
     *
     * @return int quantityShipped
     */
    public function getQuantityShipped()
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }

    /**
     * Set the value of the QuantityShipped property.
     *
     * @param int quantityShipped
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantityShipped($value)
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if QuantityShipped is set.
     *
     * @return true if QuantityShipped is set
     */
    public function isSetQuantityShipped()
    {
        return null !== $this->_fields['QuantityShipped']['FieldValue'];
    }

    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param quantityShipped
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantityShipped($value)
    {
        $this->setQuantityShipped($value);

        return $this;
    }

    /**
     * Get the value of the ItemChargeList property.
     *
     * @return List<ChargeComponent> itemChargeList
     */
    public function getItemChargeList()
    {
        if (null == $this->_fields['ItemChargeList']['FieldValue']) {
            $this->_fields['ItemChargeList']['FieldValue'] = [];
        }

        return $this->_fields['ItemChargeList']['FieldValue'];
    }

    /**
     * Set the value of the ItemChargeList property.
     *
     * @param array itemChargeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ItemChargeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ItemChargeList.
     */
    public function unsetItemChargeList(): void
    {
        $this->_fields['ItemChargeList']['FieldValue'] = [];
    }

    /**
     * Check to see if ItemChargeList is set.
     *
     * @return true if ItemChargeList is set
     */
    public function isSetItemChargeList()
    {
        return !empty($this->_fields['ItemChargeList']['FieldValue']);
    }

    /**
     * Add values for ItemChargeList, return this.
     *
     * @param itemChargeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withItemChargeList()
    {
        foreach (\func_get_args() as $ItemChargeList) {
            $this->_fields['ItemChargeList']['FieldValue'][] = $ItemChargeList;
        }

        return $this;
    }

    /**
     * Get the value of the ItemChargeAdjustmentList property.
     *
     * @return List<ChargeComponent> itemChargeAdjustmentList
     */
    public function getItemChargeAdjustmentList()
    {
        if (null == $this->_fields['ItemChargeAdjustmentList']['FieldValue']) {
            $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = [];
        }

        return $this->_fields['ItemChargeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the ItemChargeAdjustmentList property.
     *
     * @param array itemChargeAdjustmentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemChargeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ItemChargeAdjustmentList.
     */
    public function unsetItemChargeAdjustmentList(): void
    {
        $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = [];
    }

    /**
     * Check to see if ItemChargeAdjustmentList is set.
     *
     * @return true if ItemChargeAdjustmentList is set
     */
    public function isSetItemChargeAdjustmentList()
    {
        return !empty($this->_fields['ItemChargeAdjustmentList']['FieldValue']);
    }

    /**
     * Add values for ItemChargeAdjustmentList, return this.
     *
     * @param itemChargeAdjustmentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withItemChargeAdjustmentList()
    {
        foreach (\func_get_args() as $ItemChargeAdjustmentList) {
            $this->_fields['ItemChargeAdjustmentList']['FieldValue'][] = $ItemChargeAdjustmentList;
        }

        return $this;
    }

    /**
     * Get the value of the ItemFeeList property.
     *
     * @return List<FeeComponent> itemFeeList
     */
    public function getItemFeeList()
    {
        if (null == $this->_fields['ItemFeeList']['FieldValue']) {
            $this->_fields['ItemFeeList']['FieldValue'] = [];
        }

        return $this->_fields['ItemFeeList']['FieldValue'];
    }

    /**
     * Set the value of the ItemFeeList property.
     *
     * @param array itemFeeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ItemFeeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ItemFeeList.
     */
    public function unsetItemFeeList(): void
    {
        $this->_fields['ItemFeeList']['FieldValue'] = [];
    }

    /**
     * Check to see if ItemFeeList is set.
     *
     * @return true if ItemFeeList is set
     */
    public function isSetItemFeeList()
    {
        return !empty($this->_fields['ItemFeeList']['FieldValue']);
    }

    /**
     * Add values for ItemFeeList, return this.
     *
     * @param itemFeeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withItemFeeList()
    {
        foreach (\func_get_args() as $ItemFeeList) {
            $this->_fields['ItemFeeList']['FieldValue'][] = $ItemFeeList;
        }

        return $this;
    }

    /**
     * Get the value of the ItemFeeAdjustmentList property.
     *
     * @return List<FeeComponent> itemFeeAdjustmentList
     */
    public function getItemFeeAdjustmentList()
    {
        if (null == $this->_fields['ItemFeeAdjustmentList']['FieldValue']) {
            $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = [];
        }

        return $this->_fields['ItemFeeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the ItemFeeAdjustmentList property.
     *
     * @param array itemFeeAdjustmentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ItemFeeAdjustmentList.
     */
    public function unsetItemFeeAdjustmentList(): void
    {
        $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = [];
    }

    /**
     * Check to see if ItemFeeAdjustmentList is set.
     *
     * @return true if ItemFeeAdjustmentList is set
     */
    public function isSetItemFeeAdjustmentList()
    {
        return !empty($this->_fields['ItemFeeAdjustmentList']['FieldValue']);
    }

    /**
     * Add values for ItemFeeAdjustmentList, return this.
     *
     * @param itemFeeAdjustmentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withItemFeeAdjustmentList()
    {
        foreach (\func_get_args() as $ItemFeeAdjustmentList) {
            $this->_fields['ItemFeeAdjustmentList']['FieldValue'][] = $ItemFeeAdjustmentList;
        }

        return $this;
    }

    /**
     * Get the value of the ItemTaxWithheldList property.
     *
     * @return List<TaxWithheldComponent> itemTaxWithheldList
     */
    public function getItemTaxWithheldList()
    {
        if (null == $this->_fields['ItemTaxWithheldList']['FieldValue']) {
            $this->_fields['ItemTaxWithheldList']['FieldValue'] = [];
        }

        return $this->_fields['ItemTaxWithheldList']['FieldValue'];
    }

    /**
     * Set the value of the ItemTaxWithheldList property.
     *
     * @param array itemTaxWithheldList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemTaxWithheldList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ItemTaxWithheldList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ItemTaxWithheldList.
     */
    public function unsetItemTaxWithheldList(): void
    {
        $this->_fields['ItemTaxWithheldList']['FieldValue'] = [];
    }

    /**
     * Check to see if ItemTaxWithheldList is set.
     *
     * @return true if ItemTaxWithheldList is set
     */
    public function isSetItemTaxWithheldList()
    {
        return !empty($this->_fields['ItemTaxWithheldList']['FieldValue']);
    }

    /**
     * Add values for ItemTaxWithheldList, return this.
     *
     * @param itemTaxWithheldList
     *             New values to add
     *
     * @return $this instance
     */
    public function withItemTaxWithheldList()
    {
        foreach (\func_get_args() as $ItemTaxWithheldList) {
            $this->_fields['ItemTaxWithheldList']['FieldValue'][] = $ItemTaxWithheldList;
        }

        return $this;
    }

    /**
     * Get the value of the PromotionList property.
     *
     * @return List<Promotion> promotionList
     */
    public function getPromotionList()
    {
        if (null == $this->_fields['PromotionList']['FieldValue']) {
            $this->_fields['PromotionList']['FieldValue'] = [];
        }

        return $this->_fields['PromotionList']['FieldValue'];
    }

    /**
     * Set the value of the PromotionList property.
     *
     * @param array promotionList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromotionList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PromotionList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PromotionList.
     */
    public function unsetPromotionList(): void
    {
        $this->_fields['PromotionList']['FieldValue'] = [];
    }

    /**
     * Check to see if PromotionList is set.
     *
     * @return true if PromotionList is set
     */
    public function isSetPromotionList()
    {
        return !empty($this->_fields['PromotionList']['FieldValue']);
    }

    /**
     * Add values for PromotionList, return this.
     *
     * @param promotionList
     *             New values to add
     *
     * @return $this instance
     */
    public function withPromotionList()
    {
        foreach (\func_get_args() as $PromotionList) {
            $this->_fields['PromotionList']['FieldValue'][] = $PromotionList;
        }

        return $this;
    }

    /**
     * Get the value of the PromotionAdjustmentList property.
     *
     * @return List<Promotion> promotionAdjustmentList
     */
    public function getPromotionAdjustmentList()
    {
        if (null == $this->_fields['PromotionAdjustmentList']['FieldValue']) {
            $this->_fields['PromotionAdjustmentList']['FieldValue'] = [];
        }

        return $this->_fields['PromotionAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the PromotionAdjustmentList property.
     *
     * @param array promotionAdjustmentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromotionAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PromotionAdjustmentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PromotionAdjustmentList.
     */
    public function unsetPromotionAdjustmentList(): void
    {
        $this->_fields['PromotionAdjustmentList']['FieldValue'] = [];
    }

    /**
     * Check to see if PromotionAdjustmentList is set.
     *
     * @return true if PromotionAdjustmentList is set
     */
    public function isSetPromotionAdjustmentList()
    {
        return !empty($this->_fields['PromotionAdjustmentList']['FieldValue']);
    }

    /**
     * Add values for PromotionAdjustmentList, return this.
     *
     * @param promotionAdjustmentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withPromotionAdjustmentList()
    {
        foreach (\func_get_args() as $PromotionAdjustmentList) {
            $this->_fields['PromotionAdjustmentList']['FieldValue'][] = $PromotionAdjustmentList;
        }

        return $this;
    }

    /**
     * Get the value of the CostOfPointsGranted property.
     *
     * @return Currency costOfPointsGranted
     */
    public function getCostOfPointsGranted()
    {
        return $this->_fields['CostOfPointsGranted']['FieldValue'];
    }

    /**
     * Set the value of the CostOfPointsGranted property.
     *
     * @param Currency costOfPointsGranted
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCostOfPointsGranted($value)
    {
        $this->_fields['CostOfPointsGranted']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CostOfPointsGranted is set.
     *
     * @return true if CostOfPointsGranted is set
     */
    public function isSetCostOfPointsGranted()
    {
        return null !== $this->_fields['CostOfPointsGranted']['FieldValue'];
    }

    /**
     * Set the value of CostOfPointsGranted, return this.
     *
     * @param costOfPointsGranted
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCostOfPointsGranted($value)
    {
        $this->setCostOfPointsGranted($value);

        return $this;
    }

    /**
     * Get the value of the CostOfPointsReturned property.
     *
     * @return Currency costOfPointsReturned
     */
    public function getCostOfPointsReturned()
    {
        return $this->_fields['CostOfPointsReturned']['FieldValue'];
    }

    /**
     * Set the value of the CostOfPointsReturned property.
     *
     * @param Currency costOfPointsReturned
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCostOfPointsReturned($value)
    {
        $this->_fields['CostOfPointsReturned']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CostOfPointsReturned is set.
     *
     * @return true if CostOfPointsReturned is set
     */
    public function isSetCostOfPointsReturned()
    {
        return null !== $this->_fields['CostOfPointsReturned']['FieldValue'];
    }

    /**
     * Set the value of CostOfPointsReturned, return this.
     *
     * @param costOfPointsReturned
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCostOfPointsReturned($value)
    {
        $this->setCostOfPointsReturned($value);

        return $this;
    }
}
