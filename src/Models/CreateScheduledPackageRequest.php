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
 * @package  MWS Easy Ship Section Service
 * @version  2018-09-01
 * Library Version: 2018-09-01
 * Generated: Thu Sep 27 07:44:07 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * CreateScheduledPackageRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>AmazonOrderId: string</li>
 * <li>MarketplaceId: string</li>
 * <li>PackageRequestDetails: PackageRequestDetails</li>
 *
 * </ul>
 */
class CreateScheduledPackageRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'              => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmazonOrderId'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceId'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'PackageRequestDetails' => ['FieldValue' => null, 'FieldType' => 'PackageRequestDetails'],
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
     * Get the value of the PackageRequestDetails property.
     *
     * @return PackageRequestDetails packageRequestDetails
     */
    public function getPackageRequestDetails()
    {
        return $this->_fields['PackageRequestDetails']['FieldValue'];
    }

    /**
     * Set the value of the PackageRequestDetails property.
     *
     * @param PackageRequestDetails packageRequestDetails
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageRequestDetails($value)
    {
        $this->_fields['PackageRequestDetails']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageRequestDetails is set.
     *
     * @return true if PackageRequestDetails is set
     */
    public function isSetPackageRequestDetails()
    {
        return null !== $this->_fields['PackageRequestDetails']['FieldValue'];
    }

    /**
     * Set the value of PackageRequestDetails, return this.
     *
     * @param packageRequestDetails
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageRequestDetails($value)
    {
        $this->setPackageRequestDetails($value);

        return $this;
    }
}
