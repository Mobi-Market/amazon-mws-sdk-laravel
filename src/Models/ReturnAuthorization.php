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
 * ReturnAuthorization.
 *
 * Properties:
 * <ul>
 *
 * <li>ReturnAuthorizationId: string</li>
 * <li>FulfillmentCenterId: string</li>
 * <li>ReturnToAddress: Address</li>
 * <li>AmazonRmaId: string</li>
 * <li>RmaPageURL: string</li>
 *
 * </ul>
 */
class ReturnAuthorization extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ReturnAuthorizationId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentCenterId'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReturnToAddress'       => ['FieldValue' => null, 'FieldType' => 'Address'],
            'AmazonRmaId'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'RmaPageURL'            => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ReturnAuthorizationId property.
     *
     * @return string returnAuthorizationId
     */
    public function getReturnAuthorizationId()
    {
        return $this->_fields['ReturnAuthorizationId']['FieldValue'];
    }

    /**
     * Set the value of the ReturnAuthorizationId property.
     *
     * @param string returnAuthorizationId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReturnAuthorizationId($value)
    {
        $this->_fields['ReturnAuthorizationId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReturnAuthorizationId is set.
     *
     * @return true if ReturnAuthorizationId is set
     */
    public function isSetReturnAuthorizationId()
    {
        return null !== $this->_fields['ReturnAuthorizationId']['FieldValue'];
    }

    /**
     * Set the value of ReturnAuthorizationId, return this.
     *
     * @param returnAuthorizationId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReturnAuthorizationId($value)
    {
        $this->setReturnAuthorizationId($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentCenterId property.
     *
     * @return string fulfillmentCenterId
     */
    public function getFulfillmentCenterId()
    {
        return $this->_fields['FulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentCenterId property.
     *
     * @param string fulfillmentCenterId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentCenterId($value)
    {
        $this->_fields['FulfillmentCenterId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentCenterId is set.
     *
     * @return true if FulfillmentCenterId is set
     */
    public function isSetFulfillmentCenterId()
    {
        return null !== $this->_fields['FulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentCenterId, return this.
     *
     * @param fulfillmentCenterId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentCenterId($value)
    {
        $this->setFulfillmentCenterId($value);

        return $this;
    }

    /**
     * Get the value of the ReturnToAddress property.
     *
     * @return Address returnToAddress
     */
    public function getReturnToAddress()
    {
        return $this->_fields['ReturnToAddress']['FieldValue'];
    }

    /**
     * Set the value of the ReturnToAddress property.
     *
     * @param Address returnToAddress
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReturnToAddress($value)
    {
        $this->_fields['ReturnToAddress']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReturnToAddress is set.
     *
     * @return true if ReturnToAddress is set
     */
    public function isSetReturnToAddress()
    {
        return null !== $this->_fields['ReturnToAddress']['FieldValue'];
    }

    /**
     * Set the value of ReturnToAddress, return this.
     *
     * @param returnToAddress
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReturnToAddress($value)
    {
        $this->setReturnToAddress($value);

        return $this;
    }

    /**
     * Get the value of the AmazonRmaId property.
     *
     * @return string amazonRmaId
     */
    public function getAmazonRmaId()
    {
        return $this->_fields['AmazonRmaId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonRmaId property.
     *
     * @param string amazonRmaId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonRmaId($value)
    {
        $this->_fields['AmazonRmaId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonRmaId is set.
     *
     * @return true if AmazonRmaId is set
     */
    public function isSetAmazonRmaId()
    {
        return null !== $this->_fields['AmazonRmaId']['FieldValue'];
    }

    /**
     * Set the value of AmazonRmaId, return this.
     *
     * @param amazonRmaId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonRmaId($value)
    {
        $this->setAmazonRmaId($value);

        return $this;
    }

    /**
     * Get the value of the RmaPageURL property.
     *
     * @return string rmaPageURL
     */
    public function getRmaPageURL()
    {
        return $this->_fields['RmaPageURL']['FieldValue'];
    }

    /**
     * Set the value of the RmaPageURL property.
     *
     * @param string rmaPageURL
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRmaPageURL($value)
    {
        $this->_fields['RmaPageURL']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RmaPageURL is set.
     *
     * @return true if RmaPageURL is set
     */
    public function isSetRmaPageURL()
    {
        return null !== $this->_fields['RmaPageURL']['FieldValue'];
    }

    /**
     * Set the value of RmaPageURL, return this.
     *
     * @param rmaPageURL
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRmaPageURL($value)
    {
        $this->setRmaPageURL($value);

        return $this;
    }
}
