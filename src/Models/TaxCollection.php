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
 * TaxCollection.
 *
 * Properties:
 * <ul>
 *
 * <li>Model: string</li>
 * <li>ResponsibleParty: string</li>
 *
 * </ul>
 */
class TaxCollection extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Model'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'ResponsibleParty' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Model property.
     *
     * @return string model
     */
    public function getModel()
    {
        return $this->_fields['Model']['FieldValue'];
    }

    /**
     * Set the value of the Model property.
     *
     * @param string model
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setModel($value)
    {
        $this->_fields['Model']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Model is set.
     *
     * @return true if Model is set
     */
    public function isSetModel()
    {
        return null !== $this->_fields['Model']['FieldValue'];
    }

    /**
     * Set the value of Model, return this.
     *
     * @param model
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withModel($value)
    {
        $this->setModel($value);

        return $this;
    }

    /**
     * Get the value of the ResponsibleParty property.
     *
     * @return string responsibleParty
     */
    public function getResponsibleParty()
    {
        return $this->_fields['ResponsibleParty']['FieldValue'];
    }

    /**
     * Set the value of the ResponsibleParty property.
     *
     * @param string responsibleParty
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setResponsibleParty($value)
    {
        $this->_fields['ResponsibleParty']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ResponsibleParty is set.
     *
     * @return true if ResponsibleParty is set
     */
    public function isSetResponsibleParty()
    {
        return null !== $this->_fields['ResponsibleParty']['FieldValue'];
    }

    /**
     * Set the value of ResponsibleParty, return this.
     *
     * @param responsibleParty
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withResponsibleParty($value)
    {
        $this->setResponsibleParty($value);

        return $this;
    }
}
