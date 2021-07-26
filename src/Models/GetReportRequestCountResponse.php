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
 * GetReportRequestCountResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetReportRequestCountResult: GetReportRequestCountResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class GetReportRequestCountResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new GetReportRequestCountResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>GetReportRequestCountResult: GetReportRequestCountResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'GetReportRequestCountResult' => ['FieldValue' => null, 'FieldType' => 'GetReportRequestCountResult'],
            'ResponseMetadata'            => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct GetReportRequestCountResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return GetReportRequestCountResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportRequestCountResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetReportRequestCountResponse from provided XML.
                                  Make sure that GetReportRequestCountResponse is a root element');
    }

    /**
     * Gets the value of the GetReportRequestCountResult.
     *
     * @return GetReportRequestCountResult GetReportRequestCountResult
     */
    public function getGetReportRequestCountResult()
    {
        return $this->fields['GetReportRequestCountResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportRequestCountResult.
     *
     * @param GetReportRequestCountResult GetReportRequestCountResult
     * @param mixed $value
     */
    public function setGetReportRequestCountResult($value): void
    {
        $this->fields['GetReportRequestCountResult']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the GetReportRequestCountResult  and returns this instance.
     *
     * @param GetReportRequestCountResult $value GetReportRequestCountResult
     *
     * @return GetReportRequestCountResponse instance
     */
    public function withGetReportRequestCountResult($value)
    {
        $this->setGetReportRequestCountResult($value);

        return $this;
    }

    /**
     * Checks if GetReportRequestCountResult  is set.
     *
     * @return bool true if GetReportRequestCountResult property is set
     */
    public function isSetGetReportRequestCountResult()
    {
        return null !== $this->fields['GetReportRequestCountResult']['FieldValue'];
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
     * @return GetReportRequestCountResponse instance
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
        $xml .= '<GetReportRequestCountResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetReportRequestCountResponse>';

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
