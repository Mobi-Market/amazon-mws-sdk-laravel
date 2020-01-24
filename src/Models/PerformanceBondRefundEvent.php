<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2019-02-25
 * Generated: Wed Mar 13 08:17:11 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * PerformanceBondRefundEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>MarketplaceCountryCode: string</li>
 * <li>Amount: Currency</li>
 * <li>ProductGroupList: array</li>
 *
 * </ul>
 */
class PerformanceBondRefundEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'MarketplaceCountryCode' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Amount'                 => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'ProductGroupList'       => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'ProductGroup'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceCountryCode property.
     *
     * @return string marketplaceCountryCode
     */
    public function getMarketplaceCountryCode()
    {
        return $this->_fields['MarketplaceCountryCode']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceCountryCode property.
     *
     * @param string marketplaceCountryCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceCountryCode($value)
    {
        $this->_fields['MarketplaceCountryCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceCountryCode is set.
     *
     * @return true if MarketplaceCountryCode is set
     */
    public function isSetMarketplaceCountryCode()
    {
        return null !== $this->_fields['MarketplaceCountryCode']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceCountryCode, return this.
     *
     * @param marketplaceCountryCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplaceCountryCode($value)
    {
        $this->setMarketplaceCountryCode($value);

        return $this;
    }

    /**
     * Get the value of the Amount property.
     *
     * @return Currency amount
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param Currency amount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set
     */
    public function isSetAmount()
    {
        return null !== $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmount($value)
    {
        $this->setAmount($value);

        return $this;
    }

    /**
     * Get the value of the ProductGroupList property.
     *
     * @return List<String> productGroupList
     */
    public function getProductGroupList()
    {
        if (null == $this->_fields['ProductGroupList']['FieldValue']) {
            $this->_fields['ProductGroupList']['FieldValue'] = [];
        }

        return $this->_fields['ProductGroupList']['FieldValue'];
    }

    /**
     * Set the value of the ProductGroupList property.
     *
     * @param array productGroupList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProductGroupList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ProductGroupList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ProductGroupList.
     */
    public function unsetProductGroupList(): void
    {
        $this->_fields['ProductGroupList']['FieldValue'] = [];
    }

    /**
     * Check to see if ProductGroupList is set.
     *
     * @return true if ProductGroupList is set
     */
    public function isSetProductGroupList()
    {
        return !empty($this->_fields['ProductGroupList']['FieldValue']);
    }

    /**
     * Add values for ProductGroupList, return this.
     *
     * @param productGroupList
     *             New values to add
     *
     * @return $this instance
     */
    public function withProductGroupList()
    {
        foreach (\func_get_args() as $ProductGroupList) {
            $this->_fields['ProductGroupList']['FieldValue'][] = $ProductGroupList;
        }

        return $this;
    }
}
