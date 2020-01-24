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

use MobiMarket\Amazon\AmazonApiException;
use MobiMarket\Amazon\Enums\RequestType;
use MobiMarket\Amazon\Models\ErrorResponse;
use MobiMarket\Amazon\Models\ResponseHeaderMetadata;

abstract class Crappy2009Client extends BaseClient
{
    public const REQUEST_TYPE = 'POST';

    public const CONVERTED_PARAMETERS_KEY = 'PARAMETERS';
    public const CONVERTED_HEADERS_KEY    = 'HEADERS';

    protected $responseBodyContents;

    // "streaming" responses that are errors will be send to this handle;
    protected $errorResponseBody;

    protected $headerContents;

    protected $curlClient;

    // Private API ------------------------------------------------------------//

    /**
     * Get the base64 encoded md5 value of $data. If $data is a memory or temp file stream, this
     * method dumps the contents into a string before calculating the md5. Hence, this method
     * shouldn't be used for large memory streams.
     *
     * @param $data
     *
     * @return unknown_type
     */
    protected function getContentMd5($data)
    {
        $md5Hash = null;

        if (\is_string($data)) {
            $md5Hash = md5($data, true);
        } elseif (\is_resource($data)) {
            // Assume $data is a stream.
            $streamMetadata = stream_get_meta_data($data);

            if ('MEMORY' === $streamMetadata['stream_type'] || 'TEMP' === $streamMetadata['stream_type']) {
                $md5Hash = md5(stream_get_contents($data), true);
            } else {
                $md5Hash = md5_file($streamMetadata['uri'], true);
            }
        }

        return base64_encode($md5Hash);
    }

    /**
     * Invoke request and return response.
     *
     * @param mixed|null $dataHandle
     */
    protected function invoke(array $converted, $dataHandle = null)
    {
        $parameters   = $converted[self::CONVERTED_PARAMETERS_KEY];
        $actionName   = $parameters['Action'];
        $response     = [];
        $responseBody = null;
        $statusCode   = 200;

        // Submit the request and read response body
        try {
            // Ensure the endpoint URL is set.
            if (empty($this->config['ServiceURL'])) {
                throw new AmazonApiException(['ErrorCode' => 'InvalidServiceUrl', 'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."]);
            }

            // Add required request parameters
            $parameters                                = $this->addRequiredParameters($parameters);
            $converted[self::CONVERTED_PARAMETERS_KEY] = $parameters;

            $shouldRetry = false;
            $retries     = 0;
            do {
                try {
                    $response = $this->performRequest($actionName, $converted, $dataHandle);

                    $httpStatus = $response['Status'];

                    switch ($httpStatus) {
              case 200:
                  $shouldRetry = false;

                  break;
              case 500:
              case 503:
                  $errorResponse = ErrorResponse::fromXML($response['ResponseBody']);

                  // We will not retry throttling errors since this would just add to the throttling problem.
                  $shouldRetry = ('RequestThrottled' === $errorResponse->getError()->getCode())
                    ? false : true;

                  if ($shouldRetry && $retries <= $this->config['MaxErrorRetry']) {
                      $this->pauseOnRetry(++$retries);
                  } else {
                      throw $this->reportAnyErrors($response['ResponseBody'], $response['Status'], $response['ResponseHeaderMetadata']);
                  }

                  break;
              default:
                  $shouldRetry = false;

                  throw $this->reportAnyErrors($response['ResponseBody'], $response['Status'], $response['ResponseHeaderMetadata']);

                  break;
          }

                    // Rethrow on deserializer error
                } catch (\Exception $e) {
                    require_once 'MarketplaceWebService/Exception.php';

                    throw new AmazonApiException(['Exception' => $e, 'Message' => $e->getMessage()]);
                }
            } while ($shouldRetry);
        } catch (AmazonApiException $se) {
            throw $se;
        } catch (\Exception $t) {
            throw new AmazonApiException(['Exception' => $t, 'Message' => $t->getMessage()]);
        }

        return ['ResponseBody' => $response['ResponseBody'], 'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']];
    }

    /**
     * Look for additional error strings in the response and return formatted exception.
     *
     * @param mixed $responseBody
     * @param mixed $status
     * @param mixed $responseHeaderMetadata
     */
    protected function reportAnyErrors($responseBody, $status, $responseHeaderMetadata)
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

        require_once 'MarketplaceWebService/Exception.php';

        return new AmazonApiException($exProps);
    }

    /**
     * Setup and execute the request via cURL and return the server response.
     *
     * @param $action - the MWS action to perform
     * @param $dataHandle - A stream handle to either a feed to upload, or a report/feed submission result to download
     *
     * @return array
     */
    protected function performRequest($action, array $converted, $dataHandle = null)
    {
        $curlOptions = $this->configureCurlOptions($action, $converted, $dataHandle);

        if (null === $curlOptions[CURLOPT_RETURNTRANSFER] || !$curlOptions[CURLOPT_RETURNTRANSFER]) {
            $curlOptions[CURLOPT_RETURNTRANSFER] = true;
        }

        $this->curlClient = curl_init();
        curl_setopt_array($this->curlClient, $curlOptions);

        $this->headerContents    = @fopen('php://memory', 'rw+');
        $this->errorResponseBody = @fopen('php://memory', 'rw+');

        $httpResponse = curl_exec($this->curlClient);

        rewind($this->headerContents);
        $header = stream_get_contents($this->headerContents);

        $parsedHeader = $this->parseHttpHeader($header);

        $responseHeaderMetadata = new ResponseHeaderMetadata(
            $parsedHeader['x-mws-request-id'],
            $parsedHeader['x-mws-response-context'],
            $parsedHeader['x-mws-timestamp']
        );

        $code = (int) curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);

        // Only attempt to verify the Content-MD5 value if the request was successful.
        if (RequestType::POST_DOWNLOAD === RequestType::getRequestType($action)) {
            if (200 != $code) {
                rewind($this->errorResponseBody);
                $httpResponse =  stream_get_contents($this->errorResponseBody);
            } else {
                $this->verifyContentMd5($this->getParsedHeader($parsedHeader, 'Content-MD5'), $dataHandle);
                $httpResponse = $this->getDownloadResponseDocument($action, $parsedHeader);
            }
        }

        // Cleanup open streams and cURL instance.
        @fclose($this->headerContents);
        @fclose($this->errorResponseBody);
        curl_close($this->curlClient);

        return [
            'Status'                 => $code,
            'ResponseBody'           => $httpResponse,
            'ResponseHeaderMetadata' => $responseHeaderMetadata, ];
    }

    protected function getParsedHeader($parsedHeader, $key)
    {
        return $parsedHeader[strtolower($key)];
    }

    /**
     * Compares the received Content-MD5 Hash value from the response with a locally calculated
     * value based on the contents of the response body. If the received hash value doesn't match
     * the locally calculated hash value, an exception is raised.
     *
     * @param $receivedMd5Hash
     * @param $streamHandle
     *
     * @return unknown_type
     */
    protected function verifyContentMd5($receivedMd5Hash, $streamHandle)
    {
        rewind($streamHandle);
        $expectedMd5Hash = $this->getContentMd5($streamHandle);
        rewind($streamHandle);

        if (!($receivedMd5Hash === $expectedMd5Hash)) {
            require_once 'MarketplaceWebService/Exception.php';

            throw new AmazonApiException(['Message' => 'Received Content-MD5 = ' . $receivedMd5Hash . ' but expected ' . $expectedMd5Hash, 'ErrorCode' => 'ContentMD5DoesNotMatch']);
        }
    }

    /**
     * Build an associative array of an HTTP Header lines. For requests, the HTTP request line
     * is not contained in the array, nor is the HTTP status line for response headers.
     *
     * @param $header
     *
     * @return array
     */
    protected function parseHttpHeader($header)
    {
        $parsedHeader = [];
        foreach (explode("\n", $header) as $line) {
            $splitLine = preg_split('/:\s/', $line, 2, PREG_SPLIT_NO_EMPTY);

            if (2 == \count($splitLine)) {
                $k = strtolower(trim($splitLine[0]));
                $v = trim($splitLine[1]);
                if (\array_key_exists($k, $parsedHeader)) {
                    $parsedHeader[$k] = $parsedHeader[$k] . ',' . $v;
                } else {
                    $parsedHeader[$k] = $v;
                }
            }
        }

        return $parsedHeader;
    }

    /**
     * cURL callback to write the response HTTP body into a stream. This is only intended to be used
     * with RequestType::POST_DOWNLOAD request types, since the responses can potentially become
     * large.
     *
     * @param $ch - The curl handle
     * @param $string - body portion to write
     *
     * @return int - number of byes written
     */
    protected function responseCallback($ch, $string)
    {
        $httpStatusCode = (int) curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);

        // For unsuccessful responses, i.e. non-200 HTTP responses, we write the response body
        // into a separate stream.
        $responseHandle = null;
        if (200 == $httpStatusCode) {
            $responseHandle = $this->responseBodyContents;
        } else {
            $responseHandle = $this->errorResponseBody;
        }

        return fwrite($responseHandle, $string);
    }

    /**
     * cURL callback to write the response HTTP header into a stream.
     *
     * @param $ch - The curl handle
     * @param $string - header portion to write
     *
     * @return int - number of bytes written to stream
     */
    protected function headerCallback($ch, $string)
    {
        return fwrite($this->headerContents, $string);
    }

    /**
     * Gets cURL options common to all MWS requests.
     *
     * @return unknown_type
     */
    protected function getDefaultCurlOptions()
    {
        return [
            CURLOPT_POST           => true,
            CURLOPT_USERAGENT      => $this->config['UserAgent'],
            CURLOPT_VERBOSE        => true,
            CURLOPT_HEADERFUNCTION => [$this, 'headerCallback'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2,
        ];
    }

    /**
     * Configures specific curl options based on the request type.
     *
     * @param $action
     * @param $streamHandle
     *
     * @return array
     */
    protected function configureCurlOptions($action, array $converted, $streamHandle = null)
    {
        $curlOptions = $this->getDefaultCurlOptions();

        if (null !== $this->config['ProxyHost']) {
            $proxy = $this->config['ProxyHost'];
            $proxy .= ':' . (-1 == $this->config['ProxyPort'] ? '80' : $this->config['ProxyPort']);

            $curlOptions[CURLOPT_PROXY] = $proxy;
        }

        $serviceUrl = $this->config['ServiceURL'];

        // append the '/' character to the end of the service URL if it doesn't exist.
        if (!('/' === substr($serviceUrl, \strlen($serviceUrl) - 1))) {
            $serviceUrl .= '/';
        }

        $requestType = RequestType::getRequestType($action);

        if (RequestType::POST_UPLOAD == $requestType) {
            if (null === $streamHandle || !\is_resource($streamHandle)) {
                throw new AmazonApiException(['Message' => 'Missing stream resource.']);
            }

            $serviceUrl .= '?' . $this->_getParametersAsString($converted[self::CONVERTED_PARAMETERS_KEY]);

            $curlOptions[CURLOPT_URL] = $serviceUrl;

            $header[] = 'Expect: ';
            $header[] = 'Accept: ';
            $header[] = 'Transfer-Encoding: chunked';

            $curlOptions[CURLOPT_HTTPHEADER] = array_merge($header, $converted[self::CONVERTED_HEADERS_KEY]);

            rewind($streamHandle);
            $curlOptions[CURLOPT_INFILE] = $streamHandle;

            $curlOptions[CURLOPT_UPLOAD] = true;

            $curlOptions[CURLOPT_CUSTOMREQUEST] = self::REQUEST_TYPE;
        } elseif (!(RequestType::UNKNOWN === $requestType)) {
            $curlOptions[CURLOPT_URL]        = $this->config['ServiceURL'];
            $curlOptions[CURLOPT_POSTFIELDS] = $this->_getParametersAsString($converted[self::CONVERTED_PARAMETERS_KEY]);

            if (RequestType::POST_DOWNLOAD == $requestType) {
                $this->responseBodyContents         = $streamHandle;
                $curlOptions[CURLOPT_WRITEFUNCTION] = [$this, 'responseCallback'];
            }
        } else {
            throw new \InvalidArgumentException("{$action} is not a valid request type.");
        }

        return $curlOptions;
    }

    /**
     * For RequestType::POST_DOWNLOAD actions, construct a response containing the Amazon Request ID
     * and Content MD5 header value.
     *
     * @param $responseType
     * @param $header
     *
     * @return unknown_type
     */
    protected function getDownloadResponseDocument($responseType, $header)
    {
        $md5       = $this->getParsedHeader($header, 'Content-MD5');
        $requestId = $this->getParsedHeader($header, 'x-amz-request-id');

        $response = '<' . $responseType . 'Response xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';

        $response .= '<' . $responseType . 'Result>';
        $response .= '<ContentMd5>';
        $response .= $md5;
        $response .= '</ContentMd5>';
        $response .= '</' . $responseType . 'Result>';
        $response .= '<ResponseMetadata>';
        $response .= '<RequestId>';
        $response .= $requestId;
        $response .= '</RequestId>';
        $response .= '</ResponseMetadata>';
        $response .= '</' . $responseType . 'Response>';

        return $response;
    }

    /**
     * Exponential sleep on failed request.
     *
     * @param retries current retry
     * @param mixed $retries
     */
    protected function pauseOnRetry($retries): void
    {
        $delay = (int) (4 ** $retries * 100000);
        usleep($delay);
    }

    /**
     * Add authentication related and version parameters.
     */
    protected function addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId']   = $this->awsAccessKeyId;
        $parameters['Timestamp']        = $this->getFormattedTimestamp(new \DateTime('now', new \DateTimeZone('UTC')));
        $parameters['Version']          = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->awsSecretAccessKey);

        return $parameters;
    }
}
