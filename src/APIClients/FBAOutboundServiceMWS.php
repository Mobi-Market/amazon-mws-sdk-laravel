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

use MobiMarket\Amazon\APIClients\Interfaces\IFBAOutboundServiceMWS;
use MobiMarket\Amazon\Models\CancelFulfillmentOrderRequest;
use MobiMarket\Amazon\Models\CancelFulfillmentOrderResponse;
use MobiMarket\Amazon\Models\CreateFulfillmentOrderRequest;
use MobiMarket\Amazon\Models\CreateFulfillmentOrderResponse;
use MobiMarket\Amazon\Models\CreateFulfillmentReturnRequest;
use MobiMarket\Amazon\Models\CreateFulfillmentReturnResponse;
use MobiMarket\Amazon\Models\GetFulfillmentOrderRequest;
use MobiMarket\Amazon\Models\GetFulfillmentOrderResponse;
use MobiMarket\Amazon\Models\GetFulfillmentPreviewRequest;
use MobiMarket\Amazon\Models\GetFulfillmentPreviewResponse;
use MobiMarket\Amazon\Models\GetPackageTrackingDetailsRequest;
use MobiMarket\Amazon\Models\GetPackageTrackingDetailsResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListAllFulfillmentOrdersByNextTokenRequest;
use MobiMarket\Amazon\Models\ListAllFulfillmentOrdersByNextTokenResponse;
use MobiMarket\Amazon\Models\ListAllFulfillmentOrdersRequest;
use MobiMarket\Amazon\Models\ListAllFulfillmentOrdersResponse;
use MobiMarket\Amazon\Models\ListReturnReasonCodesRequest;
use MobiMarket\Amazon\Models\ListReturnReasonCodesResponse;
use MobiMarket\Amazon\Models\UpdateFulfillmentOrderRequest;
use MobiMarket\Amazon\Models\UpdateFulfillmentOrderResponse;

class FBAOutboundServiceMWS extends BaseClient implements IFBAOutboundServiceMWS
{
    public const SERVICE_VERSION    = '2010-10-01';
    public const MWS_CLIENT_VERSION = '2016-01-01';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'FBAOutboundServiceMWS PHP5 Library',
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
    public function cancelFulfillmentOrder($request): CancelFulfillmentOrderResponse
    {
        return $this->_invokeApi($request, 'CancelFulfillmentOrder', CancelFulfillmentOrderRequest::class, CancelFulfillmentOrderResponse::class);
    }

    /** {@inheritdoc} */
    public function createFulfillmentOrder($request): CreateFulfillmentOrderResponse
    {
        return $this->_invokeApi($request, 'CreateFulfillmentOrder', CreateFulfillmentOrderRequest::class, CreateFulfillmentOrderResponse::class);
    }

    /** {@inheritdoc} */
    public function createFulfillmentReturn($request): CreateFulfillmentReturnResponse
    {
        return $this->_invokeApi($request, 'CreateFulfillmentReturn', CreateFulfillmentReturnRequest::class, CreateFulfillmentReturnResponse::class);
    }

    /** {@inheritdoc} */
    public function getFulfillmentOrder($request): GetFulfillmentOrderResponse
    {
        return $this->_invokeApi($request, 'GetFulfillmentOrder', GetFulfillmentOrderRequest::class, GetFulfillmentOrderResponse::class);
    }

    /** {@inheritdoc} */
    public function getFulfillmentPreview($request): GetFulfillmentPreviewResponse
    {
        return $this->_invokeApi($request, 'GetFulfillmentPreview', GetFulfillmentPreviewRequest::class, GetFulfillmentPreviewResponse::class);
    }

    /** {@inheritdoc} */
    public function getPackageTrackingDetails($request): GetPackageTrackingDetailsResponse
    {
        return $this->_invokeApi($request, 'GetPackageTrackingDetails', GetPackageTrackingDetailsRequest::class, GetPackageTrackingDetailsResponse::class);
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }

    /** {@inheritdoc} */
    public function listAllFulfillmentOrders($request): ListAllFulfillmentOrdersResponse
    {
        return $this->_invokeApi($request, 'ListAllFulfillmentOrders', ListAllFulfillmentOrdersRequest::class, ListAllFulfillmentOrdersResponse::class);
    }

    /** {@inheritdoc} */
    public function listAllFulfillmentOrdersByNextToken($request): ListAllFulfillmentOrdersByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListAllFulfillmentOrdersByNextToken', ListAllFulfillmentOrdersByNextTokenRequest::class, ListAllFulfillmentOrdersByNextTokenResponse::class);
    }

    /** {@inheritdoc} */
    public function listReturnReasonCodes($request): ListReturnReasonCodesResponse
    {
        return $this->_invokeApi($request, 'ListReturnReasonCodes', ListReturnReasonCodesRequest::class, ListReturnReasonCodesResponse::class);
    }

    /** {@inheritdoc} */
    public function updateFulfillmentOrder($request): UpdateFulfillmentOrderResponse
    {
        return $this->_invokeApi($request, 'UpdateFulfillmentOrder', UpdateFulfillmentOrderRequest::class, UpdateFulfillmentOrderResponse::class);
    }
}
