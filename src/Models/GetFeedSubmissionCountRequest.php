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
 * GetFeedSubmissionCountRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>FeedTypeList: TypeList</li>
 * <li>FeedProcessingStatusList: StatusList</li>
 * <li>SubmittedFromDate: string</li>
 * <li>SubmittedToDate: string</li>
 *
 * </ul>
 */
class GetFeedSubmissionCountRequest extends Model
{
    /**
     * Construct new GetFeedSubmissionCountRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>FeedTypeList: TypeList</li>
     * <li>FeedProcessingStatusList: StatusList</li>
     * <li>SubmittedFromDate: string</li>
     * <li>SubmittedToDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Marketplace'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeedTypeList'             => ['FieldValue' => null, 'FieldType' => 'TypeList'],
            'FeedProcessingStatusList' => ['FieldValue' => null, 'FieldType' => 'StatusList'],
            'SubmittedFromDate'        => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'SubmittedToDate'          => ['FieldValue' => null, 'FieldType' => 'DateTime'],
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
     * @return GetFeedSubmissionCountRequest instance
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
     * @return GetFeedSubmissionCountRequest instance
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
     * @return GetFeedSubmissionCountRequest instance
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
     * Gets the value of the FeedTypeList.
     *
     * @return TypeList FeedTypeList
     */
    public function getFeedTypeList()
    {
        return $this->fields['FeedTypeList']['FieldValue'];
    }

    /**
     * Sets the value of the FeedTypeList.
     *
     * @param TypeList FeedTypeList
     * @param mixed $value
     */
    public function setFeedTypeList($value): void
    {
        $this->fields['FeedTypeList']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the FeedTypeList  and returns this instance.
     *
     * @param TypeList $value FeedTypeList
     *
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withFeedTypeList($value)
    {
        $this->setFeedTypeList($value);

        return $this;
    }

    /**
     * Checks if FeedTypeList  is set.
     *
     * @return bool true if FeedTypeList property is set
     */
    public function isSetFeedTypeList()
    {
        return null !== $this->fields['FeedTypeList']['FieldValue'];
    }

    /**
     * Gets the value of the FeedProcessingStatusList.
     *
     * @return StatusList FeedProcessingStatusList
     */
    public function getFeedProcessingStatusList()
    {
        return $this->fields['FeedProcessingStatusList']['FieldValue'];
    }

    /**
     * Sets the value of the FeedProcessingStatusList.
     *
     * @param StatusList FeedProcessingStatusList
     * @param mixed $value
     */
    public function setFeedProcessingStatusList($value): void
    {
        $this->fields['FeedProcessingStatusList']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the FeedProcessingStatusList  and returns this instance.
     *
     * @param StatusList $value FeedProcessingStatusList
     *
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withFeedProcessingStatusList($value)
    {
        $this->setFeedProcessingStatusList($value);

        return $this;
    }

    /**
     * Checks if FeedProcessingStatusList  is set.
     *
     * @return bool true if FeedProcessingStatusList property is set
     */
    public function isSetFeedProcessingStatusList()
    {
        return null !== $this->fields['FeedProcessingStatusList']['FieldValue'];
    }

    /**
     * Gets the value of the SubmittedFromDate property.
     *
     * @return string SubmittedFromDate
     */
    public function getSubmittedFromDate()
    {
        return $this->fields['SubmittedFromDate']['FieldValue'];
    }

    /**
     * Sets the value of the SubmittedFromDate property.
     *
     * @param string SubmittedFromDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSubmittedFromDate($value)
    {
        $this->fields['SubmittedFromDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the SubmittedFromDate and returns this instance.
     *
     * @param string $value SubmittedFromDate
     *
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withSubmittedFromDate($value)
    {
        $this->setSubmittedFromDate($value);

        return $this;
    }

    /**
     * Checks if SubmittedFromDate is set.
     *
     * @return bool true if SubmittedFromDate  is set
     */
    public function isSetSubmittedFromDate()
    {
        return null !== $this->fields['SubmittedFromDate']['FieldValue'];
    }

    /**
     * Gets the value of the SubmittedToDate property.
     *
     * @return string SubmittedToDate
     */
    public function getSubmittedToDate()
    {
        return $this->fields['SubmittedToDate']['FieldValue'];
    }

    /**
     * Sets the value of the SubmittedToDate property.
     *
     * @param string SubmittedToDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSubmittedToDate($value)
    {
        $this->fields['SubmittedToDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the SubmittedToDate and returns this instance.
     *
     * @param string $value SubmittedToDate
     *
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withSubmittedToDate($value)
    {
        $this->setSubmittedToDate($value);

        return $this;
    }

    /**
     * Checks if SubmittedToDate is set.
     *
     * @return bool true if SubmittedToDate  is set
     */
    public function isSetSubmittedToDate()
    {
        return null !== $this->fields['SubmittedToDate']['FieldValue'];
    }
}
