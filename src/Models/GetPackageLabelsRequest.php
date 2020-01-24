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
 * GetPackageLabelsRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>ShipmentId: string</li>
 * <li>PageType: string</li>
 * <li>NumberOfPackages: int</li>
 *
 * </ul>
 */
class GetPackageLabelsRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipmentId'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'PageType'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'NumberOfPackages' => ['FieldValue' => null, 'FieldType' => 'int'],
        ];
        parent::__construct($data);
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
     * Get the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set
     */
    public function isSetMWSAuthToken()
    {
        return null !== $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Get the value of the ShipmentId property.
     *
     * @return string shipmentId
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set
     */
    public function isSetShipmentId()
    {
        return null !== $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);

        return $this;
    }

    /**
     * Get the value of the PageType property.
     *
     * @return string pageType
     */
    public function getPageType()
    {
        return $this->_fields['PageType']['FieldValue'];
    }

    /**
     * Set the value of the PageType property.
     *
     * @param string pageType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPageType($value)
    {
        $this->_fields['PageType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PageType is set.
     *
     * @return true if PageType is set
     */
    public function isSetPageType()
    {
        return null !== $this->_fields['PageType']['FieldValue'];
    }

    /**
     * Set the value of PageType, return this.
     *
     * @param pageType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPageType($value)
    {
        $this->setPageType($value);

        return $this;
    }

    /**
     * Get the value of the NumberOfPackages property.
     *
     * @return int numberOfPackages
     */
    public function getNumberOfPackages()
    {
        return $this->_fields['NumberOfPackages']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfPackages property.
     *
     * @param int numberOfPackages
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNumberOfPackages($value)
    {
        $this->_fields['NumberOfPackages']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NumberOfPackages is set.
     *
     * @return true if NumberOfPackages is set
     */
    public function isSetNumberOfPackages()
    {
        return null !== $this->_fields['NumberOfPackages']['FieldValue'];
    }

    /**
     * Set the value of NumberOfPackages, return this.
     *
     * @param numberOfPackages
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNumberOfPackages($value)
    {
        $this->setNumberOfPackages($value);

        return $this;
    }
}
