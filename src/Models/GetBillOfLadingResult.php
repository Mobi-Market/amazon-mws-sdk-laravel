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
 * GetBillOfLadingResult.
 *
 * Properties:
 * <ul>
 *
 * <li>TransportDocument: TransportDocument</li>
 *
 * </ul>
 */
class GetBillOfLadingResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'TransportDocument' => ['FieldValue' => null, 'FieldType' => 'TransportDocument'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the TransportDocument property.
     *
     * @return TransportDocument transportDocument
     */
    public function getTransportDocument()
    {
        return $this->_fields['TransportDocument']['FieldValue'];
    }

    /**
     * Set the value of the TransportDocument property.
     *
     * @param TransportDocument transportDocument
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setTransportDocument($value)
    {
        $this->_fields['TransportDocument']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if TransportDocument is set.
     *
     * @return true if TransportDocument is set
     */
    public function isSetTransportDocument()
    {
        return null !== $this->_fields['TransportDocument']['FieldValue'];
    }

    /**
     * Set the value of TransportDocument, return this.
     *
     * @param transportDocument
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withTransportDocument($value)
    {
        $this->setTransportDocument($value);

        return $this;
    }
}
