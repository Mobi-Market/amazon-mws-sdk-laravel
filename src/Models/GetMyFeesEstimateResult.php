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
 * GetMyFeesEstimateResult.
 *
 * Properties:
 * <ul>
 *
 * <li>FeesEstimateResultList: FeesEstimateResultList</li>
 *
 * </ul>
 */
class GetMyFeesEstimateResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'FeesEstimateResultList' => ['FieldValue' => null, 'FieldType' => 'FeesEstimateResultList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the FeesEstimateResultList property.
     *
     * @return FeesEstimateResultList feesEstimateResultList
     */
    public function getFeesEstimateResultList()
    {
        return $this->_fields['FeesEstimateResultList']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateResultList property.
     *
     * @param FeesEstimateResultList feesEstimateResultList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeesEstimateResultList($value)
    {
        $this->_fields['FeesEstimateResultList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FeesEstimateResultList is set.
     *
     * @return true if FeesEstimateResultList is set
     */
    public function isSetFeesEstimateResultList()
    {
        return null !== $this->_fields['FeesEstimateResultList']['FieldValue'];
    }

    /**
     * Set the value of FeesEstimateResultList, return this.
     *
     * @param feesEstimateResultList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFeesEstimateResultList($value)
    {
        $this->setFeesEstimateResultList($value);

        return $this;
    }
}
