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
 * GetLowestPricedOffersForASINResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetLowestPricedOffersForASINResult: GetLowestPricedOffersForASINResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetLowestPricedOffersForASINResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'GetLowestPricedOffersForASINResult' => ['FieldValue' => null, 'FieldType' => 'GetLowestPricedOffersForASINResult'],
            'ResponseMetadata'                   => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'             => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the GetLowestPricedOffersForASINResult property.
     *
     * @return GetLowestPricedOffersForASINResult getLowestPricedOffersForASINResult
     */
    public function getGetLowestPricedOffersForASINResult()
    {
        return $this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'];
    }

    /**
     * Set the value of the GetLowestPricedOffersForASINResult property.
     *
     * @param GetLowestPricedOffersForASINResult getLowestPricedOffersForASINResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGetLowestPricedOffersForASINResult($value)
    {
        $this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GetLowestPricedOffersForASINResult is set.
     *
     * @return true if GetLowestPricedOffersForASINResult is set
     */
    public function isSetGetLowestPricedOffersForASINResult()
    {
        return null !== $this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'];
    }

    /**
     * Set the value of GetLowestPricedOffersForASINResult, return this.
     *
     * @param getLowestPricedOffersForASINResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGetLowestPricedOffersForASINResult($value)
    {
        $this->setGetLowestPricedOffersForASINResult($value);

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
     * Construct GetLowestPricedOffersForASINResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetLowestPricedOffersForASINResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetLowestPricedOffersForASINResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetLowestPricedOffersForASINResponse from provided XML.
                                  Make sure that GetLowestPricedOffersForASINResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetLowestPricedOffersForASINResponse xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetLowestPricedOffersForASINResponse>';

        return $xml;
    }
}
