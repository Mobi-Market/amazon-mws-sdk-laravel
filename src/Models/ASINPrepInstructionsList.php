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
 * ASINPrepInstructionsList.
 *
 * Properties:
 * <ul>
 *
 * <li>ASINPrepInstructions: array</li>
 *
 * </ul>
 */
class ASINPrepInstructionsList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ASINPrepInstructions' => ['FieldValue' => [], 'FieldType' => ['ASINPrepInstructions']],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ASINPrepInstructions property.
     *
     * @return list<ASINPrepInstructions> ASINPrepInstructions
     */
    public function getASINPrepInstructions()
    {
        if (null == $this->_fields['ASINPrepInstructions']['FieldValue']) {
            $this->_fields['ASINPrepInstructions']['FieldValue'] = [];
        }

        return $this->_fields['ASINPrepInstructions']['FieldValue'];
    }

    /**
     * Set the value of the ASINPrepInstructions property.
     *
     * @param array asinPrepInstructions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setASINPrepInstructions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['ASINPrepInstructions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear ASINPrepInstructions.
     */
    public function unsetASINPrepInstructions(): void
    {
        $this->_fields['ASINPrepInstructions']['FieldValue'] = [];
    }

    /**
     * Check to see if ASINPrepInstructions is set.
     *
     * @return true if ASINPrepInstructions is set
     */
    public function isSetASINPrepInstructions()
    {
        return !empty($this->_fields['ASINPrepInstructions']['FieldValue']);
    }

    /**
     * Add values for ASINPrepInstructions, return this.
     *
     * @param asinPrepInstructions
     *             New values to add
     *
     * @return $this instance
     */
    public function withASINPrepInstructions()
    {
        foreach (\func_get_args() as $ASINPrepInstructions) {
            $this->_fields['ASINPrepInstructions']['FieldValue'][] = $ASINPrepInstructions;
        }

        return $this;
    }
}
