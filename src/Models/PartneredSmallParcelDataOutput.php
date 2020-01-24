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
 * PartneredSmallParcelDataOutput.
 *
 * Properties:
 * <ul>
 *
 * <li>PackageList: PartneredSmallParcelPackageOutputList</li>
 * <li>PartneredEstimate: PartneredEstimate</li>
 *
 * </ul>
 */
class PartneredSmallParcelDataOutput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'PackageList'       => ['FieldValue' => null, 'FieldType' => 'PartneredSmallParcelPackageOutputList'],
            'PartneredEstimate' => ['FieldValue' => null, 'FieldType' => 'PartneredEstimate'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the PackageList property.
     *
     * @return PartneredSmallParcelPackageOutputList packageList
     */
    public function getPackageList()
    {
        return $this->_fields['PackageList']['FieldValue'];
    }

    /**
     * Set the value of the PackageList property.
     *
     * @param PartneredSmallParcelPackageOutputList packageList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageList($value)
    {
        $this->_fields['PackageList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageList is set.
     *
     * @return true if PackageList is set
     */
    public function isSetPackageList()
    {
        return null !== $this->_fields['PackageList']['FieldValue'];
    }

    /**
     * Set the value of PackageList, return this.
     *
     * @param packageList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageList($value)
    {
        $this->setPackageList($value);

        return $this;
    }

    /**
     * Get the value of the PartneredEstimate property.
     *
     * @return PartneredEstimate partneredEstimate
     */
    public function getPartneredEstimate()
    {
        return $this->_fields['PartneredEstimate']['FieldValue'];
    }

    /**
     * Set the value of the PartneredEstimate property.
     *
     * @param PartneredEstimate partneredEstimate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPartneredEstimate($value)
    {
        $this->_fields['PartneredEstimate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PartneredEstimate is set.
     *
     * @return true if PartneredEstimate is set
     */
    public function isSetPartneredEstimate()
    {
        return null !== $this->_fields['PartneredEstimate']['FieldValue'];
    }

    /**
     * Set the value of PartneredEstimate, return this.
     *
     * @param partneredEstimate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPartneredEstimate($value)
    {
        $this->setPartneredEstimate($value);

        return $this;
    }
}
