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
 * GetReportRequestCountRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>ReportTypeList: TypeList</li>
 * <li>ReportProcessingStatusList: StatusList</li>
 * <li>RequestedFromDate: string</li>
 * <li>RequestedToDate: string</li>
 *
 * </ul>
 */
class GetReportRequestCountRequest extends Model
{
    /**
     * Construct new GetReportRequestCountRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportTypeList: TypeList</li>
     * <li>ReportProcessingStatusList: StatusList</li>
     * <li>RequestedFromDate: string</li>
     * <li>RequestedToDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Marketplace'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'                   => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReportTypeList'             => ['FieldValue' => null, 'FieldType' => 'TypeList'],
            'ReportProcessingStatusList' => ['FieldValue' => null, 'FieldType' => 'StatusList'],
            'RequestedFromDate'          => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'RequestedToDate'            => ['FieldValue' => null, 'FieldType' => 'DateTime'],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the Marketplace property.
     *
     * @return string Marketplace
     */
    public function getMarketplace()
    {
        return $this->fields['Marketplace']['FieldValue'];
    }

    /**
     * Sets the value of the Marketplace property.
     *
     * @param string Marketplace
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplace($value)
    {
        $this->fields['Marketplace']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Marketplace and returns this instance.
     *
     * @param string $value Marketplace
     *
     * @return GetReportRequestCountRequest instance
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);

        return $this;
    }

    /**
     * Checks if Marketplace is set.
     *
     * @return bool true if Marketplace  is set
     */
    public function isSetMarketplace()
    {
        return null !== $this->fields['Marketplace']['FieldValue'];
    }

    /**
     * Gets the value of the Merchant property.
     *
     * @return string Merchant
     */
    public function getMerchant()
    {
        return $this->fields['Merchant']['FieldValue'];
    }

    /**
     * Sets the value of the Merchant property.
     *
     * @param string Merchant
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMerchant($value)
    {
        $this->fields['Merchant']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Merchant and returns this instance.
     *
     * @param string $value Merchant
     *
     * @return GetReportRequestCountRequest instance
     */
    public function withMerchant($value)
    {
        $this->setMerchant($value);

        return $this;
    }

    /**
     * Checks if Merchant is set.
     *
     * @return bool true if Merchant  is set
     */
    public function isSetMerchant()
    {
        return null !== $this->fields['Merchant']['FieldValue'];
    }

    /**
     * Gets the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Sets the value of the MWSAuthToken property.
     *
     * @param string MWSAuthToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the MWSAuthToken and returns this instance.
     *
     * @param string $value MWSAuthToken
     *
     * @return GetReportRequestCountRequest instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Checks if MWSAuthToken is set.
     *
     * @return bool true if MWSAuthToken  is set
     */
    public function isSetMWSAuthToken()
    {
        return null !== $this->fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Gets the value of the ReportTypeList.
     *
     * @return TypeList ReportTypeList
     */
    public function getReportTypeList()
    {
        return $this->fields['ReportTypeList']['FieldValue'];
    }

    /**
     * Sets the value of the ReportTypeList.
     *
     * @param TypeList ReportTypeList
     * @param mixed $value
     */
    public function setReportTypeList($value): void
    {
        $this->fields['ReportTypeList']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the ReportTypeList  and returns this instance.
     *
     * @param TypeList $value ReportTypeList
     *
     * @return GetReportRequestCountRequest instance
     */
    public function withReportTypeList($value)
    {
        $this->setReportTypeList($value);

        return $this;
    }

    /**
     * Checks if ReportTypeList  is set.
     *
     * @return bool true if ReportTypeList property is set
     */
    public function isSetReportTypeList()
    {
        return null !== $this->fields['ReportTypeList']['FieldValue'];
    }

    /**
     * Gets the value of the ReportProcessingStatusList.
     *
     * @return StatusList ReportProcessingStatusList
     */
    public function getReportProcessingStatusList()
    {
        return $this->fields['ReportProcessingStatusList']['FieldValue'];
    }

    /**
     * Sets the value of the ReportProcessingStatusList.
     *
     * @param StatusList ReportProcessingStatusList
     * @param mixed $value
     */
    public function setReportProcessingStatusList($value): void
    {
        $this->fields['ReportProcessingStatusList']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the ReportProcessingStatusList  and returns this instance.
     *
     * @param StatusList $value ReportProcessingStatusList
     *
     * @return GetReportRequestCountRequest instance
     */
    public function withReportProcessingStatusList($value)
    {
        $this->setReportProcessingStatusList($value);

        return $this;
    }

    /**
     * Checks if ReportProcessingStatusList  is set.
     *
     * @return bool true if ReportProcessingStatusList property is set
     */
    public function isSetReportProcessingStatusList()
    {
        return null !== $this->fields['ReportProcessingStatusList']['FieldValue'];
    }

    /**
     * Gets the value of the RequestedFromDate property.
     *
     * @return string RequestedFromDate
     */
    public function getRequestedFromDate()
    {
        return $this->fields['RequestedFromDate']['FieldValue'];
    }

    /**
     * Sets the value of the RequestedFromDate property.
     *
     * @param string RequestedFromDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRequestedFromDate($value)
    {
        $this->fields['RequestedFromDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the RequestedFromDate and returns this instance.
     *
     * @param string $value RequestedFromDate
     *
     * @return GetReportRequestCountRequest instance
     */
    public function withRequestedFromDate($value)
    {
        $this->setRequestedFromDate($value);

        return $this;
    }

    /**
     * Checks if RequestedFromDate is set.
     *
     * @return bool true if RequestedFromDate  is set
     */
    public function isSetRequestedFromDate()
    {
        return null !== $this->fields['RequestedFromDate']['FieldValue'];
    }

    /**
     * Gets the value of the RequestedToDate property.
     *
     * @return string RequestedToDate
     */
    public function getRequestedToDate()
    {
        return $this->fields['RequestedToDate']['FieldValue'];
    }

    /**
     * Sets the value of the RequestedToDate property.
     *
     * @param string RequestedToDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRequestedToDate($value)
    {
        $this->fields['RequestedToDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the RequestedToDate and returns this instance.
     *
     * @param string $value RequestedToDate
     *
     * @return GetReportRequestCountRequest instance
     */
    public function withRequestedToDate($value)
    {
        $this->setRequestedToDate($value);

        return $this;
    }

    /**
     * Checks if RequestedToDate is set.
     *
     * @return bool true if RequestedToDate  is set
     */
    public function isSetRequestedToDate()
    {
        return null !== $this->fields['RequestedToDate']['FieldValue'];
    }
}
