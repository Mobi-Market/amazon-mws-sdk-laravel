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
 * SKUInboundGuidanceList.
 *
 * Properties:
 * <ul>
 *
 * <li>SKUInboundGuidance: array</li>
 *
 * </ul>
 */
class SKUInboundGuidanceList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SKUInboundGuidance' => ['FieldValue' => [], 'FieldType' => ['SKUInboundGuidance']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SKUInboundGuidance property.
     *
     * @return list<SKUInboundGuidance> SKUInboundGuidance
     */
    public function getSKUInboundGuidance()
    {
        if (null == $this->_fields['SKUInboundGuidance']['FieldValue']) {
            $this->_fields['SKUInboundGuidance']['FieldValue'] = [];
        }

        return $this->_fields['SKUInboundGuidance']['FieldValue'];
    }

    /**
     * Set the value of the SKUInboundGuidance property.
     *
     * @param array skuInboundGuidance
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSKUInboundGuidance($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['SKUInboundGuidance']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear SKUInboundGuidance.
     */
    public function unsetSKUInboundGuidance(): void
    {
        $this->_fields['SKUInboundGuidance']['FieldValue'] = [];
    }

    /**
     * Check to see if SKUInboundGuidance is set.
     *
     * @return true if SKUInboundGuidance is set
     */
    public function isSetSKUInboundGuidance()
    {
        return !empty($this->_fields['SKUInboundGuidance']['FieldValue']);
    }

    /**
     * Add values for SKUInboundGuidance, return this.
     *
     * @param skuInboundGuidance
     *             New values to add
     *
     * @return $this instance
     */
    public function withSKUInboundGuidance()
    {
        foreach (\func_get_args() as $SKUInboundGuidance) {
            $this->_fields['SKUInboundGuidance']['FieldValue'][] = $SKUInboundGuidance;
        }

        return $this;
    }
}
