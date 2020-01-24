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
 * LabelCustomization.
 *
 * Properties:
 * <ul>
 *
 * <li>CustomTextForLabel: string</li>
 * <li>StandardIdForLabel: string</li>
 *
 * </ul>
 */
class LabelCustomization extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CustomTextForLabel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'StandardIdForLabel' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the CustomTextForLabel property.
     *
     * @return string customTextForLabel
     */
    public function getCustomTextForLabel()
    {
        return $this->_fields['CustomTextForLabel']['FieldValue'];
    }

    /**
     * Set the value of the CustomTextForLabel property.
     *
     * @param string customTextForLabel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCustomTextForLabel($value)
    {
        $this->_fields['CustomTextForLabel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CustomTextForLabel is set.
     *
     * @return true if CustomTextForLabel is set
     */
    public function isSetCustomTextForLabel()
    {
        return null !== $this->_fields['CustomTextForLabel']['FieldValue'];
    }

    /**
     * Set the value of CustomTextForLabel, return this.
     *
     * @param customTextForLabel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCustomTextForLabel($value)
    {
        $this->setCustomTextForLabel($value);

        return $this;
    }

    /**
     * Get the value of the StandardIdForLabel property.
     *
     * @return string standardIdForLabel
     */
    public function getStandardIdForLabel()
    {
        return $this->_fields['StandardIdForLabel']['FieldValue'];
    }

    /**
     * Set the value of the StandardIdForLabel property.
     *
     * @param string standardIdForLabel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStandardIdForLabel($value)
    {
        $this->_fields['StandardIdForLabel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if StandardIdForLabel is set.
     *
     * @return true if StandardIdForLabel is set
     */
    public function isSetStandardIdForLabel()
    {
        return null !== $this->_fields['StandardIdForLabel']['FieldValue'];
    }

    /**
     * Set the value of StandardIdForLabel, return this.
     *
     * @param standardIdForLabel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withStandardIdForLabel($value)
    {
        $this->setStandardIdForLabel($value);

        return $this;
    }
}
