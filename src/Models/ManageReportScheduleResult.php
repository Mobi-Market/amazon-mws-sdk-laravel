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
 * ManageReportScheduleResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Count: int</li>
 * <li>ReportSchedule: ReportSchedule</li>
 *
 * </ul>
 */
class ManageReportScheduleResult extends Model
{
    /**
     * Construct new ManageReportScheduleResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Count: int</li>
     * <li>ReportSchedule: ReportSchedule</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Count'          => ['FieldValue' => null, 'FieldType' => 'int'],
            'ReportSchedule' => ['FieldValue' => [], 'FieldType' => ['ReportSchedule']],
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
     * @return ManageReportScheduleResult instance
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
     * Gets the value of the ReportSchedule.
     *
     * @return array of ReportSchedule ReportSchedule
     */
    public function getReportScheduleList()
    {
        return $this->fields['ReportSchedule']['FieldValue'];
    }

    /**
     * Sets the value of the ReportSchedule.
     *
     * @param mixed ReportSchedule or an array of ReportSchedule ReportSchedule
     * @param mixed $reportSchedule
     *
     * @return $this instance
     */
    public function setReportScheduleList($reportSchedule)
    {
        if (!$this->_isNumericArray($reportSchedule)) {
            $reportSchedule =  [$reportSchedule];
        }
        $this->fields['ReportSchedule']['FieldValue'] = $reportSchedule;

        return $this;
    }

    /**
     * Sets single or multiple values of ReportSchedule list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportSchedule($reportSchedule1, $reportSchedule2)</code>.
     *
     * @param ReportSchedule $reportScheduleArgs one or more ReportSchedule
     *
     * @return ManageReportScheduleResult instance
     */
    public function withReportSchedule($reportScheduleArgs)
    {
        foreach (\func_get_args() as $reportSchedule) {
            $this->fields['ReportSchedule']['FieldValue'][] = $reportSchedule;
        }

        return $this;
    }

    /**
     * Checks if ReportSchedule list is non-empty.
     *
     * @return bool true if ReportSchedule list is non-empty
     */
    public function isSetReportSchedule()
    {
        return \count($this->fields['ReportSchedule']['FieldValue']) > 0;
    }
}
