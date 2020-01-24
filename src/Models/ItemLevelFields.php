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
 * ItemLevelFields.
 *
 * Properties:
 * <ul>
 *
 * <li>Asin: string</li>
 * <li>AdditionalInputs: array</li>
 *
 * </ul>
 */
class ItemLevelFields extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Asin'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'AdditionalInputs' => ['FieldValue' => [], 'FieldType' => ['AdditionalInputs'], 'ListMemberName' => 'member'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Asin property.
     *
     * @return string asin
     */
    public function getAsin()
    {
        return $this->_fields['Asin']['FieldValue'];
    }

    /**
     * Set the value of the Asin property.
     *
     * @param string asin
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAsin($value)
    {
        $this->_fields['Asin']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Asin is set.
     *
     * @return true if Asin is set
     */
    public function isSetAsin()
    {
        return null !== $this->_fields['Asin']['FieldValue'];
    }

    /**
     * Set the value of Asin, return this.
     *
     * @param asin
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAsin($value)
    {
        $this->setAsin($value);

        return $this;
    }

    /**
     * Get the value of the AdditionalInputs property.
     *
     * @return List<AdditionalInputs> additionalInputs
     */
    public function getAdditionalInputs()
    {
        if (null == $this->_fields['AdditionalInputs']['FieldValue']) {
            $this->_fields['AdditionalInputs']['FieldValue'] = [];
        }

        return $this->_fields['AdditionalInputs']['FieldValue'];
    }

    /**
     * Set the value of the AdditionalInputs property.
     *
     * @param array additionalInputs
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAdditionalInputs($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AdditionalInputs']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AdditionalInputs.
     */
    public function unsetAdditionalInputs(): void
    {
        $this->_fields['AdditionalInputs']['FieldValue'] = [];
    }

    /**
     * Check to see if AdditionalInputs is set.
     *
     * @return true if AdditionalInputs is set
     */
    public function isSetAdditionalInputs()
    {
        return !empty($this->_fields['AdditionalInputs']['FieldValue']);
    }

    /**
     * Add values for AdditionalInputs, return this.
     *
     * @param additionalInputs
     *             New values to add
     *
     * @return $this instance
     */
    public function withAdditionalInputs()
    {
        foreach (\func_get_args() as $AdditionalInputs) {
            $this->_fields['AdditionalInputs']['FieldValue'][] = $AdditionalInputs;
        }

        return $this;
    }
}
