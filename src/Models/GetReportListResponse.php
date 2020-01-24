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
 * GetReportListResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetReportListResult: GetReportListResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class GetReportListResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new GetReportListResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>GetReportListResult: GetReportListResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'GetReportListResult' => ['FieldValue' => null, 'FieldType' => 'GetReportListResult'],
            'ResponseMetadata'    => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct GetReportListResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return GetReportListResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportListResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct GetReportListResponse from provided XML. 
                                  Make sure that GetReportListResponse is a root element');
    }

    /**
     * Gets the value of the GetReportListResult.
     *
     * @return GetReportListResult GetReportListResult
     */
    public function getGetReportListResult()
    {
        return $this->fields['GetReportListResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportListResult.
     *
     * @param GetReportListResult GetReportListResult
     * @param mixed $value
     */
    public function setGetReportListResult($value): void
    {
        $this->fields['GetReportListResult']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the GetReportListResult  and returns this instance.
     *
     * @param GetReportListResult $value GetReportListResult
     *
     * @return GetReportListResponse instance
     */
    public function withGetReportListResult($value)
    {
        $this->setGetReportListResult($value);

        return $this;
    }

    /**
     * Checks if GetReportListResult  is set.
     *
     * @return bool true if GetReportListResult property is set
     */
    public function isSetGetReportListResult()
    {
        return null !== $this->fields['GetReportListResult']['FieldValue'];
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
     * @return GetReportListResponse instance
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
        $xml .= '<GetReportListResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetReportListResponse>';

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
