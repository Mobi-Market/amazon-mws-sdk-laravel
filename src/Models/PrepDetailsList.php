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
 * PrepDetailsList.
 *
 * Properties:
 * <ul>
 *
 * <li>PrepDetails: array</li>
 *
 * </ul>
 */
class PrepDetailsList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PrepDetails' => ['FieldValue' => [], 'FieldType' => ['PrepDetails']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PrepDetails property.
     *
     * @return List<PrepDetails> prepDetails
     */
    public function getPrepDetails()
    {
        if (null == $this->_fields['PrepDetails']['FieldValue']) {
            $this->_fields['PrepDetails']['FieldValue'] = [];
        }

        return $this->_fields['PrepDetails']['FieldValue'];
    }

    /**
     * Set the value of the PrepDetails property.
     *
     * @param array prepDetails
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPrepDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PrepDetails']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PrepDetails.
     */
    public function unsetPrepDetails(): void
    {
        $this->_fields['PrepDetails']['FieldValue'] = [];
    }

    /**
     * Check to see if PrepDetails is set.
     *
     * @return true if PrepDetails is set
     */
    public function isSetPrepDetails()
    {
        return !empty($this->_fields['PrepDetails']['FieldValue']);
    }

    /**
     * Add values for PrepDetails, return this.
     *
     * @param prepDetails
     *             New values to add
     *
     * @return $this instance
     */
    public function withPrepDetails()
    {
        foreach (\func_get_args() as $PrepDetails) {
            $this->_fields['PrepDetails']['FieldValue'][] = $PrepDetails;
        }

        return $this;
    }
}
