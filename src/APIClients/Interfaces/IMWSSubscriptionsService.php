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

interface MWSSubscriptionsService_Interface
{
    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_CreateSubscription request or MWSSubscriptionsService_Model_CreateSubscription object itself
     *
     * @see MWSSubscriptionsService_Model_CreateSubscriptionInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_CreateSubscriptionResponse
     */
    public function createSubscription($request);

    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_DeleteSubscription request or MWSSubscriptionsService_Model_DeleteSubscription object itself
     *
     * @see MWSSubscriptionsService_Model_DeleteSubscriptionInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_DeleteSubscriptionResponse
     */
    public function deleteSubscription($request);

    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_DeregisterDestination request or MWSSubscriptionsService_Model_DeregisterDestination object itself
     *
     * @see MWSSubscriptionsService_Model_DeregisterDestinationInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_DeregisterDestinationResponse
     */
    public function deregisterDestination($request);

    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_GetSubscription request or MWSSubscriptionsService_Model_GetSubscription object itself
     *
     * @see MWSSubscriptionsService_Model_GetSubscriptionInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_GetSubscriptionResponse
     */
    public function getSubscription($request);

    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_ListRegisteredDestinations request or MWSSubscriptionsService_Model_ListRegisteredDestinations object itself
     *
     * @see MWSSubscriptionsService_Model_ListRegisteredDestinationsInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_ListRegisteredDestinationsResponse
     */
    public function listRegisteredDestinations($request);

    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_ListSubscriptions request or MWSSubscriptionsService_Model_ListSubscriptions object itself
     *
     * @see MWSSubscriptionsService_Model_ListSubscriptionsInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_ListSubscriptionsResponse
     */
    public function listSubscriptions($request);

    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_RegisterDestination request or MWSSubscriptionsService_Model_RegisterDestination object itself
     *
     * @see MWSSubscriptionsService_Model_RegisterDestinationInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_RegisterDestinationResponse
     */
    public function registerDestination($request);

    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_SendTestNotificationToDestination request or MWSSubscriptionsService_Model_SendTestNotificationToDestination object itself
     *
     * @see MWSSubscriptionsService_Model_SendTestNotificationToDestinationInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_SendTestNotificationToDestinationResponse
     */
    public function sendTestNotificationToDestination($request);

    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_UpdateSubscription request or MWSSubscriptionsService_Model_UpdateSubscription object itself
     *
     * @see MWSSubscriptionsService_Model_UpdateSubscriptionInput
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_UpdateSubscriptionResponse
     */
    public function updateSubscription($request);

    /**
     * Get Service Status.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_GetServiceStatus request or MWSSubscriptionsService_Model_GetServiceStatus object itself
     *
     * @see MWSSubscriptionsService_Model_GetServiceStatusRequest
     *
     * @throws MWSSubscriptionsService_Exception
     *
     * @return MWSSubscriptionsService_Model_GetServiceStatusResponse
     */
    public function getServiceStatus($request);
}
