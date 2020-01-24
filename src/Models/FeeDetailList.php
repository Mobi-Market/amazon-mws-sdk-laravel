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
 * FeeDetailList.
 *
 * Properties:
 * <ul>
 *
 * <li>FeeDetail: array</li>
 *
 * </ul>
 */
class FeeDetailList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'FeeDetail' => ['FieldValue' => [], 'FieldType' => ['FeeDetail']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the FeeDetail property.
     *
     * @return List<FeeDetail> feeDetail
     */
    public function getFeeDetail()
    {
        if (null == $this->_fields['FeeDetail']['FieldValue']) {
            $this->_fields['FeeDetail']['FieldValue'] = [];
        }

        return $this->_fields['FeeDetail']['FieldValue'];
    }

    /**
     * Set the value of the FeeDetail property.
     *
     * @param array feeDetail
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeeDetail($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FeeDetail']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear FeeDetail.
     */
    public function unsetFeeDetail(): void
    {
        $this->_fields['FeeDetail']['FieldValue'] = [];
    }

    /**
     * Check to see if FeeDetail is set.
     *
     * @return true if FeeDetail is set
     */
    public function isSetFeeDetail()
    {
        return !empty($this->_fields['FeeDetail']['FieldValue']);
    }

    /**
     * Add values for FeeDetail, return this.
     *
     * @param feeDetail
     *             New values to add
     *
     * @return $this instance
     */
    public function withFeeDetail()
    {
        foreach (\func_get_args() as $FeeDetail) {
            $this->_fields['FeeDetail']['FieldValue'][] = $FeeDetail;
        }

        return $this;
    }
}
