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
 * CancelReportRequestsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Count: int</li>
 * <li>ReportRequestInfo: ReportRequestInfo</li>
 *
 * </ul>
 */
class CancelReportRequestsResult extends Model
{
    /**
     * Construct new CancelReportRequestsResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Count: int</li>
     * <li>ReportRequestInfo: ReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Count'             => ['FieldValue' => null, 'FieldType' => 'int'],
            'ReportRequestInfo' => ['FieldValue' => [], 'FieldType' => ['ReportRequestInfo']],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the Count property.
     *
     * @return int Count
     */
    public function getCount()
    {
        return $this->fields['Count']['FieldValue'];
    }

    /**
     * Sets the value of the Count property.
     *
     * @param int Count
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCount($value)
    {
        $this->fields['Count']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Count and returns this instance.
     *
     * @param int $value Count
     *
     * @return CancelReportRequestsResult instance
     */
    public function withCount($value)
    {
        $this->setCount($value);

        return $this;
    }

    /**
     * Checks if Count is set.
     *
     * @return bool true if Count  is set
     */
    public function isSetCount()
    {
        return null !== $this->fields['Count']['FieldValue'];
    }

    /**
     * Gets the value of the ReportRequestInfo.
     *
     * @return array of ReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfoList()
    {
        return $this->fields['ReportRequestInfo']['FieldValue'];
    }

    /**
     * Sets the value of the ReportRequestInfo.
     *
     * @param mixed ReportRequestInfo or an array of ReportRequestInfo ReportRequestInfo
     * @param mixed $reportRequestInfo
     *
     * @return $this instance
     */
    public function setReportRequestInfoList($reportRequestInfo)
    {
        if (!$this->_isNumericArray($reportRequestInfo)) {
            $reportRequestInfo =  [$reportRequestInfo];
        }
        $this->fields['ReportRequestInfo']['FieldValue'] = $reportRequestInfo;

        return $this;
    }

    /**
     * Sets single or multiple values of ReportRequestInfo list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportRequestInfo($reportRequestInfo1, $reportRequestInfo2)</code>.
     *
     * @param ReportRequestInfo $reportRequestInfoArgs one or more ReportRequestInfo
     *
     * @return CancelReportRequestsResult instance
     */
    public function withReportRequestInfo($reportRequestInfoArgs)
    {
        foreach (\func_get_args() as $reportRequestInfo) {
            $this->fields['ReportRequestInfo']['FieldValue'][] = $reportRequestInfo;
        }

        return $this;
    }

    /**
     * Checks if ReportRequestInfo list is non-empty.
     *
     * @return bool true if ReportRequestInfo list is non-empty
     */
    public function isSetReportRequestInfo()
    {
        return \count($this->fields['ReportRequestInfo']['FieldValue']) > 0;
    }
}
