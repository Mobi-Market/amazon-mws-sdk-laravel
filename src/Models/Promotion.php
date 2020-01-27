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
 * Promotion.
 *
 * Properties:
 * <ul>
 *
 * <li>PromotionType: string</li>
 * <li>PromotionId: string</li>
 * <li>PromotionAmount: Currency</li>
 *
 * </ul>
 */
class Promotion extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PromotionType'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'PromotionId'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'PromotionAmount' => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PromotionType property.
     *
     * @return string promotionType
     */
    public function getPromotionType()
    {
        return $this->_fields['PromotionType']['FieldValue'];
    }

    /**
     * Set the value of the PromotionType property.
     *
     * @param string promotionType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromotionType($value)
    {
        $this->_fields['PromotionType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PromotionType is set.
     *
     * @return true if PromotionType is set
     */
    public function isSetPromotionType()
    {
        return null !== $this->_fields['PromotionType']['FieldValue'];
    }

    /**
     * Set the value of PromotionType, return this.
     *
     * @param promotionType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPromotionType($value)
    {
        $this->setPromotionType($value);

        return $this;
    }

    /**
     * Get the value of the PromotionId property.
     *
     * @return string promotionId
     */
    public function getPromotionId()
    {
        return $this->_fields['PromotionId']['FieldValue'];
    }

    /**
     * Set the value of the PromotionId property.
     *
     * @param string promotionId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromotionId($value)
    {
        $this->_fields['PromotionId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PromotionId is set.
     *
     * @return true if PromotionId is set
     */
    public function isSetPromotionId()
    {
        return null !== $this->_fields['PromotionId']['FieldValue'];
    }

    /**
     * Set the value of PromotionId, return this.
     *
     * @param promotionId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPromotionId($value)
    {
        $this->setPromotionId($value);

        return $this;
    }

    /**
     * Get the value of the PromotionAmount property.
     *
     * @return Currency promotionAmount
     */
    public function getPromotionAmount()
    {
        return $this->_fields['PromotionAmount']['FieldValue'];
    }

    /**
     * Set the value of the PromotionAmount property.
     *
     * @param Currency promotionAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromotionAmount($value)
    {
        $this->_fields['PromotionAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PromotionAmount is set.
     *
     * @return true if PromotionAmount is set
     */
    public function isSetPromotionAmount()
    {
        return null !== $this->_fields['PromotionAmount']['FieldValue'];
    }

    /**
     * Set the value of PromotionAmount, return this.
     *
     * @param promotionAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPromotionAmount($value)
    {
        $this->setPromotionAmount($value);

        return $this;
    }
}
