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
 * GetCompetitivePricingForASINResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetCompetitivePricingForASINResult: array</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetCompetitivePricingForASINResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'GetCompetitivePricingForASINResult' => ['FieldValue' => [], 'FieldType' => ['GetCompetitivePricingForASINResult']],
            'ResponseMetadata'                   => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'             => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the GetCompetitivePricingForASINResult property.
     *
     * @return List<GetCompetitivePricingForASINResult> getCompetitivePricingForASINResult
     */
    public function getGetCompetitivePricingForASINResult()
    {
        if (null == $this->_fields['GetCompetitivePricingForASINResult']['FieldValue']) {
            $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'] = [];
        }

        return $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'];
    }

    /**
     * Set the value of the GetCompetitivePricingForASINResult property.
     *
     * @param array getCompetitivePricingForASINResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGetCompetitivePricingForASINResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear GetCompetitivePricingForASINResult.
     */
    public function unsetGetCompetitivePricingForASINResult(): void
    {
        $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'] = [];
    }

    /**
     * Check to see if GetCompetitivePricingForASINResult is set.
     *
     * @return true if GetCompetitivePricingForASINResult is set
     */
    public function isSetGetCompetitivePricingForASINResult()
    {
        return !empty($this->_fields['GetCompetitivePricingForASINResult']['FieldValue']);
    }

    /**
     * Add values for GetCompetitivePricingForASINResult, return this.
     *
     * @param getCompetitivePricingForASINResult
     *             New values to add
     *
     * @return $this instance
     */
    public function withGetCompetitivePricingForASINResult()
    {
        foreach (\func_get_args() as $GetCompetitivePricingForASINResult) {
            $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'][] = $GetCompetitivePricingForASINResult;
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
     * Construct GetCompetitivePricingForASINResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetCompetitivePricingForASINResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetCompetitivePricingForASINResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetCompetitivePricingForASINResponse from provided XML.
                                  Make sure that GetCompetitivePricingForASINResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetCompetitivePricingForASINResponse xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetCompetitivePricingForASINResponse>';

        return $xml;
    }
}
