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
 * IdListType.
 *
 * Properties:
 * <ul>
 *
 * <li>Id: array</li>
 *
 * </ul>
 */
class IdListType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Id' => ['FieldValue' => [], 'FieldType' => ['string']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Id property.
     *
     * @return List<String> id
     */
    public function getId()
    {
        if (null == $this->_fields['Id']['FieldValue']) {
            $this->_fields['Id']['FieldValue'] = [];
        }

        return $this->_fields['Id']['FieldValue'];
    }

    /**
     * Set the value of the Id property.
     *
     * @param array id
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Id']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Id.
     */
    public function unsetId(): void
    {
        $this->_fields['Id']['FieldValue'] = [];
    }

    /**
     * Check to see if Id is set.
     *
     * @return true if Id is set
     */
    public function isSetId()
    {
        return !empty($this->_fields['Id']['FieldValue']);
    }

    /**
     * Add values for Id, return this.
     *
     * @param id
     *             New values to add
     *
     * @return $this instance
     */
    public function withId()
    {
        foreach (\func_get_args() as $Id) {
            $this->_fields['Id']['FieldValue'][] = $Id;
        }

        return $this;
    }
}
