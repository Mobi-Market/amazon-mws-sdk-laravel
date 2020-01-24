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
        if (!($request instanceof ConfirmPreorderRequest)) {
            $request = new ConfirmPreorderRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ConfirmPreorder';
        $httpResponse         = $this->_invoke($parameters);

        $response = ConfirmPreorderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function confirmTransportRequest($request): ConfirmTransportRequestResponse
    {
        if (!($request instanceof ConfirmTransportInputRequest)) {
            $request = new ConfirmTransportInputRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ConfirmTransportRequest';
        $httpResponse         = $this->_invoke($parameters);

        $response = ConfirmTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function createInboundShipment($request): CreateInboundShipmentResponse
    {
        if (!($request instanceof CreateInboundShipmentRequest)) {
            $request = new CreateInboundShipmentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateInboundShipment';
        $httpResponse         = $this->_invoke($parameters);

        $response = CreateInboundShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function createInboundShipmentPlan($request): CreateInboundShipmentPlanResponse
    {
        if (!($request instanceof CreateInboundShipmentPlanRequest)) {
            $request = new CreateInboundShipmentPlanRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateInboundShipmentPlan';
        $httpResponse         = $this->_invoke($parameters);

        $response = CreateInboundShipmentPlanResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function estimateTransportRequest($request): EstimateTransportRequestResponse
    {
        if (!($request instanceof EstimateTransportInputRequest)) {
            $request = new EstimateTransportInputRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'EstimateTransportRequest';
        $httpResponse         = $this->_invoke($parameters);

        $response = EstimateTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getBillOfLading($request): GetBillOfLadingResponse
    {
        if (!($request instanceof GetBillOfLadingRequest)) {
            $request = new GetBillOfLadingRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetBillOfLading';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetBillOfLadingResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getInboundGuidanceForASIN($request): GetInboundGuidanceForASINResponse
    {
        if (!($request instanceof GetInboundGuidanceForASINRequest)) {
            $request = new GetInboundGuidanceForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetInboundGuidanceForASIN';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetInboundGuidanceForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getInboundGuidanceForSKU($request): GetInboundGuidanceForSKUResponse
    {
        if (!($request instanceof GetInboundGuidanceForSKURequest)) {
            $request = new GetInboundGuidanceForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetInboundGuidanceForSKU';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetInboundGuidanceForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getPackageLabels($request): GetPackageLabelsResponse
    {
        if (!($request instanceof GetPackageLabelsRequest)) {
            $request = new GetPackageLabelsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPackageLabels';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetPackageLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getPalletLabels($request): GetPalletLabelsResponse
    {
        if (!($request instanceof GetPalletLabelsRequest)) {
            $request = new GetPalletLabelsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPalletLabels';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetPalletLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getPreorderInfo($request): GetPreorderInfoResponse
    {
        if (!($request instanceof GetPreorderInfoRequest)) {
            $request = new GetPreorderInfoRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPreorderInfo';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetPreorderInfoResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getPrepInstructionsForASIN($request): GetPrepInstructionsForASINResponse
    {
        if (!($request instanceof GetPrepInstructionsForASINRequest)) {
            $request = new GetPrepInstructionsForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPrepInstructionsForASIN';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetPrepInstructionsForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getPrepInstructionsForSKU($request): GetPrepInstructionsForSKUResponse
    {
        if (!($request instanceof GetPrepInstructionsForSKURequest)) {
            $request = new GetPrepInstructionsForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPrepInstructionsForSKU';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetPrepInstructionsForSKUResponse::fromXML($httpResponse['ResponseBody']);
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
    public function getTransportContent($request): GetTransportContentResponse
    {
        if (!($request instanceof GetTransportContentRequest)) {
            $request = new GetTransportContentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetTransportContent';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetTransportContentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getUniquePackageLabels($request): GetUniquePackageLabelsResponse
    {
        if (!($request instanceof GetUniquePackageLabelsRequest)) {
            $request = new GetUniquePackageLabelsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetUniquePackageLabels';
        $httpResponse         = $this->_invoke($parameters);

        $response = GetUniquePackageLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listInboundShipmentItems($request): ListInboundShipmentItemsResponse
    {
        if (!($request instanceof ListInboundShipmentItemsRequest)) {
            $request = new ListInboundShipmentItemsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentItems';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListInboundShipmentItemsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listInboundShipmentItemsByNextToken($request): ListInboundShipmentItemsByNextTokenResponse
    {
        if (!($request instanceof ListInboundShipmentItemsByNextTokenRequest)) {
            $request = new ListInboundShipmentItemsByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentItemsByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListInboundShipmentItemsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listInboundShipments($request): ListInboundShipmentsResponse
    {
        if (!($request instanceof ListInboundShipmentsRequest)) {
            $request = new ListInboundShipmentsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipments';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListInboundShipmentsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function listInboundShipmentsByNextToken($request): ListInboundShipmentsByNextTokenResponse
    {
        if (!($request instanceof ListInboundShipmentsByNextTokenRequest)) {
            $request = new ListInboundShipmentsByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentsByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        $response = ListInboundShipmentsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function putTransportContent($request): PutTransportContentResponse
    {
        if (!($request instanceof PutTransportContentRequest)) {
            $request = new PutTransportContentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'PutTransportContent';
        $httpResponse         = $this->_invoke($parameters);

        $response = PutTransportContentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function updateInboundShipment($request): UpdateInboundShipmentResponse
    {
        if (!($request instanceof UpdateInboundShipmentRequest)) {
            $request = new UpdateInboundShipmentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateInboundShipment';
        $httpResponse         = $this->_invoke($parameters);

        $response = UpdateInboundShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function voidTransportRequest($request): VoidTransportRequestResponse
    {
        if (!($request instanceof VoidTransportInputRequest)) {
            $request = new VoidTransportInputRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'VoidTransportRequest';
        $httpResponse         = $this->_invoke($parameters);

        $response = VoidTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }
}
