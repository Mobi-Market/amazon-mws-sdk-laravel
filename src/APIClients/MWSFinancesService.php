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

use MobiMarket\Amazon\APIClients\Interfaces\IMWSFinancesService;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListFinancialEventGroupsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListFinancialEventGroupsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListFinancialEventGroupsRequest;
use MobiMarket\Amazon\Models\ListFinancialEventGroupsResponse;
use MobiMarket\Amazon\Models\ListFinancialEventsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListFinancialEventsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListFinancialEventsRequest;
use MobiMarket\Amazon\Models\ListFinancialEventsResponse;

class MWSFinancesService extends BaseClient implements IMWSFinancesService
{
    public const SERVICE_VERSION    = '2015-05-01';
    public const MWS_CLIENT_VERSION = '2019-02-25';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'MWSFinancesService PHP5 Library',
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
    public function listFinancialEventGroups($request): ListFinancialEventGroupsResponse
    {
        return $this->_invokeApi($request, 'ListFinancialEventGroups', ListFinancialEventGroupsRequest::class, ListFinancialEventGroupsResponse::class);
    }

    /** {@inheritdoc} */
    public function listFinancialEventGroupsByNextToken($request): ListFinancialEventGroupsByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListFinancialEventGroupsByNextToken', ListFinancialEventGroupsByNextTokenRequest::class, ListFinancialEventGroupsByNextTokenResponse::class);
    }

    /** {@inheritdoc} */
    public function listFinancialEvents($request): ListFinancialEventsResponse
    {
        return $this->_invokeApi($request, 'ListFinancialEvents', ListFinancialEventsRequest::class, ListFinancialEventsResponse::class);
    }

    /** {@inheritdoc} */
    public function listFinancialEventsByNextToken($request): ListFinancialEventsByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListFinancialEventsByNextToken', ListFinancialEventsByNextTokenRequest::class, ListFinancialEventsByNextTokenResponse::class);
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }
}
