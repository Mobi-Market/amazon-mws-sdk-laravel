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
 * InvalidSKUList.
 *
 * Properties:
 * <ul>
 *
 * <li>InvalidSKU: array</li>
 *
 * </ul>
 */
class InvalidSKUList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'InvalidSKU' => ['FieldValue' => [], 'FieldType' => ['InvalidSKU']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the InvalidSKU property.
     *
     * @return List<InvalidSKU> invalidSKU
     */
    public function getInvalidSKU()
    {
        if (null == $this->_fields['InvalidSKU']['FieldValue']) {
            $this->_fields['InvalidSKU']['FieldValue'] = [];
        }

        return $this->_fields['InvalidSKU']['FieldValue'];
    }

    /**
     * Set the value of the InvalidSKU property.
     *
     * @param array invalidSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvalidSKU($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['InvalidSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear InvalidSKU.
     */
    public function unsetInvalidSKU(): void
    {
        $this->_fields['InvalidSKU']['FieldValue'] = [];
    }

    /**
     * Check to see if InvalidSKU is set.
     *
     * @return true if InvalidSKU is set
     */
    public function isSetInvalidSKU()
    {
        return !empty($this->_fields['InvalidSKU']['FieldValue']);
    }

    /**
     * Add values for InvalidSKU, return this.
     *
     * @param invalidSKU
     *             New values to add
     *
     * @return $this instance
     */
    public function withInvalidSKU()
    {
        foreach (\func_get_args() as $InvalidSKU) {
            $this->_fields['InvalidSKU']['FieldValue'][] = $InvalidSKU;
        }

        return $this;
    }
}
