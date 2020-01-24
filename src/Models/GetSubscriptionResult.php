<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Subscriptions Service
 * @version  2013-07-01
 * Library Version: 2013-11-01
 * Generated: Tue Oct 02 08:13:42 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * GetSubscriptionResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Subscription: Subscription</li>
 *
 * </ul>
 */
class GetSubscriptionResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Subscription' => ['FieldValue' => null, 'FieldType' => 'Subscription'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Subscription property.
     *
     * @return Subscription subscription
     */
    public function getSubscription()
    {
        return $this->_fields['Subscription']['FieldValue'];
    }

    /**
     * Set the value of the Subscription property.
     *
     * @param Subscription subscription
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSubscription($value)
    {
        $this->_fields['Subscription']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Subscription is set.
     *
     * @return true if Subscription is set
     */
    public function isSetSubscription()
    {
        return null !== $this->_fields['Subscription']['FieldValue'];
    }

    /**
     * Set the value of Subscription, return this.
     *
     * @param subscription
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSubscription($value)
    {
        $this->setSubscription($value);

        return $this;
    }
}
