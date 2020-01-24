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
        if (!($request instanceof CreateSubscriptionInput)) {
            $request = new CreateSubscriptionInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateSubscription';
        $httpResponse         = $this->_invoke($parameters);

        $response = CreateSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function deleteSubscription($request): DeleteSubscriptionResponse
    {
        if (!($request instanceof DeleteSubscriptionInput)) {
            $request = new DeleteSubscriptionInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'DeleteSubscription';
        $httpResponse         = $this->_invoke($parameters);

        $response = DeleteSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function deregisterDestination($request): DeregisterDestinationResponse
    {
        if (!($request instanceof DeregisterDestinationInput)) {
            $request = new DeregisterDestinationInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'DeregisterDestination';
        $httpResponse         = $this->_invoke($parameters);

        $response = DeregisterDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getSubscription($request): GetSubscriptionResponse
    {
        if (!($request instanceof GetSubscriptionInput)) {
            $request = new GetSubscriptionInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetSubscription';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listRegisteredDestinations($request): ListRegisteredDestinationsResponse
    {
        if (!($request instanceof ListRegisteredDestinationsInput)) {
            $request = new ListRegisteredDestinationsInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRegisteredDestinations';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListRegisteredDestinationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listSubscriptions($request): ListSubscriptionsResponse
    {
        if (!($request instanceof ListSubscriptionsInput)) {
            $request = new ListSubscriptionsInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListSubscriptions';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListSubscriptionsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function registerDestination($request): RegisterDestinationResponse
    {
        if (!($request instanceof RegisterDestinationInput)) {
            $request = new RegisterDestinationInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'RegisterDestination';
        $httpResponse         = $this->_invoke($parameters);

        $response = RegisterDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function sendTestNotificationToDestination($request): SendTestNotificationToDestinationResponse
    {
        if (!($request instanceof SendTestNotificationToDestinationInput)) {
            $request = new SendTestNotificationToDestinationInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'SendTestNotificationToDestination';
        $httpResponse         = $this->_invoke($parameters);

        $response = SendTestNotificationToDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function updateSubscription($request): UpdateSubscriptionResponse
    {
        if (!($request instanceof UpdateSubscriptionInput)) {
            $request = new UpdateSubscriptionInput($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateSubscription';
        $httpResponse         = $this->_invoke($parameters);

        $response = UpdateSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        if (!($request instanceof GetServiceStatusRequest)) {
            $request = new GetServiceStatusRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }
}
