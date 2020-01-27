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
 * Message.
 *
 * Properties:
 * <ul>
 *
 * <li>Locale: string</li>
 * <li>Text: string</li>
 *
 * </ul>
 */
class Message extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Locale' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Text'   => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Locale property.
     *
     * @return string locale
     */
    public function getLocale()
    {
        return $this->_fields['Locale']['FieldValue'];
    }

    /**
     * Set the value of the Locale property.
     *
     * @param string locale
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLocale($value)
    {
        $this->_fields['Locale']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Locale is set.
     *
     * @return true if Locale is set
     */
    public function isSetLocale()
    {
        return null !== $this->_fields['Locale']['FieldValue'];
    }

    /**
     * Set the value of Locale, return this.
     *
     * @param locale
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLocale($value)
    {
        $this->setLocale($value);

        return $this;
    }

    /**
     * Get the value of the Text property.
     *
     * @return string text
     */
    public function getText()
    {
        return $this->_fields['Text']['FieldValue'];
    }

    /**
     * Set the value of the Text property.
     *
     * @param string text
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setText($value)
    {
        $this->_fields['Text']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Text is set.
     *
     * @return true if Text is set
     */
    public function isSetText()
    {
        return null !== $this->_fields['Text']['FieldValue'];
    }

    /**
     * Set the value of Text, return this.
     *
     * @param text
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withText($value)
    {
        $this->setText($value);

        return $this;
    }
}
