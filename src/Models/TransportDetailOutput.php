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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * TransportDetailOutput.
 *
 * Properties:
 * <ul>
 *
 * <li>PartneredSmallParcelData: PartneredSmallParcelDataOutput</li>
 * <li>NonPartneredSmallParcelData: NonPartneredSmallParcelDataOutput</li>
 * <li>PartneredLtlData: PartneredLtlDataOutput</li>
 * <li>NonPartneredLtlData: NonPartneredLtlDataOutput</li>
 *
 * </ul>
 */
class TransportDetailOutput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PartneredSmallParcelData'    => ['FieldValue' => null, 'FieldType' => 'PartneredSmallParcelDataOutput'],
            'NonPartneredSmallParcelData' => ['FieldValue' => null, 'FieldType' => 'NonPartneredSmallParcelDataOutput'],
            'PartneredLtlData'            => ['FieldValue' => null, 'FieldType' => 'PartneredLtlDataOutput'],
            'NonPartneredLtlData'         => ['FieldValue' => null, 'FieldType' => 'NonPartneredLtlDataOutput'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PartneredSmallParcelData property.
     *
     * @return PartneredSmallParcelDataOutput partneredSmallParcelData
     */
    public function getPartneredSmallParcelData()
    {
        return $this->_fields['PartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of the PartneredSmallParcelData property.
     *
     * @param PartneredSmallParcelDataOutput partneredSmallParcelData
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
     * @return NonPartneredSmallParcelDataOutput nonPartneredSmallParcelData
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->_fields['NonPartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of the NonPartneredSmallParcelData property.
     *
     * @param NonPartneredSmallParcelDataOutput nonPartneredSmallParcelData
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
     * @return PartneredLtlDataOutput partneredLtlData
     */
    public function getPartneredLtlData()
    {
        return $this->_fields['PartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of the PartneredLtlData property.
     *
     * @param PartneredLtlDataOutput partneredLtlData
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
     * @return NonPartneredLtlDataOutput nonPartneredLtlData
     */
    public function getNonPartneredLtlData()
    {
        return $this->_fields['NonPartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of the NonPartneredLtlData property.
     *
     * @param NonPartneredLtlDataOutput nonPartneredLtlData
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
