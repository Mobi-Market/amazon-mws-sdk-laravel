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
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2015-06-18
 * Generated: Wed Sep 12 08:12:03 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ListMarketplaceParticipationsByNextTokenResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>ListMarketplaceParticipationsByNextTokenResult: ListMarketplaceParticipationsByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class ListMarketplaceParticipationsByNextTokenResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ListMarketplaceParticipationsByNextTokenResult' => ['FieldValue' => null, 'FieldType' => 'ListMarketplaceParticipationsByNextTokenResult'],
            'ResponseMetadata'                               => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'                         => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ListMarketplaceParticipationsByNextTokenResult property.
     *
     * @return ListMarketplaceParticipationsByNextTokenResult listMarketplaceParticipationsByNextTokenResult
     */
    public function getListMarketplaceParticipationsByNextTokenResult()
    {
        return $this->_fields['ListMarketplaceParticipationsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListMarketplaceParticipationsByNextTokenResult property.
     *
     * @param ListMarketplaceParticipationsByNextTokenResult listMarketplaceParticipationsByNextTokenResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setListMarketplaceParticipationsByNextTokenResult($value)
    {
        $this->_fields['ListMarketplaceParticipationsByNextTokenResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ListMarketplaceParticipationsByNextTokenResult is set.
     *
     * @return true if ListMarketplaceParticipationsByNextTokenResult is set
     */
    public function isSetListMarketplaceParticipationsByNextTokenResult()
    {
        return null !== $this->_fields['ListMarketplaceParticipationsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of ListMarketplaceParticipationsByNextTokenResult, return this.
     *
     * @param listMarketplaceParticipationsByNextTokenResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withListMarketplaceParticipationsByNextTokenResult($value)
    {
        $this->setListMarketplaceParticipationsByNextTokenResult($value);

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
     * Construct ListMarketplaceParticipationsByNextTokenResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListMarketplaceParticipationsByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListMarketplaceParticipationsByNextTokenResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct ListMarketplaceParticipationsByNextTokenResponse from provided XML. 
                                  Make sure that ListMarketplaceParticipationsByNextTokenResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<ListMarketplaceParticipationsByNextTokenResponse xmlns="https://mws.amazonservices.com/Sellers/2011-07-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</ListMarketplaceParticipationsByNextTokenResponse>';

        return $xml;
    }
}
