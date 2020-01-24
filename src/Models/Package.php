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
 * Package.
 *
 * Properties:
 * <ul>
 *
 * <li>ScheduledPackageId: ScheduledPackageId</li>
 * <li>PackageDimensions: Dimensions</li>
 * <li>PackageWeight: Weight</li>
 * <li>PackageItemList: array</li>
 * <li>PackagePickupSlot: PickupSlot</li>
 * <li>PackageIdentifier: string</li>
 * <li>Invoice: InvoiceData</li>
 * <li>PackageStatus: string</li>
 *
 * </ul>
 */
class Package extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'ScheduledPackageId' => ['FieldValue' => null, 'FieldType' => 'ScheduledPackageId'],
            'PackageDimensions'  => ['FieldValue' => null, 'FieldType' => 'Dimensions'],
            'PackageWeight'      => ['FieldValue' => null, 'FieldType' => 'Weight'],
            'PackageItemList'    => ['FieldValue' => [], 'FieldType' => ['Item'], 'ListMemberName' => 'Item'],
            'PackagePickupSlot'  => ['FieldValue' => null, 'FieldType' => 'PickupSlot'],
            'PackageIdentifier'  => ['FieldValue' => null, 'FieldType' => 'string'],
            'Invoice'            => ['FieldValue' => null, 'FieldType' => 'InvoiceData'],
            'PackageStatus'      => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ScheduledPackageId property.
     *
     * @return ScheduledPackageId scheduledPackageId
     */
    public function getScheduledPackageId()
    {
        return $this->_fields['ScheduledPackageId']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackageId property.
     *
     * @param ScheduledPackageId scheduledPackageId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setScheduledPackageId($value)
    {
        $this->_fields['ScheduledPackageId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ScheduledPackageId is set.
     *
     * @return true if ScheduledPackageId is set
     */
    public function isSetScheduledPackageId()
    {
        return null !== $this->_fields['ScheduledPackageId']['FieldValue'];
    }

    /**
     * Set the value of ScheduledPackageId, return this.
     *
     * @param scheduledPackageId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withScheduledPackageId($value)
    {
        $this->setScheduledPackageId($value);

        return $this;
    }

    /**
     * Get the value of the PackageDimensions property.
     *
     * @return Dimensions packageDimensions
     */
    public function getPackageDimensions()
    {
        return $this->_fields['PackageDimensions']['FieldValue'];
    }

    /**
     * Set the value of the PackageDimensions property.
     *
     * @param Dimensions packageDimensions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageDimensions($value)
    {
        $this->_fields['PackageDimensions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageDimensions is set.
     *
     * @return true if PackageDimensions is set
     */
    public function isSetPackageDimensions()
    {
        return null !== $this->_fields['PackageDimensions']['FieldValue'];
    }

    /**
     * Set the value of PackageDimensions, return this.
     *
     * @param packageDimensions
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageDimensions($value)
    {
        $this->setPackageDimensions($value);

        return $this;
    }

    /**
     * Get the value of the PackageWeight property.
     *
     * @return Weight packageWeight
     */
    public function getPackageWeight()
    {
        return $this->_fields['PackageWeight']['FieldValue'];
    }

    /**
     * Set the value of the PackageWeight property.
     *
     * @param Weight packageWeight
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageWeight($value)
    {
        $this->_fields['PackageWeight']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageWeight is set.
     *
     * @return true if PackageWeight is set
     */
    public function isSetPackageWeight()
    {
        return null !== $this->_fields['PackageWeight']['FieldValue'];
    }

    /**
     * Set the value of PackageWeight, return this.
     *
     * @param packageWeight
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageWeight($value)
    {
        $this->setPackageWeight($value);

        return $this;
    }

    /**
     * Get the value of the PackageItemList property.
     *
     * @return List<Item> packageItemList
     */
    public function getPackageItemList()
    {
        if (null == $this->_fields['PackageItemList']['FieldValue']) {
            $this->_fields['PackageItemList']['FieldValue'] = [];
        }

        return $this->_fields['PackageItemList']['FieldValue'];
    }

    /**
     * Set the value of the PackageItemList property.
     *
     * @param array packageItemList
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PackageItemList']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear PackageItemList.
     */
    public function unsetPackageItemList(): void
    {
        $this->_fields['PackageItemList']['FieldValue'] = [];
    }

    /**
     * Check to see if PackageItemList is set.
     *
     * @return true if PackageItemList is set
     */
    public function isSetPackageItemList()
    {
        return !empty($this->_fields['PackageItemList']['FieldValue']);
    }

    /**
     * Add values for PackageItemList, return this.
     *
     * @param packageItemList
     *             New values to add
     *
     * @return $this instance
     */
    public function withPackageItemList()
    {
        foreach (\func_get_args() as $PackageItemList) {
            $this->_fields['PackageItemList']['FieldValue'][] = $PackageItemList;
        }

        return $this;
    }

    /**
     * Get the value of the PackagePickupSlot property.
     *
     * @return PickupSlot packagePickupSlot
     */
    public function getPackagePickupSlot()
    {
        return $this->_fields['PackagePickupSlot']['FieldValue'];
    }

    /**
     * Set the value of the PackagePickupSlot property.
     *
     * @param PickupSlot packagePickupSlot
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackagePickupSlot($value)
    {
        $this->_fields['PackagePickupSlot']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackagePickupSlot is set.
     *
     * @return true if PackagePickupSlot is set
     */
    public function isSetPackagePickupSlot()
    {
        return null !== $this->_fields['PackagePickupSlot']['FieldValue'];
    }

    /**
     * Set the value of PackagePickupSlot, return this.
     *
     * @param packagePickupSlot
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackagePickupSlot($value)
    {
        $this->setPackagePickupSlot($value);

        return $this;
    }

    /**
     * Get the value of the PackageIdentifier property.
     *
     * @return string packageIdentifier
     */
    public function getPackageIdentifier()
    {
        return $this->_fields['PackageIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the PackageIdentifier property.
     *
     * @param string packageIdentifier
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageIdentifier($value)
    {
        $this->_fields['PackageIdentifier']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageIdentifier is set.
     *
     * @return true if PackageIdentifier is set
     */
    public function isSetPackageIdentifier()
    {
        return null !== $this->_fields['PackageIdentifier']['FieldValue'];
    }

    /**
     * Set the value of PackageIdentifier, return this.
     *
     * @param packageIdentifier
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageIdentifier($value)
    {
        $this->setPackageIdentifier($value);

        return $this;
    }

    /**
     * Get the value of the Invoice property.
     *
     * @return InvoiceData invoice
     */
    public function getInvoice()
    {
        return $this->_fields['Invoice']['FieldValue'];
    }

    /**
     * Set the value of the Invoice property.
     *
     * @param InvoiceData invoice
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setInvoice($value)
    {
        $this->_fields['Invoice']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Invoice is set.
     *
     * @return true if Invoice is set
     */
    public function isSetInvoice()
    {
        return null !== $this->_fields['Invoice']['FieldValue'];
    }

    /**
     * Set the value of Invoice, return this.
     *
     * @param invoice
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withInvoice($value)
    {
        $this->setInvoice($value);

        return $this;
    }

    /**
     * Get the value of the PackageStatus property.
     *
     * @return string packageStatus
     */
    public function getPackageStatus()
    {
        return $this->_fields['PackageStatus']['FieldValue'];
    }

    /**
     * Set the value of the PackageStatus property.
     *
     * @param string packageStatus
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPackageStatus($value)
    {
        $this->_fields['PackageStatus']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PackageStatus is set.
     *
     * @return true if PackageStatus is set
     */
    public function isSetPackageStatus()
    {
        return null !== $this->_fields['PackageStatus']['FieldValue'];
    }

    /**
     * Set the value of PackageStatus, return this.
     *
     * @param packageStatus
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPackageStatus($value)
    {
        $this->setPackageStatus($value);

        return $this;
    }
}
