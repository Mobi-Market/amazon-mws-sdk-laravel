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
 * AmazonPrepFeesDetailsList.
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonPrepFeesDetails: array</li>
 *
 * </ul>
 */
class AmazonPrepFeesDetailsList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonPrepFeesDetails' => ['FieldValue' => [], 'FieldType' => ['AmazonPrepFeesDetails']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AmazonPrepFeesDetails property.
     *
     * @return List<AmazonPrepFeesDetails> amazonPrepFeesDetails
     */
    public function getAmazonPrepFeesDetails()
    {
        if (null == $this->_fields['AmazonPrepFeesDetails']['FieldValue']) {
            $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = [];
        }

        return $this->_fields['AmazonPrepFeesDetails']['FieldValue'];
    }

    /**
     * Set the value of the AmazonPrepFeesDetails property.
     *
     * @param array amazonPrepFeesDetails
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonPrepFeesDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AmazonPrepFeesDetails.
     */
    public function unsetAmazonPrepFeesDetails(): void
    {
        $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = [];
    }

    /**
     * Check to see if AmazonPrepFeesDetails is set.
     *
     * @return true if AmazonPrepFeesDetails is set
     */
    public function isSetAmazonPrepFeesDetails()
    {
        return !empty($this->_fields['AmazonPrepFeesDetails']['FieldValue']);
    }

    /**
     * Add values for AmazonPrepFeesDetails, return this.
     *
     * @param amazonPrepFeesDetails
     *             New values to add
     *
     * @return $this instance
     */
    public function withAmazonPrepFeesDetails()
    {
        foreach (\func_get_args() as $AmazonPrepFeesDetails) {
            $this->_fields['AmazonPrepFeesDetails']['FieldValue'][] = $AmazonPrepFeesDetails;
        }

        return $this;
    }
}
