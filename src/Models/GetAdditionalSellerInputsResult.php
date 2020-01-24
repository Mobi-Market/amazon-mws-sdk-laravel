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
 * GetAdditionalSellerInputsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ShipmentLevelFields: array</li>
 * <li>ItemLevelFieldsList: array</li>
 *
 * </ul>
 */
class GetAdditionalSellerInputsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ShipmentLevelFields' => ['FieldValue' => [], 'FieldType' => ['AdditionalInputs'], 'ListMemberName' => 'member'],
            'ItemLevelFieldsList' => ['FieldValue' => [], 'FieldType' => ['ItemLevelFields'], 'ListMemberName' => 'member'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ShipmentLevelFields property.
     *
     * @return List<AdditionalInputs> shipmentLevelFields
     */
    public function getShipmentLevelFields()
    {
        if (null == $this->_fields['ShipmentLevelFields']['FieldValue']) {
            $this->_fields['ShipmentLevelFields']['FieldValue'] = [];
        }

        return $this->_fields['ShipmentLevelFields']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentLevelFields property.
     *
     * @param array shipmentLevelFields
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setShipmentLevelFields($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ShipmentLevelFields']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ShipmentLevelFields.
     */
    public function unsetShipmentLevelFields(): void
    {
        $this->_fields['ShipmentLevelFields']['FieldValue'] = [];
    }

    /**
     * Check to see if ShipmentLevelFields is set.
     *
     * @return true if ShipmentLevelFields is set
     */
    public function isSetShipmentLevelFields()
    {
        return !empty($this->_fields['ShipmentLevelFields']['FieldValue']);
    }

    /**
     * Add values for ShipmentLevelFields, return this.
     *
     * @param shipmentLevelFields
     *             New values to add
     *
     * @return $this instance
     */
    public function withShipmentLevelFields()
    {
        foreach (\func_get_args() as $ShipmentLevelFields) {
            $this->_fields['ShipmentLevelFields']['FieldValue'][] = $ShipmentLevelFields;
        }

        return $this;
    }

    /**
     * Get the value of the ItemLevelFieldsList property.
     *
     * @return List<ItemLevelFields> itemLevelFieldsList
     */
    public function getItemLevelFieldsList()
    {
        if (null == $this->_fields['ItemLevelFieldsList']['FieldValue']) {
            $this->_fields['ItemLevelFieldsList']['FieldValue'] = [];
        }

        return $this->_fields['ItemLevelFieldsList']['FieldValue'];
    }

    /**
     * Set the value of the ItemLevelFieldsList property.
     *
     * @param array itemLevelFieldsList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemLevelFieldsList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ItemLevelFieldsList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ItemLevelFieldsList.
     */
    public function unsetItemLevelFieldsList(): void
    {
        $this->_fields['ItemLevelFieldsList']['FieldValue'] = [];
    }

    /**
     * Check to see if ItemLevelFieldsList is set.
     *
     * @return true if ItemLevelFieldsList is set
     */
    public function isSetItemLevelFieldsList()
    {
        return !empty($this->_fields['ItemLevelFieldsList']['FieldValue']);
    }

    /**
     * Add values for ItemLevelFieldsList, return this.
     *
     * @param itemLevelFieldsList
     *             New values to add
     *
     * @return $this instance
     */
    public function withItemLevelFieldsList()
    {
        foreach (\func_get_args() as $ItemLevelFieldsList) {
            $this->_fields['ItemLevelFieldsList']['FieldValue'][] = $ItemLevelFieldsList;
        }

        return $this;
    }
}
