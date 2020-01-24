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

use MobiMarket\Amazon\AmazonApiException;
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

interface IMarketplaceWebService
{
    /**
     * Get Report
     * The GetReport operation returns the contents of a report. Reports can potentially be
     * very large (>100MB) which is why we only return one report at a time, and in a
     * streaming fashion.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReport.html
     *
     * @param GetReportRequest|array $request array of parameters for GetReportRequest request
     *                                        or GetReportRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReport($request): GetReportResponse;

    /**
     * Get Report Schedule Count
     * returns the number of report schedules.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html
     *
     * @param GetReportScheduleCountRequest|array $request array of parameters for GetReportScheduleCountRequest request
     *                                                     or GetReportScheduleCountRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportScheduleCount($request): GetReportScheduleCountResponse;

    /**
     * Get Report Request List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html
     *
     * @param GetReportRequestListByNextTokenRequest|array $request array of parameters for GetReportRequestListByNextTokenRequest request
     *                                                              or GetReportRequestListByNextTokenRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportRequestListByNextToken($request): GetReportRequestListByNextTokenResponse;

    /**
     * Update Report Acknowledgements
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html
     *
     * @param UpdateReportAcknowledgementsRequest|array $request array of parameters for UpdateReportAcknowledgementsRequest request
     *                                                           or UpdateReportAcknowledgementsRequest object itself
     *
     * @throws AmazonApiException
     */
    public function updateReportAcknowledgements($request): UpdateReportAcknowledgementsResponse;

    /**
     * Submit Feed
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html
     *
     * @param SubmitFeedRequest|array $request array of parameters for SubmitFeedRequest request
     *                                         or SubmitFeedRequest object itself
     *
     * @throws AmazonApiException
     */
    public function submitFeed($request): SubmitFeedResponse;

    /**
     * Get Report Count
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html
     *
     * @param GetReportCountRequest|array $request array of parameters for GetReportCountRequest request
     *                                             or GetReportCountRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportCount($request): GetReportCountResponse;

    /**
     * Get Feed Submission List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html
     *
     * @param GetFeedSubmissionListByNextTokenRequest|array $request array of parameters for GetFeedSubmissionListByNextTokenRequest request
     *                                                               or GetFeedSubmissionListByNextTokenRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getFeedSubmissionListByNextToken($request): GetFeedSubmissionListByNextTokenResponse;

    /**
     * Cancel Feed Submissions
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing.
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html
     *
     * @param CancelFeedSubmissionsRequest|array $request array of parameters for CancelFeedSubmissionsRequest request
     *                                                    or CancelFeedSubmissionsRequest object itself
     *
     * @throws AmazonApiException
     */
    public function cancelFeedSubmissions($request): CancelFeedSubmissionsResponse;

    /**
     * Request Report
     * requests the generation of a report.
     *
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html
     *
     * @param RequestReportRequest|array $request array of parameters for RequestReportRequest request
     *                                            or RequestReportRequest object itself
     *
     * @throws AmazonApiException
     */
    public function requestReport($request): RequestReportResponse;

    /**
     * Get Feed Submission Count
     * returns the number of feeds matching all of the specified criteria.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html
     *
     * @param GetFeedSubmissionCountRequest|array $request array of parameters for GetFeedSubmissionCountRequest request
     *                                                     or GetFeedSubmissionCountRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getFeedSubmissionCount($request): GetFeedSubmissionCountResponse;

    /**
     * Cancel Report Requests
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days.
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html
     *
     * @param CancelReportRequestsRequest|array $request array of parameters for CancelReportRequestsRequest request
     *                                                   or CancelReportRequestsRequest object itself
     *
     * @throws AmazonApiException
     */
    public function cancelReportRequests($request): CancelReportRequestsResponse;

    /**
     * Get Report List
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html
     *
     * @param GetReportListRequest|array $request array of parameters for GetReportListRequest request
     *                                            or GetReportListRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportList($request): GetReportListResponse;

    /**
     * Get Feed Submission Result
     * retrieves the feed processing report.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html
     *
     * @param GetFeedSubmissionResultRequest|array $request array of parameters for GetFeedSubmissionResultRequest request
     *                                                      or GetFeedSubmissionResultRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getFeedSubmissionResult($request): GetFeedSubmissionResultResponse;

    /**
     * Get Feed Submission List
     * returns a list of feed submission identifiers and their associated metadata.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html
     *
     * @param GetFeedSubmissionListRequest|array $request array of parameters for GetFeedSubmissionListRequest request
     *                                                    or GetFeedSubmissionListRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getFeedSubmissionList($request): GetFeedSubmissionListResponse;

    /**
     * Get Report Request List
     * returns a list of report requests ids and their associated metadata.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html
     *
     * @param GetReportRequestListRequest|array $request array of parameters for GetReportRequestListRequest request
     *                                                   or GetReportRequestListRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportRequestList($request): GetReportRequestListResponse;

    /**
     * Get Report Schedule List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html
     *
     * @param GetReportScheduleListByNextTokenRequest|array $request array of parameters for GetReportScheduleListByNextTokenRequest request
     *                                                               or GetReportScheduleListByNextTokenRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportScheduleListByNextToken($request): GetReportScheduleListByNextTokenResponse;

    /**
     * Get Report List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html
     *
     * @param GetReportListByNextTokenRequest|array $request array of parameters for GetReportListByNextTokenRequest request
     *                                                       or GetReportListByNextTokenRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportListByNextToken($request): GetReportListByNextTokenResponse;

    /**
     * Manage Report Schedule
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html
     *
     * @param ManageReportScheduleRequest|array $request array of parameters for ManageReportScheduleRequest request
     *                                                   or ManageReportScheduleRequest object itself
     *
     * @throws AmazonApiException
     */
    public function manageReportSchedule($request): ManageReportScheduleResponse;

    /**
     * Get Report Request Count
     * returns a count of report requests; by default all the report
     * requests in the last 90 days.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html
     *
     * @param GetReportRequestCountRequest|array $request array of parameters for GetReportRequestCountRequest request
     *                                                    or GetReportRequestCountRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportRequestCount($request): GetReportRequestCountResponse;

    /**
     * Get Report Schedule List
     * returns the list of report schedules.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html
     *
     * @param GetReportScheduleListRequest|array $request array of parameters for GetReportScheduleListRequest request
     *                                                    or GetReportScheduleListRequest object itself
     *
     * @throws AmazonApiException
     */
    public function getReportScheduleList($request): GetReportScheduleListResponse;
}
