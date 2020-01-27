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
 * SubmitFeedResult.
 *
 * Properties:
 * <ul>
 *
 * <li>FeedSubmissionInfo: FeedSubmissionInfo</li>
 *
 * </ul>
 */
class SubmitFeedResult extends Model
{
    /**
     * Construct new SubmitFeedResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>FeedSubmissionInfo: FeedSubmissionInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'FeedSubmissionInfo' => ['FieldValue' => null, 'FieldType' => 'FeedSubmissionInfo'],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the FeedSubmissionInfo.
     *
     * @return FeedSubmissionInfo FeedSubmissionInfo
     */
    public function getFeedSubmissionInfo()
    {
        return $this->fields['FeedSubmissionInfo']['FieldValue'];
    }

    /**
     * Sets the value of the FeedSubmissionInfo.
     *
     * @param FeedSubmissionInfo FeedSubmissionInfo
     * @param mixed $value
     */
    public function setFeedSubmissionInfo($value): void
    {
        $this->fields['FeedSubmissionInfo']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the FeedSubmissionInfo  and returns this instance.
     *
     * @param FeedSubmissionInfo $value FeedSubmissionInfo
     *
     * @return SubmitFeedResult instance
     */
    public function withFeedSubmissionInfo($value)
    {
        $this->setFeedSubmissionInfo($value);

        return $this;
    }

    /**
     * Checks if FeedSubmissionInfo  is set.
     *
     * @return bool true if FeedSubmissionInfo property is set
     */
    public function isSetFeedSubmissionInfo()
    {
        return null !== $this->fields['FeedSubmissionInfo']['FieldValue'];
    }
}
