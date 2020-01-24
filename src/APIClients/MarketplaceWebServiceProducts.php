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
        if (!($request instanceof GetCompetitivePricingForASINRequest)) {
            $request = new GetCompetitivePricingForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetCompetitivePricingForASIN';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetCompetitivePricingForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getCompetitivePricingForSKU($request): GetCompetitivePricingForSKUResponse
    {
        if (!($request instanceof GetCompetitivePricingForSKURequest)) {
            $request = new GetCompetitivePricingForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetCompetitivePricingForSKU';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetCompetitivePricingForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getLowestOfferListingsForASIN($request): GetLowestOfferListingsForASINResponse
    {
        if (!($request instanceof GetLowestOfferListingsForASINRequest)) {
            $request = new GetLowestOfferListingsForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestOfferListingsForASIN';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetLowestOfferListingsForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getLowestOfferListingsForSKU($request): GetLowestOfferListingsForSKUResponse
    {
        if (!($request instanceof GetLowestOfferListingsForSKURequest)) {
            $request = new GetLowestOfferListingsForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestOfferListingsForSKU';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetLowestOfferListingsForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getLowestPricedOffersForASIN($request): GetLowestPricedOffersForASINResponse
    {
        if (!($request instanceof GetLowestPricedOffersForASINRequest)) {
            $request = new GetLowestPricedOffersForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestPricedOffersForASIN';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetLowestPricedOffersForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getLowestPricedOffersForSKU($request): GetLowestPricedOffersForSKUResponse
    {
        if (!($request instanceof GetLowestPricedOffersForSKURequest)) {
            $request = new GetLowestPricedOffersForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestPricedOffersForSKU';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetLowestPricedOffersForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getMatchingProduct($request): GetMatchingProductResponse
    {
        if (!($request instanceof GetMatchingProductRequest)) {
            $request = new GetMatchingProductRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMatchingProduct';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetMatchingProductResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getMatchingProductForId($request): GetMatchingProductForIdResponse
    {
        if (!($request instanceof GetMatchingProductForIdRequest)) {
            $request = new GetMatchingProductForIdRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMatchingProductForId';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetMatchingProductForIdResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getMyFeesEstimate($request): GetMyFeesEstimateResponse
    {
        if (!($request instanceof GetMyFeesEstimateRequest)) {
            $request = new GetMyFeesEstimateRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyFeesEstimate';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetMyFeesEstimateResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getMyPriceForASIN($request): GetMyPriceForASINResponse
    {
        if (!($request instanceof GetMyPriceForASINRequest)) {
            $request = new GetMyPriceForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyPriceForASIN';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetMyPriceForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getMyPriceForSKU($request): GetMyPriceForSKUResponse
    {
        if (!($request instanceof GetMyPriceForSKURequest)) {
            $request = new GetMyPriceForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyPriceForSKU';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetMyPriceForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getProductCategoriesForASIN($request): GetProductCategoriesForASINResponse
    {
        if (!($request instanceof GetProductCategoriesForASINRequest)) {
            $request = new GetProductCategoriesForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetProductCategoriesForASIN';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetProductCategoriesForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getProductCategoriesForSKU($request): GetProductCategoriesForSKUResponse
    {
        if (!($request instanceof GetProductCategoriesForSKURequest)) {
            $request = new GetProductCategoriesForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetProductCategoriesForSKU';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetProductCategoriesForSKUResponse::fromXML($httpResponse['ResponseBody']);
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

    /** {@inheritdoc} */
    public function listMatchingProducts($request): ListMatchingProductsResponse
    {
        if (!($request instanceof ListMatchingProductsRequest)) {
            $request = new ListMatchingProductsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListMatchingProducts';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListMatchingProductsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }
}
