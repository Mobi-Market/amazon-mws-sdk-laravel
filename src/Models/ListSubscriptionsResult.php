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
 * ListSubscriptionsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>SubscriptionList: SubscriptionList</li>
 *
 * </ul>
 */
class ListSubscriptionsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SubscriptionList' => ['FieldValue' => null, 'FieldType' => 'SubscriptionList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SubscriptionList property.
     *
     * @return SubscriptionList subscriptionList
     */
    public function getSubscriptionList()
    {
        return $this->_fields['SubscriptionList']['FieldValue'];
    }

    /**
     * Set the value of the SubscriptionList property.
     *
     * @param SubscriptionList subscriptionList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSubscriptionList($value)
    {
        $this->_fields['SubscriptionList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SubscriptionList is set.
     *
     * @return true if SubscriptionList is set
     */
    public function isSetSubscriptionList()
    {
        return null !== $this->_fields['SubscriptionList']['FieldValue'];
    }

    /**
     * Set the value of SubscriptionList, return this.
     *
     * @param subscriptionList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSubscriptionList($value)
    {
        $this->setSubscriptionList($value);

        return $this;
    }
}
