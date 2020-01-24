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
 * CancelFeedSubmissionsResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>CancelFeedSubmissionsResult: CancelFeedSubmissionsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class CancelFeedSubmissionsResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new CancelFeedSubmissionsResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>CancelFeedSubmissionsResult: CancelFeedSubmissionsResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'CancelFeedSubmissionsResult' => ['FieldValue' => null, 'FieldType' => 'CancelFeedSubmissionsResult'],
            'ResponseMetadata'            => ['FieldValue' => null, 'FieldType' => 'ResponseMetadata'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct CancelFeedSubmissionsResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return CancelFeedSubmissionsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:CancelFeedSubmissionsResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct CancelFeedSubmissionsResponse from provided XML. 
                                  Make sure that CancelFeedSubmissionsResponse is a root element');
    }

    /**
     * Gets the value of the CancelFeedSubmissionsResult.
     *
     * @return CancelFeedSubmissionsResult CancelFeedSubmissionsResult
     */
    public function getCancelFeedSubmissionsResult()
    {
        return $this->fields['CancelFeedSubmissionsResult']['FieldValue'];
    }

    /**
     * Sets the value of the CancelFeedSubmissionsResult.
     *
     * @param CancelFeedSubmissionsResult CancelFeedSubmissionsResult
     * @param mixed $value
     */
    public function setCancelFeedSubmissionsResult($value): void
    {
        $this->fields['CancelFeedSubmissionsResult']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the CancelFeedSubmissionsResult  and returns this instance.
     *
     * @param CancelFeedSubmissionsResult $value CancelFeedSubmissionsResult
     *
     * @return CancelFeedSubmissionsResponse instance
     */
    public function withCancelFeedSubmissionsResult($value)
    {
        $this->setCancelFeedSubmissionsResult($value);

        return $this;
    }

    /**
     * Checks if CancelFeedSubmissionsResult  is set.
     *
     * @return bool true if CancelFeedSubmissionsResult property is set
     */
    public function isSetCancelFeedSubmissionsResult()
    {
        return null !== $this->fields['CancelFeedSubmissionsResult']['FieldValue'];
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
     * @return CancelFeedSubmissionsResponse instance
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
        $xml .= '<CancelFeedSubmissionsResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</CancelFeedSubmissionsResponse>';

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
