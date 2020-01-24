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
 * GetReportScheduleListByNextTokenResult.
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>ReportSchedule: ReportSchedule</li>
 *
 * </ul>
 */
class GetReportScheduleListByNextTokenResult extends Model
{
    /**
     * Construct new GetReportScheduleListByNextTokenResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>ReportSchedule: ReportSchedule</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'NextToken'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'HasNext'        => ['FieldValue' => null, 'FieldType' => 'bool'],
            'ReportSchedule' => ['FieldValue' => [], 'FieldType' => ['ReportSchedule']],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the NextToken property.
     *
     * @return string NextToken
     */
    public function getNextToken()
    {
        return $this->fields['NextToken']['FieldValue'];
    }

    /**
     * Sets the value of the NextToken property.
     *
     * @param string NextToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNextToken($value)
    {
        $this->fields['NextToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the NextToken and returns this instance.
     *
     * @param string $value NextToken
     *
     * @return GetReportScheduleListByNextTokenResult instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);

        return $this;
    }

    /**
     * Checks if NextToken is set.
     *
     * @return bool true if NextToken  is set
     */
    public function isSetNextToken()
    {
        return null !== $this->fields['NextToken']['FieldValue'];
    }

    /**
     * Gets the value of the HasNext property.
     *
     * @return bool HasNext
     */
    public function getHasNext()
    {
        return $this->fields['HasNext']['FieldValue'];
    }

    /**
     * Sets the value of the HasNext property.
     *
     * @param bool HasNext
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setHasNext($value)
    {
        $this->fields['HasNext']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the HasNext and returns this instance.
     *
     * @param bool $value HasNext
     *
     * @return GetReportScheduleListByNextTokenResult instance
     */
    public function withHasNext($value)
    {
        $this->setHasNext($value);

        return $this;
    }

    /**
     * Checks if HasNext is set.
     *
     * @return bool true if HasNext  is set
     */
    public function isSetHasNext()
    {
        return null !== $this->fields['HasNext']['FieldValue'];
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
     * @return GetReportScheduleListByNextTokenResult instance
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
