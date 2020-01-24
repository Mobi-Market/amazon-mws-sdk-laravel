<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 22:40:38 UTC 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ListOrderItemsByNextTokenResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>ListOrderItemsByNextTokenResult: ListOrderItemsByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class ListOrderItemsByNextTokenResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ListOrderItemsByNextTokenResult' => ['FieldValue' => null, 'FieldType' => 'ListOrderItemsByNextTokenResult'],
            'ResponseMetadata'                => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'          => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ListOrderItemsByNextTokenResult property.
     *
     * @return ListOrderItemsByNextTokenResult listOrderItemsByNextTokenResult
     */
    public function getListOrderItemsByNextTokenResult()
    {
        return $this->_fields['ListOrderItemsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListOrderItemsByNextTokenResult property.
     *
     * @param ListOrderItemsByNextTokenResult listOrderItemsByNextTokenResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setListOrderItemsByNextTokenResult($value)
    {
        $this->_fields['ListOrderItemsByNextTokenResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ListOrderItemsByNextTokenResult is set.
     *
     * @return true if ListOrderItemsByNextTokenResult is set
     */
    public function isSetListOrderItemsByNextTokenResult()
    {
        return null !== $this->_fields['ListOrderItemsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of ListOrderItemsByNextTokenResult, return this.
     *
     * @param listOrderItemsByNextTokenResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withListOrderItemsByNextTokenResult($value)
    {
        $this->setListOrderItemsByNextTokenResult($value);

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
     * Construct ListOrderItemsByNextTokenResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListOrderItemsByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListOrderItemsByNextTokenResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct ListOrderItemsByNextTokenResponse from provided XML. 
                                  Make sure that ListOrderItemsByNextTokenResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<ListOrderItemsByNextTokenResponse xmlns="https://mws.amazonservices.com/Orders/2013-09-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</ListOrderItemsByNextTokenResponse>';

        return $xml;
    }
}
