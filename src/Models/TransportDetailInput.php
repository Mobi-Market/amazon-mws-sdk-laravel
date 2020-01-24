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
 * TransportDetailInput.
 *
 * Properties:
 * <ul>
 *
 * <li>PartneredSmallParcelData: PartneredSmallParcelDataInput</li>
 * <li>NonPartneredSmallParcelData: NonPartneredSmallParcelDataInput</li>
 * <li>PartneredLtlData: PartneredLtlDataInput</li>
 * <li>NonPartneredLtlData: NonPartneredLtlDataInput</li>
 *
 * </ul>
 */
class TransportDetailInput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PartneredSmallParcelData'    => ['FieldValue' => null, 'FieldType' => 'PartneredSmallParcelDataInput'],
            'NonPartneredSmallParcelData' => ['FieldValue' => null, 'FieldType' => 'NonPartneredSmallParcelDataInput'],
            'PartneredLtlData'            => ['FieldValue' => null, 'FieldType' => 'PartneredLtlDataInput'],
            'NonPartneredLtlData'         => ['FieldValue' => null, 'FieldType' => 'NonPartneredLtlDataInput'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PartneredSmallParcelData property.
     *
     * @return PartneredSmallParcelDataInput partneredSmallParcelData
     */
    public function getPartneredSmallParcelData()
    {
        return $this->_fields['PartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of the PartneredSmallParcelData property.
     *
     * @param PartneredSmallParcelDataInput partneredSmallParcelData
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPartneredSmallParcelData($value)
    {
        $this->_fields['PartneredSmallParcelData']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PartneredSmallParcelData is set.
     *
     * @return true if PartneredSmallParcelData is set
     */
    public function isSetPartneredSmallParcelData()
    {
        return null !== $this->_fields['PartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of PartneredSmallParcelData, return this.
     *
     * @param partneredSmallParcelData
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPartneredSmallParcelData($value)
    {
        $this->setPartneredSmallParcelData($value);

        return $this;
    }

    /**
     * Get the value of the NonPartneredSmallParcelData property.
     *
     * @return NonPartneredSmallParcelDataInput nonPartneredSmallParcelData
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->_fields['NonPartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of the NonPartneredSmallParcelData property.
     *
     * @param NonPartneredSmallParcelDataInput nonPartneredSmallParcelData
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNonPartneredSmallParcelData($value)
    {
        $this->_fields['NonPartneredSmallParcelData']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NonPartneredSmallParcelData is set.
     *
     * @return true if NonPartneredSmallParcelData is set
     */
    public function isSetNonPartneredSmallParcelData()
    {
        return null !== $this->_fields['NonPartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of NonPartneredSmallParcelData, return this.
     *
     * @param nonPartneredSmallParcelData
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNonPartneredSmallParcelData($value)
    {
        $this->setNonPartneredSmallParcelData($value);

        return $this;
    }

    /**
     * Get the value of the PartneredLtlData property.
     *
     * @return PartneredLtlDataInput partneredLtlData
     */
    public function getPartneredLtlData()
    {
        return $this->_fields['PartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of the PartneredLtlData property.
     *
     * @param PartneredLtlDataInput partneredLtlData
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPartneredLtlData($value)
    {
        $this->_fields['PartneredLtlData']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PartneredLtlData is set.
     *
     * @return true if PartneredLtlData is set
     */
    public function isSetPartneredLtlData()
    {
        return null !== $this->_fields['PartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of PartneredLtlData, return this.
     *
     * @param partneredLtlData
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPartneredLtlData($value)
    {
        $this->setPartneredLtlData($value);

        return $this;
    }

    /**
     * Get the value of the NonPartneredLtlData property.
     *
     * @return NonPartneredLtlDataInput nonPartneredLtlData
     */
    public function getNonPartneredLtlData()
    {
        return $this->_fields['NonPartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of the NonPartneredLtlData property.
     *
     * @param NonPartneredLtlDataInput nonPartneredLtlData
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNonPartneredLtlData($value)
    {
        $this->_fields['NonPartneredLtlData']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NonPartneredLtlData is set.
     *
     * @return true if NonPartneredLtlData is set
     */
    public function isSetNonPartneredLtlData()
    {
        return null !== $this->_fields['NonPartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of NonPartneredLtlData, return this.
     *
     * @param nonPartneredLtlData
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNonPartneredLtlData($value)
    {
        $this->setNonPartneredLtlData($value);

        return $this;
    }
}
