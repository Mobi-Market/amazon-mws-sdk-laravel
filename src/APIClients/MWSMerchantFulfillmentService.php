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

use MobiMarket\Amazon\APIClients\Interfaces\IMWSMerchantFulfillmentService;
use MobiMarket\Amazon\Models\CancelShipmentRequest;
use MobiMarket\Amazon\Models\CancelShipmentResponse;
use MobiMarket\Amazon\Models\CreateShipmentRequest;
use MobiMarket\Amazon\Models\CreateShipmentResponse;
use MobiMarket\Amazon\Models\GetAdditionalSellerInputsRequest;
use MobiMarket\Amazon\Models\GetAdditionalSellerInputsResponse;
use MobiMarket\Amazon\Models\GetEligibleShippingServicesRequest;
use MobiMarket\Amazon\Models\GetEligibleShippingServicesResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\GetShipmentRequest;
use MobiMarket\Amazon\Models\GetShipmentResponse;

class MWSMerchantFulfillmentService extends BaseClient implements IMWSMerchantFulfillmentService
{
    public const SERVICE_VERSION    = '2015-06-01';
    public const MWS_CLIENT_VERSION = '2016-03-30';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'MWSMerchantFulfillmentService PHP5 Library',
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
    public function cancelShipment($request): CancelShipmentResponse
    {
        if (!($request instanceof CancelShipmentRequest)) {
            $request = new CancelShipmentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CancelShipment';
        $httpResponse         = $this->_invoke($parameters);

        $response = CancelShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function createShipment($request): CreateShipmentResponse
    {
        if (!($request instanceof CreateShipmentRequest)) {
            $request = new CreateShipmentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateShipment';
        $httpResponse         = $this->_invoke($parameters);

        $response = CreateShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getAdditionalSellerInputs($request): GetAdditionalSellerInputsResponse
    {
        if (!($request instanceof GetAdditionalSellerInputsRequest)) {
            $request = new GetAdditionalSellerInputsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetAdditionalSellerInputs';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetAdditionalSellerInputsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getEligibleShippingServices($request): GetEligibleShippingServicesResponse
    {
        if (!($request instanceof GetEligibleShippingServicesRequest)) {
            $request = new GetEligibleShippingServicesRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetEligibleShippingServices';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetEligibleShippingServicesResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getShipment($request): GetShipmentResponse
    {
        if (!($request instanceof GetShipmentRequest)) {
            $request = new GetShipmentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetShipment';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetShipmentResponse::fromXML($httpResponse['ResponseBody']);
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
