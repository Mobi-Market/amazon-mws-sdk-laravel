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

use MobiMarket\Amazon\Model;

/**
 * GetMyPriceForSKUResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetMyPriceForSKUResult: array</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetMyPriceForSKUResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'GetMyPriceForSKUResult' => ['FieldValue' => [], 'FieldType' => ['GetMyPriceForSKUResult']],
            'ResponseMetadata'       => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata' => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the GetMyPriceForSKUResult property.
     *
     * @return List<GetMyPriceForSKUResult> getMyPriceForSKUResult
     */
    public function getGetMyPriceForSKUResult()
    {
        if (null == $this->_fields['GetMyPriceForSKUResult']['FieldValue']) {
            $this->_fields['GetMyPriceForSKUResult']['FieldValue'] = [];
        }

        return $this->_fields['GetMyPriceForSKUResult']['FieldValue'];
    }

    /**
     * Set the value of the GetMyPriceForSKUResult property.
     *
     * @param array getMyPriceForSKUResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGetMyPriceForSKUResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['GetMyPriceForSKUResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear GetMyPriceForSKUResult.
     */
    public function unsetGetMyPriceForSKUResult(): void
    {
        $this->_fields['GetMyPriceForSKUResult']['FieldValue'] = [];
    }

    /**
     * Check to see if GetMyPriceForSKUResult is set.
     *
     * @return true if GetMyPriceForSKUResult is set
     */
    public function isSetGetMyPriceForSKUResult()
    {
        return !empty($this->_fields['GetMyPriceForSKUResult']['FieldValue']);
    }

    /**
     * Add values for GetMyPriceForSKUResult, return this.
     *
     * @param getMyPriceForSKUResult
     *             New values to add
     *
     * @return $this instance
     */
    public function withGetMyPriceForSKUResult()
    {
        foreach (\func_get_args() as $GetMyPriceForSKUResult) {
            $this->_fields['GetMyPriceForSKUResult']['FieldValue'][] = $GetMyPriceForSKUResult;
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
     * Construct GetMyPriceForSKUResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetMyPriceForSKUResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetMyPriceForSKUResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetMyPriceForSKUResponse from provided XML. 
                                  Make sure that GetMyPriceForSKUResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetMyPriceForSKUResponse xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetMyPriceForSKUResponse>';

        return $xml;
    }
}
