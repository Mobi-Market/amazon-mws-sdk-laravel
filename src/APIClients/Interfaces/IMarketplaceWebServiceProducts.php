<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

interface MarketplaceWebServiceProducts_Interface
{
    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     */
    public function getCompetitivePricingForASIN($request);

    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse
     */
    public function getCompetitivePricingForSKU($request);

    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     */
    public function getLowestOfferListingsForASIN($request);

    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     */
    public function getLowestOfferListingsForSKU($request);

    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASIN request or MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASIN object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse
     */
    public function getLowestPricedOffersForASIN($request);

    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKU request or MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKU object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKURequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKUResponse
     */
    public function getLowestPricedOffersForSKU($request);

    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProduct request or MarketplaceWebServiceProducts_Model_GetMatchingProduct object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProductRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse
     */
    public function getMatchingProduct($request);

    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN].
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProductForId request or MarketplaceWebServiceProducts_Model_GetMatchingProductForId object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse
     */
    public function getMatchingProductForId($request);

    /**
     * Get My Fees Estimate
     * Retrieves the fees estimate for the
     *         products identified by the given
     *         ASIN/SKU list.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyFeesEstimate request or MarketplaceWebServiceProducts_Model_GetMyFeesEstimate object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetMyFeesEstimateRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetMyFeesEstimateResponse
     */
    public function getMyFeesEstimate($request);

    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForASIN request or MarketplaceWebServiceProducts_Model_GetMyPriceForASIN object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     */
    public function getMyPriceForASIN($request);

    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForSKU request or MarketplaceWebServiceProducts_Model_GetMyPriceForSKU object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     */
    public function getMyPriceForSKU($request);

    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     */
    public function getProductCategoriesForASIN($request);

    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse
     */
    public function getProductCategoriesForSKU($request);

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetServiceStatus request or MarketplaceWebServiceProducts_Model_GetServiceStatus object itself
     *
     * @see MarketplaceWebServiceProducts_Model_GetServiceStatusRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse
     */
    public function getServiceStatus($request);

    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_ListMatchingProducts request or MarketplaceWebServiceProducts_Model_ListMatchingProducts object itself
     *
     * @see MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest
     *
     * @throws MarketplaceWebServiceProducts_Exception
     *
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     */
    public function listMatchingProducts($request);
}
