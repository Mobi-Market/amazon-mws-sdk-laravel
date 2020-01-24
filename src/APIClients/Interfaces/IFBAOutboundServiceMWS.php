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

use MobiMarket\Amazon\Models\CancelFulfillmentOrderRequest;
use MobiMarket\Amazon\Models\CancelFulfillmentOrderResponse;
use MobiMarket\Amazon\Models\CreateFulfillmentOrderRequest;
use MobiMarket\Amazon\Models\CreateFulfillmentOrderResponse;
use MobiMarket\Amazon\Models\CreateFulfillmentReturnRequest;
use MobiMarket\Amazon\Models\CreateFulfillmentReturnResponse;
use MobiMarket\Amazon\Models\GetFulfillmentOrderRequest;
use MobiMarket\Amazon\Models\GetFulfillmentOrderResponse;
use MobiMarket\Amazon\Models\GetFulfillmentPreviewRequest;
use MobiMarket\Amazon\Models\GetFulfillmentPreviewResponse;
use MobiMarket\Amazon\Models\GetPackageTrackingDetailsRequest;
use MobiMarket\Amazon\Models\GetPackageTrackingDetailsResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListAllFulfillmentOrdersByNextTokenRequest;
use MobiMarket\Amazon\Models\ListAllFulfillmentOrdersByNextTokenResponse;
use MobiMarket\Amazon\Models\ListAllFulfillmentOrdersRequest;
use MobiMarket\Amazon\Models\ListAllFulfillmentOrdersResponse;
use MobiMarket\Amazon\Models\ListReturnReasonCodesRequest;
use MobiMarket\Amazon\Models\ListReturnReasonCodesResponse;
use MobiMarket\Amazon\Models\UpdateFulfillmentOrderRequest;
use MobiMarket\Amazon\Models\UpdateFulfillmentOrderResponse;

interface IFBAOutboundServiceMWS
{
    /**
     * Cancel Fulfillment Order
     * Request for Amazon to no longer attempt to fulfill an existing
     *   fulfillment order. Amazon will attempt to stop fulfillment of all
     *   items that haven't already shipped, but cannot guarantee success.
     *   Note: Items that have already shipped cannot be cancelled.
     *
     * @param CancelFulfillmentOrderRequest|array $request array of parameters for CancelFulfillmentOrder request or CancelFulfillmentOrder object itself
     *
     * @throws AmazonApiException
     */
    public function cancelFulfillmentOrder($request): CancelFulfillmentOrderResponse;

    /**
     * Create Fulfillment Order
     * The SellerFulfillmentOrderId must be unique for all fulfillment
     *   orders created by the seller. If your system already has a
     *   unique order identifier, then that may be a good value to put in
     *   this field.
     *
     *   This DisplayableOrderDateTime will appear as the "order date" in
     *   recipient-facing materials such as the packing slip.  The format
     *   must be timestamp.
     *
     *   The DisplayableOrderId will appear as the "order id" in those
     *   materials, and the DisplayableOrderComment will appear as well.
     *
     *   ShippingSpeedCategory is the Service Level Agreement for how long it
     *   will take a shipment to be transported from the fulfillment center
     *   to the recipient, once shipped. no default.
     *   The following shipping speeds are available for US domestic:
     *    * Standard, 3-5 business days
     *    * Expedited, 2 business days
     *    * Priority, 1 business day
     *
     *   Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
     *
     *   DestinationAddress is the address the items will be shipped to.
     *
     *   FulfillmentPolicy indicates how unfulfillable items should be
     *   handled. default is FillOrKill.
     *    * FillOrKill if any item is determined to be unfulfillable
     *      before any items have started shipping, the entire order is
     *      considered unfulfillable.  Once any part of the order has
     *      started shipping, as much of the order as possible will be
     *      shipped.
     *    * FillAll never consider any item unfulfillable.  Items must
     *      either be fulfilled or merchant-cancelled.
     *    * FillAllAvailable fulfill as much of the order as possible.
     *
     *   FulfillmentMethod indicates the intended recipient channel for the
     *   order whether it be a consumer order or inventory return.
     *   default is Consumer.
     *   The available methods to fulfill a given order:
     *    * Consumer indicates a customer order, this is the default.
     *
     *   NotificationEmailList can be used to provide a list of e-mail
     *   addresses to receive ship-complete e-mail notifications. These
     *   e-mails are customer-facing e-mails sent by FBA on behalf of
     *   the seller.
     *
     * @param CreateFulfillmentOrderRequest|array $request array of parameters for CreateFulfillmentOrder request or CreateFulfillmentOrder object itself
     *
     * @throws AmazonApiException
     */
    public function createFulfillmentOrder($request): CreateFulfillmentOrderResponse;

    /**
     * Create Fulfillment Return
     * Requests a return of one or more items that were
     *   originally fulfilled by SI. The client must look at
     *   the item/authorization list details in the response
     *   to determine what was accepted. All accepted returned
     *   items will be returned as a list in ReturnItemList.
     *   All non-returnable items are return as a list in InvalidReturnItemList.
     *   Both lists will always be returned as part of the response. If all
     *   items are accepted for return InvalidReturnItemList will be empty. If all
     *   the items are invalid for a return, ReturnItemList will be empty.
     *   If all the items are invalid for a return, ReturnItemList will be empty.
     *
     * @param CreateFulfillmentReturnRequest|array $request array of parameters for CreateFulfillmentReturn request or CreateFulfillmentReturn object itself
     *
     * @throws AmazonApiException
     */
    public function createFulfillmentReturn($request): CreateFulfillmentReturnResponse;

    /**
     * Get Fulfillment Order
     * Get detailed information about a FulfillmentOrder.  This includes the
     *   original fulfillment order request, the status of the order and its
     *   items in Amazon's fulfillment network, and the shipments that have been
     *   generated to fulfill the order.
     *
     * @param GetFulfillmentOrderRequest|array $request array of parameters for GetFulfillmentOrder request or GetFulfillmentOrder object itself
     *
     * @throws AmazonApiException
     */
    public function getFulfillmentOrder($request): GetFulfillmentOrderResponse;

    /**
     * Get Fulfillment Preview
     * Get estimated shipping dates and fees for all
     *   available shipping speed given a set of seller SKUs and quantities.
     *
     *   If "ShippingSpeedCategories" are inputed, only previews for those options will be returned.
     *
     *   If "ShippingSpeedCategories" are not inputed, then previews for all available options
     *   are returned.
     *
     *   The service will return the fulfillment estimates for a set of Seller
     *   SKUs and quantities.
     *
     * @param GetFulfillmentPreviewRequest|array $request array of parameters for GetFulfillmentPreview request or GetFulfillmentPreview object itself
     *
     * @throws AmazonApiException
     */
    public function getFulfillmentPreview($request): GetFulfillmentPreviewResponse;

    /**
     * Get Package Tracking Details
     * Gets the tracking details for a shipment package.
     *
     * @param GetPackageTrackingDetailsRequest|array $request array of parameters for GetPackageTrackingDetails request or GetPackageTrackingDetails object itself
     *
     * @throws AmazonApiException
     */
    public function getPackageTrackingDetails($request): GetPackageTrackingDetailsResponse;

    /**
     * Get Service Status
     * Request to poll the system for availability.
     *   Status is one of GREEN, RED representing:
     *   GREEN: The service section is operating normally.
     *   RED: The service section disruption.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;

    /**
     * List All Fulfillment Orders
     * Gets the first set of fulfillment orders that are currently being
     *   fulfilled or that were being fulfilled at some time in the past
     *   (as specified by the query parameters). Also returns a NextToken
     *   which can be used iterate through the remaining fulfillment orders
     *   (via the ListAllFulfillmentOrdersByNextToken operation).
     *
     *   If a NextToken is not returned, it indicates the end-of-data.
     *
     *   If the QueryStartDateTime is set, the results will include all orders
     *   currently being fulfilled, and all orders that were being fulfilled
     *   since that date and time.
     *
     * @param ListAllFulfillmentOrdersRequest|array $request array of parameters for ListAllFulfillmentOrders request or ListAllFulfillmentOrders object itself
     *
     * @throws AmazonApiException
     */
    public function listAllFulfillmentOrders($request): ListAllFulfillmentOrdersResponse;

    /**
     * List All Fulfillment Orders By Next Token
     * Gets the next set of fulfillment orders that are currently being
     *   being fulfilled or that were being fulfilled at some time in the
     *   past.
     *
     *   If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param ListAllFulfillmentOrdersByNextTokenRequest|array $request array of parameters for ListAllFulfillmentOrdersByNextToken request or ListAllFulfillmentOrdersByNextToken object itself
     *
     * @throws AmazonApiException
     */
    public function listAllFulfillmentOrdersByNextToken($request): ListAllFulfillmentOrdersByNextTokenResponse;

    /**
     * List Return Reason Codes
     * This operation will result in a list of eligible return reasons for
     *   a given SKU and original ordering country. The eligible return reasons
     *   may vary from country to country.
     *
     * @param ListReturnReasonCodesRequest|array $request array of parameters for ListReturnReasonCodes request or ListReturnReasonCodes object itself
     *
     * @throws AmazonApiException
     */
    public function listReturnReasonCodes($request): ListReturnReasonCodesResponse;

    /**
     * Update Fulfillment Order
     * The SellerFulfillmentOrderId must be the order ID of the original
     *     order that needs to be updated.
     *
     *   This DisplayableOrderDateTime will appear as the "order date" in
     *   recipient-facing materials such as the packing slip.  The format
     *   must be timestamp.
     *
     *   The DisplayableOrderId will appear as the "order id" in those
     *   materials, and the DisplayableOrderComment will appear as well.
     *
     *   ShippingSpeedCategory is the Service Level Agreement for how long it
     *   will take a shipment to be transported from the fulfillment center
     *   to the recipient, once shipped. no default.
     *   The following shipping speeds are available for US domestic:
     *    * Standard, 3-5 business days
     *    * Expedited, 2 business days
     *    * Priority, 1 business day
     *
     *   Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
     *
     *   DestinationAddress is the address the items will be shipped to.
     *
     *   FulfillmentAction indicates whether an order will be held or shipped.
     *   Default is Hold.
     *   * Hold if the order needs to be held but does not need to be shipped.
     *   * Ship if the order is to be fulfilled and shipped out to the customer
     *   immediately.
     *
     *   FulfillmentPolicy indicates how unfulfillable items should be
     *   handled. default is FillOrKill.
     *    * FillOrKill if any item is determined to be unfulfillable
     *      before any items have started shipping, the entire order is
     *      considered unfulfillable.  Once any part of the order has
     *      started shipping, as much of the order as possible will be
     *      shipped.
     *    * FillAll never consider any item unfulfillable.  Items must
     *      either be fulfilled or merchant-cancelled.
     *    * FillAllAvailable fulfill as much of the order as possible.
     *
     *   NotificationEmailList can be used to provide a list of e-mail
     *   addresses to receive ship-complete e-mail notifications. These
     *   e-mails are customer-facing e-mails sent by FBA on behalf of
     *   the seller.
     *
     * @param UpdateFulfillmentOrderRequest|array $request array of parameters for UpdateFulfillmentOrder request or UpdateFulfillmentOrder object itself
     *
     * @throws AmazonApiException
     */
    public function updateFulfillmentOrder($request): UpdateFulfillmentOrderResponse;
}
