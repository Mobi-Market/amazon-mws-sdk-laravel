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
 * ASINInboundGuidance.
 *
 * Properties:
 * <ul>
 *
 * <li>ASIN: string</li>
 * <li>InboundGuidance: string</li>
 * <li>GuidanceReasonList: GuidanceReasonList</li>
 *
 * </ul>
 */
class ASINInboundGuidance extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ASIN'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'InboundGuidance'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'GuidanceReasonList' => ['FieldValue' => null, 'FieldType' => 'GuidanceReasonList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return string ASIN
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set
     */
    public function isSetASIN()
    {
        return null !== $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withASIN($value)
    {
        $this->setASIN($value);

        return $this;
    }

    /**
     * Get the value of the InboundGuidance property.
     *
     * @return string inboundGuidance
     */
    public function getInboundGuidance()
    {
        return $this->_fields['InboundGuidance']['FieldValue'];
    }

    /**
     * Set the value of the InboundGuidance property.
     *
     * @param string inboundGuidance
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInboundGuidance($value)
    {
        $this->_fields['InboundGuidance']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InboundGuidance is set.
     *
     * @return true if InboundGuidance is set
     */
    public function isSetInboundGuidance()
    {
        return null !== $this->_fields['InboundGuidance']['FieldValue'];
    }

    /**
     * Set the value of InboundGuidance, return this.
     *
     * @param inboundGuidance
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInboundGuidance($value)
    {
        $this->setInboundGuidance($value);

        return $this;
    }

    /**
     * Get the value of the GuidanceReasonList property.
     *
     * @return GuidanceReasonList guidanceReasonList
     */
    public function getGuidanceReasonList()
    {
        return $this->_fields['GuidanceReasonList']['FieldValue'];
    }

    /**
     * Set the value of the GuidanceReasonList property.
     *
     * @param GuidanceReasonList guidanceReasonList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGuidanceReasonList($value)
    {
        $this->_fields['GuidanceReasonList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GuidanceReasonList is set.
     *
     * @return true if GuidanceReasonList is set
     */
    public function isSetGuidanceReasonList()
    {
        return null !== $this->_fields['GuidanceReasonList']['FieldValue'];
    }

    /**
     * Set the value of GuidanceReasonList, return this.
     *
     * @param guidanceReasonList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGuidanceReasonList($value)
    {
        $this->setGuidanceReasonList($value);

        return $this;
    }
}
