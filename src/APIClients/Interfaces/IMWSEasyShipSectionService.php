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

use MobiMarket\Amazon\Models\CreateScheduledPackageRequest;
use MobiMarket\Amazon\Models\CreateScheduledPackageResponse;
use MobiMarket\Amazon\Models\GetScheduledPackageRequest;
use MobiMarket\Amazon\Models\GetScheduledPackageResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\ListPickupSlotsRequest;
use MobiMarket\Amazon\Models\ListPickupSlotsResponse;
use MobiMarket\Amazon\Models\UpdateScheduledPackagesRequest;
use MobiMarket\Amazon\Models\UpdateScheduledPackagesResponse;

interface IMWSEasyShipSectionService
{
    /**
     * Create Scheduled Package
     * This operation schedules the order for pickup and returns scheduled package details.
     *
     * @param CreateScheduledPackageRequest|array $request array of parameters for CreateScheduledPackage request or CreateScheduledPackage object itself
     *
     * @throws AmazonApiException
     */
    public function createScheduledPackage($request): CreateScheduledPackageResponse;

    /**
     * Get Scheduled Package
     * This operation returns the scheduled package details of an already scheduled order.
     *
     * @param GetScheduledPackageRequest|array $request array of parameters for GetScheduledPackage request or GetScheduledPackage object itself
     *
     * @throws AmazonApiException
     */
    public function getScheduledPackage($request): GetScheduledPackageResponse;

    /**
     * List Pickup Slots
     * This operation returns a list of available PickupSlots.
     *
     * @param ListPickupSlotsRequest|array $request array of parameters for ListPickupSlots request or ListPickupSlots object itself
     *
     * @throws AmazonApiException
     */
    public function listPickupSlots($request): ListPickupSlotsResponse;

    /**
     * Update Scheduled Packages
     * This operation updates the schedule pickup slot of a scheduled order and returns updated scheduled package
     *         details.
     *
     * @param UpdateScheduledPackagesRequest|array $request array of parameters for UpdateScheduledPackages request or UpdateScheduledPackages object itself
     *
     * @throws AmazonApiException
     */
    public function updateScheduledPackages($request): UpdateScheduledPackagesResponse;

    /**
     * Get Service Status.
     *
     * @param GetServiceStatusRequest|array $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @throws AmazonApiException
     */
    public function getServiceStatus($request): GetServiceStatusResponse;
}
