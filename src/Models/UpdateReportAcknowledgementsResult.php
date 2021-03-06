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
 * UpdateReportAcknowledgementsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Count: int</li>
 * <li>ReportInfo: ReportInfo</li>
 *
 * </ul>
 */
class UpdateReportAcknowledgementsResult extends Model
{
    /**
     * Construct new UpdateReportAcknowledgementsResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Count: int</li>
     * <li>ReportInfo: ReportInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Count'      => ['FieldValue' => null, 'FieldType' => 'int'],
            'ReportInfo' => ['FieldValue' => [], 'FieldType' => ['ReportInfo']],
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
     * @return UpdateReportAcknowledgementsResult instance
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
     * Gets the value of the ReportInfo.
     *
     * @return array of ReportInfo ReportInfo
     */
    public function getReportInfoList()
    {
        return $this->fields['ReportInfo']['FieldValue'];
    }

    /**
     * Sets the value of the ReportInfo.
     *
     * @param mixed ReportInfo or an array of ReportInfo ReportInfo
     * @param mixed $reportInfo
     *
     * @return $this instance
     */
    public function setReportInfoList($reportInfo)
    {
        if (!$this->_isNumericArray($reportInfo)) {
            $reportInfo =  [$reportInfo];
        }
        $this->fields['ReportInfo']['FieldValue'] = $reportInfo;

        return $this;
    }

    /**
     * Sets single or multiple values of ReportInfo list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportInfo($reportInfo1, $reportInfo2)</code>.
     *
     * @param ReportInfo $reportInfoArgs one or more ReportInfo
     *
     * @return UpdateReportAcknowledgementsResult instance
     */
    public function withReportInfo($reportInfoArgs)
    {
        foreach (\func_get_args() as $reportInfo) {
            $this->fields['ReportInfo']['FieldValue'][] = $reportInfo;
        }

        return $this;
    }

    /**
     * Checks if ReportInfo list is non-empty.
     *
     * @return bool true if ReportInfo list is non-empty
     */
    public function isSetReportInfo()
    {
        return \count($this->fields['ReportInfo']['FieldValue']) > 0;
    }
}
