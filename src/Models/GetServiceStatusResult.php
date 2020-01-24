<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * GetServiceStatusResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Status: string</li>
 * <li>Timestamp: string</li>
 *
 * </ul>
 */
class GetServiceStatusResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Status'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'Timestamp' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Status property.
     *
     * @return string status
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set
     */
    public function isSetStatus()
    {
        return null !== $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withStatus($value)
    {
        $this->setStatus($value);

        return $this;
    }

    /**
     * Get the value of the Timestamp property.
     *
     * @return XMLGregorianCalendar timestamp
     */
    public function getTimestamp()
    {
        return $this->_fields['Timestamp']['FieldValue'];
    }

    /**
     * Set the value of the Timestamp property.
     *
     * @param string timestamp
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTimestamp($value)
    {
        $this->_fields['Timestamp']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Timestamp is set.
     *
     * @return true if Timestamp is set
     */
    public function isSetTimestamp()
    {
        return null !== $this->_fields['Timestamp']['FieldValue'];
    }

    /**
     * Set the value of Timestamp, return this.
     *
     * @param timestamp
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTimestamp($value)
    {
        $this->setTimestamp($value);

        return $this;
    }
}
