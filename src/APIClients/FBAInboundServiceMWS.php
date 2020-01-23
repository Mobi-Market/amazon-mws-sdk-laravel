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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

/**
 *  @see FBAInboundServiceMWS_Interface
 */
require_once __DIR__ . '/Interface.php';

/**
 * FBAInboundServiceMWS_Client is an implementation of FBAInboundServiceMWS.
 */
class FBAInboundServiceMWS_Client implements FBAInboundServiceMWS_Interface
{
    public const SERVICE_VERSION    = '2010-10-01';
    public const MWS_CLIENT_VERSION = '2016-10-05';

    /** @var string */
    private $_awsAccessKeyId = null;

    /** @var string */
    private $_awsSecretAccessKey = null;

    /** @var array */
    private $_config = ['ServiceURL' => null,
        'UserAgent'                  => 'FBAInboundServiceMWS PHP5 Library',
        'SignatureVersion'           => 2,
        'SignatureMethod'            => 'HmacSHA256',
        'ProxyHost'                  => null,
        'ProxyPort'                  => -1,
        'ProxyUsername'              => null,
        'ProxyPassword'              => null,
        'MaxErrorRetry'              => 3,
        'Headers'                    => [],
    ];

    /**
     * Construct new Client.
     *
     * @param string $awsAccessKeyId     AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array  $config             configuration options.
     *                                   Valid configuration options are:
     *                                   <ul>
     *                                   <li>ServiceURL</li>
     *                                   <li>UserAgent</li>
     *                                   <li>SignatureVersion</li>
     *                                   <li>TimesRetryOnError</li>
     *                                   <li>ProxyHost</li>
     *                                   <li>ProxyPort</li>
     *                                   <li>ProxyUsername<li>
     *                                   <li>ProxyPassword<li>
     *                                   <li>MaxErrorRetry</li>
     *                                   </ul>
     * @param mixed  $applicationName
     * @param mixed  $applicationVersion
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $applicationName, $applicationVersion, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId     = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (null !== $config) {
            $this->_config = array_merge($this->_config, $config);
        }
        $this->setUserAgentHeader($applicationName, $applicationVersion);
    }

    /**
     * Confirm Preorder
     * Given a shipment id. and date as input, this API confirms a shipment as a
     * pre-order.
     * This date must be the same as the NeedByDate (NBD) that is returned in the
     * GetPreorderInfo API. Any other date will result in an appropriate error code.
     * All items in the shipment with a release date on or after the
     * ConfirmedFulfillableDate ( also returned by the GetPreorderInfo  API) would
     * be pre-orderable on the website and would be fulfilled without promise breaks,
     * if the NBD is met.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ConfirmPreorder request or FBAInboundServiceMWS_Model_ConfirmPreorder object itself
     *
     * @see FBAInboundServiceMWS_Model_ConfirmPreorderRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_ConfirmPreorderResponse
     */
    public function confirmPreorder($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_ConfirmPreorderRequest)) {
            require_once __DIR__ . '/Model/ConfirmPreorderRequest.php';
            $request = new FBAInboundServiceMWS_Model_ConfirmPreorderRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ConfirmPreorder';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/ConfirmPreorderResponse.php';
        $response = FBAInboundServiceMWS_Model_ConfirmPreorderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Confirm Transport Request
     * Confirms the estimate returned by the EstimateTransportRequest operation.
     *     Once this operation has been called successfully, the seller agrees to allow Amazon to charge
     *     their account the amount returned in the estimate.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ConfirmTransportRequest request or FBAInboundServiceMWS_Model_ConfirmTransportRequest object itself
     *
     * @see FBAInboundServiceMWS_Model_ConfirmTransportInputRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse
     */
    public function confirmTransportRequest($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_ConfirmTransportInputRequest)) {
            require_once __DIR__ . '/Model/ConfirmTransportInputRequest.php';
            $request = new FBAInboundServiceMWS_Model_ConfirmTransportInputRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ConfirmTransportRequest';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/ConfirmTransportRequestResponse.php';
        $response = FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Create Inbound Shipment
     * Creates an inbound shipment. It may include up to 200 items.
     * The initial status of a shipment will be set to 'Working'.
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     * More items may be added using the Update call.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_CreateInboundShipment request or FBAInboundServiceMWS_Model_CreateInboundShipment object itself
     *
     * @see FBAInboundServiceMWS_Model_CreateInboundShipmentRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_CreateInboundShipmentResponse
     */
    public function createInboundShipment($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_CreateInboundShipmentRequest)) {
            require_once __DIR__ . '/Model/CreateInboundShipmentRequest.php';
            $request = new FBAInboundServiceMWS_Model_CreateInboundShipmentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateInboundShipment';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/CreateInboundShipmentResponse.php';
        $response = FBAInboundServiceMWS_Model_CreateInboundShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Create Inbound Shipment Plan
     * Plans inbound shipments for a set of items.  Registers identifiers if needed,
     * and assigns ShipmentIds for planned shipments.
     * When all the items are not all in the same category (e.g. some sortable, some
     * non-sortable) it may be necessary to create multiple shipments (one for each
     * of the shipment groups returned).
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_CreateInboundShipmentPlan request or FBAInboundServiceMWS_Model_CreateInboundShipmentPlan object itself
     *
     * @see FBAInboundServiceMWS_Model_CreateInboundShipmentPlanRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResponse
     */
    public function createInboundShipmentPlan($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_CreateInboundShipmentPlanRequest)) {
            require_once __DIR__ . '/Model/CreateInboundShipmentPlanRequest.php';
            $request = new FBAInboundServiceMWS_Model_CreateInboundShipmentPlanRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateInboundShipmentPlan';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/CreateInboundShipmentPlanResponse.php';
        $response = FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Estimate Transport Request
     * Initiates the process for requesting an estimated shipping cost based-on the shipment
     *     for which the request is being made, whether or not the carrier shipment is partnered/non-partnered
     *     and the carrier type.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_EstimateTransportRequest request or FBAInboundServiceMWS_Model_EstimateTransportRequest object itself
     *
     * @see FBAInboundServiceMWS_Model_EstimateTransportInputRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_EstimateTransportRequestResponse
     */
    public function estimateTransportRequest($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_EstimateTransportInputRequest)) {
            require_once __DIR__ . '/Model/EstimateTransportInputRequest.php';
            $request = new FBAInboundServiceMWS_Model_EstimateTransportInputRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'EstimateTransportRequest';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/EstimateTransportRequestResponse.php';
        $response = FBAInboundServiceMWS_Model_EstimateTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Bill Of Lading
     * Retrieves the PDF-formatted BOL data for a partnered LTL shipment.
     *     This PDF data will be ZIP'd and then it will be encoded as a Base64 string, and a
     *     MD5 hash is included with the response to validate the BOL data which will be encoded as Base64.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetBillOfLading request or FBAInboundServiceMWS_Model_GetBillOfLading object itself
     *
     * @see FBAInboundServiceMWS_Model_GetBillOfLadingRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetBillOfLadingResponse
     */
    public function getBillOfLading($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetBillOfLadingRequest)) {
            require_once __DIR__ . '/Model/GetBillOfLadingRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetBillOfLadingRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetBillOfLading';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetBillOfLadingResponse.php';
        $response = FBAInboundServiceMWS_Model_GetBillOfLadingResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Inbound Guidance For ASIN
     * Given a list of ASINs and shipToCountryCode, this API returns Inbound
     *      guidance to ASINs in request with optional reason code if applicable.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetInboundGuidanceForASIN request or FBAInboundServiceMWS_Model_GetInboundGuidanceForASIN object itself
     *
     * @see FBAInboundServiceMWS_Model_GetInboundGuidanceForASINRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetInboundGuidanceForASINResponse
     */
    public function getInboundGuidanceForASIN($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetInboundGuidanceForASINRequest)) {
            require_once __DIR__ . '/Model/GetInboundGuidanceForASINRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetInboundGuidanceForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetInboundGuidanceForASIN';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetInboundGuidanceForASINResponse.php';
        $response = FBAInboundServiceMWS_Model_GetInboundGuidanceForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Inbound Guidance For SKU
     * Given a list of SKUs and shipToCountryCode, this API returns Inbound
     *      guidance to SKUs in request with optional reason code if applicable.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetInboundGuidanceForSKU request or FBAInboundServiceMWS_Model_GetInboundGuidanceForSKU object itself
     *
     * @see FBAInboundServiceMWS_Model_GetInboundGuidanceForSKURequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetInboundGuidanceForSKUResponse
     */
    public function getInboundGuidanceForSKU($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetInboundGuidanceForSKURequest)) {
            require_once __DIR__ . '/Model/GetInboundGuidanceForSKURequest.php';
            $request = new FBAInboundServiceMWS_Model_GetInboundGuidanceForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetInboundGuidanceForSKU';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetInboundGuidanceForSKUResponse.php';
        $response = FBAInboundServiceMWS_Model_GetInboundGuidanceForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Package Labels
     * Retrieves the PDF-formatted package label data for the packages of the
     *     shipment. These labels will include relevant data for shipments utilizing
     *     Amazon-partnered carriers. The PDF data will be ZIP'd and then it will be encoded as a Base64 string, and
     *     MD5 hash is included with the response to validate the label data which will be encoded as Base64.
     *     The language of the address and FC prep instructions sections of the labels are
     *     determined by the marketplace in which the request is being made and the marketplace of
     *     the destination FC, respectively.
     *
     *     Only select PageTypes are supported in each marketplace. By marketplace, the
     *     supported types are:
     *       * US non-partnered UPS: PackageLabel_Letter_6
     *       * US partnered-UPS: PackageLabel_Letter_2
     *       * GB, DE, FR, IT, ES: PackageLabel_A4_4, PackageLabel_Plain_Paper
     *       * Partnered EU: PackageLabel_A4_2
     *       * JP/CN: PackageLabel_Plain_Paper
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPackageLabels request or FBAInboundServiceMWS_Model_GetPackageLabels object itself
     *
     * @see FBAInboundServiceMWS_Model_GetPackageLabelsRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetPackageLabelsResponse
     */
    public function getPackageLabels($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetPackageLabelsRequest)) {
            require_once __DIR__ . '/Model/GetPackageLabelsRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetPackageLabelsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPackageLabels';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetPackageLabelsResponse.php';
        $response = FBAInboundServiceMWS_Model_GetPackageLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Pallet Labels
     * Retrieves the PDF-formatted pallet label data for the pallets in an LTL shipment. These labels
     *     include relevant data for shipments being sent to Amazon Fulfillment Centers. The PDF data will be
     *     ZIP'd and then it will be encoded as a Base64 string, and MD5 hash is included with the response to
     *     validate the label data which will be encoded as Base64. The language of the address and FC prep
     *     instructions sections of the labels are determined by the marketplace in which the request is being
     *     made and the marketplace of the destination FC, respectively.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPalletLabels request or FBAInboundServiceMWS_Model_GetPalletLabels object itself
     *
     * @see FBAInboundServiceMWS_Model_GetPalletLabelsRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetPalletLabelsResponse
     */
    public function getPalletLabels($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetPalletLabelsRequest)) {
            require_once __DIR__ . '/Model/GetPalletLabelsRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetPalletLabelsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPalletLabels';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetPalletLabelsResponse.php';
        $response = FBAInboundServiceMWS_Model_GetPalletLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Preorder Info
     * Given a shipment id. as input, based on the release date of the items in the
     * shipment, this API returns the suggested need By Date that the shipment items
     * must reach Amazon FC to successfully fulfill Pre-Orders without any promise
     * breaks.
     * This API also returns the confirmed Fullfillable date. All items in the
     * shipment that have a release date on or after this date would have the
     * pre-order buy box show up on the detail page if this shipment is marked as a
     * pre-orderable.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPreorderInfo request or FBAInboundServiceMWS_Model_GetPreorderInfo object itself
     *
     * @see FBAInboundServiceMWS_Model_GetPreorderInfoRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetPreorderInfoResponse
     */
    public function getPreorderInfo($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetPreorderInfoRequest)) {
            require_once __DIR__ . '/Model/GetPreorderInfoRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetPreorderInfoRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPreorderInfo';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetPreorderInfoResponse.php';
        $response = FBAInboundServiceMWS_Model_GetPreorderInfoResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Prep Instructions For ASIN
     * Returns the required prep that must be performed for a set of items, identified
     * by ASINs, that will be sent to Amazon. It returns guidance for the seller
     * on how to prepare the items to be sent in to Amazon's Fulfillment Centers, and
     * identifies the labeling required for the items, and gives the seller a list
     * of additional required prep that must be performed.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPrepInstructionsForASIN request or FBAInboundServiceMWS_Model_GetPrepInstructionsForASIN object itself
     *
     * @see FBAInboundServiceMWS_Model_GetPrepInstructionsForASINRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetPrepInstructionsForASINResponse
     */
    public function getPrepInstructionsForASIN($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetPrepInstructionsForASINRequest)) {
            require_once __DIR__ . '/Model/GetPrepInstructionsForASINRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetPrepInstructionsForASINRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPrepInstructionsForASIN';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetPrepInstructionsForASINResponse.php';
        $response = FBAInboundServiceMWS_Model_GetPrepInstructionsForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Prep Instructions For SKU
     * Returns the required prep that must be performed for a set of items, identified
     * by SellerSKUs, that will be sent to Amazon. It returns guidance for the seller
     * on how to prepare the items to be sent in to Amazon's Fulfillment Centers, and
     * identifies the labeling required for the items, and gives the seller a list
     * of additional required prep that must be performed.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPrepInstructionsForSKU request or FBAInboundServiceMWS_Model_GetPrepInstructionsForSKU object itself
     *
     * @see FBAInboundServiceMWS_Model_GetPrepInstructionsForSKURequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetPrepInstructionsForSKUResponse
     */
    public function getPrepInstructionsForSKU($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetPrepInstructionsForSKURequest)) {
            require_once __DIR__ . '/Model/GetPrepInstructionsForSKURequest.php';
            $request = new FBAInboundServiceMWS_Model_GetPrepInstructionsForSKURequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPrepInstructionsForSKU';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetPrepInstructionsForSKUResponse.php';
        $response = FBAInboundServiceMWS_Model_GetPrepInstructionsForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Service Status
     * Gets the status of the service.
     *   Status is one of GREEN, RED representing:
     *   GREEN: The service section is operating normally.
     *   RED: The service section disruption.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetServiceStatus request or FBAInboundServiceMWS_Model_GetServiceStatus object itself
     *
     * @see FBAInboundServiceMWS_Model_GetServiceStatusRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetServiceStatusResponse
     */
    public function getServiceStatus($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetServiceStatusRequest)) {
            require_once __DIR__ . '/Model/GetServiceStatusRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetServiceStatusRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetServiceStatusResponse.php';
        $response = FBAInboundServiceMWS_Model_GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Transport Content
     * A read-only operation which sellers use to retrieve the current
     *     details about the transportation of an inbound shipment, including status of the
     *     partnered carrier workflow and status of individual packages when they arrive at our FCs.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetTransportContent request or FBAInboundServiceMWS_Model_GetTransportContent object itself
     *
     * @see FBAInboundServiceMWS_Model_GetTransportContentRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetTransportContentResponse
     */
    public function getTransportContent($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetTransportContentRequest)) {
            require_once __DIR__ . '/Model/GetTransportContentRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetTransportContentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetTransportContent';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetTransportContentResponse.php';
        $response = FBAInboundServiceMWS_Model_GetTransportContentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Get Unique Package Labels
     * Retrieves the PDF-formatted package label data for the packages of the
     *     shipment. These labels will include relevant data for shipments utilizing
     *     Amazon-partnered carriers. Each label contains a unique package identifier that represents the mapping between
     *     physical and virtual packages. This API requires that Carton Information has been provided for all packages in the
     *     shipment. The PDF data will be ZIP'd and then it will be encoded as a Base64 string, and
     *     MD5 hash is included with the response to validate the label data which will be encoded as Base64.
     *     The language of the address and FC prep instructions sections of the labels are
     *     determined by the marketplace in which the request is being made and the marketplace of
     *     the destination FC, respectively.
     *
     *     Only select PageTypes are supported in each marketplace. By marketplace, the
     *     supported types are:
     *       * US non-partnered UPS: PackageLabel_Letter_6
     *       * US partnered-UPS: PackageLabel_Letter_2
     *       * GB, DE, FR, IT, ES: PackageLabel_A4_4, PackageLabel_Plain_Paper
     *       * Partnered EU: PackageLabel_A4_2
     *       * JP/CN: PackageLabel_Plain_Paper
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetUniquePackageLabels request or FBAInboundServiceMWS_Model_GetUniquePackageLabels object itself
     *
     * @see FBAInboundServiceMWS_Model_GetUniquePackageLabelsRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_GetUniquePackageLabelsResponse
     */
    public function getUniquePackageLabels($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_GetUniquePackageLabelsRequest)) {
            require_once __DIR__ . '/Model/GetUniquePackageLabelsRequest.php';
            $request = new FBAInboundServiceMWS_Model_GetUniquePackageLabelsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetUniquePackageLabels';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetUniquePackageLabelsResponse.php';
        $response = FBAInboundServiceMWS_Model_GetUniquePackageLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * List Inbound Shipment Items
     * Gets the first set of inbound shipment items for the given ShipmentId or
     * all inbound shipment items updated between the given date range.
     * A NextToken is also returned to further iterate through the Seller's
     * remaining inbound shipment items. To get the next set of inbound
     * shipment items, you must call ListInboundShipmentItemsByNextToken and
     * pass in the 'NextToken' this call returned. If a NextToken is not
     * returned, it indicates the end-of-data. Use LastUpdatedBefore
     * and LastUpdatedAfter to filter results based on last updated time.
     * Either the ShipmentId or a pair of LastUpdatedBefore and LastUpdatedAfter
     * must be passed in. if ShipmentId is set, the LastUpdatedBefore and
     * LastUpdatedAfter will be ignored.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ListInboundShipmentItems request or FBAInboundServiceMWS_Model_ListInboundShipmentItems object itself
     *
     * @see FBAInboundServiceMWS_Model_ListInboundShipmentItemsRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentItemsResponse
     */
    public function listInboundShipmentItems($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_ListInboundShipmentItemsRequest)) {
            require_once __DIR__ . '/Model/ListInboundShipmentItemsRequest.php';
            $request = new FBAInboundServiceMWS_Model_ListInboundShipmentItemsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentItems';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/ListInboundShipmentItemsResponse.php';
        $response = FBAInboundServiceMWS_Model_ListInboundShipmentItemsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * List Inbound Shipment Items By Next Token
     * Gets the next set of inbound shipment items with the NextToken
     * which can be used to iterate through the remaining inbound shipment
     * items. If a NextToken is not returned, it indicates the end-of-data.
     * You must first call ListInboundShipmentItems to get a 'NextToken'.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextToken request or FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextToken object itself
     *
     * @see FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenResponse
     */
    public function listInboundShipmentItemsByNextToken($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenRequest)) {
            require_once __DIR__ . '/Model/ListInboundShipmentItemsByNextTokenRequest.php';
            $request = new FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentItemsByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/ListInboundShipmentItemsByNextTokenResponse.php';
        $response = FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * List Inbound Shipments
     * Get the first set of inbound shipments created by a Seller according to
     * the specified shipment status or the specified shipment Id. A NextToken
     * is also returned to further iterate through the Seller's remaining
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     * At least one of ShipmentStatusList and ShipmentIdList must be passed in.
     * if both are passed in, then only shipments that match the specified
     * shipment Id and specified shipment status will be returned.
     * the LastUpdatedBefore and LastUpdatedAfter are optional, they are used
     * to filter results based on last update time of the shipment.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ListInboundShipments request or FBAInboundServiceMWS_Model_ListInboundShipments object itself
     *
     * @see FBAInboundServiceMWS_Model_ListInboundShipmentsRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentsResponse
     */
    public function listInboundShipments($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_ListInboundShipmentsRequest)) {
            require_once __DIR__ . '/Model/ListInboundShipmentsRequest.php';
            $request = new FBAInboundServiceMWS_Model_ListInboundShipmentsRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipments';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/ListInboundShipmentsResponse.php';
        $response = FBAInboundServiceMWS_Model_ListInboundShipmentsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * List Inbound Shipments By Next Token
     * Gets the next set of inbound shipments created by a Seller with the
     * NextToken which can be used to iterate through the remaining inbound
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ListInboundShipmentsByNextToken request or FBAInboundServiceMWS_Model_ListInboundShipmentsByNextToken object itself
     *
     * @see FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenResponse
     */
    public function listInboundShipmentsByNextToken($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenRequest)) {
            require_once __DIR__ . '/Model/ListInboundShipmentsByNextTokenRequest.php';
            $request = new FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentsByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/ListInboundShipmentsByNextTokenResponse.php';
        $response = FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Put Transport Content
     * A write operation which sellers use to provide transportation details regarding
     *     how an inbound shipment will arrive at Amazon's Fulfillment Centers.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_PutTransportContent request or FBAInboundServiceMWS_Model_PutTransportContent object itself
     *
     * @see FBAInboundServiceMWS_Model_PutTransportContentRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_PutTransportContentResponse
     */
    public function putTransportContent($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_PutTransportContentRequest)) {
            require_once __DIR__ . '/Model/PutTransportContentRequest.php';
            $request = new FBAInboundServiceMWS_Model_PutTransportContentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'PutTransportContent';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/PutTransportContentResponse.php';
        $response = FBAInboundServiceMWS_Model_PutTransportContentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Update Inbound Shipment
     * Updates an pre-existing inbound shipment specified by the
     * ShipmentId. It may include up to 200 items.
     * If InboundShipmentHeader is set. it replaces the header information
     * for the given shipment.
     * If InboundShipmentItems is set. it adds, replaces and removes
     * the line time to inbound shipment.
     * For non-existing item, it will add the item for new line item;
     * For existing line items, it will replace the QuantityShipped for the item.
     * For QuantityShipped = 0, it indicates the item should be removed from the shipment.
     *
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_UpdateInboundShipment request or FBAInboundServiceMWS_Model_UpdateInboundShipment object itself
     *
     * @see FBAInboundServiceMWS_Model_UpdateInboundShipmentRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse
     */
    public function updateInboundShipment($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_UpdateInboundShipmentRequest)) {
            require_once __DIR__ . '/Model/UpdateInboundShipmentRequest.php';
            $request = new FBAInboundServiceMWS_Model_UpdateInboundShipmentRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateInboundShipment';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/UpdateInboundShipmentResponse.php';
        $response = FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Void Transport Request
     * Voids a previously-confirmed transport request. It only succeeds for requests
     *     made by the VoidDeadline provided in the PartneredEstimate component of the
     *     response of the GetTransportContent operation for a shipment. Currently this
     *     deadline is 24 hours after confirming a transport request for a partnered small parcel
     *     request and 1 hour after confirming a transport request for a partnered LTL/TL
     *     request, though this is subject to change at any time without notice.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_VoidTransportRequest request or FBAInboundServiceMWS_Model_VoidTransportRequest object itself
     *
     * @see FBAInboundServiceMWS_Model_VoidTransportInputRequest
     *
     * @throws FBAInboundServiceMWS_Exception
     *
     * @return FBAInboundServiceMWS_Model_VoidTransportRequestResponse
     */
    public function voidTransportRequest($request)
    {
        if (!($request instanceof FBAInboundServiceMWS_Model_VoidTransportInputRequest)) {
            require_once __DIR__ . '/Model/VoidTransportInputRequest.php';
            $request = new FBAInboundServiceMWS_Model_VoidTransportInputRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'VoidTransportRequest';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/VoidTransportRequestResponse.php';
        $response = FBAInboundServiceMWS_Model_VoidTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Set curl options relating to SSL. Protected to allow overriding.
     *
     * @param $ch curl handle
     */
    protected function setSSLCurlOptions($ch): void
    {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    }

    /**
     * Convert ConfirmPreorderRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertConfirmPreorder($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ConfirmPreorder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetNeedByDate()) {
            $parameters['NeedByDate'] =  $request->getNeedByDate();
        }

        return $parameters;
    }

    /**
     * Convert ConfirmTransportInputRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertConfirmTransportRequest($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ConfirmTransportRequest';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    /**
     * Convert CreateInboundShipmentRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertCreateInboundShipment($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'CreateInboundShipment';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetInboundShipmentHeader()) {
            $InboundShipmentHeaderCreateInboundShipmentRequest = $request->getInboundShipmentHeader();
            foreach ($InboundShipmentHeaderCreateInboundShipmentRequest->getShipmentName() as $ShipmentNameInboundShipmentHeaderIndex => $ShipmentNameInboundShipmentHeader) {
                $parameters['InboundShipmentHeader' . '.' . 'ShipmentName' . '.' . ($ShipmentNameInboundShipmentHeaderIndex + 1)] =  $ShipmentNameInboundShipmentHeader;
            }
        }
        if ($request->isSetInboundShipmentItems()) {
            $InboundShipmentItemsCreateInboundShipmentRequest = $request->getInboundShipmentItems();
            foreach ($InboundShipmentItemsCreateInboundShipmentRequest->getmember() as $memberInboundShipmentItemsIndex => $memberInboundShipmentItems) {
                $parameters['InboundShipmentItems' . '.' . 'member' . '.' . ($memberInboundShipmentItemsIndex + 1)] =  $memberInboundShipmentItems;
            }
        }

        return $parameters;
    }

    /**
     * Convert CreateInboundShipmentPlanRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertCreateInboundShipmentPlan($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'CreateInboundShipmentPlan';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipFromAddress()) {
            $ShipFromAddressCreateInboundShipmentPlanRequest = $request->getShipFromAddress();
            foreach ($ShipFromAddressCreateInboundShipmentPlanRequest->getName() as $NameShipFromAddressIndex => $NameShipFromAddress) {
                $parameters['ShipFromAddress' . '.' . 'Name' . '.' . ($NameShipFromAddressIndex + 1)] =  $NameShipFromAddress;
            }
        }
        if ($request->isSetLabelPrepPreference()) {
            $parameters['LabelPrepPreference'] =  $request->getLabelPrepPreference();
        }
        if ($request->isSetShipToCountryCode()) {
            $parameters['ShipToCountryCode'] =  $request->getShipToCountryCode();
        }
        if ($request->isSetShipToCountrySubdivisionCode()) {
            $parameters['ShipToCountrySubdivisionCode'] =  $request->getShipToCountrySubdivisionCode();
        }
        if ($request->isSetInboundShipmentPlanRequestItems()) {
            $InboundShipmentPlanRequestItemsCreateInboundShipmentPlanRequest = $request->getInboundShipmentPlanRequestItems();
            foreach ($InboundShipmentPlanRequestItemsCreateInboundShipmentPlanRequest->getmember() as $memberInboundShipmentPlanRequestItemsIndex => $memberInboundShipmentPlanRequestItems) {
                $parameters['InboundShipmentPlanRequestItems' . '.' . 'member' . '.' . ($memberInboundShipmentPlanRequestItemsIndex + 1)] =  $memberInboundShipmentPlanRequestItems;
            }
        }

        return $parameters;
    }

    /**
     * Convert EstimateTransportInputRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertEstimateTransportRequest($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'EstimateTransportRequest';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    /**
     * Convert GetBillOfLadingRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetBillOfLading($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetBillOfLading';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    /**
     * Convert GetInboundGuidanceForASINRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetInboundGuidanceForASIN($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetInboundGuidanceForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetASINList()) {
            $ASINListGetInboundGuidanceForASINRequest = $request->getASINList();
            foreach ($ASINListGetInboundGuidanceForASINRequest->getId() as $IdASINListIndex => $IdASINList) {
                $parameters['ASINList' . '.' . 'Id' . '.' . ($IdASINListIndex + 1)] =  $IdASINList;
            }
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }

        return $parameters;
    }

    /**
     * Convert GetInboundGuidanceForSKURequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetInboundGuidanceForSKU($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetInboundGuidanceForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetInboundGuidanceForSKURequest = $request->getSellerSKUList();
            foreach ($SellerSKUListGetInboundGuidanceForSKURequest->getId() as $IdSellerSKUListIndex => $IdSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'Id' . '.' . ($IdSellerSKUListIndex + 1)] =  $IdSellerSKUList;
            }
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }

        return $parameters;
    }

    /**
     * Convert GetPackageLabelsRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetPackageLabels($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetPackageLabels';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetPageType()) {
            $parameters['PageType'] =  $request->getPageType();
        }
        if ($request->isSetNumberOfPackages()) {
            $parameters['NumberOfPackages'] =  $request->getNumberOfPackages();
        }

        return $parameters;
    }

    /**
     * Convert GetPalletLabelsRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetPalletLabels($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetPalletLabels';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetPageType()) {
            $parameters['PageType'] =  $request->getPageType();
        }
        if ($request->isSetNumberOfPallets()) {
            $parameters['NumberOfPallets'] =  $request->getNumberOfPallets();
        }

        return $parameters;
    }

    /**
     * Convert GetPreorderInfoRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetPreorderInfo($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetPreorderInfo';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    /**
     * Convert GetPrepInstructionsForASINRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetPrepInstructionsForASIN($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetPrepInstructionsForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetAsinList()) {
            $AsinListGetPrepInstructionsForASINRequest = $request->getAsinList();
            foreach ($AsinListGetPrepInstructionsForASINRequest->getId() as $IdAsinListIndex => $IdAsinList) {
                $parameters['AsinList' . '.' . 'Id' . '.' . ($IdAsinListIndex + 1)] =  $IdAsinList;
            }
        }
        if ($request->isSetShipToCountryCode()) {
            $parameters['ShipToCountryCode'] =  $request->getShipToCountryCode();
        }

        return $parameters;
    }

    /**
     * Convert GetPrepInstructionsForSKURequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetPrepInstructionsForSKU($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetPrepInstructionsForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetPrepInstructionsForSKURequest = $request->getSellerSKUList();
            foreach ($SellerSKUListGetPrepInstructionsForSKURequest->getId() as $IdSellerSKUListIndex => $IdSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'Id' . '.' . ($IdSellerSKUListIndex + 1)] =  $IdSellerSKUList;
            }
        }
        if ($request->isSetShipToCountryCode()) {
            $parameters['ShipToCountryCode'] =  $request->getShipToCountryCode();
        }

        return $parameters;
    }

    /**
     * Convert GetServiceStatusRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetServiceStatus($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetServiceStatus';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }

        return $parameters;
    }

    /**
     * Convert GetTransportContentRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetTransportContent($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetTransportContent';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    /**
     * Convert GetUniquePackageLabelsRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertGetUniquePackageLabels($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetUniquePackageLabels';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetPageType()) {
            $parameters['PageType'] =  $request->getPageType();
        }
        if ($request->isSetPackageLabelsToPrint()) {
            $PackageLabelsToPrintGetUniquePackageLabelsRequest = $request->getPackageLabelsToPrint();
            foreach ($PackageLabelsToPrintGetUniquePackageLabelsRequest->getmember() as $memberPackageLabelsToPrintIndex => $memberPackageLabelsToPrint) {
                $parameters['PackageLabelsToPrint' . '.' . 'member' . '.' . ($memberPackageLabelsToPrintIndex + 1)] =  $memberPackageLabelsToPrint;
            }
        }

        return $parameters;
    }

    /**
     * Convert ListInboundShipmentItemsRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertListInboundShipmentItems($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ListInboundShipmentItems';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetLastUpdatedBefore()) {
            $parameters['LastUpdatedBefore'] =  $request->getLastUpdatedBefore();
        }
        if ($request->isSetLastUpdatedAfter()) {
            $parameters['LastUpdatedAfter'] =  $request->getLastUpdatedAfter();
        }

        return $parameters;
    }

    /**
     * Convert ListInboundShipmentItemsByNextTokenRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertListInboundShipmentItemsByNextToken($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ListInboundShipmentItemsByNextToken';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }

    /**
     * Convert ListInboundShipmentsRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertListInboundShipments($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ListInboundShipments';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentStatusList()) {
            $ShipmentStatusListListInboundShipmentsRequest = $request->getShipmentStatusList();
            foreach ($ShipmentStatusListListInboundShipmentsRequest->getmember() as $memberShipmentStatusListIndex => $memberShipmentStatusList) {
                $parameters['ShipmentStatusList' . '.' . 'member' . '.' . ($memberShipmentStatusListIndex + 1)] =  $memberShipmentStatusList;
            }
        }
        if ($request->isSetShipmentIdList()) {
            $ShipmentIdListListInboundShipmentsRequest = $request->getShipmentIdList();
            foreach ($ShipmentIdListListInboundShipmentsRequest->getmember() as $memberShipmentIdListIndex => $memberShipmentIdList) {
                $parameters['ShipmentIdList' . '.' . 'member' . '.' . ($memberShipmentIdListIndex + 1)] =  $memberShipmentIdList;
            }
        }
        if ($request->isSetLastUpdatedBefore()) {
            $parameters['LastUpdatedBefore'] =  $request->getLastUpdatedBefore();
        }
        if ($request->isSetLastUpdatedAfter()) {
            $parameters['LastUpdatedAfter'] =  $request->getLastUpdatedAfter();
        }

        return $parameters;
    }

    /**
     * Convert ListInboundShipmentsByNextTokenRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertListInboundShipmentsByNextToken($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ListInboundShipmentsByNextToken';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }

    /**
     * Convert PutTransportContentRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertPutTransportContent($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'PutTransportContent';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetIsPartnered()) {
            $parameters['IsPartnered'] =  $request->getIsPartnered() ? 'true' : 'false';
        }
        if ($request->isSetShipmentType()) {
            $parameters['ShipmentType'] =  $request->getShipmentType();
        }
        if ($request->isSetTransportDetails()) {
            $TransportDetailsPutTransportContentRequest = $request->getTransportDetails();
            foreach ($TransportDetailsPutTransportContentRequest->getPartneredSmallParcelData() as $PartneredSmallParcelDataTransportDetailsIndex => $PartneredSmallParcelDataTransportDetails) {
                $parameters['TransportDetails' . '.' . 'PartneredSmallParcelData' . '.' . ($PartneredSmallParcelDataTransportDetailsIndex + 1)] =  $PartneredSmallParcelDataTransportDetails;
            }
        }

        return $parameters;
    }

    /**
     * Convert UpdateInboundShipmentRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertUpdateInboundShipment($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'UpdateInboundShipment';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetInboundShipmentHeader()) {
            $InboundShipmentHeaderUpdateInboundShipmentRequest = $request->getInboundShipmentHeader();
            foreach ($InboundShipmentHeaderUpdateInboundShipmentRequest->getShipmentName() as $ShipmentNameInboundShipmentHeaderIndex => $ShipmentNameInboundShipmentHeader) {
                $parameters['InboundShipmentHeader' . '.' . 'ShipmentName' . '.' . ($ShipmentNameInboundShipmentHeaderIndex + 1)] =  $ShipmentNameInboundShipmentHeader;
            }
        }
        if ($request->isSetInboundShipmentItems()) {
            $InboundShipmentItemsUpdateInboundShipmentRequest = $request->getInboundShipmentItems();
            foreach ($InboundShipmentItemsUpdateInboundShipmentRequest->getmember() as $memberInboundShipmentItemsIndex => $memberInboundShipmentItems) {
                $parameters['InboundShipmentItems' . '.' . 'member' . '.' . ($memberInboundShipmentItemsIndex + 1)] =  $memberInboundShipmentItems;
            }
        }

        return $parameters;
    }

    /**
     * Convert VoidTransportInputRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertVoidTransportRequest($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'VoidTransportRequest';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    private function setUserAgentHeader(
        $applicationName,
        $applicationVersion,
        $attributes = null
    ): void {
        if (null === $attributes) {
            $attributes = [];
        }

        $this->_config['UserAgent'] =
            $this->constructUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }

    private function constructUserAgentHeader($applicationName, $applicationVersion, $attributes = null)
    {
        if (null === $applicationName || '' === $applicationName) {
            throw new InvalidArgumentException('$applicationName cannot be null');
        }

        if (null === $applicationVersion || '' === $applicationVersion) {
            throw new InvalidArgumentException('$applicationVersion cannot be null');
        }

        $userAgent =
            $this->quoteApplicationName($applicationName)
            . '/'
            . $this->quoteApplicationVersion($applicationVersion);

        $userAgent .= ' (';
        $userAgent .= 'Language=PHP/' . PHP_VERSION;
        $userAgent .= '; ';
        $userAgent .= 'Platform=' . php_uname('s') . '/' . php_uname('m') . '/' . php_uname('r');
        $userAgent .= '; ';
        $userAgent .= 'MWSClientVersion=' . self::MWS_CLIENT_VERSION;

        foreach ($attributes as $key => $value) {
            if (empty($value)) {
                throw new InvalidArgumentException("Value for ${key} cannot be null or empty.");
            }

            $userAgent .= '; '
                . $this->quoteAttributeName($key)
                . '='
                . $this->quoteAttributeValue($value);
        }

        $userAgent .= ')';

        return $userAgent;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' character.
     *
     * @param $s
     *
     * @return string
     */
    private function collapseWhitespace($s)
    {
        return preg_replace('/ {2,}|\s/', ' ', $s);
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '/' characters from a string.
     *
     * @param $s
     *
     * @return string
     */
    private function quoteApplicationName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);

        return preg_replace('/\//', '\\/', $quotedString);
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '(' characters from a string.
     *
     * @param $s
     *
     * @return string
     */
    private function quoteApplicationVersion($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);

        return preg_replace('/\\(/', '\\(', $quotedString);
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '=' characters from a string.
     *
     * @param $s
     *
     * @return unknown_type
     */
    private function quoteAttributeName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);

        return preg_replace('/\\=/', '\\=', $quotedString);
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape ';', '\',
     * and ')' characters from a string.
     *
     * @param $s
     *
     * @return unknown_type
     */
    private function quoteAttributeValue($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\;/', '\\;', $quotedString);

        return preg_replace('/\\)/', '\\)', $quotedString);
    }

    // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response.
     */
    private function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                require_once __DIR__ . '/Exception.php';

                throw new FBAInboundServiceMWS_Exception(['ErrorCode' => 'InvalidServiceURL', 'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."]);
            }
            $parameters = $this->_addRequiredParameters($parameters);
            $retries    = 0;
            for (;;) {
                $response = $this->_httpPost($parameters);
                $status   = $response['Status'];
                if (200 == $status) {
                    return ['ResponseBody'       => $response['ResponseBody'],
                        'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata'], ];
                }
                if (500 == $status && $this->_pauseOnRetry(++$retries)) {
                    continue;
                }

                throw $this->_reportAnyErrors($response['ResponseBody'], $status, $response['ResponseHeaderMetadata']);
            }
        } catch (FBAInboundServiceMWS_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            require_once __DIR__ . '/Exception.php';

            throw new FBAInboundServiceMWS_Exception(['Exception' => $t, 'Message' => $t->getMessage()]);
        }
    }

    /**
     * Look for additional error strings in the response and return formatted exception.
     *
     * @param mixed $responseBody
     * @param mixed $status
     * @param mixed $responseHeaderMetadata
     */
    private function _reportAnyErrors($responseBody, $status, $responseHeaderMetadata, Exception $e =  null)
    {
        $exProps                           = [];
        $exProps['StatusCode']             = $status;
        $exProps['ResponseHeaderMetadata'] = $responseHeaderMetadata;

        libxml_use_internal_errors(true);  // Silence XML parsing errors
        $xmlBody = simplexml_load_string($responseBody);

        if (false !== $xmlBody) {  // Check XML loaded without errors
            $exProps['XML']       = $responseBody;
            $exProps['ErrorCode'] = $xmlBody->Error->Code;
            $exProps['Message']   = $xmlBody->Error->Message;
            $exProps['ErrorType'] = !empty($xmlBody->Error->Type) ? $xmlBody->Error->Type : 'Unknown';
            $exProps['RequestId'] = !empty($xmlBody->RequestID) ? $xmlBody->RequestID : $xmlBody->RequestId; // 'd' in RequestId is sometimes capitalized
        } else { // We got bad XML in response, just throw a generic exception
            $exProps['Message'] = 'Internal Error';
        }

        require_once __DIR__ . '/Exception.php';

        return new FBAInboundServiceMWS_Exception($exProps);
    }

    /**
     * Perform HTTP post with exponential retries on error 500 and 503.
     */
    private function _httpPost(array $parameters)
    {
        $config = $this->_config;
        $query  = $this->_getParametersAsString($parameters);
        $url    = parse_url($config['ServiceURL']);
        $uri    = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset($uri)) {
            $uri = '/';
        }

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'https://';
                $port   = $url['port'] ?? 443;

                break;
            default:
                $scheme = 'http://';
                $port   = $url['port'] ?? 80;
        }

        $allHeaders                 = $config['Headers'];
        $allHeaders['Content-Type'] = 'application/x-www-form-urlencoded; charset=utf-8'; // We need to make sure to set utf-8 encoding here
        $allHeaders['Expect']       = null; // Don't expect 100 Continue
        $allHeadersStr              = [];
        foreach ($allHeaders as $name => $val) {
            $str = $name . ': ';
            if (isset($val)) {
                $str = $str . $val;
            }
            $allHeadersStr[] = $str;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $scheme . $url['host'] . $uri);
        curl_setopt($ch, CURLOPT_PORT, $port);
        $this->setSSLCurlOptions($ch);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->_config['UserAgent']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $allHeadersStr);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (null != $config['ProxyHost'] && -1 != $config['ProxyPort']) {
            curl_setopt($ch, CURLOPT_PROXY, $config['ProxyHost'] . ':' . $config['ProxyPort']);
        }
        if (null != $config['ProxyUsername'] && null != $config['ProxyPassword']) {
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $config['ProxyUsername'] . ':' . $config['ProxyPassword']);
        }

        $response = '';
        $response = curl_exec($ch);

        if (false === $response) {
            require_once __DIR__ . '/Exception.php';
            $exProps['Message']   = curl_error($ch);
            $exProps['ErrorType'] = 'HTTP';
            curl_close($ch);

            throw new FBAInboundServiceMWS_Exception($exProps);
        }

        curl_close($ch);

        return $this->_extractHeadersAndBody($response);
    }

    /**
     * This method will attempt to extract the headers and body of our response.
     * We need to split the raw response string by 2 'CRLF's.  2 'CRLF's should indicate the separation of the response header
     * from the response body.  However in our case we have some circumstances (certain client proxies) that result in
     * multiple responses concatenated.  We could encounter a response like.
     *
     * HTTP/1.1 100 Continue
     *
     * HTTP/1.1 200 OK
     * Date: Tue, 01 Apr 2014 13:02:51 GMT
     * Content-Type: text/html; charset=iso-8859-1
     * Content-Length: 12605
     *
     * ... body ..
     *
     * This method will throw away extra response status lines and attempt to find the first full response headers and body
     *
     * return [status, body, ResponseHeaderMetadata]
     *
     * @param mixed $response
     */
    private function _extractHeadersAndBody($response)
    {
        //First split by 2 'CRLF'
        $responseComponents = preg_split("/(?:\r?\n){2}/", $response, 2);
        $body               = null;
        for ($count = 0;
                $count < count($responseComponents) && null == $body;
                ++$count) {
            $headers        = $responseComponents[$count];
            $responseStatus = $this->_extractHttpStatusCode($headers);

            if (null != $responseStatus &&
                    $this->_httpHeadersHaveContent($headers)) {
                $responseHeaderMetadata = $this->_extractResponseHeaderMetadata($headers);
                //The body will be the next item in the responseComponents array
                $body = $responseComponents[++$count];
            }
        }

        //If the body is null here then we were unable to parse the response and will throw an exception
        if (null == $body) {
            require_once __DIR__ . '/Exception.php';
            $exProps['Message']   = 'Failed to parse valid HTTP response (' . $response . ')';
            $exProps['ErrorType'] = 'HTTP';

            throw new FBAInboundServiceMWS_Exception($exProps);
        }

        return [
            'Status'                 => $responseStatus,
            'ResponseBody'           => $body,
            'ResponseHeaderMetadata' => $responseHeaderMetadata, ];
    }

    /**
     * parse the status line of a header string for the proper format and
     * return the status code.
     *
     * Example: HTTP/1.1 200 OK
     * ...
     * returns String statusCode or null if the status line can't be parsed
     *
     * @param mixed $headers
     */
    private function _extractHttpStatusCode($headers)
    {
        $statusCode = null;
        if (1 === preg_match("/(\\S+) +(\\d+) +([^\n\r]+)(?:\r?\n|\r)/", $headers, $matches)) {
            //The matches array [entireMatchString, protocol, statusCode, the rest]
            $statusCode = $matches[2];
        }

        return $statusCode;
    }

    /**
     * Tries to determine some valid headers indicating this response
     * has content.  In this case
     * return true if there is a valid "Content-Length" or "Transfer-Encoding" header.
     *
     * @param mixed $headers
     */
    private function _httpHeadersHaveContent($headers)
    {
        return 1 === preg_match('/[cC]ontent-[lL]ength: +(?:\\d+)(?:\\r?\\n|\\r|$)/', $headers) ||
                1 === preg_match("/Transfer-Encoding: +(?!identity[\r\n;= ])(?:[^\r\n]+)(?:\r?\n|\r|$)/i", $headers);
    }

    /**
     *  extract a ResponseHeaderMetadata object from the raw headers.
     *
     * @param mixed $rawHeaders
     */
    private function _extractResponseHeaderMetadata($rawHeaders)
    {
        $inputHeaders                      = preg_split("/\r\n|\n|\r/", $rawHeaders);
        $headers                           = [];
        $headers['x-mws-request-id']       = null;
        $headers['x-mws-response-context'] = null;
        $headers['x-mws-timestamp']        = null;
        $headers['x-mws-quota-max']        = null;
        $headers['x-mws-quota-remaining']  = null;
        $headers['x-mws-quota-resetsOn']   = null;

        foreach ($inputHeaders as $currentHeader) {
            $keyValue = explode(': ', $currentHeader);
            if (isset($keyValue[1])) {
                [$key, $value] = $keyValue;
                if (isset($headers[$key]) && null !== $headers[$key]) {
                    $headers[$key] = $headers[$key] . ',' . $value;
                } else {
                    $headers[$key] = $value;
                }
            }
        }

        require_once __DIR__ . '/Model/ResponseHeaderMetadata.php';

        return new FBAInboundServiceMWS_Model_ResponseHeaderMetadata(
            $headers['x-mws-request-id'],
            $headers['x-mws-response-context'],
            $headers['x-mws-timestamp'],
            $headers['x-mws-quota-max'],
            $headers['x-mws-quota-remaining'],
            $headers['x-mws-quota-resetsOn']
        );
    }

    /**
     * Exponential sleep on failed request.
     *
     * @param retries current retry
     * @param mixed $retries
     */
    private function _pauseOnRetry($retries)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (4 ** $retries * 100000);
            usleep($delay);

            return true;
        }

        return false;
    }

    /**
     * Add authentication related and version parameters.
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId']   = $this->_awsAccessKeyId;
        $parameters['Timestamp']        = $this->_getFormattedTimestamp();
        $parameters['Version']          = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string.
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = [];
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }

        return implode('&', $queryParameters);
    }

    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:.
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     * @param mixed $key
     */
    private function _signParameters(array $parameters, $key)
    {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm        = 'HmacSHA1';
        $stringToSign     = null;
        if (2 == $signatureVersion) {
            $algorithm                     = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign                  = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new Exception('Invalid Signature Version specified');
        }

        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 2.
     *
     * @param array $parameters request parameters
     *
     * @return string to Sign
     */
    private function _calculateStringToSignV2(array $parameters)
    {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset($uri)) {
            $uri = '/';
        }
        $uriencoded = implode('/', array_map([$this, '_urlencode'], explode('/', $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);

        return $data;
    }

    private function _urlencode($value)
    {
        return str_replace('%7E', '~', rawurlencode($value));
    }

    /**
     * Computes RFC 2104-compliant HMAC signature.
     *
     * @param mixed $data
     * @param mixed $key
     * @param mixed $algorithm
     */
    private function _sign($data, $key, $algorithm)
    {
        if ('HmacSHA1' === $algorithm) {
            $hash = 'sha1';
        } elseif ('HmacSHA256' === $algorithm) {
            $hash = 'sha256';
        } else {
            throw new Exception('Non-supported signing method specified');
        }

        return base64_encode(
            hash_hmac($hash, $data, $key, true)
        );
    }

    /**
     * Formats date as ISO 8601 timestamp.
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }

    /**
     * Formats date as ISO 8601 timestamp.
     *
     * @param mixed $dateTime
     */
    private function getFormattedTimestamp($dateTime)
    {
        return $dateTime->format(DATE_ISO8601);
    }
}
