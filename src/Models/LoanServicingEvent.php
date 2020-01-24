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
 * LoanServicingEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>LoanAmount: Currency</li>
 * <li>SourceBusinessEventType: string</li>
 *
 * </ul>
 */
class LoanServicingEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'LoanAmount'              => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'SourceBusinessEventType' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the LoanAmount property.
     *
     * @return Currency loanAmount
     */
    public function getLoanAmount()
    {
        return $this->_fields['LoanAmount']['FieldValue'];
    }

    /**
     * Set the value of the LoanAmount property.
     *
     * @param Currency loanAmount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLoanAmount($value)
    {
        $this->_fields['LoanAmount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LoanAmount is set.
     *
     * @return true if LoanAmount is set
     */
    public function isSetLoanAmount()
    {
        return null !== $this->_fields['LoanAmount']['FieldValue'];
    }

    /**
     * Set the value of LoanAmount, return this.
     *
     * @param loanAmount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLoanAmount($value)
    {
        $this->setLoanAmount($value);

        return $this;
    }

    /**
     * Get the value of the SourceBusinessEventType property.
     *
     * @return string sourceBusinessEventType
     */
    public function getSourceBusinessEventType()
    {
        return $this->_fields['SourceBusinessEventType']['FieldValue'];
    }

    /**
     * Set the value of the SourceBusinessEventType property.
     *
     * @param string sourceBusinessEventType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSourceBusinessEventType($value)
    {
        $this->_fields['SourceBusinessEventType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SourceBusinessEventType is set.
     *
     * @return true if SourceBusinessEventType is set
     */
    public function isSetSourceBusinessEventType()
    {
        return null !== $this->_fields['SourceBusinessEventType']['FieldValue'];
    }

    /**
     * Set the value of SourceBusinessEventType, return this.
     *
     * @param sourceBusinessEventType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSourceBusinessEventType($value)
    {
        $this->setSourceBusinessEventType($value);

        return $this;
    }
}
