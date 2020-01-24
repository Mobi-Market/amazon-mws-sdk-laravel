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
 * GetFulfillmentPreviewRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>MarketplaceId: string</li>
 * <li>Address: Address</li>
 * <li>Items: GetFulfillmentPreviewItemList</li>
 * <li>ShippingSpeedCategories: ShippingSpeedCategoryList</li>
 * <li>IncludeCODFulfillmentPreview: bool</li>
 * <li>IncludeDeliveryWindows: bool</li>
 *
 * </ul>
 */
class GetFulfillmentPreviewRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'                     => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'Marketplace'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'Address'                      => ['FieldValue' => null, 'FieldType' => 'Address'],
            'Items'                        => ['FieldValue' => null, 'FieldType' => 'GetFulfillmentPreviewItemList'],
            'ShippingSpeedCategories'      => ['FieldValue' => null, 'FieldType' => 'ShippingSpeedCategoryList'],
            'IncludeCODFulfillmentPreview' => ['FieldValue' => null, 'FieldType' => 'bool'],
            'IncludeDeliveryWindows'       => ['FieldValue' => null, 'FieldType' => 'bool'],
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
     * Get the value of the Marketplace property.
     *
     * @return string marketplace
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set
     */
    public function isSetMarketplace()
    {
        return null !== $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of Marketplace, return this.
     *
     * @param marketplace
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);

        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return string marketplaceId
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set
     */
    public function isSetMarketplaceId()
    {
        return null !== $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);

        return $this;
    }

    /**
     * Get the value of the Address property.
     *
     * @return Address address
     */
    public function getAddress()
    {
        return $this->_fields['Address']['FieldValue'];
    }

    /**
     * Set the value of the Address property.
     *
     * @param Address address
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAddress($value)
    {
        $this->_fields['Address']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Address is set.
     *
     * @return true if Address is set
     */
    public function isSetAddress()
    {
        return null !== $this->_fields['Address']['FieldValue'];
    }

    /**
     * Set the value of Address, return this.
     *
     * @param address
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAddress($value)
    {
        $this->setAddress($value);

        return $this;
    }

    /**
     * Get the value of the Items property.
     *
     * @return GetFulfillmentPreviewItemList items
     */
    public function getItems()
    {
        return $this->_fields['Items']['FieldValue'];
    }

    /**
     * Set the value of the Items property.
     *
     * @param GetFulfillmentPreviewItemList items
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
     * Get the value of the ShippingSpeedCategories property.
     *
     * @return ShippingSpeedCategoryList shippingSpeedCategories
     */
    public function getShippingSpeedCategories()
    {
        return $this->_fields['ShippingSpeedCategories']['FieldValue'];
    }

    /**
     * Set the value of the ShippingSpeedCategories property.
     *
     * @param ShippingSpeedCategoryList shippingSpeedCategories
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingSpeedCategories($value)
    {
        $this->_fields['ShippingSpeedCategories']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingSpeedCategories is set.
     *
     * @return true if ShippingSpeedCategories is set
     */
    public function isSetShippingSpeedCategories()
    {
        return null !== $this->_fields['ShippingSpeedCategories']['FieldValue'];
    }

    /**
     * Set the value of ShippingSpeedCategories, return this.
     *
     * @param shippingSpeedCategories
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingSpeedCategories($value)
    {
        $this->setShippingSpeedCategories($value);

        return $this;
    }

    /**
     * Check the value of IncludeCODFulfillmentPreview.
     *
     * @return true if IncludeCODFulfillmentPreview is set to true
     */
    public function isIncludeCODFulfillmentPreview()
    {
        return null !== $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'] && $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'];
    }

    /**
     * Get the value of the IncludeCODFulfillmentPreview property.
     *
     * @return bool includeCODFulfillmentPreview
     */
    public function getIncludeCODFulfillmentPreview()
    {
        return $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'];
    }

    /**
     * Set the value of the IncludeCODFulfillmentPreview property.
     *
     * @param bool includeCODFulfillmentPreview
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIncludeCODFulfillmentPreview($value)
    {
        $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IncludeCODFulfillmentPreview is set.
     *
     * @return true if IncludeCODFulfillmentPreview is set
     */
    public function isSetIncludeCODFulfillmentPreview()
    {
        return null !== $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'];
    }

    /**
     * Set the value of IncludeCODFulfillmentPreview, return this.
     *
     * @param includeCODFulfillmentPreview
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIncludeCODFulfillmentPreview($value)
    {
        $this->setIncludeCODFulfillmentPreview($value);

        return $this;
    }

    /**
     * Check the value of IncludeDeliveryWindows.
     *
     * @return true if IncludeDeliveryWindows is set to true
     */
    public function isIncludeDeliveryWindows()
    {
        return null !== $this->_fields['IncludeDeliveryWindows']['FieldValue'] && $this->_fields['IncludeDeliveryWindows']['FieldValue'];
    }

    /**
     * Get the value of the IncludeDeliveryWindows property.
     *
     * @return bool includeDeliveryWindows
     */
    public function getIncludeDeliveryWindows()
    {
        return $this->_fields['IncludeDeliveryWindows']['FieldValue'];
    }

    /**
     * Set the value of the IncludeDeliveryWindows property.
     *
     * @param bool includeDeliveryWindows
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIncludeDeliveryWindows($value)
    {
        $this->_fields['IncludeDeliveryWindows']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IncludeDeliveryWindows is set.
     *
     * @return true if IncludeDeliveryWindows is set
     */
    public function isSetIncludeDeliveryWindows()
    {
        return null !== $this->_fields['IncludeDeliveryWindows']['FieldValue'];
    }

    /**
     * Set the value of IncludeDeliveryWindows, return this.
     *
     * @param includeDeliveryWindows
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIncludeDeliveryWindows($value)
    {
        $this->setIncludeDeliveryWindows($value);

        return $this;
    }
}
