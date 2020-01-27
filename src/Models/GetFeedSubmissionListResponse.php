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

namespace MobiMarket\Amazon\Models;

/**
 * GetFeedSubmissionListResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetFeedSubmissionListResult: GetFeedSubmissionListResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class GetFeedSubmissionListResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new GetFeedSubmissionListResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>GetFeedSubmissionListResult: GetFeedSubmissionListResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'GetFeedSubmissionListResult' => ['FieldValue' => null, 'FieldType' => 'GetFeedSubmissionListResult'],
            'ResponseMetadata'            => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct GetFeedSubmissionListResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return GetFeedSubmissionListResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetFeedSubmissionListResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetFeedSubmissionListResponse from provided XML. 
                                  Make sure that GetFeedSubmissionListResponse is a root element');
    }

    /**
     * Gets the value of the GetFeedSubmissionListResult.
     *
     * @return GetFeedSubmissionListResult GetFeedSubmissionListResult
     */
    public function getGetFeedSubmissionListResult()
    {
        return $this->fields['GetFeedSubmissionListResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetFeedSubmissionListResult.
     *
     * @param GetFeedSubmissionListResult GetFeedSubmissionListResult
     * @param mixed $value
     */
    public function setGetFeedSubmissionListResult($value): void
    {
        $this->fields['GetFeedSubmissionListResult']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the GetFeedSubmissionListResult  and returns this instance.
     *
     * @param GetFeedSubmissionListResult $value GetFeedSubmissionListResult
     *
     * @return GetFeedSubmissionListResponse instance
     */
    public function withGetFeedSubmissionListResult($value)
    {
        $this->setGetFeedSubmissionListResult($value);

        return $this;
    }

    /**
     * Checks if GetFeedSubmissionListResult  is set.
     *
     * @return bool true if GetFeedSubmissionListResult property is set
     */
    public function isSetGetFeedSubmissionListResult()
    {
        return null !== $this->fields['GetFeedSubmissionListResult']['FieldValue'];
    }

    /**
     * Gets the value of the ResponseMetadata.
     *
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     *
     * @param ResponseMetadata ResponseMetadata
     * @param mixed $value
     */
    public function setResponseMetadata($value): void
    {
        $this->fields['ResponseMetadata']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance.
     *
     * @param ResponseMetadata $value ResponseMetadata
     *
     * @return GetFeedSubmissionListResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);

        return $this;
    }

    /**
     * Checks if ResponseMetadata  is set.
     *
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return null !== $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetFeedSubmissionListResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetFeedSubmissionListResponse>';

        return $xml;
    }

    public function getResponseHeaderMetadata()
    {
        return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata)
    {
        return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}
