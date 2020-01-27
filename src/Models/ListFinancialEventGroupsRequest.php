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
 * ListFinancialEventGroupsRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MaxResultsPerPage: int</li>
 * <li>FinancialEventGroupStartedAfter: string</li>
 * <li>FinancialEventGroupStartedBefore: string</li>
 *
 * </ul>
 */
class ListFinancialEventGroupsRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId'                         => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'                     => ['FieldValue' => null, 'FieldType' => 'string'],
            'MaxResultsPerPage'                => ['FieldValue' => null, 'FieldType' => 'int'],
            'FinancialEventGroupStartedAfter'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'FinancialEventGroupStartedBefore' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return string sellerId
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set
     */
    public function isSetSellerId()
    {
        return null !== $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);

        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set
     */
    public function isSetMWSAuthToken()
    {
        return null !== $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Get the value of the MaxResultsPerPage property.
     *
     * @return int maxResultsPerPage
     */
    public function getMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'];
    }

    /**
     * Set the value of the MaxResultsPerPage property.
     *
     * @param int maxResultsPerPage
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMaxResultsPerPage($value)
    {
        $this->_fields['MaxResultsPerPage']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MaxResultsPerPage is set.
     *
     * @return true if MaxResultsPerPage is set
     */
    public function isSetMaxResultsPerPage()
    {
        return null !== $this->_fields['MaxResultsPerPage']['FieldValue'];
    }

    /**
     * Set the value of MaxResultsPerPage, return this.
     *
     * @param maxResultsPerPage
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMaxResultsPerPage($value)
    {
        $this->setMaxResultsPerPage($value);

        return $this;
    }

    /**
     * Get the value of the FinancialEventGroupStartedAfter property.
     *
     * @return XMLGregorianCalendar financialEventGroupStartedAfter
     */
    public function getFinancialEventGroupStartedAfter()
    {
        return $this->_fields['FinancialEventGroupStartedAfter']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEventGroupStartedAfter property.
     *
     * @param string financialEventGroupStartedAfter
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFinancialEventGroupStartedAfter($value)
    {
        $this->_fields['FinancialEventGroupStartedAfter']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FinancialEventGroupStartedAfter is set.
     *
     * @return true if FinancialEventGroupStartedAfter is set
     */
    public function isSetFinancialEventGroupStartedAfter()
    {
        return null !== $this->_fields['FinancialEventGroupStartedAfter']['FieldValue'];
    }

    /**
     * Set the value of FinancialEventGroupStartedAfter, return this.
     *
     * @param financialEventGroupStartedAfter
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFinancialEventGroupStartedAfter($value)
    {
        $this->setFinancialEventGroupStartedAfter($value);

        return $this;
    }

    /**
     * Get the value of the FinancialEventGroupStartedBefore property.
     *
     * @return XMLGregorianCalendar financialEventGroupStartedBefore
     */
    public function getFinancialEventGroupStartedBefore()
    {
        return $this->_fields['FinancialEventGroupStartedBefore']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEventGroupStartedBefore property.
     *
     * @param string financialEventGroupStartedBefore
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFinancialEventGroupStartedBefore($value)
    {
        $this->_fields['FinancialEventGroupStartedBefore']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FinancialEventGroupStartedBefore is set.
     *
     * @return true if FinancialEventGroupStartedBefore is set
     */
    public function isSetFinancialEventGroupStartedBefore()
    {
        return null !== $this->_fields['FinancialEventGroupStartedBefore']['FieldValue'];
    }

    /**
     * Set the value of FinancialEventGroupStartedBefore, return this.
     *
     * @param financialEventGroupStartedBefore
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFinancialEventGroupStartedBefore($value)
    {
        $this->setFinancialEventGroupStartedBefore($value);

        return $this;
    }
}
