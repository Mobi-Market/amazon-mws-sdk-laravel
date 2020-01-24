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
    public function listInventorySupply($request): ListInventorySupplyResponse
    {
        if (!($request instanceof ListInventorySupplyRequest)) {
            $request = new ListInventorySupplyRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInventorySupply';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListInventorySupplyResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listInventorySupplyByNextToken($request): ListInventorySupplyByNextTokenResponse
    {
        if (!($request instanceof ListInventorySupplyByNextTokenRequest)) {
            $request = new ListInventorySupplyByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInventorySupplyByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListInventorySupplyByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }
}
