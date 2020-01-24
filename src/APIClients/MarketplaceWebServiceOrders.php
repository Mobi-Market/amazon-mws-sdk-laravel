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
        return $this->_invokeApi($request, 'GetOrder', GetOrderRequest::class, GetOrderResponse::class);
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }

    /** {@inheritdoc} */
    public function listOrderItems($request): ListOrderItemsResponse
    {
        return $this->_invokeApi($request, 'ListOrderItems', ListOrderItemsRequest::class, ListOrderItemsResponse::class);
    }

    /** {@inheritdoc} */
    public function listOrderItemsByNextToken($request): ListOrderItemsByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListOrderItemsByNextToken', ListOrderItemsByNextTokenRequest::class, ListOrderItemsByNextTokenResponse::class);
    }

    /** {@inheritdoc} */
    public function listOrders($request): ListOrdersResponse
    {
        return $this->_invokeApi($request, 'ListOrders', ListOrdersRequest::class, ListOrdersResponse::class);
    }

    /** {@inheritdoc} */
    public function listOrdersByNextToken($request): ListOrdersByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListOrdersByNextToken', ListOrdersByNextTokenRequest::class, ListOrdersByNextTokenResponse::class);
    }
}
