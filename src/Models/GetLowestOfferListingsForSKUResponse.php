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
 * GetLowestOfferListingsForSKUResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetLowestOfferListingsForSKUResult: array</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetLowestOfferListingsForSKUResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'GetLowestOfferListingsForSKUResult' => ['FieldValue' => [], 'FieldType' => ['GetLowestOfferListingsForSKUResult']],
            'ResponseMetadata'                   => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'             => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the GetLowestOfferListingsForSKUResult property.
     *
     * @return List<GetLowestOfferListingsForSKUResult> getLowestOfferListingsForSKUResult
     */
    public function getGetLowestOfferListingsForSKUResult()
    {
        if (null == $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue']) {
            $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'] = [];
        }

        return $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'];
    }

    /**
     * Set the value of the GetLowestOfferListingsForSKUResult property.
     *
     * @param array getLowestOfferListingsForSKUResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGetLowestOfferListingsForSKUResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear GetLowestOfferListingsForSKUResult.
     */
    public function unsetGetLowestOfferListingsForSKUResult(): void
    {
        $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'] = [];
    }

    /**
     * Check to see if GetLowestOfferListingsForSKUResult is set.
     *
     * @return true if GetLowestOfferListingsForSKUResult is set
     */
    public function isSetGetLowestOfferListingsForSKUResult()
    {
        return !empty($this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue']);
    }

    /**
     * Add values for GetLowestOfferListingsForSKUResult, return this.
     *
     * @param getLowestOfferListingsForSKUResult
     *             New values to add
     *
     * @return $this instance
     */
    public function withGetLowestOfferListingsForSKUResult()
    {
        foreach (\func_get_args() as $GetLowestOfferListingsForSKUResult) {
            $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'][] = $GetLowestOfferListingsForSKUResult;
        }

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
     * Construct GetLowestOfferListingsForSKUResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetLowestOfferListingsForSKUResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetLowestOfferListingsForSKUResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetLowestOfferListingsForSKUResponse from provided XML.
                                  Make sure that GetLowestOfferListingsForSKUResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetLowestOfferListingsForSKUResponse xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetLowestOfferListingsForSKUResponse>';

        return $xml;
    }
}
