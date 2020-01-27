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
 * CreateFulfillmentReturnRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>SellerFulfillmentOrderId: string</li>
 * <li>Items: CreateReturnItemList</li>
 *
 * </ul>
 */
class CreateFulfillmentReturnRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerFulfillmentOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Items'                    => ['FieldValue' => null, 'FieldType' => 'CreateReturnItemList'],
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
     * Get the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set
     */
    public function isSetMWSAuthToken()
    {
        return null !== $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Get the value of the SellerFulfillmentOrderId property.
     *
     * @return string sellerFulfillmentOrderId
     */
    public function getSellerFulfillmentOrderId()
    {
        return $this->_fields['SellerFulfillmentOrderId']['FieldValue'];
    }

    /**
     * Set the value of the SellerFulfillmentOrderId property.
     *
     * @param string sellerFulfillmentOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerFulfillmentOrderId($value)
    {
        $this->_fields['SellerFulfillmentOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerFulfillmentOrderId is set.
     *
     * @return true if SellerFulfillmentOrderId is set
     */
    public function isSetSellerFulfillmentOrderId()
    {
        return null !== $this->_fields['SellerFulfillmentOrderId']['FieldValue'];
    }

    /**
     * Set the value of SellerFulfillmentOrderId, return this.
     *
     * @param sellerFulfillmentOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerFulfillmentOrderId($value)
    {
        $this->setSellerFulfillmentOrderId($value);

        return $this;
    }

    /**
     * Get the value of the Items property.
     *
     * @return CreateReturnItemList items
     */
    public function getItems()
    {
        return $this->_fields['Items']['FieldValue'];
    }

    /**
     * Set the value of the Items property.
     *
     * @param CreateReturnItemList items
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
}
