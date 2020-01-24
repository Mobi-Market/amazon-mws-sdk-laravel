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
 * ScheduledDeliveryInfo.
 *
 * Properties:
 * <ul>
 *
 * <li>DeliveryTimeZone: string</li>
 * <li>DeliveryWindows: DeliveryWindowList</li>
 *
 * </ul>
 */
class ScheduledDeliveryInfo extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'DeliveryTimeZone' => ['FieldValue' => null, 'FieldType' => 'string'],
            'DeliveryWindows'  => ['FieldValue' => null, 'FieldType' => 'DeliveryWindowList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryTimeZone property.
     *
     * @return string deliveryTimeZone
     */
    public function getDeliveryTimeZone()
    {
        return $this->_fields['DeliveryTimeZone']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryTimeZone property.
     *
     * @param string deliveryTimeZone
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDeliveryTimeZone($value)
    {
        $this->_fields['DeliveryTimeZone']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DeliveryTimeZone is set.
     *
     * @return true if DeliveryTimeZone is set
     */
    public function isSetDeliveryTimeZone()
    {
        return null !== $this->_fields['DeliveryTimeZone']['FieldValue'];
    }

    /**
     * Set the value of DeliveryTimeZone, return this.
     *
     * @param deliveryTimeZone
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDeliveryTimeZone($value)
    {
        $this->setDeliveryTimeZone($value);

        return $this;
    }

    /**
     * Get the value of the DeliveryWindows property.
     *
     * @return DeliveryWindowList deliveryWindows
     */
    public function getDeliveryWindows()
    {
        return $this->_fields['DeliveryWindows']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryWindows property.
     *
     * @param DeliveryWindowList deliveryWindows
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDeliveryWindows($value)
    {
        $this->_fields['DeliveryWindows']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DeliveryWindows is set.
     *
     * @return true if DeliveryWindows is set
     */
    public function isSetDeliveryWindows()
    {
        return null !== $this->_fields['DeliveryWindows']['FieldValue'];
    }

    /**
     * Set the value of DeliveryWindows, return this.
     *
     * @param deliveryWindows
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDeliveryWindows($value)
    {
        $this->setDeliveryWindows($value);

        return $this;
    }
}
