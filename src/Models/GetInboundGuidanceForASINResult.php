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
 * GetInboundGuidanceForASINResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ASINInboundGuidanceList: ASINInboundGuidanceList</li>
 * <li>InvalidASINList: InvalidASINList</li>
 *
 * </ul>
 */
class GetInboundGuidanceForASINResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ASINInboundGuidanceList' => ['FieldValue' => null, 'FieldType' => 'ASINInboundGuidanceList'],
            'InvalidASINList'         => ['FieldValue' => null, 'FieldType' => 'InvalidASINList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ASINInboundGuidanceList property.
     *
     * @return ASINInboundGuidanceList ASINInboundGuidanceList
     */
    public function getASINInboundGuidanceList()
    {
        return $this->_fields['ASINInboundGuidanceList']['FieldValue'];
    }

    /**
     * Set the value of the ASINInboundGuidanceList property.
     *
     * @param ASINInboundGuidanceList asinInboundGuidanceList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASINInboundGuidanceList($value)
    {
        $this->_fields['ASINInboundGuidanceList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ASINInboundGuidanceList is set.
     *
     * @return true if ASINInboundGuidanceList is set
     */
    public function isSetASINInboundGuidanceList()
    {
        return null !== $this->_fields['ASINInboundGuidanceList']['FieldValue'];
    }

    /**
     * Set the value of ASINInboundGuidanceList, return this.
     *
     * @param asinInboundGuidanceList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withASINInboundGuidanceList($value)
    {
        $this->setASINInboundGuidanceList($value);

        return $this;
    }

    /**
     * Get the value of the InvalidASINList property.
     *
     * @return InvalidASINList invalidASINList
     */
    public function getInvalidASINList()
    {
        return $this->_fields['InvalidASINList']['FieldValue'];
    }

    /**
     * Set the value of the InvalidASINList property.
     *
     * @param InvalidASINList invalidASINList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvalidASINList($value)
    {
        $this->_fields['InvalidASINList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InvalidASINList is set.
     *
     * @return true if InvalidASINList is set
     */
    public function isSetInvalidASINList()
    {
        return null !== $this->_fields['InvalidASINList']['FieldValue'];
    }

    /**
     * Set the value of InvalidASINList, return this.
     *
     * @param invalidASINList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInvalidASINList($value)
    {
        $this->setInvalidASINList($value);

        return $this;
    }
}
