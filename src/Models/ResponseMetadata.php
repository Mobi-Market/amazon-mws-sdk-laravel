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
 * ResponseMetadata.
 *
 * Properties:
 * <ul>
 *
 * <li>RequestId: string</li>
 *
 * </ul>
 */
class ResponseMetadata extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'RequestId' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the RequestId property.
     *
     * @return string requestId
     */
    public function getRequestId()
    {
        return $this->_fields['RequestId']['FieldValue'];
    }

    /**
     * Set the value of the RequestId property.
     *
     * @param string requestId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRequestId($value)
    {
        $this->_fields['RequestId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RequestId is set.
     *
     * @return true if RequestId is set
     */
    public function isSetRequestId()
    {
        return null !== $this->_fields['RequestId']['FieldValue'];
    }

    /**
     * Set the value of RequestId, return this.
     *
     * @param requestId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRequestId($value)
    {
        $this->setRequestId($value);

        return $this;
    }
}
