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
 * PayWithAmazonEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerOrderId: string</li>
 * <li>TransactionPostedDate: string</li>
 * <li>BusinessObjectType: string</li>
 * <li>SalesChannel: string</li>
 * <li>Charge: ChargeComponent</li>
 * <li>FeeList: array</li>
 * <li>PaymentAmountType: string</li>
 * <li>AmountDescription: string</li>
 * <li>FulfillmentChannel: string</li>
 * <li>StoreName: string</li>
 *
 * </ul>
 */
class PayWithAmazonEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerOrderId'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'TransactionPostedDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'BusinessObjectType'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'SalesChannel'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'Charge'                => ['FieldValue' => null, 'FieldType' => 'ChargeComponent'],
            'FeeList'               => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
            'PaymentAmountType'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmountDescription'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentChannel'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'StoreName'             => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
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
     * Get the value of the TransactionPostedDate property.
     *
     * @return XMLGregorianCalendar transactionPostedDate
     */
    public function getTransactionPostedDate()
    {
        return $this->_fields['TransactionPostedDate']['FieldValue'];
    }

    /**
     * Set the value of the TransactionPostedDate property.
     *
     * @param string transactionPostedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransactionPostedDate($value)
    {
        $this->_fields['TransactionPostedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransactionPostedDate is set.
     *
     * @return true if TransactionPostedDate is set
     */
    public function isSetTransactionPostedDate()
    {
        return null !== $this->_fields['TransactionPostedDate']['FieldValue'];
    }

    /**
     * Set the value of TransactionPostedDate, return this.
     *
     * @param transactionPostedDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransactionPostedDate($value)
    {
        $this->setTransactionPostedDate($value);

        return $this;
    }

    /**
     * Get the value of the BusinessObjectType property.
     *
     * @return string businessObjectType
     */
    public function getBusinessObjectType()
    {
        return $this->_fields['BusinessObjectType']['FieldValue'];
    }

    /**
     * Set the value of the BusinessObjectType property.
     *
     * @param string businessObjectType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBusinessObjectType($value)
    {
        $this->_fields['BusinessObjectType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BusinessObjectType is set.
     *
     * @return true if BusinessObjectType is set
     */
    public function isSetBusinessObjectType()
    {
        return null !== $this->_fields['BusinessObjectType']['FieldValue'];
    }

    /**
     * Set the value of BusinessObjectType, return this.
     *
     * @param businessObjectType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBusinessObjectType($value)
    {
        $this->setBusinessObjectType($value);

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
     * Get the value of the Charge property.
     *
     * @return ChargeComponent charge
     */
    public function getCharge()
    {
        return $this->_fields['Charge']['FieldValue'];
    }

    /**
     * Set the value of the Charge property.
     *
     * @param ChargeComponent charge
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCharge($value)
    {
        $this->_fields['Charge']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Charge is set.
     *
     * @return true if Charge is set
     */
    public function isSetCharge()
    {
        return null !== $this->_fields['Charge']['FieldValue'];
    }

    /**
     * Set the value of Charge, return this.
     *
     * @param charge
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCharge($value)
    {
        $this->setCharge($value);

        return $this;
    }

    /**
     * Get the value of the FeeList property.
     *
     * @return List<FeeComponent> feeList
     */
    public function getFeeList()
    {
        if (null == $this->_fields['FeeList']['FieldValue']) {
            $this->_fields['FeeList']['FieldValue'] = [];
        }

        return $this->_fields['FeeList']['FieldValue'];
    }

    /**
     * Set the value of the FeeList property.
     *
     * @param array feeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FeeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear FeeList.
     */
    public function unsetFeeList(): void
    {
        $this->_fields['FeeList']['FieldValue'] = [];
    }

    /**
     * Check to see if FeeList is set.
     *
     * @return true if FeeList is set
     */
    public function isSetFeeList()
    {
        return !empty($this->_fields['FeeList']['FieldValue']);
    }

    /**
     * Add values for FeeList, return this.
     *
     * @param feeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withFeeList()
    {
        foreach (\func_get_args() as $FeeList) {
            $this->_fields['FeeList']['FieldValue'][] = $FeeList;
        }

        return $this;
    }

    /**
     * Get the value of the PaymentAmountType property.
     *
     * @return string paymentAmountType
     */
    public function getPaymentAmountType()
    {
        return $this->_fields['PaymentAmountType']['FieldValue'];
    }

    /**
     * Set the value of the PaymentAmountType property.
     *
     * @param string paymentAmountType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPaymentAmountType($value)
    {
        $this->_fields['PaymentAmountType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PaymentAmountType is set.
     *
     * @return true if PaymentAmountType is set
     */
    public function isSetPaymentAmountType()
    {
        return null !== $this->_fields['PaymentAmountType']['FieldValue'];
    }

    /**
     * Set the value of PaymentAmountType, return this.
     *
     * @param paymentAmountType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPaymentAmountType($value)
    {
        $this->setPaymentAmountType($value);

        return $this;
    }

    /**
     * Get the value of the AmountDescription property.
     *
     * @return string amountDescription
     */
    public function getAmountDescription()
    {
        return $this->_fields['AmountDescription']['FieldValue'];
    }

    /**
     * Set the value of the AmountDescription property.
     *
     * @param string amountDescription
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmountDescription($value)
    {
        $this->_fields['AmountDescription']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmountDescription is set.
     *
     * @return true if AmountDescription is set
     */
    public function isSetAmountDescription()
    {
        return null !== $this->_fields['AmountDescription']['FieldValue'];
    }

    /**
     * Set the value of AmountDescription, return this.
     *
     * @param amountDescription
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmountDescription($value)
    {
        $this->setAmountDescription($value);

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
     * Get the value of the StoreName property.
     *
     * @return string storeName
     */
    public function getStoreName()
    {
        return $this->_fields['StoreName']['FieldValue'];
    }

    /**
     * Set the value of the StoreName property.
     *
     * @param string storeName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStoreName($value)
    {
        $this->_fields['StoreName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if StoreName is set.
     *
     * @return true if StoreName is set
     */
    public function isSetStoreName()
    {
        return null !== $this->_fields['StoreName']['FieldValue'];
    }

    /**
     * Set the value of StoreName, return this.
     *
     * @param storeName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withStoreName($value)
    {
        $this->setStoreName($value);

        return $this;
    }
}
