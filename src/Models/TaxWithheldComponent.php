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
 * TaxWithheldComponent.
 *
 * Properties:
 * <ul>
 *
 * <li>TaxCollectionModel: string</li>
 * <li>TaxesWithheld: array</li>
 *
 * </ul>
 */
class TaxWithheldComponent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TaxCollectionModel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'TaxesWithheld'      => ['FieldValue' => [], 'FieldType' => ['ChargeComponent'], 'ListMemberName' => 'ChargeComponent'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TaxCollectionModel property.
     *
     * @return string taxCollectionModel
     */
    public function getTaxCollectionModel()
    {
        return $this->_fields['TaxCollectionModel']['FieldValue'];
    }

    /**
     * Set the value of the TaxCollectionModel property.
     *
     * @param string taxCollectionModel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxCollectionModel($value)
    {
        $this->_fields['TaxCollectionModel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TaxCollectionModel is set.
     *
     * @return true if TaxCollectionModel is set
     */
    public function isSetTaxCollectionModel()
    {
        return null !== $this->_fields['TaxCollectionModel']['FieldValue'];
    }

    /**
     * Set the value of TaxCollectionModel, return this.
     *
     * @param taxCollectionModel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTaxCollectionModel($value)
    {
        $this->setTaxCollectionModel($value);

        return $this;
    }

    /**
     * Get the value of the TaxesWithheld property.
     *
     * @return List<ChargeComponent> taxesWithheld
     */
    public function getTaxesWithheld()
    {
        if (null == $this->_fields['TaxesWithheld']['FieldValue']) {
            $this->_fields['TaxesWithheld']['FieldValue'] = [];
        }

        return $this->_fields['TaxesWithheld']['FieldValue'];
    }

    /**
     * Set the value of the TaxesWithheld property.
     *
     * @param array taxesWithheld
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxesWithheld($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['TaxesWithheld']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear TaxesWithheld.
     */
    public function unsetTaxesWithheld(): void
    {
        $this->_fields['TaxesWithheld']['FieldValue'] = [];
    }

    /**
     * Check to see if TaxesWithheld is set.
     *
     * @return true if TaxesWithheld is set
     */
    public function isSetTaxesWithheld()
    {
        return !empty($this->_fields['TaxesWithheld']['FieldValue']);
    }

    /**
     * Add values for TaxesWithheld, return this.
     *
     * @param taxesWithheld
     *             New values to add
     *
     * @return $this instance
     */
    public function withTaxesWithheld()
    {
        foreach (\func_get_args() as $TaxesWithheld) {
            $this->_fields['TaxesWithheld']['FieldValue'][] = $TaxesWithheld;
        }

        return $this;
    }
}
