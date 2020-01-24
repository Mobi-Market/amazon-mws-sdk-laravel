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
 * AffordabilityExpenseEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonOrderId: string</li>
 * <li>PostedDate: string</li>
 * <li>MarketplaceId: string</li>
 * <li>TransactionType: string</li>
 * <li>BaseExpense: Currency</li>
 * <li>TaxTypeCGST: Currency</li>
 * <li>TaxTypeSGST: Currency</li>
 * <li>TaxTypeIGST: Currency</li>
 * <li>TotalExpense: Currency</li>
 *
 * </ul>
 */
class AffordabilityExpenseEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonOrderId'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'PostedDate'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceId'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'TransactionType' => ['FieldValue' => null, 'FieldType' => 'string'],
            'BaseExpense'     => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'TaxTypeCGST'     => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'TaxTypeSGST'     => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'TaxTypeIGST'     => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'TotalExpense'    => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return string amazonOrderId
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set
     */
    public function isSetAmazonOrderId()
    {
        return null !== $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);

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
     * Get the value of the BaseExpense property.
     *
     * @return Currency baseExpense
     */
    public function getBaseExpense()
    {
        return $this->_fields['BaseExpense']['FieldValue'];
    }

    /**
     * Set the value of the BaseExpense property.
     *
     * @param Currency baseExpense
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBaseExpense($value)
    {
        $this->_fields['BaseExpense']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BaseExpense is set.
     *
     * @return true if BaseExpense is set
     */
    public function isSetBaseExpense()
    {
        return null !== $this->_fields['BaseExpense']['FieldValue'];
    }

    /**
     * Set the value of BaseExpense, return this.
     *
     * @param baseExpense
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBaseExpense($value)
    {
        $this->setBaseExpense($value);

        return $this;
    }

    /**
     * Get the value of the TaxTypeCGST property.
     *
     * @return Currency taxTypeCGST
     */
    public function getTaxTypeCGST()
    {
        return $this->_fields['TaxTypeCGST']['FieldValue'];
    }

    /**
     * Set the value of the TaxTypeCGST property.
     *
     * @param Currency taxTypeCGST
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxTypeCGST($value)
    {
        $this->_fields['TaxTypeCGST']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TaxTypeCGST is set.
     *
     * @return true if TaxTypeCGST is set
     */
    public function isSetTaxTypeCGST()
    {
        return null !== $this->_fields['TaxTypeCGST']['FieldValue'];
    }

    /**
     * Set the value of TaxTypeCGST, return this.
     *
     * @param taxTypeCGST
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTaxTypeCGST($value)
    {
        $this->setTaxTypeCGST($value);

        return $this;
    }

    /**
     * Get the value of the TaxTypeSGST property.
     *
     * @return Currency taxTypeSGST
     */
    public function getTaxTypeSGST()
    {
        return $this->_fields['TaxTypeSGST']['FieldValue'];
    }

    /**
     * Set the value of the TaxTypeSGST property.
     *
     * @param Currency taxTypeSGST
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxTypeSGST($value)
    {
        $this->_fields['TaxTypeSGST']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TaxTypeSGST is set.
     *
     * @return true if TaxTypeSGST is set
     */
    public function isSetTaxTypeSGST()
    {
        return null !== $this->_fields['TaxTypeSGST']['FieldValue'];
    }

    /**
     * Set the value of TaxTypeSGST, return this.
     *
     * @param taxTypeSGST
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTaxTypeSGST($value)
    {
        $this->setTaxTypeSGST($value);

        return $this;
    }

    /**
     * Get the value of the TaxTypeIGST property.
     *
     * @return Currency taxTypeIGST
     */
    public function getTaxTypeIGST()
    {
        return $this->_fields['TaxTypeIGST']['FieldValue'];
    }

    /**
     * Set the value of the TaxTypeIGST property.
     *
     * @param Currency taxTypeIGST
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTaxTypeIGST($value)
    {
        $this->_fields['TaxTypeIGST']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TaxTypeIGST is set.
     *
     * @return true if TaxTypeIGST is set
     */
    public function isSetTaxTypeIGST()
    {
        return null !== $this->_fields['TaxTypeIGST']['FieldValue'];
    }

    /**
     * Set the value of TaxTypeIGST, return this.
     *
     * @param taxTypeIGST
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTaxTypeIGST($value)
    {
        $this->setTaxTypeIGST($value);

        return $this;
    }

    /**
     * Get the value of the TotalExpense property.
     *
     * @return Currency totalExpense
     */
    public function getTotalExpense()
    {
        return $this->_fields['TotalExpense']['FieldValue'];
    }

    /**
     * Set the value of the TotalExpense property.
     *
     * @param Currency totalExpense
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTotalExpense($value)
    {
        $this->_fields['TotalExpense']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TotalExpense is set.
     *
     * @return true if TotalExpense is set
     */
    public function isSetTotalExpense()
    {
        return null !== $this->_fields['TotalExpense']['FieldValue'];
    }

    /**
     * Set the value of TotalExpense, return this.
     *
     * @param totalExpense
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTotalExpense($value)
    {
        $this->setTotalExpense($value);

        return $this;
    }
}
