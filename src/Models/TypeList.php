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
 * TypeList.
 *
 * Properties:
 * <ul>
 *
 * <li>Type: string</li>
 *
 * </ul>
 */
class TypeList extends Model
{
    /**
     * Construct new TypeList.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Type: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Type' => ['FieldValue' => [], 'FieldType' => ['string']],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the Type .
     *
     * @return array of string Type
     */
    public function getType()
    {
        return $this->fields['Type']['FieldValue'];
    }

    /**
     * Sets the value of the Type.
     *
     * @param string or an array of string Type
     * @param mixed $type
     *
     * @return $this instance
     */
    public function setType($type)
    {
        if (!$this->_isNumericArray($type)) {
            $type =  [$type];
        }
        $this->fields['Type']['FieldValue'] = $type;

        return $this;
    }

    /**
     * Sets single or multiple values of Type list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withType($type1, $type2)</code>.
     *
     * @param string $stringArgs one or more Type
     *
     * @return TypeList instance
     */
    public function withType($stringArgs)
    {
        foreach (\func_get_args() as $type) {
            $this->fields['Type']['FieldValue'][] = $type;
        }

        return $this;
    }

    /**
     * Checks if Type list is non-empty.
     *
     * @return bool true if Type list is non-empty
     */
    public function isSetType()
    {
        return \count($this->fields['Type']['FieldValue']) > 0;
    }
}
