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
 * CancelFeedSubmissionsResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>CancelFeedSubmissionsResult: CancelFeedSubmissionsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class CancelFeedSubmissionsResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new CancelFeedSubmissionsResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>CancelFeedSubmissionsResult: CancelFeedSubmissionsResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'CancelFeedSubmissionsResult' => ['FieldValue' => null, 'FieldType' => 'CancelFeedSubmissionsResult'],
            'ResponseMetadata'            => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct CancelFeedSubmissionsResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return CancelFeedSubmissionsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:CancelFeedSubmissionsResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct CancelFeedSubmissionsResponse from provided XML.
                                  Make sure that CancelFeedSubmissionsResponse is a root element');
    }

    /**
     * Gets the value of the CancelFeedSubmissionsResult.
     *
     * @return CancelFeedSubmissionsResult CancelFeedSubmissionsResult
     */
    public function getCancelFeedSubmissionsResult()
    {
        return $this->fields['CancelFeedSubmissionsResult']['FieldValue'];
    }

    /**
     * Sets the value of the CancelFeedSubmissionsResult.
     *
     * @param CancelFeedSubmissionsResult CancelFeedSubmissionsResult
     * @param mixed $value
     */
    public function setCancelFeedSubmissionsResult($value): void
    {
        $this->fields['CancelFeedSubmissionsResult']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the CancelFeedSubmissionsResult  and returns this instance.
     *
     * @param CancelFeedSubmissionsResult $value CancelFeedSubmissionsResult
     *
     * @return CancelFeedSubmissionsResponse instance
     */
    public function withCancelFeedSubmissionsResult($value)
    {
        $this->setCancelFeedSubmissionsResult($value);

        return $this;
    }

    /**
     * Checks if CancelFeedSubmissionsResult  is set.
     *
     * @return bool true if CancelFeedSubmissionsResult property is set
     */
    public function isSetCancelFeedSubmissionsResult()
    {
        return null !== $this->fields['CancelFeedSubmissionsResult']['FieldValue'];
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
     * @return CancelFeedSubmissionsResponse instance
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
        $xml .= '<CancelFeedSubmissionsResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</CancelFeedSubmissionsResponse>';

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
