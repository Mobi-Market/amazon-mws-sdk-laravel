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
 * PrepInstructionList.
 *
 * Properties:
 * <ul>
 *
 * <li>PrepInstruction: array</li>
 *
 * </ul>
 */
class PrepInstructionList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PrepInstruction' => ['FieldValue' => [], 'FieldType' => ['string']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PrepInstruction property.
     *
     * @return List<String> prepInstruction
     */
    public function getPrepInstruction()
    {
        if (null == $this->_fields['PrepInstruction']['FieldValue']) {
            $this->_fields['PrepInstruction']['FieldValue'] = [];
        }

        return $this->_fields['PrepInstruction']['FieldValue'];
    }

    /**
     * Set the value of the PrepInstruction property.
     *
     * @param array prepInstruction
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPrepInstruction($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PrepInstruction']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PrepInstruction.
     */
    public function unsetPrepInstruction(): void
    {
        $this->_fields['PrepInstruction']['FieldValue'] = [];
    }

    /**
     * Check to see if PrepInstruction is set.
     *
     * @return true if PrepInstruction is set
     */
    public function isSetPrepInstruction()
    {
        return !empty($this->_fields['PrepInstruction']['FieldValue']);
    }

    /**
     * Add values for PrepInstruction, return this.
     *
     * @param prepInstruction
     *             New values to add
     *
     * @return $this instance
     */
    public function withPrepInstruction()
    {
        foreach (\func_get_args() as $PrepInstruction) {
            $this->_fields['PrepInstruction']['FieldValue'][] = $PrepInstruction;
        }

        return $this;
    }
}
