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
 * ManageReportScheduleRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>ReportType: string</li>
 * <li>Schedule: string</li>
 * <li>ScheduleDate: string</li>
 *
 * </ul>
 */
class ManageReportScheduleRequest extends Model
{
    /**
     * Construct new ManageReportScheduleRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportType: string</li>
     * <li>Schedule: string</li>
     * <li>ScheduleDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Marketplace'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReportType'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'Schedule'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'ScheduleDate' => ['FieldValue' => null, 'FieldType' => 'DateTime'],
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
     * @return ManageReportScheduleRequest instance
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
     * @return ManageReportScheduleRequest instance
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
     * @return ManageReportScheduleRequest instance
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
     * @return ManageReportScheduleRequest instance
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
     * Gets the value of the Schedule property.
     *
     * @return string Schedule
     */
    public function getSchedule()
    {
        return $this->fields['Schedule']['FieldValue'];
    }

    /**
     * Sets the value of the Schedule property.
     *
     * @param string Schedule
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSchedule($value)
    {
        $this->fields['Schedule']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Schedule and returns this instance.
     *
     * @param string $value Schedule
     *
     * @return ManageReportScheduleRequest instance
     */
    public function withSchedule($value)
    {
        $this->setSchedule($value);

        return $this;
    }

    /**
     * Checks if Schedule is set.
     *
     * @return bool true if Schedule  is set
     */
    public function isSetSchedule()
    {
        return null !== $this->fields['Schedule']['FieldValue'];
    }

    /**
     * Gets the value of the ScheduleDate property.
     *
     * @return string ScheduleDate
     */
    public function getScheduleDate()
    {
        return $this->fields['ScheduleDate']['FieldValue'];
    }

    /**
     * Sets the value of the ScheduleDate property.
     *
     * @param string ScheduleDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduleDate($value)
    {
        $this->fields['ScheduleDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the ScheduleDate and returns this instance.
     *
     * @param string $value ScheduleDate
     *
     * @return ManageReportScheduleRequest instance
     */
    public function withScheduleDate($value)
    {
        $this->setScheduleDate($value);

        return $this;
    }

    /**
     * Checks if ScheduleDate is set.
     *
     * @return bool true if ScheduleDate  is set
     */
    public function isSetScheduleDate()
    {
        return null !== $this->fields['ScheduleDate']['FieldValue'];
    }
}
