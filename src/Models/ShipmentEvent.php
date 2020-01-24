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
 * ShipmentEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonOrderId: string</li>
 * <li>SellerOrderId: string</li>
 * <li>MarketplaceName: string</li>
 * <li>OrderChargeList: array</li>
 * <li>OrderChargeAdjustmentList: array</li>
 * <li>ShipmentFeeList: array</li>
 * <li>ShipmentFeeAdjustmentList: array</li>
 * <li>OrderFeeList: array</li>
 * <li>OrderFeeAdjustmentList: array</li>
 * <li>DirectPaymentList: array</li>
 * <li>PostedDate: string</li>
 * <li>ShipmentItemList: array</li>
 * <li>ShipmentItemAdjustmentList: array</li>
 *
 * </ul>
 */
class ShipmentEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonOrderId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerOrderId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceName'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderChargeList'            => ['FieldValue' => [], 'FieldType' => ['ChargeComponent'], 'ListMemberName' => 'ChargeComponent'],
            'OrderChargeAdjustmentList'  => ['FieldValue' => [], 'FieldType' => ['ChargeComponent'], 'ListMemberName' => 'ChargeComponent'],
            'ShipmentFeeList'            => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
            'ShipmentFeeAdjustmentList'  => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
            'OrderFeeList'               => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
            'OrderFeeAdjustmentList'     => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
            'DirectPaymentList'          => ['FieldValue' => [], 'FieldType' => ['DirectPayment'], 'ListMemberName' => 'DirectPayment'],
            'PostedDate'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipmentItemList'           => ['FieldValue' => [], 'FieldType' => ['ShipmentItem'], 'ListMemberName' => 'ShipmentItem'],
            'ShipmentItemAdjustmentList' => ['FieldValue' => [], 'FieldType' => ['ShipmentItem'], 'ListMemberName' => 'ShipmentItem'],
        ];
        parent::__construct($data);
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
     * Get the value of the SellerOrderId property.
     *
     * @return string sellerOrderId
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set
     */
    public function isSetSellerOrderId()
    {
        return null !== $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param sellerOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);

        return $this;
    }

    /**
     * Get the value of the MarketplaceName property.
     *
     * @return string marketplaceName
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceName($value)
    {
        $this->_fields['MarketplaceName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceName is set.
     *
     * @return true if MarketplaceName is set
     */
    public function isSetMarketplaceName()
    {
        return null !== $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceName, return this.
     *
     * @param marketplaceName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplaceName($value)
    {
        $this->setMarketplaceName($value);

        return $this;
    }

    /**
     * Get the value of the OrderChargeList property.
     *
     * @return List<ChargeComponent> orderChargeList
     */
    public function getOrderChargeList()
    {
        if (null == $this->_fields['OrderChargeList']['FieldValue']) {
            $this->_fields['OrderChargeList']['FieldValue'] = [];
        }

        return $this->_fields['OrderChargeList']['FieldValue'];
    }

    /**
     * Set the value of the OrderChargeList property.
     *
     * @param array orderChargeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OrderChargeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear OrderChargeList.
     */
    public function unsetOrderChargeList(): void
    {
        $this->_fields['OrderChargeList']['FieldValue'] = [];
    }

    /**
     * Check to see if OrderChargeList is set.
     *
     * @return true if OrderChargeList is set
     */
    public function isSetOrderChargeList()
    {
        return !empty($this->_fields['OrderChargeList']['FieldValue']);
    }

    /**
     * Add values for OrderChargeList, return this.
     *
     * @param orderChargeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withOrderChargeList()
    {
        foreach (\func_get_args() as $OrderChargeList) {
            $this->_fields['OrderChargeList']['FieldValue'][] = $OrderChargeList;
        }

        return $this;
    }

    /**
     * Get the value of the OrderChargeAdjustmentList property.
     *
     * @return List<ChargeComponent> orderChargeAdjustmentList
     */
    public function getOrderChargeAdjustmentList()
    {
        if (null == $this->_fields['OrderChargeAdjustmentList']['FieldValue']) {
            $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = [];
        }

        return $this->_fields['OrderChargeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the OrderChargeAdjustmentList property.
     *
     * @param array orderChargeAdjustmentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderChargeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear OrderChargeAdjustmentList.
     */
    public function unsetOrderChargeAdjustmentList(): void
    {
        $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = [];
    }

    /**
     * Check to see if OrderChargeAdjustmentList is set.
     *
     * @return true if OrderChargeAdjustmentList is set
     */
    public function isSetOrderChargeAdjustmentList()
    {
        return !empty($this->_fields['OrderChargeAdjustmentList']['FieldValue']);
    }

    /**
     * Add values for OrderChargeAdjustmentList, return this.
     *
     * @param orderChargeAdjustmentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withOrderChargeAdjustmentList()
    {
        foreach (\func_get_args() as $OrderChargeAdjustmentList) {
            $this->_fields['OrderChargeAdjustmentList']['FieldValue'][] = $OrderChargeAdjustmentList;
        }

        return $this;
    }

    /**
     * Get the value of the ShipmentFeeList property.
     *
     * @return List<FeeComponent> shipmentFeeList
     */
    public function getShipmentFeeList()
    {
        if (null == $this->_fields['ShipmentFeeList']['FieldValue']) {
            $this->_fields['ShipmentFeeList']['FieldValue'] = [];
        }

        return $this->_fields['ShipmentFeeList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentFeeList property.
     *
     * @param array shipmentFeeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ShipmentFeeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ShipmentFeeList.
     */
    public function unsetShipmentFeeList(): void
    {
        $this->_fields['ShipmentFeeList']['FieldValue'] = [];
    }

    /**
     * Check to see if ShipmentFeeList is set.
     *
     * @return true if ShipmentFeeList is set
     */
    public function isSetShipmentFeeList()
    {
        return !empty($this->_fields['ShipmentFeeList']['FieldValue']);
    }

    /**
     * Add values for ShipmentFeeList, return this.
     *
     * @param shipmentFeeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withShipmentFeeList()
    {
        foreach (\func_get_args() as $ShipmentFeeList) {
            $this->_fields['ShipmentFeeList']['FieldValue'][] = $ShipmentFeeList;
        }

        return $this;
    }

    /**
     * Get the value of the ShipmentFeeAdjustmentList property.
     *
     * @return List<FeeComponent> shipmentFeeAdjustmentList
     */
    public function getShipmentFeeAdjustmentList()
    {
        if (null == $this->_fields['ShipmentFeeAdjustmentList']['FieldValue']) {
            $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = [];
        }

        return $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentFeeAdjustmentList property.
     *
     * @param array shipmentFeeAdjustmentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ShipmentFeeAdjustmentList.
     */
    public function unsetShipmentFeeAdjustmentList(): void
    {
        $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = [];
    }

    /**
     * Check to see if ShipmentFeeAdjustmentList is set.
     *
     * @return true if ShipmentFeeAdjustmentList is set
     */
    public function isSetShipmentFeeAdjustmentList()
    {
        return !empty($this->_fields['ShipmentFeeAdjustmentList']['FieldValue']);
    }

    /**
     * Add values for ShipmentFeeAdjustmentList, return this.
     *
     * @param shipmentFeeAdjustmentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withShipmentFeeAdjustmentList()
    {
        foreach (\func_get_args() as $ShipmentFeeAdjustmentList) {
            $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'][] = $ShipmentFeeAdjustmentList;
        }

        return $this;
    }

    /**
     * Get the value of the OrderFeeList property.
     *
     * @return List<FeeComponent> orderFeeList
     */
    public function getOrderFeeList()
    {
        if (null == $this->_fields['OrderFeeList']['FieldValue']) {
            $this->_fields['OrderFeeList']['FieldValue'] = [];
        }

        return $this->_fields['OrderFeeList']['FieldValue'];
    }

    /**
     * Set the value of the OrderFeeList property.
     *
     * @param array orderFeeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OrderFeeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear OrderFeeList.
     */
    public function unsetOrderFeeList(): void
    {
        $this->_fields['OrderFeeList']['FieldValue'] = [];
    }

    /**
     * Check to see if OrderFeeList is set.
     *
     * @return true if OrderFeeList is set
     */
    public function isSetOrderFeeList()
    {
        return !empty($this->_fields['OrderFeeList']['FieldValue']);
    }

    /**
     * Add values for OrderFeeList, return this.
     *
     * @param orderFeeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withOrderFeeList()
    {
        foreach (\func_get_args() as $OrderFeeList) {
            $this->_fields['OrderFeeList']['FieldValue'][] = $OrderFeeList;
        }

        return $this;
    }

    /**
     * Get the value of the OrderFeeAdjustmentList property.
     *
     * @return List<FeeComponent> orderFeeAdjustmentList
     */
    public function getOrderFeeAdjustmentList()
    {
        if (null == $this->_fields['OrderFeeAdjustmentList']['FieldValue']) {
            $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = [];
        }

        return $this->_fields['OrderFeeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the OrderFeeAdjustmentList property.
     *
     * @param array orderFeeAdjustmentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear OrderFeeAdjustmentList.
     */
    public function unsetOrderFeeAdjustmentList(): void
    {
        $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = [];
    }

    /**
     * Check to see if OrderFeeAdjustmentList is set.
     *
     * @return true if OrderFeeAdjustmentList is set
     */
    public function isSetOrderFeeAdjustmentList()
    {
        return !empty($this->_fields['OrderFeeAdjustmentList']['FieldValue']);
    }

    /**
     * Add values for OrderFeeAdjustmentList, return this.
     *
     * @param orderFeeAdjustmentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withOrderFeeAdjustmentList()
    {
        foreach (\func_get_args() as $OrderFeeAdjustmentList) {
            $this->_fields['OrderFeeAdjustmentList']['FieldValue'][] = $OrderFeeAdjustmentList;
        }

        return $this;
    }

    /**
     * Get the value of the DirectPaymentList property.
     *
     * @return List<DirectPayment> directPaymentList
     */
    public function getDirectPaymentList()
    {
        if (null == $this->_fields['DirectPaymentList']['FieldValue']) {
            $this->_fields['DirectPaymentList']['FieldValue'] = [];
        }

        return $this->_fields['DirectPaymentList']['FieldValue'];
    }

    /**
     * Set the value of the DirectPaymentList property.
     *
     * @param array directPaymentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDirectPaymentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['DirectPaymentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear DirectPaymentList.
     */
    public function unsetDirectPaymentList(): void
    {
        $this->_fields['DirectPaymentList']['FieldValue'] = [];
    }

    /**
     * Check to see if DirectPaymentList is set.
     *
     * @return true if DirectPaymentList is set
     */
    public function isSetDirectPaymentList()
    {
        return !empty($this->_fields['DirectPaymentList']['FieldValue']);
    }

    /**
     * Add values for DirectPaymentList, return this.
     *
     * @param directPaymentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withDirectPaymentList()
    {
        foreach (\func_get_args() as $DirectPaymentList) {
            $this->_fields['DirectPaymentList']['FieldValue'][] = $DirectPaymentList;
        }

        return $this;
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar postedDate
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set
     */
    public function isSetPostedDate()
    {
        return null !== $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);

        return $this;
    }

    /**
     * Get the value of the ShipmentItemList property.
     *
     * @return List<ShipmentItem> shipmentItemList
     */
    public function getShipmentItemList()
    {
        if (null == $this->_fields['ShipmentItemList']['FieldValue']) {
            $this->_fields['ShipmentItemList']['FieldValue'] = [];
        }

        return $this->_fields['ShipmentItemList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentItemList property.
     *
     * @param array shipmentItemList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ShipmentItemList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ShipmentItemList.
     */
    public function unsetShipmentItemList(): void
    {
        $this->_fields['ShipmentItemList']['FieldValue'] = [];
    }

    /**
     * Check to see if ShipmentItemList is set.
     *
     * @return true if ShipmentItemList is set
     */
    public function isSetShipmentItemList()
    {
        return !empty($this->_fields['ShipmentItemList']['FieldValue']);
    }

    /**
     * Add values for ShipmentItemList, return this.
     *
     * @param shipmentItemList
     *             New values to add
     *
     * @return $this instance
     */
    public function withShipmentItemList()
    {
        foreach (\func_get_args() as $ShipmentItemList) {
            $this->_fields['ShipmentItemList']['FieldValue'][] = $ShipmentItemList;
        }

        return $this;
    }

    /**
     * Get the value of the ShipmentItemAdjustmentList property.
     *
     * @return List<ShipmentItem> shipmentItemAdjustmentList
     */
    public function getShipmentItemAdjustmentList()
    {
        if (null == $this->_fields['ShipmentItemAdjustmentList']['FieldValue']) {
            $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = [];
        }

        return $this->_fields['ShipmentItemAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentItemAdjustmentList property.
     *
     * @param array shipmentItemAdjustmentList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentItemAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ShipmentItemAdjustmentList.
     */
    public function unsetShipmentItemAdjustmentList(): void
    {
        $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = [];
    }

    /**
     * Check to see if ShipmentItemAdjustmentList is set.
     *
     * @return true if ShipmentItemAdjustmentList is set
     */
    public function isSetShipmentItemAdjustmentList()
    {
        return !empty($this->_fields['ShipmentItemAdjustmentList']['FieldValue']);
    }

    /**
     * Add values for ShipmentItemAdjustmentList, return this.
     *
     * @param shipmentItemAdjustmentList
     *             New values to add
     *
     * @return $this instance
     */
    public function withShipmentItemAdjustmentList()
    {
        foreach (\func_get_args() as $ShipmentItemAdjustmentList) {
            $this->_fields['ShipmentItemAdjustmentList']['FieldValue'][] = $ShipmentItemAdjustmentList;
        }

        return $this;
    }
}
