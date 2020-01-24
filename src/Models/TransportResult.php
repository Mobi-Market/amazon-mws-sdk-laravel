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
 * TransportResult.
 *
 * Properties:
 * <ul>
 *
 * <li>TransportStatus: string</li>
 * <li>ErrorCode: string</li>
 * <li>ErrorDescription: string</li>
 *
 * </ul>
 */
class TransportResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TransportStatus'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'ErrorCode'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'ErrorDescription' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TransportStatus property.
     *
     * @return string transportStatus
     */
    public function getTransportStatus()
    {
        return $this->_fields['TransportStatus']['FieldValue'];
    }

    /**
     * Set the value of the TransportStatus property.
     *
     * @param string transportStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransportStatus($value)
    {
        $this->_fields['TransportStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransportStatus is set.
     *
     * @return true if TransportStatus is set
     */
    public function isSetTransportStatus()
    {
        return null !== $this->_fields['TransportStatus']['FieldValue'];
    }

    /**
     * Set the value of TransportStatus, return this.
     *
     * @param transportStatus
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransportStatus($value)
    {
        $this->setTransportStatus($value);

        return $this;
    }

    /**
     * Get the value of the ErrorCode property.
     *
     * @return string errorCode
     */
    public function getErrorCode()
    {
        return $this->_fields['ErrorCode']['FieldValue'];
    }

    /**
     * Set the value of the ErrorCode property.
     *
     * @param string errorCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setErrorCode($value)
    {
        $this->_fields['ErrorCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ErrorCode is set.
     *
     * @return true if ErrorCode is set
     */
    public function isSetErrorCode()
    {
        return null !== $this->_fields['ErrorCode']['FieldValue'];
    }

    /**
     * Set the value of ErrorCode, return this.
     *
     * @param errorCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withErrorCode($value)
    {
        $this->setErrorCode($value);

        return $this;
    }

    /**
     * Get the value of the ErrorDescription property.
     *
     * @return string errorDescription
     */
    public function getErrorDescription()
    {
        return $this->_fields['ErrorDescription']['FieldValue'];
    }

    /**
     * Set the value of the ErrorDescription property.
     *
     * @param string errorDescription
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setErrorDescription($value)
    {
        $this->_fields['ErrorDescription']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ErrorDescription is set.
     *
     * @return true if ErrorDescription is set
     */
    public function isSetErrorDescription()
    {
        return null !== $this->_fields['ErrorDescription']['FieldValue'];
    }

    /**
     * Set the value of ErrorDescription, return this.
     *
     * @param errorDescription
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withErrorDescription($value)
    {
        $this->setErrorDescription($value);

        return $this;
    }
}
