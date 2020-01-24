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

use MobiMarket\Amazon\Models\GetLastUpdatedTimeForRecommendationsRequest;
use MobiMarket\Amazon\Models\GetLastUpdatedTimeForRecommendationsResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListRecommendationsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListRecommendationsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListRecommendationsRequest;
use MobiMarket\Amazon\Models\ListRecommendationsResponse;

interface IMWSRecommendationsSectionService
{
    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller.
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param GetLastUpdatedTimeForRecommendationsRequest|array $request array of parameters for GetLastUpdatedTimeForRecommendations request or GetLastUpdatedTimeForRecommendations object itself
     *
     * @throws AmazonApiException
     */
    public function getLastUpdatedTimeForRecommendations($request): GetLastUpdatedTimeForRecommendationsResponse;

    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param ListRecommendationsRequest|array $request array of parameters for ListRecommendations request or ListRecommendations object itself
     *
     * @throws AmazonApiException
     */
    public function listRecommendations($request): ListRecommendationsResponse;

    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param ListRecommendationsByNextTokenRequest|array $request array of parameters for ListRecommendationsByNextToken request or ListRecommendationsByNextToken object itself
     *
     * @throws AmazonApiException
     */
    public function listRecommendationsByNextToken($request): ListRecommendationsByNextTokenResponse;

    /**
     * Get Service Status.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;
}
