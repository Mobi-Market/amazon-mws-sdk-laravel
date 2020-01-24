<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * InboundShipmentList.
 *
 * Properties:
 * <ul>
 *
 * <li>member: array</li>
 *
 * </ul>
 */
class InboundShipmentList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'member' => ['FieldValue' => [], 'FieldType' => ['InboundShipmentInfo']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the member property.
     *
     * @return List<InboundShipmentInfo> member
     */
    public function getmember()
    {
        if (null == $this->_fields['member']['FieldValue']) {
            $this->_fields['member']['FieldValue'] = [];
        }

        return $this->_fields['member']['FieldValue'];
    }

    /**
     * Set the value of the member property.
     *
     * @param array member
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setmember($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['member']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear member.
     */
    public function unsetmember(): void
    {
        $this->_fields['member']['FieldValue'] = [];
    }

    /**
     * Check to see if member is set.
     *
     * @return true if member is set
     */
    public function isSetmember()
    {
        return !empty($this->_fields['member']['FieldValue']);
    }

    /**
     * Add values for member, return this.
     *
     * @param member
     *             New values to add
     *
     * @return $this instance
     */
    public function withmember()
    {
        foreach (\func_get_args() as $member) {
            $this->_fields['member']['FieldValue'][] = $member;
        }

        return $this;
    }
}