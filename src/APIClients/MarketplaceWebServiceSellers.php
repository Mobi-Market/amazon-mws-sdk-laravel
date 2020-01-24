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

use MobiMarket\Amazon\APIClients\Interfaces\IMarketplaceWebServiceSellers;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListMarketplaceParticipationsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListMarketplaceParticipationsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListMarketplaceParticipationsRequest;
use MobiMarket\Amazon\Models\ListMarketplaceParticipationsResponse;

class MarketplaceWebServiceSellers extends BaseClient implements IMarketplaceWebServiceSellers
{
    public const SERVICE_VERSION    = '2011-07-01';
    public const MWS_CLIENT_VERSION = '2015-06-18';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'MarketplaceWebServiceSellers PHP5 Library',
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
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }

    /** {@inheritdoc} */
    public function listMarketplaceParticipations($request): ListMarketplaceParticipationsResponse
    {
        return $this->_invokeApi($request, 'ListMarketplaceParticipations', ListMarketplaceParticipationsRequest::class, ListMarketplaceParticipationsResponse::class);
    }

    /** {@inheritdoc} */
    public function listMarketplaceParticipationsByNextToken($request): ListMarketplaceParticipationsByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListMarketplaceParticipationsByNextToken', ListMarketplaceParticipationsByNextTokenRequest::class, ListMarketplaceParticipationsByNextTokenResponse::class);
    }
}
