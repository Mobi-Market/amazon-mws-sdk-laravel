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
 * GetInboundGuidanceForSKUResult.
 *
 * Properties:
 * <ul>
 *
 * <li>SKUInboundGuidanceList: SKUInboundGuidanceList</li>
 * <li>InvalidSKUList: InvalidSKUList</li>
 *
 * </ul>
 */
class GetInboundGuidanceForSKUResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SKUInboundGuidanceList' => ['FieldValue' => null, 'FieldType' => 'SKUInboundGuidanceList'],
            'InvalidSKUList'         => ['FieldValue' => null, 'FieldType' => 'InvalidSKUList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SKUInboundGuidanceList property.
     *
     * @return SKUInboundGuidanceList SKUInboundGuidanceList
     */
    public function getSKUInboundGuidanceList()
    {
        return $this->_fields['SKUInboundGuidanceList']['FieldValue'];
    }

    /**
     * Set the value of the SKUInboundGuidanceList property.
     *
     * @param SKUInboundGuidanceList skuInboundGuidanceList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSKUInboundGuidanceList($value)
    {
        $this->_fields['SKUInboundGuidanceList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SKUInboundGuidanceList is set.
     *
     * @return true if SKUInboundGuidanceList is set
     */
    public function isSetSKUInboundGuidanceList()
    {
        return null !== $this->_fields['SKUInboundGuidanceList']['FieldValue'];
    }

    /**
     * Set the value of SKUInboundGuidanceList, return this.
     *
     * @param skuInboundGuidanceList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSKUInboundGuidanceList($value)
    {
        $this->setSKUInboundGuidanceList($value);

        return $this;
    }

    /**
     * Get the value of the InvalidSKUList property.
     *
     * @return InvalidSKUList invalidSKUList
     */
    public function getInvalidSKUList()
    {
        return $this->_fields['InvalidSKUList']['FieldValue'];
    }

    /**
     * Set the value of the InvalidSKUList property.
     *
     * @param InvalidSKUList invalidSKUList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvalidSKUList($value)
    {
        $this->_fields['InvalidSKUList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InvalidSKUList is set.
     *
     * @return true if InvalidSKUList is set
     */
    public function isSetInvalidSKUList()
    {
        return null !== $this->_fields['InvalidSKUList']['FieldValue'];
    }

    /**
     * Set the value of InvalidSKUList, return this.
     *
     * @param invalidSKUList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInvalidSKUList($value)
    {
        $this->setInvalidSKUList($value);

        return $this;
    }
}
