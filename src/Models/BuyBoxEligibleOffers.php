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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * BuyBoxEligibleOffers.
 *
 * Properties:
 * <ul>
 *
 * <li>OfferCount: array</li>
 *
 * </ul>
 */
class BuyBoxEligibleOffers extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'OfferCount' => ['FieldValue' => [], 'FieldType' => ['OfferCountType']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the OfferCount property.
     *
     * @return List<OfferCountType> offerCount
     */
    public function getOfferCount()
    {
        if (null == $this->_fields['OfferCount']['FieldValue']) {
            $this->_fields['OfferCount']['FieldValue'] = [];
        }

        return $this->_fields['OfferCount']['FieldValue'];
    }

    /**
     * Set the value of the OfferCount property.
     *
     * @param array offerCount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOfferCount($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OfferCount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear OfferCount.
     */
    public function unsetOfferCount(): void
    {
        $this->_fields['OfferCount']['FieldValue'] = [];
    }

    /**
     * Check to see if OfferCount is set.
     *
     * @return true if OfferCount is set
     */
    public function isSetOfferCount()
    {
        return !empty($this->_fields['OfferCount']['FieldValue']);
    }

    /**
     * Add values for OfferCount, return this.
     *
     * @param offerCount
     *             New values to add
     *
     * @return $this instance
     */
    public function withOfferCount()
    {
        foreach (\func_get_args() as $OfferCount) {
            $this->_fields['OfferCount']['FieldValue'][] = $OfferCount;
        }

        return $this;
    }
}
