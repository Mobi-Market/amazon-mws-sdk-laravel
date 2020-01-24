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
 * BuyerCustomizedInfoDetail.
 *
 * Properties:
 * <ul>
 *
 * <li>CustomizedURL: string</li>
 *
 * </ul>
 */
class BuyerCustomizedInfoDetail extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CustomizedURL' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the CustomizedURL property.
     *
     * @return string customizedURL
     */
    public function getCustomizedURL()
    {
        return $this->_fields['CustomizedURL']['FieldValue'];
    }

    /**
     * Set the value of the CustomizedURL property.
     *
     * @param string customizedURL
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCustomizedURL($value)
    {
        $this->_fields['CustomizedURL']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CustomizedURL is set.
     *
     * @return true if CustomizedURL is set
     */
    public function isSetCustomizedURL()
    {
        return null !== $this->_fields['CustomizedURL']['FieldValue'];
    }

    /**
     * Set the value of CustomizedURL, return this.
     *
     * @param customizedURL
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCustomizedURL($value)
    {
        $this->setCustomizedURL($value);

        return $this;
    }
}
