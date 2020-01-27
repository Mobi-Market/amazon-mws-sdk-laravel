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
 * SellerSKUListType.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerSKU: array</li>
 *
 * </ul>
 */
class SellerSKUListType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerSKU' => ['FieldValue' => [], 'FieldType' => ['string']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return List<String> sellerSKU
     */
    public function getSellerSKU()
    {
        if (null == $this->_fields['SellerSKU']['FieldValue']) {
            $this->_fields['SellerSKU']['FieldValue'] = [];
        }

        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param array sellerSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['SellerSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear SellerSKU.
     */
    public function unsetSellerSKU(): void
    {
        $this->_fields['SellerSKU']['FieldValue'] = [];
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set
     */
    public function isSetSellerSKU()
    {
        return !empty($this->_fields['SellerSKU']['FieldValue']);
    }

    /**
     * Add values for SellerSKU, return this.
     *
     * @param sellerSKU
     *             New values to add
     *
     * @return $this instance
     */
    public function withSellerSKU()
    {
        foreach (\func_get_args() as $SellerSKU) {
            $this->_fields['SellerSKU']['FieldValue'][] = $SellerSKU;
        }

        return $this;
    }
}
