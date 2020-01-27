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
 * NumberOfOfferListingsList.
 *
 * Properties:
 * <ul>
 *
 * <li>OfferListingCount: array</li>
 *
 * </ul>
 */
class NumberOfOfferListingsList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'OfferListingCount' => ['FieldValue' => [], 'FieldType' => ['OfferListingCountType']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the OfferListingCount property.
     *
     * @return List<OfferListingCountType> offerListingCount
     */
    public function getOfferListingCount()
    {
        if (null == $this->_fields['OfferListingCount']['FieldValue']) {
            $this->_fields['OfferListingCount']['FieldValue'] = [];
        }

        return $this->_fields['OfferListingCount']['FieldValue'];
    }

    /**
     * Set the value of the OfferListingCount property.
     *
     * @param array offerListingCount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOfferListingCount($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OfferListingCount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear OfferListingCount.
     */
    public function unsetOfferListingCount(): void
    {
        $this->_fields['OfferListingCount']['FieldValue'] = [];
    }

    /**
     * Check to see if OfferListingCount is set.
     *
     * @return true if OfferListingCount is set
     */
    public function isSetOfferListingCount()
    {
        return !empty($this->_fields['OfferListingCount']['FieldValue']);
    }

    /**
     * Add values for OfferListingCount, return this.
     *
     * @param offerListingCount
     *             New values to add
     *
     * @return $this instance
     */
    public function withOfferListingCount()
    {
        foreach (\func_get_args() as $OfferListingCount) {
            $this->_fields['OfferListingCount']['FieldValue'][] = $OfferListingCount;
        }

        return $this;
    }
}
