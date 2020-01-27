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
 * RetrochargeEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>RetrochargeEventType: string</li>
 * <li>AmazonOrderId: string</li>
 * <li>PostedDate: string</li>
 * <li>BaseTax: Currency</li>
 * <li>ShippingTax: Currency</li>
 * <li>MarketplaceName: string</li>
 * <li>RetrochargeTaxWithheldList: array</li>
 *
 * </ul>
 */
class RetrochargeEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'RetrochargeEventType'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmazonOrderId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'PostedDate'                 => ['FieldValue' => null, 'FieldType' => 'string'],
            'BaseTax'                    => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'ShippingTax'                => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'MarketplaceName'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'RetrochargeTaxWithheldList' => ['FieldValue' => [], 'FieldType' => ['TaxWithheldComponent'], 'ListMemberName' => 'TaxWithheldComponent'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the RetrochargeEventType property.
     *
     * @return string retrochargeEventType
     */
    public function getRetrochargeEventType()
    {
        return $this->_fields['RetrochargeEventType']['FieldValue'];
    }

    /**
     * Set the value of the RetrochargeEventType property.
     *
     * @param string retrochargeEventType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRetrochargeEventType($value)
    {
        $this->_fields['RetrochargeEventType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RetrochargeEventType is set.
     *
     * @return true if RetrochargeEventType is set
     */
    public function isSetRetrochargeEventType()
    {
        return null !== $this->_fields['RetrochargeEventType']['FieldValue'];
    }

    /**
     * Set the value of RetrochargeEventType, return this.
     *
     * @param retrochargeEventType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRetrochargeEventType($value)
    {
        $this->setRetrochargeEventType($value);

        return $this;
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
     * Get the value of the BaseTax property.
     *
     * @return Currency baseTax
     */
    public function getBaseTax()
    {
        return $this->_fields['BaseTax']['FieldValue'];
    }

    /**
     * Set the value of the BaseTax property.
     *
     * @param Currency baseTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBaseTax($value)
    {
        $this->_fields['BaseTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BaseTax is set.
     *
     * @return true if BaseTax is set
     */
    public function isSetBaseTax()
    {
        return null !== $this->_fields['BaseTax']['FieldValue'];
    }

    /**
     * Set the value of BaseTax, return this.
     *
     * @param baseTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBaseTax($value)
    {
        $this->setBaseTax($value);

        return $this;
    }

    /**
     * Get the value of the ShippingTax property.
     *
     * @return Currency shippingTax
     */
    public function getShippingTax()
    {
        return $this->_fields['ShippingTax']['FieldValue'];
    }

    /**
     * Set the value of the ShippingTax property.
     *
     * @param Currency shippingTax
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
     * Get the value of the MarketplaceName property.
     *
     * @return string marketplaceName
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceName($value)
    {
        $this->_fields['MarketplaceName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceName is set.
     *
     * @return true if MarketplaceName is set
     */
    public function isSetMarketplaceName()
    {
        return null !== $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceName, return this.
     *
     * @param marketplaceName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplaceName($value)
    {
        $this->setMarketplaceName($value);

        return $this;
    }

    /**
     * Get the value of the RetrochargeTaxWithheldList property.
     *
     * @return List<TaxWithheldComponent> retrochargeTaxWithheldList
     */
    public function getRetrochargeTaxWithheldList()
    {
        if (null == $this->_fields['RetrochargeTaxWithheldList']['FieldValue']) {
            $this->_fields['RetrochargeTaxWithheldList']['FieldValue'] = [];
        }

        return $this->_fields['RetrochargeTaxWithheldList']['FieldValue'];
    }

    /**
     * Set the value of the RetrochargeTaxWithheldList property.
     *
     * @param array retrochargeTaxWithheldList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRetrochargeTaxWithheldList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['RetrochargeTaxWithheldList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear RetrochargeTaxWithheldList.
     */
    public function unsetRetrochargeTaxWithheldList(): void
    {
        $this->_fields['RetrochargeTaxWithheldList']['FieldValue'] = [];
    }

    /**
     * Check to see if RetrochargeTaxWithheldList is set.
     *
     * @return true if RetrochargeTaxWithheldList is set
     */
    public function isSetRetrochargeTaxWithheldList()
    {
        return !empty($this->_fields['RetrochargeTaxWithheldList']['FieldValue']);
    }

    /**
     * Add values for RetrochargeTaxWithheldList, return this.
     *
     * @param retrochargeTaxWithheldList
     *             New values to add
     *
     * @return $this instance
     */
    public function withRetrochargeTaxWithheldList()
    {
        foreach (\func_get_args() as $RetrochargeTaxWithheldList) {
            $this->_fields['RetrochargeTaxWithheldList']['FieldValue'][] = $RetrochargeTaxWithheldList;
        }

        return $this;
    }
}
