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

/**
 * AttributeSetList.
 *
 * Properties:
 * <ul>
 *
 * <li>Any: array</li>
 *
 * </ul>
 */
class AttributeSetList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Any' => ['FieldValue' => [], 'FieldType' => ['object']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Any property.
     *
     * @return List<Object> any
     */
    public function getAny()
    {
        if (null == $this->_fields['Any']['FieldValue']) {
            $this->_fields['Any']['FieldValue'] = [];
        }

        return $this->_fields['Any']['FieldValue'];
    }

    /**
     * Set the value of the Any property.
     *
     * @param array any
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAny($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Any']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Any.
     */
    public function unsetAny(): void
    {
        $this->_fields['Any']['FieldValue'] = [];
    }

    /**
     * Check to see if Any is set.
     *
     * @return true if Any is set
     */
    public function isSetAny()
    {
        return !empty($this->_fields['Any']['FieldValue']);
    }

    /**
     * Add values for Any, return this.
     *
     * @param any
     *             New values to add
     *
     * @return $this instance
     */
    public function withAny()
    {
        foreach (\func_get_args() as $Any) {
            $this->_fields['Any']['FieldValue'][] = $Any;
        }

        return $this;
    }
}
