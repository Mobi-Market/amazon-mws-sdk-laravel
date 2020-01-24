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
 * RequestReportResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ReportRequestInfo: ReportRequestInfo</li>
 *
 * </ul>
 */
class RequestReportResult extends Model
{
    /**
     * Construct new RequestReportResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>ReportRequestInfo: ReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'ReportRequestInfo' => ['FieldValue' => null, 'FieldType' => 'ReportRequestInfo'],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the ReportRequestInfo.
     *
     * @return ReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfo()
    {
        return $this->fields['ReportRequestInfo']['FieldValue'];
    }

    /**
     * Sets the value of the ReportRequestInfo.
     *
     * @param ReportRequestInfo ReportRequestInfo
     * @param mixed $value
     */
    public function setReportRequestInfo($value): void
    {
        $this->fields['ReportRequestInfo']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the ReportRequestInfo  and returns this instance.
     *
     * @param ReportRequestInfo $value ReportRequestInfo
     *
     * @return RequestReportResult instance
     */
    public function withReportRequestInfo($value)
    {
        $this->setReportRequestInfo($value);

        return $this;
    }

    /**
     * Checks if ReportRequestInfo  is set.
     *
     * @return bool true if ReportRequestInfo property is set
     */
    public function isSetReportRequestInfo()
    {
        return null !== $this->fields['ReportRequestInfo']['FieldValue'];
    }
}
