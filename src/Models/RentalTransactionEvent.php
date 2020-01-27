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
 * RentalTransactionEvent.
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonOrderId: string</li>
 * <li>RentalEventType: string</li>
 * <li>ExtensionLength: int</li>
 * <li>PostedDate: string</li>
 * <li>RentalChargeList: array</li>
 * <li>RentalFeeList: array</li>
 * <li>MarketplaceName: string</li>
 * <li>RentalInitialValue: Currency</li>
 * <li>RentalReimbursement: Currency</li>
 * <li>RentalTaxWithheldList: array</li>
 *
 * </ul>
 */
class RentalTransactionEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonOrderId'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'RentalEventType'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'ExtensionLength'       => ['FieldValue' => null, 'FieldType' => 'int'],
            'PostedDate'            => ['FieldValue' => null, 'FieldType' => 'string'],
            'RentalChargeList'      => ['FieldValue' => [], 'FieldType' => ['ChargeComponent'], 'ListMemberName' => 'ChargeComponent'],
            'RentalFeeList'         => ['FieldValue' => [], 'FieldType' => ['FeeComponent'], 'ListMemberName' => 'FeeComponent'],
            'MarketplaceName'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'RentalInitialValue'    => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'RentalReimbursement'   => ['FieldValue' => null, 'FieldType' => 'Currency'],
            'RentalTaxWithheldList' => ['FieldValue' => [], 'FieldType' => ['TaxWithheldComponent'], 'ListMemberName' => 'TaxWithheldComponent'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return string amazonOrderId
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set
     */
    public function isSetAmazonOrderId()
    {
        return null !== $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);

        return $this;
    }

    /**
     * Get the value of the RentalEventType property.
     *
     * @return string rentalEventType
     */
    public function getRentalEventType()
    {
        return $this->_fields['RentalEventType']['FieldValue'];
    }

    /**
     * Set the value of the RentalEventType property.
     *
     * @param string rentalEventType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRentalEventType($value)
    {
        $this->_fields['RentalEventType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RentalEventType is set.
     *
     * @return true if RentalEventType is set
     */
    public function isSetRentalEventType()
    {
        return null !== $this->_fields['RentalEventType']['FieldValue'];
    }

    /**
     * Set the value of RentalEventType, return this.
     *
     * @param rentalEventType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRentalEventType($value)
    {
        $this->setRentalEventType($value);

        return $this;
    }

    /**
     * Get the value of the ExtensionLength property.
     *
     * @return int extensionLength
     */
    public function getExtensionLength()
    {
        return $this->_fields['ExtensionLength']['FieldValue'];
    }

    /**
     * Set the value of the ExtensionLength property.
     *
     * @param int extensionLength
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setExtensionLength($value)
    {
        $this->_fields['ExtensionLength']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ExtensionLength is set.
     *
     * @return true if ExtensionLength is set
     */
    public function isSetExtensionLength()
    {
        return null !== $this->_fields['ExtensionLength']['FieldValue'];
    }

    /**
     * Set the value of ExtensionLength, return this.
     *
     * @param extensionLength
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withExtensionLength($value)
    {
        $this->setExtensionLength($value);

        return $this;
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar postedDate
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set
     */
    public function isSetPostedDate()
    {
        return null !== $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);

        return $this;
    }

    /**
     * Get the value of the RentalChargeList property.
     *
     * @return List<ChargeComponent> rentalChargeList
     */
    public function getRentalChargeList()
    {
        if (null == $this->_fields['RentalChargeList']['FieldValue']) {
            $this->_fields['RentalChargeList']['FieldValue'] = [];
        }

        return $this->_fields['RentalChargeList']['FieldValue'];
    }

    /**
     * Set the value of the RentalChargeList property.
     *
     * @param array rentalChargeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRentalChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['RentalChargeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear RentalChargeList.
     */
    public function unsetRentalChargeList(): void
    {
        $this->_fields['RentalChargeList']['FieldValue'] = [];
    }

    /**
     * Check to see if RentalChargeList is set.
     *
     * @return true if RentalChargeList is set
     */
    public function isSetRentalChargeList()
    {
        return !empty($this->_fields['RentalChargeList']['FieldValue']);
    }

    /**
     * Add values for RentalChargeList, return this.
     *
     * @param rentalChargeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withRentalChargeList()
    {
        foreach (\func_get_args() as $RentalChargeList) {
            $this->_fields['RentalChargeList']['FieldValue'][] = $RentalChargeList;
        }

        return $this;
    }

    /**
     * Get the value of the RentalFeeList property.
     *
     * @return List<FeeComponent> rentalFeeList
     */
    public function getRentalFeeList()
    {
        if (null == $this->_fields['RentalFeeList']['FieldValue']) {
            $this->_fields['RentalFeeList']['FieldValue'] = [];
        }

        return $this->_fields['RentalFeeList']['FieldValue'];
    }

    /**
     * Set the value of the RentalFeeList property.
     *
     * @param array rentalFeeList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRentalFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['RentalFeeList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear RentalFeeList.
     */
    public function unsetRentalFeeList(): void
    {
        $this->_fields['RentalFeeList']['FieldValue'] = [];
    }

    /**
     * Check to see if RentalFeeList is set.
     *
     * @return true if RentalFeeList is set
     */
    public function isSetRentalFeeList()
    {
        return !empty($this->_fields['RentalFeeList']['FieldValue']);
    }

    /**
     * Add values for RentalFeeList, return this.
     *
     * @param rentalFeeList
     *             New values to add
     *
     * @return $this instance
     */
    public function withRentalFeeList()
    {
        foreach (\func_get_args() as $RentalFeeList) {
            $this->_fields['RentalFeeList']['FieldValue'][] = $RentalFeeList;
        }

        return $this;
    }

    /**
     * Get the value of the MarketplaceName property.
     *
     * @return string marketplaceName
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplaceName($value)
    {
        $this->_fields['MarketplaceName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceName is set.
     *
     * @return true if MarketplaceName is set
     */
    public function isSetMarketplaceName()
    {
        return null !== $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceName, return this.
     *
     * @param marketplaceName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withMarketplaceName($value)
    {
        $this->setMarketplaceName($value);

        return $this;
    }

    /**
     * Get the value of the RentalInitialValue property.
     *
     * @return Currency rentalInitialValue
     */
    public function getRentalInitialValue()
    {
        return $this->_fields['RentalInitialValue']['FieldValue'];
    }

    /**
     * Set the value of the RentalInitialValue property.
     *
     * @param Currency rentalInitialValue
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRentalInitialValue($value)
    {
        $this->_fields['RentalInitialValue']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RentalInitialValue is set.
     *
     * @return true if RentalInitialValue is set
     */
    public function isSetRentalInitialValue()
    {
        return null !== $this->_fields['RentalInitialValue']['FieldValue'];
    }

    /**
     * Set the value of RentalInitialValue, return this.
     *
     * @param rentalInitialValue
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRentalInitialValue($value)
    {
        $this->setRentalInitialValue($value);

        return $this;
    }

    /**
     * Get the value of the RentalReimbursement property.
     *
     * @return Currency rentalReimbursement
     */
    public function getRentalReimbursement()
    {
        return $this->_fields['RentalReimbursement']['FieldValue'];
    }

    /**
     * Set the value of the RentalReimbursement property.
     *
     * @param Currency rentalReimbursement
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRentalReimbursement($value)
    {
        $this->_fields['RentalReimbursement']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RentalReimbursement is set.
     *
     * @return true if RentalReimbursement is set
     */
    public function isSetRentalReimbursement()
    {
        return null !== $this->_fields['RentalReimbursement']['FieldValue'];
    }

    /**
     * Set the value of RentalReimbursement, return this.
     *
     * @param rentalReimbursement
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRentalReimbursement($value)
    {
        $this->setRentalReimbursement($value);

        return $this;
    }

    /**
     * Get the value of the RentalTaxWithheldList property.
     *
     * @return List<TaxWithheldComponent> rentalTaxWithheldList
     */
    public function getRentalTaxWithheldList()
    {
        if (null == $this->_fields['RentalTaxWithheldList']['FieldValue']) {
            $this->_fields['RentalTaxWithheldList']['FieldValue'] = [];
        }

        return $this->_fields['RentalTaxWithheldList']['FieldValue'];
    }

    /**
     * Set the value of the RentalTaxWithheldList property.
     *
     * @param array rentalTaxWithheldList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRentalTaxWithheldList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['RentalTaxWithheldList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear RentalTaxWithheldList.
     */
    public function unsetRentalTaxWithheldList(): void
    {
        $this->_fields['RentalTaxWithheldList']['FieldValue'] = [];
    }

    /**
     * Check to see if RentalTaxWithheldList is set.
     *
     * @return true if RentalTaxWithheldList is set
     */
    public function isSetRentalTaxWithheldList()
    {
        return !empty($this->_fields['RentalTaxWithheldList']['FieldValue']);
    }

    /**
     * Add values for RentalTaxWithheldList, return this.
     *
     * @param rentalTaxWithheldList
     *             New values to add
     *
     * @return $this instance
     */
    public function withRentalTaxWithheldList()
    {
        foreach (\func_get_args() as $RentalTaxWithheldList) {
            $this->_fields['RentalTaxWithheldList']['FieldValue'][] = $RentalTaxWithheldList;
        }

        return $this;
    }
}
