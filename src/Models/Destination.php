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
 * Destination.
 *
 * Properties:
 * <ul>
 *
 * <li>DeliveryChannel: string</li>
 * <li>AttributeList: AttributeKeyValueList</li>
 *
 * </ul>
 */
class Destination extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'DeliveryChannel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AttributeList'   => ['FieldValue' => null, 'FieldType' => 'AttributeKeyValueList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryChannel property.
     *
     * @return string deliveryChannel
     */
    public function getDeliveryChannel()
    {
        return $this->_fields['DeliveryChannel']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryChannel property.
     *
     * @param string deliveryChannel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDeliveryChannel($value)
    {
        $this->_fields['DeliveryChannel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DeliveryChannel is set.
     *
     * @return true if DeliveryChannel is set
     */
    public function isSetDeliveryChannel()
    {
        return null !== $this->_fields['DeliveryChannel']['FieldValue'];
    }

    /**
     * Set the value of DeliveryChannel, return this.
     *
     * @param deliveryChannel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDeliveryChannel($value)
    {
        $this->setDeliveryChannel($value);

        return $this;
    }

    /**
     * Get the value of the AttributeList property.
     *
     * @return AttributeKeyValueList attributeList
     */
    public function getAttributeList()
    {
        return $this->_fields['AttributeList']['FieldValue'];
    }

    /**
     * Set the value of the AttributeList property.
     *
     * @param AttributeKeyValueList attributeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAttributeList($value)
    {
        $this->_fields['AttributeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AttributeList is set.
     *
     * @return true if AttributeList is set
     */
    public function isSetAttributeList()
    {
        return null !== $this->_fields['AttributeList']['FieldValue'];
    }

    /**
     * Set the value of AttributeList, return this.
     *
     * @param attributeList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAttributeList($value)
    {
        $this->setAttributeList($value);

        return $this;
    }
}
