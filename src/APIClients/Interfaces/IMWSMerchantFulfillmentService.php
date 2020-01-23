<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

interface MWSMerchantFulfillmentService_Interface
{
    /**
     * Cancel Shipment
     * Cancels an existing shipment.  This will only succeed if the cancellation window has not passed and if the shipment
     *     has not been cancelled already.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_CancelShipment request or MWSMerchantFulfillmentService_Model_CancelShipment object itself
     *
     * @see MWSMerchantFulfillmentService_Model_CancelShipmentRequest
     *
     * @throws MWSMerchantFulfillmentService_Exception
     *
     * @return MWSMerchantFulfillmentService_Model_CancelShipmentResponse
     */
    public function cancelShipment($request);

    /**
     * Create Shipment
     * Creates a shipment for the shipping information specified.  Purchases and returns a label for the specified
     *     shipping service or shipping service offering.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_CreateShipment request or MWSMerchantFulfillmentService_Model_CreateShipment object itself
     *
     * @see MWSMerchantFulfillmentService_Model_CreateShipmentRequest
     *
     * @throws MWSMerchantFulfillmentService_Exception
     *
     * @return MWSMerchantFulfillmentService_Model_CreateShipmentResponse
     */
    public function createShipment($request);

    /**
     * Get Additional Seller Inputs
     * Gets the list of additional seller inputs required for a ship-method.
     *     Also returns any saved values the seller has for these additional inputs.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputs request or MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputs object itself
     *
     * @see MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsRequest
     *
     * @throws MWSMerchantFulfillmentService_Exception
     *
     * @return MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResponse
     */
    public function getAdditionalSellerInputs($request);

    /**
     * Get Eligible Shipping Services
     * Gets a list of eligible shipping services for the shipment information specified.  The ShippingServiceId or
     *     ShippingServiceOfferingId can be used in CreateShipment to specify the shipping service or the specific offer
     *     respectively.  A list of carriers that are temporarily unavailable is also returned.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_GetEligibleShippingServices request or MWSMerchantFulfillmentService_Model_GetEligibleShippingServices object itself
     *
     * @see MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesRequest
     *
     * @throws MWSMerchantFulfillmentService_Exception
     *
     * @return MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse
     */
    public function getEligibleShippingServices($request);

    /**
     * Get Shipment
     * Gets an existing shipment, including the label status, label content, shipping information.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_GetShipment request or MWSMerchantFulfillmentService_Model_GetShipment object itself
     *
     * @see MWSMerchantFulfillmentService_Model_GetShipmentRequest
     *
     * @throws MWSMerchantFulfillmentService_Exception
     *
     * @return MWSMerchantFulfillmentService_Model_GetShipmentResponse
     */
    public function getShipment($request);

    /**
     * Get Service Status.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_GetServiceStatus request or MWSMerchantFulfillmentService_Model_GetServiceStatus object itself
     *
     * @see MWSMerchantFulfillmentService_Model_GetServiceStatusRequest
     *
     * @throws MWSMerchantFulfillmentService_Exception
     *
     * @return MWSMerchantFulfillmentService_Model_GetServiceStatusResponse
     */
    public function getServiceStatus($request);
}
