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
 * ImagingServicesFeeEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>ImagingRequestBillingItemID: string</li>
 * <li>ASIN: string</li>
 * <li>PostedDate: string</li>
 * <li>FeeList: array</li>
 *
 * </ul>
 */
class ImagingServicesFeeEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ImagingRequestBillingItemID' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ASIN'                        => ['FieldValue' => null, 'FieldType' => 'string'],
            'PostedDate'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeeList'                     => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ImagingRequestBillingItemID property.
     *
     * @return string imagingRequestBillingItemID
     */
    public function getImagingRequestBillingItemID()
    {
        return $this->_fields['ImagingRequestBillingItemID']['FieldValue'];
    }

    /**
     * Set the value of the ImagingRequestBillingItemID property.
     *
     * @param string imagingRequestBillingItemID
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setImagingRequestBillingItemID($value)
    {
        $this->_fields['ImagingRequestBillingItemID']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ImagingRequestBillingItemID is set.
     *
     * @return true if ImagingRequestBillingItemID is set
     */
    public function isSetImagingRequestBillingItemID()
    {
        return null !== $this->_fields['ImagingRequestBillingItemID']['FieldValue'];
    }

    /**
     * Set the value of ImagingRequestBillingItemID, return this.
     *
     * @param imagingRequestBillingItemID
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withImagingRequestBillingItemID($value)
    {
        $this->setImagingRequestBillingItemID($value);

        return $this;
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return string ASIN
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set
     */
    public function isSetASIN()
    {
        return null !== $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withASIN($value)
    {
        $this->setASIN($value);

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
}
