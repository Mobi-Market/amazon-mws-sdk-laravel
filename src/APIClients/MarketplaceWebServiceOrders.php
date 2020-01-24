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

namespace MobiMarket\Amazon\APIClients;

use MobiMarket\Amazon\APIClients\Interfaces\IMarketplaceWebServiceOrders;
use MobiMarket\Amazon\Models\GetOrderRequest;
use MobiMarket\Amazon\Models\GetOrderResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListOrderItemsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListOrderItemsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListOrderItemsRequest;
use MobiMarket\Amazon\Models\ListOrderItemsResponse;
use MobiMarket\Amazon\Models\ListOrdersByNextTokenRequest;
use MobiMarket\Amazon\Models\ListOrdersByNextTokenResponse;
use MobiMarket\Amazon\Models\ListOrdersRequest;
use MobiMarket\Amazon\Models\ListOrdersResponse;

class MarketplaceWebServiceOrders extends BaseClient implements IMarketplaceWebServiceOrders
{
    public const SERVICE_VERSION    = '2013-09-01';
    public const MWS_CLIENT_VERSION = '2018-10-31';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'MarketplaceWebServiceOrders PHP5 Library',
        'SignatureVersion' => 2,
        'SignatureMethod'  => 'HmacSHA256',
        'ProxyHost'        => null,
        'ProxyPort'        => -1,
        'ProxyUsername'    => null,
        'ProxyPassword'    => null,
        'MaxErrorRetry'    => 3,
        'Headers'          => [],
    ];

    /** {@inheritdoc} */
    public function getOrder($request): GetOrderResponse
    {
        if (!($request instanceof GetOrderRequest)) {
            $request = new GetOrderRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetOrder';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetOrderResponse::fromXML($httpResponse['ResponseBody']);
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

    /** {@inheritdoc} */
    public function listOrderItems($request): ListOrderItemsResponse
    {
        if (!($request instanceof ListOrderItemsRequest)) {
            $request = new ListOrderItemsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListOrderItems';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListOrderItemsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listOrderItemsByNextToken($request): ListOrderItemsByNextTokenResponse
    {
        if (!($request instanceof ListOrderItemsByNextTokenRequest)) {
            $request = new ListOrderItemsByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListOrderItemsByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListOrderItemsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listOrders($request): ListOrdersResponse
    {
        if (!($request instanceof ListOrdersRequest)) {
            $request = new ListOrdersRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListOrders';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListOrdersResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listOrdersByNextToken($request): ListOrdersByNextTokenResponse
    {
        if (!($request instanceof ListOrdersByNextTokenRequest)) {
            $request = new ListOrdersByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListOrdersByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListOrdersByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }
}
