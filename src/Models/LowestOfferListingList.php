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
 * LowestOfferListingList.
 *
 * Properties:
 * <ul>
 *
 * <li>LowestOfferListing: array</li>
 *
 * </ul>
 */
class LowestOfferListingList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'LowestOfferListing' => ['FieldValue' => [], 'FieldType' => ['LowestOfferListingType']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the LowestOfferListing property.
     *
     * @return List<LowestOfferListingType> lowestOfferListing
     */
    public function getLowestOfferListing()
    {
        if (null == $this->_fields['LowestOfferListing']['FieldValue']) {
            $this->_fields['LowestOfferListing']['FieldValue'] = [];
        }

        return $this->_fields['LowestOfferListing']['FieldValue'];
    }

    /**
     * Set the value of the LowestOfferListing property.
     *
     * @param array lowestOfferListing
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLowestOfferListing($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['LowestOfferListing']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear LowestOfferListing.
     */
    public function unsetLowestOfferListing(): void
    {
        $this->_fields['LowestOfferListing']['FieldValue'] = [];
    }

    /**
     * Check to see if LowestOfferListing is set.
     *
     * @return true if LowestOfferListing is set
     */
    public function isSetLowestOfferListing()
    {
        return !empty($this->_fields['LowestOfferListing']['FieldValue']);
    }

    /**
     * Add values for LowestOfferListing, return this.
     *
     * @param lowestOfferListing
     *             New values to add
     *
     * @return $this instance
     */
    public function withLowestOfferListing()
    {
        foreach (\func_get_args() as $LowestOfferListing) {
            $this->_fields['LowestOfferListing']['FieldValue'][] = $LowestOfferListing;
        }

        return $this;
    }
}
