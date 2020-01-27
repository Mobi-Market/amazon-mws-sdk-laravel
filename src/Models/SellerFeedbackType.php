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
 * SellerFeedbackType.
 *
 * Properties:
 * <ul>
 *
 * <li>SellerPositiveFeedbackRating: float</li>
 * <li>FeedbackCount: int</li>
 *
 * </ul>
 */
class SellerFeedbackType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerPositiveFeedbackRating' => ['FieldValue' => null, 'FieldType' => 'float'],
            'FeedbackCount'                => ['FieldValue' => null, 'FieldType' => 'int'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerPositiveFeedbackRating property.
     *
     * @return float sellerPositiveFeedbackRating
     */
    public function getSellerPositiveFeedbackRating()
    {
        return $this->_fields['SellerPositiveFeedbackRating']['FieldValue'];
    }

    /**
     * Set the value of the SellerPositiveFeedbackRating property.
     *
     * @param float sellerPositiveFeedbackRating
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSellerPositiveFeedbackRating($value)
    {
        $this->_fields['SellerPositiveFeedbackRating']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerPositiveFeedbackRating is set.
     *
     * @return true if SellerPositiveFeedbackRating is set
     */
    public function isSetSellerPositiveFeedbackRating()
    {
        return null !== $this->_fields['SellerPositiveFeedbackRating']['FieldValue'];
    }

    /**
     * Set the value of SellerPositiveFeedbackRating, return this.
     *
     * @param sellerPositiveFeedbackRating
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSellerPositiveFeedbackRating($value)
    {
        $this->setSellerPositiveFeedbackRating($value);

        return $this;
    }

    /**
     * Get the value of the FeedbackCount property.
     *
     * @return long feedbackCount
     */
    public function getFeedbackCount()
    {
        return $this->_fields['FeedbackCount']['FieldValue'];
    }

    /**
     * Set the value of the FeedbackCount property.
     *
     * @param int feedbackCount
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeedbackCount($value)
    {
        $this->_fields['FeedbackCount']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FeedbackCount is set.
     *
     * @return true if FeedbackCount is set
     */
    public function isSetFeedbackCount()
    {
        return null !== $this->_fields['FeedbackCount']['FieldValue'];
    }

    /**
     * Set the value of FeedbackCount, return this.
     *
     * @param feedbackCount
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFeedbackCount($value)
    {
        $this->setFeedbackCount($value);

        return $this;
    }
}
