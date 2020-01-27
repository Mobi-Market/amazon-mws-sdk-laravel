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
 * InboundShipmentPlan.
 *
 * Properties:
 * <ul>
 *
 * <li>ShipmentId: string</li>
 * <li>DestinationFulfillmentCenterId: string</li>
 * <li>ShipToAddress: Address</li>
 * <li>LabelPrepType: string</li>
 * <li>Items: InboundShipmentPlanItemList</li>
 * <li>EstimatedBoxContentsFee: BoxContentsFeeDetails</li>
 *
 * </ul>
 */
class InboundShipmentPlan extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShipmentId'                     => ['FieldValue' => null, 'FieldType' => 'string'],
            'DestinationFulfillmentCenterId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipToAddress'                  => ['FieldValue' => null, 'FieldType' => 'Address'],
            'LabelPrepType'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'Items'                          => ['FieldValue' => null, 'FieldType' => 'InboundShipmentPlanItemList'],
            'EstimatedBoxContentsFee'        => ['FieldValue' => null, 'FieldType' => 'BoxContentsFeeDetails'],
        ];
        parent::__construct($data);
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
     * Get the value of the DestinationFulfillmentCenterId property.
     *
     * @return string destinationFulfillmentCenterId
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->_fields['DestinationFulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of the DestinationFulfillmentCenterId property.
     *
     * @param string destinationFulfillmentCenterId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDestinationFulfillmentCenterId($value)
    {
        $this->_fields['DestinationFulfillmentCenterId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DestinationFulfillmentCenterId is set.
     *
     * @return true if DestinationFulfillmentCenterId is set
     */
    public function isSetDestinationFulfillmentCenterId()
    {
        return null !== $this->_fields['DestinationFulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of DestinationFulfillmentCenterId, return this.
     *
     * @param destinationFulfillmentCenterId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDestinationFulfillmentCenterId($value)
    {
        $this->setDestinationFulfillmentCenterId($value);

        return $this;
    }

    /**
     * Get the value of the ShipToAddress property.
     *
     * @return Address shipToAddress
     */
    public function getShipToAddress()
    {
        return $this->_fields['ShipToAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShipToAddress property.
     *
     * @param Address shipToAddress
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipToAddress($value)
    {
        $this->_fields['ShipToAddress']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipToAddress is set.
     *
     * @return true if ShipToAddress is set
     */
    public function isSetShipToAddress()
    {
        return null !== $this->_fields['ShipToAddress']['FieldValue'];
    }

    /**
     * Set the value of ShipToAddress, return this.
     *
     * @param shipToAddress
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipToAddress($value)
    {
        $this->setShipToAddress($value);

        return $this;
    }

    /**
     * Get the value of the LabelPrepType property.
     *
     * @return string labelPrepType
     */
    public function getLabelPrepType()
    {
        return $this->_fields['LabelPrepType']['FieldValue'];
    }

    /**
     * Set the value of the LabelPrepType property.
     *
     * @param string labelPrepType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLabelPrepType($value)
    {
        $this->_fields['LabelPrepType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LabelPrepType is set.
     *
     * @return true if LabelPrepType is set
     */
    public function isSetLabelPrepType()
    {
        return null !== $this->_fields['LabelPrepType']['FieldValue'];
    }

    /**
     * Set the value of LabelPrepType, return this.
     *
     * @param labelPrepType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLabelPrepType($value)
    {
        $this->setLabelPrepType($value);

        return $this;
    }

    /**
     * Get the value of the Items property.
     *
     * @return InboundShipmentPlanItemList items
     */
    public function getItems()
    {
        return $this->_fields['Items']['FieldValue'];
    }

    /**
     * Set the value of the Items property.
     *
     * @param InboundShipmentPlanItemList items
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItems($value)
    {
        $this->_fields['Items']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Items is set.
     *
     * @return true if Items is set
     */
    public function isSetItems()
    {
        return null !== $this->_fields['Items']['FieldValue'];
    }

    /**
     * Set the value of Items, return this.
     *
     * @param items
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItems($value)
    {
        $this->setItems($value);

        return $this;
    }

    /**
     * Get the value of the EstimatedBoxContentsFee property.
     *
     * @return BoxContentsFeeDetails estimatedBoxContentsFee
     */
    public function getEstimatedBoxContentsFee()
    {
        return $this->_fields['EstimatedBoxContentsFee']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedBoxContentsFee property.
     *
     * @param BoxContentsFeeDetails estimatedBoxContentsFee
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEstimatedBoxContentsFee($value)
    {
        $this->_fields['EstimatedBoxContentsFee']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EstimatedBoxContentsFee is set.
     *
     * @return true if EstimatedBoxContentsFee is set
     */
    public function isSetEstimatedBoxContentsFee()
    {
        return null !== $this->_fields['EstimatedBoxContentsFee']['FieldValue'];
    }

    /**
     * Set the value of EstimatedBoxContentsFee, return this.
     *
     * @param estimatedBoxContentsFee
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEstimatedBoxContentsFee($value)
    {
        $this->setEstimatedBoxContentsFee($value);

        return $this;
    }
}
