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
 * GuidanceReasonList.
 *
 * Properties:
 * <ul>
 *
 * <li>GuidanceReason: array</li>
 *
 * </ul>
 */
class GuidanceReasonList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'GuidanceReason' => ['FieldValue' => [], 'FieldType' => ['string']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the GuidanceReason property.
     *
     * @return List<String> guidanceReason
     */
    public function getGuidanceReason()
    {
        if (null == $this->_fields['GuidanceReason']['FieldValue']) {
            $this->_fields['GuidanceReason']['FieldValue'] = [];
        }

        return $this->_fields['GuidanceReason']['FieldValue'];
    }

    /**
     * Set the value of the GuidanceReason property.
     *
     * @param array guidanceReason
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGuidanceReason($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['GuidanceReason']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear GuidanceReason.
     */
    public function unsetGuidanceReason(): void
    {
        $this->_fields['GuidanceReason']['FieldValue'] = [];
    }

    /**
     * Check to see if GuidanceReason is set.
     *
     * @return true if GuidanceReason is set
     */
    public function isSetGuidanceReason()
    {
        return !empty($this->_fields['GuidanceReason']['FieldValue']);
    }

    /**
     * Add values for GuidanceReason, return this.
     *
     * @param guidanceReason
     *             New values to add
     *
     * @return $this instance
     */
    public function withGuidanceReason()
    {
        foreach (\func_get_args() as $GuidanceReason) {
            $this->_fields['GuidanceReason']['FieldValue'][] = $GuidanceReason;
        }

        return $this;
    }
}
