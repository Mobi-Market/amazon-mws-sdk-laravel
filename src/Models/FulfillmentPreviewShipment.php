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
 * FulfillmentPreviewShipment.
 *
 * Properties:
 * <ul>
 *
 * <li>EarliestShipDate: string</li>
 * <li>LatestShipDate: string</li>
 * <li>EarliestArrivalDate: string</li>
 * <li>LatestArrivalDate: string</li>
 * <li>FulfillmentPreviewItems: FulfillmentPreviewItemList</li>
 *
 * </ul>
 */
class FulfillmentPreviewShipment extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'EarliestShipDate'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'LatestShipDate'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'EarliestArrivalDate'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'LatestArrivalDate'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentPreviewItems' => ['FieldValue' => null, 'FieldType' => 'FulfillmentPreviewItemList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the EarliestShipDate property.
     *
     * @return XMLGregorianCalendar earliestShipDate
     */
    public function getEarliestShipDate()
    {
        return $this->_fields['EarliestShipDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestShipDate property.
     *
     * @param string earliestShipDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEarliestShipDate($value)
    {
        $this->_fields['EarliestShipDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EarliestShipDate is set.
     *
     * @return true if EarliestShipDate is set
     */
    public function isSetEarliestShipDate()
    {
        return null !== $this->_fields['EarliestShipDate']['FieldValue'];
    }

    /**
     * Set the value of EarliestShipDate, return this.
     *
     * @param earliestShipDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEarliestShipDate($value)
    {
        $this->setEarliestShipDate($value);

        return $this;
    }

    /**
     * Get the value of the LatestShipDate property.
     *
     * @return XMLGregorianCalendar latestShipDate
     */
    public function getLatestShipDate()
    {
        return $this->_fields['LatestShipDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestShipDate property.
     *
     * @param string latestShipDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLatestShipDate($value)
    {
        $this->_fields['LatestShipDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LatestShipDate is set.
     *
     * @return true if LatestShipDate is set
     */
    public function isSetLatestShipDate()
    {
        return null !== $this->_fields['LatestShipDate']['FieldValue'];
    }

    /**
     * Set the value of LatestShipDate, return this.
     *
     * @param latestShipDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLatestShipDate($value)
    {
        $this->setLatestShipDate($value);

        return $this;
    }

    /**
     * Get the value of the EarliestArrivalDate property.
     *
     * @return XMLGregorianCalendar earliestArrivalDate
     */
    public function getEarliestArrivalDate()
    {
        return $this->_fields['EarliestArrivalDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestArrivalDate property.
     *
     * @param string earliestArrivalDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEarliestArrivalDate($value)
    {
        $this->_fields['EarliestArrivalDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if EarliestArrivalDate is set.
     *
     * @return true if EarliestArrivalDate is set
     */
    public function isSetEarliestArrivalDate()
    {
        return null !== $this->_fields['EarliestArrivalDate']['FieldValue'];
    }

    /**
     * Set the value of EarliestArrivalDate, return this.
     *
     * @param earliestArrivalDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEarliestArrivalDate($value)
    {
        $this->setEarliestArrivalDate($value);

        return $this;
    }

    /**
     * Get the value of the LatestArrivalDate property.
     *
     * @return XMLGregorianCalendar latestArrivalDate
     */
    public function getLatestArrivalDate()
    {
        return $this->_fields['LatestArrivalDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestArrivalDate property.
     *
     * @param string latestArrivalDate
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLatestArrivalDate($value)
    {
        $this->_fields['LatestArrivalDate']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LatestArrivalDate is set.
     *
     * @return true if LatestArrivalDate is set
     */
    public function isSetLatestArrivalDate()
    {
        return null !== $this->_fields['LatestArrivalDate']['FieldValue'];
    }

    /**
     * Set the value of LatestArrivalDate, return this.
     *
     * @param latestArrivalDate
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLatestArrivalDate($value)
    {
        $this->setLatestArrivalDate($value);

        return $this;
    }

    /**
     * Get the value of the FulfillmentPreviewItems property.
     *
     * @return FulfillmentPreviewItemList fulfillmentPreviewItems
     */
    public function getFulfillmentPreviewItems()
    {
        return $this->_fields['FulfillmentPreviewItems']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentPreviewItems property.
     *
     * @param FulfillmentPreviewItemList fulfillmentPreviewItems
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFulfillmentPreviewItems($value)
    {
        $this->_fields['FulfillmentPreviewItems']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FulfillmentPreviewItems is set.
     *
     * @return true if FulfillmentPreviewItems is set
     */
    public function isSetFulfillmentPreviewItems()
    {
        return null !== $this->_fields['FulfillmentPreviewItems']['FieldValue'];
    }

    /**
     * Set the value of FulfillmentPreviewItems, return this.
     *
     * @param fulfillmentPreviewItems
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFulfillmentPreviewItems($value)
    {
        $this->setFulfillmentPreviewItems($value);

        return $this;
    }
}
