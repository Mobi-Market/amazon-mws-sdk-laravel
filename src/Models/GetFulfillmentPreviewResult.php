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
 * GetFulfillmentPreviewResult.
 *
 * Properties:
 * <ul>
 *
 * <li>FulfillmentPreviews: FulfillmentPreviewList</li>
 *
 * </ul>
 */
class GetFulfillmentPreviewResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'FulfillmentPreviews' => ['FieldValue' => null, 'FieldType' => 'FulfillmentPreviewList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the FulfillmentPreviews property.
     *
     * @return FulfillmentPreviewList fulfillmentPreviews
     */
    public function getFulfillmentPreviews()
    {
        return $this->_fields['FulfillmentPreviews']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentPreviews property.
     *
     * @param FulfillmentPreviewList fulfillmentPreviews
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentPreviews($value)
    {
        $this->_fields['FulfillmentPreviews']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentPreviews is set.
     *
     * @return true if FulfillmentPreviews is set
     */
    public function isSetFulfillmentPreviews()
    {
        return null !== $this->_fields['FulfillmentPreviews']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentPreviews, return this.
     *
     * @param fulfillmentPreviews
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentPreviews($value)
    {
        $this->setFulfillmentPreviews($value);

        return $this;
    }
}
