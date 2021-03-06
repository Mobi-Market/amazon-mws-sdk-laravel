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
 * PrepDetails.
 *
 * Properties:
 * <ul>
 *
 * <li>PrepInstruction: string</li>
 * <li>PrepOwner: string</li>
 *
 * </ul>
 */
class PrepDetails extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PrepInstruction' => ['FieldValue' => null, 'FieldType' => 'string'],
            'PrepOwner'       => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PrepInstruction property.
     *
     * @return string prepInstruction
     */
    public function getPrepInstruction()
    {
        return $this->_fields['PrepInstruction']['FieldValue'];
    }

    /**
     * Set the value of the PrepInstruction property.
     *
     * @param string prepInstruction
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPrepInstruction($value)
    {
        $this->_fields['PrepInstruction']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PrepInstruction is set.
     *
     * @return true if PrepInstruction is set
     */
    public function isSetPrepInstruction()
    {
        return null !== $this->_fields['PrepInstruction']['FieldValue'];
    }

    /**
     * Set the value of PrepInstruction, return this.
     *
     * @param prepInstruction
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPrepInstruction($value)
    {
        $this->setPrepInstruction($value);

        return $this;
    }

    /**
     * Get the value of the PrepOwner property.
     *
     * @return string prepOwner
     */
    public function getPrepOwner()
    {
        return $this->_fields['PrepOwner']['FieldValue'];
    }

    /**
     * Set the value of the PrepOwner property.
     *
     * @param string prepOwner
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPrepOwner($value)
    {
        $this->_fields['PrepOwner']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PrepOwner is set.
     *
     * @return true if PrepOwner is set
     */
    public function isSetPrepOwner()
    {
        return null !== $this->_fields['PrepOwner']['FieldValue'];
    }

    /**
     * Set the value of PrepOwner, return this.
     *
     * @param prepOwner
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPrepOwner($value)
    {
        $this->setPrepOwner($value);

        return $this;
    }
}
