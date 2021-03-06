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
 * ReportInfo.
 *
 * Properties:
 * <ul>
 *
 * <li>ReportId: string</li>
 * <li>ReportType: string</li>
 * <li>ReportRequestId: string</li>
 * <li>AvailableDate: string</li>
 * <li>Acknowledged: bool</li>
 * <li>AcknowledgedDate: string</li>
 *
 * </ul>
 */
class ReportInfo extends Model
{
    /**
     * Construct new ReportInfo.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>ReportId: string</li>
     * <li>ReportType: string</li>
     * <li>ReportRequestId: string</li>
     * <li>AvailableDate: string</li>
     * <li>Acknowledged: bool</li>
     * <li>AcknowledgedDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'ReportId'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReportType'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReportRequestId'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'AvailableDate'    => ['FieldValue' => null, 'FieldType' => 'DateTime'],
            'Acknowledged'     => ['FieldValue' => null, 'FieldType' => 'bool'],
            'AcknowledgedDate' => ['FieldValue' => null, 'FieldType' => 'DateTime'],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the ReportId property.
     *
     * @return string ReportId
     */
    public function getReportId()
    {
        return $this->fields['ReportId']['FieldValue'];
    }

    /**
     * Sets the value of the ReportId property.
     *
     * @param string ReportId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReportId($value)
    {
        $this->fields['ReportId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the ReportId and returns this instance.
     *
     * @param string $value ReportId
     *
     * @return ReportInfo instance
     */
    public function withReportId($value)
    {
        $this->setReportId($value);

        return $this;
    }

    /**
     * Checks if ReportId is set.
     *
     * @return bool true if ReportId  is set
     */
    public function isSetReportId()
    {
        return null !== $this->fields['ReportId']['FieldValue'];
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
     * @return ReportInfo instance
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
     * @return ReportInfo instance
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
     * Gets the value of the AvailableDate property.
     *
     * @return string AvailableDate
     */
    public function getAvailableDate()
    {
        return $this->fields['AvailableDate']['FieldValue'];
    }

    /**
     * Sets the value of the AvailableDate property.
     *
     * @param string AvailableDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAvailableDate($value)
    {
        $this->fields['AvailableDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the AvailableDate and returns this instance.
     *
     * @param string $value AvailableDate
     *
     * @return ReportInfo instance
     */
    public function withAvailableDate($value)
    {
        $this->setAvailableDate($value);

        return $this;
    }

    /**
     * Checks if AvailableDate is set.
     *
     * @return bool true if AvailableDate  is set
     */
    public function isSetAvailableDate()
    {
        return null !== $this->fields['AvailableDate']['FieldValue'];
    }

    /**
     * Gets the value of the Acknowledged property.
     *
     * @return bool Acknowledged
     */
    public function getAcknowledged()
    {
        return $this->fields['Acknowledged']['FieldValue'];
    }

    /**
     * Sets the value of the Acknowledged property.
     *
     * @param bool Acknowledged
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAcknowledged($value)
    {
        $this->fields['Acknowledged']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Acknowledged and returns this instance.
     *
     * @param bool $value Acknowledged
     *
     * @return ReportInfo instance
     */
    public function withAcknowledged($value)
    {
        $this->setAcknowledged($value);

        return $this;
    }

    /**
     * Checks if Acknowledged is set.
     *
     * @return bool true if Acknowledged  is set
     */
    public function isSetAcknowledged()
    {
        return null !== $this->fields['Acknowledged']['FieldValue'];
    }

    /**
     * Gets the value of the AcknowledgedDate property.
     *
     * @return string AcknowledgedDate
     */
    public function getAcknowledgedDate()
    {
        return $this->fields['AcknowledgedDate']['FieldValue'];
    }

    /**
     * Sets the value of the AcknowledgedDate property.
     *
     * @param string AcknowledgedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAcknowledgedDate($value)
    {
        $this->fields['AcknowledgedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the AcknowledgedDate and returns this instance.
     *
     * @param string $value AcknowledgedDate
     *
     * @return ReportInfo instance
     */
    public function withAcknowledgedDate($value)
    {
        $this->setAcknowledgedDate($value);

        return $this;
    }

    /**
     * Checks if AcknowledgedDate is set.
     *
     * @return bool true if AcknowledgedDate  is set
     */
    public function isSetAcknowledgedDate()
    {
        return null !== $this->fields['AcknowledgedDate']['FieldValue'];
    }
}
