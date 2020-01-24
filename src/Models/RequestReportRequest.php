<?php

declare(strict_types=1);
/**
 *  PHP Version 5.
 *
 *  @category    Amazon
 *
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *
 *  @see        http://aws.amazon.com
 *
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *
 *  @version     2009-01-01
 */
/*

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 *
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * RequestReportRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MarketplaceIdList: IdList</li>
 * <li>ReportType: string</li>
 * <li>StartDate: string</li>
 * <li>EndDate: string</li>
 * <li>ReportOptions: string</li>
 *
 * </ul>
 */
class RequestReportRequest extends Model
{
    /**
     * Construct new RequestReportRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MarketplaceIdList: IdList</li>
     * <li>ReportType: string</li>
     * <li>StartDate: string</li>
     * <li>EndDate: string</li>
     * <li>ReportOptions: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Marketplace'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceIdList' => ['FieldValue' => null, 'FieldType' => 'IdList'],
            'ReportType'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'StartDate'         => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'EndDate'           => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'ReportOptions'     => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * @return RequestReportRequest instance
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
     * @return RequestReportRequest instance
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
     * @return RequestReportRequest instance
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
     * Gets the value of the MarketplaceIdList.
     *
     * @return IdList MarketplaceIdList
     */
    public function getMarketplaceIdList()
    {
        return $this->fields['MarketplaceIdList']['FieldValue'];
    }

    /**
     * Sets the value of the MarketplaceIdList.
     *
     * @param IdList MarketplaceIdList
     * @param mixed $value
     */
    public function setMarketplaceIdList($value): void
    {
        $marketplaceIdList = new IdList();
        $marketplaceIdList->setId($value['Id']);
        $this->fields['MarketplaceIdList']['FieldValue'] = $marketplaceIdList;
    }

    /**
     * Sets the value of the MarketplaceIdList  and returns this instance.
     *
     * @param IdList $value MarketplaceIdList
     *
     * @return RequestReportRequest instance
     */
    public function withMarketplaceIdList($value)
    {
        $this->setMarketplaceIdList($value);

        return $this;
    }

    /**
     * Checks if MarketplaceIdList  is set.
     *
     * @return bool true if MarketplaceIdList property is set
     */
    public function isSetMarketplaceIdList()
    {
        return null !== $this->fields['MarketplaceIdList']['FieldValue'];
    }

    /**
     * Gets the value of the ReportType property.
     *
     * @return string ReportType
     */
    public function getReportType()
    {
        return $this->fields['ReportType']['FieldValue'];
    }

    /**
     * Sets the value of the ReportType property.
     *
     * @param string ReportType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReportType($value)
    {
        $this->fields['ReportType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the ReportType and returns this instance.
     *
     * @param string $value ReportType
     *
     * @return RequestReportRequest instance
     */
    public function withReportType($value)
    {
        $this->setReportType($value);

        return $this;
    }

    /**
     * Checks if ReportType is set.
     *
     * @return bool true if ReportType  is set
     */
    public function isSetReportType()
    {
        return null !== $this->fields['ReportType']['FieldValue'];
    }

    /**
     * Gets the value of the StartDate property.
     *
     * @return string StartDate
     */
    public function getStartDate()
    {
        return $this->fields['StartDate']['FieldValue'];
    }

    /**
     * Sets the value of the StartDate property.
     *
     * @param string StartDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStartDate($value)
    {
        $this->fields['StartDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the StartDate and returns this instance.
     *
     * @param string $value StartDate
     *
     * @return RequestReportRequest instance
     */
    public function withStartDate($value)
    {
        $this->setStartDate($value);

        return $this;
    }

    /**
     * Checks if StartDate is set.
     *
     * @return bool true if StartDate  is set
     */
    public function isSetStartDate()
    {
        return null !== $this->fields['StartDate']['FieldValue'];
    }

    /**
     * Gets the value of the EndDate property.
     *
     * @return string EndDate
     */
    public function getEndDate()
    {
        return $this->fields['EndDate']['FieldValue'];
    }

    /**
     * Sets the value of the EndDate property.
     *
     * @param string EndDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEndDate($value)
    {
        $this->fields['EndDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the EndDate and returns this instance.
     *
     * @param string $value EndDate
     *
     * @return RequestReportRequest instance
     */
    public function withEndDate($value)
    {
        $this->setEndDate($value);

        return $this;
    }

    /**
     * Checks if EndDate is set.
     *
     * @return bool true if EndDate  is set
     */
    public function isSetEndDate()
    {
        return null !== $this->fields['EndDate']['FieldValue'];
    }

    /**
     * Gets the value of the ReportOptions property.
     *
     * @return string ReportOptions
     */
    public function getReportOptions()
    {
        return $this->fields['ReportOptions']['FieldValue'];
    }

    /**
     * Sets the value of the ReportOptions property.
     *
     * @param string ReportOptions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReportOptions($value)
    {
        $this->fields['ReportOptions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the ReportOptions and returns this instance.
     *
     * @param string $value ReportOptions
     *
     * @return RequestReportRequest instance
     */
    public function withReportOptions($value)
    {
        $this->setReportOptions($value);

        return $this;
    }

    /**
     * Checks if ReportOptions is set.
     *
     * @return bool true if ReportOptions  is set
     */
    public function isSetReportOptions()
    {
        return null !== $this->fields['ReportOptions']['FieldValue'];
    }
}
