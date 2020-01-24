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
 * SolutionProviderCreditEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>ProviderTransactionType: string</li>
 * <li>SellerOrderId: string</li>
 * <li>MarketplaceId: string</li>
 * <li>MarketplaceCountryCode: string</li>
 * <li>SellerId: string</li>
 * <li>SellerStoreName: string</li>
 * <li>ProviderId: string</li>
 * <li>ProviderStoreName: string</li>
 * <li>TransactionAmount: Currency</li>
 * <li>TransactionCreationDate: string</li>
 *
 * </ul>
 */
class SolutionProviderCreditEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ProviderTransactionType' => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerOrderId'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceId'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceCountryCode'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerId'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerStoreName'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'ProviderId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'ProviderStoreName'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'TransactionAmount'       => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'TransactionCreationDate' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ProviderTransactionType property.
     *
     * @return string providerTransactionType
     */
    public function getProviderTransactionType()
    {
        return $this->_fields['ProviderTransactionType']['FieldValue'];
    }

    /**
     * Set the value of the ProviderTransactionType property.
     *
     * @param string providerTransactionType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProviderTransactionType($value)
    {
        $this->_fields['ProviderTransactionType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ProviderTransactionType is set.
     *
     * @return true if ProviderTransactionType is set
     */
    public function isSetProviderTransactionType()
    {
        return null !== $this->_fields['ProviderTransactionType']['FieldValue'];
    }

    /**
     * Set the value of ProviderTransactionType, return this.
     *
     * @param providerTransactionType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProviderTransactionType($value)
    {
        $this->setProviderTransactionType($value);

        return $this;
    }

    /**
     * Get the value of the SellerOrderId property.
     *
     * @return string sellerOrderId
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set
     */
    public function isSetSellerOrderId()
    {
        return null !== $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param sellerOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);

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
     * Get the value of the SellerStoreName property.
     *
     * @return string sellerStoreName
     */
    public function getSellerStoreName()
    {
        return $this->_fields['SellerStoreName']['FieldValue'];
    }

    /**
     * Set the value of the SellerStoreName property.
     *
     * @param string sellerStoreName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerStoreName($value)
    {
        $this->_fields['SellerStoreName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerStoreName is set.
     *
     * @return true if SellerStoreName is set
     */
    public function isSetSellerStoreName()
    {
        return null !== $this->_fields['SellerStoreName']['FieldValue'];
    }

    /**
     * Set the value of SellerStoreName, return this.
     *
     * @param sellerStoreName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerStoreName($value)
    {
        $this->setSellerStoreName($value);

        return $this;
    }

    /**
     * Get the value of the ProviderId property.
     *
     * @return string providerId
     */
    public function getProviderId()
    {
        return $this->_fields['ProviderId']['FieldValue'];
    }

    /**
     * Set the value of the ProviderId property.
     *
     * @param string providerId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProviderId($value)
    {
        $this->_fields['ProviderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ProviderId is set.
     *
     * @return true if ProviderId is set
     */
    public function isSetProviderId()
    {
        return null !== $this->_fields['ProviderId']['FieldValue'];
    }

    /**
     * Set the value of ProviderId, return this.
     *
     * @param providerId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProviderId($value)
    {
        $this->setProviderId($value);

        return $this;
    }

    /**
     * Get the value of the ProviderStoreName property.
     *
     * @return string providerStoreName
     */
    public function getProviderStoreName()
    {
        return $this->_fields['ProviderStoreName']['FieldValue'];
    }

    /**
     * Set the value of the ProviderStoreName property.
     *
     * @param string providerStoreName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setProviderStoreName($value)
    {
        $this->_fields['ProviderStoreName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ProviderStoreName is set.
     *
     * @return true if ProviderStoreName is set
     */
    public function isSetProviderStoreName()
    {
        return null !== $this->_fields['ProviderStoreName']['FieldValue'];
    }

    /**
     * Set the value of ProviderStoreName, return this.
     *
     * @param providerStoreName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withProviderStoreName($value)
    {
        $this->setProviderStoreName($value);

        return $this;
    }

    /**
     * Get the value of the TransactionAmount property.
     *
     * @return Currency transactionAmount
     */
    public function getTransactionAmount()
    {
        return $this->_fields['TransactionAmount']['FieldValue'];
    }

    /**
     * Set the value of the TransactionAmount property.
     *
     * @param Currency transactionAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransactionAmount($value)
    {
        $this->_fields['TransactionAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransactionAmount is set.
     *
     * @return true if TransactionAmount is set
     */
    public function isSetTransactionAmount()
    {
        return null !== $this->_fields['TransactionAmount']['FieldValue'];
    }

    /**
     * Set the value of TransactionAmount, return this.
     *
     * @param transactionAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransactionAmount($value)
    {
        $this->setTransactionAmount($value);

        return $this;
    }

    /**
     * Get the value of the TransactionCreationDate property.
     *
     * @return XMLGregorianCalendar transactionCreationDate
     */
    public function getTransactionCreationDate()
    {
        return $this->_fields['TransactionCreationDate']['FieldValue'];
    }

    /**
     * Set the value of the TransactionCreationDate property.
     *
     * @param string transactionCreationDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransactionCreationDate($value)
    {
        $this->_fields['TransactionCreationDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransactionCreationDate is set.
     *
     * @return true if TransactionCreationDate is set
     */
    public function isSetTransactionCreationDate()
    {
        return null !== $this->_fields['TransactionCreationDate']['FieldValue'];
    }

    /**
     * Set the value of TransactionCreationDate, return this.
     *
     * @param transactionCreationDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransactionCreationDate($value)
    {
        $this->setTransactionCreationDate($value);

        return $this;
    }
}
