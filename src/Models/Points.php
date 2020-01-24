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
 * Points.
 *
 * Properties:
 * <ul>
 *
 * <li>PointsNumber: int</li>
 * <li>PointsMonetaryValue: MoneyType</li>
 *
 * </ul>
 */
class Points extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PointsNumber'        => ['FieldValue' => null, 'FieldType' => 'int'],
            'PointsMonetaryValue' => ['FieldValue' => null, 'FieldType' => 'MoneyType'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PointsNumber property.
     *
     * @return int pointsNumber
     */
    public function getPointsNumber()
    {
        return $this->_fields['PointsNumber']['FieldValue'];
    }

    /**
     * Set the value of the PointsNumber property.
     *
     * @param int pointsNumber
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPointsNumber($value)
    {
        $this->_fields['PointsNumber']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PointsNumber is set.
     *
     * @return true if PointsNumber is set
     */
    public function isSetPointsNumber()
    {
        return null !== $this->_fields['PointsNumber']['FieldValue'];
    }

    /**
     * Set the value of PointsNumber, return this.
     *
     * @param pointsNumber
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPointsNumber($value)
    {
        $this->setPointsNumber($value);

        return $this;
    }

    /**
     * Get the value of the PointsMonetaryValue property.
     *
     * @return MoneyType pointsMonetaryValue
     */
    public function getPointsMonetaryValue()
    {
        return $this->_fields['PointsMonetaryValue']['FieldValue'];
    }

    /**
     * Set the value of the PointsMonetaryValue property.
     *
     * @param MoneyType pointsMonetaryValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPointsMonetaryValue($value)
    {
        $this->_fields['PointsMonetaryValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PointsMonetaryValue is set.
     *
     * @return true if PointsMonetaryValue is set
     */
    public function isSetPointsMonetaryValue()
    {
        return null !== $this->_fields['PointsMonetaryValue']['FieldValue'];
    }

    /**
     * Set the value of PointsMonetaryValue, return this.
     *
     * @param pointsMonetaryValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPointsMonetaryValue($value)
    {
        $this->setPointsMonetaryValue($value);

        return $this;
    }
}
