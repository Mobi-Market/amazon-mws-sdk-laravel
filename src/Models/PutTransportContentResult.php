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
 * PutTransportContentResult.
 *
 * Properties:
 * <ul>
 *
 * <li>TransportResult: TransportResult</li>
 *
 * </ul>
 */
class PutTransportContentResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TransportResult' => ['FieldValue' => null, 'FieldType' => 'TransportResult'],
        ];
        parent::__construct($data);
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
