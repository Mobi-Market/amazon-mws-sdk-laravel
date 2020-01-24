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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ShippingService.
 *
 * Properties:
 * <ul>
 *
 * <li>ShippingServiceName: string</li>
 * <li>CarrierName: string</li>
 * <li>ShippingServiceId: string</li>
 * <li>ShippingServiceOfferId: string</li>
 * <li>ShipDate: string</li>
 * <li>EarliestEstimatedDeliveryDate: string</li>
 * <li>LatestEstimatedDeliveryDate: string</li>
 * <li>Rate: CurrencyAmount</li>
 * <li>ShippingServiceOptions: ShippingServiceOptions</li>
 * <li>AvailableShippingServiceOptions: AvailableShippingServiceOptions</li>
 * <li>AvailableLabelFormats: array</li>
 * <li>AvailableFormatOptionsForLabel: array</li>
 * <li>RequiresAdditionalSellerInputs: bool</li>
 *
 * </ul>
 */
class ShippingService extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShippingServiceName'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'CarrierName'                     => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippingServiceId'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippingServiceOfferId'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipDate'                        => ['FieldValue' => null, 'FieldType' => 'string'],
            'EarliestEstimatedDeliveryDate'   => ['FieldValue' => null, 'FieldType' => 'string'],
            'LatestEstimatedDeliveryDate'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'Rate'                            => ['FieldValue' => null, 'FieldType' => 'CurrencyAmount'],
            'ShippingServiceOptions'          => ['FieldValue' => null, 'FieldType' => 'ShippingServiceOptions'],
            'AvailableShippingServiceOptions' => ['FieldValue' => null, 'FieldType' => 'AvailableShippingServiceOptions'],
            'AvailableLabelFormats'           => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'LabelFormat'],
            'AvailableFormatOptionsForLabel'  => ['FieldValue' => [], 'FieldType' => ['LabelFormatOption'], 'ListMemberName' => 'LabelFormatOption'],
            'RequiresAdditionalSellerInputs'  => ['FieldValue' => null, 'FieldType' => 'bool'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ShippingServiceName property.
     *
     * @return string shippingServiceName
     */
    public function getShippingServiceName()
    {
        return $this->_fields['ShippingServiceName']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceName property.
     *
     * @param string shippingServiceName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingServiceName($value)
    {
        $this->_fields['ShippingServiceName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingServiceName is set.
     *
     * @return true if ShippingServiceName is set
     */
    public function isSetShippingServiceName()
    {
        return null !== $this->_fields['ShippingServiceName']['FieldValue'];
    }

    /**
     * Set the value of ShippingServiceName, return this.
     *
     * @param shippingServiceName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingServiceName($value)
    {
        $this->setShippingServiceName($value);

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

    /**
     * Get the value of the ShippingServiceId property.
     *
     * @return string shippingServiceId
     */
    public function getShippingServiceId()
    {
        return $this->_fields['ShippingServiceId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceId property.
     *
     * @param string shippingServiceId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingServiceId($value)
    {
        $this->_fields['ShippingServiceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingServiceId is set.
     *
     * @return true if ShippingServiceId is set
     */
    public function isSetShippingServiceId()
    {
        return null !== $this->_fields['ShippingServiceId']['FieldValue'];
    }

    /**
     * Set the value of ShippingServiceId, return this.
     *
     * @param shippingServiceId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingServiceId($value)
    {
        $this->setShippingServiceId($value);

        return $this;
    }

    /**
     * Get the value of the ShippingServiceOfferId property.
     *
     * @return string shippingServiceOfferId
     */
    public function getShippingServiceOfferId()
    {
        return $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOfferId property.
     *
     * @param string shippingServiceOfferId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingServiceOfferId($value)
    {
        $this->_fields['ShippingServiceOfferId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingServiceOfferId is set.
     *
     * @return true if ShippingServiceOfferId is set
     */
    public function isSetShippingServiceOfferId()
    {
        return null !== $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }

    /**
     * Set the value of ShippingServiceOfferId, return this.
     *
     * @param shippingServiceOfferId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingServiceOfferId($value)
    {
        $this->setShippingServiceOfferId($value);

        return $this;
    }

    /**
     * Get the value of the ShipDate property.
     *
     * @return XMLGregorianCalendar shipDate
     */
    public function getShipDate()
    {
        return $this->_fields['ShipDate']['FieldValue'];
    }

    /**
     * Set the value of the ShipDate property.
     *
     * @param string shipDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipDate($value)
    {
        $this->_fields['ShipDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipDate is set.
     *
     * @return true if ShipDate is set
     */
    public function isSetShipDate()
    {
        return null !== $this->_fields['ShipDate']['FieldValue'];
    }

    /**
     * Set the value of ShipDate, return this.
     *
     * @param shipDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipDate($value)
    {
        $this->setShipDate($value);

        return $this;
    }

    /**
     * Get the value of the EarliestEstimatedDeliveryDate property.
     *
     * @return XMLGregorianCalendar earliestEstimatedDeliveryDate
     */
    public function getEarliestEstimatedDeliveryDate()
    {
        return $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestEstimatedDeliveryDate property.
     *
     * @param string earliestEstimatedDeliveryDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEarliestEstimatedDeliveryDate($value)
    {
        $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EarliestEstimatedDeliveryDate is set.
     *
     * @return true if EarliestEstimatedDeliveryDate is set
     */
    public function isSetEarliestEstimatedDeliveryDate()
    {
        return null !== $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of EarliestEstimatedDeliveryDate, return this.
     *
     * @param earliestEstimatedDeliveryDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEarliestEstimatedDeliveryDate($value)
    {
        $this->setEarliestEstimatedDeliveryDate($value);

        return $this;
    }

    /**
     * Get the value of the LatestEstimatedDeliveryDate property.
     *
     * @return XMLGregorianCalendar latestEstimatedDeliveryDate
     */
    public function getLatestEstimatedDeliveryDate()
    {
        return $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestEstimatedDeliveryDate property.
     *
     * @param string latestEstimatedDeliveryDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLatestEstimatedDeliveryDate($value)
    {
        $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LatestEstimatedDeliveryDate is set.
     *
     * @return true if LatestEstimatedDeliveryDate is set
     */
    public function isSetLatestEstimatedDeliveryDate()
    {
        return null !== $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of LatestEstimatedDeliveryDate, return this.
     *
     * @param latestEstimatedDeliveryDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLatestEstimatedDeliveryDate($value)
    {
        $this->setLatestEstimatedDeliveryDate($value);

        return $this;
    }

    /**
     * Get the value of the Rate property.
     *
     * @return CurrencyAmount rate
     */
    public function getRate()
    {
        return $this->_fields['Rate']['FieldValue'];
    }

    /**
     * Set the value of the Rate property.
     *
     * @param CurrencyAmount rate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRate($value)
    {
        $this->_fields['Rate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Rate is set.
     *
     * @return true if Rate is set
     */
    public function isSetRate()
    {
        return null !== $this->_fields['Rate']['FieldValue'];
    }

    /**
     * Set the value of Rate, return this.
     *
     * @param rate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRate($value)
    {
        $this->setRate($value);

        return $this;
    }

    /**
     * Get the value of the ShippingServiceOptions property.
     *
     * @return ShippingServiceOptions shippingServiceOptions
     */
    public function getShippingServiceOptions()
    {
        return $this->_fields['ShippingServiceOptions']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOptions property.
     *
     * @param ShippingServiceOptions shippingServiceOptions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShippingServiceOptions($value)
    {
        $this->_fields['ShippingServiceOptions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShippingServiceOptions is set.
     *
     * @return true if ShippingServiceOptions is set
     */
    public function isSetShippingServiceOptions()
    {
        return null !== $this->_fields['ShippingServiceOptions']['FieldValue'];
    }

    /**
     * Set the value of ShippingServiceOptions, return this.
     *
     * @param shippingServiceOptions
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShippingServiceOptions($value)
    {
        $this->setShippingServiceOptions($value);

        return $this;
    }

    /**
     * Get the value of the AvailableShippingServiceOptions property.
     *
     * @return AvailableShippingServiceOptions availableShippingServiceOptions
     */
    public function getAvailableShippingServiceOptions()
    {
        return $this->_fields['AvailableShippingServiceOptions']['FieldValue'];
    }

    /**
     * Set the value of the AvailableShippingServiceOptions property.
     *
     * @param AvailableShippingServiceOptions availableShippingServiceOptions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAvailableShippingServiceOptions($value)
    {
        $this->_fields['AvailableShippingServiceOptions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AvailableShippingServiceOptions is set.
     *
     * @return true if AvailableShippingServiceOptions is set
     */
    public function isSetAvailableShippingServiceOptions()
    {
        return null !== $this->_fields['AvailableShippingServiceOptions']['FieldValue'];
    }

    /**
     * Set the value of AvailableShippingServiceOptions, return this.
     *
     * @param availableShippingServiceOptions
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAvailableShippingServiceOptions($value)
    {
        $this->setAvailableShippingServiceOptions($value);

        return $this;
    }

    /**
     * Get the value of the AvailableLabelFormats property.
     *
     * @return List<String> availableLabelFormats
     */
    public function getAvailableLabelFormats()
    {
        if (null == $this->_fields['AvailableLabelFormats']['FieldValue']) {
            $this->_fields['AvailableLabelFormats']['FieldValue'] = [];
        }

        return $this->_fields['AvailableLabelFormats']['FieldValue'];
    }

    /**
     * Set the value of the AvailableLabelFormats property.
     *
     * @param array availableLabelFormats
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAvailableLabelFormats($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AvailableLabelFormats']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AvailableLabelFormats.
     */
    public function unsetAvailableLabelFormats(): void
    {
        $this->_fields['AvailableLabelFormats']['FieldValue'] = [];
    }

    /**
     * Check to see if AvailableLabelFormats is set.
     *
     * @return true if AvailableLabelFormats is set
     */
    public function isSetAvailableLabelFormats()
    {
        return !empty($this->_fields['AvailableLabelFormats']['FieldValue']);
    }

    /**
     * Add values for AvailableLabelFormats, return this.
     *
     * @param availableLabelFormats
     *             New values to add
     *
     * @return $this instance
     */
    public function withAvailableLabelFormats()
    {
        foreach (\func_get_args() as $AvailableLabelFormats) {
            $this->_fields['AvailableLabelFormats']['FieldValue'][] = $AvailableLabelFormats;
        }

        return $this;
    }

    /**
     * Get the value of the AvailableFormatOptionsForLabel property.
     *
     * @return List<LabelFormatOption> availableFormatOptionsForLabel
     */
    public function getAvailableFormatOptionsForLabel()
    {
        if (null == $this->_fields['AvailableFormatOptionsForLabel']['FieldValue']) {
            $this->_fields['AvailableFormatOptionsForLabel']['FieldValue'] = [];
        }

        return $this->_fields['AvailableFormatOptionsForLabel']['FieldValue'];
    }

    /**
     * Set the value of the AvailableFormatOptionsForLabel property.
     *
     * @param array availableFormatOptionsForLabel
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAvailableFormatOptionsForLabel($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AvailableFormatOptionsForLabel']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear AvailableFormatOptionsForLabel.
     */
    public function unsetAvailableFormatOptionsForLabel(): void
    {
        $this->_fields['AvailableFormatOptionsForLabel']['FieldValue'] = [];
    }

    /**
     * Check to see if AvailableFormatOptionsForLabel is set.
     *
     * @return true if AvailableFormatOptionsForLabel is set
     */
    public function isSetAvailableFormatOptionsForLabel()
    {
        return !empty($this->_fields['AvailableFormatOptionsForLabel']['FieldValue']);
    }

    /**
     * Add values for AvailableFormatOptionsForLabel, return this.
     *
     * @param availableFormatOptionsForLabel
     *             New values to add
     *
     * @return $this instance
     */
    public function withAvailableFormatOptionsForLabel()
    {
        foreach (\func_get_args() as $AvailableFormatOptionsForLabel) {
            $this->_fields['AvailableFormatOptionsForLabel']['FieldValue'][] = $AvailableFormatOptionsForLabel;
        }

        return $this;
    }

    /**
     * Check the value of RequiresAdditionalSellerInputs.
     *
     * @return true if RequiresAdditionalSellerInputs is set to true
     */
    public function isRequiresAdditionalSellerInputs()
    {
        return $this->_fields['RequiresAdditionalSellerInputs']['FieldValue'];
    }

    /**
     * Get the value of the RequiresAdditionalSellerInputs property.
     *
     * @return bool requiresAdditionalSellerInputs
     */
    public function getRequiresAdditionalSellerInputs()
    {
        return $this->_fields['RequiresAdditionalSellerInputs']['FieldValue'];
    }

    /**
     * Set the value of the RequiresAdditionalSellerInputs property.
     *
     * @param bool requiresAdditionalSellerInputs
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRequiresAdditionalSellerInputs($value)
    {
        $this->_fields['RequiresAdditionalSellerInputs']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RequiresAdditionalSellerInputs is set.
     *
     * @return true if RequiresAdditionalSellerInputs is set
     */
    public function isSetRequiresAdditionalSellerInputs()
    {
        return null !== $this->_fields['RequiresAdditionalSellerInputs']['FieldValue'];
    }

    /**
     * Set the value of RequiresAdditionalSellerInputs, return this.
     *
     * @param requiresAdditionalSellerInputs
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRequiresAdditionalSellerInputs($value)
    {
        $this->setRequiresAdditionalSellerInputs($value);

        return $this;
    }
}
