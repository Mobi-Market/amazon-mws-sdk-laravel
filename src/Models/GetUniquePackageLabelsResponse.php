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
 * GetUniquePackageLabelsResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetUniquePackageLabelsResult: GetUniquePackageLabelsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetUniquePackageLabelsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'GetUniquePackageLabelsResult' => ['FieldValue' => null, 'FieldType' => 'GetUniquePackageLabelsResult'],
            'ResponseMetadata'             => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'       => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the GetUniquePackageLabelsResult property.
     *
     * @return GetUniquePackageLabelsResult getUniquePackageLabelsResult
     */
    public function getGetUniquePackageLabelsResult()
    {
        return $this->_fields['GetUniquePackageLabelsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetUniquePackageLabelsResult property.
     *
     * @param GetUniquePackageLabelsResult getUniquePackageLabelsResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGetUniquePackageLabelsResult($value)
    {
        $this->_fields['GetUniquePackageLabelsResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GetUniquePackageLabelsResult is set.
     *
     * @return true if GetUniquePackageLabelsResult is set
     */
    public function isSetGetUniquePackageLabelsResult()
    {
        return null !== $this->_fields['GetUniquePackageLabelsResult']['FieldValue'];
    }

    /**
     * Set the value of GetUniquePackageLabelsResult, return this.
     *
     * @param getUniquePackageLabelsResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGetUniquePackageLabelsResult($value)
    {
        $this->setGetUniquePackageLabelsResult($value);

        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata responseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param ResponseMetadata responseMetadata
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set
     */
    public function isSetResponseMetadata()
    {
        return null !== $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);

        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata responseHeaderMetadata
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param ResponseHeaderMetadata responseHeaderMetadata
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set
     */
    public function isSetResponseHeaderMetadata()
    {
        return null !== $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);

        return $this;
    }

    /**
     * Construct GetUniquePackageLabelsResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetUniquePackageLabelsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetUniquePackageLabelsResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetUniquePackageLabelsResponse from provided XML.
                                  Make sure that GetUniquePackageLabelsResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetUniquePackageLabelsResponse xmlns="http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetUniquePackageLabelsResponse>';

        return $xml;
    }
}
