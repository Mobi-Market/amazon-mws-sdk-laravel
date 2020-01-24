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
 * ListRegisteredDestinationsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>DestinationList: DestinationList</li>
 *
 * </ul>
 */
class ListRegisteredDestinationsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'DestinationList' => ['FieldValue' => null, 'FieldType' => 'DestinationList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the DestinationList property.
     *
     * @return DestinationList destinationList
     */
    public function getDestinationList()
    {
        return $this->_fields['DestinationList']['FieldValue'];
    }

    /**
     * Set the value of the DestinationList property.
     *
     * @param DestinationList destinationList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDestinationList($value)
    {
        $this->_fields['DestinationList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DestinationList is set.
     *
     * @return true if DestinationList is set
     */
    public function isSetDestinationList()
    {
        return null !== $this->_fields['DestinationList']['FieldValue'];
    }

    /**
     * Set the value of DestinationList, return this.
     *
     * @param destinationList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDestinationList($value)
    {
        $this->setDestinationList($value);

        return $this;
    }
}
