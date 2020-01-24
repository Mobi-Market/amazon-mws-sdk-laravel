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

namespace MobiMarket\Amazon\APIClients\Interfaces;

use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListMarketplaceParticipationsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListMarketplaceParticipationsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListMarketplaceParticipationsRequest;
use MobiMarket\Amazon\Models\ListMarketplaceParticipationsResponse;

interface IMarketplaceWebServiceSellers
{
    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     *         takes no input.
     *         All API sections within the API are required to implement this operation.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;

    /**
     * List Marketplace Participations
     * Returns a list of marketplaces that the seller submitting the request can sell in,
     *         and a list of participations that include seller-specific information in that marketplace.
     *
     * @param ListMarketplaceParticipationsRequest|array $request array of parameters for ListMarketplaceParticipations request or ListMarketplaceParticipations object itself
     *
     * @throws AmazonApiException
     */
    public function listMarketplaceParticipations($request): ListMarketplaceParticipationsResponse;

    /**
     * List Marketplace Participations By Next Token
     * Returns the next page of marketplaces and participations using the NextToken value
     *         that was returned by your previous request to either ListMarketplaceParticipations or
     *         ListMarketplaceParticipationsByNextToken.
     *
     * @param ListMarketplaceParticipationsByNextTokenRequest|array $request array of parameters for ListMarketplaceParticipationsByNextToken request or ListMarketplaceParticipationsByNextToken object itself
     *
     * @throws AmazonApiException
     */
    public function listMarketplaceParticipationsByNextToken($request): ListMarketplaceParticipationsByNextTokenResponse;
}
