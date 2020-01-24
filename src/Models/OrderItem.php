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
 * OrderItem.
 *
 * Properties:
 * <ul>
 *
 * <li>ASIN: string</li>
 * <li>SellerSKU: string</li>
 * <li>OrderItemId: string</li>
 * <li>Title: string</li>
 * <li>QuantityOrdered: int</li>
 * <li>QuantityShipped: int</li>
 * <li>ProductInfo: ProductInfoDetail</li>
 * <li>PointsGranted: PointsGrantedDetail</li>
 * <li>ItemPrice: Money</li>
 * <li>ShippingPrice: Money</li>
 * <li>GiftWrapPrice: Money</li>
 * <li>ItemTax: Money</li>
 * <li>ShippingTax: Money</li>
 * <li>GiftWrapTax: Money</li>
 * <li>ShippingDiscount: Money</li>
 * <li>ShippingDiscountTax: Money</li>
 * <li>PromotionDiscount: Money</li>
 * <li>PromotionDiscountTax: Money</li>
 * <li>PromotionIds: array</li>
 * <li>CODFee: Money</li>
 * <li>CODFeeDiscount: Money</li>
 * <li>IsGift: bool</li>
 * <li>GiftMessageText: string</li>
 * <li>GiftWrapLevel: string</li>
 * <li>InvoiceData: InvoiceData</li>
 * <li>ConditionNote: string</li>
 * <li>ConditionId: string</li>
 * <li>ConditionSubtypeId: string</li>
 * <li>ScheduledDeliveryStartDate: string</li>
 * <li>ScheduledDeliveryEndDate: string</li>
 * <li>PriceDesignation: string</li>
 * <li>BuyerCustomizedInfo: BuyerCustomizedInfoDetail</li>
 * <li>TaxCollection: TaxCollection</li>
 * <li>SerialNumberRequired: bool</li>
 * <li>IsTransparency: bool</li>
 *
 * </ul>
 */
class OrderItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ASIN'                       => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerSKU'                  => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderItemId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'Title'                      => ['FieldValue' => null, 'FieldType' => 'string'],
            'QuantityOrdered'            => ['FieldValue' => null, 'FieldType' => 'int'],
            'QuantityShipped'            => ['FieldValue' => null, 'FieldType' => 'int'],
            'ProductInfo'                => ['FieldValue' => null, 'FieldType' => 'ProductInfoDetail'],
            'PointsGranted'              => ['FieldValue' => null, 'FieldType' => 'PointsGrantedDetail'],
            'ItemPrice'                  => ['FieldValue' => null, 'FieldType' => 'Money'],
            'ShippingPrice'              => ['FieldValue' => null, 'FieldType' => 'Money'],
            'GiftWrapPrice'              => ['FieldValue' => null, 'FieldType' => 'Money'],
            'ItemTax'                    => ['FieldValue' => null, 'FieldType' => 'Money'],
            'ShippingTax'                => ['FieldValue' => null, 'FieldType' => 'Money'],
            'GiftWrapTax'                => ['FieldValue' => null, 'FieldType' => 'Money'],
            'ShippingDiscount'           => ['FieldValue' => null, 'FieldType' => 'Money'],
            'ShippingDiscountTax'        => ['FieldValue' => null, 'FieldType' => 'Money'],
            'PromotionDiscount'          => ['FieldValue' => null, 'FieldType' => 'Money'],
            'PromotionDiscountTax'       => ['FieldValue' => null, 'FieldType' => 'Money'],
            'PromotionIds'               => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'PromotionId'],
            'CODFee'                     => ['FieldValue' => null, 'FieldType' => 'Money'],
            'CODFeeDiscount'             => ['FieldValue' => null, 'FieldType' => 'Money'],
            'IsGift'                     => ['FieldValue' => null, 'FieldType' => 'bool'],
            'GiftMessageText'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'GiftWrapLevel'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'InvoiceData'                => ['FieldValue' => null, 'FieldType' => 'InvoiceData'],
            'ConditionNote'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'ConditionId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'ConditionSubtypeId'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'ScheduledDeliveryStartDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ScheduledDeliveryEndDate'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'PriceDesignation'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerCustomizedInfo'        => ['FieldValue' => null, 'FieldType' => 'BuyerCustomizedInfoDetail'],
            'TaxCollection'              => ['FieldValue' => null, 'FieldType' => 'TaxCollection'],
            'SerialNumberRequired'       => ['FieldValue' => null, 'FieldType' => 'bool'],
            'IsTransparency'             => ['FieldValue' => null, 'FieldType' => 'bool'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return string ASIN
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set
     */
    public function isSetASIN()
    {
        return null !== $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withASIN($value)
    {
        $this->setASIN($value);

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
     * Get the value of the OrderItemId property.
     *
     * @return string orderItemId
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if OrderItemId is set.
     *
     * @return true if OrderItemId is set
     */
    public function isSetOrderItemId()
    {
        return null !== $this->_fields['OrderItemId']['FieldValue'];
    }

    /**
     * Set the value of OrderItemId, return this.
     *
     * @param orderItemId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOrderItemId($value)
    {
        $this->setOrderItemId($value);

        return $this;
    }

    /**
     * Get the value of the Title property.
     *
     * @return string title
     */
    public function getTitle()
    {
        return $this->_fields['Title']['FieldValue'];
    }

    /**
     * Set the value of the Title property.
     *
     * @param string title
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTitle($value)
    {
        $this->_fields['Title']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Title is set.
     *
     * @return true if Title is set
     */
    public function isSetTitle()
    {
        return null !== $this->_fields['Title']['FieldValue'];
    }

    /**
     * Set the value of Title, return this.
     *
     * @param title
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTitle($value)
    {
        $this->setTitle($value);

        return $this;
    }

    /**
     * Get the value of the QuantityOrdered property.
     *
     * @return int quantityOrdered
     */
    public function getQuantityOrdered()
    {
        return $this->_fields['QuantityOrdered']['FieldValue'];
    }

    /**
     * Set the value of the QuantityOrdered property.
     *
     * @param int quantityOrdered
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQuantityOrdered($value)
    {
        $this->_fields['QuantityOrdered']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if QuantityOrdered is set.
     *
     * @return true if QuantityOrdered is set
     */
    public function isSetQuantityOrdered()
    {
        return null !== $this->_fields['QuantityOrdered']['FieldValue'];
    }

    /**
     * Set the value of QuantityOrdered, return this.
     *
     * @param quantityOrdered
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQuantityOrdered($value)
    {
        $this->setQuantityOrdered($value);

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
     * Get the value of the ProductInfo property.
     *
     * @return ProductInfoDetail productInfo
     */
    public function getProductInfo()
    {
        return $this->_fields['ProductInfo']['FieldValue'];
    }

    /**
     * Set the value of the ProductInfo property.
     *
     * @param ProductInfoDetail productInfo
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProductInfo($value)
    {
        $this->_fields['ProductInfo']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ProductInfo is set.
     *
     * @return true if ProductInfo is set
     */
    public function isSetProductInfo()
    {
        return null !== $this->_fields['ProductInfo']['FieldValue'];
    }

    /**
     * Set the value of ProductInfo, return this.
     *
     * @param productInfo
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProductInfo($value)
    {
        $this->setProductInfo($value);

        return $this;
    }

    /**
     * Get the value of the PointsGranted property.
     *
     * @return PointsGrantedDetail pointsGranted
     */
    public function getPointsGranted()
    {
        return $this->_fields['PointsGranted']['FieldValue'];
    }

    /**
     * Set the value of the PointsGranted property.
     *
     * @param PointsGrantedDetail pointsGranted
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPointsGranted($value)
    {
        $this->_fields['PointsGranted']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PointsGranted is set.
     *
     * @return true if PointsGranted is set
     */
    public function isSetPointsGranted()
    {
        return null !== $this->_fields['PointsGranted']['FieldValue'];
    }

    /**
     * Set the value of PointsGranted, return this.
     *
     * @param pointsGranted
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPointsGranted($value)
    {
        $this->setPointsGranted($value);

        return $this;
    }

    /**
     * Get the value of the ItemPrice property.
     *
     * @return Money itemPrice
     */
    public function getItemPrice()
    {
        return $this->_fields['ItemPrice']['FieldValue'];
    }

    /**
     * Set the value of the ItemPrice property.
     *
     * @param Money itemPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemPrice($value)
    {
        $this->_fields['ItemPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemPrice is set.
     *
     * @return true if ItemPrice is set
     */
    public function isSetItemPrice()
    {
        return null !== $this->_fields['ItemPrice']['FieldValue'];
    }

    /**
     * Set the value of ItemPrice, return this.
     *
     * @param itemPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemPrice($value)
    {
        $this->setItemPrice($value);

        return $this;
    }

    /**
     * Get the value of the ShippingPrice property.
     *
     * @return Money shippingPrice
     */
    public function getShippingPrice()
    {
        return $this->_fields['ShippingPrice']['FieldValue'];
    }

    /**
     * Set the value of the ShippingPrice property.
     *
     * @param Money shippingPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingPrice($value)
    {
        $this->_fields['ShippingPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingPrice is set.
     *
     * @return true if ShippingPrice is set
     */
    public function isSetShippingPrice()
    {
        return null !== $this->_fields['ShippingPrice']['FieldValue'];
    }

    /**
     * Set the value of ShippingPrice, return this.
     *
     * @param shippingPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingPrice($value)
    {
        $this->setShippingPrice($value);

        return $this;
    }

    /**
     * Get the value of the GiftWrapPrice property.
     *
     * @return Money giftWrapPrice
     */
    public function getGiftWrapPrice()
    {
        return $this->_fields['GiftWrapPrice']['FieldValue'];
    }

    /**
     * Set the value of the GiftWrapPrice property.
     *
     * @param Money giftWrapPrice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGiftWrapPrice($value)
    {
        $this->_fields['GiftWrapPrice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GiftWrapPrice is set.
     *
     * @return true if GiftWrapPrice is set
     */
    public function isSetGiftWrapPrice()
    {
        return null !== $this->_fields['GiftWrapPrice']['FieldValue'];
    }

    /**
     * Set the value of GiftWrapPrice, return this.
     *
     * @param giftWrapPrice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGiftWrapPrice($value)
    {
        $this->setGiftWrapPrice($value);

        return $this;
    }

    /**
     * Get the value of the ItemTax property.
     *
     * @return Money itemTax
     */
    public function getItemTax()
    {
        return $this->_fields['ItemTax']['FieldValue'];
    }

    /**
     * Set the value of the ItemTax property.
     *
     * @param Money itemTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemTax($value)
    {
        $this->_fields['ItemTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemTax is set.
     *
     * @return true if ItemTax is set
     */
    public function isSetItemTax()
    {
        return null !== $this->_fields['ItemTax']['FieldValue'];
    }

    /**
     * Set the value of ItemTax, return this.
     *
     * @param itemTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemTax($value)
    {
        $this->setItemTax($value);

        return $this;
    }

    /**
     * Get the value of the ShippingTax property.
     *
     * @return Money shippingTax
     */
    public function getShippingTax()
    {
        return $this->_fields['ShippingTax']['FieldValue'];
    }

    /**
     * Set the value of the ShippingTax property.
     *
     * @param Money shippingTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingTax($value)
    {
        $this->_fields['ShippingTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingTax is set.
     *
     * @return true if ShippingTax is set
     */
    public function isSetShippingTax()
    {
        return null !== $this->_fields['ShippingTax']['FieldValue'];
    }

    /**
     * Set the value of ShippingTax, return this.
     *
     * @param shippingTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingTax($value)
    {
        $this->setShippingTax($value);

        return $this;
    }

    /**
     * Get the value of the GiftWrapTax property.
     *
     * @return Money giftWrapTax
     */
    public function getGiftWrapTax()
    {
        return $this->_fields['GiftWrapTax']['FieldValue'];
    }

    /**
     * Set the value of the GiftWrapTax property.
     *
     * @param Money giftWrapTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGiftWrapTax($value)
    {
        $this->_fields['GiftWrapTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GiftWrapTax is set.
     *
     * @return true if GiftWrapTax is set
     */
    public function isSetGiftWrapTax()
    {
        return null !== $this->_fields['GiftWrapTax']['FieldValue'];
    }

    /**
     * Set the value of GiftWrapTax, return this.
     *
     * @param giftWrapTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGiftWrapTax($value)
    {
        $this->setGiftWrapTax($value);

        return $this;
    }

    /**
     * Get the value of the ShippingDiscount property.
     *
     * @return Money shippingDiscount
     */
    public function getShippingDiscount()
    {
        return $this->_fields['ShippingDiscount']['FieldValue'];
    }

    /**
     * Set the value of the ShippingDiscount property.
     *
     * @param Money shippingDiscount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingDiscount($value)
    {
        $this->_fields['ShippingDiscount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingDiscount is set.
     *
     * @return true if ShippingDiscount is set
     */
    public function isSetShippingDiscount()
    {
        return null !== $this->_fields['ShippingDiscount']['FieldValue'];
    }

    /**
     * Set the value of ShippingDiscount, return this.
     *
     * @param shippingDiscount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingDiscount($value)
    {
        $this->setShippingDiscount($value);

        return $this;
    }

    /**
     * Get the value of the ShippingDiscountTax property.
     *
     * @return Money shippingDiscountTax
     */
    public function getShippingDiscountTax()
    {
        return $this->_fields['ShippingDiscountTax']['FieldValue'];
    }

    /**
     * Set the value of the ShippingDiscountTax property.
     *
     * @param Money shippingDiscountTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingDiscountTax($value)
    {
        $this->_fields['ShippingDiscountTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingDiscountTax is set.
     *
     * @return true if ShippingDiscountTax is set
     */
    public function isSetShippingDiscountTax()
    {
        return null !== $this->_fields['ShippingDiscountTax']['FieldValue'];
    }

    /**
     * Set the value of ShippingDiscountTax, return this.
     *
     * @param shippingDiscountTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingDiscountTax($value)
    {
        $this->setShippingDiscountTax($value);

        return $this;
    }

    /**
     * Get the value of the PromotionDiscount property.
     *
     * @return Money promotionDiscount
     */
    public function getPromotionDiscount()
    {
        return $this->_fields['PromotionDiscount']['FieldValue'];
    }

    /**
     * Set the value of the PromotionDiscount property.
     *
     * @param Money promotionDiscount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromotionDiscount($value)
    {
        $this->_fields['PromotionDiscount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PromotionDiscount is set.
     *
     * @return true if PromotionDiscount is set
     */
    public function isSetPromotionDiscount()
    {
        return null !== $this->_fields['PromotionDiscount']['FieldValue'];
    }

    /**
     * Set the value of PromotionDiscount, return this.
     *
     * @param promotionDiscount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPromotionDiscount($value)
    {
        $this->setPromotionDiscount($value);

        return $this;
    }

    /**
     * Get the value of the PromotionDiscountTax property.
     *
     * @return Money promotionDiscountTax
     */
    public function getPromotionDiscountTax()
    {
        return $this->_fields['PromotionDiscountTax']['FieldValue'];
    }

    /**
     * Set the value of the PromotionDiscountTax property.
     *
     * @param Money promotionDiscountTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromotionDiscountTax($value)
    {
        $this->_fields['PromotionDiscountTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PromotionDiscountTax is set.
     *
     * @return true if PromotionDiscountTax is set
     */
    public function isSetPromotionDiscountTax()
    {
        return null !== $this->_fields['PromotionDiscountTax']['FieldValue'];
    }

    /**
     * Set the value of PromotionDiscountTax, return this.
     *
     * @param promotionDiscountTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPromotionDiscountTax($value)
    {
        $this->setPromotionDiscountTax($value);

        return $this;
    }

    /**
     * Get the value of the PromotionIds property.
     *
     * @return List<String> promotionIds
     */
    public function getPromotionIds()
    {
        if (null == $this->_fields['PromotionIds']['FieldValue']) {
            $this->_fields['PromotionIds']['FieldValue'] = [];
        }

        return $this->_fields['PromotionIds']['FieldValue'];
    }

    /**
     * Set the value of the PromotionIds property.
     *
     * @param array promotionIds
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPromotionIds($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PromotionIds']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PromotionIds.
     */
    public function unsetPromotionIds(): void
    {
        $this->_fields['PromotionIds']['FieldValue'] = [];
    }

    /**
     * Check to see if PromotionIds is set.
     *
     * @return true if PromotionIds is set
     */
    public function isSetPromotionIds()
    {
        return !empty($this->_fields['PromotionIds']['FieldValue']);
    }

    /**
     * Add values for PromotionIds, return this.
     *
     * @param promotionIds
     *             New values to add
     *
     * @return $this instance
     */
    public function withPromotionIds()
    {
        foreach (\func_get_args() as $PromotionIds) {
            $this->_fields['PromotionIds']['FieldValue'][] = $PromotionIds;
        }

        return $this;
    }

    /**
     * Get the value of the CODFee property.
     *
     * @return money CODFee
     */
    public function getCODFee()
    {
        return $this->_fields['CODFee']['FieldValue'];
    }

    /**
     * Set the value of the CODFee property.
     *
     * @param Money codFee
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCODFee($value)
    {
        $this->_fields['CODFee']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CODFee is set.
     *
     * @return true if CODFee is set
     */
    public function isSetCODFee()
    {
        return null !== $this->_fields['CODFee']['FieldValue'];
    }

    /**
     * Set the value of CODFee, return this.
     *
     * @param codFee
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCODFee($value)
    {
        $this->setCODFee($value);

        return $this;
    }

    /**
     * Get the value of the CODFeeDiscount property.
     *
     * @return money CODFeeDiscount
     */
    public function getCODFeeDiscount()
    {
        return $this->_fields['CODFeeDiscount']['FieldValue'];
    }

    /**
     * Set the value of the CODFeeDiscount property.
     *
     * @param Money codFeeDiscount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCODFeeDiscount($value)
    {
        $this->_fields['CODFeeDiscount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CODFeeDiscount is set.
     *
     * @return true if CODFeeDiscount is set
     */
    public function isSetCODFeeDiscount()
    {
        return null !== $this->_fields['CODFeeDiscount']['FieldValue'];
    }

    /**
     * Set the value of CODFeeDiscount, return this.
     *
     * @param codFeeDiscount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCODFeeDiscount($value)
    {
        $this->setCODFeeDiscount($value);

        return $this;
    }

    /**
     * Check the value of IsGift.
     *
     * @return true if IsGift is set to true
     */
    public function isIsGift()
    {
        return null !== $this->_fields['IsGift']['FieldValue'] && $this->_fields['IsGift']['FieldValue'];
    }

    /**
     * Get the value of the IsGift property.
     *
     * @return bool isGift
     */
    public function getIsGift()
    {
        return $this->_fields['IsGift']['FieldValue'];
    }

    /**
     * Set the value of the IsGift property.
     *
     * @param bool isGift
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsGift($value)
    {
        $this->_fields['IsGift']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsGift is set.
     *
     * @return true if IsGift is set
     */
    public function isSetIsGift()
    {
        return null !== $this->_fields['IsGift']['FieldValue'];
    }

    /**
     * Set the value of IsGift, return this.
     *
     * @param isGift
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsGift($value)
    {
        $this->setIsGift($value);

        return $this;
    }

    /**
     * Get the value of the GiftMessageText property.
     *
     * @return string giftMessageText
     */
    public function getGiftMessageText()
    {
        return $this->_fields['GiftMessageText']['FieldValue'];
    }

    /**
     * Set the value of the GiftMessageText property.
     *
     * @param string giftMessageText
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGiftMessageText($value)
    {
        $this->_fields['GiftMessageText']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GiftMessageText is set.
     *
     * @return true if GiftMessageText is set
     */
    public function isSetGiftMessageText()
    {
        return null !== $this->_fields['GiftMessageText']['FieldValue'];
    }

    /**
     * Set the value of GiftMessageText, return this.
     *
     * @param giftMessageText
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGiftMessageText($value)
    {
        $this->setGiftMessageText($value);

        return $this;
    }

    /**
     * Get the value of the GiftWrapLevel property.
     *
     * @return string giftWrapLevel
     */
    public function getGiftWrapLevel()
    {
        return $this->_fields['GiftWrapLevel']['FieldValue'];
    }

    /**
     * Set the value of the GiftWrapLevel property.
     *
     * @param string giftWrapLevel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setGiftWrapLevel($value)
    {
        $this->_fields['GiftWrapLevel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if GiftWrapLevel is set.
     *
     * @return true if GiftWrapLevel is set
     */
    public function isSetGiftWrapLevel()
    {
        return null !== $this->_fields['GiftWrapLevel']['FieldValue'];
    }

    /**
     * Set the value of GiftWrapLevel, return this.
     *
     * @param giftWrapLevel
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withGiftWrapLevel($value)
    {
        $this->setGiftWrapLevel($value);

        return $this;
    }

    /**
     * Get the value of the InvoiceData property.
     *
     * @return InvoiceData invoiceData
     */
    public function getInvoiceData()
    {
        return $this->_fields['InvoiceData']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceData property.
     *
     * @param InvoiceData invoiceData
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvoiceData($value)
    {
        $this->_fields['InvoiceData']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InvoiceData is set.
     *
     * @return true if InvoiceData is set
     */
    public function isSetInvoiceData()
    {
        return null !== $this->_fields['InvoiceData']['FieldValue'];
    }

    /**
     * Set the value of InvoiceData, return this.
     *
     * @param invoiceData
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInvoiceData($value)
    {
        $this->setInvoiceData($value);

        return $this;
    }

    /**
     * Get the value of the ConditionNote property.
     *
     * @return string conditionNote
     */
    public function getConditionNote()
    {
        return $this->_fields['ConditionNote']['FieldValue'];
    }

    /**
     * Set the value of the ConditionNote property.
     *
     * @param string conditionNote
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConditionNote($value)
    {
        $this->_fields['ConditionNote']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ConditionNote is set.
     *
     * @return true if ConditionNote is set
     */
    public function isSetConditionNote()
    {
        return null !== $this->_fields['ConditionNote']['FieldValue'];
    }

    /**
     * Set the value of ConditionNote, return this.
     *
     * @param conditionNote
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withConditionNote($value)
    {
        $this->setConditionNote($value);

        return $this;
    }

    /**
     * Get the value of the ConditionId property.
     *
     * @return string conditionId
     */
    public function getConditionId()
    {
        return $this->_fields['ConditionId']['FieldValue'];
    }

    /**
     * Set the value of the ConditionId property.
     *
     * @param string conditionId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConditionId($value)
    {
        $this->_fields['ConditionId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ConditionId is set.
     *
     * @return true if ConditionId is set
     */
    public function isSetConditionId()
    {
        return null !== $this->_fields['ConditionId']['FieldValue'];
    }

    /**
     * Set the value of ConditionId, return this.
     *
     * @param conditionId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withConditionId($value)
    {
        $this->setConditionId($value);

        return $this;
    }

    /**
     * Get the value of the ConditionSubtypeId property.
     *
     * @return string conditionSubtypeId
     */
    public function getConditionSubtypeId()
    {
        return $this->_fields['ConditionSubtypeId']['FieldValue'];
    }

    /**
     * Set the value of the ConditionSubtypeId property.
     *
     * @param string conditionSubtypeId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setConditionSubtypeId($value)
    {
        $this->_fields['ConditionSubtypeId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ConditionSubtypeId is set.
     *
     * @return true if ConditionSubtypeId is set
     */
    public function isSetConditionSubtypeId()
    {
        return null !== $this->_fields['ConditionSubtypeId']['FieldValue'];
    }

    /**
     * Set the value of ConditionSubtypeId, return this.
     *
     * @param conditionSubtypeId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withConditionSubtypeId($value)
    {
        $this->setConditionSubtypeId($value);

        return $this;
    }

    /**
     * Get the value of the ScheduledDeliveryStartDate property.
     *
     * @return string scheduledDeliveryStartDate
     */
    public function getScheduledDeliveryStartDate()
    {
        return $this->_fields['ScheduledDeliveryStartDate']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledDeliveryStartDate property.
     *
     * @param string scheduledDeliveryStartDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledDeliveryStartDate($value)
    {
        $this->_fields['ScheduledDeliveryStartDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ScheduledDeliveryStartDate is set.
     *
     * @return true if ScheduledDeliveryStartDate is set
     */
    public function isSetScheduledDeliveryStartDate()
    {
        return null !== $this->_fields['ScheduledDeliveryStartDate']['FieldValue'];
    }

    /**
     * Set the value of ScheduledDeliveryStartDate, return this.
     *
     * @param scheduledDeliveryStartDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withScheduledDeliveryStartDate($value)
    {
        $this->setScheduledDeliveryStartDate($value);

        return $this;
    }

    /**
     * Get the value of the ScheduledDeliveryEndDate property.
     *
     * @return string scheduledDeliveryEndDate
     */
    public function getScheduledDeliveryEndDate()
    {
        return $this->_fields['ScheduledDeliveryEndDate']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledDeliveryEndDate property.
     *
     * @param string scheduledDeliveryEndDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledDeliveryEndDate($value)
    {
        $this->_fields['ScheduledDeliveryEndDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ScheduledDeliveryEndDate is set.
     *
     * @return true if ScheduledDeliveryEndDate is set
     */
    public function isSetScheduledDeliveryEndDate()
    {
        return null !== $this->_fields['ScheduledDeliveryEndDate']['FieldValue'];
    }

    /**
     * Set the value of ScheduledDeliveryEndDate, return this.
     *
     * @param scheduledDeliveryEndDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withScheduledDeliveryEndDate($value)
    {
        $this->setScheduledDeliveryEndDate($value);

        return $this;
    }

    /**
     * Get the value of the PriceDesignation property.
     *
     * @return string priceDesignation
     */
    public function getPriceDesignation()
    {
        return $this->_fields['PriceDesignation']['FieldValue'];
    }

    /**
     * Set the value of the PriceDesignation property.
     *
     * @param string priceDesignation
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPriceDesignation($value)
    {
        $this->_fields['PriceDesignation']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PriceDesignation is set.
     *
     * @return true if PriceDesignation is set
     */
    public function isSetPriceDesignation()
    {
        return null !== $this->_fields['PriceDesignation']['FieldValue'];
    }

    /**
     * Set the value of PriceDesignation, return this.
     *
     * @param priceDesignation
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPriceDesignation($value)
    {
        $this->setPriceDesignation($value);

        return $this;
    }

    /**
     * Get the value of the BuyerCustomizedInfo property.
     *
     * @return BuyerCustomizedInfoDetail buyerCustomizedInfo
     */
    public function getBuyerCustomizedInfo()
    {
        return $this->_fields['BuyerCustomizedInfo']['FieldValue'];
    }

    /**
     * Set the value of the BuyerCustomizedInfo property.
     *
     * @param BuyerCustomizedInfoDetail buyerCustomizedInfo
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyerCustomizedInfo($value)
    {
        $this->_fields['BuyerCustomizedInfo']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyerCustomizedInfo is set.
     *
     * @return true if BuyerCustomizedInfo is set
     */
    public function isSetBuyerCustomizedInfo()
    {
        return null !== $this->_fields['BuyerCustomizedInfo']['FieldValue'];
    }

    /**
     * Set the value of BuyerCustomizedInfo, return this.
     *
     * @param buyerCustomizedInfo
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyerCustomizedInfo($value)
    {
        $this->setBuyerCustomizedInfo($value);

        return $this;
    }

    /**
     * Get the value of the TaxCollection property.
     *
     * @return TaxCollection taxCollection
     */
    public function getTaxCollection()
    {
        return $this->_fields['TaxCollection']['FieldValue'];
    }

    /**
     * Set the value of the TaxCollection property.
     *
     * @param TaxCollection taxCollection
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxCollection($value)
    {
        $this->_fields['TaxCollection']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TaxCollection is set.
     *
     * @return true if TaxCollection is set
     */
    public function isSetTaxCollection()
    {
        return null !== $this->_fields['TaxCollection']['FieldValue'];
    }

    /**
     * Set the value of TaxCollection, return this.
     *
     * @param taxCollection
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTaxCollection($value)
    {
        $this->setTaxCollection($value);

        return $this;
    }

    /**
     * Check the value of SerialNumberRequired.
     *
     * @return true if SerialNumberRequired is set to true
     */
    public function isSerialNumberRequired()
    {
        return null !== $this->_fields['SerialNumberRequired']['FieldValue'] && $this->_fields['SerialNumberRequired']['FieldValue'];
    }

    /**
     * Get the value of the SerialNumberRequired property.
     *
     * @return bool serialNumberRequired
     */
    public function getSerialNumberRequired()
    {
        return $this->_fields['SerialNumberRequired']['FieldValue'];
    }

    /**
     * Set the value of the SerialNumberRequired property.
     *
     * @param bool serialNumberRequired
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSerialNumberRequired($value)
    {
        $this->_fields['SerialNumberRequired']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SerialNumberRequired is set.
     *
     * @return true if SerialNumberRequired is set
     */
    public function isSetSerialNumberRequired()
    {
        return null !== $this->_fields['SerialNumberRequired']['FieldValue'];
    }

    /**
     * Set the value of SerialNumberRequired, return this.
     *
     * @param serialNumberRequired
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSerialNumberRequired($value)
    {
        $this->setSerialNumberRequired($value);

        return $this;
    }

    /**
     * Check the value of IsTransparency.
     *
     * @return true if IsTransparency is set to true
     */
    public function isIsTransparency()
    {
        return null !== $this->_fields['IsTransparency']['FieldValue'] && $this->_fields['IsTransparency']['FieldValue'];
    }

    /**
     * Get the value of the IsTransparency property.
     *
     * @return bool isTransparency
     */
    public function getIsTransparency()
    {
        return $this->_fields['IsTransparency']['FieldValue'];
    }

    /**
     * Set the value of the IsTransparency property.
     *
     * @param bool isTransparency
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsTransparency($value)
    {
        $this->_fields['IsTransparency']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsTransparency is set.
     *
     * @return true if IsTransparency is set
     */
    public function isSetIsTransparency()
    {
        return null !== $this->_fields['IsTransparency']['FieldValue'];
    }

    /**
     * Set the value of IsTransparency, return this.
     *
     * @param isTransparency
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsTransparency($value)
    {
        $this->setIsTransparency($value);

        return $this;
    }
}
