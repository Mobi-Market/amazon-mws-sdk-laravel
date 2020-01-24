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

use MobiMarket\Amazon\Model;

/**
 * InboundShipmentInfo.
 *
 * Properties:
 * <ul>
 *
 * <li>ShipmentId: string</li>
 * <li>ShipmentName: string</li>
 * <li>ShipFromAddress: Address</li>
 * <li>DestinationFulfillmentCenterId: string</li>
 * <li>ShipmentStatus: string</li>
 * <li>LabelPrepType: string</li>
 * <li>AreCasesRequired: bool</li>
 * <li>ConfirmedNeedByDate: string</li>
 * <li>BoxContentsSource: string</li>
 * <li>EstimatedBoxContentsFee: BoxContentsFeeDetails</li>
 *
 * </ul>
 */
class InboundShipmentInfo extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShipmentId'                     => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipmentName'                   => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipFromAddress'                => ['FieldValue' => null, 'FieldType' => 'Address'],
            'DestinationFulfillmentCenterId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipmentStatus'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'LabelPrepType'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'AreCasesRequired'               => ['FieldValue' => null, 'FieldType' => 'bool'],
            'ConfirmedNeedByDate'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'BoxContentsSource'              => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * Get the value of the ShipmentName property.
     *
     * @return string shipmentName
     */
    public function getShipmentName()
    {
        return $this->_fields['ShipmentName']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentName property.
     *
     * @param string shipmentName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentName($value)
    {
        $this->_fields['ShipmentName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentName is set.
     *
     * @return true if ShipmentName is set
     */
    public function isSetShipmentName()
    {
        return null !== $this->_fields['ShipmentName']['FieldValue'];
    }

    /**
     * Set the value of ShipmentName, return this.
     *
     * @param shipmentName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentName($value)
    {
        $this->setShipmentName($value);

        return $this;
    }

    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return Address shipFromAddress
     */
    public function getShipFromAddress()
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShipFromAddress property.
     *
     * @param Address shipFromAddress
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipFromAddress($value)
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipFromAddress is set.
     *
     * @return true if ShipFromAddress is set
     */
    public function isSetShipFromAddress()
    {
        return null !== $this->_fields['ShipFromAddress']['FieldValue'];
    }

    /**
     * Set the value of ShipFromAddress, return this.
     *
     * @param shipFromAddress
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipFromAddress($value)
    {
        $this->setShipFromAddress($value);

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
     * Get the value of the ShipmentStatus property.
     *
     * @return string shipmentStatus
     */
    public function getShipmentStatus()
    {
        return $this->_fields['ShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentStatus property.
     *
     * @param string shipmentStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentStatus($value)
    {
        $this->_fields['ShipmentStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentStatus is set.
     *
     * @return true if ShipmentStatus is set
     */
    public function isSetShipmentStatus()
    {
        return null !== $this->_fields['ShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of ShipmentStatus, return this.
     *
     * @param shipmentStatus
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentStatus($value)
    {
        $this->setShipmentStatus($value);

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
     * Check the value of AreCasesRequired.
     *
     * @return true if AreCasesRequired is set to true
     */
    public function isAreCasesRequired()
    {
        return null !== $this->_fields['AreCasesRequired']['FieldValue'] && $this->_fields['AreCasesRequired']['FieldValue'];
    }

    /**
     * Get the value of the AreCasesRequired property.
     *
     * @return bool areCasesRequired
     */
    public function getAreCasesRequired()
    {
        return $this->_fields['AreCasesRequired']['FieldValue'];
    }

    /**
     * Set the value of the AreCasesRequired property.
     *
     * @param bool areCasesRequired
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAreCasesRequired($value)
    {
        $this->_fields['AreCasesRequired']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AreCasesRequired is set.
     *
     * @return true if AreCasesRequired is set
     */
    public function isSetAreCasesRequired()
    {
        return null !== $this->_fields['AreCasesRequired']['FieldValue'];
    }

    /**
     * Set the value of AreCasesRequired, return this.
     *
     * @param areCasesRequired
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAreCasesRequired($value)
    {
        $this->setAreCasesRequired($value);

        return $this;
    }

    /**
     * Get the value of the ConfirmedNeedByDate property.
     *
     * @return string confirmedNeedByDate
     */
    public function getConfirmedNeedByDate()
    {
        return $this->_fields['ConfirmedNeedByDate']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmedNeedByDate property.
     *
     * @param string confirmedNeedByDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConfirmedNeedByDate($value)
    {
        $this->_fields['ConfirmedNeedByDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ConfirmedNeedByDate is set.
     *
     * @return true if ConfirmedNeedByDate is set
     */
    public function isSetConfirmedNeedByDate()
    {
        return null !== $this->_fields['ConfirmedNeedByDate']['FieldValue'];
    }

    /**
     * Set the value of ConfirmedNeedByDate, return this.
     *
     * @param confirmedNeedByDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withConfirmedNeedByDate($value)
    {
        $this->setConfirmedNeedByDate($value);

        return $this;
    }

    /**
     * Get the value of the BoxContentsSource property.
     *
     * @return string boxContentsSource
     */
    public function getBoxContentsSource()
    {
        return $this->_fields['BoxContentsSource']['FieldValue'];
    }

    /**
     * Set the value of the BoxContentsSource property.
     *
     * @param string boxContentsSource
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBoxContentsSource($value)
    {
        $this->_fields['BoxContentsSource']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BoxContentsSource is set.
     *
     * @return true if BoxContentsSource is set
     */
    public function isSetBoxContentsSource()
    {
        return null !== $this->_fields['BoxContentsSource']['FieldValue'];
    }

    /**
     * Set the value of BoxContentsSource, return this.
     *
     * @param boxContentsSource
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBoxContentsSource($value)
    {
        $this->setBoxContentsSource($value);

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
