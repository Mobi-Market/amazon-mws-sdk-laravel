<?php

declare(strict_types=1);
/**
 *  PHP Version 5.
 *
 *  @category    Amazon
 *
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *
 *  @see        http://aws.amazon.com
 *
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *
 *  @version     2009-01-01
 */
/*

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 *
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

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
