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

use MobiMarket\Amazon\APIClients\Interfaces\IMarketplaceWebService;
use MobiMarket\Amazon\Models\CancelFeedSubmissionsRequest;
use MobiMarket\Amazon\Models\CancelFeedSubmissionsResponse;
use MobiMarket\Amazon\Models\CancelReportRequestsRequest;
use MobiMarket\Amazon\Models\CancelReportRequestsResponse;
use MobiMarket\Amazon\Models\GetFeedSubmissionCountRequest;
use MobiMarket\Amazon\Models\GetFeedSubmissionCountResponse;
use MobiMarket\Amazon\Models\GetFeedSubmissionListByNextTokenRequest;
use MobiMarket\Amazon\Models\GetFeedSubmissionListByNextTokenResponse;
use MobiMarket\Amazon\Models\GetFeedSubmissionListRequest;
use MobiMarket\Amazon\Models\GetFeedSubmissionListResponse;
use MobiMarket\Amazon\Models\GetFeedSubmissionResultRequest;
use MobiMarket\Amazon\Models\GetFeedSubmissionResultResponse;
use MobiMarket\Amazon\Models\GetReportCountRequest;
use MobiMarket\Amazon\Models\GetReportCountResponse;
use MobiMarket\Amazon\Models\GetReportListByNextTokenRequest;
use MobiMarket\Amazon\Models\GetReportListByNextTokenResponse;
use MobiMarket\Amazon\Models\GetReportListRequest;
use MobiMarket\Amazon\Models\GetReportListResponse;
use MobiMarket\Amazon\Models\GetReportRequest;
use MobiMarket\Amazon\Models\GetReportRequestCountRequest;
use MobiMarket\Amazon\Models\GetReportRequestCountResponse;
use MobiMarket\Amazon\Models\GetReportRequestListByNextTokenRequest;
use MobiMarket\Amazon\Models\GetReportRequestListByNextTokenResponse;
use MobiMarket\Amazon\Models\GetReportRequestListRequest;
use MobiMarket\Amazon\Models\GetReportRequestListResponse;
use MobiMarket\Amazon\Models\GetReportResponse;
use MobiMarket\Amazon\Models\GetReportScheduleCountRequest;
use MobiMarket\Amazon\Models\GetReportScheduleCountResponse;
use MobiMarket\Amazon\Models\GetReportScheduleListByNextTokenRequest;
use MobiMarket\Amazon\Models\GetReportScheduleListByNextTokenResponse;
use MobiMarket\Amazon\Models\GetReportScheduleListRequest;
use MobiMarket\Amazon\Models\GetReportScheduleListResponse;
use MobiMarket\Amazon\Models\ManageReportScheduleRequest;
use MobiMarket\Amazon\Models\ManageReportScheduleResponse;
use MobiMarket\Amazon\Models\RequestReportRequest;
use MobiMarket\Amazon\Models\RequestReportResponse;
use MobiMarket\Amazon\Models\SubmitFeedRequest;
use MobiMarket\Amazon\Models\SubmitFeedResponse;
use MobiMarket\Amazon\Models\UpdateReportAcknowledgementsRequest;
use MobiMarket\Amazon\Models\UpdateReportAcknowledgementsResponse;

/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 *
 * MarketplaceWebService_Client is an implementation of MarketplaceWebService
 */
class MarketplaceWebService extends Crappy2009Client implements IMarketplaceWebService
{
    public const SERVICE_VERSION    = '2009-01-01';
    public const MWS_CLIENT_VERSION = '2016-09-21';

    /** @var array */
    protected $_config = [
        'ServiceURL'       => null,
        'UserAgent'        => 'PHP Client Library/2016-09-21 (Language=PHP5)',
        'SignatureVersion' => 2,
        'SignatureMethod'  => 'HmacSHA256',
        'ProxyHost'        => null,
        'ProxyPort'        => -1,
        'MaxErrorRetry'    => 3,
    ];

    private $defaultHeaders = [];

    // Public API ------------------------------------------------------------//

    /** {@inheritdoc} */
    public function getReport($request): GetReportResponse
    {
        if (!$request instanceof GetReportRequest) {
            $request = new GetReportRequest($request);
        }

        $httpResponse = $this->invoke($this->convertGetReport($request), $request->getReport());
        $response     = GetReportResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportScheduleCount($request): GetReportScheduleCountResponse
    {
        if (!$request instanceof GetReportScheduleCountRequest) {
            $request = new GetReportScheduleCountRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportScheduleCount($request));
        $response     = GetReportScheduleCountResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportRequestListByNextToken($request): GetReportRequestListByNextTokenResponse
    {
        if (!$request instanceof GetReportRequestListByNextTokenRequest) {
            $request = new GetReportRequestListByNextTokenRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportRequestListByNextToken($request));
        $response     = GetReportRequestListByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function updateReportAcknowledgements($request): UpdateReportAcknowledgementsResponse
    {
        if (!$request instanceof UpdateReportAcknowledgementsRequest) {
            $request = new UpdateReportAcknowledgementsRequest($request);
        }
        $httpResponse = $this->invoke($this->convertUpdateReportAcknowledgements($request));
        $response     = UpdateReportAcknowledgementsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function submitFeed($request): SubmitFeedResponse
    {
        if (!$request instanceof SubmitFeedRequest) {
            $request = new SubmitFeedRequest($request);
        }
        $httpResponse = $this->invoke($this->convertSubmitFeed($request), $request->getFeedContent());
        $response     = SubmitFeedResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportCount($request): GetReportCountResponse
    {
        if (!$request instanceof GetReportCountRequest) {
            $request = new GetReportCountRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportCount($request));
        $response     = GetReportCountResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getFeedSubmissionListByNextToken($request): GetFeedSubmissionListByNextTokenResponse
    {
        if (!$request instanceof GetFeedSubmissionListByNextTokenRequest) {
            $request = new GetFeedSubmissionListByNextTokenRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetFeedSubmissionListByNextToken($request));
        $response     = GetFeedSubmissionListByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function cancelFeedSubmissions($request): CancelFeedSubmissionsResponse
    {
        if (!$request instanceof CancelFeedSubmissionsRequest) {
            $request = new CancelFeedSubmissionsRequest($request);
        }
        $httpResponse = $this->invoke($this->convertCancelFeedSubmissions($request));
        $response     = CancelFeedSubmissionsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function requestReport($request): RequestReportResponse
    {
        if (!$request instanceof RequestReportRequest) {
            $request = new RequestReportRequest($request);
        }
        $httpResponse = $this->invoke($this->convertRequestReport($request));
        $response     = RequestReportResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getFeedSubmissionCount($request): GetFeedSubmissionCountResponse
    {
        if (!$request instanceof GetFeedSubmissionCountRequest) {
            $request = new GetFeedSubmissionCountRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetFeedSubmissionCount($request));
        $response     = GetFeedSubmissionCountResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function cancelReportRequests($request): CancelReportRequestsResponse
    {
        if (!$request instanceof CancelReportRequestsRequest) {
            $request = new CancelReportRequestsRequest($request);
        }
        $httpResponse = $this->invoke($this->convertCancelReportRequests($request));
        $response     = CancelReportRequestsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportList($request): GetReportListResponse
    {
        if (!$request instanceof GetReportListRequest) {
            $request = new GetReportListRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportList($request));
        $response     = GetReportListResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getFeedSubmissionResult($request): GetFeedSubmissionResultResponse
    {
        if (!$request instanceof GetFeedSubmissionResultRequest) {
            $request = new GetFeedSubmissionResultRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetFeedSubmissionResult($request), $request->getFeedSubmissionResult());
        $response     = GetFeedSubmissionResultResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getFeedSubmissionList($request): GetFeedSubmissionListResponse
    {
        if (!$request instanceof GetFeedSubmissionListRequest) {
            $request = new GetFeedSubmissionListRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetFeedSubmissionList($request));
        $response     = GetFeedSubmissionListResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportRequestList($request): GetReportRequestListResponse
    {
        if (!$request instanceof GetReportRequestListRequest) {
            $request = new GetReportRequestListRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportRequestList($request));
        $response     = GetReportRequestListResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportScheduleListByNextToken($request): GetReportScheduleListByNextTokenResponse
    {
        if (!$request instanceof GetReportScheduleListByNextTokenRequest) {
            $request = new GetReportScheduleListByNextTokenRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportScheduleListByNextToken($request));
        $response     = GetReportScheduleListByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportListByNextToken($request): GetReportListByNextTokenResponse
    {
        if (!$request instanceof GetReportListByNextTokenRequest) {
            $request = new GetReportListByNextTokenRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportListByNextToken($request));
        $response     = GetReportListByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function manageReportSchedule($request): ManageReportScheduleResponse
    {
        if (!$request instanceof ManageReportScheduleRequest) {
            $request = new ManageReportScheduleRequest($request);
        }
        $httpResponse = $this->invoke($this->convertManageReportSchedule($request));
        $response     = ManageReportScheduleResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportRequestCount($request): GetReportRequestCountResponse
    {
        if (!$request instanceof GetReportRequestCountRequest) {
            $request = new GetReportRequestCountRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportRequestCount($request));
        $response     = GetReportRequestCountResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /** {@inheritdoc} */
    public function getReportScheduleList($request): GetReportScheduleListResponse
    {
        if (!$request instanceof GetReportScheduleListRequest) {
            $request = new GetReportScheduleListRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportScheduleList($request));
        $response     = GetReportScheduleListResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * Convert GetReportRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReport($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReport';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportId()) {
            $parameters['ReportId'] =  $request->getReportId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetReportScheduleCountRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportScheduleCount($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportScheduleCount';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetReportRequestListByNextTokenRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportRequestListByNextToken($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportRequestListByNextToken';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert UpdateReportAcknowledgementsRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertUpdateReportAcknowledgements($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'UpdateReportAcknowledgements';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportIdList()) {
            $reportIdList = $request->getReportIdList();
            foreach ($reportIdList->getId() as $idIndex => $id) {
                $parameters['ReportIdList' . '.' . 'Id' . '.' . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetAcknowledged()) {
            $parameters['Acknowledged'] =  $request->getAcknowledged() ? 'true' : 'false';
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert SubmitFeedRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertSubmitFeed($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'SubmitFeed';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetMarketplaceIdList()) {
            $marketplaceIdList = $request->getMarketplaceIdList();
            foreach ($marketplaceIdList->getId() as $idIndex => $id) {
                $parameters['MarketplaceIdList.Id.' . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetFeedType()) {
            $parameters['FeedType'] =  $request->getFeedType();
        }
        if ($request->isSetPurgeAndReplace()) {
            $parameters['PurgeAndReplace'] =  $request->getPurgeAndReplace() ? 'true' : 'false';
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetContentMd5()) {
            $parameters['ContentMD5Value'] = $request->getContentMd5();
        }
        if ($request->isSetFeedOptions()) {
            $parameters['FeedOptions'] = $request->getFeedOptions();
        }

        $headers = [];
        array_push($headers, 'Content-Type: ' . $request->getContentType()->toString());

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $headers];
    }

    /**
     * Convert GetReportCountRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportCount($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportCount';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetAcknowledged()) {
            $parameters['Acknowledged'] =  $request->getAcknowledged() ? 'true' : 'false';
        }
        if ($request->isSetAvailableFromDate()) {
            $parameters['AvailableFromDate'] =
        $this->getFormattedTimestamp($request->getAvailableFromDate());
        }
        if ($request->isSetAvailableToDate()) {
            $parameters['AvailableToDate'] =
        $this->getFormattedTimestamp($request->getAvailableToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetFeedSubmissionListByNextTokenRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetFeedSubmissionListByNextToken($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetFeedSubmissionListByNextToken';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert CancelFeedSubmissionsRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertCancelFeedSubmissions($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'CancelFeedSubmissions';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetFeedSubmissionIdList()) {
            $feedSubmissionIdList = $request->getFeedSubmissionIdList();
            foreach ($feedSubmissionIdList->getId() as $idIndex => $id) {
                $parameters['FeedSubmissionIdList' . '.' . 'Id' . '.' . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetFeedTypeList()) {
            $feedTypeList = $request->getFeedTypeList();
            foreach ($feedTypeList->getType() as $typeIndex => $type) {
                $parameters['FeedTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetSubmittedFromDate()) {
            $parameters['SubmittedFromDate'] =
        $this->getFormattedTimestamp($request->getSubmittedFromDate());
        }
        if ($request->isSetSubmittedToDate()) {
            $parameters['SubmittedToDate'] =
        $this->getFormattedTimestamp($request->getSubmittedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert RequestReportRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertRequestReport($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'RequestReport';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetMarketplaceIdList()) {
            $marketplaceIdList = $request->getMarketplaceIdList();
            foreach ($marketplaceIdList->getId() as $idIndex => $id) {
                $parameters['MarketplaceIdList.Id.' . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetReportType()) {
            $parameters['ReportType'] =  $request->getReportType();
        }
        if ($request->isSetStartDate()) {
            $parameters['StartDate'] =
        $this->getFormattedTimestamp($request->getStartDate());
        }
        if ($request->isSetEndDate()) {
            $parameters['EndDate'] =
        $this->getFormattedTimestamp($request->getEndDate());
        }
        if ($request->isSetReportOptions()) {
            $parameters['ReportOptions'] =  $request->getReportOptions();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetFeedSubmissionCountRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetFeedSubmissionCount($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetFeedSubmissionCount';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetFeedTypeList()) {
            $feedTypeList = $request->getFeedTypeList();
            foreach ($feedTypeList->getType() as $typeIndex => $type) {
                $parameters['FeedTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetFeedProcessingStatusList()) {
            $feedProcessingStatusList = $request->getFeedProcessingStatusList();
            foreach ($feedProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['FeedProcessingStatusList' . '.' . 'Status' . '.' . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetSubmittedFromDate()) {
            $parameters['SubmittedFromDate'] =
        $this->getFormattedTimestamp($request->getSubmittedFromDate());
        }
        if ($request->isSetSubmittedToDate()) {
            $parameters['SubmittedToDate'] =
        $this->getFormattedTimestamp($request->getSubmittedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert CancelReportRequestsRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertCancelReportRequests($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'CancelReportRequests';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportRequestIdList()) {
            $reportRequestIdList = $request->getReportRequestIdList();
            foreach ($reportRequestIdList->getId() as $idIndex => $id) {
                $parameters['ReportRequestIdList' . '.' . 'Id' . '.' . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetReportProcessingStatusList()) {
            $reportProcessingStatusList = $request->getReportProcessingStatusList();
            foreach ($reportProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['ReportProcessingStatusList' . '.' . 'Status' . '.' . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetRequestedFromDate()) {
            $parameters['RequestedFromDate'] =
        $this->getFormattedTimestamp($request->getRequestedFromDate());
        }
        if ($request->isSetRequestedToDate()) {
            $parameters['RequestedToDate'] =
        $this->getFormattedTimestamp($request->getRequestedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetReportListRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportList($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportList';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetAcknowledged()) {
            $parameters['Acknowledged'] =  $request->getAcknowledged() ? 'true' : 'false';
        }
        if ($request->isSetAvailableFromDate()) {
            $parameters['AvailableFromDate'] =
        $this->getFormattedTimestamp($request->getAvailableFromDate());
        }
        if ($request->isSetAvailableToDate()) {
            $parameters['AvailableToDate'] =
        $this->getFormattedTimestamp($request->getAvailableToDate());
        }
        if ($request->isSetReportRequestIdList()) {
            $reportRequestIdList = $request->getReportRequestIdList();
            foreach ($reportRequestIdList->getId() as $idIndex => $id) {
                $parameters['ReportRequestIdList' . '.' . 'Id' . '.' . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetFeedSubmissionResultRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetFeedSubmissionResult($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetFeedSubmissionResult';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetFeedSubmissionId()) {
            $parameters['FeedSubmissionId'] =  $request->getFeedSubmissionId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetFeedSubmissionListRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetFeedSubmissionList($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetFeedSubmissionList';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetFeedSubmissionIdList()) {
            $feedSubmissionIdList = $request->getFeedSubmissionIdList();
            foreach ($feedSubmissionIdList->getId() as $idIndex => $id) {
                $parameters['FeedSubmissionIdList' . '.' . 'Id' . '.' . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }
        if ($request->isSetFeedTypeList()) {
            $feedTypeList = $request->getFeedTypeList();
            foreach ($feedTypeList->getType() as $typeIndex => $type) {
                $parameters['FeedTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetFeedProcessingStatusList()) {
            $feedProcessingStatusList = $request->getFeedProcessingStatusList();
            foreach ($feedProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['FeedProcessingStatusList' . '.' . 'Status' . '.' . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetSubmittedFromDate()) {
            $parameters['SubmittedFromDate'] =
        $this->getFormattedTimestamp($request->getSubmittedFromDate());
        }
        if ($request->isSetSubmittedToDate()) {
            $parameters['SubmittedToDate'] =
        $this->getFormattedTimestamp($request->getSubmittedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetReportRequestListRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportRequestList($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportRequestList';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportRequestIdList()) {
            $reportRequestIdList = $request->getReportRequestIdList();
            foreach ($reportRequestIdList->getId() as $idIndex => $id) {
                $parameters['ReportRequestIdList' . '.' . 'Id' . '.' . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetReportProcessingStatusList()) {
            $reportProcessingStatusList = $request->getReportProcessingStatusList();
            foreach ($reportProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['ReportProcessingStatusList' . '.' . 'Status' . '.' . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }
        if ($request->isSetRequestedFromDate()) {
            $parameters['RequestedFromDate'] =
        $this->getFormattedTimestamp($request->getRequestedFromDate());
        }
        if ($request->isSetRequestedToDate()) {
            $parameters['RequestedToDate'] =
        $this->getFormattedTimestamp($request->getRequestedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetReportScheduleListByNextTokenRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportScheduleListByNextToken($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportScheduleListByNextToken';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetReportListByNextTokenRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportListByNextToken($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportListByNextToken';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert ManageReportScheduleRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertManageReportSchedule($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ManageReportSchedule';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportType()) {
            $parameters['ReportType'] =  $request->getReportType();
        }
        if ($request->isSetSchedule()) {
            $parameters['Schedule'] =  $request->getSchedule();
        }
        if ($request->isSetScheduleDate()) {
            $parameters['ScheduleDate'] =
        $this->getFormattedTimestamp($request->getScheduleDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetReportRequestCountRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportRequestCount($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportRequestCount';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetReportProcessingStatusList()) {
            $reportProcessingStatusList = $request->getReportProcessingStatusList();
            foreach ($reportProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['ReportProcessingStatusList' . '.' . 'Status' . '.' . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetRequestedFromDate()) {
            $parameters['RequestedFromDate'] =
        $this->getFormattedTimestamp($request->getRequestedFromDate());
        }
        if ($request->isSetRequestedToDate()) {
            $parameters['RequestedToDate'] =
        $this->getFormattedTimestamp($request->getRequestedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }

    /**
     * Convert GetReportScheduleListRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function convertGetReportScheduleList($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'GetReportScheduleList';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.' . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return [self::CONVERTED_PARAMETERS_KEY => $parameters, self::CONVERTED_HEADERS_KEY => $this->defaultHeaders];
    }
}
