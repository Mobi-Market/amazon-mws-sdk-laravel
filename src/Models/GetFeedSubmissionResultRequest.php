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
 * GetFeedSubmissionResultRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>FeedSubmissionId: string</li>
 *
 * </ul>
 */
class GetFeedSubmissionResultRequest extends Model
{
    /**
     * Construct new GetFeedSubmissionResultRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>FeedSubmissionId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'Marketplace'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeedSubmissionId'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeedSubmissionResult' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the Marketplace property.
     *
     * @return string Marketplace
     */
    public function getMarketplace()
    {
        return $this->fields['Marketplace']['FieldValue'];
    }

    /**
     * Sets the value of the Marketplace property.
     *
     * @param string Marketplace
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMarketplace($value)
    {
        $this->fields['Marketplace']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Marketplace and returns this instance.
     *
     * @param string $value Marketplace
     *
     * @return GetFeedSubmissionResultRequest instance
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);

        return $this;
    }

    /**
     * Checks if Marketplace is set.
     *
     * @return bool true if Marketplace  is set
     */
    public function isSetMarketplace()
    {
        return null !== $this->fields['Marketplace']['FieldValue'];
    }

    /**
     * Gets the value of the Merchant property.
     *
     * @return string Merchant
     */
    public function getMerchant()
    {
        return $this->fields['Merchant']['FieldValue'];
    }

    /**
     * Sets the value of the Merchant property.
     *
     * @param string Merchant
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMerchant($value)
    {
        $this->fields['Merchant']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the Merchant and returns this instance.
     *
     * @param string $value Merchant
     *
     * @return GetFeedSubmissionResultRequest instance
     */
    public function withMerchant($value)
    {
        $this->setMerchant($value);

        return $this;
    }

    /**
     * Checks if Merchant is set.
     *
     * @return bool true if Merchant  is set
     */
    public function isSetMerchant()
    {
        return null !== $this->fields['Merchant']['FieldValue'];
    }

    /**
     * Gets the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Sets the value of the MWSAuthToken property.
     *
     * @param string MWSAuthToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the MWSAuthToken and returns this instance.
     *
     * @param string $value MWSAuthToken
     *
     * @return GetFeedSubmissionResultRequest instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Checks if MWSAuthToken is set.
     *
     * @return bool true if MWSAuthToken  is set
     */
    public function isSetMWSAuthToken()
    {
        return null !== $this->fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Gets the value of the FeedSubmissionId property.
     *
     * @return string FeedSubmissionId
     */
    public function getFeedSubmissionId()
    {
        return $this->fields['FeedSubmissionId']['FieldValue'];
    }

    /**
     * Sets the value of the FeedSubmissionId property.
     *
     * @param string FeedSubmissionId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeedSubmissionId($value)
    {
        $this->fields['FeedSubmissionId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the FeedSubmissionId and returns this instance.
     *
     * @param string $value FeedSubmissionId
     *
     * @return GetFeedSubmissionResultRequest instance
     */
    public function withFeedSubmissionId($value)
    {
        $this->setFeedSubmissionId($value);

        return $this;
    }

    /**
     * Checks if FeedSubmissionId is set.
     *
     * @return bool true if FeedSubmissionId  is set
     */
    public function isSetFeedSubmissionId()
    {
        return null !== $this->fields['FeedSubmissionId']['FieldValue'];
    }

    /**
     * Gets the value of the FeedSubmissionResult property.
     *
     * @return string FeedSubmissionResult
     */
    public function getFeedSubmissionResult()
    {
        return $this->fields['FeedSubmissionResult']['FieldValue'];
    }

    /**
     * Sets the value of the FeedSubmissionResult property.
     *
     * @param string FeedSubmissionResult
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeedSubmissionResult($value)
    {
        $this->fields['FeedSubmissionResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the FeedSubmissionResult and returns this instance.
     *
     * @param string $value FeedSubmissionResult
     *
     * @return GetFeedSubmissionResultRequest instance
     */
    public function withFeedSubmissionResult($value)
    {
        $this->setFeedSubmissionResult($value);

        return $this;
    }

    /**
     * Checks if FeedSubmissionResult is set.
     *
     * @return bool true if FeedSubmissionResult  is set
     */
    public function isFeedSubmissionResult()
    {
        return null !== $this->fields['FeedSubmissionResult']['FieldValue'];
    }
}
