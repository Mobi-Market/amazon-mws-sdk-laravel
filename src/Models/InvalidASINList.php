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
 * InvalidASINList.
 *
 * Properties:
 * <ul>
 *
 * <li>InvalidASIN: array</li>
 *
 * </ul>
 */
class InvalidASINList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'InvalidASIN' => ['FieldValue' => [], 'FieldType' => ['InvalidASIN']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the InvalidASIN property.
     *
     * @return List<InvalidASIN> invalidASIN
     */
    public function getInvalidASIN()
    {
        if (null == $this->_fields['InvalidASIN']['FieldValue']) {
            $this->_fields['InvalidASIN']['FieldValue'] = [];
        }

        return $this->_fields['InvalidASIN']['FieldValue'];
    }

    /**
     * Set the value of the InvalidASIN property.
     *
     * @param array invalidASIN
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvalidASIN($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['InvalidASIN']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear InvalidASIN.
     */
    public function unsetInvalidASIN(): void
    {
        $this->_fields['InvalidASIN']['FieldValue'] = [];
    }

    /**
     * Check to see if InvalidASIN is set.
     *
     * @return true if InvalidASIN is set
     */
    public function isSetInvalidASIN()
    {
        return !empty($this->_fields['InvalidASIN']['FieldValue']);
    }

    /**
     * Add values for InvalidASIN, return this.
     *
     * @param invalidASIN
     *             New values to add
     *
     * @return $this instance
     */
    public function withInvalidASIN()
    {
        foreach (\func_get_args() as $InvalidASIN) {
            $this->_fields['InvalidASIN']['FieldValue'][] = $InvalidASIN;
        }

        return $this;
    }
}
