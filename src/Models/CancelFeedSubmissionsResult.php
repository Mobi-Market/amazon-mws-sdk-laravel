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
 * CancelFeedSubmissionsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>Count: int</li>
 * <li>FeedSubmissionInfo: FeedSubmissionInfo</li>
 *
 * </ul>
 */
class CancelFeedSubmissionsResult extends Model
{
    /**
     * Construct new CancelFeedSubmissionsResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Count: int</li>
     * <li>FeedSubmissionInfo: FeedSubmissionInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Count'              => ['FieldValue' => null, 'FieldType' => 'int'],
            'FeedSubmissionInfo' => ['FieldValue' => [], 'FieldType' => ['FeedSubmissionInfo']],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the Count property.
     *
     * @return int Count
     */
    public function getCount()
    {
        return $this->fields['Count']['FieldValue'];
    }

    /**
     * Sets the value of the Count property.
     *
     * @param int Count
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCount($value)
    {
        $this->fields['Count']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Count and returns this instance.
     *
     * @param int $value Count
     *
     * @return CancelFeedSubmissionsResult instance
     */
    public function withCount($value)
    {
        $this->setCount($value);

        return $this;
    }

    /**
     * Checks if Count is set.
     *
     * @return bool true if Count  is set
     */
    public function isSetCount()
    {
        return null !== $this->fields['Count']['FieldValue'];
    }

    /**
     * Gets the value of the FeedSubmissionInfo.
     *
     * @return array of FeedSubmissionInfo FeedSubmissionInfo
     */
    public function getFeedSubmissionInfoList()
    {
        return $this->fields['FeedSubmissionInfo']['FieldValue'];
    }

    /**
     * Sets the value of the FeedSubmissionInfo.
     *
     * @param mixed FeedSubmissionInfo or an array of FeedSubmissionInfo FeedSubmissionInfo
     * @param mixed $feedSubmissionInfo
     *
     * @return $this instance
     */
    public function setFeedSubmissionInfoList($feedSubmissionInfo)
    {
        if (!$this->_isNumericArray($feedSubmissionInfo)) {
            $feedSubmissionInfo =  [$feedSubmissionInfo];
        }
        $this->fields['FeedSubmissionInfo']['FieldValue'] = $feedSubmissionInfo;

        return $this;
    }

    /**
     * Sets single or multiple values of FeedSubmissionInfo list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFeedSubmissionInfo($feedSubmissionInfo1, $feedSubmissionInfo2)</code>.
     *
     * @param FeedSubmissionInfo $feedSubmissionInfoArgs one or more FeedSubmissionInfo
     *
     * @return CancelFeedSubmissionsResult instance
     */
    public function withFeedSubmissionInfo($feedSubmissionInfoArgs)
    {
        foreach (\func_get_args() as $feedSubmissionInfo) {
            $this->fields['FeedSubmissionInfo']['FieldValue'][] = $feedSubmissionInfo;
        }

        return $this;
    }

    /**
     * Checks if FeedSubmissionInfo list is non-empty.
     *
     * @return bool true if FeedSubmissionInfo list is non-empty
     */
    public function isSetFeedSubmissionInfo()
    {
        return \count($this->fields['FeedSubmissionInfo']['FieldValue']) > 0;
    }
}
