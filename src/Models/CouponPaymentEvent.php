<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2019-02-25
 * Generated: Wed Mar 13 08:17:11 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * CouponPaymentEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>PostedDate: string</li>
 * <li>CouponId: string</li>
 * <li>SellerCouponDescription: string</li>
 * <li>ClipOrRedemptionCount: int</li>
 * <li>PaymentEventId: string</li>
 * <li>FeeComponent: FeeComponent</li>
 * <li>ChargeComponent: ChargeComponent</li>
 * <li>TotalAmount: Currency</li>
 *
 * </ul>
 */
class CouponPaymentEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PostedDate'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'CouponId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerCouponDescription' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ClipOrRedemptionCount'   => ['FieldValue' => null, 'FieldType' => 'int'],
            'PaymentEventId'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeeComponent'            => ['FieldValue' => null, 'FieldType' => 'FeeComponent'],
            'ChargeComponent'         => ['FieldValue' => null, 'FieldType' => 'ChargeComponent'],
            'TotalAmount'             => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
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
     * Get the value of the CouponId property.
     *
     * @return string couponId
     */
    public function getCouponId()
    {
        return $this->_fields['CouponId']['FieldValue'];
    }

    /**
     * Set the value of the CouponId property.
     *
     * @param string couponId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCouponId($value)
    {
        $this->_fields['CouponId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CouponId is set.
     *
     * @return true if CouponId is set
     */
    public function isSetCouponId()
    {
        return null !== $this->_fields['CouponId']['FieldValue'];
    }

    /**
     * Set the value of CouponId, return this.
     *
     * @param couponId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCouponId($value)
    {
        $this->setCouponId($value);

        return $this;
    }

    /**
     * Get the value of the SellerCouponDescription property.
     *
     * @return string sellerCouponDescription
     */
    public function getSellerCouponDescription()
    {
        return $this->_fields['SellerCouponDescription']['FieldValue'];
    }

    /**
     * Set the value of the SellerCouponDescription property.
     *
     * @param string sellerCouponDescription
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerCouponDescription($value)
    {
        $this->_fields['SellerCouponDescription']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerCouponDescription is set.
     *
     * @return true if SellerCouponDescription is set
     */
    public function isSetSellerCouponDescription()
    {
        return null !== $this->_fields['SellerCouponDescription']['FieldValue'];
    }

    /**
     * Set the value of SellerCouponDescription, return this.
     *
     * @param sellerCouponDescription
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerCouponDescription($value)
    {
        $this->setSellerCouponDescription($value);

        return $this;
    }

    /**
     * Get the value of the ClipOrRedemptionCount property.
     *
     * @return Long clipOrRedemptionCount
     */
    public function getClipOrRedemptionCount()
    {
        return $this->_fields['ClipOrRedemptionCount']['FieldValue'];
    }

    /**
     * Set the value of the ClipOrRedemptionCount property.
     *
     * @param int clipOrRedemptionCount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setClipOrRedemptionCount($value)
    {
        $this->_fields['ClipOrRedemptionCount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ClipOrRedemptionCount is set.
     *
     * @return true if ClipOrRedemptionCount is set
     */
    public function isSetClipOrRedemptionCount()
    {
        return null !== $this->_fields['ClipOrRedemptionCount']['FieldValue'];
    }

    /**
     * Set the value of ClipOrRedemptionCount, return this.
     *
     * @param clipOrRedemptionCount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withClipOrRedemptionCount($value)
    {
        $this->setClipOrRedemptionCount($value);

        return $this;
    }

    /**
     * Get the value of the PaymentEventId property.
     *
     * @return string paymentEventId
     */
    public function getPaymentEventId()
    {
        return $this->_fields['PaymentEventId']['FieldValue'];
    }

    /**
     * Set the value of the PaymentEventId property.
     *
     * @param string paymentEventId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPaymentEventId($value)
    {
        $this->_fields['PaymentEventId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PaymentEventId is set.
     *
     * @return true if PaymentEventId is set
     */
    public function isSetPaymentEventId()
    {
        return null !== $this->_fields['PaymentEventId']['FieldValue'];
    }

    /**
     * Set the value of PaymentEventId, return this.
     *
     * @param paymentEventId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPaymentEventId($value)
    {
        $this->setPaymentEventId($value);

        return $this;
    }

    /**
     * Get the value of the FeeComponent property.
     *
     * @return FeeComponent feeComponent
     */
    public function getFeeComponent()
    {
        return $this->_fields['FeeComponent']['FieldValue'];
    }

    /**
     * Set the value of the FeeComponent property.
     *
     * @param FeeComponent feeComponent
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeeComponent($value)
    {
        $this->_fields['FeeComponent']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FeeComponent is set.
     *
     * @return true if FeeComponent is set
     */
    public function isSetFeeComponent()
    {
        return null !== $this->_fields['FeeComponent']['FieldValue'];
    }

    /**
     * Set the value of FeeComponent, return this.
     *
     * @param feeComponent
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFeeComponent($value)
    {
        $this->setFeeComponent($value);

        return $this;
    }

    /**
     * Get the value of the ChargeComponent property.
     *
     * @return ChargeComponent chargeComponent
     */
    public function getChargeComponent()
    {
        return $this->_fields['ChargeComponent']['FieldValue'];
    }

    /**
     * Set the value of the ChargeComponent property.
     *
     * @param ChargeComponent chargeComponent
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setChargeComponent($value)
    {
        $this->_fields['ChargeComponent']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ChargeComponent is set.
     *
     * @return true if ChargeComponent is set
     */
    public function isSetChargeComponent()
    {
        return null !== $this->_fields['ChargeComponent']['FieldValue'];
    }

    /**
     * Set the value of ChargeComponent, return this.
     *
     * @param chargeComponent
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withChargeComponent($value)
    {
        $this->setChargeComponent($value);

        return $this;
    }

    /**
     * Get the value of the TotalAmount property.
     *
     * @return Currency totalAmount
     */
    public function getTotalAmount()
    {
        return $this->_fields['TotalAmount']['FieldValue'];
    }

    /**
     * Set the value of the TotalAmount property.
     *
     * @param Currency totalAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTotalAmount($value)
    {
        $this->_fields['TotalAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TotalAmount is set.
     *
     * @return true if TotalAmount is set
     */
    public function isSetTotalAmount()
    {
        return null !== $this->_fields['TotalAmount']['FieldValue'];
    }

    /**
     * Set the value of TotalAmount, return this.
     *
     * @param totalAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTotalAmount($value)
    {
        $this->setTotalAmount($value);

        return $this;
    }
}
