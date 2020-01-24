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

use MobiMarket\Amazon\APIClients\Interfaces\IMWSRecommendationsSectionService;
use MobiMarket\Amazon\Models\GetLastUpdatedTimeForRecommendationsRequest;
use MobiMarket\Amazon\Models\GetLastUpdatedTimeForRecommendationsResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListRecommendationsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListRecommendationsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListRecommendationsRequest;
use MobiMarket\Amazon\Models\ListRecommendationsResponse;

class MWSRecommendationsSectionService extends BaseClient implements IMWSRecommendationsSectionService
{
    public const SERVICE_VERSION    = '2013-04-01';
    public const MWS_CLIENT_VERSION = '2014-10-01';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'MWSRecommendationsSectionService PHP5 Library',
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
    public function getLastUpdatedTimeForRecommendations($request): GetLastUpdatedTimeForRecommendationsResponse
    {
        if (!($request instanceof GetLastUpdatedTimeForRecommendationsRequest)) {
            $request = new GetLastUpdatedTimeForRecommendationsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLastUpdatedTimeForRecommendations';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetLastUpdatedTimeForRecommendationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listRecommendations($request): ListRecommendationsResponse
    {
        if (!($request instanceof ListRecommendationsRequest)) {
            $request = new ListRecommendationsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRecommendations';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListRecommendationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listRecommendationsByNextToken($request): ListRecommendationsByNextTokenResponse
    {
        if (!($request instanceof ListRecommendationsByNextTokenRequest)) {
            $request = new ListRecommendationsByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRecommendationsByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListRecommendationsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
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
