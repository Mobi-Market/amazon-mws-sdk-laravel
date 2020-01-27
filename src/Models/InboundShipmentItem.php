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
 * InboundShipmentItem.
 *
 * Properties:
 * <ul>
 *
 * <li>ShipmentId: string</li>
 * <li>SellerSKU: string</li>
 * <li>FulfillmentNetworkSKU: string</li>
 * <li>QuantityShipped: int</li>
 * <li>QuantityReceived: int</li>
 * <li>QuantityInCase: int</li>
 * <li>ReleaseDate: string</li>
 * <li>PrepDetailsList: PrepDetailsList</li>
 *
 * </ul>
 */
class InboundShipmentItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShipmentId'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerSKU'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentNetworkSKU' => ['FieldValue' => null, 'FieldType' => 'string'],
            'QuantityShipped'       => ['FieldValue' => null, 'FieldType' => 'int'],
            'QuantityReceived'      => ['FieldValue' => null, 'FieldType' => 'int'],
            'QuantityInCase'        => ['FieldValue' => null, 'FieldType' => 'int'],
            'ReleaseDate'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'PrepDetailsList'       => ['FieldValue' => null, 'FieldType' => 'PrepDetailsList'],
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
     * Get the value of the SellerSKU property.
     *
     * @return string sellerSKU
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set
     */
    public function isSetSellerSKU()
    {
        return null !== $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentNetworkSKU property.
     *
     * @return string fulfillmentNetworkSKU
     */
    public function getFulfillmentNetworkSKU()
    {
        return $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentNetworkSKU property.
     *
     * @param string fulfillmentNetworkSKU
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentNetworkSKU($value)
    {
        $this->_fields['FulfillmentNetworkSKU']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentNetworkSKU is set.
     *
     * @return true if FulfillmentNetworkSKU is set
     */
    public function isSetFulfillmentNetworkSKU()
    {
        return null !== $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentNetworkSKU, return this.
     *
     * @param fulfillmentNetworkSKU
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentNetworkSKU($value)
    {
        $this->setFulfillmentNetworkSKU($value);

        return $this;
    }

    /**
     * Get the value of the QuantityShipped property.
     *
     * @return int quantityShipped
     */
    public function getQuantityShipped()
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }

    /**
     * Set the value of the QuantityShipped property.
     *
     * @param int quantityShipped
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantityShipped($value)
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if QuantityShipped is set.
     *
     * @return true if QuantityShipped is set
     */
    public function isSetQuantityShipped()
    {
        return null !== $this->_fields['QuantityShipped']['FieldValue'];
    }

    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param quantityShipped
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantityShipped($value)
    {
        $this->setQuantityShipped($value);

        return $this;
    }

    /**
     * Get the value of the QuantityReceived property.
     *
     * @return int quantityReceived
     */
    public function getQuantityReceived()
    {
        return $this->_fields['QuantityReceived']['FieldValue'];
    }

    /**
     * Set the value of the QuantityReceived property.
     *
     * @param int quantityReceived
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantityReceived($value)
    {
        $this->_fields['QuantityReceived']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if QuantityReceived is set.
     *
     * @return true if QuantityReceived is set
     */
    public function isSetQuantityReceived()
    {
        return null !== $this->_fields['QuantityReceived']['FieldValue'];
    }

    /**
     * Set the value of QuantityReceived, return this.
     *
     * @param quantityReceived
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantityReceived($value)
    {
        $this->setQuantityReceived($value);

        return $this;
    }

    /**
     * Get the value of the QuantityInCase property.
     *
     * @return int quantityInCase
     */
    public function getQuantityInCase()
    {
        return $this->_fields['QuantityInCase']['FieldValue'];
    }

    /**
     * Set the value of the QuantityInCase property.
     *
     * @param int quantityInCase
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantityInCase($value)
    {
        $this->_fields['QuantityInCase']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if QuantityInCase is set.
     *
     * @return true if QuantityInCase is set
     */
    public function isSetQuantityInCase()
    {
        return null !== $this->_fields['QuantityInCase']['FieldValue'];
    }

    /**
     * Set the value of QuantityInCase, return this.
     *
     * @param quantityInCase
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantityInCase($value)
    {
        $this->setQuantityInCase($value);

        return $this;
    }

    /**
     * Get the value of the ReleaseDate property.
     *
     * @return string releaseDate
     */
    public function getReleaseDate()
    {
        return $this->_fields['ReleaseDate']['FieldValue'];
    }

    /**
     * Set the value of the ReleaseDate property.
     *
     * @param string releaseDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReleaseDate($value)
    {
        $this->_fields['ReleaseDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReleaseDate is set.
     *
     * @return true if ReleaseDate is set
     */
    public function isSetReleaseDate()
    {
        return null !== $this->_fields['ReleaseDate']['FieldValue'];
    }

    /**
     * Set the value of ReleaseDate, return this.
     *
     * @param releaseDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReleaseDate($value)
    {
        $this->setReleaseDate($value);

        return $this;
    }

    /**
     * Get the value of the PrepDetailsList property.
     *
     * @return PrepDetailsList prepDetailsList
     */
    public function getPrepDetailsList()
    {
        return $this->_fields['PrepDetailsList']['FieldValue'];
    }

    /**
     * Set the value of the PrepDetailsList property.
     *
     * @param PrepDetailsList prepDetailsList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPrepDetailsList($value)
    {
        $this->_fields['PrepDetailsList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PrepDetailsList is set.
     *
     * @return true if PrepDetailsList is set
     */
    public function isSetPrepDetailsList()
    {
        return null !== $this->_fields['PrepDetailsList']['FieldValue'];
    }

    /**
     * Set the value of PrepDetailsList, return this.
     *
     * @param prepDetailsList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPrepDetailsList($value)
    {
        $this->setPrepDetailsList($value);

        return $this;
    }
}
