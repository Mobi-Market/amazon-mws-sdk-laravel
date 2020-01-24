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

use MobiMarket\Amazon\APIClients\Interfaces\IFBAInventoryServiceMWS;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListInventorySupplyByNextTokenRequest;
use MobiMarket\Amazon\Models\ListInventorySupplyByNextTokenResponse;
use MobiMarket\Amazon\Models\ListInventorySupplyRequest;
use MobiMarket\Amazon\Models\ListInventorySupplyResponse;

class FBAInventoryServiceMWS extends BaseClient implements IFBAInventoryServiceMWS
{
    public const SERVICE_VERSION    = '2010-10-01';
    public const MWS_CLIENT_VERSION = '2014-09-30';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'FBAInventoryServiceMWS PHP5 Library',
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
    public function listInventorySupply($request): ListInventorySupplyResponse
    {
        return $this->_invokeApi($request, 'ListInventorySupply', ListInventorySupplyRequest::class, ListInventorySupplyResponse::class);
    }

    /** {@inheritdoc} */
    public function listInventorySupplyByNextToken($request): ListInventorySupplyByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListInventorySupplyByNextToken', ListInventorySupplyByNextTokenRequest::class, ListInventorySupplyByNextTokenResponse::class);
    }
}
