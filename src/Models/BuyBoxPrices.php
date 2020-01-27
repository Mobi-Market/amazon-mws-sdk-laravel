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
 * BuyBoxPrices.
 *
 * Properties:
 * <ul>
 *
 * <li>BuyBoxPrice: array</li>
 *
 * </ul>
 */
class BuyBoxPrices extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'BuyBoxPrice' => ['FieldValue' => [], 'FieldType' => ['BuyBoxPriceType']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the BuyBoxPrice property.
     *
     * @return List<BuyBoxPriceType> buyBoxPrice
     */
    public function getBuyBoxPrice()
    {
        if (null == $this->_fields['BuyBoxPrice']['FieldValue']) {
            $this->_fields['BuyBoxPrice']['FieldValue'] = [];
        }

        return $this->_fields['BuyBoxPrice']['FieldValue'];
    }

    /**
     * Set the value of the BuyBoxPrice property.
     *
     * @param array buyBoxPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyBoxPrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['BuyBoxPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear BuyBoxPrice.
     */
    public function unsetBuyBoxPrice(): void
    {
        $this->_fields['BuyBoxPrice']['FieldValue'] = [];
    }

    /**
     * Check to see if BuyBoxPrice is set.
     *
     * @return true if BuyBoxPrice is set
     */
    public function isSetBuyBoxPrice()
    {
        return !empty($this->_fields['BuyBoxPrice']['FieldValue']);
    }

    /**
     * Add values for BuyBoxPrice, return this.
     *
     * @param buyBoxPrice
     *             New values to add
     *
     * @return $this instance
     */
    public function withBuyBoxPrice()
    {
        foreach (\func_get_args() as $BuyBoxPrice) {
            $this->_fields['BuyBoxPrice']['FieldValue'][] = $BuyBoxPrice;
        }

        return $this;
    }
}
