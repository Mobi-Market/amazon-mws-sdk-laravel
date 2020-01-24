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
        if (!($request instanceof CancelFulfillmentOrderRequest)) {
            $request = new CancelFulfillmentOrderRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CancelFulfillmentOrder';
        $httpResponse         = $this->_invoke($parameters);

        $response = CancelFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function createFulfillmentOrder($request): CreateFulfillmentOrderResponse
    {
        if (!($request instanceof CreateFulfillmentOrderRequest)) {
            $request = new CreateFulfillmentOrderRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateFulfillmentOrder';
        $httpResponse         = $this->_invoke($parameters);

        $response = CreateFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function createFulfillmentReturn($request): CreateFulfillmentReturnResponse
    {
        if (!($request instanceof CreateFulfillmentReturnRequest)) {
            $request = new CreateFulfillmentReturnRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateFulfillmentReturn';
        $httpResponse         = $this->_invoke($parameters);

        $response = CreateFulfillmentReturnResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getFulfillmentOrder($request): GetFulfillmentOrderResponse
    {
        if (!($request instanceof GetFulfillmentOrderRequest)) {
            $request = new GetFulfillmentOrderRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetFulfillmentOrder';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getFulfillmentPreview($request): GetFulfillmentPreviewResponse
    {
        if (!($request instanceof GetFulfillmentPreviewRequest)) {
            $request = new GetFulfillmentPreviewRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetFulfillmentPreview';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetFulfillmentPreviewResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getPackageTrackingDetails($request): GetPackageTrackingDetailsResponse
    {
        if (!($request instanceof GetPackageTrackingDetailsRequest)) {
            $request = new GetPackageTrackingDetailsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPackageTrackingDetails';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetPackageTrackingDetailsResponse::fromXML($httpResponse['ResponseBody']);
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
    public function listAllFulfillmentOrders($request): ListAllFulfillmentOrdersResponse
    {
        if (!($request instanceof ListAllFulfillmentOrdersRequest)) {
            $request = new ListAllFulfillmentOrdersRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListAllFulfillmentOrders';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListAllFulfillmentOrdersResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listAllFulfillmentOrdersByNextToken($request): ListAllFulfillmentOrdersByNextTokenResponse
    {
        if (!($request instanceof ListAllFulfillmentOrdersByNextTokenRequest)) {
            $request = new ListAllFulfillmentOrdersByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListAllFulfillmentOrdersByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListAllFulfillmentOrdersByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listReturnReasonCodes($request): ListReturnReasonCodesResponse
    {
        if (!($request instanceof ListReturnReasonCodesRequest)) {
            $request = new ListReturnReasonCodesRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListReturnReasonCodes';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListReturnReasonCodesResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function updateFulfillmentOrder($request): UpdateFulfillmentOrderResponse
    {
        if (!($request instanceof UpdateFulfillmentOrderRequest)) {
            $request = new UpdateFulfillmentOrderRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateFulfillmentOrder';
        $httpResponse         = $this->_invoke($parameters);

        $response = UpdateFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }
}
