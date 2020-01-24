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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * IdentifierType.
 *
 * Properties:
 * <ul>
 *
 * <li>MarketplaceASIN: ASINIdentifier</li>
 * <li>SKUIdentifier: SellerSKUIdentifier</li>
 *
 * </ul>
 */
class IdentifierType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'MarketplaceASIN' => ['FieldValue' => null, 'FieldType' => 'ASINIdentifier'],
            'SKUIdentifier'   => ['FieldValue' => null, 'FieldType' => 'SellerSKUIdentifier'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceASIN property.
     *
     * @return ASINIdentifier marketplaceASIN
     */
    public function getMarketplaceASIN()
    {
        return $this->_fields['MarketplaceASIN']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceASIN property.
     *
     * @param ASINIdentifier marketplaceASIN
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceASIN($value)
    {
        $this->_fields['MarketplaceASIN']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceASIN is set.
     *
     * @return true if MarketplaceASIN is set
     */
    public function isSetMarketplaceASIN()
    {
        return null !== $this->_fields['MarketplaceASIN']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceASIN, return this.
     *
     * @param marketplaceASIN
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplaceASIN($value)
    {
        $this->setMarketplaceASIN($value);

        return $this;
    }

    /**
     * Get the value of the SKUIdentifier property.
     *
     * @return sellerSKUIdentifier SKUIdentifier
     */
    public function getSKUIdentifier()
    {
        return $this->_fields['SKUIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the SKUIdentifier property.
     *
     * @param SellerSKUIdentifier skuIdentifier
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSKUIdentifier($value)
    {
        $this->_fields['SKUIdentifier']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SKUIdentifier is set.
     *
     * @return true if SKUIdentifier is set
     */
    public function isSetSKUIdentifier()
    {
        return null !== $this->_fields['SKUIdentifier']['FieldValue'];
    }

    /**
     * Set the value of SKUIdentifier, return this.
     *
     * @param skuIdentifier
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSKUIdentifier($value)
    {
        $this->setSKUIdentifier($value);

        return $this;
    }
}
