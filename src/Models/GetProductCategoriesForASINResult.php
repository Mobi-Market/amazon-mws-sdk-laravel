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
 * GetProductCategoriesForASINResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Self: array</li>
 *
 * </ul>
 */
class GetProductCategoriesForASINResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Self' => ['FieldValue' => [], 'FieldType' => ['Categories']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Self property.
     *
     * @return List<Categories> self
     */
    public function getSelf()
    {
        if (null == $this->_fields['Self']['FieldValue']) {
            $this->_fields['Self']['FieldValue'] = [];
        }

        return $this->_fields['Self']['FieldValue'];
    }

    /**
     * Set the value of the Self property.
     *
     * @param array self
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSelf($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Self']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Self.
     */
    public function unsetSelf(): void
    {
        $this->_fields['Self']['FieldValue'] = [];
    }

    /**
     * Check to see if Self is set.
     *
     * @return true if Self is set
     */
    public function isSetSelf()
    {
        return !empty($this->_fields['Self']['FieldValue']);
    }

    /**
     * Add values for Self, return this.
     *
     * @param self
     *             New values to add
     *
     * @return $this instance
     */
    public function withSelf()
    {
        foreach (\func_get_args() as $Self) {
            $this->_fields['Self']['FieldValue'][] = $Self;
        }

        return $this;
    }
}
