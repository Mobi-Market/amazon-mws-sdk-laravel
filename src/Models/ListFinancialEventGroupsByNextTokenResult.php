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
 * ListFinancialEventGroupsByNextTokenResult.
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>FinancialEventGroupList: array</li>
 *
 * </ul>
 */
class ListFinancialEventGroupsByNextTokenResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'NextToken'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'FinancialEventGroupList' => ['FieldValue' => [], 'FieldType' => ['FinancialEventGroup'], 'ListMemberName' => 'FinancialEventGroup'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return string nextToken
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set
     */
    public function isSetNextToken()
    {
        return null !== $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);

        return $this;
    }

    /**
     * Get the value of the FinancialEventGroupList property.
     *
     * @return List<FinancialEventGroup> financialEventGroupList
     */
    public function getFinancialEventGroupList()
    {
        if (null == $this->_fields['FinancialEventGroupList']['FieldValue']) {
            $this->_fields['FinancialEventGroupList']['FieldValue'] = [];
        }

        return $this->_fields['FinancialEventGroupList']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEventGroupList property.
     *
     * @param array financialEventGroupList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFinancialEventGroupList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FinancialEventGroupList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear FinancialEventGroupList.
     */
    public function unsetFinancialEventGroupList(): void
    {
        $this->_fields['FinancialEventGroupList']['FieldValue'] = [];
    }

    /**
     * Check to see if FinancialEventGroupList is set.
     *
     * @return true if FinancialEventGroupList is set
     */
    public function isSetFinancialEventGroupList()
    {
        return !empty($this->_fields['FinancialEventGroupList']['FieldValue']);
    }

    /**
     * Add values for FinancialEventGroupList, return this.
     *
     * @param financialEventGroupList
     *             New values to add
     *
     * @return $this instance
     */
    public function withFinancialEventGroupList()
    {
        foreach (\func_get_args() as $FinancialEventGroupList) {
            $this->_fields['FinancialEventGroupList']['FieldValue'][] = $FinancialEventGroupList;
        }

        return $this;
    }
}
