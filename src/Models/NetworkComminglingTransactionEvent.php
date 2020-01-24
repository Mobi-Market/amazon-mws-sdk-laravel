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
 * NetworkComminglingTransactionEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>TransactionType: string</li>
 * <li>PostedDate: string</li>
 * <li>NetCoTransactionID: string</li>
 * <li>SwapReason: string</li>
 * <li>ASIN: string</li>
 * <li>MarketplaceId: string</li>
 * <li>TaxExclusiveAmount: Currency</li>
 * <li>TaxAmount: Currency</li>
 *
 * </ul>
 */
class NetworkComminglingTransactionEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TransactionType'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'PostedDate'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'NetCoTransactionID' => ['FieldValue' => null, 'FieldType' => 'string'],
            'SwapReason'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'ASIN'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceId'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'TaxExclusiveAmount' => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'TaxAmount'          => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TransactionType property.
     *
     * @return string transactionType
     */
    public function getTransactionType()
    {
        return $this->_fields['TransactionType']['FieldValue'];
    }

    /**
     * Set the value of the TransactionType property.
     *
     * @param string transactionType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransactionType($value)
    {
        $this->_fields['TransactionType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransactionType is set.
     *
     * @return true if TransactionType is set
     */
    public function isSetTransactionType()
    {
        return null !== $this->_fields['TransactionType']['FieldValue'];
    }

    /**
     * Set the value of TransactionType, return this.
     *
     * @param transactionType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransactionType($value)
    {
        $this->setTransactionType($value);

        return $this;
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar postedDate
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set
     */
    public function isSetPostedDate()
    {
        return null !== $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);

        return $this;
    }

    /**
     * Get the value of the NetCoTransactionID property.
     *
     * @return string netCoTransactionID
     */
    public function getNetCoTransactionID()
    {
        return $this->_fields['NetCoTransactionID']['FieldValue'];
    }

    /**
     * Set the value of the NetCoTransactionID property.
     *
     * @param string netCoTransactionID
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNetCoTransactionID($value)
    {
        $this->_fields['NetCoTransactionID']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NetCoTransactionID is set.
     *
     * @return true if NetCoTransactionID is set
     */
    public function isSetNetCoTransactionID()
    {
        return null !== $this->_fields['NetCoTransactionID']['FieldValue'];
    }

    /**
     * Set the value of NetCoTransactionID, return this.
     *
     * @param netCoTransactionID
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNetCoTransactionID($value)
    {
        $this->setNetCoTransactionID($value);

        return $this;
    }

    /**
     * Get the value of the SwapReason property.
     *
     * @return string swapReason
     */
    public function getSwapReason()
    {
        return $this->_fields['SwapReason']['FieldValue'];
    }

    /**
     * Set the value of the SwapReason property.
     *
     * @param string swapReason
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSwapReason($value)
    {
        $this->_fields['SwapReason']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SwapReason is set.
     *
     * @return true if SwapReason is set
     */
    public function isSetSwapReason()
    {
        return null !== $this->_fields['SwapReason']['FieldValue'];
    }

    /**
     * Set the value of SwapReason, return this.
     *
     * @param swapReason
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSwapReason($value)
    {
        $this->setSwapReason($value);

        return $this;
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
     * Get the value of the TaxExclusiveAmount property.
     *
     * @return Currency taxExclusiveAmount
     */
    public function getTaxExclusiveAmount()
    {
        return $this->_fields['TaxExclusiveAmount']['FieldValue'];
    }

    /**
     * Set the value of the TaxExclusiveAmount property.
     *
     * @param Currency taxExclusiveAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxExclusiveAmount($value)
    {
        $this->_fields['TaxExclusiveAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TaxExclusiveAmount is set.
     *
     * @return true if TaxExclusiveAmount is set
     */
    public function isSetTaxExclusiveAmount()
    {
        return null !== $this->_fields['TaxExclusiveAmount']['FieldValue'];
    }

    /**
     * Set the value of TaxExclusiveAmount, return this.
     *
     * @param taxExclusiveAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTaxExclusiveAmount($value)
    {
        $this->setTaxExclusiveAmount($value);

        return $this;
    }

    /**
     * Get the value of the TaxAmount property.
     *
     * @return Currency taxAmount
     */
    public function getTaxAmount()
    {
        return $this->_fields['TaxAmount']['FieldValue'];
    }

    /**
     * Set the value of the TaxAmount property.
     *
     * @param Currency taxAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxAmount($value)
    {
        $this->_fields['TaxAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TaxAmount is set.
     *
     * @return true if TaxAmount is set
     */
    public function isSetTaxAmount()
    {
        return null !== $this->_fields['TaxAmount']['FieldValue'];
    }

    /**
     * Set the value of TaxAmount, return this.
     *
     * @param taxAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTaxAmount($value)
    {
        $this->setTaxAmount($value);

        return $this;
    }
}
