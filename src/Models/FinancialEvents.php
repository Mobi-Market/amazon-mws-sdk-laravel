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
 * FinancialEvents.
 *
 * Properties:
 * <ul>
 *
 * <li>ShipmentEventList: array</li>
 * <li>RefundEventList: array</li>
 * <li>GuaranteeClaimEventList: array</li>
 * <li>ChargebackEventList: array</li>
 * <li>PayWithAmazonEventList: array</li>
 * <li>ServiceProviderCreditEventList: array</li>
 * <li>RetrochargeEventList: array</li>
 * <li>RentalTransactionEventList: array</li>
 * <li>PerformanceBondRefundEventList: array</li>
 * <li>ProductAdsPaymentEventList: array</li>
 * <li>ServiceFeeEventList: array</li>
 * <li>SellerDealPaymentEventList: array</li>
 * <li>DebtRecoveryEventList: array</li>
 * <li>LoanServicingEventList: array</li>
 * <li>AdjustmentEventList: array</li>
 * <li>SAFETReimbursementEventList: array</li>
 * <li>SellerReviewEnrollmentPaymentEventList: array</li>
 * <li>FBALiquidationEventList: array</li>
 * <li>CouponPaymentEventList: array</li>
 * <li>ImagingServicesFeeEventList: array</li>
 * <li>NetworkComminglingTransactionEventList: array</li>
 * <li>AffordabilityExpenseEventList: array</li>
 * <li>AffordabilityExpenseReversalEventList: array</li>
 *
 * </ul>
 */
class FinancialEvents extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShipmentEventList'                      => ['FieldValue' => [], 'FieldType' => ['ShipmentEvent'], 'ListMemberName' => 'ShipmentEvent'],
            'RefundEventList'                        => ['FieldValue' => [], 'FieldType' => ['ShipmentEvent'], 'ListMemberName' => 'ShipmentEvent'],
            'GuaranteeClaimEventList'                => ['FieldValue' => [], 'FieldType' => ['ShipmentEvent'], 'ListMemberName' => 'ShipmentEvent'],
            'ChargebackEventList'                    => ['FieldValue' => [], 'FieldType' => ['ShipmentEvent'], 'ListMemberName' => 'ShipmentEvent'],
            'PayWithAmazonEventList'                 => ['FieldValue' => [], 'FieldType' => ['PayWithAmazonEvent'], 'ListMemberName' => 'PayWithAmazonEvent'],
            'ServiceProviderCreditEventList'         => ['FieldValue' => [], 'FieldType' => ['SolutionProviderCreditEvent'], 'ListMemberName' => 'SolutionProviderCreditEvent'],
            'RetrochargeEventList'                   => ['FieldValue' => [], 'FieldType' => ['RetrochargeEvent'], 'ListMemberName' => 'RetrochargeEvent'],
            'RentalTransactionEventList'             => ['FieldValue' => [], 'FieldType' => ['RentalTransactionEvent'], 'ListMemberName' => 'RentalTransactionEvent'],
            'PerformanceBondRefundEventList'         => ['FieldValue' => [], 'FieldType' => ['PerformanceBondRefundEvent'], 'ListMemberName' => 'PerformanceBondRefundEvent'],
            'ProductAdsPaymentEventList'             => ['FieldValue' => [], 'FieldType' => ['ProductAdsPaymentEvent'], 'ListMemberName' => 'ProductAdsPaymentEvent'],
            'ServiceFeeEventList'                    => ['FieldValue' => [], 'FieldType' => ['ServiceFeeEvent'], 'ListMemberName' => 'ServiceFeeEvent'],
            'SellerDealPaymentEventList'             => ['FieldValue' => [], 'FieldType' => ['SellerDealPaymentEvent'], 'ListMemberName' => 'SellerDealPaymentEvent'],
            'DebtRecoveryEventList'                  => ['FieldValue' => [], 'FieldType' => ['DebtRecoveryEvent'], 'ListMemberName' => 'DebtRecoveryEvent'],
            'LoanServicingEventList'                 => ['FieldValue' => [], 'FieldType' => ['LoanServicingEvent'], 'ListMemberName' => 'LoanServicingEvent'],
            'AdjustmentEventList'                    => ['FieldValue' => [], 'FieldType' => ['AdjustmentEvent'], 'ListMemberName' => 'AdjustmentEvent'],
            'SAFETReimbursementEventList'            => ['FieldValue' => [], 'FieldType' => ['SAFETReimbursementEvent'], 'ListMemberName' => 'SAFETReimbursementEvent'],
            'SellerReviewEnrollmentPaymentEventList' => ['FieldValue' => [], 'FieldType' => ['SellerReviewEnrollmentPaymentEvent'], 'ListMemberName' => 'SellerReviewEnrollmentPaymentEvent'],
            'FBALiquidationEventList'                => ['FieldValue' => [], 'FieldType' => ['FBALiquidationEvent'], 'ListMemberName' => 'FBALiquidationEvent'],
            'CouponPaymentEventList'                 => ['FieldValue' => [], 'FieldType' => ['CouponPaymentEvent'], 'ListMemberName' => 'CouponPaymentEvent'],
            'ImagingServicesFeeEventList'            => ['FieldValue' => [], 'FieldType' => ['ImagingServicesFeeEvent'], 'ListMemberName' => 'ImagingServicesFeeEvent'],
            'NetworkComminglingTransactionEventList' => ['FieldValue' => [], 'FieldType' => ['NetworkComminglingTransactionEvent'], 'ListMemberName' => 'NetworkComminglingTransactionEvent'],
            'AffordabilityExpenseEventList'          => ['FieldValue' => [], 'FieldType' => ['AffordabilityExpenseEvent'], 'ListMemberName' => 'AffordabilityExpenseEvent'],
            'AffordabilityExpenseReversalEventList'  => ['FieldValue' => [], 'FieldType' => ['AffordabilityExpenseEvent'], 'ListMemberName' => 'AffordabilityExpenseEvent'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ShipmentEventList property.
     *
     * @return List<ShipmentEvent> shipmentEventList
     */
    public function getShipmentEventList()
    {
        if (null == $this->_fields['ShipmentEventList']['FieldValue']) {
            $this->_fields['ShipmentEventList']['FieldValue'] = [];
        }

        return $this->_fields['ShipmentEventList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentEventList property.
     *
     * @param array shipmentEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ShipmentEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ShipmentEventList.
     */
    public function unsetShipmentEventList(): void
    {
        $this->_fields['ShipmentEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if ShipmentEventList is set.
     *
     * @return true if ShipmentEventList is set
     */
    public function isSetShipmentEventList()
    {
        return !empty($this->_fields['ShipmentEventList']['FieldValue']);
    }

    /**
     * Add values for ShipmentEventList, return this.
     *
     * @param shipmentEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withShipmentEventList()
    {
        foreach (\func_get_args() as $ShipmentEventList) {
            $this->_fields['ShipmentEventList']['FieldValue'][] = $ShipmentEventList;
        }

        return $this;
    }

    /**
     * Get the value of the RefundEventList property.
     *
     * @return List<ShipmentEvent> refundEventList
     */
    public function getRefundEventList()
    {
        if (null == $this->_fields['RefundEventList']['FieldValue']) {
            $this->_fields['RefundEventList']['FieldValue'] = [];
        }

        return $this->_fields['RefundEventList']['FieldValue'];
    }

    /**
     * Set the value of the RefundEventList property.
     *
     * @param array refundEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRefundEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['RefundEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear RefundEventList.
     */
    public function unsetRefundEventList(): void
    {
        $this->_fields['RefundEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if RefundEventList is set.
     *
     * @return true if RefundEventList is set
     */
    public function isSetRefundEventList()
    {
        return !empty($this->_fields['RefundEventList']['FieldValue']);
    }

    /**
     * Add values for RefundEventList, return this.
     *
     * @param refundEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withRefundEventList()
    {
        foreach (\func_get_args() as $RefundEventList) {
            $this->_fields['RefundEventList']['FieldValue'][] = $RefundEventList;
        }

        return $this;
    }

    /**
     * Get the value of the GuaranteeClaimEventList property.
     *
     * @return List<ShipmentEvent> guaranteeClaimEventList
     */
    public function getGuaranteeClaimEventList()
    {
        if (null == $this->_fields['GuaranteeClaimEventList']['FieldValue']) {
            $this->_fields['GuaranteeClaimEventList']['FieldValue'] = [];
        }

        return $this->_fields['GuaranteeClaimEventList']['FieldValue'];
    }

    /**
     * Set the value of the GuaranteeClaimEventList property.
     *
     * @param array guaranteeClaimEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGuaranteeClaimEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['GuaranteeClaimEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear GuaranteeClaimEventList.
     */
    public function unsetGuaranteeClaimEventList(): void
    {
        $this->_fields['GuaranteeClaimEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if GuaranteeClaimEventList is set.
     *
     * @return true if GuaranteeClaimEventList is set
     */
    public function isSetGuaranteeClaimEventList()
    {
        return !empty($this->_fields['GuaranteeClaimEventList']['FieldValue']);
    }

    /**
     * Add values for GuaranteeClaimEventList, return this.
     *
     * @param guaranteeClaimEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withGuaranteeClaimEventList()
    {
        foreach (\func_get_args() as $GuaranteeClaimEventList) {
            $this->_fields['GuaranteeClaimEventList']['FieldValue'][] = $GuaranteeClaimEventList;
        }

        return $this;
    }

    /**
     * Get the value of the ChargebackEventList property.
     *
     * @return List<ShipmentEvent> chargebackEventList
     */
    public function getChargebackEventList()
    {
        if (null == $this->_fields['ChargebackEventList']['FieldValue']) {
            $this->_fields['ChargebackEventList']['FieldValue'] = [];
        }

        return $this->_fields['ChargebackEventList']['FieldValue'];
    }

    /**
     * Set the value of the ChargebackEventList property.
     *
     * @param array chargebackEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setChargebackEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ChargebackEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ChargebackEventList.
     */
    public function unsetChargebackEventList(): void
    {
        $this->_fields['ChargebackEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if ChargebackEventList is set.
     *
     * @return true if ChargebackEventList is set
     */
    public function isSetChargebackEventList()
    {
        return !empty($this->_fields['ChargebackEventList']['FieldValue']);
    }

    /**
     * Add values for ChargebackEventList, return this.
     *
     * @param chargebackEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withChargebackEventList()
    {
        foreach (\func_get_args() as $ChargebackEventList) {
            $this->_fields['ChargebackEventList']['FieldValue'][] = $ChargebackEventList;
        }

        return $this;
    }

    /**
     * Get the value of the PayWithAmazonEventList property.
     *
     * @return List<PayWithAmazonEvent> payWithAmazonEventList
     */
    public function getPayWithAmazonEventList()
    {
        if (null == $this->_fields['PayWithAmazonEventList']['FieldValue']) {
            $this->_fields['PayWithAmazonEventList']['FieldValue'] = [];
        }

        return $this->_fields['PayWithAmazonEventList']['FieldValue'];
    }

    /**
     * Set the value of the PayWithAmazonEventList property.
     *
     * @param array payWithAmazonEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPayWithAmazonEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PayWithAmazonEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PayWithAmazonEventList.
     */
    public function unsetPayWithAmazonEventList(): void
    {
        $this->_fields['PayWithAmazonEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if PayWithAmazonEventList is set.
     *
     * @return true if PayWithAmazonEventList is set
     */
    public function isSetPayWithAmazonEventList()
    {
        return !empty($this->_fields['PayWithAmazonEventList']['FieldValue']);
    }

    /**
     * Add values for PayWithAmazonEventList, return this.
     *
     * @param payWithAmazonEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withPayWithAmazonEventList()
    {
        foreach (\func_get_args() as $PayWithAmazonEventList) {
            $this->_fields['PayWithAmazonEventList']['FieldValue'][] = $PayWithAmazonEventList;
        }

        return $this;
    }

    /**
     * Get the value of the ServiceProviderCreditEventList property.
     *
     * @return List<SolutionProviderCreditEvent> serviceProviderCreditEventList
     */
    public function getServiceProviderCreditEventList()
    {
        if (null == $this->_fields['ServiceProviderCreditEventList']['FieldValue']) {
            $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = [];
        }

        return $this->_fields['ServiceProviderCreditEventList']['FieldValue'];
    }

    /**
     * Set the value of the ServiceProviderCreditEventList property.
     *
     * @param array serviceProviderCreditEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setServiceProviderCreditEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ServiceProviderCreditEventList.
     */
    public function unsetServiceProviderCreditEventList(): void
    {
        $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if ServiceProviderCreditEventList is set.
     *
     * @return true if ServiceProviderCreditEventList is set
     */
    public function isSetServiceProviderCreditEventList()
    {
        return !empty($this->_fields['ServiceProviderCreditEventList']['FieldValue']);
    }

    /**
     * Add values for ServiceProviderCreditEventList, return this.
     *
     * @param serviceProviderCreditEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withServiceProviderCreditEventList()
    {
        foreach (\func_get_args() as $ServiceProviderCreditEventList) {
            $this->_fields['ServiceProviderCreditEventList']['FieldValue'][] = $ServiceProviderCreditEventList;
        }

        return $this;
    }

    /**
     * Get the value of the RetrochargeEventList property.
     *
     * @return List<RetrochargeEvent> retrochargeEventList
     */
    public function getRetrochargeEventList()
    {
        if (null == $this->_fields['RetrochargeEventList']['FieldValue']) {
            $this->_fields['RetrochargeEventList']['FieldValue'] = [];
        }

        return $this->_fields['RetrochargeEventList']['FieldValue'];
    }

    /**
     * Set the value of the RetrochargeEventList property.
     *
     * @param array retrochargeEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRetrochargeEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['RetrochargeEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear RetrochargeEventList.
     */
    public function unsetRetrochargeEventList(): void
    {
        $this->_fields['RetrochargeEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if RetrochargeEventList is set.
     *
     * @return true if RetrochargeEventList is set
     */
    public function isSetRetrochargeEventList()
    {
        return !empty($this->_fields['RetrochargeEventList']['FieldValue']);
    }

    /**
     * Add values for RetrochargeEventList, return this.
     *
     * @param retrochargeEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withRetrochargeEventList()
    {
        foreach (\func_get_args() as $RetrochargeEventList) {
            $this->_fields['RetrochargeEventList']['FieldValue'][] = $RetrochargeEventList;
        }

        return $this;
    }

    /**
     * Get the value of the RentalTransactionEventList property.
     *
     * @return List<RentalTransactionEvent> rentalTransactionEventList
     */
    public function getRentalTransactionEventList()
    {
        if (null == $this->_fields['RentalTransactionEventList']['FieldValue']) {
            $this->_fields['RentalTransactionEventList']['FieldValue'] = [];
        }

        return $this->_fields['RentalTransactionEventList']['FieldValue'];
    }

    /**
     * Set the value of the RentalTransactionEventList property.
     *
     * @param array rentalTransactionEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRentalTransactionEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['RentalTransactionEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear RentalTransactionEventList.
     */
    public function unsetRentalTransactionEventList(): void
    {
        $this->_fields['RentalTransactionEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if RentalTransactionEventList is set.
     *
     * @return true if RentalTransactionEventList is set
     */
    public function isSetRentalTransactionEventList()
    {
        return !empty($this->_fields['RentalTransactionEventList']['FieldValue']);
    }

    /**
     * Add values for RentalTransactionEventList, return this.
     *
     * @param rentalTransactionEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withRentalTransactionEventList()
    {
        foreach (\func_get_args() as $RentalTransactionEventList) {
            $this->_fields['RentalTransactionEventList']['FieldValue'][] = $RentalTransactionEventList;
        }

        return $this;
    }

    /**
     * Get the value of the PerformanceBondRefundEventList property.
     *
     * @return List<PerformanceBondRefundEvent> performanceBondRefundEventList
     */
    public function getPerformanceBondRefundEventList()
    {
        if (null == $this->_fields['PerformanceBondRefundEventList']['FieldValue']) {
            $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = [];
        }

        return $this->_fields['PerformanceBondRefundEventList']['FieldValue'];
    }

    /**
     * Set the value of the PerformanceBondRefundEventList property.
     *
     * @param array performanceBondRefundEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPerformanceBondRefundEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PerformanceBondRefundEventList.
     */
    public function unsetPerformanceBondRefundEventList(): void
    {
        $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if PerformanceBondRefundEventList is set.
     *
     * @return true if PerformanceBondRefundEventList is set
     */
    public function isSetPerformanceBondRefundEventList()
    {
        return !empty($this->_fields['PerformanceBondRefundEventList']['FieldValue']);
    }

    /**
     * Add values for PerformanceBondRefundEventList, return this.
     *
     * @param performanceBondRefundEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withPerformanceBondRefundEventList()
    {
        foreach (\func_get_args() as $PerformanceBondRefundEventList) {
            $this->_fields['PerformanceBondRefundEventList']['FieldValue'][] = $PerformanceBondRefundEventList;
        }

        return $this;
    }

    /**
     * Get the value of the ProductAdsPaymentEventList property.
     *
     * @return List<ProductAdsPaymentEvent> productAdsPaymentEventList
     */
    public function getProductAdsPaymentEventList()
    {
        if (null == $this->_fields['ProductAdsPaymentEventList']['FieldValue']) {
            $this->_fields['ProductAdsPaymentEventList']['FieldValue'] = [];
        }

        return $this->_fields['ProductAdsPaymentEventList']['FieldValue'];
    }

    /**
     * Set the value of the ProductAdsPaymentEventList property.
     *
     * @param array productAdsPaymentEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProductAdsPaymentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ProductAdsPaymentEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ProductAdsPaymentEventList.
     */
    public function unsetProductAdsPaymentEventList(): void
    {
        $this->_fields['ProductAdsPaymentEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if ProductAdsPaymentEventList is set.
     *
     * @return true if ProductAdsPaymentEventList is set
     */
    public function isSetProductAdsPaymentEventList()
    {
        return !empty($this->_fields['ProductAdsPaymentEventList']['FieldValue']);
    }

    /**
     * Add values for ProductAdsPaymentEventList, return this.
     *
     * @param productAdsPaymentEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withProductAdsPaymentEventList()
    {
        foreach (\func_get_args() as $ProductAdsPaymentEventList) {
            $this->_fields['ProductAdsPaymentEventList']['FieldValue'][] = $ProductAdsPaymentEventList;
        }

        return $this;
    }

    /**
     * Get the value of the ServiceFeeEventList property.
     *
     * @return List<ServiceFeeEvent> serviceFeeEventList
     */
    public function getServiceFeeEventList()
    {
        if (null == $this->_fields['ServiceFeeEventList']['FieldValue']) {
            $this->_fields['ServiceFeeEventList']['FieldValue'] = [];
        }

        return $this->_fields['ServiceFeeEventList']['FieldValue'];
    }

    /**
     * Set the value of the ServiceFeeEventList property.
     *
     * @param array serviceFeeEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setServiceFeeEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ServiceFeeEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ServiceFeeEventList.
     */
    public function unsetServiceFeeEventList(): void
    {
        $this->_fields['ServiceFeeEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if ServiceFeeEventList is set.
     *
     * @return true if ServiceFeeEventList is set
     */
    public function isSetServiceFeeEventList()
    {
        return !empty($this->_fields['ServiceFeeEventList']['FieldValue']);
    }

    /**
     * Add values for ServiceFeeEventList, return this.
     *
     * @param serviceFeeEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withServiceFeeEventList()
    {
        foreach (\func_get_args() as $ServiceFeeEventList) {
            $this->_fields['ServiceFeeEventList']['FieldValue'][] = $ServiceFeeEventList;
        }

        return $this;
    }

    /**
     * Get the value of the SellerDealPaymentEventList property.
     *
     * @return List<SellerDealPaymentEvent> sellerDealPaymentEventList
     */
    public function getSellerDealPaymentEventList()
    {
        if (null == $this->_fields['SellerDealPaymentEventList']['FieldValue']) {
            $this->_fields['SellerDealPaymentEventList']['FieldValue'] = [];
        }

        return $this->_fields['SellerDealPaymentEventList']['FieldValue'];
    }

    /**
     * Set the value of the SellerDealPaymentEventList property.
     *
     * @param array sellerDealPaymentEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerDealPaymentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['SellerDealPaymentEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear SellerDealPaymentEventList.
     */
    public function unsetSellerDealPaymentEventList(): void
    {
        $this->_fields['SellerDealPaymentEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if SellerDealPaymentEventList is set.
     *
     * @return true if SellerDealPaymentEventList is set
     */
    public function isSetSellerDealPaymentEventList()
    {
        return !empty($this->_fields['SellerDealPaymentEventList']['FieldValue']);
    }

    /**
     * Add values for SellerDealPaymentEventList, return this.
     *
     * @param sellerDealPaymentEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withSellerDealPaymentEventList()
    {
        foreach (\func_get_args() as $SellerDealPaymentEventList) {
            $this->_fields['SellerDealPaymentEventList']['FieldValue'][] = $SellerDealPaymentEventList;
        }

        return $this;
    }

    /**
     * Get the value of the DebtRecoveryEventList property.
     *
     * @return List<DebtRecoveryEvent> debtRecoveryEventList
     */
    public function getDebtRecoveryEventList()
    {
        if (null == $this->_fields['DebtRecoveryEventList']['FieldValue']) {
            $this->_fields['DebtRecoveryEventList']['FieldValue'] = [];
        }

        return $this->_fields['DebtRecoveryEventList']['FieldValue'];
    }

    /**
     * Set the value of the DebtRecoveryEventList property.
     *
     * @param array debtRecoveryEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDebtRecoveryEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['DebtRecoveryEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear DebtRecoveryEventList.
     */
    public function unsetDebtRecoveryEventList(): void
    {
        $this->_fields['DebtRecoveryEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if DebtRecoveryEventList is set.
     *
     * @return true if DebtRecoveryEventList is set
     */
    public function isSetDebtRecoveryEventList()
    {
        return !empty($this->_fields['DebtRecoveryEventList']['FieldValue']);
    }

    /**
     * Add values for DebtRecoveryEventList, return this.
     *
     * @param debtRecoveryEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withDebtRecoveryEventList()
    {
        foreach (\func_get_args() as $DebtRecoveryEventList) {
            $this->_fields['DebtRecoveryEventList']['FieldValue'][] = $DebtRecoveryEventList;
        }

        return $this;
    }

    /**
     * Get the value of the LoanServicingEventList property.
     *
     * @return List<LoanServicingEvent> loanServicingEventList
     */
    public function getLoanServicingEventList()
    {
        if (null == $this->_fields['LoanServicingEventList']['FieldValue']) {
            $this->_fields['LoanServicingEventList']['FieldValue'] = [];
        }

        return $this->_fields['LoanServicingEventList']['FieldValue'];
    }

    /**
     * Set the value of the LoanServicingEventList property.
     *
     * @param array loanServicingEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLoanServicingEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['LoanServicingEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear LoanServicingEventList.
     */
    public function unsetLoanServicingEventList(): void
    {
        $this->_fields['LoanServicingEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if LoanServicingEventList is set.
     *
     * @return true if LoanServicingEventList is set
     */
    public function isSetLoanServicingEventList()
    {
        return !empty($this->_fields['LoanServicingEventList']['FieldValue']);
    }

    /**
     * Add values for LoanServicingEventList, return this.
     *
     * @param loanServicingEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withLoanServicingEventList()
    {
        foreach (\func_get_args() as $LoanServicingEventList) {
            $this->_fields['LoanServicingEventList']['FieldValue'][] = $LoanServicingEventList;
        }

        return $this;
    }

    /**
     * Get the value of the AdjustmentEventList property.
     *
     * @return List<AdjustmentEvent> adjustmentEventList
     */
    public function getAdjustmentEventList()
    {
        if (null == $this->_fields['AdjustmentEventList']['FieldValue']) {
            $this->_fields['AdjustmentEventList']['FieldValue'] = [];
        }

        return $this->_fields['AdjustmentEventList']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentEventList property.
     *
     * @param array adjustmentEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAdjustmentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AdjustmentEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AdjustmentEventList.
     */
    public function unsetAdjustmentEventList(): void
    {
        $this->_fields['AdjustmentEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if AdjustmentEventList is set.
     *
     * @return true if AdjustmentEventList is set
     */
    public function isSetAdjustmentEventList()
    {
        return !empty($this->_fields['AdjustmentEventList']['FieldValue']);
    }

    /**
     * Add values for AdjustmentEventList, return this.
     *
     * @param adjustmentEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withAdjustmentEventList()
    {
        foreach (\func_get_args() as $AdjustmentEventList) {
            $this->_fields['AdjustmentEventList']['FieldValue'][] = $AdjustmentEventList;
        }

        return $this;
    }

    /**
     * Get the value of the SAFETReimbursementEventList property.
     *
     * @return list<SAFETReimbursementEvent> SAFETReimbursementEventList
     */
    public function getSAFETReimbursementEventList()
    {
        if (null == $this->_fields['SAFETReimbursementEventList']['FieldValue']) {
            $this->_fields['SAFETReimbursementEventList']['FieldValue'] = [];
        }

        return $this->_fields['SAFETReimbursementEventList']['FieldValue'];
    }

    /**
     * Set the value of the SAFETReimbursementEventList property.
     *
     * @param array safetReimbursementEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSAFETReimbursementEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['SAFETReimbursementEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear SAFETReimbursementEventList.
     */
    public function unsetSAFETReimbursementEventList(): void
    {
        $this->_fields['SAFETReimbursementEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if SAFETReimbursementEventList is set.
     *
     * @return true if SAFETReimbursementEventList is set
     */
    public function isSetSAFETReimbursementEventList()
    {
        return !empty($this->_fields['SAFETReimbursementEventList']['FieldValue']);
    }

    /**
     * Add values for SAFETReimbursementEventList, return this.
     *
     * @param safetReimbursementEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withSAFETReimbursementEventList()
    {
        foreach (\func_get_args() as $SAFETReimbursementEventList) {
            $this->_fields['SAFETReimbursementEventList']['FieldValue'][] = $SAFETReimbursementEventList;
        }

        return $this;
    }

    /**
     * Get the value of the SellerReviewEnrollmentPaymentEventList property.
     *
     * @return List<SellerReviewEnrollmentPaymentEvent> sellerReviewEnrollmentPaymentEventList
     */
    public function getSellerReviewEnrollmentPaymentEventList()
    {
        if (null == $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue']) {
            $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'] = [];
        }

        return $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'];
    }

    /**
     * Set the value of the SellerReviewEnrollmentPaymentEventList property.
     *
     * @param array sellerReviewEnrollmentPaymentEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerReviewEnrollmentPaymentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear SellerReviewEnrollmentPaymentEventList.
     */
    public function unsetSellerReviewEnrollmentPaymentEventList(): void
    {
        $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if SellerReviewEnrollmentPaymentEventList is set.
     *
     * @return true if SellerReviewEnrollmentPaymentEventList is set
     */
    public function isSetSellerReviewEnrollmentPaymentEventList()
    {
        return !empty($this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue']);
    }

    /**
     * Add values for SellerReviewEnrollmentPaymentEventList, return this.
     *
     * @param sellerReviewEnrollmentPaymentEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withSellerReviewEnrollmentPaymentEventList()
    {
        foreach (\func_get_args() as $SellerReviewEnrollmentPaymentEventList) {
            $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'][] = $SellerReviewEnrollmentPaymentEventList;
        }

        return $this;
    }

    /**
     * Get the value of the FBALiquidationEventList property.
     *
     * @return list<FBALiquidationEvent> FBALiquidationEventList
     */
    public function getFBALiquidationEventList()
    {
        if (null == $this->_fields['FBALiquidationEventList']['FieldValue']) {
            $this->_fields['FBALiquidationEventList']['FieldValue'] = [];
        }

        return $this->_fields['FBALiquidationEventList']['FieldValue'];
    }

    /**
     * Set the value of the FBALiquidationEventList property.
     *
     * @param array fbaLiquidationEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFBALiquidationEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FBALiquidationEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear FBALiquidationEventList.
     */
    public function unsetFBALiquidationEventList(): void
    {
        $this->_fields['FBALiquidationEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if FBALiquidationEventList is set.
     *
     * @return true if FBALiquidationEventList is set
     */
    public function isSetFBALiquidationEventList()
    {
        return !empty($this->_fields['FBALiquidationEventList']['FieldValue']);
    }

    /**
     * Add values for FBALiquidationEventList, return this.
     *
     * @param fbaLiquidationEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withFBALiquidationEventList()
    {
        foreach (\func_get_args() as $FBALiquidationEventList) {
            $this->_fields['FBALiquidationEventList']['FieldValue'][] = $FBALiquidationEventList;
        }

        return $this;
    }

    /**
     * Get the value of the CouponPaymentEventList property.
     *
     * @return List<CouponPaymentEvent> couponPaymentEventList
     */
    public function getCouponPaymentEventList()
    {
        if (null == $this->_fields['CouponPaymentEventList']['FieldValue']) {
            $this->_fields['CouponPaymentEventList']['FieldValue'] = [];
        }

        return $this->_fields['CouponPaymentEventList']['FieldValue'];
    }

    /**
     * Set the value of the CouponPaymentEventList property.
     *
     * @param array couponPaymentEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCouponPaymentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['CouponPaymentEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear CouponPaymentEventList.
     */
    public function unsetCouponPaymentEventList(): void
    {
        $this->_fields['CouponPaymentEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if CouponPaymentEventList is set.
     *
     * @return true if CouponPaymentEventList is set
     */
    public function isSetCouponPaymentEventList()
    {
        return !empty($this->_fields['CouponPaymentEventList']['FieldValue']);
    }

    /**
     * Add values for CouponPaymentEventList, return this.
     *
     * @param couponPaymentEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withCouponPaymentEventList()
    {
        foreach (\func_get_args() as $CouponPaymentEventList) {
            $this->_fields['CouponPaymentEventList']['FieldValue'][] = $CouponPaymentEventList;
        }

        return $this;
    }

    /**
     * Get the value of the ImagingServicesFeeEventList property.
     *
     * @return List<ImagingServicesFeeEvent> imagingServicesFeeEventList
     */
    public function getImagingServicesFeeEventList()
    {
        if (null == $this->_fields['ImagingServicesFeeEventList']['FieldValue']) {
            $this->_fields['ImagingServicesFeeEventList']['FieldValue'] = [];
        }

        return $this->_fields['ImagingServicesFeeEventList']['FieldValue'];
    }

    /**
     * Set the value of the ImagingServicesFeeEventList property.
     *
     * @param array imagingServicesFeeEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setImagingServicesFeeEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ImagingServicesFeeEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ImagingServicesFeeEventList.
     */
    public function unsetImagingServicesFeeEventList(): void
    {
        $this->_fields['ImagingServicesFeeEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if ImagingServicesFeeEventList is set.
     *
     * @return true if ImagingServicesFeeEventList is set
     */
    public function isSetImagingServicesFeeEventList()
    {
        return !empty($this->_fields['ImagingServicesFeeEventList']['FieldValue']);
    }

    /**
     * Add values for ImagingServicesFeeEventList, return this.
     *
     * @param imagingServicesFeeEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withImagingServicesFeeEventList()
    {
        foreach (\func_get_args() as $ImagingServicesFeeEventList) {
            $this->_fields['ImagingServicesFeeEventList']['FieldValue'][] = $ImagingServicesFeeEventList;
        }

        return $this;
    }

    /**
     * Get the value of the NetworkComminglingTransactionEventList property.
     *
     * @return List<NetworkComminglingTransactionEvent> networkComminglingTransactionEventList
     */
    public function getNetworkComminglingTransactionEventList()
    {
        if (null == $this->_fields['NetworkComminglingTransactionEventList']['FieldValue']) {
            $this->_fields['NetworkComminglingTransactionEventList']['FieldValue'] = [];
        }

        return $this->_fields['NetworkComminglingTransactionEventList']['FieldValue'];
    }

    /**
     * Set the value of the NetworkComminglingTransactionEventList property.
     *
     * @param array networkComminglingTransactionEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNetworkComminglingTransactionEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['NetworkComminglingTransactionEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear NetworkComminglingTransactionEventList.
     */
    public function unsetNetworkComminglingTransactionEventList(): void
    {
        $this->_fields['NetworkComminglingTransactionEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if NetworkComminglingTransactionEventList is set.
     *
     * @return true if NetworkComminglingTransactionEventList is set
     */
    public function isSetNetworkComminglingTransactionEventList()
    {
        return !empty($this->_fields['NetworkComminglingTransactionEventList']['FieldValue']);
    }

    /**
     * Add values for NetworkComminglingTransactionEventList, return this.
     *
     * @param networkComminglingTransactionEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withNetworkComminglingTransactionEventList()
    {
        foreach (\func_get_args() as $NetworkComminglingTransactionEventList) {
            $this->_fields['NetworkComminglingTransactionEventList']['FieldValue'][] = $NetworkComminglingTransactionEventList;
        }

        return $this;
    }

    /**
     * Get the value of the AffordabilityExpenseEventList property.
     *
     * @return List<AffordabilityExpenseEvent> affordabilityExpenseEventList
     */
    public function getAffordabilityExpenseEventList()
    {
        if (null == $this->_fields['AffordabilityExpenseEventList']['FieldValue']) {
            $this->_fields['AffordabilityExpenseEventList']['FieldValue'] = [];
        }

        return $this->_fields['AffordabilityExpenseEventList']['FieldValue'];
    }

    /**
     * Set the value of the AffordabilityExpenseEventList property.
     *
     * @param array affordabilityExpenseEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAffordabilityExpenseEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AffordabilityExpenseEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AffordabilityExpenseEventList.
     */
    public function unsetAffordabilityExpenseEventList(): void
    {
        $this->_fields['AffordabilityExpenseEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if AffordabilityExpenseEventList is set.
     *
     * @return true if AffordabilityExpenseEventList is set
     */
    public function isSetAffordabilityExpenseEventList()
    {
        return !empty($this->_fields['AffordabilityExpenseEventList']['FieldValue']);
    }

    /**
     * Add values for AffordabilityExpenseEventList, return this.
     *
     * @param affordabilityExpenseEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withAffordabilityExpenseEventList()
    {
        foreach (\func_get_args() as $AffordabilityExpenseEventList) {
            $this->_fields['AffordabilityExpenseEventList']['FieldValue'][] = $AffordabilityExpenseEventList;
        }

        return $this;
    }

    /**
     * Get the value of the AffordabilityExpenseReversalEventList property.
     *
     * @return List<AffordabilityExpenseEvent> affordabilityExpenseReversalEventList
     */
    public function getAffordabilityExpenseReversalEventList()
    {
        if (null == $this->_fields['AffordabilityExpenseReversalEventList']['FieldValue']) {
            $this->_fields['AffordabilityExpenseReversalEventList']['FieldValue'] = [];
        }

        return $this->_fields['AffordabilityExpenseReversalEventList']['FieldValue'];
    }

    /**
     * Set the value of the AffordabilityExpenseReversalEventList property.
     *
     * @param array affordabilityExpenseReversalEventList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAffordabilityExpenseReversalEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AffordabilityExpenseReversalEventList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AffordabilityExpenseReversalEventList.
     */
    public function unsetAffordabilityExpenseReversalEventList(): void
    {
        $this->_fields['AffordabilityExpenseReversalEventList']['FieldValue'] = [];
    }

    /**
     * Check to see if AffordabilityExpenseReversalEventList is set.
     *
     * @return true if AffordabilityExpenseReversalEventList is set
     */
    public function isSetAffordabilityExpenseReversalEventList()
    {
        return !empty($this->_fields['AffordabilityExpenseReversalEventList']['FieldValue']);
    }

    /**
     * Add values for AffordabilityExpenseReversalEventList, return this.
     *
     * @param affordabilityExpenseReversalEventList
     *             New values to add
     *
     * @return $this instance
     */
    public function withAffordabilityExpenseReversalEventList()
    {
        foreach (\func_get_args() as $AffordabilityExpenseReversalEventList) {
            $this->_fields['AffordabilityExpenseReversalEventList']['FieldValue'][] = $AffordabilityExpenseReversalEventList;
        }

        return $this;
    }
}
