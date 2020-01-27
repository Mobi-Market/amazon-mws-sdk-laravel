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
 * CreateFulfillmentReturnResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ReturnItemList: ReturnItemList</li>
 * <li>InvalidReturnItemList: InvalidReturnItemList</li>
 * <li>ReturnAuthorizationList: ReturnAuthorizationList</li>
 *
 * </ul>
 */
class CreateFulfillmentReturnResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ReturnItemList'          => ['FieldValue' => null, 'FieldType' => 'ReturnItemList'],
            'InvalidReturnItemList'   => ['FieldValue' => null, 'FieldType' => 'InvalidReturnItemList'],
            'ReturnAuthorizationList' => ['FieldValue' => null, 'FieldType' => 'ReturnAuthorizationList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ReturnItemList property.
     *
     * @return ReturnItemList returnItemList
     */
    public function getReturnItemList()
    {
        return $this->_fields['ReturnItemList']['FieldValue'];
    }

    /**
     * Set the value of the ReturnItemList property.
     *
     * @param ReturnItemList returnItemList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReturnItemList($value)
    {
        $this->_fields['ReturnItemList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReturnItemList is set.
     *
     * @return true if ReturnItemList is set
     */
    public function isSetReturnItemList()
    {
        return null !== $this->_fields['ReturnItemList']['FieldValue'];
    }

    /**
     * Set the value of ReturnItemList, return this.
     *
     * @param returnItemList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReturnItemList($value)
    {
        $this->setReturnItemList($value);

        return $this;
    }

    /**
     * Get the value of the InvalidReturnItemList property.
     *
     * @return InvalidReturnItemList invalidReturnItemList
     */
    public function getInvalidReturnItemList()
    {
        return $this->_fields['InvalidReturnItemList']['FieldValue'];
    }

    /**
     * Set the value of the InvalidReturnItemList property.
     *
     * @param InvalidReturnItemList invalidReturnItemList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvalidReturnItemList($value)
    {
        $this->_fields['InvalidReturnItemList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if InvalidReturnItemList is set.
     *
     * @return true if InvalidReturnItemList is set
     */
    public function isSetInvalidReturnItemList()
    {
        return null !== $this->_fields['InvalidReturnItemList']['FieldValue'];
    }

    /**
     * Set the value of InvalidReturnItemList, return this.
     *
     * @param invalidReturnItemList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInvalidReturnItemList($value)
    {
        $this->setInvalidReturnItemList($value);

        return $this;
    }

    /**
     * Get the value of the ReturnAuthorizationList property.
     *
     * @return ReturnAuthorizationList returnAuthorizationList
     */
    public function getReturnAuthorizationList()
    {
        return $this->_fields['ReturnAuthorizationList']['FieldValue'];
    }

    /**
     * Set the value of the ReturnAuthorizationList property.
     *
     * @param ReturnAuthorizationList returnAuthorizationList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setReturnAuthorizationList($value)
    {
        $this->_fields['ReturnAuthorizationList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ReturnAuthorizationList is set.
     *
     * @return true if ReturnAuthorizationList is set
     */
    public function isSetReturnAuthorizationList()
    {
        return null !== $this->_fields['ReturnAuthorizationList']['FieldValue'];
    }

    /**
     * Set the value of ReturnAuthorizationList, return this.
     *
     * @param returnAuthorizationList
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withReturnAuthorizationList($value)
    {
        $this->setReturnAuthorizationList($value);

        return $this;
    }
}
