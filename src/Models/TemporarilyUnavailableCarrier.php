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
 * TemporarilyUnavailableCarrier.
 *
 * Properties:
 * <ul>
 *
 * <li>CarrierName: string</li>
 *
 * </ul>
 */
class TemporarilyUnavailableCarrier extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CarrierName' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return string carrierName
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set
     */
    public function isSetCarrierName()
    {
        return null !== $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);

        return $this;
    }
}
