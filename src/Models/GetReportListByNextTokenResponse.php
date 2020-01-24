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
 * GetReportListByNextTokenResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetReportListByNextTokenResult: GetReportListByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class GetReportListByNextTokenResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new GetReportListByNextTokenResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>GetReportListByNextTokenResult: GetReportListByNextTokenResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'GetReportListByNextTokenResult' => ['FieldValue' => null, 'FieldType' => 'GetReportListByNextTokenResult'],
            'ResponseMetadata'               => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct GetReportListByNextTokenResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return GetReportListByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportListByNextTokenResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetReportListByNextTokenResponse from provided XML. 
                                  Make sure that GetReportListByNextTokenResponse is a root element');
    }

    /**
     * Gets the value of the GetReportListByNextTokenResult.
     *
     * @return GetReportListByNextTokenResult GetReportListByNextTokenResult
     */
    public function getGetReportListByNextTokenResult()
    {
        return $this->fields['GetReportListByNextTokenResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportListByNextTokenResult.
     *
     * @param GetReportListByNextTokenResult GetReportListByNextTokenResult
     * @param mixed $value
     */
    public function setGetReportListByNextTokenResult($value): void
    {
        $this->fields['GetReportListByNextTokenResult']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the GetReportListByNextTokenResult  and returns this instance.
     *
     * @param GetReportListByNextTokenResult $value GetReportListByNextTokenResult
     *
     * @return GetReportListByNextTokenResponse instance
     */
    public function withGetReportListByNextTokenResult($value)
    {
        $this->setGetReportListByNextTokenResult($value);

        return $this;
    }

    /**
     * Checks if GetReportListByNextTokenResult  is set.
     *
     * @return bool true if GetReportListByNextTokenResult property is set
     */
    public function isSetGetReportListByNextTokenResult()
    {
        return null !== $this->fields['GetReportListByNextTokenResult']['FieldValue'];
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
     * @return GetReportListByNextTokenResponse instance
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
        $xml .= '<GetReportListByNextTokenResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetReportListByNextTokenResponse>';

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
