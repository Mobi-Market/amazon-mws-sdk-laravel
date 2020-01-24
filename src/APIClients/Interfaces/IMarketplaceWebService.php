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
     * @param mixed $request array of parameters for GetReportRequest request
     *                       or GetReportRequest object itself
     *
     * @see GetReportRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportResponse GetReportResponse
     */
    public function getReport($request);

    /**
     * Get Report Schedule Count
     * returns the number of report schedules.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html
     *
     * @param mixed $request array of parameters for GetReportScheduleCountRequest request
     *                       or GetReportScheduleCountRequest object itself
     *
     * @see GetReportScheduleCountRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportScheduleCountResponse GetReportScheduleCountResponse
     */
    public function getReportScheduleCount($request);

    /**
     * Get Report Request List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html
     *
     * @param mixed $request array of parameters for GetReportRequestListByNextTokenRequest request
     *                       or GetReportRequestListByNextTokenRequest object itself
     *
     * @see GetReportRequestListByNextTokenRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportRequestListByNextTokenResponse GetReportRequestListByNextTokenResponse
     */
    public function getReportRequestListByNextToken($request);

    /**
     * Update Report Acknowledgements
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html
     *
     * @param mixed $request array of parameters for UpdateReportAcknowledgementsRequest request
     *                       or UpdateReportAcknowledgementsRequest object itself
     *
     * @see UpdateReportAcknowledgementsRequest
     *
     * @throws AmazonApiException
     *
     * @return UpdateReportAcknowledgementsResponse UpdateReportAcknowledgementsResponse
     */
    public function updateReportAcknowledgements($request);

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
     * @param mixed $request array of parameters for SubmitFeedRequest request
     *                       or SubmitFeedRequest object itself
     *
     * @see SubmitFeedRequest
     *
     * @throws AmazonApiException
     *
     * @return SubmitFeedResponse SubmitFeedResponse
     */
    public function submitFeed($request);

    /**
     * Get Report Count
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html
     *
     * @param mixed $request array of parameters for GetReportCountRequest request
     *                       or GetReportCountRequest object itself
     *
     * @see GetReportCountRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportCountResponse GetReportCountResponse
     */
    public function getReportCount($request);

    /**
     * Get Feed Submission List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html
     *
     * @param mixed $request array of parameters for GetFeedSubmissionListByNextTokenRequest request
     *                       or GetFeedSubmissionListByNextTokenRequest object itself
     *
     * @see GetFeedSubmissionListByNextTokenRequest
     *
     * @throws AmazonApiException
     *
     * @return GetFeedSubmissionListByNextTokenResponse GetFeedSubmissionListByNextTokenResponse
     */
    public function getFeedSubmissionListByNextToken($request);

    /**
     * Cancel Feed Submissions
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing.
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html
     *
     * @param mixed $request array of parameters for CancelFeedSubmissionsRequest request
     *                       or CancelFeedSubmissionsRequest object itself
     *
     * @see CancelFeedSubmissionsRequest
     *
     * @throws AmazonApiException
     *
     * @return CancelFeedSubmissionsResponse CancelFeedSubmissionsResponse
     */
    public function cancelFeedSubmissions($request);

    /**
     * Request Report
     * requests the generation of a report.
     *
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html
     *
     * @param mixed $request array of parameters for RequestReportRequest request
     *                       or RequestReportRequest object itself
     *
     * @see RequestReportRequest
     *
     * @throws AmazonApiException
     *
     * @return RequestReportResponse RequestReportResponse
     */
    public function requestReport($request);

    /**
     * Get Feed Submission Count
     * returns the number of feeds matching all of the specified criteria.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html
     *
     * @param mixed $request array of parameters for GetFeedSubmissionCountRequest request
     *                       or GetFeedSubmissionCountRequest object itself
     *
     * @see GetFeedSubmissionCountRequest
     *
     * @throws AmazonApiException
     *
     * @return GetFeedSubmissionCountResponse GetFeedSubmissionCountResponse
     */
    public function getFeedSubmissionCount($request);

    /**
     * Cancel Report Requests
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days.
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html
     *
     * @param mixed $request array of parameters for CancelReportRequestsRequest request
     *                       or CancelReportRequestsRequest object itself
     *
     * @see CancelReportRequestsRequest
     *
     * @throws AmazonApiException
     *
     * @return CancelReportRequestsResponse CancelReportRequestsResponse
     */
    public function cancelReportRequests($request);

    /**
     * Get Report List
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html
     *
     * @param mixed $request array of parameters for GetReportListRequest request
     *                       or GetReportListRequest object itself
     *
     * @see GetReportListRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportListResponse GetReportListResponse
     */
    public function getReportList($request);

    /**
     * Get Feed Submission Result
     * retrieves the feed processing report.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html
     *
     * @param mixed $request array of parameters for GetFeedSubmissionResultRequest request
     *                       or GetFeedSubmissionResultRequest object itself
     *
     * @see GetFeedSubmissionResultRequest
     *
     * @throws AmazonApiException
     *
     * @return GetFeedSubmissionResultResponse GetFeedSubmissionResultResponse
     */
    public function getFeedSubmissionResult($request);

    /**
     * Get Feed Submission List
     * returns a list of feed submission identifiers and their associated metadata.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html
     *
     * @param mixed $request array of parameters for GetFeedSubmissionListRequest request
     *                       or GetFeedSubmissionListRequest object itself
     *
     * @see GetFeedSubmissionListRequest
     *
     * @throws AmazonApiException
     *
     * @return GetFeedSubmissionListResponse GetFeedSubmissionListResponse
     */
    public function getFeedSubmissionList($request);

    /**
     * Get Report Request List
     * returns a list of report requests ids and their associated metadata.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html
     *
     * @param mixed $request array of parameters for GetReportRequestListRequest request
     *                       or GetReportRequestListRequest object itself
     *
     * @see GetReportRequestListRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportRequestListResponse GetReportRequestListResponse
     */
    public function getReportRequestList($request);

    /**
     * Get Report Schedule List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html
     *
     * @param mixed $request array of parameters for GetReportScheduleListByNextTokenRequest request
     *                       or GetReportScheduleListByNextTokenRequest object itself
     *
     * @see GetReportScheduleListByNextTokenRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportScheduleListByNextTokenResponse GetReportScheduleListByNextTokenResponse
     */
    public function getReportScheduleListByNextToken($request);

    /**
     * Get Report List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html
     *
     * @param mixed $request array of parameters for GetReportListByNextTokenRequest request
     *                       or GetReportListByNextTokenRequest object itself
     *
     * @see GetReportListByNextTokenRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportListByNextTokenResponse GetReportListByNextTokenResponse
     */
    public function getReportListByNextToken($request);

    /**
     * Manage Report Schedule
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html
     *
     * @param mixed $request array of parameters for ManageReportScheduleRequest request
     *                       or ManageReportScheduleRequest object itself
     *
     * @see ManageReportScheduleRequest
     *
     * @throws AmazonApiException
     *
     * @return ManageReportScheduleResponse ManageReportScheduleResponse
     */
    public function manageReportSchedule($request);

    /**
     * Get Report Request Count
     * returns a count of report requests; by default all the report
     * requests in the last 90 days.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html
     *
     * @param mixed $request array of parameters for GetReportRequestCountRequest request
     *                       or GetReportRequestCountRequest object itself
     *
     * @see GetReportRequestCountRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportRequestCountResponse GetReportRequestCountResponse
     */
    public function getReportRequestCount($request);

    /**
     * Get Report Schedule List
     * returns the list of report schedules.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html
     *
     * @param mixed $request array of parameters for GetReportScheduleListRequest request
     *                       or GetReportScheduleListRequest object itself
     *
     * @see GetReportScheduleListRequest
     *
     * @throws AmazonApiException
     *
     * @return GetReportScheduleListResponse GetReportScheduleListResponse
     */
    public function getReportScheduleList($request);
}
