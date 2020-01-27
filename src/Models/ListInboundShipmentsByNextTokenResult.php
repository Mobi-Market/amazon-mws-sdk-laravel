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
 * ListInboundShipmentsByNextTokenResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ShipmentData: InboundShipmentList</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */
class ListInboundShipmentsByNextTokenResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShipmentData' => ['FieldValue' => null, 'FieldType' => 'InboundShipmentList'],
            'NextToken'    => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ShipmentData property.
     *
     * @return InboundShipmentList shipmentData
     */
    public function getShipmentData()
    {
        return $this->_fields['ShipmentData']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentData property.
     *
     * @param InboundShipmentList shipmentData
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentData($value)
    {
        $this->_fields['ShipmentData']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentData is set.
     *
     * @return true if ShipmentData is set
     */
    public function isSetShipmentData()
    {
        return null !== $this->_fields['ShipmentData']['FieldValue'];
    }

    /**
     * Set the value of ShipmentData, return this.
     *
     * @param shipmentData
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentData($value)
    {
        $this->setShipmentData($value);

        return $this;
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return string nextToken
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set
     */
    public function isSetNextToken()
    {
        return null !== $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);

        return $this;
    }
}
