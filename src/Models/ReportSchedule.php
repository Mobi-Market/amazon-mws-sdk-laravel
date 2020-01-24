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
 * ReportSchedule.
 *
 * Properties:
 * <ul>
 *
 * <li>ReportType: string</li>
 * <li>Schedule: string</li>
 * <li>ScheduledDate: string</li>
 *
 * </ul>
 */
class ReportSchedule extends Model
{
    /**
     * Construct new ReportSchedule.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>ReportType: string</li>
     * <li>Schedule: string</li>
     * <li>ScheduledDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'ReportType'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'Schedule'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'ScheduledDate' => ['FieldValue' => null, 'FieldType' => 'DateTime'],
        ];
        parent::__construct($data);
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
     * @return ReportSchedule instance
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
     * @return ReportSchedule instance
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
     * Gets the value of the ScheduledDate property.
     *
     * @return string ScheduledDate
     */
    public function getScheduledDate()
    {
        return $this->fields['ScheduledDate']['FieldValue'];
    }

    /**
     * Sets the value of the ScheduledDate property.
     *
     * @param string ScheduledDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledDate($value)
    {
        $this->fields['ScheduledDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the ScheduledDate and returns this instance.
     *
     * @param string $value ScheduledDate
     *
     * @return ReportSchedule instance
     */
    public function withScheduledDate($value)
    {
        $this->setScheduledDate($value);

        return $this;
    }

    /**
     * Checks if ScheduledDate is set.
     *
     * @return bool true if ScheduledDate  is set
     */
    public function isSetScheduledDate()
    {
        return null !== $this->fields['ScheduledDate']['FieldValue'];
    }
}