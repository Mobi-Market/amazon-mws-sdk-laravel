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

use MobiMarket\Amazon\Models\GetCompetitivePricingForASINRequest;
use MobiMarket\Amazon\Models\GetCompetitivePricingForASINResponse;
use MobiMarket\Amazon\Models\GetCompetitivePricingForSKURequest;
use MobiMarket\Amazon\Models\GetCompetitivePricingForSKUResponse;
use MobiMarket\Amazon\Models\GetLowestOfferListingsForASINRequest;
use MobiMarket\Amazon\Models\GetLowestOfferListingsForASINResponse;
use MobiMarket\Amazon\Models\GetLowestOfferListingsForSKURequest;
use MobiMarket\Amazon\Models\GetLowestOfferListingsForSKUResponse;
use MobiMarket\Amazon\Models\GetLowestPricedOffersForASINRequest;
use MobiMarket\Amazon\Models\GetLowestPricedOffersForASINResponse;
use MobiMarket\Amazon\Models\GetLowestPricedOffersForSKURequest;
use MobiMarket\Amazon\Models\GetLowestPricedOffersForSKUResponse;
use MobiMarket\Amazon\Models\GetMatchingProductForIdRequest;
use MobiMarket\Amazon\Models\GetMatchingProductForIdResponse;
use MobiMarket\Amazon\Models\GetMatchingProductRequest;
use MobiMarket\Amazon\Models\GetMatchingProductResponse;
use MobiMarket\Amazon\Models\GetMyFeesEstimateRequest;
use MobiMarket\Amazon\Models\GetMyFeesEstimateResponse;
use MobiMarket\Amazon\Models\GetMyPriceForASINRequest;
use MobiMarket\Amazon\Models\GetMyPriceForASINResponse;
use MobiMarket\Amazon\Models\GetMyPriceForSKURequest;
use MobiMarket\Amazon\Models\GetMyPriceForSKUResponse;
use MobiMarket\Amazon\Models\GetProductCategoriesForASINRequest;
use MobiMarket\Amazon\Models\GetProductCategoriesForASINResponse;
use MobiMarket\Amazon\Models\GetProductCategoriesForSKURequest;
use MobiMarket\Amazon\Models\GetProductCategoriesForSKUResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListMatchingProductsRequest;
use MobiMarket\Amazon\Models\ListMatchingProductsResponse;

interface IMarketplaceWebServiceProducts
{
    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param GetCompetitivePricingForASINRequest|array $request array of parameters for GetCompetitivePricingForASIN request or GetCompetitivePricingForASIN object itself
     *
     * @throws AmazonApiException
     */
    public function getCompetitivePricingForASIN($request): GetCompetitivePricingForASINResponse;

    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param GetCompetitivePricingForSKURequest|array $request array of parameters for GetCompetitivePricingForSKU request or GetCompetitivePricingForSKU object itself
     *
     * @throws AmazonApiException
     */
    public function getCompetitivePricingForSKU($request): GetCompetitivePricingForSKUResponse;

    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param GetLowestOfferListingsForASINRequest|array $request array of parameters for GetLowestOfferListingsForASIN request or GetLowestOfferListingsForASIN object itself
     *
     * @throws AmazonApiException
     */
    public function getLowestOfferListingsForASIN($request): GetLowestOfferListingsForASINResponse;

    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param GetLowestOfferListingsForSKURequest|array $request array of parameters for GetLowestOfferListingsForSKU request or GetLowestOfferListingsForSKU object itself
     *
     * @throws AmazonApiException
     */
    public function getLowestOfferListingsForSKU($request): GetLowestOfferListingsForSKUResponse;

    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param GetLowestPricedOffersForASINRequest|array $request array of parameters for GetLowestPricedOffersForASIN request or GetLowestPricedOffersForASIN object itself
     *
     * @throws AmazonApiException
     */
    public function getLowestPricedOffersForASIN($request): GetLowestPricedOffersForASINResponse;

    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param GetLowestPricedOffersForSKURequest|array $request array of parameters for GetLowestPricedOffersForSKU request or GetLowestPricedOffersForSKU object itself
     *
     * @throws AmazonApiException
     */
    public function getLowestPricedOffersForSKU($request): GetLowestPricedOffersForSKUResponse;

    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param GetMatchingProductRequest|array $request array of parameters for GetMatchingProduct request or GetMatchingProduct object itself
     *
     * @throws AmazonApiException
     */
    public function getMatchingProduct($request): GetMatchingProductResponse;

    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN].
     *
     * @param GetMatchingProductForIdRequest|array $request array of parameters for GetMatchingProductForId request or GetMatchingProductForId object itself
     *
     * @throws AmazonApiException
     */
    public function getMatchingProductForId($request): GetMatchingProductForIdResponse;

    /**
     * Get My Fees Estimate
     * Retrieves the fees estimate for the
     *         products identified by the given
     *         ASIN/SKU list.
     *
     * @param GetMyFeesEstimateRequest|array $request array of parameters for GetMyFeesEstimate request or GetMyFeesEstimate object itself
     *
     * @throws AmazonApiException
     */
    public function getMyFeesEstimate($request): GetMyFeesEstimateResponse;

    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->.
     *
     * @param GetMyPriceForASINRequest|array $request array of parameters for GetMyPriceForASIN request or GetMyPriceForASIN object itself
     *
     * @throws AmazonApiException
     */
    public function getMyPriceForASIN($request): GetMyPriceForASINResponse;

    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->.
     *
     * @param GetMyPriceForSKURequest|array $request array of parameters for GetMyPriceForSKU request or GetMyPriceForSKU object itself
     *
     * @throws AmazonApiException
     */
    public function getMyPriceForSKU($request): GetMyPriceForSKUResponse;

    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param GetProductCategoriesForASINRequest|array $request array of parameters for GetProductCategoriesForASIN request or GetProductCategoriesForASIN object itself
     *
     * @throws AmazonApiException
     */
    public function getProductCategoriesForASIN($request): GetProductCategoriesForASINResponse;

    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param GetProductCategoriesForSKURequest|array $request array of parameters for GetProductCategoriesForSKU request or GetProductCategoriesForSKU object itself
     *
     * @throws AmazonApiException
     */
    public function getProductCategoriesForSKU($request): GetProductCategoriesForSKUResponse;

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;

    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param ListMatchingProductsRequest|array $request array of parameters for ListMatchingProducts request or ListMatchingProducts object itself
     *
     * @throws AmazonApiException
     */
    public function listMatchingProducts($request): ListMatchingProductsResponse;
}
