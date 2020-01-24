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

use MobiMarket\Amazon\APIClients\Interfaces\IMarketplaceWebServiceProducts;
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

class MarketplaceWebServiceProducts extends BaseClient implements IMarketplaceWebServiceProducts
{
    public const SERVICE_VERSION    = '2011-10-01';
    public const MWS_CLIENT_VERSION = '2017-03-22';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'MarketplaceWebServiceProducts PHP5 Library',
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
    public function getCompetitivePricingForASIN($request): GetCompetitivePricingForASINResponse
    {
        return $this->_invokeApi($request, 'GetCompetitivePricingForASIN', GetCompetitivePricingForASINRequest::class, GetCompetitivePricingForASINResponse::class);
    }

    /** {@inheritdoc} */
    public function getCompetitivePricingForSKU($request): GetCompetitivePricingForSKUResponse
    {
        return $this->_invokeApi($request, 'GetCompetitivePricingForSKU', GetCompetitivePricingForSKURequest::class, GetCompetitivePricingForSKUResponse::class);
    }

    /** {@inheritdoc} */
    public function getLowestOfferListingsForASIN($request): GetLowestOfferListingsForASINResponse
    {
        return $this->_invokeApi($request, 'GetLowestOfferListingsForASIN', GetLowestOfferListingsForASINRequest::class, GetLowestOfferListingsForASINResponse::class);
    }

    /** {@inheritdoc} */
    public function getLowestOfferListingsForSKU($request): GetLowestOfferListingsForSKUResponse
    {
        return $this->_invokeApi($request, 'GetLowestOfferListingsForSKU', GetLowestOfferListingsForSKURequest::class, GetLowestOfferListingsForSKUResponse::class);
    }

    /** {@inheritdoc} */
    public function getLowestPricedOffersForASIN($request): GetLowestPricedOffersForASINResponse
    {
        return $this->_invokeApi($request, 'GetLowestPricedOffersForASIN', GetLowestPricedOffersForASINRequest::class, GetLowestPricedOffersForASINResponse::class);
    }

    /** {@inheritdoc} */
    public function getLowestPricedOffersForSKU($request): GetLowestPricedOffersForSKUResponse
    {
        return $this->_invokeApi($request, 'GetLowestPricedOffersForSKU', GetLowestPricedOffersForSKURequest::class, GetLowestPricedOffersForSKUResponse::class);
    }

    /** {@inheritdoc} */
    public function getMatchingProduct($request): GetMatchingProductResponse
    {
        return $this->_invokeApi($request, 'GetMatchingProduct', GetMatchingProductRequest::class, GetMatchingProductResponse::class);
    }

    /** {@inheritdoc} */
    public function getMatchingProductForId($request): GetMatchingProductForIdResponse
    {
        return $this->_invokeApi($request, 'GetMatchingProductForId', GetMatchingProductForIdRequest::class, GetMatchingProductForIdResponse::class);
    }

    /** {@inheritdoc} */
    public function getMyFeesEstimate($request): GetMyFeesEstimateResponse
    {
        return $this->_invokeApi($request, 'GetMyFeesEstimate', GetMyFeesEstimateRequest::class, GetMyFeesEstimateResponse::class);
    }

    /** {@inheritdoc} */
    public function getMyPriceForASIN($request): GetMyPriceForASINResponse
    {
        return $this->_invokeApi($request, 'GetMyPriceForASIN', GetMyPriceForASINRequest::class, GetMyPriceForASINResponse::class);
    }

    /** {@inheritdoc} */
    public function getMyPriceForSKU($request): GetMyPriceForSKUResponse
    {
        return $this->_invokeApi($request, 'GetMyPriceForSKU', GetMyPriceForSKURequest::class, GetMyPriceForSKUResponse::class);
    }

    /** {@inheritdoc} */
    public function getProductCategoriesForASIN($request): GetProductCategoriesForASINResponse
    {
        return $this->_invokeApi($request, 'GetProductCategoriesForASIN', GetProductCategoriesForASINRequest::class, GetProductCategoriesForASINResponse::class);
    }

    /** {@inheritdoc} */
    public function getProductCategoriesForSKU($request): GetProductCategoriesForSKUResponse
    {
        return $this->_invokeApi($request, 'GetProductCategoriesForSKU', GetProductCategoriesForSKURequest::class, GetProductCategoriesForSKUResponse::class);
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }

    /** {@inheritdoc} */
    public function listMatchingProducts($request): ListMatchingProductsResponse
    {
        return $this->_invokeApi($request, 'ListMatchingProducts', ListMatchingProductsRequest::class, ListMatchingProductsResponse::class);
    }
}
