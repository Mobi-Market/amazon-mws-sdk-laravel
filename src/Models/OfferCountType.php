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
 * OfferCountType.
 *
 * Properties:
 * <ul>
 *
 * <li>condition: string</li>
 * <li>fulfillmentChannel: string</li>
 * <li>OfferCount: int</li>
 *
 * </ul>
 */
class OfferCountType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'condition'          => ['FieldValue' => null, 'FieldType' => '@string'],
            'fulfillmentChannel' => ['FieldValue' => null, 'FieldType' => '@string'],
            'OfferCount'         => ['FieldValue' => null, 'FieldType' => '.int'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the condition property.
     *
     * @return string condition
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if condition is set.
     *
     * @return true if condition is set
     */
    public function isSetcondition()
    {
        return null !== $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of condition, return this.
     *
     * @param condition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withcondition($value)
    {
        $this->setcondition($value);

        return $this;
    }

    /**
     * Get the value of the fulfillmentChannel property.
     *
     * @return string fulfillmentChannel
     */
    public function getfulfillmentChannel()
    {
        return $this->_fields['fulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the fulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setfulfillmentChannel($value)
    {
        $this->_fields['fulfillmentChannel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if fulfillmentChannel is set.
     *
     * @return true if fulfillmentChannel is set
     */
    public function isSetfulfillmentChannel()
    {
        return null !== $this->_fields['fulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of fulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withfulfillmentChannel($value)
    {
        $this->setfulfillmentChannel($value);

        return $this;
    }

    /**
     * Get the value of the OfferCount property.
     *
     * @return int offerCount
     */
    public function getOfferCount()
    {
        return $this->_fields['OfferCount']['FieldValue'];
    }

    /**
     * Set the value of the OfferCount property.
     *
     * @param int offerCount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOfferCount($value)
    {
        $this->_fields['OfferCount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OfferCount is set.
     *
     * @return true if OfferCount is set
     */
    public function isSetOfferCount()
    {
        return null !== $this->_fields['OfferCount']['FieldValue'];
    }

    /**
     * Set the value of OfferCount, return this.
     *
     * @param offerCount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOfferCount($value)
    {
        $this->setOfferCount($value);

        return $this;
    }
}
