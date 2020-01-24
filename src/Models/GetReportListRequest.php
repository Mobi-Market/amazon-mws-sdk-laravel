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
 * GetReportListRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MaxCount: int</li>
 * <li>ReportTypeList: TypeList</li>
 * <li>Acknowledged: bool</li>
 * <li>AvailableFromDate: string</li>
 * <li>AvailableToDate: string</li>
 * <li>ReportRequestIdList: IdList</li>
 *
 * </ul>
 */
class GetReportListRequest extends Model
{
    /**
     * Construct new GetReportListRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MaxCount: int</li>
     * <li>ReportTypeList: TypeList</li>
     * <li>Acknowledged: bool</li>
     * <li>AvailableFromDate: string</li>
     * <li>AvailableToDate: string</li>
     * <li>ReportRequestIdList: IdList</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Marketplace'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'MaxCount'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReportTypeList'      => ['FieldValue' => null, 'FieldType' => 'TypeList'],
            'Acknowledged'        => ['FieldValue' => null, 'FieldType' => 'bool'],
            'AvailableFromDate'   => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'AvailableToDate'     => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'ReportRequestIdList' => ['FieldValue' => null, 'FieldType' => 'IdList'],
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
     * @return GetReportListRequest instance
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
     * @return GetReportListRequest instance
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
     * @return GetReportListRequest instance
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
     * Gets the value of the MaxCount property.
     *
     * @return int MaxCount
     */
    public function getMaxCount()
    {
        return $this->fields['MaxCount']['FieldValue'];
    }

    /**
     * Sets the value of the MaxCount property.
     *
     * @param int MaxCount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMaxCount($value)
    {
        $this->fields['MaxCount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the MaxCount and returns this instance.
     *
     * @param int $value MaxCount
     *
     * @return GetReportListRequest instance
     */
    public function withMaxCount($value)
    {
        $this->setMaxCount($value);

        return $this;
    }

    /**
     * Checks if MaxCount is set.
     *
     * @return bool true if MaxCount  is set
     */
    public function isSetMaxCount()
    {
        return null !== $this->fields['MaxCount']['FieldValue'];
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
     * @return GetReportListRequest instance
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
     * Gets the value of the Acknowledged property.
     *
     * @return bool Acknowledged
     */
    public function getAcknowledged()
    {
        return $this->fields['Acknowledged']['FieldValue'];
    }

    /**
     * Sets the value of the Acknowledged property.
     *
     * @param bool Acknowledged
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAcknowledged($value)
    {
        $this->fields['Acknowledged']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Acknowledged and returns this instance.
     *
     * @param bool $value Acknowledged
     *
     * @return GetReportListRequest instance
     */
    public function withAcknowledged($value)
    {
        $this->setAcknowledged($value);

        return $this;
    }

    /**
     * Checks if Acknowledged is set.
     *
     * @return bool true if Acknowledged  is set
     */
    public function isSetAcknowledged()
    {
        return null !== $this->fields['Acknowledged']['FieldValue'];
    }

    /**
     * Gets the value of the AvailableFromDate property.
     *
     * @return string AvailableFromDate
     */
    public function getAvailableFromDate()
    {
        return $this->fields['AvailableFromDate']['FieldValue'];
    }

    /**
     * Sets the value of the AvailableFromDate property.
     *
     * @param string AvailableFromDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAvailableFromDate($value)
    {
        $this->fields['AvailableFromDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the AvailableFromDate and returns this instance.
     *
     * @param string $value AvailableFromDate
     *
     * @return GetReportListRequest instance
     */
    public function withAvailableFromDate($value)
    {
        $this->setAvailableFromDate($value);

        return $this;
    }

    /**
     * Checks if AvailableFromDate is set.
     *
     * @return bool true if AvailableFromDate  is set
     */
    public function isSetAvailableFromDate()
    {
        return null !== $this->fields['AvailableFromDate']['FieldValue'];
    }

    /**
     * Gets the value of the AvailableToDate property.
     *
     * @return string AvailableToDate
     */
    public function getAvailableToDate()
    {
        return $this->fields['AvailableToDate']['FieldValue'];
    }

    /**
     * Sets the value of the AvailableToDate property.
     *
     * @param string AvailableToDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAvailableToDate($value)
    {
        $this->fields['AvailableToDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the AvailableToDate and returns this instance.
     *
     * @param string $value AvailableToDate
     *
     * @return GetReportListRequest instance
     */
    public function withAvailableToDate($value)
    {
        $this->setAvailableToDate($value);

        return $this;
    }

    /**
     * Checks if AvailableToDate is set.
     *
     * @return bool true if AvailableToDate  is set
     */
    public function isSetAvailableToDate()
    {
        return null !== $this->fields['AvailableToDate']['FieldValue'];
    }

    /**
     * Gets the value of the ReportRequestIdList.
     *
     * @return IdList ReportRequestIdList
     */
    public function getReportRequestIdList()
    {
        return $this->fields['ReportRequestIdList']['FieldValue'];
    }

    /**
     * Sets the value of the ReportRequestIdList.
     *
     * @param IdList ReportRequestIdList
     * @param mixed $value
     */
    public function setReportRequestIdList($value): void
    {
        $this->fields['ReportRequestIdList']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the ReportRequestIdList  and returns this instance.
     *
     * @param IdList $value ReportRequestIdList
     *
     * @return GetReportListRequest instance
     */
    public function withReportRequestIdList($value)
    {
        $this->setReportRequestIdList($value);

        return $this;
    }

    /**
     * Checks if ReportRequestIdList  is set.
     *
     * @return bool true if ReportRequestIdList property is set
     */
    public function isSetReportRequestIdList()
    {
        return null !== $this->fields['ReportRequestIdList']['FieldValue'];
    }
}
