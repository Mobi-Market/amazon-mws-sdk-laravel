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
 * GetProductCategoriesForASINResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetProductCategoriesForASINResult: GetProductCategoriesForASINResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetProductCategoriesForASINResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'GetProductCategoriesForASINResult' => ['FieldValue' => null, 'FieldType' => 'GetProductCategoriesForASINResult'],
            'ResponseMetadata'                  => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'            => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the GetProductCategoriesForASINResult property.
     *
     * @return GetProductCategoriesForASINResult getProductCategoriesForASINResult
     */
    public function getGetProductCategoriesForASINResult()
    {
        return $this->_fields['GetProductCategoriesForASINResult']['FieldValue'];
    }

    /**
     * Set the value of the GetProductCategoriesForASINResult property.
     *
     * @param GetProductCategoriesForASINResult getProductCategoriesForASINResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGetProductCategoriesForASINResult($value)
    {
        $this->_fields['GetProductCategoriesForASINResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GetProductCategoriesForASINResult is set.
     *
     * @return true if GetProductCategoriesForASINResult is set
     */
    public function isSetGetProductCategoriesForASINResult()
    {
        return null !== $this->_fields['GetProductCategoriesForASINResult']['FieldValue'];
    }

    /**
     * Set the value of GetProductCategoriesForASINResult, return this.
     *
     * @param getProductCategoriesForASINResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGetProductCategoriesForASINResult($value)
    {
        $this->setGetProductCategoriesForASINResult($value);

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
     * Construct GetProductCategoriesForASINResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetProductCategoriesForASINResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetProductCategoriesForASINResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetProductCategoriesForASINResponse from provided XML.
                                  Make sure that GetProductCategoriesForASINResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetProductCategoriesForASINResponse xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetProductCategoriesForASINResponse>';

        return $xml;
    }
}
