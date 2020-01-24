<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * LabelFormatOptionRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>IncludePackingSlipWithLabel: bool</li>
 *
 * </ul>
 */
class LabelFormatOptionRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'IncludePackingSlipWithLabel' => ['FieldValue' => null, 'FieldType' => 'bool'],
        ];
        parent::__construct($data);
    }

    /**
     * Check the value of IncludePackingSlipWithLabel.
     *
     * @return true if IncludePackingSlipWithLabel is set to true
     */
    public function isIncludePackingSlipWithLabel()
    {
        return null !== $this->_fields['IncludePackingSlipWithLabel']['FieldValue'] && $this->_fields['IncludePackingSlipWithLabel']['FieldValue'];
    }

    /**
     * Get the value of the IncludePackingSlipWithLabel property.
     *
     * @return bool includePackingSlipWithLabel
     */
    public function getIncludePackingSlipWithLabel()
    {
        return $this->_fields['IncludePackingSlipWithLabel']['FieldValue'];
    }

    /**
     * Set the value of the IncludePackingSlipWithLabel property.
     *
     * @param bool includePackingSlipWithLabel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIncludePackingSlipWithLabel($value)
    {
        $this->_fields['IncludePackingSlipWithLabel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IncludePackingSlipWithLabel is set.
     *
     * @return true if IncludePackingSlipWithLabel is set
     */
    public function isSetIncludePackingSlipWithLabel()
    {
        return null !== $this->_fields['IncludePackingSlipWithLabel']['FieldValue'];
    }

    /**
     * Set the value of IncludePackingSlipWithLabel, return this.
     *
     * @param includePackingSlipWithLabel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIncludePackingSlipWithLabel($value)
    {
        $this->setIncludePackingSlipWithLabel($value);

        return $this;
    }
}
