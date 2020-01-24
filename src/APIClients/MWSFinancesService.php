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
        if (!($request instanceof ListFinancialEventGroupsRequest)) {
            $request = new ListFinancialEventGroupsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListFinancialEventGroups';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListFinancialEventGroupsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listFinancialEventGroupsByNextToken($request): ListFinancialEventGroupsByNextTokenResponse
    {
        if (!($request instanceof ListFinancialEventGroupsByNextTokenRequest)) {
            $request = new ListFinancialEventGroupsByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListFinancialEventGroupsByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListFinancialEventGroupsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listFinancialEvents($request): ListFinancialEventsResponse
    {
        if (!($request instanceof ListFinancialEventsRequest)) {
            $request = new ListFinancialEventsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListFinancialEvents';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListFinancialEventsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listFinancialEventsByNextToken($request): ListFinancialEventsByNextTokenResponse
    {
        if (!($request instanceof ListFinancialEventsByNextTokenRequest)) {
            $request = new ListFinancialEventsByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListFinancialEventsByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListFinancialEventsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
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
