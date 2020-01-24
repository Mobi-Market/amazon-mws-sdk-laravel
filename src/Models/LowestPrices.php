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
 * LowestPrices.
 *
 * Properties:
 * <ul>
 *
 * <li>LowestPrice: array</li>
 *
 * </ul>
 */
class LowestPrices extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'LowestPrice' => ['FieldValue' => [], 'FieldType' => ['LowestPriceType']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the LowestPrice property.
     *
     * @return List<LowestPriceType> lowestPrice
     */
    public function getLowestPrice()
    {
        if (null == $this->_fields['LowestPrice']['FieldValue']) {
            $this->_fields['LowestPrice']['FieldValue'] = [];
        }

        return $this->_fields['LowestPrice']['FieldValue'];
    }

    /**
     * Set the value of the LowestPrice property.
     *
     * @param array lowestPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLowestPrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['LowestPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear LowestPrice.
     */
    public function unsetLowestPrice(): void
    {
        $this->_fields['LowestPrice']['FieldValue'] = [];
    }

    /**
     * Check to see if LowestPrice is set.
     *
     * @return true if LowestPrice is set
     */
    public function isSetLowestPrice()
    {
        return !empty($this->_fields['LowestPrice']['FieldValue']);
    }

    /**
     * Add values for LowestPrice, return this.
     *
     * @param lowestPrice
     *             New values to add
     *
     * @return $this instance
     */
    public function withLowestPrice()
    {
        foreach (\func_get_args() as $LowestPrice) {
            $this->_fields['LowestPrice']['FieldValue'][] = $LowestPrice;
        }

        return $this;
    }
}
