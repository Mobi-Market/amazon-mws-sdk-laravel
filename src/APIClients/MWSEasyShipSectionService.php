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

use MobiMarket\Amazon\APIClients\Interfaces\IMWSEasyShipSectionService;
use MobiMarket\Amazon\Models\CreateScheduledPackageRequest;
use MobiMarket\Amazon\Models\CreateScheduledPackageResponse;
use MobiMarket\Amazon\Models\GetScheduledPackageRequest;
use MobiMarket\Amazon\Models\GetScheduledPackageResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListPickupSlotsRequest;
use MobiMarket\Amazon\Models\ListPickupSlotsResponse;
use MobiMarket\Amazon\Models\UpdateScheduledPackagesRequest;
use MobiMarket\Amazon\Models\UpdateScheduledPackagesResponse;

class MWSEasyShipSectionService extends BaseClient implements IMWSEasyShipSectionService
{
    public const SERVICE_VERSION    = '2018-09-01';
    public const MWS_CLIENT_VERSION = '2018-09-01';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'MWSEasyShipSectionService PHP5 Library',
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
    public function createScheduledPackage($request): CreateScheduledPackageResponse
    {
        return $this->_invokeApi($request, 'CreateScheduledPackage', CreateScheduledPackageRequest::class, CreateScheduledPackageResponse::class);
    }

    /** {@inheritdoc} */
    public function getScheduledPackage($request): GetScheduledPackageResponse
    {
        return $this->_invokeApi($request, 'GetScheduledPackage', GetScheduledPackageRequest::class, GetScheduledPackageResponse::class);
    }

    /** {@inheritdoc} */
    public function listPickupSlots($request): ListPickupSlotsResponse
    {
        return $this->_invokeApi($request, 'ListPickupSlots', ListPickupSlotsRequest::class, ListPickupSlotsResponse::class);
    }

    /** {@inheritdoc} */
    public function updateScheduledPackages($request): UpdateScheduledPackagesResponse
    {
        return $this->_invokeApi($request, 'UpdateScheduledPackages', UpdateScheduledPackagesRequest::class, UpdateScheduledPackagesResponse::class);
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }
}
