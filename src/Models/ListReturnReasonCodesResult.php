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
 * ListReturnReasonCodesResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ReasonCodeDetailsList: ReasonCodeDetailsList</li>
 *
 * </ul>
 */
class ListReturnReasonCodesResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ReasonCodeDetailsList' => ['FieldValue' => null, 'FieldType' => 'ReasonCodeDetailsList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ReasonCodeDetailsList property.
     *
     * @return ReasonCodeDetailsList reasonCodeDetailsList
     */
    public function getReasonCodeDetailsList()
    {
        return $this->_fields['ReasonCodeDetailsList']['FieldValue'];
    }

    /**
     * Set the value of the ReasonCodeDetailsList property.
     *
     * @param ReasonCodeDetailsList reasonCodeDetailsList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReasonCodeDetailsList($value)
    {
        $this->_fields['ReasonCodeDetailsList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReasonCodeDetailsList is set.
     *
     * @return true if ReasonCodeDetailsList is set
     */
    public function isSetReasonCodeDetailsList()
    {
        return null !== $this->_fields['ReasonCodeDetailsList']['FieldValue'];
    }

    /**
     * Set the value of ReasonCodeDetailsList, return this.
     *
     * @param reasonCodeDetailsList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReasonCodeDetailsList($value)
    {
        $this->setReasonCodeDetailsList($value);

        return $this;
    }
}
