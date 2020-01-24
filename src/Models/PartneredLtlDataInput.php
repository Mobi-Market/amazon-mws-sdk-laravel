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
 * PartneredLtlDataInput.
 *
 * Properties:
 * <ul>
 *
 * <li>Contact: Contact</li>
 * <li>BoxCount: int</li>
 * <li>SellerFreightClass: string</li>
 * <li>FreightReadyDate: string</li>
 * <li>PalletList: PalletList</li>
 * <li>TotalWeight: Weight</li>
 * <li>SellerDeclaredValue: Amount</li>
 *
 * </ul>
 */
class PartneredLtlDataInput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Contact'             => ['FieldValue' => null, 'FieldType' => 'Contact'],
            'BoxCount'            => ['FieldValue' => null, 'FieldType' => 'int'],
            'SellerFreightClass'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'FreightReadyDate'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'PalletList'          => ['FieldValue' => null, 'FieldType' => 'PalletList'],
            'TotalWeight'         => ['FieldValue' => null, 'FieldType' => 'Weight'],
            'SellerDeclaredValue' => ['FieldValue' => null, 'FieldType' => 'Amount'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Contact property.
     *
     * @return Contact contact
     */
    public function getContact()
    {
        return $this->_fields['Contact']['FieldValue'];
    }

    /**
     * Set the value of the Contact property.
     *
     * @param Contact contact
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setContact($value)
    {
        $this->_fields['Contact']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Contact is set.
     *
     * @return true if Contact is set
     */
    public function isSetContact()
    {
        return null !== $this->_fields['Contact']['FieldValue'];
    }

    /**
     * Set the value of Contact, return this.
     *
     * @param contact
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withContact($value)
    {
        $this->setContact($value);

        return $this;
    }

    /**
     * Get the value of the BoxCount property.
     *
     * @return Long boxCount
     */
    public function getBoxCount()
    {
        return $this->_fields['BoxCount']['FieldValue'];
    }

    /**
     * Set the value of the BoxCount property.
     *
     * @param int boxCount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setBoxCount($value)
    {
        $this->_fields['BoxCount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if BoxCount is set.
     *
     * @return true if BoxCount is set
     */
    public function isSetBoxCount()
    {
        return null !== $this->_fields['BoxCount']['FieldValue'];
    }

    /**
     * Set the value of BoxCount, return this.
     *
     * @param boxCount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withBoxCount($value)
    {
        $this->setBoxCount($value);

        return $this;
    }

    /**
     * Get the value of the SellerFreightClass property.
     *
     * @return string sellerFreightClass
     */
    public function getSellerFreightClass()
    {
        return $this->_fields['SellerFreightClass']['FieldValue'];
    }

    /**
     * Set the value of the SellerFreightClass property.
     *
     * @param string sellerFreightClass
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerFreightClass($value)
    {
        $this->_fields['SellerFreightClass']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerFreightClass is set.
     *
     * @return true if SellerFreightClass is set
     */
    public function isSetSellerFreightClass()
    {
        return null !== $this->_fields['SellerFreightClass']['FieldValue'];
    }

    /**
     * Set the value of SellerFreightClass, return this.
     *
     * @param sellerFreightClass
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerFreightClass($value)
    {
        $this->setSellerFreightClass($value);

        return $this;
    }

    /**
     * Get the value of the FreightReadyDate property.
     *
     * @return string freightReadyDate
     */
    public function getFreightReadyDate()
    {
        return $this->_fields['FreightReadyDate']['FieldValue'];
    }

    /**
     * Set the value of the FreightReadyDate property.
     *
     * @param string freightReadyDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFreightReadyDate($value)
    {
        $this->_fields['FreightReadyDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FreightReadyDate is set.
     *
     * @return true if FreightReadyDate is set
     */
    public function isSetFreightReadyDate()
    {
        return null !== $this->_fields['FreightReadyDate']['FieldValue'];
    }

    /**
     * Set the value of FreightReadyDate, return this.
     *
     * @param freightReadyDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFreightReadyDate($value)
    {
        $this->setFreightReadyDate($value);

        return $this;
    }

    /**
     * Get the value of the PalletList property.
     *
     * @return PalletList palletList
     */
    public function getPalletList()
    {
        return $this->_fields['PalletList']['FieldValue'];
    }

    /**
     * Set the value of the PalletList property.
     *
     * @param PalletList palletList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPalletList($value)
    {
        $this->_fields['PalletList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PalletList is set.
     *
     * @return true if PalletList is set
     */
    public function isSetPalletList()
    {
        return null !== $this->_fields['PalletList']['FieldValue'];
    }

    /**
     * Set the value of PalletList, return this.
     *
     * @param palletList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPalletList($value)
    {
        $this->setPalletList($value);

        return $this;
    }

    /**
     * Get the value of the TotalWeight property.
     *
     * @return Weight totalWeight
     */
    public function getTotalWeight()
    {
        return $this->_fields['TotalWeight']['FieldValue'];
    }

    /**
     * Set the value of the TotalWeight property.
     *
     * @param Weight totalWeight
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTotalWeight($value)
    {
        $this->_fields['TotalWeight']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TotalWeight is set.
     *
     * @return true if TotalWeight is set
     */
    public function isSetTotalWeight()
    {
        return null !== $this->_fields['TotalWeight']['FieldValue'];
    }

    /**
     * Set the value of TotalWeight, return this.
     *
     * @param totalWeight
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTotalWeight($value)
    {
        $this->setTotalWeight($value);

        return $this;
    }

    /**
     * Get the value of the SellerDeclaredValue property.
     *
     * @return Amount sellerDeclaredValue
     */
    public function getSellerDeclaredValue()
    {
        return $this->_fields['SellerDeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of the SellerDeclaredValue property.
     *
     * @param Amount sellerDeclaredValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerDeclaredValue($value)
    {
        $this->_fields['SellerDeclaredValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerDeclaredValue is set.
     *
     * @return true if SellerDeclaredValue is set
     */
    public function isSetSellerDeclaredValue()
    {
        return null !== $this->_fields['SellerDeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of SellerDeclaredValue, return this.
     *
     * @param sellerDeclaredValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerDeclaredValue($value)
    {
        $this->setSellerDeclaredValue($value);

        return $this;
    }
}
