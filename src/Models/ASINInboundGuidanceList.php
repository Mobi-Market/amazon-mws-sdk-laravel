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
 * ASINInboundGuidanceList.
 *
 * Properties:
 * <ul>
 *
 * <li>ASINInboundGuidance: array</li>
 *
 * </ul>
 */
class ASINInboundGuidanceList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ASINInboundGuidance' => ['FieldValue' => [], 'FieldType' => ['ASINInboundGuidance']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ASINInboundGuidance property.
     *
     * @return list<ASINInboundGuidance> ASINInboundGuidance
     */
    public function getASINInboundGuidance()
    {
        if (null == $this->_fields['ASINInboundGuidance']['FieldValue']) {
            $this->_fields['ASINInboundGuidance']['FieldValue'] = [];
        }

        return $this->_fields['ASINInboundGuidance']['FieldValue'];
    }

    /**
     * Set the value of the ASINInboundGuidance property.
     *
     * @param array asinInboundGuidance
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASINInboundGuidance($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ASINInboundGuidance']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ASINInboundGuidance.
     */
    public function unsetASINInboundGuidance(): void
    {
        $this->_fields['ASINInboundGuidance']['FieldValue'] = [];
    }

    /**
     * Check to see if ASINInboundGuidance is set.
     *
     * @return true if ASINInboundGuidance is set
     */
    public function isSetASINInboundGuidance()
    {
        return !empty($this->_fields['ASINInboundGuidance']['FieldValue']);
    }

    /**
     * Add values for ASINInboundGuidance, return this.
     *
     * @param asinInboundGuidance
     *             New values to add
     *
     * @return $this instance
     */
    public function withASINInboundGuidance()
    {
        foreach (\func_get_args() as $ASINInboundGuidance) {
            $this->_fields['ASINInboundGuidance']['FieldValue'][] = $ASINInboundGuidance;
        }

        return $this;
    }
}
