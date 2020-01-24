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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * PartneredLtlDataOutput.
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
 * <li>AmazonCalculatedValue: Amount</li>
 * <li>PreviewPickupDate: string</li>
 * <li>PreviewDeliveryDate: string</li>
 * <li>PreviewFreightClass: string</li>
 * <li>AmazonReferenceId: string</li>
 * <li>IsBillOfLadingAvailable: bool</li>
 * <li>PartneredEstimate: PartneredEstimate</li>
 * <li>CarrierName: string</li>
 *
 * </ul>
 */
class PartneredLtlDataOutput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Contact'                 => ['FieldValue' => null, 'FieldType' => 'Contact'],
            'BoxCount'                => ['FieldValue' => null, 'FieldType' => 'int'],
            'SellerFreightClass'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'FreightReadyDate'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'PalletList'              => ['FieldValue' => null, 'FieldType' => 'PalletList'],
            'TotalWeight'             => ['FieldValue' => null, 'FieldType' => 'Weight'],
            'SellerDeclaredValue'     => ['FieldValue' => null, 'FieldType' => 'Amount'],
            'AmazonCalculatedValue'   => ['FieldValue' => null, 'FieldType' => 'Amount'],
            'PreviewPickupDate'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'PreviewDeliveryDate'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'PreviewFreightClass'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmazonReferenceId'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsBillOfLadingAvailable' => ['FieldValue' => null, 'FieldType' => 'bool'],
            'PartneredEstimate'       => ['FieldValue' => null, 'FieldType' => 'PartneredEstimate'],
            'CarrierName'             => ['FieldValue' => null, 'FieldType' => 'string'],
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
     * @return long boxCount
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

    /**
     * Get the value of the AmazonCalculatedValue property.
     *
     * @return Amount amazonCalculatedValue
     */
    public function getAmazonCalculatedValue()
    {
        return $this->_fields['AmazonCalculatedValue']['FieldValue'];
    }

    /**
     * Set the value of the AmazonCalculatedValue property.
     *
     * @param Amount amazonCalculatedValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonCalculatedValue($value)
    {
        $this->_fields['AmazonCalculatedValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonCalculatedValue is set.
     *
     * @return true if AmazonCalculatedValue is set
     */
    public function isSetAmazonCalculatedValue()
    {
        return null !== $this->_fields['AmazonCalculatedValue']['FieldValue'];
    }

    /**
     * Set the value of AmazonCalculatedValue, return this.
     *
     * @param amazonCalculatedValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonCalculatedValue($value)
    {
        $this->setAmazonCalculatedValue($value);

        return $this;
    }

    /**
     * Get the value of the PreviewPickupDate property.
     *
     * @return string previewPickupDate
     */
    public function getPreviewPickupDate()
    {
        return $this->_fields['PreviewPickupDate']['FieldValue'];
    }

    /**
     * Set the value of the PreviewPickupDate property.
     *
     * @param string previewPickupDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPreviewPickupDate($value)
    {
        $this->_fields['PreviewPickupDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PreviewPickupDate is set.
     *
     * @return true if PreviewPickupDate is set
     */
    public function isSetPreviewPickupDate()
    {
        return null !== $this->_fields['PreviewPickupDate']['FieldValue'];
    }

    /**
     * Set the value of PreviewPickupDate, return this.
     *
     * @param previewPickupDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPreviewPickupDate($value)
    {
        $this->setPreviewPickupDate($value);

        return $this;
    }

    /**
     * Get the value of the PreviewDeliveryDate property.
     *
     * @return string previewDeliveryDate
     */
    public function getPreviewDeliveryDate()
    {
        return $this->_fields['PreviewDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the PreviewDeliveryDate property.
     *
     * @param string previewDeliveryDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPreviewDeliveryDate($value)
    {
        $this->_fields['PreviewDeliveryDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PreviewDeliveryDate is set.
     *
     * @return true if PreviewDeliveryDate is set
     */
    public function isSetPreviewDeliveryDate()
    {
        return null !== $this->_fields['PreviewDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of PreviewDeliveryDate, return this.
     *
     * @param previewDeliveryDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPreviewDeliveryDate($value)
    {
        $this->setPreviewDeliveryDate($value);

        return $this;
    }

    /**
     * Get the value of the PreviewFreightClass property.
     *
     * @return string previewFreightClass
     */
    public function getPreviewFreightClass()
    {
        return $this->_fields['PreviewFreightClass']['FieldValue'];
    }

    /**
     * Set the value of the PreviewFreightClass property.
     *
     * @param string previewFreightClass
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPreviewFreightClass($value)
    {
        $this->_fields['PreviewFreightClass']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PreviewFreightClass is set.
     *
     * @return true if PreviewFreightClass is set
     */
    public function isSetPreviewFreightClass()
    {
        return null !== $this->_fields['PreviewFreightClass']['FieldValue'];
    }

    /**
     * Set the value of PreviewFreightClass, return this.
     *
     * @param previewFreightClass
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPreviewFreightClass($value)
    {
        $this->setPreviewFreightClass($value);

        return $this;
    }

    /**
     * Get the value of the AmazonReferenceId property.
     *
     * @return string amazonReferenceId
     */
    public function getAmazonReferenceId()
    {
        return $this->_fields['AmazonReferenceId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonReferenceId property.
     *
     * @param string amazonReferenceId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonReferenceId($value)
    {
        $this->_fields['AmazonReferenceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonReferenceId is set.
     *
     * @return true if AmazonReferenceId is set
     */
    public function isSetAmazonReferenceId()
    {
        return null !== $this->_fields['AmazonReferenceId']['FieldValue'];
    }

    /**
     * Set the value of AmazonReferenceId, return this.
     *
     * @param amazonReferenceId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonReferenceId($value)
    {
        $this->setAmazonReferenceId($value);

        return $this;
    }

    /**
     * Check the value of IsBillOfLadingAvailable.
     *
     * @return true if IsBillOfLadingAvailable is set to true
     */
    public function isIsBillOfLadingAvailable()
    {
        return $this->_fields['IsBillOfLadingAvailable']['FieldValue'];
    }

    /**
     * Get the value of the IsBillOfLadingAvailable property.
     *
     * @return bool isBillOfLadingAvailable
     */
    public function getIsBillOfLadingAvailable()
    {
        return $this->_fields['IsBillOfLadingAvailable']['FieldValue'];
    }

    /**
     * Set the value of the IsBillOfLadingAvailable property.
     *
     * @param bool isBillOfLadingAvailable
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIsBillOfLadingAvailable($value)
    {
        $this->_fields['IsBillOfLadingAvailable']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if IsBillOfLadingAvailable is set.
     *
     * @return true if IsBillOfLadingAvailable is set
     */
    public function isSetIsBillOfLadingAvailable()
    {
        return null !== $this->_fields['IsBillOfLadingAvailable']['FieldValue'];
    }

    /**
     * Set the value of IsBillOfLadingAvailable, return this.
     *
     * @param isBillOfLadingAvailable
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIsBillOfLadingAvailable($value)
    {
        $this->setIsBillOfLadingAvailable($value);

        return $this;
    }

    /**
     * Get the value of the PartneredEstimate property.
     *
     * @return PartneredEstimate partneredEstimate
     */
    public function getPartneredEstimate()
    {
        return $this->_fields['PartneredEstimate']['FieldValue'];
    }

    /**
     * Set the value of the PartneredEstimate property.
     *
     * @param PartneredEstimate partneredEstimate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPartneredEstimate($value)
    {
        $this->_fields['PartneredEstimate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PartneredEstimate is set.
     *
     * @return true if PartneredEstimate is set
     */
    public function isSetPartneredEstimate()
    {
        return null !== $this->_fields['PartneredEstimate']['FieldValue'];
    }

    /**
     * Set the value of PartneredEstimate, return this.
     *
     * @param partneredEstimate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPartneredEstimate($value)
    {
        $this->setPartneredEstimate($value);

        return $this;
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return string carrierName
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set
     */
    public function isSetCarrierName()
    {
        return null !== $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);

        return $this;
    }
}
