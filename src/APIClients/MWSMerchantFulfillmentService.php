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
        return $this->_invokeApi($request, 'CancelShipment', CancelShipmentRequest::class, CancelShipmentResponse::class);
    }

    /** {@inheritdoc} */
    public function createShipment($request): CreateShipmentResponse
    {
        return $this->_invokeApi($request, 'CreateShipment', CreateShipmentRequest::class, CreateShipmentResponse::class);
    }

    /** {@inheritdoc} */
    public function getAdditionalSellerInputs($request): GetAdditionalSellerInputsResponse
    {
        return $this->_invokeApi($request, 'GetAdditionalSellerInputs', GetAdditionalSellerInputsRequest::class, GetAdditionalSellerInputsResponse::class);
    }

    /** {@inheritdoc} */
    public function getEligibleShippingServices($request): GetEligibleShippingServicesResponse
    {
        return $this->_invokeApi($request, 'GetEligibleShippingServices', GetEligibleShippingServicesRequest::class, GetEligibleShippingServicesResponse::class);
    }

    /** {@inheritdoc} */
    public function getShipment($request): GetShipmentResponse
    {
        return $this->_invokeApi($request, 'GetShipment', GetShipmentRequest::class, GetShipmentResponse::class);
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }
}
