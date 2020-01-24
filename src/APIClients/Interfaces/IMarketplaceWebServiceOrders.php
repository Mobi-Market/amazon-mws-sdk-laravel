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

interface IMarketplaceWebServiceOrders
{
    /**
     * Get Order
     * This operation takes up to 50 order ids and returns the corresponding orders.
     *
     * @param GetOrderRequest|array $request array of parameters for GetOrder request or GetOrder object itself
     *
     * @throws AmazonApiException
     */
    public function getOrder($request): GetOrderResponse;

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * 		takes no input.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;

    /**
     * List Order Items
     * This operation can be used to list the items of the order indicated by the
     *         given order id (only a single Amazon order id is allowed).
     *
     * @param ListOrderItemsRequest|array $request array of parameters for ListOrderItems request or ListOrderItems object itself
     *
     * @throws AmazonApiException
     */
    public function listOrderItems($request): ListOrderItemsResponse;

    /**
     * List Order Items By Next Token
     * If ListOrderItems cannot return all the order items in one go, it will
     *         provide a nextToken. That nextToken can be used with this operation to
     *         retrive the next batch of items for that order.
     *
     * @param ListOrderItemsByNextTokenRequest|array $request array of parameters for ListOrderItemsByNextToken request or ListOrderItemsByNextToken object itself
     *
     * @throws AmazonApiException
     */
    public function listOrderItemsByNextToken($request): ListOrderItemsByNextTokenResponse;

    /**
     * List Orders
     * ListOrders can be used to find orders that meet the specified criteria.
     *
     * @param ListOrdersRequest|array $request array of parameters for ListOrders request or ListOrders object itself
     *
     * @throws AmazonApiException
     */
    public function listOrders($request): ListOrdersResponse;

    /**
     * List Orders By Next Token
     * If ListOrders returns a nextToken, thus indicating that there are more orders
     *         than returned that matched the given filter criteria, ListOrdersByNextToken
     *         can be used to retrieve those other orders using that nextToken.
     *
     * @param ListOrdersByNextTokenRequest|array $request array of parameters for ListOrdersByNextToken request or ListOrdersByNextToken object itself
     *
     * @throws AmazonApiException
     */
    public function listOrdersByNextToken($request): ListOrdersByNextTokenResponse;
}
