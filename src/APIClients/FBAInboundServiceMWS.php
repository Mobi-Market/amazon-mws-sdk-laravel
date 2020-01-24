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

use MobiMarket\Amazon\APIClients\Interfaces\IFBAInboundServiceMWS;
use MobiMarket\Amazon\Models\ConfirmPreorderRequest;
use MobiMarket\Amazon\Models\ConfirmPreorderResponse;
use MobiMarket\Amazon\Models\ConfirmTransportInputRequest;
use MobiMarket\Amazon\Models\ConfirmTransportRequestResponse;
use MobiMarket\Amazon\Models\CreateInboundShipmentPlanRequest;
use MobiMarket\Amazon\Models\CreateInboundShipmentPlanResponse;
use MobiMarket\Amazon\Models\CreateInboundShipmentRequest;
use MobiMarket\Amazon\Models\CreateInboundShipmentResponse;
use MobiMarket\Amazon\Models\EstimateTransportInputRequest;
use MobiMarket\Amazon\Models\EstimateTransportRequestResponse;
use MobiMarket\Amazon\Models\GetBillOfLadingRequest;
use MobiMarket\Amazon\Models\GetBillOfLadingResponse;
use MobiMarket\Amazon\Models\GetInboundGuidanceForASINRequest;
use MobiMarket\Amazon\Models\GetInboundGuidanceForASINResponse;
use MobiMarket\Amazon\Models\GetInboundGuidanceForSKURequest;
use MobiMarket\Amazon\Models\GetInboundGuidanceForSKUResponse;
use MobiMarket\Amazon\Models\GetPackageLabelsRequest;
use MobiMarket\Amazon\Models\GetPackageLabelsResponse;
use MobiMarket\Amazon\Models\GetPalletLabelsRequest;
use MobiMarket\Amazon\Models\GetPalletLabelsResponse;
use MobiMarket\Amazon\Models\GetPreorderInfoRequest;
use MobiMarket\Amazon\Models\GetPreorderInfoResponse;
use MobiMarket\Amazon\Models\GetPrepInstructionsForASINRequest;
use MobiMarket\Amazon\Models\GetPrepInstructionsForASINResponse;
use MobiMarket\Amazon\Models\GetPrepInstructionsForSKURequest;
use MobiMarket\Amazon\Models\GetPrepInstructionsForSKUResponse;
use MobiMarket\Amazon\Models\GetServiceStatusRequest;
use MobiMarket\Amazon\Models\GetServiceStatusResponse;
use MobiMarket\Amazon\Models\GetTransportContentRequest;
use MobiMarket\Amazon\Models\GetTransportContentResponse;
use MobiMarket\Amazon\Models\GetUniquePackageLabelsRequest;
use MobiMarket\Amazon\Models\GetUniquePackageLabelsResponse;
use MobiMarket\Amazon\Models\ListInboundShipmentItemsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListInboundShipmentItemsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListInboundShipmentItemsRequest;
use MobiMarket\Amazon\Models\ListInboundShipmentItemsResponse;
use MobiMarket\Amazon\Models\ListInboundShipmentsByNextTokenRequest;
use MobiMarket\Amazon\Models\ListInboundShipmentsByNextTokenResponse;
use MobiMarket\Amazon\Models\ListInboundShipmentsRequest;
use MobiMarket\Amazon\Models\ListInboundShipmentsResponse;
use MobiMarket\Amazon\Models\PutTransportContentRequest;
use MobiMarket\Amazon\Models\PutTransportContentResponse;
use MobiMarket\Amazon\Models\UpdateInboundShipmentRequest;
use MobiMarket\Amazon\Models\UpdateInboundShipmentResponse;
use MobiMarket\Amazon\Models\VoidTransportInputRequest;
use MobiMarket\Amazon\Models\VoidTransportRequestResponse;

class FBAInboundServiceMWS extends BaseClient implements IFBAInboundServiceMWS
{
    public const SERVICE_VERSION    = '2010-10-01';
    public const MWS_CLIENT_VERSION = '2016-10-05';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'FBAInboundServiceMWS PHP5 Library',
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
    public function confirmPreorder($request): ConfirmPreorderResponse
    {
        return $this->_invokeApi($request, 'ConfirmPreorder', ConfirmPreorderRequest::class, ConfirmPreorderResponse::class);
    }

    /** {@inheritdoc} */
    public function confirmTransportRequest($request): ConfirmTransportRequestResponse
    {
        return $this->_invokeApi($request, 'ConfirmTransportRequest', ConfirmTransportInputRequest::class, ConfirmTransportRequestResponse::class);
    }

    /** {@inheritdoc} */
    public function createInboundShipment($request): CreateInboundShipmentResponse
    {
        return $this->_invokeApi($request, 'CreateInboundShipment', CreateInboundShipmentRequest::class, CreateInboundShipmentResponse::class);
    }

    /** {@inheritdoc} */
    public function createInboundShipmentPlan($request): CreateInboundShipmentPlanResponse
    {
        return $this->_invokeApi($request, 'CreateInboundShipmentPlan', CreateInboundShipmentPlanRequest::class, CreateInboundShipmentPlanResponse::class);
    }

    /** {@inheritdoc} */
    public function estimateTransportRequest($request): EstimateTransportRequestResponse
    {
        return $this->_invokeApi($request, 'EstimateTransportRequest', EstimateTransportInputRequest::class, EstimateTransportRequestResponse::class);
    }

    /** {@inheritdoc} */
    public function getBillOfLading($request): GetBillOfLadingResponse
    {
        return $this->_invokeApi($request, 'GetBillOfLading', GetBillOfLadingRequest::class, GetBillOfLadingResponse::class);
    }

    /** {@inheritdoc} */
    public function getInboundGuidanceForASIN($request): GetInboundGuidanceForASINResponse
    {
        return $this->_invokeApi($request, 'GetInboundGuidanceForASIN', GetInboundGuidanceForASINRequest::class, GetInboundGuidanceForASINResponse::class);
    }

    /** {@inheritdoc} */
    public function getInboundGuidanceForSKU($request): GetInboundGuidanceForSKUResponse
    {
        return $this->_invokeApi($request, 'GetInboundGuidanceForSKU', GetInboundGuidanceForSKURequest::class, GetInboundGuidanceForSKUResponse::class);
    }

    /** {@inheritdoc} */
    public function getPackageLabels($request): GetPackageLabelsResponse
    {
        return $this->_invokeApi($request, 'GetPackageLabels', GetPackageLabelsRequest::class, GetPackageLabelsResponse::class);
    }

    /** {@inheritdoc} */
    public function getPalletLabels($request): GetPalletLabelsResponse
    {
        return $this->_invokeApi($request, 'GetPalletLabels', GetPalletLabelsRequest::class, GetPalletLabelsResponse::class);
    }

    /** {@inheritdoc} */
    public function getPreorderInfo($request): GetPreorderInfoResponse
    {
        return $this->_invokeApi($request, 'GetPreorderInfo', GetPreorderInfoRequest::class, GetPreorderInfoResponse::class);
    }

    /** {@inheritdoc} */
    public function getPrepInstructionsForASIN($request): GetPrepInstructionsForASINResponse
    {
        return $this->_invokeApi($request, 'GetPrepInstructionsForASIN', GetPrepInstructionsForASINRequest::class, GetPrepInstructionsForASINResponse::class);
    }

    /** {@inheritdoc} */
    public function getPrepInstructionsForSKU($request): GetPrepInstructionsForSKUResponse
    {
        return $this->_invokeApi($request, 'GetPrepInstructionsForSKU', GetPrepInstructionsForSKURequest::class, GetPrepInstructionsForSKUResponse::class);
    }

    /** {@inheritdoc} */
    public function getServiceStatus($request): GetServiceStatusResponse
    {
        return $this->_invokeApi($request, 'GetServiceStatus', GetServiceStatusRequest::class, GetServiceStatusResponse::class);
    }

    /** {@inheritdoc} */
    public function getTransportContent($request): GetTransportContentResponse
    {
        return $this->_invokeApi($request, 'GetTransportContent', GetTransportContentRequest::class, GetTransportContentResponse::class);
    }

    /** {@inheritdoc} */
    public function getUniquePackageLabels($request): GetUniquePackageLabelsResponse
    {
        return $this->_invokeApi($request, 'GetUniquePackageLabels', GetUniquePackageLabelsRequest::class, GetUniquePackageLabelsResponse::class);
    }

    /** {@inheritdoc} */
    public function listInboundShipmentItems($request): ListInboundShipmentItemsResponse
    {
        return $this->_invokeApi($request, 'ListInboundShipmentItems', ListInboundShipmentItemsRequest::class, ListInboundShipmentItemsResponse::class);
    }

    /** {@inheritdoc} */
    public function listInboundShipmentItemsByNextToken($request): ListInboundShipmentItemsByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListInboundShipmentItemsByNextToken', ListInboundShipmentItemsByNextTokenRequest::class, ListInboundShipmentItemsByNextTokenResponse::class);
    }

    /** {@inheritdoc} */
    public function listInboundShipments($request): ListInboundShipmentsResponse
    {
        return $this->_invokeApi($request, 'ListInboundShipments', ListInboundShipmentsRequest::class, ListInboundShipmentsResponse::class);
    }

    /** {@inheritdoc} */
    public function listInboundShipmentsByNextToken($request): ListInboundShipmentsByNextTokenResponse
    {
        return $this->_invokeApi($request, 'ListInboundShipmentsByNextToken', ListInboundShipmentsByNextTokenRequest::class, ListInboundShipmentsByNextTokenResponse::class);
    }

    /** {@inheritdoc} */
    public function putTransportContent($request): PutTransportContentResponse
    {
        return $this->_invokeApi($request, 'PutTransportContent', PutTransportContentRequest::class, PutTransportContentResponse::class);
    }

    /** {@inheritdoc} */
    public function updateInboundShipment($request): UpdateInboundShipmentResponse
    {
        return $this->_invokeApi($request, 'UpdateInboundShipment', UpdateInboundShipmentRequest::class, UpdateInboundShipmentResponse::class);
    }

    /** {@inheritdoc} */
    public function voidTransportRequest($request): VoidTransportRequestResponse
    {
        return $this->_invokeApi($request, 'VoidTransportRequest', VoidTransportInputRequest::class, VoidTransportRequestResponse::class);
    }
}
