<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * FulfillmentOrderItem.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerSKU: string</li>
 * <li>SellerFulfillmentOrderItemId: string</li>
 * <li>Quantity: int</li>
 * <li>GiftMessage: string</li>
 * <li>DisplayableComment: string</li>
 * <li>FulfillmentNetworkSKU: string</li>
 * <li>OrderItemDisposition: string</li>
 * <li>CancelledQuantity: int</li>
 * <li>UnfulfillableQuantity: int</li>
 * <li>EstimatedShipDateTime: string</li>
 * <li>EstimatedArrivalDateTime: string</li>
 * <li>PerUnitPrice: Currency</li>
 * <li>PerUnitTax: Currency</li>
 * <li>PerUnitDeclaredValue: Currency</li>
 *
 * </ul>
 */
class FulfillmentOrderItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerSKU'                    => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerFulfillmentOrderItemId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Quantity'                     => ['FieldValue' => null, 'FieldType' => 'int'],
            'GiftMessage'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'DisplayableComment'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentNetworkSKU'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderItemDisposition'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'CancelledQuantity'            => ['FieldValue' => null, 'FieldType' => 'int'],
            'UnfulfillableQuantity'        => ['FieldValue' => null, 'FieldType' => 'int'],
            'EstimatedShipDateTime'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'EstimatedArrivalDateTime'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'PerUnitPrice'                 => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'PerUnitTax'                   => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'PerUnitDeclaredValue'         => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
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
     * Get the value of the Quantity property.
     *
     * @return int quantity
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set
     */
    public function isSetQuantity()
    {
        return null !== $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);

        return $this;
    }

    /**
     * Get the value of the GiftMessage property.
     *
     * @return string giftMessage
     */
    public function getGiftMessage()
    {
        return $this->_fields['GiftMessage']['FieldValue'];
    }

    /**
     * Set the value of the GiftMessage property.
     *
     * @param string giftMessage
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGiftMessage($value)
    {
        $this->_fields['GiftMessage']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GiftMessage is set.
     *
     * @return true if GiftMessage is set
     */
    public function isSetGiftMessage()
    {
        return null !== $this->_fields['GiftMessage']['FieldValue'];
    }

    /**
     * Set the value of GiftMessage, return this.
     *
     * @param giftMessage
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGiftMessage($value)
    {
        $this->setGiftMessage($value);

        return $this;
    }

    /**
     * Get the value of the DisplayableComment property.
     *
     * @return string displayableComment
     */
    public function getDisplayableComment()
    {
        return $this->_fields['DisplayableComment']['FieldValue'];
    }

    /**
     * Set the value of the DisplayableComment property.
     *
     * @param string displayableComment
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDisplayableComment($value)
    {
        $this->_fields['DisplayableComment']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DisplayableComment is set.
     *
     * @return true if DisplayableComment is set
     */
    public function isSetDisplayableComment()
    {
        return null !== $this->_fields['DisplayableComment']['FieldValue'];
    }

    /**
     * Set the value of DisplayableComment, return this.
     *
     * @param displayableComment
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDisplayableComment($value)
    {
        $this->setDisplayableComment($value);

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
     * Get the value of the OrderItemDisposition property.
     *
     * @return string orderItemDisposition
     */
    public function getOrderItemDisposition()
    {
        return $this->_fields['OrderItemDisposition']['FieldValue'];
    }

    /**
     * Set the value of the OrderItemDisposition property.
     *
     * @param string orderItemDisposition
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderItemDisposition($value)
    {
        $this->_fields['OrderItemDisposition']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderItemDisposition is set.
     *
     * @return true if OrderItemDisposition is set
     */
    public function isSetOrderItemDisposition()
    {
        return null !== $this->_fields['OrderItemDisposition']['FieldValue'];
    }

    /**
     * Set the value of OrderItemDisposition, return this.
     *
     * @param orderItemDisposition
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderItemDisposition($value)
    {
        $this->setOrderItemDisposition($value);

        return $this;
    }

    /**
     * Get the value of the CancelledQuantity property.
     *
     * @return int cancelledQuantity
     */
    public function getCancelledQuantity()
    {
        return $this->_fields['CancelledQuantity']['FieldValue'];
    }

    /**
     * Set the value of the CancelledQuantity property.
     *
     * @param int cancelledQuantity
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCancelledQuantity($value)
    {
        $this->_fields['CancelledQuantity']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CancelledQuantity is set.
     *
     * @return true if CancelledQuantity is set
     */
    public function isSetCancelledQuantity()
    {
        return null !== $this->_fields['CancelledQuantity']['FieldValue'];
    }

    /**
     * Set the value of CancelledQuantity, return this.
     *
     * @param cancelledQuantity
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCancelledQuantity($value)
    {
        $this->setCancelledQuantity($value);

        return $this;
    }

    /**
     * Get the value of the UnfulfillableQuantity property.
     *
     * @return int unfulfillableQuantity
     */
    public function getUnfulfillableQuantity()
    {
        return $this->_fields['UnfulfillableQuantity']['FieldValue'];
    }

    /**
     * Set the value of the UnfulfillableQuantity property.
     *
     * @param int unfulfillableQuantity
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setUnfulfillableQuantity($value)
    {
        $this->_fields['UnfulfillableQuantity']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if UnfulfillableQuantity is set.
     *
     * @return true if UnfulfillableQuantity is set
     */
    public function isSetUnfulfillableQuantity()
    {
        return null !== $this->_fields['UnfulfillableQuantity']['FieldValue'];
    }

    /**
     * Set the value of UnfulfillableQuantity, return this.
     *
     * @param unfulfillableQuantity
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withUnfulfillableQuantity($value)
    {
        $this->setUnfulfillableQuantity($value);

        return $this;
    }

    /**
     * Get the value of the EstimatedShipDateTime property.
     *
     * @return XMLGregorianCalendar estimatedShipDateTime
     */
    public function getEstimatedShipDateTime()
    {
        return $this->_fields['EstimatedShipDateTime']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedShipDateTime property.
     *
     * @param string estimatedShipDateTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEstimatedShipDateTime($value)
    {
        $this->_fields['EstimatedShipDateTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EstimatedShipDateTime is set.
     *
     * @return true if EstimatedShipDateTime is set
     */
    public function isSetEstimatedShipDateTime()
    {
        return null !== $this->_fields['EstimatedShipDateTime']['FieldValue'];
    }

    /**
     * Set the value of EstimatedShipDateTime, return this.
     *
     * @param estimatedShipDateTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEstimatedShipDateTime($value)
    {
        $this->setEstimatedShipDateTime($value);

        return $this;
    }

    /**
     * Get the value of the EstimatedArrivalDateTime property.
     *
     * @return XMLGregorianCalendar estimatedArrivalDateTime
     */
    public function getEstimatedArrivalDateTime()
    {
        return $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedArrivalDateTime property.
     *
     * @param string estimatedArrivalDateTime
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEstimatedArrivalDateTime($value)
    {
        $this->_fields['EstimatedArrivalDateTime']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EstimatedArrivalDateTime is set.
     *
     * @return true if EstimatedArrivalDateTime is set
     */
    public function isSetEstimatedArrivalDateTime()
    {
        return null !== $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }

    /**
     * Set the value of EstimatedArrivalDateTime, return this.
     *
     * @param estimatedArrivalDateTime
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEstimatedArrivalDateTime($value)
    {
        $this->setEstimatedArrivalDateTime($value);

        return $this;
    }

    /**
     * Get the value of the PerUnitPrice property.
     *
     * @return Currency perUnitPrice
     */
    public function getPerUnitPrice()
    {
        return $this->_fields['PerUnitPrice']['FieldValue'];
    }

    /**
     * Set the value of the PerUnitPrice property.
     *
     * @param Currency perUnitPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPerUnitPrice($value)
    {
        $this->_fields['PerUnitPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PerUnitPrice is set.
     *
     * @return true if PerUnitPrice is set
     */
    public function isSetPerUnitPrice()
    {
        return null !== $this->_fields['PerUnitPrice']['FieldValue'];
    }

    /**
     * Set the value of PerUnitPrice, return this.
     *
     * @param perUnitPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPerUnitPrice($value)
    {
        $this->setPerUnitPrice($value);

        return $this;
    }

    /**
     * Get the value of the PerUnitTax property.
     *
     * @return Currency perUnitTax
     */
    public function getPerUnitTax()
    {
        return $this->_fields['PerUnitTax']['FieldValue'];
    }

    /**
     * Set the value of the PerUnitTax property.
     *
     * @param Currency perUnitTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPerUnitTax($value)
    {
        $this->_fields['PerUnitTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PerUnitTax is set.
     *
     * @return true if PerUnitTax is set
     */
    public function isSetPerUnitTax()
    {
        return null !== $this->_fields['PerUnitTax']['FieldValue'];
    }

    /**
     * Set the value of PerUnitTax, return this.
     *
     * @param perUnitTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPerUnitTax($value)
    {
        $this->setPerUnitTax($value);

        return $this;
    }

    /**
     * Get the value of the PerUnitDeclaredValue property.
     *
     * @return Currency perUnitDeclaredValue
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->_fields['PerUnitDeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of the PerUnitDeclaredValue property.
     *
     * @param Currency perUnitDeclaredValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPerUnitDeclaredValue($value)
    {
        $this->_fields['PerUnitDeclaredValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PerUnitDeclaredValue is set.
     *
     * @return true if PerUnitDeclaredValue is set
     */
    public function isSetPerUnitDeclaredValue()
    {
        return null !== $this->_fields['PerUnitDeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of PerUnitDeclaredValue, return this.
     *
     * @param perUnitDeclaredValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPerUnitDeclaredValue($value)
    {
        $this->setPerUnitDeclaredValue($value);

        return $this;
    }
}
