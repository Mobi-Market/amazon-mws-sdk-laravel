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
 * UpdateReportAcknowledgementsRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>ReportIdList: IdList</li>
 * <li>Acknowledged: bool</li>
 *
 * </ul>
 */
class UpdateReportAcknowledgementsRequest extends Model
{
    /**
     * Construct new UpdateReportAcknowledgementsRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportIdList: IdList</li>
     * <li>Acknowledged: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Marketplace'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReportIdList' => ['FieldValue' => null, 'FieldType' => 'IdList'],
            'Acknowledged' => ['FieldValue' => null, 'FieldType' => 'bool'],
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
     * @return UpdateReportAcknowledgementsRequest instance
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
     * @return UpdateReportAcknowledgementsRequest instance
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
     * @return UpdateReportAcknowledgementsRequest instance
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
     * Gets the value of the ReportIdList.
     *
     * @return IdList ReportIdList
     */
    public function getReportIdList()
    {
        return $this->fields['ReportIdList']['FieldValue'];
    }

    /**
     * Sets the value of the ReportIdList.
     *
     * @param IdList ReportIdList
     * @param mixed $value
     */
    public function setReportIdList($value): void
    {
        $this->fields['ReportIdList']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the ReportIdList  and returns this instance.
     *
     * @param IdList $value ReportIdList
     *
     * @return UpdateReportAcknowledgementsRequest instance
     */
    public function withReportIdList($value)
    {
        $this->setReportIdList($value);

        return $this;
    }

    /**
     * Checks if ReportIdList  is set.
     *
     * @return bool true if ReportIdList property is set
     */
    public function isSetReportIdList()
    {
        return null !== $this->fields['ReportIdList']['FieldValue'];
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
     * @return UpdateReportAcknowledgementsRequest instance
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
}
