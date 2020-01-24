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
 * FeesEstimateResultList.
 *
 * Properties:
 * <ul>
 *
 * <li>FeesEstimateResult: array</li>
 *
 * </ul>
 */
class FeesEstimateResultList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'FeesEstimateResult' => ['FieldValue' => [], 'FieldType' => ['FeesEstimateResult']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the FeesEstimateResult property.
     *
     * @return List<FeesEstimateResult> feesEstimateResult
     */
    public function getFeesEstimateResult()
    {
        if (null == $this->_fields['FeesEstimateResult']['FieldValue']) {
            $this->_fields['FeesEstimateResult']['FieldValue'] = [];
        }

        return $this->_fields['FeesEstimateResult']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateResult property.
     *
     * @param array feesEstimateResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeesEstimateResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FeesEstimateResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear FeesEstimateResult.
     */
    public function unsetFeesEstimateResult(): void
    {
        $this->_fields['FeesEstimateResult']['FieldValue'] = [];
    }

    /**
     * Check to see if FeesEstimateResult is set.
     *
     * @return true if FeesEstimateResult is set
     */
    public function isSetFeesEstimateResult()
    {
        return !empty($this->_fields['FeesEstimateResult']['FieldValue']);
    }

    /**
     * Add values for FeesEstimateResult, return this.
     *
     * @param feesEstimateResult
     *             New values to add
     *
     * @return $this instance
     */
    public function withFeesEstimateResult()
    {
        foreach (\func_get_args() as $FeesEstimateResult) {
            $this->_fields['FeesEstimateResult']['FieldValue'][] = $FeesEstimateResult;
        }

        return $this;
    }
}
