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
 * GetLowestPricedOffersForSKUResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetLowestPricedOffersForSKUResult: GetLowestPricedOffersForSKUResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetLowestPricedOffersForSKUResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'GetLowestPricedOffersForSKUResult' => ['FieldValue' => null, 'FieldType' => 'GetLowestPricedOffersForSKUResult'],
            'ResponseMetadata'                  => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'            => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the GetLowestPricedOffersForSKUResult property.
     *
     * @return GetLowestPricedOffersForSKUResult getLowestPricedOffersForSKUResult
     */
    public function getGetLowestPricedOffersForSKUResult()
    {
        return $this->_fields['GetLowestPricedOffersForSKUResult']['FieldValue'];
    }

    /**
     * Set the value of the GetLowestPricedOffersForSKUResult property.
     *
     * @param GetLowestPricedOffersForSKUResult getLowestPricedOffersForSKUResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGetLowestPricedOffersForSKUResult($value)
    {
        $this->_fields['GetLowestPricedOffersForSKUResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GetLowestPricedOffersForSKUResult is set.
     *
     * @return true if GetLowestPricedOffersForSKUResult is set
     */
    public function isSetGetLowestPricedOffersForSKUResult()
    {
        return null !== $this->_fields['GetLowestPricedOffersForSKUResult']['FieldValue'];
    }

    /**
     * Set the value of GetLowestPricedOffersForSKUResult, return this.
     *
     * @param getLowestPricedOffersForSKUResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGetLowestPricedOffersForSKUResult($value)
    {
        $this->setGetLowestPricedOffersForSKUResult($value);

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
     * Construct GetLowestPricedOffersForSKUResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetLowestPricedOffersForSKUResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetLowestPricedOffersForSKUResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetLowestPricedOffersForSKUResponse from provided XML.
                                  Make sure that GetLowestPricedOffersForSKUResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetLowestPricedOffersForSKUResponse xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetLowestPricedOffersForSKUResponse>';

        return $xml;
    }
}
