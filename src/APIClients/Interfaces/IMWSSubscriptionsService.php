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

namespace MobiMarket\Amazon\APIClients\Interfaces;

use MobiMarket\Amazon\Models\CreateSubscriptionInput;
use MobiMarket\Amazon\Models\CreateSubscriptionResponse;
use MobiMarket\Amazon\Models\DeleteSubscriptionInput;
use MobiMarket\Amazon\Models\DeleteSubscriptionResponse;
use MobiMarket\Amazon\Models\DeregisterDestinationInput;
use MobiMarket\Amazon\Models\DeregisterDestinationResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\GetSubscriptionInput;
use MobiMarket\Amazon\Models\GetSubscriptionResponse;
use MobiMarket\Amazon\Models\ListRegisteredDestinationsInput;
use MobiMarket\Amazon\Models\ListRegisteredDestinationsResponse;
use MobiMarket\Amazon\Models\ListSubscriptionsInput;
use MobiMarket\Amazon\Models\ListSubscriptionsResponse;
use MobiMarket\Amazon\Models\RegisterDestinationInput;
use MobiMarket\Amazon\Models\RegisterDestinationResponse;
use MobiMarket\Amazon\Models\SendTestNotificationToDestinationInput;
use MobiMarket\Amazon\Models\SendTestNotificationToDestinationResponse;
use MobiMarket\Amazon\Models\UpdateSubscriptionInput;
use MobiMarket\Amazon\Models\UpdateSubscriptionResponse;

interface IMWSSubscriptionsService
{
    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param CreateSubscriptionInput|array $request array of parameters for CreateSubscription request or CreateSubscription object itself
     *
     * @throws AmazonApiException
     */
    public function createSubscription($request): CreateSubscriptionResponse;

    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param DeleteSubscriptionInput|array $request array of parameters for DeleteSubscription request or DeleteSubscription object itself
     *
     * @throws AmazonApiException
     */
    public function deleteSubscription($request): DeleteSubscriptionResponse;

    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param DeregisterDestinationInput|array $request array of parameters for DeregisterDestination request or DeregisterDestination object itself
     *
     * @throws AmazonApiException
     */
    public function deregisterDestination($request): DeregisterDestinationResponse;

    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param GetSubscriptionInput|array $request array of parameters for GetSubscription request or GetSubscription object itself
     *
     * @throws AmazonApiException
     */
    public function getSubscription($request): GetSubscriptionResponse;

    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param ListRegisteredDestinationsInput|array $request array of parameters for ListRegisteredDestinations request or ListRegisteredDestinations object itself
     *
     * @throws AmazonApiException
     */
    public function listRegisteredDestinations($request): ListRegisteredDestinationsResponse;

    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param ListSubscriptionsInput|array $request array of parameters for ListSubscriptions request or ListSubscriptions object itself
     *
     * @throws AmazonApiException
     */
    public function listSubscriptions($request): ListSubscriptionsResponse;

    /**
     * Register Destination
     * Create a new destination.
     *
     * @param RegisterDestinationInput|array $request array of parameters for RegisterDestination request or RegisterDestination object itself
     *
     * @throws AmazonApiException
     */
    public function registerDestination($request): RegisterDestinationResponse;

    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param SendTestNotificationToDestinationInput|array $request array of parameters for SendTestNotificationToDestination request or SendTestNotificationToDestination object itself
     *
     * @throws AmazonApiException
     */
    public function sendTestNotificationToDestination($request): SendTestNotificationToDestinationResponse;

    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param UpdateSubscriptionInput|array $request array of parameters for UpdateSubscription request or UpdateSubscription object itself
     *
     * @throws AmazonApiException
     */
    public function updateSubscription($request): UpdateSubscriptionResponse;

    /**
     * Get Service Status.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;
}
