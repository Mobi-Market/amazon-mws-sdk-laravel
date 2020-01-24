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
 * ReportRequestInfo.
 *
 * Properties:
 * <ul>
 *
 * <li>ReportRequestId: string</li>
 * <li>ReportType: string</li>
 * <li>StartDate: string</li>
 * <li>EndDate: string</li>
 * <li>SubmittedDate: string</li>
 * <li>ReportProcessingStatus: string</li>
 *
 * </ul>
 */
class ReportRequestInfo extends Model
{
    /**
     * Construct new ReportRequestInfo.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>ReportRequestId: string</li>
     * <li>ReportType: string</li>
     * <li>StartDate: string</li>
     * <li>EndDate: string</li>
     * <li>Scheduled: bool</li>
     * <li>SubmittedDate: string</li>
     * <li>ReportProcessingStatus: string</li>
     * <li>GeneratedReportId: string</li>
     * <li>StartedProcessingDate: string</li>
     * <li>CompletedDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'ReportRequestId'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReportType'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'StartDate'              => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'EndDate'                => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'Scheduled'              => ['FieldValue' => null, 'FieldType' => 'bool'],
            'SubmittedDate'          => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'ReportProcessingStatus' => ['FieldValue' => null, 'FieldType' => 'string'],
            'GeneratedReportId'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'StartedProcessingDate'  => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'CompletedDate'          => ['FieldValue' => null, 'FieldType' => 'DateTime'],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the ReportRequestId property.
     *
     * @return string ReportRequestId
     */
    public function getReportRequestId()
    {
        return $this->fields['ReportRequestId']['FieldValue'];
    }

    /**
     * Sets the value of the ReportRequestId property.
     *
     * @param string ReportRequestId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReportRequestId($value)
    {
        $this->fields['ReportRequestId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the ReportRequestId and returns this instance.
     *
     * @param string $value ReportRequestId
     *
     * @return ReportRequestInfo instance
     */
    public function withReportRequestId($value)
    {
        $this->setReportRequestId($value);

        return $this;
    }

    /**
     * Checks if ReportRequestId is set.
     *
     * @return bool true if ReportRequestId  is set
     */
    public function isSetReportRequestId()
    {
        return null !== $this->fields['ReportRequestId']['FieldValue'];
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
     * @return ReportRequestInfo instance
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
     * @return ReportRequestInfo instance
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
     * @return ReportRequestInfo instance
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
     * Gets the value of the Scheduled property.
     *
     * @return string Scheduled
     */
    public function getScheduled()
    {
        return $this->fields['Scheduled']['FieldValue'];
    }

    /**
     * Sets the value of the Scheduled property.
     *
     * @param string Scheduled
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduled($value)
    {
        $this->fields['Scheduled']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Scheduled and returns this instance.
     *
     * @param string $value Scheduled
     *
     * @return ReportRequestInfo instance
     */
    public function withScheduled($value)
    {
        $this->setScheduled($value);

        return $this;
    }

    /**
     * Checks if Scheduled is set.
     *
     * @return bool true if Scheduled  is set
     */
    public function isSetScheduled()
    {
        return null !== $this->fields['Scheduled']['FieldValue'];
    }

    /**
     * Gets the value of the SubmittedDate property.
     *
     * @return string SubmittedDate
     */
    public function getSubmittedDate()
    {
        return $this->fields['SubmittedDate']['FieldValue'];
    }

    /**
     * Sets the value of the SubmittedDate property.
     *
     * @param string SubmittedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSubmittedDate($value)
    {
        $this->fields['SubmittedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the SubmittedDate and returns this instance.
     *
     * @param string $value SubmittedDate
     *
     * @return ReportRequestInfo instance
     */
    public function withSubmittedDate($value)
    {
        $this->setSubmittedDate($value);

        return $this;
    }

    /**
     * Checks if SubmittedDate is set.
     *
     * @return bool true if SubmittedDate  is set
     */
    public function isSetSubmittedDate()
    {
        return null !== $this->fields['SubmittedDate']['FieldValue'];
    }

    /**
     * Gets the value of the ReportProcessingStatus property.
     *
     * @return string ReportProcessingStatus
     */
    public function getReportProcessingStatus()
    {
        return $this->fields['ReportProcessingStatus']['FieldValue'];
    }

    /**
     * Sets the value of the ReportProcessingStatus property.
     *
     * @param string ReportProcessingStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReportProcessingStatus($value)
    {
        $this->fields['ReportProcessingStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the ReportProcessingStatus and returns this instance.
     *
     * @param string $value ReportProcessingStatus
     *
     * @return ReportRequestInfo instance
     */
    public function withReportProcessingStatus($value)
    {
        $this->setReportProcessingStatus($value);

        return $this;
    }

    /**
     * Checks if ReportProcessingStatus is set.
     *
     * @return bool true if ReportProcessingStatus  is set
     */
    public function isSetReportProcessingStatus()
    {
        return null !== $this->fields['ReportProcessingStatus']['FieldValue'];
    }

    /**
     * Gets the value of the GeneratedReportId property.
     *
     * @return string GeneratedReportId
     */
    public function getGeneratedReportId()
    {
        return $this->fields['GeneratedReportId']['FieldValue'];
    }

    /**
     * Sets the value of the GeneratedReportId property.
     *
     * @param string GeneratedReportId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGeneratedReportId($value)
    {
        $this->fields['GeneratedReportId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the GeneratedReportId and returns this instance.
     *
     * @param string $value GeneratedReportId
     *
     * @return ReportRequestInfo instance
     */
    public function withGeneratedReportId($value)
    {
        $this->setGeneratedReportId($value);

        return $this;
    }

    /**
     * Checks if GeneratedReportId is set.
     *
     * @return bool true if GeneratedReportId  is set
     */
    public function isSetGeneratedReportId()
    {
        return null !== $this->fields['GeneratedReportId']['FieldValue'];
    }

    /**
     * Gets the value of the StartedProcessingDate property.
     *
     * @return string StartedProcessingDate
     */
    public function getStartedProcessingDate()
    {
        return $this->fields['StartedProcessingDate']['FieldValue'];
    }

    /**
     * Sets the value of the StartedProcessingDate property.
     *
     * @param string StartedProcessingDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStartedProcessingDate($value)
    {
        $this->fields['StartedProcessingDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the StartedProcessingDate and returns this instance.
     *
     * @param string $value StartedProcessingDate
     *
     * @return ReportRequestInfo instance
     */
    public function withStartedProcessingDate($value)
    {
        $this->setStartedProcessingDate($value);

        return $this;
    }

    /**
     * Checks if StartedProcessingDate is set.
     *
     * @return bool true if StartedProcessingDate  is set
     */
    public function isSetStartedProcessingDate()
    {
        return null !== $this->fields['StartedProcessingDate']['FieldValue'];
    }

    /**
     * Gets the value of the CompletedDate property.
     *
     * @return string CompletedDate
     */
    public function getCompletedDate()
    {
        return $this->fields['CompletedDate']['FieldValue'];
    }

    /**
     * Sets the value of the CompletedDate property.
     *
     * @param string CompletedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCompletedDate($value)
    {
        $this->fields['CompletedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the CompletedDate and returns this instance.
     *
     * @param string $value CompletedDate
     *
     * @return ReportRequestInfo instance
     */
    public function withCompletedDate($value)
    {
        $this->setCompletedDate($value);

        return $this;
    }

    /**
     * Checks if CompletedDate is set.
     *
     * @return bool true if CompletedDate  is set
     */
    public function isSetCompletedDate()
    {
        return null !== $this->fields['CompletedDate']['FieldValue'];
    }
}
