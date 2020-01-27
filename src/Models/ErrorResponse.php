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
 * ErrorResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>Error: Error</li>
 * <li>RequestId: string</li>
 *
 * </ul>
 */
class ErrorResponse extends Model
{
    private $_responseHeaderMetadata;

    /**
     * Construct new ErrorResponse.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Error: Error</li>
     * <li>RequestId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Error'     => ['FieldValue' => [], 'FieldType' => 'Error'],
            'RequestId' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Construct ErrorResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @return ErrorResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:ErrorResponse');
        if (1 == $response->length) {
            return new self(($response->item(0)));
        }

        throw new \Exception('Unable to construct ErrorResponse from provided XML. 
                                  Make sure that ErrorResponse is a root element');
    }

    /**
     * Gets the value of the Error.
     *
     * @return array of Error Error
     */
    public function getError()
    {
        return $this->fields['Error']['FieldValue'];
    }

    /**
     * Sets the value of the Error.
     *
     * @param mixed Error or an array of Error Error
     * @param mixed $error
     *
     * @return $this instance
     */
    public function setError($error)
    {
        if (!$this->_isNumericArray($error)) {
            $error =  [$error];
        }
        $this->fields['Error']['FieldValue'] = $error;

        return $this;
    }

    /**
     * Sets single or multiple values of Error list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withError($error1, $error2)</code>.
     *
     * @param Error $errorArgs one or more Error
     *
     * @return ErrorResponse instance
     */
    public function withError($errorArgs)
    {
        foreach (\func_get_args() as $error) {
            $this->fields['Error']['FieldValue'][] = $error;
        }

        return $this;
    }

    /**
     * Checks if Error list is non-empty.
     *
     * @return bool true if Error list is non-empty
     */
    public function isSetError()
    {
        return \count($this->fields['Error']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the RequestId property.
     *
     * @return string RequestId
     */
    public function getRequestId()
    {
        return $this->fields['RequestId']['FieldValue'];
    }

    /**
     * Sets the value of the RequestId property.
     *
     * @param string RequestId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRequestId($value)
    {
        $this->fields['RequestId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the RequestId and returns this instance.
     *
     * @param string $value RequestId
     *
     * @return ErrorResponse instance
     */
    public function withRequestId($value)
    {
        $this->setRequestId($value);

        return $this;
    }

    /**
     * Checks if RequestId is set.
     *
     * @return bool true if RequestId  is set
     */
    public function isSetRequestId()
    {
        return null !== $this->fields['RequestId']['FieldValue'];
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<ErrorResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</ErrorResponse>';

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
