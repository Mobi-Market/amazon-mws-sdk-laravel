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
 * InvoiceData.
 *
 * Properties:
 * <ul>
 *
 * <li>InvoiceRequirement: string</li>
 * <li>BuyerSelectedInvoiceCategory: string</li>
 * <li>InvoiceTitle: string</li>
 * <li>InvoiceInformation: string</li>
 *
 * </ul>
 */
class InvoiceData extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'InvoiceRequirement'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerSelectedInvoiceCategory' => ['FieldValue' => null, 'FieldType' => 'string'],
            'InvoiceTitle'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'InvoiceInformation'           => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the InvoiceRequirement property.
     *
     * @return string invoiceRequirement
     */
    public function getInvoiceRequirement()
    {
        return $this->_fields['InvoiceRequirement']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceRequirement property.
     *
     * @param string invoiceRequirement
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvoiceRequirement($value)
    {
        $this->_fields['InvoiceRequirement']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InvoiceRequirement is set.
     *
     * @return true if InvoiceRequirement is set
     */
    public function isSetInvoiceRequirement()
    {
        return null !== $this->_fields['InvoiceRequirement']['FieldValue'];
    }

    /**
     * Set the value of InvoiceRequirement, return this.
     *
     * @param invoiceRequirement
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInvoiceRequirement($value)
    {
        $this->setInvoiceRequirement($value);

        return $this;
    }

    /**
     * Get the value of the BuyerSelectedInvoiceCategory property.
     *
     * @return string buyerSelectedInvoiceCategory
     */
    public function getBuyerSelectedInvoiceCategory()
    {
        return $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'];
    }

    /**
     * Set the value of the BuyerSelectedInvoiceCategory property.
     *
     * @param string buyerSelectedInvoiceCategory
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBuyerSelectedInvoiceCategory($value)
    {
        $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BuyerSelectedInvoiceCategory is set.
     *
     * @return true if BuyerSelectedInvoiceCategory is set
     */
    public function isSetBuyerSelectedInvoiceCategory()
    {
        return null !== $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'];
    }

    /**
     * Set the value of BuyerSelectedInvoiceCategory, return this.
     *
     * @param buyerSelectedInvoiceCategory
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBuyerSelectedInvoiceCategory($value)
    {
        $this->setBuyerSelectedInvoiceCategory($value);

        return $this;
    }

    /**
     * Get the value of the InvoiceTitle property.
     *
     * @return string invoiceTitle
     */
    public function getInvoiceTitle()
    {
        return $this->_fields['InvoiceTitle']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceTitle property.
     *
     * @param string invoiceTitle
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvoiceTitle($value)
    {
        $this->_fields['InvoiceTitle']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InvoiceTitle is set.
     *
     * @return true if InvoiceTitle is set
     */
    public function isSetInvoiceTitle()
    {
        return null !== $this->_fields['InvoiceTitle']['FieldValue'];
    }

    /**
     * Set the value of InvoiceTitle, return this.
     *
     * @param invoiceTitle
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInvoiceTitle($value)
    {
        $this->setInvoiceTitle($value);

        return $this;
    }

    /**
     * Get the value of the InvoiceInformation property.
     *
     * @return string invoiceInformation
     */
    public function getInvoiceInformation()
    {
        return $this->_fields['InvoiceInformation']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceInformation property.
     *
     * @param string invoiceInformation
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvoiceInformation($value)
    {
        $this->_fields['InvoiceInformation']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InvoiceInformation is set.
     *
     * @return true if InvoiceInformation is set
     */
    public function isSetInvoiceInformation()
    {
        return null !== $this->_fields['InvoiceInformation']['FieldValue'];
    }

    /**
     * Set the value of InvoiceInformation, return this.
     *
     * @param invoiceInformation
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInvoiceInformation($value)
    {
        $this->setInvoiceInformation($value);

        return $this;
    }
}
