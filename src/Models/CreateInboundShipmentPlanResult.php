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
 * CreateInboundShipmentPlanResult.
 *
 * Properties:
 * <ul>
 *
 * <li>InboundShipmentPlans: InboundShipmentPlanList</li>
 *
 * </ul>
 */
class CreateInboundShipmentPlanResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'InboundShipmentPlans' => ['FieldValue' => null, 'FieldType' => 'InboundShipmentPlanList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the InboundShipmentPlans property.
     *
     * @return InboundShipmentPlanList inboundShipmentPlans
     */
    public function getInboundShipmentPlans()
    {
        return $this->_fields['InboundShipmentPlans']['FieldValue'];
    }

    /**
     * Set the value of the InboundShipmentPlans property.
     *
     * @param InboundShipmentPlanList inboundShipmentPlans
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInboundShipmentPlans($value)
    {
        $this->_fields['InboundShipmentPlans']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InboundShipmentPlans is set.
     *
     * @return true if InboundShipmentPlans is set
     */
    public function isSetInboundShipmentPlans()
    {
        return null !== $this->_fields['InboundShipmentPlans']['FieldValue'];
    }

    /**
     * Set the value of InboundShipmentPlans, return this.
     *
     * @param inboundShipmentPlans
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInboundShipmentPlans($value)
    {
        $this->setInboundShipmentPlans($value);

        return $this;
    }
}
