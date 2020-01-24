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

use MobiMarket\Amazon\Models\CancelShipmentRequest;
use MobiMarket\Amazon\Models\CancelShipmentResponse;
use MobiMarket\Amazon\Models\CreateShipmentRequest;
use MobiMarket\Amazon\Models\CreateShipmentResponse;
use MobiMarket\Amazon\Models\GetAdditionalSellerInputsRequest;
use MobiMarket\Amazon\Models\GetAdditionalSellerInputsResponse;
use MobiMarket\Amazon\Models\GetEligibleShippingServicesRequest;
use MobiMarket\Amazon\Models\GetEligibleShippingServicesResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\GetShipmentRequest;
use MobiMarket\Amazon\Models\GetShipmentResponse;

interface IMWSMerchantFulfillmentService
{
    /**
     * Cancel Shipment
     * Cancels an existing shipment.  This will only succeed if the cancellation window has not passed and if the shipment
     *     has not been cancelled already.
     *
     * @param CancelShipmentRequest|array $request array of parameters for CancelShipment request or CancelShipment object itself
     *
     * @throws AmazonApiException
     */
    public function cancelShipment($request): CancelShipmentResponse;

    /**
     * Create Shipment
     * Creates a shipment for the shipping information specified.  Purchases and returns a label for the specified
     *     shipping service or shipping service offering.
     *
     * @param CreateShipmentRequest|array $request array of parameters for CreateShipment request or CreateShipment object itself
     *
     * @throws AmazonApiException
     */
    public function createShipment($request): CreateShipmentResponse;

    /**
     * Get Additional Seller Inputs
     * Gets the list of additional seller inputs required for a ship-method.
     *     Also returns any saved values the seller has for these additional inputs.
     *
     * @param GetAdditionalSellerInputsRequest|array $request array of parameters for GetAdditionalSellerInputs request or GetAdditionalSellerInputs object itself
     *
     * @throws AmazonApiException
     */
    public function getAdditionalSellerInputs($request): GetAdditionalSellerInputsResponse;

    /**
     * Get Eligible Shipping Services
     * Gets a list of eligible shipping services for the shipment information specified.  The ShippingServiceId or
     *     ShippingServiceOfferingId can be used in CreateShipment to specify the shipping service or the specific offer
     *     respectively.  A list of carriers that are temporarily unavailable is also returned.
     *
     * @param GetEligibleShippingServicesRequest|array $request array of parameters for GetEligibleShippingServices request or GetEligibleShippingServices object itself
     *
     * @throws AmazonApiException
     */
    public function getEligibleShippingServices($request): GetEligibleShippingServicesResponse;

    /**
     * Get Shipment
     * Gets an existing shipment, including the label status, label content, shipping information.
     *
     * @param GetShipmentRequest|array $request array of parameters for GetShipment request or GetShipment object itself
     *
     * @throws AmazonApiException
     */
    public function getShipment($request): GetShipmentResponse;

    /**
     * Get Service Status.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;
}
