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
 * UpdateScheduledPackagesRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>ScheduledPackageUpdateDetailsList: array</li>
 *
 * </ul>
 */
class UpdateScheduledPackagesRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'                          => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'                      => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceId'                     => ['FieldValue' => null, 'FieldType' => 'string'],
            'ScheduledPackageUpdateDetailsList' => ['FieldValue' => [], 'FieldType' => ['ScheduledPackageUpdateDetails'], 'ListMemberName' => 'ScheduledPackageUpdateDetails'],
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
     * Get the value of the ScheduledPackageUpdateDetailsList property.
     *
     * @return List<ScheduledPackageUpdateDetails> scheduledPackageUpdateDetailsList
     */
    public function getScheduledPackageUpdateDetailsList()
    {
        if (null == $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue']) {
            $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'] = [];
        }

        return $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackageUpdateDetailsList property.
     *
     * @param array scheduledPackageUpdateDetailsList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledPackageUpdateDetailsList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ScheduledPackageUpdateDetailsList.
     */
    public function unsetScheduledPackageUpdateDetailsList(): void
    {
        $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'] = [];
    }

    /**
     * Check to see if ScheduledPackageUpdateDetailsList is set.
     *
     * @return true if ScheduledPackageUpdateDetailsList is set
     */
    public function isSetScheduledPackageUpdateDetailsList()
    {
        return !empty($this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue']);
    }

    /**
     * Add values for ScheduledPackageUpdateDetailsList, return this.
     *
     * @param scheduledPackageUpdateDetailsList
     *             New values to add
     *
     * @return $this instance
     */
    public function withScheduledPackageUpdateDetailsList()
    {
        foreach (\func_get_args() as $ScheduledPackageUpdateDetailsList) {
            $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'][] = $ScheduledPackageUpdateDetailsList;
        }

        return $this;
    }
}
