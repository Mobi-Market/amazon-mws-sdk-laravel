<?php

/**
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");.
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 *
 * @category Amazon
 *
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

namespace MobiMarket\Amazon\Models;

/**
 * FBAInboundServiceMWS_Model - base class for all model classes.
 */
abstract class Model
{
    /** @var array */
    protected $_fields = [];

    /**
     * Construct new model class.
     *
     * @param mixed $data - \DOMElement or Associative Array to construct from
     */
    public function __construct($data = null)
    {
        if (null !== $data) {
            if ($this->_isAssociativeArray($data)) {
                $this->_fromAssociativeArray($data);
            } elseif ($this->_isDOMElement($data)) {
                $this->_fromDOMElement($data);
            } else {
                throw new \Exception('Unable to construct from provided data. Please be sure to pass associative array or \DOMElement');
            }
        }
    }

    /**
     * Support for virtual properties getters.
     *
     * Virtual property call example:
     *
     *   $action->Property
     *
     * Direct getter(preferred):
     *
     *   $action->getProperty()
     *
     * @param string $propertyName name of the property
     */
    public function __get($propertyName)
    {
        $getter = "get{$propertyName}";

        return $this->{$getter}();
    }

    /**
     * Support for virtual properties setters.
     *
     * Virtual property call example:
     *
     *   $action->Property  = 'ABC'
     *
     * Direct setter (preferred):
     *
     *   $action->setProperty('ABC')
     *
     * @param string $propertyName  name of the property
     * @param mixed  $propertyValue
     */
    public function __set($propertyName, $propertyValue)
    {
        $setter = "set{$propertyName}";
        $this->{$setter}($propertyValue);

        return $this;
    }

    private function __toQueryParameterArray($prefix, $fieldType, $fieldValue, $fieldAttrs)
    {
        $arr = [];
        if (\is_array($fieldType)) {
            if (isset($fieldAttrs['ListMemberName'])) {
                $listMemberName = $fieldAttrs['ListMemberName'];
                $itemPrefix     = $prefix . $listMemberName . '.';
            } else {
                $itemPrefix = $prefix;
            }

            for ($i = 1; $i <= \count($fieldValue); ++$i) {
                $indexedPrefix = $itemPrefix . $i . '.';
                $memberType    = $fieldType[0];
                $arr           = array_merge(
                    $arr,
                    $this->__toQueryParameterArray(
                        $indexedPrefix,
                        $memberType,
                        $fieldValue[$i - 1],
                        null
                    )
                );
            }
        } elseif ($this->_isComplexType($fieldType)) {
            // Struct
            if (isset($fieldValue)) {
                $arr = array_merge($arr, $fieldValue->_toQueryParameterArray($prefix));
            }
        } else {
            // Primitive
            if (null !== $fieldValue && '' !== $fieldValue) {
                if ('bool' == $fieldType) {
                    $fieldValue = ($fieldValue) ? 'true' : 'false';
                }
                $arr[rtrim($prefix, '.')] = $fieldValue;
            }
        }

        return $arr;
    }

    /**
     * Convert to query parameters suitable for POSTing.
     *
     * @return array of query parameters
     */
    public function toQueryParameterArray()
    {
        return $this->_toQueryParameterArray('');
    }

    protected function _toQueryParameterArray($prefix)
    {
        $arr = [];
        foreach ($this->_fields as $fieldName => $fieldAttrs) {
            $fieldType  = $fieldAttrs['FieldType'];
            $fieldValue = $fieldAttrs['FieldValue'];
            $newPrefix  = $prefix . $fieldName . '.';
            $currentArr = $this->__toQueryParameterArray($newPrefix, $fieldType, $fieldValue, $fieldAttrs);
            $arr        = array_merge($arr, $currentArr);
        }

        return $arr;
    }

    /**
     * XML fragment representation of this object
     * Note, name of the root determined by caller
     * This fragment returns inner fields representation only.
     *
     * @return string XML fragment for this object
     */
    protected function _toXMLFragment()
    {
        $xml = '';
        foreach ($this->_fields as $fieldName => $field) {
            $fieldValue = $field['FieldValue'];
            if (null !== $fieldValue && 'ResponseHeaderMetadata' != $field['FieldType']) {
                $fieldType = $field['FieldType'];
                if (\is_array($fieldType)) {
                    if ('object' == $fieldType[0]) {
                        foreach ($fieldValue as $item) {
                            $newDoc       = new \DOMDocument();
                            $importedNode = $newDoc->importNode($item, true);
                            $newDoc->appendChild($importedNode);
                            $xmlStr = $newDoc->saveXML();
                            $xmlStr = substr($xmlStr, strpos($xmlStr, '?>') + 2);
                            $xml .= trim($xmlStr);
                        }
                    } elseif ($this->_isComplexType($fieldType[0])) {
                        if (isset($field['ListMemberName'])) {
                            $memberName = $field['ListMemberName'];
                            $xml .= "<{$fieldName}>";
                            foreach ($fieldValue as $item) {
                                $xml .= "<{$memberName}>";
                                $xml .= $item->_toXMLFragment();
                                $xml .= "</{$memberName}>";
                            }
                            $xml .= "</{$fieldName}>";
                        } else {
                            foreach ($fieldValue as $item) {
                                $xml .= "<{$fieldName}";
                                $xml .= $item->_getAttributes();
                                $xml .= '>';
                                $xml .= $item->_toXMLFragment();
                                $xml .= "</{$fieldName}>";
                            }
                        }
                    } else {
                        if (isset($field['ListMemberName'])) {
                            $memberName = $field['ListMemberName'];
                            $xml .= "<{$fieldName}>";
                            foreach ($fieldValue as $item) {
                                $xml .= "<{$memberName}>";
                                $xml .= $this->_escapeXML($item);
                                $xml .= "</{$memberName}>";
                            }
                            $xml .= "</{$fieldName}>";
                        } else {
                            foreach ($fieldValue as $item) {
                                $xml .= "<{$fieldName}>";
                                $xml .= $this->_escapeXML($item);
                                $xml .= "</{$fieldName}>";
                            }
                        }
                    }
                } else {
                    if ($this->_isComplexType($fieldType)) {
                        $xml .= "<{$fieldName}";
                        $xml .= $fieldValue->_getAttributes();
                        $xml .= '>';
                        $xml .= $fieldValue->_toXMLFragment();
                        $xml .= "</{$fieldName}>";
                    } elseif ('.' == $fieldType[0]) {
                        $xml .= $this->_escapeXML($fieldValue);
                    } elseif ('@' != $fieldType[0]) {
                        $xml .= "<{$fieldName}>";
                        $xml .= $this->_escapeXML($fieldValue);
                        $xml .= "</{$fieldName}>";
                    }
                }
            }
        }

        return $xml;
    }

    protected function _getAttributes()
    {
        $xml = '';
        foreach ($this->_fields as $fieldName => $field) {
            $fieldValue = $field['FieldValue'];
            if (null !== $fieldValue) {
                $fieldType = $field['FieldType'];
                if ('@' == $fieldType[0]) {
                    $xml .= ' ' . $fieldName . "='" . $this->_escapeXML($fieldValue) . "'";
                }
            }
        }

        return $xml;
    }

    /**
     * Checks  whether passed variable is numeric array.
     *
     * @param mixed $var
     *
     * @return true if passed variable is an numeric array
     */
    protected function _isNumericArray($var)
    {
        if (!\is_array($var)) {
            return false;
        }
        $sz = \count($var);

        return 0 === $sz || array_keys($var) === range(0, \count($var) - 1);
    }

    /**
     * Construct from \DOMElement.
     *
     * This function iterates over object fields and queries XML
     * for corresponding tag value. If query succeeds, value extracted
     * from xml, and field value properly constructed based on field type.
     *
     * Field types defined as arrays always constructed as arrays,
     * even if XML contains a single element - to make sure that
     * data structure is predictable, and no is_array checks are
     * required.
     *
     * @param \DOMElement $dom XML element to construct from
     */
    private function _fromDOMElement(\DOMElement $dom): void
    {
        $xpath = new \DOMXPath($dom->ownerDocument);

        foreach ($this->_fields as $fieldName => $field) {
            $fieldType = $field['FieldType'];
            if (\is_array($fieldType)) {
                if ('object' == $fieldType[0]) {
                    $elements = $dom->childNodes;
                    for ($i = 0; $i < $elements->length; ++$i) {
                        $this->_fields[$fieldName]['FieldValue'][] = $elements->item($i);
                    }
                } elseif ($this->_isComplexType($fieldType[0])) {
                    if (isset($field['ListMemberName'])) {
                        $memberName = $field['ListMemberName'];
                        $elements   = $xpath->query("./*[local-name()='{$fieldName}']/*[local-name()='{$memberName}']", $dom);
                    } else {
                        $elements = $xpath->query("./*[local-name()='{$fieldName}']", $dom);
                    }
                    if ($elements->length >= 1) {
                        $fieldType[0] = "MobiMarket\\Amazon\\Models\\{$fieldType[0]}";

                        foreach ($elements as $element) {
                            $this->_fields[$fieldName]['FieldValue'][] = new $fieldType[0]($element);
                        }
                    }
                } else {
                    if (isset($field['ListMemberName'])) {
                        $memberName = $field['ListMemberName'];
                        $elements   = $xpath->query("./*[local-name()='{$fieldName}']/*[local-name()='{$memberName}']", $dom);
                    } else {
                        $elements = $xpath->query("./*[local-name()='{$fieldName}']", $dom);
                    }
                    if ($elements->length >= 1) {
                        foreach ($elements as $element) {
                            $text                                      = $xpath->query('./text()', $element);
                            $this->_fields[$fieldName]['FieldValue'][] = $text->item(0)->data;
                        }
                    }
                }
            } else {
                if ($this->_isComplexType($fieldType)) {
                    $elements = $xpath->query("./*[local-name()='{$fieldName}']", $dom);
                    if (1 == $elements->length) {
                        $fieldType = "MobiMarket\\Amazon\\Models\\{$fieldType}";

                        $this->_fields[$fieldName]['FieldValue'] = new $fieldType($elements->item(0));
                    }
                } else {
                    if ('@' == $fieldType[0]) {
                        $attribute = $xpath->query("./@{$fieldName}", $dom);
                        if (1 == $attribute->length) {
                            $this->_fields[$fieldName]['FieldValue'] = $attribute->item(0)->nodeValue;
                            if (isset($this->_fields['Value'])) {
                                $parentNode                           = $attribute->item(0)->parentNode;
                                $this->_fields['Value']['FieldValue'] = $parentNode->nodeValue;
                            }
                        }
                    } else {
                        if ('.' == $fieldType[0]) {
                            $element = $xpath->query('./text()', $dom);
                        } else {
                            $element = $xpath->query("./*[local-name()='{$fieldName}']/text()", $dom);
                        }
                        if (1 == $element->length) {
                            $this->_fields[$fieldName]['FieldValue'] = $element->item(0)->data;
                        }
                    }

                    $attribute = $xpath->query("./@{$fieldName}", $dom);
                    if (1 == $attribute->length) {
                        $this->_fields[$fieldName]['FieldValue'] = $attribute->item(0)->nodeValue;
                        if (isset($this->_fields['Value'])) {
                            $parentNode                           = $attribute->item(0)->parentNode;
                            $this->_fields['Value']['FieldValue'] = $parentNode->nodeValue;
                        }
                    }
                }
            }
        }
    }

    /**
     * Construct from Associative Array.
     *
     * @param array $array associative array to construct from
     */
    private function _fromAssociativeArray(array $array): void
    {
        foreach ($this->_fields as $fieldName => $field) {
            $fieldType = $field['FieldType'];
            if (\is_array($fieldType)) {
                if ($this->_isComplexType($fieldType[0])) {
                    if (\array_key_exists($fieldName, $array)) {
                        $elements = $array[$fieldName];
                        if (!$this->_isNumericArray($elements)) {
                            $elements =  [$elements];
                        }
                        if (\count($elements) >= 1) {
                            $fieldType[0] = "MobiMarket\\Amazon\\Models\\{$fieldType[0]}";

                            foreach ($elements as $element) {
                                $this->_fields[$fieldName]['FieldValue'][] = new $fieldType[0]($element);
                            }
                        }
                    }
                } else {
                    if (\array_key_exists($fieldName, $array)) {
                        $elements = $array[$fieldName];
                        if (!$this->_isNumericArray($elements)) {
                            $elements =  [$elements];
                        }
                        if (\count($elements) >= 1) {
                            foreach ($elements as $element) {
                                $this->_fields[$fieldName]['FieldValue'][] = $element;
                            }
                        }
                    }
                }
            } else {
                if ($this->_isComplexType($fieldType)) {
                    if (\array_key_exists($fieldName, $array)) {
                        $fieldType = "MobiMarket\\Amazon\\Models\\${fieldType}";

                        $this->_fields[$fieldName]['FieldValue'] = new $fieldType($array[$fieldName]);
                    }
                } else {
                    if (\array_key_exists($fieldName, $array)) {
                        $this->_fields[$fieldName]['FieldValue'] = $array[$fieldName];
                    }
                }
            }
        }
    }

    /**
     * Escape special XML characters.
     *
     * @param mixed $str
     *
     * @return string with escaped XML characters
     */
    private function _escapeXML($str)
    {
        $from = ['&', '<', '>', "'", '"'];
        $to   = ['&amp;', '&lt;', '&gt;', '&#039;', '&quot;'];

        return str_replace($from, $to, $str);
    }

    /**
     * Determines if field is complex type.
     *
     * @param string $fieldType field type name
     */
    private function _isComplexType(string $fieldType): bool
    {
        return (bool) preg_match('/^[A-Z]/', $fieldType);
    }

    /**
     * Checks  whether passed variable is an associative array.
     *
     * @param mixed $var
     *
     * @return true if passed variable is an associative array
     */
    private function _isAssociativeArray($var)
    {
        return \is_array($var) && array_keys($var) !== range(0, \count($var) - 1);
    }

    /**
     * Checks  whether passed variable is \DOMElement.
     *
     * @param mixed $var
     *
     * @return true if passed variable is \DOMElement
     */
    private function _isDOMElement($var)
    {
        return $var instanceof \DOMElement;
    }
}
