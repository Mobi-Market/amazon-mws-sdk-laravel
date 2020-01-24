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
 * RequestReportResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>RequestReportResult: RequestReportResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class RequestReportResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new RequestReportResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>RequestReportResult: RequestReportResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'RequestReportResult' => ['FieldValue' => null, 'FieldType' => 'RequestReportResult'],
            'ResponseMetadata'    => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct RequestReportResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return RequestReportResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:RequestReportResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct RequestReportResponse from provided XML. 
                                  Make sure that RequestReportResponse is a root element');
    }

    /**
     * Gets the value of the RequestReportResult.
     *
     * @return RequestReportResult RequestReportResult
     */
    public function getRequestReportResult()
    {
        return $this->fields['RequestReportResult']['FieldValue'];
    }

    /**
     * Sets the value of the RequestReportResult.
     *
     * @param RequestReportResult RequestReportResult
     * @param mixed $value
     */
    public function setRequestReportResult($value): void
    {
        $this->fields['RequestReportResult']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the RequestReportResult  and returns this instance.
     *
     * @param RequestReportResult $value RequestReportResult
     *
     * @return RequestReportResponse instance
     */
    public function withRequestReportResult($value)
    {
        $this->setRequestReportResult($value);

        return $this;
    }

    /**
     * Checks if RequestReportResult  is set.
     *
     * @return bool true if RequestReportResult property is set
     */
    public function isSetRequestReportResult()
    {
        return null !== $this->fields['RequestReportResult']['FieldValue'];
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
     * @return RequestReportResponse instance
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
        $xml .= '<RequestReportResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</RequestReportResponse>';

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
