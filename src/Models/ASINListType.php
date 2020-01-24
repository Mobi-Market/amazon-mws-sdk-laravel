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
 * ASINListType.
 *
 * Properties:
 * <ul>
 *
 * <li>ASIN: array</li>
 *
 * </ul>
 */
class ASINListType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ASIN' => ['FieldValue' => [], 'FieldType' => ['string']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return list<String> ASIN
     */
    public function getASIN()
    {
        if (null == $this->_fields['ASIN']['FieldValue']) {
            $this->_fields['ASIN']['FieldValue'] = [];
        }

        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param array asin
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASIN($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ASIN']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ASIN.
     */
    public function unsetASIN(): void
    {
        $this->_fields['ASIN']['FieldValue'] = [];
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set
     */
    public function isSetASIN()
    {
        return !empty($this->_fields['ASIN']['FieldValue']);
    }

    /**
     * Add values for ASIN, return this.
     *
     * @param asin
     *             New values to add
     *
     * @return $this instance
     */
    public function withASIN()
    {
        foreach (\func_get_args() as $ASIN) {
            $this->_fields['ASIN']['FieldValue'][] = $ASIN;
        }

        return $this;
    }
}
