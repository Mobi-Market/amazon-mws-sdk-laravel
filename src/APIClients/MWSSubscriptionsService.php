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

namespace MobiMarket\Amazon\APIClients;

use MobiMarket\Amazon\APIClients\Interfaces\IMWSSubscriptionsService;
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

class MWSSubscriptionsService extends BaseClient implements IMWSSubscriptionsService
{
    public const SERVICE_VERSION    = '2013-07-01';
    public const MWS_CLIENT_VERSION = '2013-11-01';

    /** @var array */
    protected $_config = ['ServiceURL' => null,
        'UserAgent'                    => 'MWSSubscriptionsService PHP5 Library',
        'SignatureVersion'             => 2,
        'SignatureMethod'              => 'HmacSHA256',
        'ProxyHost'                    => null,
        'ProxyPort'                    => -1,
        'ProxyUsername'                => null,
        'ProxyPassword'                => null,
        'MaxErrorRetry'                => 3,
        'Headers'                      => [],
    ];

    /** {@inheritdoc} */
    public function createSubscription($request): CreateSubscriptionResponse
    {
        return $this->_invokeApi($request, 'CreateSubscription', CreateSubscriptionInput::class, CreateSubscriptionResponse::class);
    }

    /** {@inheritdoc} */
    public function deleteSubscription($request): DeleteSubscriptionResponse
    {
        return $this->_invokeApi($request, 'DeleteSubscription', DeleteSubscriptionInput::class, DeleteSubscriptionResponse::class);
    }

    /** {@inheritdoc} */
    public function deregisterDestination($request): DeregisterDestinationResponse
    {
        return $this->_invokeApi($request, 'DeregisterDestination', DeregisterDestinationInput::class, DeregisterDestinationResponse::class);
    }

    /** {@inheritdoc} */
    public function getSubscription($request): GetSubscriptionResponse
    {
        return $this->_invokeApi($request, 'GetSubscription', GetSubscriptionInput::class, GetSubscriptionResponse::class);
    }

    /** {@inheritdoc} */
    public function listRegisteredDestinations($request): ListRegisteredDestinationsResponse
    {
        return $this->_invokeApi($request, 'ListRegisteredDestinations', ListRegisteredDestinationsInput::class, ListRegisteredDestinationsResponse::class);
    }

    /** {@inheritdoc} */
    public function listSubscriptions($request): ListSubscriptionsResponse
    {
        return $this->_invokeApi($request, 'ListSubscriptions', ListSubscriptionsInput::class, ListSubscriptionsResponse::class);
    }

    /** {@inheritdoc} */
    public function registerDestination($request): RegisterDestinationResponse
    {
        return $this->_invokeApi($request, 'RegisterDestination', RegisterDestinationInput::class, RegisterDestinationResponse::class);
    }

    /** {@inheritdoc} */
    public function sendTestNotificationToDestination($request): SendTestNotificationToDestinationResponse
    {
        return $this->_invokeApi($request, 'SendTestNotificationToDestination', SendTestNotificationToDestinationInput::class, SendTestNotificationToDestinationResponse::class);
    }

    /** {@inheritdoc} */
    public function updateSubscription($request): UpdateSubscriptionResponse
    {
        return $this->_invokeApi($request, 'UpdateSubscription', UpdateSubscriptionInput::class, UpdateSubscriptionResponse::class);
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }
}
