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
 * GetReportScheduleCountRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>ReportTypeList: TypeList</li>
 *
 * </ul>
 */
class GetReportScheduleCountRequest extends Model
{
    /**
     * Construct new GetReportScheduleCountRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportTypeList: TypeList</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Marketplace'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReportTypeList' => ['FieldValue' => null, 'FieldType' => 'TypeList'],
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
     * @return GetReportScheduleCountRequest instance
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
     * @return GetReportScheduleCountRequest instance
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
     * @return GetReportScheduleCountRequest instance
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
     * @return GetReportScheduleCountRequest instance
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
}
