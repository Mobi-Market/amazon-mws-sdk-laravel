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
 * Order.
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonOrderId: string</li>
 * <li>SellerOrderId: string</li>
 * <li>PurchaseDate: string</li>
 * <li>LastUpdateDate: string</li>
 * <li>OrderStatus: string</li>
 * <li>FulfillmentChannel: string</li>
 * <li>SalesChannel: string</li>
 * <li>OrderChannel: string</li>
 * <li>ShipServiceLevel: string</li>
 * <li>ShippingAddress: Address</li>
 * <li>OrderTotal: Money</li>
 * <li>NumberOfItemsShipped: int</li>
 * <li>NumberOfItemsUnshipped: int</li>
 * <li>PaymentExecutionDetail: array</li>
 * <li>PaymentMethod: string</li>
 * <li>PaymentMethodDetails: array</li>
 * <li>MarketplaceId: string</li>
 * <li>BuyerEmail: string</li>
 * <li>BuyerName: string</li>
 * <li>BuyerCounty: string</li>
 * <li>BuyerTaxInfo: BuyerTaxInfo</li>
 * <li>ShipmentServiceLevelCategory: string</li>
 * <li>ShippedByAmazonTFM: bool</li>
 * <li>TFMShipmentStatus: string</li>
 * <li>EasyShipShipmentStatus: string</li>
 * <li>CbaDisplayableShippingLabel: string</li>
 * <li>OrderType: string</li>
 * <li>EarliestShipDate: string</li>
 * <li>LatestShipDate: string</li>
 * <li>EarliestDeliveryDate: string</li>
 * <li>LatestDeliveryDate: string</li>
 * <li>IsBusinessOrder: bool</li>
 * <li>PurchaseOrderNumber: string</li>
 * <li>IsPrime: bool</li>
 * <li>IsPremiumOrder: bool</li>
 * <li>ReplacedOrderId: string</li>
 * <li>IsReplacementOrder: bool</li>
 * <li>PromiseResponseDueDate: string</li>
 * <li>IsEstimatedShipDateSet: bool</li>
 *
 * </ul>
 */
class Order extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonOrderId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerOrderId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'PurchaseDate'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'LastUpdateDate'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderStatus'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentChannel'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'SalesChannel'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderChannel'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipServiceLevel'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippingAddress'              => ['FieldValue' => null, 'FieldType' => 'Address'],
            'OrderTotal'                   => ['FieldValue' => null, 'FieldType' => 'Money'],
            'NumberOfItemsShipped'         => ['FieldValue' => null, 'FieldType' => 'int'],
            'NumberOfItemsUnshipped'       => ['FieldValue' => null, 'FieldType' => 'int'],
            'PaymentExecutionDetail'       => ['FieldValue' => [], 'FieldType' => ['PaymentExecutionDetailItem'], 'ListMemberName' => 'PaymentExecutionDetailItem'],
            'PaymentMethod'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'PaymentMethodDetails'         => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'PaymentMethodDetail'],
            'MarketplaceId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerEmail'                   => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerName'                    => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerCounty'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerTaxInfo'                 => ['FieldValue' => null, 'FieldType' => 'BuyerTaxInfo'],
            'ShipmentServiceLevelCategory' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippedByAmazonTFM'           => ['FieldValue' => null, 'FieldType' => 'bool'],
            'TFMShipmentStatus'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'EasyShipShipmentStatus'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'CbaDisplayableShippingLabel'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderType'                    => ['FieldValue' => null, 'FieldType' => 'string'],
            'EarliestShipDate'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'LatestShipDate'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'EarliestDeliveryDate'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'LatestDeliveryDate'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsBusinessOrder'              => ['FieldValue' => null, 'FieldType' => 'bool'],
            'PurchaseOrderNumber'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsPrime'                      => ['FieldValue' => null, 'FieldType' => 'bool'],
            'IsPremiumOrder'               => ['FieldValue' => null, 'FieldType' => 'bool'],
            'ReplacedOrderId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsReplacementOrder'           => ['FieldValue' => null, 'FieldType' => 'bool'],
            'PromiseResponseDueDate'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsEstimatedShipDateSet'       => ['FieldValue' => null, 'FieldType' => 'bool'],
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
     * Get the value of the PurchaseDate property.
     *
     * @return XMLGregorianCalendar purchaseDate
     */
    public function getPurchaseDate()
    {
        return $this->_fields['PurchaseDate']['FieldValue'];
    }

    /**
     * Set the value of the PurchaseDate property.
     *
     * @param string purchaseDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPurchaseDate($value)
    {
        $this->_fields['PurchaseDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PurchaseDate is set.
     *
     * @return true if PurchaseDate is set
     */
    public function isSetPurchaseDate()
    {
        return null !== $this->_fields['PurchaseDate']['FieldValue'];
    }

    /**
     * Set the value of PurchaseDate, return this.
     *
     * @param purchaseDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPurchaseDate($value)
    {
        $this->setPurchaseDate($value);

        return $this;
    }

    /**
     * Get the value of the LastUpdateDate property.
     *
     * @return XMLGregorianCalendar lastUpdateDate
     */
    public function getLastUpdateDate()
    {
        return $this->_fields['LastUpdateDate']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdateDate property.
     *
     * @param string lastUpdateDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLastUpdateDate($value)
    {
        $this->_fields['LastUpdateDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LastUpdateDate is set.
     *
     * @return true if LastUpdateDate is set
     */
    public function isSetLastUpdateDate()
    {
        return null !== $this->_fields['LastUpdateDate']['FieldValue'];
    }

    /**
     * Set the value of LastUpdateDate, return this.
     *
     * @param lastUpdateDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLastUpdateDate($value)
    {
        $this->setLastUpdateDate($value);

        return $this;
    }

    /**
     * Get the value of the OrderStatus property.
     *
     * @return string orderStatus
     */
    public function getOrderStatus()
    {
        return $this->_fields['OrderStatus']['FieldValue'];
    }

    /**
     * Set the value of the OrderStatus property.
     *
     * @param string orderStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderStatus($value)
    {
        $this->_fields['OrderStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderStatus is set.
     *
     * @return true if OrderStatus is set
     */
    public function isSetOrderStatus()
    {
        return null !== $this->_fields['OrderStatus']['FieldValue'];
    }

    /**
     * Set the value of OrderStatus, return this.
     *
     * @param orderStatus
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderStatus($value)
    {
        $this->setOrderStatus($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return string fulfillmentChannel
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set
     */
    public function isSetFulfillmentChannel()
    {
        return null !== $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);

        return $this;
    }

    /**
     * Get the value of the SalesChannel property.
     *
     * @return string salesChannel
     */
    public function getSalesChannel()
    {
        return $this->_fields['SalesChannel']['FieldValue'];
    }

    /**
     * Set the value of the SalesChannel property.
     *
     * @param string salesChannel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSalesChannel($value)
    {
        $this->_fields['SalesChannel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SalesChannel is set.
     *
     * @return true if SalesChannel is set
     */
    public function isSetSalesChannel()
    {
        return null !== $this->_fields['SalesChannel']['FieldValue'];
    }

    /**
     * Set the value of SalesChannel, return this.
     *
     * @param salesChannel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSalesChannel($value)
    {
        $this->setSalesChannel($value);

        return $this;
    }

    /**
     * Get the value of the OrderChannel property.
     *
     * @return string orderChannel
     */
    public function getOrderChannel()
    {
        return $this->_fields['OrderChannel']['FieldValue'];
    }

    /**
     * Set the value of the OrderChannel property.
     *
     * @param string orderChannel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderChannel($value)
    {
        $this->_fields['OrderChannel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderChannel is set.
     *
     * @return true if OrderChannel is set
     */
    public function isSetOrderChannel()
    {
        return null !== $this->_fields['OrderChannel']['FieldValue'];
    }

    /**
     * Set the value of OrderChannel, return this.
     *
     * @param orderChannel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderChannel($value)
    {
        $this->setOrderChannel($value);

        return $this;
    }

    /**
     * Get the value of the ShipServiceLevel property.
     *
     * @return string shipServiceLevel
     */
    public function getShipServiceLevel()
    {
        return $this->_fields['ShipServiceLevel']['FieldValue'];
    }

    /**
     * Set the value of the ShipServiceLevel property.
     *
     * @param string shipServiceLevel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipServiceLevel($value)
    {
        $this->_fields['ShipServiceLevel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipServiceLevel is set.
     *
     * @return true if ShipServiceLevel is set
     */
    public function isSetShipServiceLevel()
    {
        return null !== $this->_fields['ShipServiceLevel']['FieldValue'];
    }

    /**
     * Set the value of ShipServiceLevel, return this.
     *
     * @param shipServiceLevel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipServiceLevel($value)
    {
        $this->setShipServiceLevel($value);

        return $this;
    }

    /**
     * Get the value of the ShippingAddress property.
     *
     * @return Address shippingAddress
     */
    public function getShippingAddress()
    {
        return $this->_fields['ShippingAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShippingAddress property.
     *
     * @param Address shippingAddress
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingAddress($value)
    {
        $this->_fields['ShippingAddress']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingAddress is set.
     *
     * @return true if ShippingAddress is set
     */
    public function isSetShippingAddress()
    {
        return null !== $this->_fields['ShippingAddress']['FieldValue'];
    }

    /**
     * Set the value of ShippingAddress, return this.
     *
     * @param shippingAddress
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingAddress($value)
    {
        $this->setShippingAddress($value);

        return $this;
    }

    /**
     * Get the value of the OrderTotal property.
     *
     * @return Money orderTotal
     */
    public function getOrderTotal()
    {
        return $this->_fields['OrderTotal']['FieldValue'];
    }

    /**
     * Set the value of the OrderTotal property.
     *
     * @param Money orderTotal
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderTotal($value)
    {
        $this->_fields['OrderTotal']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderTotal is set.
     *
     * @return true if OrderTotal is set
     */
    public function isSetOrderTotal()
    {
        return null !== $this->_fields['OrderTotal']['FieldValue'];
    }

    /**
     * Set the value of OrderTotal, return this.
     *
     * @param orderTotal
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderTotal($value)
    {
        $this->setOrderTotal($value);

        return $this;
    }

    /**
     * Get the value of the NumberOfItemsShipped property.
     *
     * @return int numberOfItemsShipped
     */
    public function getNumberOfItemsShipped()
    {
        return $this->_fields['NumberOfItemsShipped']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfItemsShipped property.
     *
     * @param int numberOfItemsShipped
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfItemsShipped($value)
    {
        $this->_fields['NumberOfItemsShipped']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfItemsShipped is set.
     *
     * @return true if NumberOfItemsShipped is set
     */
    public function isSetNumberOfItemsShipped()
    {
        return null !== $this->_fields['NumberOfItemsShipped']['FieldValue'];
    }

    /**
     * Set the value of NumberOfItemsShipped, return this.
     *
     * @param numberOfItemsShipped
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfItemsShipped($value)
    {
        $this->setNumberOfItemsShipped($value);

        return $this;
    }

    /**
     * Get the value of the NumberOfItemsUnshipped property.
     *
     * @return int numberOfItemsUnshipped
     */
    public function getNumberOfItemsUnshipped()
    {
        return $this->_fields['NumberOfItemsUnshipped']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfItemsUnshipped property.
     *
     * @param int numberOfItemsUnshipped
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfItemsUnshipped($value)
    {
        $this->_fields['NumberOfItemsUnshipped']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfItemsUnshipped is set.
     *
     * @return true if NumberOfItemsUnshipped is set
     */
    public function isSetNumberOfItemsUnshipped()
    {
        return null !== $this->_fields['NumberOfItemsUnshipped']['FieldValue'];
    }

    /**
     * Set the value of NumberOfItemsUnshipped, return this.
     *
     * @param numberOfItemsUnshipped
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfItemsUnshipped($value)
    {
        $this->setNumberOfItemsUnshipped($value);

        return $this;
    }

    /**
     * Get the value of the PaymentExecutionDetail property.
     *
     * @return List<PaymentExecutionDetailItem> paymentExecutionDetail
     */
    public function getPaymentExecutionDetail()
    {
        if (null == $this->_fields['PaymentExecutionDetail']['FieldValue']) {
            $this->_fields['PaymentExecutionDetail']['FieldValue'] = [];
        }

        return $this->_fields['PaymentExecutionDetail']['FieldValue'];
    }

    /**
     * Set the value of the PaymentExecutionDetail property.
     *
     * @param array paymentExecutionDetail
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPaymentExecutionDetail($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PaymentExecutionDetail']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PaymentExecutionDetail.
     */
    public function unsetPaymentExecutionDetail(): void
    {
        $this->_fields['PaymentExecutionDetail']['FieldValue'] = [];
    }

    /**
     * Check to see if PaymentExecutionDetail is set.
     *
     * @return true if PaymentExecutionDetail is set
     */
    public function isSetPaymentExecutionDetail()
    {
        return !empty($this->_fields['PaymentExecutionDetail']['FieldValue']);
    }

    /**
     * Add values for PaymentExecutionDetail, return this.
     *
     * @param paymentExecutionDetail
     *             New values to add
     *
     * @return $this instance
     */
    public function withPaymentExecutionDetail()
    {
        foreach (\func_get_args() as $PaymentExecutionDetail) {
            $this->_fields['PaymentExecutionDetail']['FieldValue'][] = $PaymentExecutionDetail;
        }

        return $this;
    }

    /**
     * Get the value of the PaymentMethod property.
     *
     * @return string paymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->_fields['PaymentMethod']['FieldValue'];
    }

    /**
     * Set the value of the PaymentMethod property.
     *
     * @param string paymentMethod
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPaymentMethod($value)
    {
        $this->_fields['PaymentMethod']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PaymentMethod is set.
     *
     * @return true if PaymentMethod is set
     */
    public function isSetPaymentMethod()
    {
        return null !== $this->_fields['PaymentMethod']['FieldValue'];
    }

    /**
     * Set the value of PaymentMethod, return this.
     *
     * @param paymentMethod
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPaymentMethod($value)
    {
        $this->setPaymentMethod($value);

        return $this;
    }

    /**
     * Get the value of the PaymentMethodDetails property.
     *
     * @return List<String> paymentMethodDetails
     */
    public function getPaymentMethodDetails()
    {
        if (null == $this->_fields['PaymentMethodDetails']['FieldValue']) {
            $this->_fields['PaymentMethodDetails']['FieldValue'] = [];
        }

        return $this->_fields['PaymentMethodDetails']['FieldValue'];
    }

    /**
     * Set the value of the PaymentMethodDetails property.
     *
     * @param array paymentMethodDetails
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPaymentMethodDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PaymentMethodDetails']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PaymentMethodDetails.
     */
    public function unsetPaymentMethodDetails(): void
    {
        $this->_fields['PaymentMethodDetails']['FieldValue'] = [];
    }

    /**
     * Check to see if PaymentMethodDetails is set.
     *
     * @return true if PaymentMethodDetails is set
     */
    public function isSetPaymentMethodDetails()
    {
        return !empty($this->_fields['PaymentMethodDetails']['FieldValue']);
    }

    /**
     * Add values for PaymentMethodDetails, return this.
     *
     * @param paymentMethodDetails
     *             New values to add
     *
     * @return $this instance
     */
    public function withPaymentMethodDetails()
    {
        foreach (\func_get_args() as $PaymentMethodDetails) {
            $this->_fields['PaymentMethodDetails']['FieldValue'][] = $PaymentMethodDetails;
        }

        return $this;
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
     * Get the value of the BuyerEmail property.
     *
     * @return string buyerEmail
     */
    public function getBuyerEmail()
    {
        return $this->_fields['BuyerEmail']['FieldValue'];
    }

    /**
     * Set the value of the BuyerEmail property.
     *
     * @param string buyerEmail
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyerEmail($value)
    {
        $this->_fields['BuyerEmail']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyerEmail is set.
     *
     * @return true if BuyerEmail is set
     */
    public function isSetBuyerEmail()
    {
        return null !== $this->_fields['BuyerEmail']['FieldValue'];
    }

    /**
     * Set the value of BuyerEmail, return this.
     *
     * @param buyerEmail
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyerEmail($value)
    {
        $this->setBuyerEmail($value);

        return $this;
    }

    /**
     * Get the value of the BuyerName property.
     *
     * @return string buyerName
     */
    public function getBuyerName()
    {
        return $this->_fields['BuyerName']['FieldValue'];
    }

    /**
     * Set the value of the BuyerName property.
     *
     * @param string buyerName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyerName($value)
    {
        $this->_fields['BuyerName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyerName is set.
     *
     * @return true if BuyerName is set
     */
    public function isSetBuyerName()
    {
        return null !== $this->_fields['BuyerName']['FieldValue'];
    }

    /**
     * Set the value of BuyerName, return this.
     *
     * @param buyerName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyerName($value)
    {
        $this->setBuyerName($value);

        return $this;
    }

    /**
     * Get the value of the BuyerCounty property.
     *
     * @return string buyerCounty
     */
    public function getBuyerCounty()
    {
        return $this->_fields['BuyerCounty']['FieldValue'];
    }

    /**
     * Set the value of the BuyerCounty property.
     *
     * @param string buyerCounty
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyerCounty($value)
    {
        $this->_fields['BuyerCounty']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyerCounty is set.
     *
     * @return true if BuyerCounty is set
     */
    public function isSetBuyerCounty()
    {
        return null !== $this->_fields['BuyerCounty']['FieldValue'];
    }

    /**
     * Set the value of BuyerCounty, return this.
     *
     * @param buyerCounty
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyerCounty($value)
    {
        $this->setBuyerCounty($value);

        return $this;
    }

    /**
     * Get the value of the BuyerTaxInfo property.
     *
     * @return BuyerTaxInfo buyerTaxInfo
     */
    public function getBuyerTaxInfo()
    {
        return $this->_fields['BuyerTaxInfo']['FieldValue'];
    }

    /**
     * Set the value of the BuyerTaxInfo property.
     *
     * @param BuyerTaxInfo buyerTaxInfo
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyerTaxInfo($value)
    {
        $this->_fields['BuyerTaxInfo']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyerTaxInfo is set.
     *
     * @return true if BuyerTaxInfo is set
     */
    public function isSetBuyerTaxInfo()
    {
        return null !== $this->_fields['BuyerTaxInfo']['FieldValue'];
    }

    /**
     * Set the value of BuyerTaxInfo, return this.
     *
     * @param buyerTaxInfo
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyerTaxInfo($value)
    {
        $this->setBuyerTaxInfo($value);

        return $this;
    }

    /**
     * Get the value of the ShipmentServiceLevelCategory property.
     *
     * @return string shipmentServiceLevelCategory
     */
    public function getShipmentServiceLevelCategory()
    {
        return $this->_fields['ShipmentServiceLevelCategory']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentServiceLevelCategory property.
     *
     * @param string shipmentServiceLevelCategory
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentServiceLevelCategory($value)
    {
        $this->_fields['ShipmentServiceLevelCategory']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentServiceLevelCategory is set.
     *
     * @return true if ShipmentServiceLevelCategory is set
     */
    public function isSetShipmentServiceLevelCategory()
    {
        return null !== $this->_fields['ShipmentServiceLevelCategory']['FieldValue'];
    }

    /**
     * Set the value of ShipmentServiceLevelCategory, return this.
     *
     * @param shipmentServiceLevelCategory
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentServiceLevelCategory($value)
    {
        $this->setShipmentServiceLevelCategory($value);

        return $this;
    }

    /**
     * Check the value of ShippedByAmazonTFM.
     *
     * @return true if ShippedByAmazonTFM is set to true
     */
    public function isShippedByAmazonTFM()
    {
        return null !== $this->_fields['ShippedByAmazonTFM']['FieldValue'] && $this->_fields['ShippedByAmazonTFM']['FieldValue'];
    }

    /**
     * Get the value of the ShippedByAmazonTFM property.
     *
     * @return bool shippedByAmazonTFM
     */
    public function getShippedByAmazonTFM()
    {
        return $this->_fields['ShippedByAmazonTFM']['FieldValue'];
    }

    /**
     * Set the value of the ShippedByAmazonTFM property.
     *
     * @param bool shippedByAmazonTFM
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippedByAmazonTFM($value)
    {
        $this->_fields['ShippedByAmazonTFM']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippedByAmazonTFM is set.
     *
     * @return true if ShippedByAmazonTFM is set
     */
    public function isSetShippedByAmazonTFM()
    {
        return null !== $this->_fields['ShippedByAmazonTFM']['FieldValue'];
    }

    /**
     * Set the value of ShippedByAmazonTFM, return this.
     *
     * @param shippedByAmazonTFM
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippedByAmazonTFM($value)
    {
        $this->setShippedByAmazonTFM($value);

        return $this;
    }

    /**
     * Get the value of the TFMShipmentStatus property.
     *
     * @return string TFMShipmentStatus
     */
    public function getTFMShipmentStatus()
    {
        return $this->_fields['TFMShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the TFMShipmentStatus property.
     *
     * @param string tfmShipmentStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTFMShipmentStatus($value)
    {
        $this->_fields['TFMShipmentStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TFMShipmentStatus is set.
     *
     * @return true if TFMShipmentStatus is set
     */
    public function isSetTFMShipmentStatus()
    {
        return null !== $this->_fields['TFMShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of TFMShipmentStatus, return this.
     *
     * @param tfmShipmentStatus
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTFMShipmentStatus($value)
    {
        $this->setTFMShipmentStatus($value);

        return $this;
    }

    /**
     * Get the value of the EasyShipShipmentStatus property.
     *
     * @return string easyShipShipmentStatus
     */
    public function getEasyShipShipmentStatus()
    {
        return $this->_fields['EasyShipShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the EasyShipShipmentStatus property.
     *
     * @param string easyShipShipmentStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEasyShipShipmentStatus($value)
    {
        $this->_fields['EasyShipShipmentStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EasyShipShipmentStatus is set.
     *
     * @return true if EasyShipShipmentStatus is set
     */
    public function isSetEasyShipShipmentStatus()
    {
        return null !== $this->_fields['EasyShipShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of EasyShipShipmentStatus, return this.
     *
     * @param easyShipShipmentStatus
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEasyShipShipmentStatus($value)
    {
        $this->setEasyShipShipmentStatus($value);

        return $this;
    }

    /**
     * Get the value of the CbaDisplayableShippingLabel property.
     *
     * @return string cbaDisplayableShippingLabel
     */
    public function getCbaDisplayableShippingLabel()
    {
        return $this->_fields['CbaDisplayableShippingLabel']['FieldValue'];
    }

    /**
     * Set the value of the CbaDisplayableShippingLabel property.
     *
     * @param string cbaDisplayableShippingLabel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCbaDisplayableShippingLabel($value)
    {
        $this->_fields['CbaDisplayableShippingLabel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CbaDisplayableShippingLabel is set.
     *
     * @return true if CbaDisplayableShippingLabel is set
     */
    public function isSetCbaDisplayableShippingLabel()
    {
        return null !== $this->_fields['CbaDisplayableShippingLabel']['FieldValue'];
    }

    /**
     * Set the value of CbaDisplayableShippingLabel, return this.
     *
     * @param cbaDisplayableShippingLabel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCbaDisplayableShippingLabel($value)
    {
        $this->setCbaDisplayableShippingLabel($value);

        return $this;
    }

    /**
     * Get the value of the OrderType property.
     *
     * @return string orderType
     */
    public function getOrderType()
    {
        return $this->_fields['OrderType']['FieldValue'];
    }

    /**
     * Set the value of the OrderType property.
     *
     * @param string orderType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderType($value)
    {
        $this->_fields['OrderType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderType is set.
     *
     * @return true if OrderType is set
     */
    public function isSetOrderType()
    {
        return null !== $this->_fields['OrderType']['FieldValue'];
    }

    /**
     * Set the value of OrderType, return this.
     *
     * @param orderType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderType($value)
    {
        $this->setOrderType($value);

        return $this;
    }

    /**
     * Get the value of the EarliestShipDate property.
     *
     * @return XMLGregorianCalendar earliestShipDate
     */
    public function getEarliestShipDate()
    {
        return $this->_fields['EarliestShipDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestShipDate property.
     *
     * @param string earliestShipDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEarliestShipDate($value)
    {
        $this->_fields['EarliestShipDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EarliestShipDate is set.
     *
     * @return true if EarliestShipDate is set
     */
    public function isSetEarliestShipDate()
    {
        return null !== $this->_fields['EarliestShipDate']['FieldValue'];
    }

    /**
     * Set the value of EarliestShipDate, return this.
     *
     * @param earliestShipDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEarliestShipDate($value)
    {
        $this->setEarliestShipDate($value);

        return $this;
    }

    /**
     * Get the value of the LatestShipDate property.
     *
     * @return XMLGregorianCalendar latestShipDate
     */
    public function getLatestShipDate()
    {
        return $this->_fields['LatestShipDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestShipDate property.
     *
     * @param string latestShipDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLatestShipDate($value)
    {
        $this->_fields['LatestShipDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LatestShipDate is set.
     *
     * @return true if LatestShipDate is set
     */
    public function isSetLatestShipDate()
    {
        return null !== $this->_fields['LatestShipDate']['FieldValue'];
    }

    /**
     * Set the value of LatestShipDate, return this.
     *
     * @param latestShipDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLatestShipDate($value)
    {
        $this->setLatestShipDate($value);

        return $this;
    }

    /**
     * Get the value of the EarliestDeliveryDate property.
     *
     * @return XMLGregorianCalendar earliestDeliveryDate
     */
    public function getEarliestDeliveryDate()
    {
        return $this->_fields['EarliestDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestDeliveryDate property.
     *
     * @param string earliestDeliveryDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEarliestDeliveryDate($value)
    {
        $this->_fields['EarliestDeliveryDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EarliestDeliveryDate is set.
     *
     * @return true if EarliestDeliveryDate is set
     */
    public function isSetEarliestDeliveryDate()
    {
        return null !== $this->_fields['EarliestDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of EarliestDeliveryDate, return this.
     *
     * @param earliestDeliveryDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEarliestDeliveryDate($value)
    {
        $this->setEarliestDeliveryDate($value);

        return $this;
    }

    /**
     * Get the value of the LatestDeliveryDate property.
     *
     * @return XMLGregorianCalendar latestDeliveryDate
     */
    public function getLatestDeliveryDate()
    {
        return $this->_fields['LatestDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestDeliveryDate property.
     *
     * @param string latestDeliveryDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLatestDeliveryDate($value)
    {
        $this->_fields['LatestDeliveryDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LatestDeliveryDate is set.
     *
     * @return true if LatestDeliveryDate is set
     */
    public function isSetLatestDeliveryDate()
    {
        return null !== $this->_fields['LatestDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of LatestDeliveryDate, return this.
     *
     * @param latestDeliveryDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLatestDeliveryDate($value)
    {
        $this->setLatestDeliveryDate($value);

        return $this;
    }

    /**
     * Check the value of IsBusinessOrder.
     *
     * @return true if IsBusinessOrder is set to true
     */
    public function isIsBusinessOrder()
    {
        return null !== $this->_fields['IsBusinessOrder']['FieldValue'] && $this->_fields['IsBusinessOrder']['FieldValue'];
    }

    /**
     * Get the value of the IsBusinessOrder property.
     *
     * @return bool isBusinessOrder
     */
    public function getIsBusinessOrder()
    {
        return $this->_fields['IsBusinessOrder']['FieldValue'];
    }

    /**
     * Set the value of the IsBusinessOrder property.
     *
     * @param bool isBusinessOrder
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsBusinessOrder($value)
    {
        $this->_fields['IsBusinessOrder']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsBusinessOrder is set.
     *
     * @return true if IsBusinessOrder is set
     */
    public function isSetIsBusinessOrder()
    {
        return null !== $this->_fields['IsBusinessOrder']['FieldValue'];
    }

    /**
     * Set the value of IsBusinessOrder, return this.
     *
     * @param isBusinessOrder
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsBusinessOrder($value)
    {
        $this->setIsBusinessOrder($value);

        return $this;
    }

    /**
     * Get the value of the PurchaseOrderNumber property.
     *
     * @return string purchaseOrderNumber
     */
    public function getPurchaseOrderNumber()
    {
        return $this->_fields['PurchaseOrderNumber']['FieldValue'];
    }

    /**
     * Set the value of the PurchaseOrderNumber property.
     *
     * @param string purchaseOrderNumber
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPurchaseOrderNumber($value)
    {
        $this->_fields['PurchaseOrderNumber']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PurchaseOrderNumber is set.
     *
     * @return true if PurchaseOrderNumber is set
     */
    public function isSetPurchaseOrderNumber()
    {
        return null !== $this->_fields['PurchaseOrderNumber']['FieldValue'];
    }

    /**
     * Set the value of PurchaseOrderNumber, return this.
     *
     * @param purchaseOrderNumber
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPurchaseOrderNumber($value)
    {
        $this->setPurchaseOrderNumber($value);

        return $this;
    }

    /**
     * Check the value of IsPrime.
     *
     * @return true if IsPrime is set to true
     */
    public function isIsPrime()
    {
        return null !== $this->_fields['IsPrime']['FieldValue'] && $this->_fields['IsPrime']['FieldValue'];
    }

    /**
     * Get the value of the IsPrime property.
     *
     * @return bool isPrime
     */
    public function getIsPrime()
    {
        return $this->_fields['IsPrime']['FieldValue'];
    }

    /**
     * Set the value of the IsPrime property.
     *
     * @param bool isPrime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsPrime($value)
    {
        $this->_fields['IsPrime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsPrime is set.
     *
     * @return true if IsPrime is set
     */
    public function isSetIsPrime()
    {
        return null !== $this->_fields['IsPrime']['FieldValue'];
    }

    /**
     * Set the value of IsPrime, return this.
     *
     * @param isPrime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsPrime($value)
    {
        $this->setIsPrime($value);

        return $this;
    }

    /**
     * Check the value of IsPremiumOrder.
     *
     * @return true if IsPremiumOrder is set to true
     */
    public function isIsPremiumOrder()
    {
        return null !== $this->_fields['IsPremiumOrder']['FieldValue'] && $this->_fields['IsPremiumOrder']['FieldValue'];
    }

    /**
     * Get the value of the IsPremiumOrder property.
     *
     * @return bool isPremiumOrder
     */
    public function getIsPremiumOrder()
    {
        return $this->_fields['IsPremiumOrder']['FieldValue'];
    }

    /**
     * Set the value of the IsPremiumOrder property.
     *
     * @param bool isPremiumOrder
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsPremiumOrder($value)
    {
        $this->_fields['IsPremiumOrder']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsPremiumOrder is set.
     *
     * @return true if IsPremiumOrder is set
     */
    public function isSetIsPremiumOrder()
    {
        return null !== $this->_fields['IsPremiumOrder']['FieldValue'];
    }

    /**
     * Set the value of IsPremiumOrder, return this.
     *
     * @param isPremiumOrder
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsPremiumOrder($value)
    {
        $this->setIsPremiumOrder($value);

        return $this;
    }

    /**
     * Get the value of the ReplacedOrderId property.
     *
     * @return string replacedOrderId
     */
    public function getReplacedOrderId()
    {
        return $this->_fields['ReplacedOrderId']['FieldValue'];
    }

    /**
     * Set the value of the ReplacedOrderId property.
     *
     * @param string replacedOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReplacedOrderId($value)
    {
        $this->_fields['ReplacedOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReplacedOrderId is set.
     *
     * @return true if ReplacedOrderId is set
     */
    public function isSetReplacedOrderId()
    {
        return null !== $this->_fields['ReplacedOrderId']['FieldValue'];
    }

    /**
     * Set the value of ReplacedOrderId, return this.
     *
     * @param replacedOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReplacedOrderId($value)
    {
        $this->setReplacedOrderId($value);

        return $this;
    }

    /**
     * Check the value of IsReplacementOrder.
     *
     * @return true if IsReplacementOrder is set to true
     */
    public function isIsReplacementOrder()
    {
        return null !== $this->_fields['IsReplacementOrder']['FieldValue'] && $this->_fields['IsReplacementOrder']['FieldValue'];
    }

    /**
     * Get the value of the IsReplacementOrder property.
     *
     * @return bool isReplacementOrder
     */
    public function getIsReplacementOrder()
    {
        return $this->_fields['IsReplacementOrder']['FieldValue'];
    }

    /**
     * Set the value of the IsReplacementOrder property.
     *
     * @param bool isReplacementOrder
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsReplacementOrder($value)
    {
        $this->_fields['IsReplacementOrder']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsReplacementOrder is set.
     *
     * @return true if IsReplacementOrder is set
     */
    public function isSetIsReplacementOrder()
    {
        return null !== $this->_fields['IsReplacementOrder']['FieldValue'];
    }

    /**
     * Set the value of IsReplacementOrder, return this.
     *
     * @param isReplacementOrder
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsReplacementOrder($value)
    {
        $this->setIsReplacementOrder($value);

        return $this;
    }

    /**
     * Get the value of the PromiseResponseDueDate property.
     *
     * @return XMLGregorianCalendar promiseResponseDueDate
     */
    public function getPromiseResponseDueDate()
    {
        return $this->_fields['PromiseResponseDueDate']['FieldValue'];
    }

    /**
     * Set the value of the PromiseResponseDueDate property.
     *
     * @param string promiseResponseDueDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromiseResponseDueDate($value)
    {
        $this->_fields['PromiseResponseDueDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PromiseResponseDueDate is set.
     *
     * @return true if PromiseResponseDueDate is set
     */
    public function isSetPromiseResponseDueDate()
    {
        return null !== $this->_fields['PromiseResponseDueDate']['FieldValue'];
    }

    /**
     * Set the value of PromiseResponseDueDate, return this.
     *
     * @param promiseResponseDueDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPromiseResponseDueDate($value)
    {
        $this->setPromiseResponseDueDate($value);

        return $this;
    }

    /**
     * Check the value of IsEstimatedShipDateSet.
     *
     * @return true if IsEstimatedShipDateSet is set to true
     */
    public function isIsEstimatedShipDateSet()
    {
        return null !== $this->_fields['IsEstimatedShipDateSet']['FieldValue'] && $this->_fields['IsEstimatedShipDateSet']['FieldValue'];
    }

    /**
     * Get the value of the IsEstimatedShipDateSet property.
     *
     * @return bool isEstimatedShipDateSet
     */
    public function getIsEstimatedShipDateSet()
    {
        return $this->_fields['IsEstimatedShipDateSet']['FieldValue'];
    }

    /**
     * Set the value of the IsEstimatedShipDateSet property.
     *
     * @param bool isEstimatedShipDateSet
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsEstimatedShipDateSet($value)
    {
        $this->_fields['IsEstimatedShipDateSet']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsEstimatedShipDateSet is set.
     *
     * @return true if IsEstimatedShipDateSet is set
     */
    public function isSetIsEstimatedShipDateSet()
    {
        return null !== $this->_fields['IsEstimatedShipDateSet']['FieldValue'];
    }

    /**
     * Set the value of IsEstimatedShipDateSet, return this.
     *
     * @param isEstimatedShipDateSet
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsEstimatedShipDateSet($value)
    {
        $this->setIsEstimatedShipDateSet($value);

        return $this;
    }
}
