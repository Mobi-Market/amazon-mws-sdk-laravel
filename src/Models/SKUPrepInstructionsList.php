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
 * SKUPrepInstructionsList.
 *
 * Properties:
 * <ul>
 *
 * <li>SKUPrepInstructions: array</li>
 *
 * </ul>
 */
class SKUPrepInstructionsList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SKUPrepInstructions' => ['FieldValue' => [], 'FieldType' => ['SKUPrepInstructions']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SKUPrepInstructions property.
     *
     * @return list<SKUPrepInstructions> SKUPrepInstructions
     */
    public function getSKUPrepInstructions()
    {
        if (null == $this->_fields['SKUPrepInstructions']['FieldValue']) {
            $this->_fields['SKUPrepInstructions']['FieldValue'] = [];
        }

        return $this->_fields['SKUPrepInstructions']['FieldValue'];
    }

    /**
     * Set the value of the SKUPrepInstructions property.
     *
     * @param array skuPrepInstructions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSKUPrepInstructions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['SKUPrepInstructions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear SKUPrepInstructions.
     */
    public function unsetSKUPrepInstructions(): void
    {
        $this->_fields['SKUPrepInstructions']['FieldValue'] = [];
    }

    /**
     * Check to see if SKUPrepInstructions is set.
     *
     * @return true if SKUPrepInstructions is set
     */
    public function isSetSKUPrepInstructions()
    {
        return !empty($this->_fields['SKUPrepInstructions']['FieldValue']);
    }

    /**
     * Add values for SKUPrepInstructions, return this.
     *
     * @param skuPrepInstructions
     *             New values to add
     *
     * @return $this instance
     */
    public function withSKUPrepInstructions()
    {
        foreach (\func_get_args() as $SKUPrepInstructions) {
            $this->_fields['SKUPrepInstructions']['FieldValue'][] = $SKUPrepInstructions;
        }

        return $this;
    }
}
