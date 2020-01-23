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
 * @package  FBA Inventory Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Tue Sep 11 14:38:40 PDT 2018
 */

/**
 *  @see FBAInventoryServiceMWS_Interface
 */
require_once __DIR__ . '/Interface.php';

/**
 * FBAInventoryServiceMWS_Client is an implementation of FBAInventoryServiceMWS.
 */
class FBAInventoryServiceMWS_Client implements FBAInventoryServiceMWS_Interface
{
    public const SERVICE_VERSION    = '2010-10-01';
    public const MWS_CLIENT_VERSION = '2014-09-30';

    /** @var string */
    private $_awsAccessKeyId = null;

    /** @var string */
    private $_awsSecretAccessKey = null;

    /** @var array */
    private $_config = ['ServiceURL' => null,
        'UserAgent'                  => 'FBAInventoryServiceMWS PHP5 Library',
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
     * @param string     $awsAccessKeyId     AWS Access Key ID
     * @param string     $awsSecretAccessKey AWS Secret Access Key
     * @param array      $config             configuration options.
     *                                       Valid configuration options are:
     *                                       <ul>
     *                                       <li>ServiceURL</li>
     *                                       <li>UserAgent</li>
     *                                       <li>SignatureVersion</li>
     *                                       <li>TimesRetryOnError</li>
     *                                       <li>ProxyHost</li>
     *                                       <li>ProxyPort</li>
     *                                       <li>ProxyUsername<li>
     *                                       <li>ProxyPassword<li>
     *                                       <li>MaxErrorRetry</li>
     *                                       </ul>
     * @param mixed      $applicationName
     * @param mixed      $applicationVersion
     * @param mixed|null $attributes
     */
    public function __construct(
        $awsAccessKeyId,
        $awsSecretAccessKey,
        $config,
        $applicationName,
        $applicationVersion,
        $attributes = null
    ) {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId     = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        $this->_serviceVersion     = $applicationVersion;
        if (null !== $config) {
            $this->_config = array_merge($this->_config, $config);
        }
        $this->setUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }

    /**
     * Get Service Status
     * Gets the status of the service.
     *     Status is one of GREEN, RED representing:
     *     GREEN: The service section is operating normally.
     *     RED: The service section disruption.
     *
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_GetServiceStatus request or FBAInventoryServiceMWS_Model_GetServiceStatus object itself
     *
     * @see FBAInventoryServiceMWS_Model_GetServiceStatusRequest
     *
     * @throws FBAInventoryServiceMWS_Exception
     *
     * @return FBAInventoryServiceMWS_Model_GetServiceStatusResponse
     */
    public function getServiceStatus($request)
    {
        if (!($request instanceof FBAInventoryServiceMWS_Model_GetServiceStatusRequest)) {
            require_once __DIR__ . '/Model/GetServiceStatusRequest.php';
            $request = new FBAInventoryServiceMWS_Model_GetServiceStatusRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/GetServiceStatusResponse.php';
        $response = FBAInventoryServiceMWS_Model_GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * List Inventory Supply
     * Get information about the supply of seller-owned inventory in
     *     Amazon's fulfillment network. "Supply" is inventory that is available
     *     for fulfilling (a.k.a. Multi-Channel Fulfillment) orders. In general
     *     this includes all sellable inventory that has been received by Amazon,
     *     that is not reserved for existing orders or for internal FC processes,
     *     and also inventory expected to be received from inbound shipments.
     *
     *     This operation provides 2 typical usages by setting different
     *     ListInventorySupplyRequest value:
     *
     *     1. Set value to SellerSkus and not set value to QueryStartDateTime,
     *     this operation will return all sellable inventory that has been received
     *     by Amazon's fulfillment network for these SellerSkus.
     *
     *     2. Not set value to SellerSkus and set value to QueryStartDateTime,
     *     This operation will return information about the supply of all seller-owned
     *     inventory in Amazon's fulfillment network, for inventory items that may have had
     *     recent changes in inventory levels. It provides the most efficient mechanism
     *     for clients to maintain local copies of inventory supply data.
     *
     *     Only 1 of these 2 parameters (SellerSkus and QueryStartDateTime) can be set value for 1 request.
     *     If both with values or neither with values, an exception will be thrown.
     *
     *     This operation is used with ListInventorySupplyByNextToken
     *     to paginate over the resultset. Begin pagination by invoking the
     *     ListInventorySupply operation, and retrieve the first set of
     *     results. If more results are available,continuing iteratively requesting further
     *     pages results by invoking the ListInventorySupplyByNextToken operation (each time
     *     passing in the NextToken value from the previous result), until the returned NextToken
     *     is null, indicating no further results are available.
     *
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_ListInventorySupply request or FBAInventoryServiceMWS_Model_ListInventorySupply object itself
     *
     * @see FBAInventoryServiceMWS_Model_ListInventorySupplyRequest
     *
     * @throws FBAInventoryServiceMWS_Exception
     *
     * @return FBAInventoryServiceMWS_Model_ListInventorySupplyResponse
     */
    public function listInventorySupply($request)
    {
        if (!($request instanceof FBAInventoryServiceMWS_Model_ListInventorySupplyRequest)) {
            require_once __DIR__ . '/Model/ListInventorySupplyRequest.php';
            $request = new FBAInventoryServiceMWS_Model_ListInventorySupplyRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInventorySupply';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/ListInventorySupplyResponse.php';
        $response = FBAInventoryServiceMWS_Model_ListInventorySupplyResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    /**
     * List Inventory Supply By Next Token
     * Continues pagination over a resultset of inventory data for inventory
     *     items.
     *
     *     This operation is used in conjunction with ListUpdatedInventorySupply.
     *     Please refer to documentation for that operation for further details.
     *
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_ListInventorySupplyByNextToken request or FBAInventoryServiceMWS_Model_ListInventorySupplyByNextToken object itself
     *
     * @see FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenRequest
     *
     * @throws FBAInventoryServiceMWS_Exception
     *
     * @return FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse
     */
    public function listInventorySupplyByNextToken($request)
    {
        if (!($request instanceof FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenRequest)) {
            require_once __DIR__ . '/Model/ListInventorySupplyByNextTokenRequest.php';
            $request = new FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenRequest($request);
        }
        $parameters           = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInventorySupplyByNextToken';
        $httpResponse         = $this->_invoke($parameters);

        require_once __DIR__ . '/Model/ListInventorySupplyByNextTokenResponse.php';
        $response = FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);

        return $response;
    }

    public function setUserAgentHeader(
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
     * Convert ListInventorySupplyRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertListInventorySupply($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ListInventorySupply';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSkus()) {
            $SellerSkusListInventorySupplyRequest = $request->getSellerSkus();
            foreach ($SellerSkusListInventorySupplyRequest->getmember() as $memberSellerSkusIndex => $memberSellerSkus) {
                $parameters['SellerSkus' . '.' . 'member' . '.' . ($memberSellerSkusIndex + 1)] =  $memberSellerSkus;
            }
        }
        if ($request->isSetQueryStartDateTime()) {
            $parameters['QueryStartDateTime'] =  $request->getQueryStartDateTime();
        }
        if ($request->isSetResponseGroup()) {
            $parameters['ResponseGroup'] =  $request->getResponseGroup();
        }

        return $parameters;
    }

    /**
     * Convert ListInventorySupplyByNextTokenRequest to name value pairs.
     *
     * @param mixed $request
     */
    private function _convertListInventorySupplyByNextToken($request)
    {
        $parameters           = [];
        $parameters['Action'] = 'ListInventorySupplyByNextToken';
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

                throw new FBAInventoryServiceMWS_Exception(['ErrorCode' => 'InvalidServiceURL', 'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."]);
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
        } catch (FBAInventoryServiceMWS_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            require_once __DIR__ . '/Exception.php';

            throw new FBAInventoryServiceMWS_Exception(['Exception' => $t, 'Message' => $t->getMessage()]);
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

        return new FBAInventoryServiceMWS_Exception($exProps);
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

            throw new FBAInventoryServiceMWS_Exception($exProps);
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

            throw new FBAInventoryServiceMWS_Exception($exProps);
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

        return new FBAInventoryServiceMWS_Model_ResponseHeaderMetadata(
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
