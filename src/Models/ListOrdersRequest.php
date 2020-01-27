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
 * ListOrdersRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>CreatedAfter: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedAfter: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>OrderStatus: array</li>
 * <li>MarketplaceId: array</li>
 * <li>FulfillmentChannel: array</li>
 * <li>PaymentMethod: array</li>
 * <li>BuyerEmail: string</li>
 * <li>SellerOrderId: string</li>
 * <li>MaxResultsPerPage: int</li>
 * <li>TFMShipmentStatus: array</li>
 * <li>EasyShipShipmentStatus: array</li>
 *
 * </ul>
 */
class ListOrdersRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'CreatedAfter'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'CreatedBefore'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'LastUpdatedAfter'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'LastUpdatedBefore'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderStatus'            => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'Status'],
            'MarketplaceId'          => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'Id'],
            'FulfillmentChannel'     => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'Channel'],
            'PaymentMethod'          => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'Method'],
            'BuyerEmail'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerOrderId'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'MaxResultsPerPage'      => ['FieldValue' => null, 'FieldType' => 'int'],
            'TFMShipmentStatus'      => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'Status'],
            'EasyShipShipmentStatus' => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'Status'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return string sellerId
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set
     */
    public function isSetSellerId()
    {
        return null !== $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);

        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set
     */
    public function isSetMWSAuthToken()
    {
        return null !== $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Get the value of the CreatedAfter property.
     *
     * @return XMLGregorianCalendar createdAfter
     */
    public function getCreatedAfter()
    {
        return $this->_fields['CreatedAfter']['FieldValue'];
    }

    /**
     * Set the value of the CreatedAfter property.
     *
     * @param string createdAfter
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCreatedAfter($value)
    {
        $this->_fields['CreatedAfter']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CreatedAfter is set.
     *
     * @return true if CreatedAfter is set
     */
    public function isSetCreatedAfter()
    {
        return null !== $this->_fields['CreatedAfter']['FieldValue'];
    }

    /**
     * Set the value of CreatedAfter, return this.
     *
     * @param createdAfter
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCreatedAfter($value)
    {
        $this->setCreatedAfter($value);

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
     * Get the value of the LastUpdatedAfter property.
     *
     * @return XMLGregorianCalendar lastUpdatedAfter
     */
    public function getLastUpdatedAfter()
    {
        return $this->_fields['LastUpdatedAfter']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedAfter property.
     *
     * @param string lastUpdatedAfter
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLastUpdatedAfter($value)
    {
        $this->_fields['LastUpdatedAfter']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LastUpdatedAfter is set.
     *
     * @return true if LastUpdatedAfter is set
     */
    public function isSetLastUpdatedAfter()
    {
        return null !== $this->_fields['LastUpdatedAfter']['FieldValue'];
    }

    /**
     * Set the value of LastUpdatedAfter, return this.
     *
     * @param lastUpdatedAfter
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLastUpdatedAfter($value)
    {
        $this->setLastUpdatedAfter($value);

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
     * Get the value of the OrderStatus property.
     *
     * @return List<String> orderStatus
     */
    public function getOrderStatus()
    {
        if (null == $this->_fields['OrderStatus']['FieldValue']) {
            $this->_fields['OrderStatus']['FieldValue'] = [];
        }

        return $this->_fields['OrderStatus']['FieldValue'];
    }

    /**
     * Set the value of the OrderStatus property.
     *
     * @param array orderStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OrderStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear OrderStatus.
     */
    public function unsetOrderStatus(): void
    {
        $this->_fields['OrderStatus']['FieldValue'] = [];
    }

    /**
     * Check to see if OrderStatus is set.
     *
     * @return true if OrderStatus is set
     */
    public function isSetOrderStatus()
    {
        return !empty($this->_fields['OrderStatus']['FieldValue']);
    }

    /**
     * Add values for OrderStatus, return this.
     *
     * @param orderStatus
     *             New values to add
     *
     * @return $this instance
     */
    public function withOrderStatus()
    {
        foreach (\func_get_args() as $OrderStatus) {
            $this->_fields['OrderStatus']['FieldValue'][] = $OrderStatus;
        }

        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return List<String> marketplaceId
     */
    public function getMarketplaceId()
    {
        if (null == $this->_fields['MarketplaceId']['FieldValue']) {
            $this->_fields['MarketplaceId']['FieldValue'] = [];
        }

        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param array marketplaceId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['MarketplaceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear MarketplaceId.
     */
    public function unsetMarketplaceId(): void
    {
        $this->_fields['MarketplaceId']['FieldValue'] = [];
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set
     */
    public function isSetMarketplaceId()
    {
        return !empty($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Add values for MarketplaceId, return this.
     *
     * @param marketplaceId
     *             New values to add
     *
     * @return $this instance
     */
    public function withMarketplaceId()
    {
        foreach (\func_get_args() as $MarketplaceId) {
            $this->_fields['MarketplaceId']['FieldValue'][] = $MarketplaceId;
        }

        return $this;
    }

    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return List<String> fulfillmentChannel
     */
    public function getFulfillmentChannel()
    {
        if (null == $this->_fields['FulfillmentChannel']['FieldValue']) {
            $this->_fields['FulfillmentChannel']['FieldValue'] = [];
        }

        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param array fulfillmentChannel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentChannel($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear FulfillmentChannel.
     */
    public function unsetFulfillmentChannel(): void
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = [];
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set
     */
    public function isSetFulfillmentChannel()
    {
        return !empty($this->_fields['FulfillmentChannel']['FieldValue']);
    }

    /**
     * Add values for FulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             New values to add
     *
     * @return $this instance
     */
    public function withFulfillmentChannel()
    {
        foreach (\func_get_args() as $FulfillmentChannel) {
            $this->_fields['FulfillmentChannel']['FieldValue'][] = $FulfillmentChannel;
        }

        return $this;
    }

    /**
     * Get the value of the PaymentMethod property.
     *
     * @return List<String> paymentMethod
     */
    public function getPaymentMethod()
    {
        if (null == $this->_fields['PaymentMethod']['FieldValue']) {
            $this->_fields['PaymentMethod']['FieldValue'] = [];
        }

        return $this->_fields['PaymentMethod']['FieldValue'];
    }

    /**
     * Set the value of the PaymentMethod property.
     *
     * @param array paymentMethod
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPaymentMethod($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PaymentMethod']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PaymentMethod.
     */
    public function unsetPaymentMethod(): void
    {
        $this->_fields['PaymentMethod']['FieldValue'] = [];
    }

    /**
     * Check to see if PaymentMethod is set.
     *
     * @return true if PaymentMethod is set
     */
    public function isSetPaymentMethod()
    {
        return !empty($this->_fields['PaymentMethod']['FieldValue']);
    }

    /**
     * Add values for PaymentMethod, return this.
     *
     * @param paymentMethod
     *             New values to add
     *
     * @return $this instance
     */
    public function withPaymentMethod()
    {
        foreach (\func_get_args() as $PaymentMethod) {
            $this->_fields['PaymentMethod']['FieldValue'][] = $PaymentMethod;
        }

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
     * Get the value of the MaxResultsPerPage property.
     *
     * @return int maxResultsPerPage
     */
    public function getMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'];
    }

    /**
     * Set the value of the MaxResultsPerPage property.
     *
     * @param int maxResultsPerPage
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMaxResultsPerPage($value)
    {
        $this->_fields['MaxResultsPerPage']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MaxResultsPerPage is set.
     *
     * @return true if MaxResultsPerPage is set
     */
    public function isSetMaxResultsPerPage()
    {
        return null !== $this->_fields['MaxResultsPerPage']['FieldValue'];
    }

    /**
     * Set the value of MaxResultsPerPage, return this.
     *
     * @param maxResultsPerPage
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMaxResultsPerPage($value)
    {
        $this->setMaxResultsPerPage($value);

        return $this;
    }

    /**
     * Get the value of the TFMShipmentStatus property.
     *
     * @return list<String> TFMShipmentStatus
     */
    public function getTFMShipmentStatus()
    {
        if (null == $this->_fields['TFMShipmentStatus']['FieldValue']) {
            $this->_fields['TFMShipmentStatus']['FieldValue'] = [];
        }

        return $this->_fields['TFMShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the TFMShipmentStatus property.
     *
     * @param array tfmShipmentStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTFMShipmentStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['TFMShipmentStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear TFMShipmentStatus.
     */
    public function unsetTFMShipmentStatus(): void
    {
        $this->_fields['TFMShipmentStatus']['FieldValue'] = [];
    }

    /**
     * Check to see if TFMShipmentStatus is set.
     *
     * @return true if TFMShipmentStatus is set
     */
    public function isSetTFMShipmentStatus()
    {
        return !empty($this->_fields['TFMShipmentStatus']['FieldValue']);
    }

    /**
     * Add values for TFMShipmentStatus, return this.
     *
     * @param tfmShipmentStatus
     *             New values to add
     *
     * @return $this instance
     */
    public function withTFMShipmentStatus()
    {
        foreach (\func_get_args() as $TFMShipmentStatus) {
            $this->_fields['TFMShipmentStatus']['FieldValue'][] = $TFMShipmentStatus;
        }

        return $this;
    }

    /**
     * Get the value of the EasyShipShipmentStatus property.
     *
     * @return List<String> easyShipShipmentStatus
     */
    public function getEasyShipShipmentStatus()
    {
        if (null == $this->_fields['EasyShipShipmentStatus']['FieldValue']) {
            $this->_fields['EasyShipShipmentStatus']['FieldValue'] = [];
        }

        return $this->_fields['EasyShipShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the EasyShipShipmentStatus property.
     *
     * @param array easyShipShipmentStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEasyShipShipmentStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['EasyShipShipmentStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear EasyShipShipmentStatus.
     */
    public function unsetEasyShipShipmentStatus(): void
    {
        $this->_fields['EasyShipShipmentStatus']['FieldValue'] = [];
    }

    /**
     * Check to see if EasyShipShipmentStatus is set.
     *
     * @return true if EasyShipShipmentStatus is set
     */
    public function isSetEasyShipShipmentStatus()
    {
        return !empty($this->_fields['EasyShipShipmentStatus']['FieldValue']);
    }

    /**
     * Add values for EasyShipShipmentStatus, return this.
     *
     * @param easyShipShipmentStatus
     *             New values to add
     *
     * @return $this instance
     */
    public function withEasyShipShipmentStatus()
    {
        foreach (\func_get_args() as $EasyShipShipmentStatus) {
            $this->_fields['EasyShipShipmentStatus']['FieldValue'][] = $EasyShipShipmentStatus;
        }

        return $this;
    }
}
