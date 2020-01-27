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
 * FeesEstimateRequestList.
 *
 * Properties:
 * <ul>
 *
 * <li>FeesEstimateRequest: array</li>
 *
 * </ul>
 */
class FeesEstimateRequestList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'FeesEstimateRequest' => ['FieldValue' => [], 'FieldType' => ['FeesEstimateRequest']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the FeesEstimateRequest property.
     *
     * @return List<FeesEstimateRequest> feesEstimateRequest
     */
    public function getFeesEstimateRequest()
    {
        if (null == $this->_fields['FeesEstimateRequest']['FieldValue']) {
            $this->_fields['FeesEstimateRequest']['FieldValue'] = [];
        }

        return $this->_fields['FeesEstimateRequest']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateRequest property.
     *
     * @param array feesEstimateRequest
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeesEstimateRequest($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FeesEstimateRequest']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear FeesEstimateRequest.
     */
    public function unsetFeesEstimateRequest(): void
    {
        $this->_fields['FeesEstimateRequest']['FieldValue'] = [];
    }

    /**
     * Check to see if FeesEstimateRequest is set.
     *
     * @return true if FeesEstimateRequest is set
     */
    public function isSetFeesEstimateRequest()
    {
        return !empty($this->_fields['FeesEstimateRequest']['FieldValue']);
    }

    /**
     * Add values for FeesEstimateRequest, return this.
     *
     * @param feesEstimateRequest
     *             New values to add
     *
     * @return $this instance
     */
    public function withFeesEstimateRequest()
    {
        foreach (\func_get_args() as $FeesEstimateRequest) {
            $this->_fields['FeesEstimateRequest']['FieldValue'][] = $FeesEstimateRequest;
        }

        return $this;
    }
}
