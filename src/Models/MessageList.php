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
 * MessageList.
 *
 * Properties:
 * <ul>
 *
 * <li>Message: array</li>
 *
 * </ul>
 */
class MessageList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Message' => ['FieldValue' => [], 'FieldType' => ['Message']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Message property.
     *
     * @return List<Message> message
     */
    public function getMessage()
    {
        if (null == $this->_fields['Message']['FieldValue']) {
            $this->_fields['Message']['FieldValue'] = [];
        }

        return $this->_fields['Message']['FieldValue'];
    }

    /**
     * Set the value of the Message property.
     *
     * @param array message
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMessage($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Message']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Message.
     */
    public function unsetMessage(): void
    {
        $this->_fields['Message']['FieldValue'] = [];
    }

    /**
     * Check to see if Message is set.
     *
     * @return true if Message is set
     */
    public function isSetMessage()
    {
        return !empty($this->_fields['Message']['FieldValue']);
    }

    /**
     * Add values for Message, return this.
     *
     * @param message
     *             New values to add
     *
     * @return $this instance
     */
    public function withMessage()
    {
        foreach (\func_get_args() as $Message) {
            $this->_fields['Message']['FieldValue'][] = $Message;
        }

        return $this;
    }
}
