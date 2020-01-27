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
 * StatusList.
 *
 * Properties:
 * <ul>
 *
 * <li>Status: string</li>
 *
 * </ul>
 */
class StatusList extends Model
{
    /**
     * Construct new StatusList.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Status: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Status' => ['FieldValue' => [], 'FieldType' => ['string']],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the Status .
     *
     * @return array of string Status
     */
    public function getStatus()
    {
        return $this->fields['Status']['FieldValue'];
    }

    /**
     * Sets the value of the Status.
     *
     * @param string or an array of string Status
     * @param mixed $status
     *
     * @return $this instance
     */
    public function setStatus($status)
    {
        if (!$this->_isNumericArray($status)) {
            $status =  [$status];
        }
        $this->fields['Status']['FieldValue'] = $status;

        return $this;
    }

    /**
     * Sets single or multiple values of Status list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withStatus($status1, $status2)</code>.
     *
     * @param string $stringArgs one or more Status
     *
     * @return StatusList instance
     */
    public function withStatus($stringArgs)
    {
        foreach (\func_get_args() as $status) {
            $this->fields['Status']['FieldValue'][] = $status;
        }

        return $this;
    }

    /**
     * Checks if Status list is non-empty.
     *
     * @return bool true if Status list is non-empty
     */
    public function isSetStatus()
    {
        return \count($this->fields['Status']['FieldValue']) > 0;
    }
}
