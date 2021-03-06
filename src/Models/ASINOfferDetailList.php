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
 * ASINOfferDetailList.
 *
 * Properties:
 * <ul>
 *
 * <li>Offer: array</li>
 *
 * </ul>
 */
class ASINOfferDetailList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Offer' => ['FieldValue' => [], 'FieldType' => ['ASINOfferDetail']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Offer property.
     *
     * @return List<ASINOfferDetail> offer
     */
    public function getOffer()
    {
        if (null == $this->_fields['Offer']['FieldValue']) {
            $this->_fields['Offer']['FieldValue'] = [];
        }

        return $this->_fields['Offer']['FieldValue'];
    }

    /**
     * Set the value of the Offer property.
     *
     * @param array offer
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOffer($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Offer']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Offer.
     */
    public function unsetOffer(): void
    {
        $this->_fields['Offer']['FieldValue'] = [];
    }

    /**
     * Check to see if Offer is set.
     *
     * @return true if Offer is set
     */
    public function isSetOffer()
    {
        return !empty($this->_fields['Offer']['FieldValue']);
    }

    /**
     * Add values for Offer, return this.
     *
     * @param offer
     *             New values to add
     *
     * @return $this instance
     */
    public function withOffer()
    {
        foreach (\func_get_args() as $Offer) {
            $this->_fields['Offer']['FieldValue'][] = $Offer;
        }

        return $this;
    }
}
