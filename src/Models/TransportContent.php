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
 * TransportContent.
 *
 * Properties:
 * <ul>
 *
 * <li>TransportHeader: TransportHeader</li>
 * <li>TransportDetails: TransportDetailOutput</li>
 * <li>TransportResult: TransportResult</li>
 *
 * </ul>
 */
class TransportContent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TransportHeader'  => ['FieldValue' => null, 'FieldType' => 'TransportHeader'],
            'TransportDetails' => ['FieldValue' => null, 'FieldType' => 'TransportDetailOutput'],
            'TransportResult'  => ['FieldValue' => null, 'FieldType' => 'TransportResult'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TransportHeader property.
     *
     * @return TransportHeader transportHeader
     */
    public function getTransportHeader()
    {
        return $this->_fields['TransportHeader']['FieldValue'];
    }

    /**
     * Set the value of the TransportHeader property.
     *
     * @param TransportHeader transportHeader
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransportHeader($value)
    {
        $this->_fields['TransportHeader']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransportHeader is set.
     *
     * @return true if TransportHeader is set
     */
    public function isSetTransportHeader()
    {
        return null !== $this->_fields['TransportHeader']['FieldValue'];
    }

    /**
     * Set the value of TransportHeader, return this.
     *
     * @param transportHeader
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransportHeader($value)
    {
        $this->setTransportHeader($value);

        return $this;
    }

    /**
     * Get the value of the TransportDetails property.
     *
     * @return TransportDetailOutput transportDetails
     */
    public function getTransportDetails()
    {
        return $this->_fields['TransportDetails']['FieldValue'];
    }

    /**
     * Set the value of the TransportDetails property.
     *
     * @param TransportDetailOutput transportDetails
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransportDetails($value)
    {
        $this->_fields['TransportDetails']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransportDetails is set.
     *
     * @return true if TransportDetails is set
     */
    public function isSetTransportDetails()
    {
        return null !== $this->_fields['TransportDetails']['FieldValue'];
    }

    /**
     * Set the value of TransportDetails, return this.
     *
     * @param transportDetails
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransportDetails($value)
    {
        $this->setTransportDetails($value);

        return $this;
    }

    /**
     * Get the value of the TransportResult property.
     *
     * @return TransportResult transportResult
     */
    public function getTransportResult()
    {
        return $this->_fields['TransportResult']['FieldValue'];
    }

    /**
     * Set the value of the TransportResult property.
     *
     * @param TransportResult transportResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransportResult($value)
    {
        $this->_fields['TransportResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransportResult is set.
     *
     * @return true if TransportResult is set
     */
    public function isSetTransportResult()
    {
        return null !== $this->_fields['TransportResult']['FieldValue'];
    }

    /**
     * Set the value of TransportResult, return this.
     *
     * @param transportResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransportResult($value)
    {
        $this->setTransportResult($value);

        return $this;
    }
}
