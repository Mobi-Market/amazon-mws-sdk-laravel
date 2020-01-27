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
 * CODSettings.
 *
 * Properties:
 * <ul>
 *
 * <li>IsCODRequired: bool</li>
 * <li>CODCharge: Currency</li>
 * <li>CODChargeTax: Currency</li>
 * <li>ShippingCharge: Currency</li>
 * <li>ShippingChargeTax: Currency</li>
 *
 * </ul>
 */
class CODSettings extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'IsCODRequired'     => ['FieldValue' => null, 'FieldType' => 'bool'],
            'CODCharge'         => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'CODChargeTax'      => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'ShippingCharge'    => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'ShippingChargeTax' => ['FieldValue' => null, 'FieldType' => 'Currency'],
        ];
        parent::__construct($data);
    }

    /**
     * Check the value of IsCODRequired.
     *
     * @return true if IsCODRequired is set to true
     */
    public function isIsCODRequired()
    {
        return $this->_fields['IsCODRequired']['FieldValue'];
    }

    /**
     * Get the value of the IsCODRequired property.
     *
     * @return bool isCODRequired
     */
    public function getIsCODRequired()
    {
        return $this->_fields['IsCODRequired']['FieldValue'];
    }

    /**
     * Set the value of the IsCODRequired property.
     *
     * @param bool isCODRequired
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsCODRequired($value)
    {
        $this->_fields['IsCODRequired']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsCODRequired is set.
     *
     * @return true if IsCODRequired is set
     */
    public function isSetIsCODRequired()
    {
        return null !== $this->_fields['IsCODRequired']['FieldValue'];
    }

    /**
     * Set the value of IsCODRequired, return this.
     *
     * @param isCODRequired
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsCODRequired($value)
    {
        $this->setIsCODRequired($value);

        return $this;
    }

    /**
     * Get the value of the CODCharge property.
     *
     * @return currency CODCharge
     */
    public function getCODCharge()
    {
        return $this->_fields['CODCharge']['FieldValue'];
    }

    /**
     * Set the value of the CODCharge property.
     *
     * @param Currency codCharge
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCODCharge($value)
    {
        $this->_fields['CODCharge']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CODCharge is set.
     *
     * @return true if CODCharge is set
     */
    public function isSetCODCharge()
    {
        return null !== $this->_fields['CODCharge']['FieldValue'];
    }

    /**
     * Set the value of CODCharge, return this.
     *
     * @param codCharge
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCODCharge($value)
    {
        $this->setCODCharge($value);

        return $this;
    }

    /**
     * Get the value of the CODChargeTax property.
     *
     * @return currency CODChargeTax
     */
    public function getCODChargeTax()
    {
        return $this->_fields['CODChargeTax']['FieldValue'];
    }

    /**
     * Set the value of the CODChargeTax property.
     *
     * @param Currency codChargeTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCODChargeTax($value)
    {
        $this->_fields['CODChargeTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CODChargeTax is set.
     *
     * @return true if CODChargeTax is set
     */
    public function isSetCODChargeTax()
    {
        return null !== $this->_fields['CODChargeTax']['FieldValue'];
    }

    /**
     * Set the value of CODChargeTax, return this.
     *
     * @param codChargeTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCODChargeTax($value)
    {
        $this->setCODChargeTax($value);

        return $this;
    }

    /**
     * Get the value of the ShippingCharge property.
     *
     * @return Currency shippingCharge
     */
    public function getShippingCharge()
    {
        return $this->_fields['ShippingCharge']['FieldValue'];
    }

    /**
     * Set the value of the ShippingCharge property.
     *
     * @param Currency shippingCharge
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingCharge($value)
    {
        $this->_fields['ShippingCharge']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingCharge is set.
     *
     * @return true if ShippingCharge is set
     */
    public function isSetShippingCharge()
    {
        return null !== $this->_fields['ShippingCharge']['FieldValue'];
    }

    /**
     * Set the value of ShippingCharge, return this.
     *
     * @param shippingCharge
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingCharge($value)
    {
        $this->setShippingCharge($value);

        return $this;
    }

    /**
     * Get the value of the ShippingChargeTax property.
     *
     * @return Currency shippingChargeTax
     */
    public function getShippingChargeTax()
    {
        return $this->_fields['ShippingChargeTax']['FieldValue'];
    }

    /**
     * Set the value of the ShippingChargeTax property.
     *
     * @param Currency shippingChargeTax
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingChargeTax($value)
    {
        $this->_fields['ShippingChargeTax']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingChargeTax is set.
     *
     * @return true if ShippingChargeTax is set
     */
    public function isSetShippingChargeTax()
    {
        return null !== $this->_fields['ShippingChargeTax']['FieldValue'];
    }

    /**
     * Set the value of ShippingChargeTax, return this.
     *
     * @param shippingChargeTax
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingChargeTax($value)
    {
        $this->setShippingChargeTax($value);

        return $this;
    }
}
