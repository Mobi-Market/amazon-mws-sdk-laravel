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
 * SalesRankList.
 *
 * Properties:
 * <ul>
 *
 * <li>SalesRank: array</li>
 *
 * </ul>
 */
class SalesRankList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SalesRank' => ['FieldValue' => [], 'FieldType' => ['SalesRankType']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SalesRank property.
     *
     * @return List<SalesRankType> salesRank
     */
    public function getSalesRank()
    {
        if (null == $this->_fields['SalesRank']['FieldValue']) {
            $this->_fields['SalesRank']['FieldValue'] = [];
        }

        return $this->_fields['SalesRank']['FieldValue'];
    }

    /**
     * Set the value of the SalesRank property.
     *
     * @param array salesRank
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSalesRank($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['SalesRank']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear SalesRank.
     */
    public function unsetSalesRank(): void
    {
        $this->_fields['SalesRank']['FieldValue'] = [];
    }

    /**
     * Check to see if SalesRank is set.
     *
     * @return true if SalesRank is set
     */
    public function isSetSalesRank()
    {
        return !empty($this->_fields['SalesRank']['FieldValue']);
    }

    /**
     * Add values for SalesRank, return this.
     *
     * @param salesRank
     *             New values to add
     *
     * @return $this instance
     */
    public function withSalesRank()
    {
        foreach (\func_get_args() as $SalesRank) {
            $this->_fields['SalesRank']['FieldValue'][] = $SalesRank;
        }

        return $this;
    }
}
