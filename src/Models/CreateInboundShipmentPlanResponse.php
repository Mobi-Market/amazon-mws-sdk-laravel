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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * CreateInboundShipmentPlanResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>CreateInboundShipmentPlanResult: CreateInboundShipmentPlanResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class CreateInboundShipmentPlanResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'CreateInboundShipmentPlanResult' => ['FieldValue' => null, 'FieldType' => 'CreateInboundShipmentPlanResult'],
            'ResponseMetadata'                => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
            'ResponseHeaderMetadata'          => ['FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the CreateInboundShipmentPlanResult property.
     *
     * @return CreateInboundShipmentPlanResult createInboundShipmentPlanResult
     */
    public function getCreateInboundShipmentPlanResult()
    {
        return $this->_fields['CreateInboundShipmentPlanResult']['FieldValue'];
    }

    /**
     * Set the value of the CreateInboundShipmentPlanResult property.
     *
     * @param CreateInboundShipmentPlanResult createInboundShipmentPlanResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCreateInboundShipmentPlanResult($value)
    {
        $this->_fields['CreateInboundShipmentPlanResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CreateInboundShipmentPlanResult is set.
     *
     * @return true if CreateInboundShipmentPlanResult is set
     */
    public function isSetCreateInboundShipmentPlanResult()
    {
        return null !== $this->_fields['CreateInboundShipmentPlanResult']['FieldValue'];
    }

    /**
     * Set the value of CreateInboundShipmentPlanResult, return this.
     *
     * @param createInboundShipmentPlanResult
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCreateInboundShipmentPlanResult($value)
    {
        $this->setCreateInboundShipmentPlanResult($value);

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
     * Construct CreateInboundShipmentPlanResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return CreateInboundShipmentPlanResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath    = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CreateInboundShipmentPlanResponse']");
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct CreateInboundShipmentPlanResponse from provided XML. 
                                  Make sure that CreateInboundShipmentPlanResponse is a root element');
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<CreateInboundShipmentPlanResponse xmlns="http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</CreateInboundShipmentPlanResponse>';

        return $xml;
    }
}
