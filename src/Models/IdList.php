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
 * IdList.
 *
 * Properties:
 * <ul>
 *
 * <li>Id: string</li>
 *
 * </ul>
 */
class IdList extends Model
{
    /**
     * Construct new IdList.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Id: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Id' => ['FieldValue' => [], 'FieldType' => ['string']],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the Id .
     *
     * @return array of string Id
     */
    public function getId()
    {
        return $this->fields['Id']['FieldValue'];
    }

    /**
     * Sets the value of the Id.
     *
     * @param string or an array of string Id
     * @param mixed $id
     *
     * @return $this instance
     */
    public function setId($id)
    {
        if (!$this->_isNumericArray($id)) {
            $id =  [$id];
        }
        $this->fields['Id']['FieldValue'] = $id;

        return $this;
    }

    /**
     * Sets single or multiple values of Id list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withId($id1, $id2)</code>.
     *
     * @param string $stringArgs one or more Id
     *
     * @return IdList instance
     */
    public function withId($stringArgs)
    {
        foreach (\func_get_args() as $id) {
            $this->fields['Id']['FieldValue'][] = $id;
        }

        return $this;
    }

    /**
     * Checks if Id list is non-empty.
     *
     * @return bool true if Id list is non-empty
     */
    public function isSetId()
    {
        return \count($this->fields['Id']['FieldValue']) > 0;
    }
}
