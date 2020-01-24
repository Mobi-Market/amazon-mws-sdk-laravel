<?php

declare(strict_types=1);
/**
 *  PHP Version 5.
 *
 *  @category    Amazon
 *
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *
 *  @see        http://aws.amazon.com
 *
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *
 *  @version     2009-01-01
 */
/*

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 *
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * GetReportRequestListByNextTokenResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetReportRequestListByNextTokenResult: GetReportRequestListByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class GetReportRequestListByNextTokenResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new GetReportRequestListByNextTokenResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>GetReportRequestListByNextTokenResult: GetReportRequestListByNextTokenResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'GetReportRequestListByNextTokenResult' => ['FieldValue' => null, 'FieldType' => 'GetReportRequestListByNextTokenResult'],
            'ResponseMetadata'                      => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct GetReportRequestListByNextTokenResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return GetReportRequestListByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportRequestListByNextTokenResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetReportRequestListByNextTokenResponse from provided XML. 
                                  Make sure that GetReportRequestListByNextTokenResponse is a root element');
    }

    /**
     * Gets the value of the GetReportRequestListByNextTokenResult.
     *
     * @return GetReportRequestListByNextTokenResult GetReportRequestListByNextTokenResult
     */
    public function getGetReportRequestListByNextTokenResult()
    {
        return $this->fields['GetReportRequestListByNextTokenResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportRequestListByNextTokenResult.
     *
     * @param GetReportRequestListByNextTokenResult GetReportRequestListByNextTokenResult
     * @param mixed $value
     */
    public function setGetReportRequestListByNextTokenResult($value): void
    {
        $this->fields['GetReportRequestListByNextTokenResult']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the GetReportRequestListByNextTokenResult  and returns this instance.
     *
     * @param GetReportRequestListByNextTokenResult $value GetReportRequestListByNextTokenResult
     *
     * @return GetReportRequestListByNextTokenResponse instance
     */
    public function withGetReportRequestListByNextTokenResult($value)
    {
        $this->setGetReportRequestListByNextTokenResult($value);

        return $this;
    }

    /**
     * Checks if GetReportRequestListByNextTokenResult  is set.
     *
     * @return bool true if GetReportRequestListByNextTokenResult property is set
     */
    public function isSetGetReportRequestListByNextTokenResult()
    {
        return null !== $this->fields['GetReportRequestListByNextTokenResult']['FieldValue'];
    }

    /**
     * Gets the value of the ResponseMetadata.
     *
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     *
     * @param ResponseMetadata ResponseMetadata
     * @param mixed $value
     */
    public function setResponseMetadata($value): void
    {
        $this->fields['ResponseMetadata']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance.
     *
     * @param ResponseMetadata $value ResponseMetadata
     *
     * @return GetReportRequestListByNextTokenResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);

        return $this;
    }

    /**
     * Checks if ResponseMetadata  is set.
     *
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return null !== $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetReportRequestListByNextTokenResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetReportRequestListByNextTokenResponse>';

        return $xml;
    }

    public function getResponseHeaderMetadata()
    {
        return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata)
    {
        return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}
