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
 * TransportHeader.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>ShipmentId: string</li>
 * <li>IsPartnered: bool</li>
 * <li>ShipmentType: string</li>
 *
 * </ul>
 */
class TransportHeader extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipmentId'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsPartnered'  => ['FieldValue' => null, 'FieldType' => 'bool'],
            'ShipmentType' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return string sellerId
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set
     */
    public function isSetSellerId()
    {
        return null !== $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);

        return $this;
    }

    /**
     * Get the value of the ShipmentId property.
     *
     * @return string shipmentId
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set
     */
    public function isSetShipmentId()
    {
        return null !== $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);

        return $this;
    }

    /**
     * Check the value of IsPartnered.
     *
     * @return true if IsPartnered is set to true
     */
    public function isIsPartnered()
    {
        return $this->_fields['IsPartnered']['FieldValue'];
    }

    /**
     * Get the value of the IsPartnered property.
     *
     * @return bool isPartnered
     */
    public function getIsPartnered()
    {
        return $this->_fields['IsPartnered']['FieldValue'];
    }

    /**
     * Set the value of the IsPartnered property.
     *
     * @param bool isPartnered
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsPartnered($value)
    {
        $this->_fields['IsPartnered']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsPartnered is set.
     *
     * @return true if IsPartnered is set
     */
    public function isSetIsPartnered()
    {
        return null !== $this->_fields['IsPartnered']['FieldValue'];
    }

    /**
     * Set the value of IsPartnered, return this.
     *
     * @param isPartnered
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsPartnered($value)
    {
        $this->setIsPartnered($value);

        return $this;
    }

    /**
     * Get the value of the ShipmentType property.
     *
     * @return string shipmentType
     */
    public function getShipmentType()
    {
        return $this->_fields['ShipmentType']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentType property.
     *
     * @param string shipmentType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentType($value)
    {
        $this->_fields['ShipmentType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentType is set.
     *
     * @return true if ShipmentType is set
     */
    public function isSetShipmentType()
    {
        return null !== $this->_fields['ShipmentType']['FieldValue'];
    }

    /**
     * Set the value of ShipmentType, return this.
     *
     * @param shipmentType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentType($value)
    {
        $this->setShipmentType($value);

        return $this;
    }
}
