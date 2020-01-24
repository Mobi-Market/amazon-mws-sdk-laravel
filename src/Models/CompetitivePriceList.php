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
 * CompetitivePriceList.
 *
 * Properties:
 * <ul>
 *
 * <li>CompetitivePrice: array</li>
 *
 * </ul>
 */
class CompetitivePriceList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CompetitivePrice' => ['FieldValue' => [], 'FieldType' => ['CompetitivePriceType']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the CompetitivePrice property.
     *
     * @return List<CompetitivePriceType> competitivePrice
     */
    public function getCompetitivePrice()
    {
        if (null == $this->_fields['CompetitivePrice']['FieldValue']) {
            $this->_fields['CompetitivePrice']['FieldValue'] = [];
        }

        return $this->_fields['CompetitivePrice']['FieldValue'];
    }

    /**
     * Set the value of the CompetitivePrice property.
     *
     * @param array competitivePrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCompetitivePrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['CompetitivePrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear CompetitivePrice.
     */
    public function unsetCompetitivePrice(): void
    {
        $this->_fields['CompetitivePrice']['FieldValue'] = [];
    }

    /**
     * Check to see if CompetitivePrice is set.
     *
     * @return true if CompetitivePrice is set
     */
    public function isSetCompetitivePrice()
    {
        return !empty($this->_fields['CompetitivePrice']['FieldValue']);
    }

    /**
     * Add values for CompetitivePrice, return this.
     *
     * @param competitivePrice
     *             New values to add
     *
     * @return $this instance
     */
    public function withCompetitivePrice()
    {
        foreach (\func_get_args() as $CompetitivePrice) {
            $this->_fields['CompetitivePrice']['FieldValue'][] = $CompetitivePrice;
        }

        return $this;
    }
}
