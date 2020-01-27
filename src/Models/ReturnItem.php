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
 * ReturnItem.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerReturnItemId: string</li>
 * <li>SellerFulfillmentOrderItemId: string</li>
 * <li>AmazonShipmentId: string</li>
 * <li>SellerReturnReasonCode: string</li>
 * <li>ReturnComment: string</li>
 * <li>AmazonReturnReasonCode: string</li>
 * <li>Status: string</li>
 * <li>StatusChangedDate: string</li>
 * <li>ReturnAuthorizationId: string</li>
 * <li>ReturnReceivedCondition: string</li>
 * <li>FulfillmentCenterId: string</li>
 *
 * </ul>
 */
class ReturnItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerReturnItemId'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerFulfillmentOrderItemId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmazonShipmentId'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerReturnReasonCode'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReturnComment'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmazonReturnReasonCode'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'Status'                       => ['FieldValue' => null, 'FieldType' => 'string'],
            'StatusChangedDate'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReturnAuthorizationId'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'ReturnReceivedCondition'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentCenterId'          => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerReturnItemId property.
     *
     * @return string sellerReturnItemId
     */
    public function getSellerReturnItemId()
    {
        return $this->_fields['SellerReturnItemId']['FieldValue'];
    }

    /**
     * Set the value of the SellerReturnItemId property.
     *
     * @param string sellerReturnItemId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerReturnItemId($value)
    {
        $this->_fields['SellerReturnItemId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerReturnItemId is set.
     *
     * @return true if SellerReturnItemId is set
     */
    public function isSetSellerReturnItemId()
    {
        return null !== $this->_fields['SellerReturnItemId']['FieldValue'];
    }

    /**
     * Set the value of SellerReturnItemId, return this.
     *
     * @param sellerReturnItemId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerReturnItemId($value)
    {
        $this->setSellerReturnItemId($value);

        return $this;
    }

    /**
     * Get the value of the SellerFulfillmentOrderItemId property.
     *
     * @return string sellerFulfillmentOrderItemId
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerFulfillmentOrderItemId($value)
    {
        $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerFulfillmentOrderItemId is set.
     *
     * @return true if SellerFulfillmentOrderItemId is set
     */
    public function isSetSellerFulfillmentOrderItemId()
    {
        return null !== $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }

    /**
     * Set the value of SellerFulfillmentOrderItemId, return this.
     *
     * @param sellerFulfillmentOrderItemId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerFulfillmentOrderItemId($value)
    {
        $this->setSellerFulfillmentOrderItemId($value);

        return $this;
    }

    /**
     * Get the value of the AmazonShipmentId property.
     *
     * @return string amazonShipmentId
     */
    public function getAmazonShipmentId()
    {
        return $this->_fields['AmazonShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonShipmentId property.
     *
     * @param string amazonShipmentId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonShipmentId($value)
    {
        $this->_fields['AmazonShipmentId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonShipmentId is set.
     *
     * @return true if AmazonShipmentId is set
     */
    public function isSetAmazonShipmentId()
    {
        return null !== $this->_fields['AmazonShipmentId']['FieldValue'];
    }

    /**
     * Set the value of AmazonShipmentId, return this.
     *
     * @param amazonShipmentId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonShipmentId($value)
    {
        $this->setAmazonShipmentId($value);

        return $this;
    }

    /**
     * Get the value of the SellerReturnReasonCode property.
     *
     * @return string sellerReturnReasonCode
     */
    public function getSellerReturnReasonCode()
    {
        return $this->_fields['SellerReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the SellerReturnReasonCode property.
     *
     * @param string sellerReturnReasonCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerReturnReasonCode($value)
    {
        $this->_fields['SellerReturnReasonCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerReturnReasonCode is set.
     *
     * @return true if SellerReturnReasonCode is set
     */
    public function isSetSellerReturnReasonCode()
    {
        return null !== $this->_fields['SellerReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of SellerReturnReasonCode, return this.
     *
     * @param sellerReturnReasonCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerReturnReasonCode($value)
    {
        $this->setSellerReturnReasonCode($value);

        return $this;
    }

    /**
     * Get the value of the ReturnComment property.
     *
     * @return string returnComment
     */
    public function getReturnComment()
    {
        return $this->_fields['ReturnComment']['FieldValue'];
    }

    /**
     * Set the value of the ReturnComment property.
     *
     * @param string returnComment
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReturnComment($value)
    {
        $this->_fields['ReturnComment']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReturnComment is set.
     *
     * @return true if ReturnComment is set
     */
    public function isSetReturnComment()
    {
        return null !== $this->_fields['ReturnComment']['FieldValue'];
    }

    /**
     * Set the value of ReturnComment, return this.
     *
     * @param returnComment
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReturnComment($value)
    {
        $this->setReturnComment($value);

        return $this;
    }

    /**
     * Get the value of the AmazonReturnReasonCode property.
     *
     * @return string amazonReturnReasonCode
     */
    public function getAmazonReturnReasonCode()
    {
        return $this->_fields['AmazonReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the AmazonReturnReasonCode property.
     *
     * @param string amazonReturnReasonCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonReturnReasonCode($value)
    {
        $this->_fields['AmazonReturnReasonCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonReturnReasonCode is set.
     *
     * @return true if AmazonReturnReasonCode is set
     */
    public function isSetAmazonReturnReasonCode()
    {
        return null !== $this->_fields['AmazonReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of AmazonReturnReasonCode, return this.
     *
     * @param amazonReturnReasonCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonReturnReasonCode($value)
    {
        $this->setAmazonReturnReasonCode($value);

        return $this;
    }

    /**
     * Get the value of the Status property.
     *
     * @return string status
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set
     */
    public function isSetStatus()
    {
        return null !== $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withStatus($value)
    {
        $this->setStatus($value);

        return $this;
    }

    /**
     * Get the value of the StatusChangedDate property.
     *
     * @return XMLGregorianCalendar statusChangedDate
     */
    public function getStatusChangedDate()
    {
        return $this->_fields['StatusChangedDate']['FieldValue'];
    }

    /**
     * Set the value of the StatusChangedDate property.
     *
     * @param string statusChangedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStatusChangedDate($value)
    {
        $this->_fields['StatusChangedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if StatusChangedDate is set.
     *
     * @return true if StatusChangedDate is set
     */
    public function isSetStatusChangedDate()
    {
        return null !== $this->_fields['StatusChangedDate']['FieldValue'];
    }

    /**
     * Set the value of StatusChangedDate, return this.
     *
     * @param statusChangedDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withStatusChangedDate($value)
    {
        $this->setStatusChangedDate($value);

        return $this;
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
     * Get the value of the ReturnReceivedCondition property.
     *
     * @return string returnReceivedCondition
     */
    public function getReturnReceivedCondition()
    {
        return $this->_fields['ReturnReceivedCondition']['FieldValue'];
    }

    /**
     * Set the value of the ReturnReceivedCondition property.
     *
     * @param string returnReceivedCondition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReturnReceivedCondition($value)
    {
        $this->_fields['ReturnReceivedCondition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReturnReceivedCondition is set.
     *
     * @return true if ReturnReceivedCondition is set
     */
    public function isSetReturnReceivedCondition()
    {
        return null !== $this->_fields['ReturnReceivedCondition']['FieldValue'];
    }

    /**
     * Set the value of ReturnReceivedCondition, return this.
     *
     * @param returnReceivedCondition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReturnReceivedCondition($value)
    {
        $this->setReturnReceivedCondition($value);

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
}
