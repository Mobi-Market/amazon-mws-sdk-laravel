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
 * ListParticipations.
 *
 * Properties:
 * <ul>
 *
 * <li>Participation: array</li>
 *
 * </ul>
 */
class ListParticipations extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Participation' => ['FieldValue' => [], 'FieldType' => ['Participation']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Participation property.
     *
     * @return List<Participation> participation
     */
    public function getParticipation()
    {
        if (null == $this->_fields['Participation']['FieldValue']) {
            $this->_fields['Participation']['FieldValue'] = [];
        }

        return $this->_fields['Participation']['FieldValue'];
    }

    /**
     * Set the value of the Participation property.
     *
     * @param array participation
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setParticipation($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Participation']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Participation.
     */
    public function unsetParticipation(): void
    {
        $this->_fields['Participation']['FieldValue'] = [];
    }

    /**
     * Check to see if Participation is set.
     *
     * @return true if Participation is set
     */
    public function isSetParticipation()
    {
        return !empty($this->_fields['Participation']['FieldValue']);
    }

    /**
     * Add values for Participation, return this.
     *
     * @param participation
     *             New values to add
     *
     * @return $this instance
     */
    public function withParticipation()
    {
        foreach (\func_get_args() as $Participation) {
            $this->_fields['Participation']['FieldValue'][] = $Participation;
        }

        return $this;
    }
}
