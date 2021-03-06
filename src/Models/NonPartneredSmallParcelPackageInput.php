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
 * NonPartneredSmallParcelPackageInput.
 *
 * Properties:
 * <ul>
 *
 * <li>TrackingId: string</li>
 *
 * </ul>
 */
class NonPartneredSmallParcelPackageInput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TrackingId' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TrackingId property.
     *
     * @return string trackingId
     */
    public function getTrackingId()
    {
        return $this->_fields['TrackingId']['FieldValue'];
    }

    /**
     * Set the value of the TrackingId property.
     *
     * @param string trackingId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTrackingId($value)
    {
        $this->_fields['TrackingId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TrackingId is set.
     *
     * @return true if TrackingId is set
     */
    public function isSetTrackingId()
    {
        return null !== $this->_fields['TrackingId']['FieldValue'];
    }

    /**
     * Set the value of TrackingId, return this.
     *
     * @param trackingId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTrackingId($value)
    {
        $this->setTrackingId($value);

        return $this;
    }
}
