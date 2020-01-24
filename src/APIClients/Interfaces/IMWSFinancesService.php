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
use MobiMarket\Amazon\Models\ListFinancialEventGroupsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListFinancialEventGroupsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListFinancialEventGroupsRequest;
use MobiMarket\Amazon\Models\ListFinancialEventGroupsResponse;
use MobiMarket\Amazon\Models\ListFinancialEventsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListFinancialEventsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListFinancialEventsRequest;
use MobiMarket\Amazon\Models\ListFinancialEventsResponse;

interface IMWSFinancesService
{
    /**
     * List Financial Event Groups
     * ListFinancialEventGroups can be used to find financial event groups that meet filter criteria.
     *
     * @param ListFinancialEventGroupsRequest|array $request array of parameters for ListFinancialEventGroups request or ListFinancialEventGroups object itself
     *
     * @throws AmazonApiException
     */
    public function listFinancialEventGroups($request): ListFinancialEventGroupsResponse;

    /**
     * List Financial Event Groups By Next Token
     * If ListFinancialEventGroups returns a nextToken, thus indicating that there are more groups
     *         than returned that matched the given filter criteria, ListFinancialEventGroupsByNextToken
     *         can be used to retrieve those groups using that nextToken.
     *
     * @param ListFinancialEventGroupsByNextTokenRequest|array $request array of parameters for ListFinancialEventGroupsByNextToken request or ListFinancialEventGroupsByNextToken object itself
     *
     * @throws AmazonApiException
     */
    public function listFinancialEventGroupsByNextToken($request): ListFinancialEventGroupsByNextTokenResponse;

    /**
     * List Financial Events
     * ListFinancialEvents can be used to find financial events that meet the specified criteria.
     *
     * @param ListFinancialEventsRequest|array $request array of parameters for ListFinancialEvents request or ListFinancialEvents object itself
     *
     * @throws AmazonApiException
     */
    public function listFinancialEvents($request): ListFinancialEventsResponse;

    /**
     * List Financial Events By Next Token
     * If ListFinancialEvents returns a nextToken, thus indicating that there are more financial events
     *         than returned that matched the given filter criteria, ListFinancialEventsByNextToken
     *         can be used to retrieve those events using that nextToken.
     *
     * @param ListFinancialEventsByNextTokenRequest|array $request array of parameters for ListFinancialEventsByNextToken request or ListFinancialEventsByNextToken object itself
     *
     * @throws AmazonApiException
     */
    public function listFinancialEventsByNextToken($request): ListFinancialEventsByNextTokenResponse;

    /**
     * Get Service Status.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;
}
