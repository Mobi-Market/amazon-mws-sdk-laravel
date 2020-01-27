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
 * ListMarketplaces.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: array</li>
 *
 * </ul>
 */
class ListMarketplaces extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Marketplace' => ['FieldValue' => [], 'FieldType' => ['Marketplace']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Marketplace property.
     *
     * @return List<Marketplace> marketplace
     */
    public function getMarketplace()
    {
        if (null == $this->_fields['Marketplace']['FieldValue']) {
            $this->_fields['Marketplace']['FieldValue'] = [];
        }

        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param array marketplace
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplace($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Marketplace']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Marketplace.
     */
    public function unsetMarketplace(): void
    {
        $this->_fields['Marketplace']['FieldValue'] = [];
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set
     */
    public function isSetMarketplace()
    {
        return !empty($this->_fields['Marketplace']['FieldValue']);
    }

    /**
     * Add values for Marketplace, return this.
     *
     * @param marketplace
     *             New values to add
     *
     * @return $this instance
     */
    public function withMarketplace()
    {
        foreach (\func_get_args() as $Marketplace) {
            $this->_fields['Marketplace']['FieldValue'][] = $Marketplace;
        }

        return $this;
    }
}
