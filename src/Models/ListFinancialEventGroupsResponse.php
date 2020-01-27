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
 * ListFinancialEventGroupsResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>ListFinancialEventGroupsResult: ListFinancialEventGroupsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class ListFinancialEventGroupsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ListFinancialEventGroupsResult' => ['FieldValue' => null, 'FieldType' => 'ListFinancialEventGroupsResult'],
            'ResponseMetadata'               => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'         => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ListFinancialEventGroupsResult property.
     *
     * @return ListFinancialEventGroupsResult listFinancialEventGroupsResult
     */
    public function getListFinancialEventGroupsResult()
    {
        return $this->_fields['ListFinancialEventGroupsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListFinancialEventGroupsResult property.
     *
     * @param ListFinancialEventGroupsResult listFinancialEventGroupsResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setListFinancialEventGroupsResult($value)
    {
        $this->_fields['ListFinancialEventGroupsResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ListFinancialEventGroupsResult is set.
     *
     * @return true if ListFinancialEventGroupsResult is set
     */
    public function isSetListFinancialEventGroupsResult()
    {
        return null !== $this->_fields['ListFinancialEventGroupsResult']['FieldValue'];
    }

    /**
     * Set the value of ListFinancialEventGroupsResult, return this.
     *
     * @param listFinancialEventGroupsResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withListFinancialEventGroupsResult($value)
    {
        $this->setListFinancialEventGroupsResult($value);

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
     * Construct ListFinancialEventGroupsResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListFinancialEventGroupsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListFinancialEventGroupsResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct ListFinancialEventGroupsResponse from provided XML. 
                                  Make sure that ListFinancialEventGroupsResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<ListFinancialEventGroupsResponse xmlns="http://mws.amazonservices.com/Finances/2015-05-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</ListFinancialEventGroupsResponse>';

        return $xml;
    }
}
