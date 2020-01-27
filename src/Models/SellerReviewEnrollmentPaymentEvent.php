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
 * SellerReviewEnrollmentPaymentEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>PostedDate: string</li>
 * <li>EnrollmentId: string</li>
 * <li>ParentASIN: string</li>
 * <li>FeeComponent: FeeComponent</li>
 * <li>ChargeComponent: ChargeComponent</li>
 * <li>TotalAmount: Currency</li>
 *
 * </ul>
 */
class SellerReviewEnrollmentPaymentEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PostedDate'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'EnrollmentId'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'ParentASIN'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeeComponent'    => ['FieldValue' => null, 'FieldType' => 'FeeComponent'],
            'ChargeComponent' => ['FieldValue' => null, 'FieldType' => 'ChargeComponent'],
            'TotalAmount'     => ['FieldValue' => null, 'FieldType' => 'Currency'],
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
     * Get the value of the EnrollmentId property.
     *
     * @return string enrollmentId
     */
    public function getEnrollmentId()
    {
        return $this->_fields['EnrollmentId']['FieldValue'];
    }

    /**
     * Set the value of the EnrollmentId property.
     *
     * @param string enrollmentId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEnrollmentId($value)
    {
        $this->_fields['EnrollmentId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EnrollmentId is set.
     *
     * @return true if EnrollmentId is set
     */
    public function isSetEnrollmentId()
    {
        return null !== $this->_fields['EnrollmentId']['FieldValue'];
    }

    /**
     * Set the value of EnrollmentId, return this.
     *
     * @param enrollmentId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEnrollmentId($value)
    {
        $this->setEnrollmentId($value);

        return $this;
    }

    /**
     * Get the value of the ParentASIN property.
     *
     * @return string parentASIN
     */
    public function getParentASIN()
    {
        return $this->_fields['ParentASIN']['FieldValue'];
    }

    /**
     * Set the value of the ParentASIN property.
     *
     * @param string parentASIN
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setParentASIN($value)
    {
        $this->_fields['ParentASIN']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ParentASIN is set.
     *
     * @return true if ParentASIN is set
     */
    public function isSetParentASIN()
    {
        return null !== $this->_fields['ParentASIN']['FieldValue'];
    }

    /**
     * Set the value of ParentASIN, return this.
     *
     * @param parentASIN
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withParentASIN($value)
    {
        $this->setParentASIN($value);

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
