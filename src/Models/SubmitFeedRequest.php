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

use MobiMarket\Amazon\Exceptions\AmazonApiException;

/**
 * SubmitFeedRequest.
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MarketplaceIdList: IdList</li>
 * <li>FeedContent: string</li>
 * <li>FeedType: string</li>
 * <li>PurgeAndReplace: bool</li>
 *
 * </ul>
 */
class SubmitFeedRequest extends Model
{
    /**
     * Construct new SubmitFeedRequest.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MarketplaceIdList: IdList</li>
     * <li>FeedContent: string</li>
     * <li>FeedType: string</li>
     * <li>PurgeAndReplace: bool</li>
     *
     * </ul>
     */
    private static $DEFAULT_CONTENT_TYPE;

    public function __construct($data = null)
    {
        self::$DEFAULT_CONTENT_TYPE = new ContentType(
            ['ContentType' => 'application/octet-stream']
        );

        // Here we're setting the content-type field directly to the object, but beware the actual
        // method of construction from associative arrays from the client interface would do something like:
        // $parameters = array ('ContentType' => array('ContentType' => 'application/octet-stream'));

        $this->fields = [
            'Marketplace'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'Merchant'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'MarketplaceIdList' => ['FieldValue' => null, 'FieldType' => 'IdList'],
            'FeedContent'       => ['FieldValue' => null, 'FieldType' => 'string'],
            'FeedType'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'PurgeAndReplace'   => ['FieldValue' => null, 'FieldType' => 'bool'],
            'ContentMd5'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'ContentType'       => ['FieldValue' => self::$DEFAULT_CONTENT_TYPE, 'FieldType' => 'ContentType'],
            'FeedOptions'       => ['FieldValue' => null, 'FieldType' => 'string'],
        ];

        parent::__construct($data);

        if (null !== $this->fields['ContentType']['FieldValue']) {
            $this->verifySupportedContentType($this->fields['ContentType']['FieldValue']);
        }
    }

    /**
     * Gets the value of the content type.
     *
     * @return ContentType instance
     */
    public function getContentType()
    {
        return $this->fields['ContentType']['FieldValue'];
    }

    public function setContentType($value)
    {
        $this->verifySupportedContentType($value);
        $this->fields['ContentType']['FieldValue'] = $value;

        return $this;
    }

    public function isSetContentType()
    {
        return null !== $this->fields['ContentType']['FieldValue'];
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
     * @return SubmitFeedRequest instance
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
     * @return SubmitFeedRequest instance
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
     * @return SubmitFeedRequest instance
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
     * Gets the value of the MarketplaceIdList.
     *
     * @return IdList MarketplaceIdList
     */
    public function getMarketplaceIdList()
    {
        return $this->fields['MarketplaceIdList']['FieldValue'];
    }

    /**
     * Sets the value of the MarketplaceIdList.
     *
     * @param IdList MarketplaceIdList
     * @param mixed $value
     */
    public function setMarketplaceIdList($value): void
    {
        $marketplaceIdList = new IdList();
        $marketplaceIdList->setId($value['Id']);
        $this->fields['MarketplaceIdList']['FieldValue'] = $marketplaceIdList;
    }

    /**
     * Sets the value of the MarketplaceIdList  and returns this instance.
     *
     * @param IdList $value MarketplaceIdList
     *
     * @return SubmitFeedRequest instance
     */
    public function withMarketplaceIdList($value)
    {
        $this->setMarketplaceIdList($value);

        return $this;
    }

    /**
     * Checks if MarketplaceIdList  is set.
     *
     * @return bool true if MarketplaceIdList property is set
     */
    public function isSetMarketplaceIdList()
    {
        return null !== $this->fields['MarketplaceIdList']['FieldValue'];
    }

    /**
     * Gets the value of the FeedContent property.
     *
     * @return string FeedContent
     */
    public function getFeedContent()
    {
        return $this->fields['FeedContent']['FieldValue'];
    }

    /**
     * Sets the value of the FeedContent property.
     *
     * @param string FeedContent
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeedContent($value)
    {
        $this->fields['FeedContent']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the FeedContent and returns this instance.
     *
     * @param string $value FeedContent
     *
     * @return SubmitFeedRequest instance
     */
    public function withFeedContent($value)
    {
        $this->setFeedContent($value);

        return $this;
    }

    /**
     * Checks if FeedContent is set.
     *
     * @return bool true if FeedContent  is set
     */
    public function isSetFeedContent()
    {
        return null !== $this->fields['FeedContent']['FieldValue'];
    }

    /**
     * Gets the value of the FeedType property.
     *
     * @return string FeedType
     */
    public function getFeedType()
    {
        return $this->fields['FeedType']['FieldValue'];
    }

    /**
     * Sets the value of the FeedType property.
     *
     * @param string FeedType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeedType($value)
    {
        $this->fields['FeedType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the FeedType and returns this instance.
     *
     * @param string $value FeedType
     *
     * @return SubmitFeedRequest instance
     */
    public function withFeedType($value)
    {
        $this->setFeedType($value);

        return $this;
    }

    /**
     * Checks if FeedType is set.
     *
     * @return bool true if FeedType  is set
     */
    public function isSetFeedType()
    {
        return null !== $this->fields['FeedType']['FieldValue'];
    }

    /**
     * Gets the value of the PurgeAndReplace property.
     *
     * @return bool PurgeAndReplace
     */
    public function getPurgeAndReplace()
    {
        return $this->fields['PurgeAndReplace']['FieldValue'];
    }

    /**
     * Sets the value of the PurgeAndReplace property.
     *
     * @param bool PurgeAndReplace
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPurgeAndReplace($value)
    {
        $this->fields['PurgeAndReplace']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the PurgeAndReplace and returns this instance.
     *
     * @param bool $value PurgeAndReplace
     *
     * @return SubmitFeedRequest instance
     */
    public function withPurgeAndReplace($value)
    {
        $this->setPurgeAndReplace($value);

        return $this;
    }

    /**
     * Checks if PurgeAndReplace is set.
     *
     * @return bool true if PurgeAndReplace  is set
     */
    public function isSetPurgeAndReplace()
    {
        return null !== $this->fields['PurgeAndReplace']['FieldValue'];
    }

    /**
     * Gets the value of the ContentMd5 property.
     *
     * @return bool ContentMd5
     */
    public function getContentMd5()
    {
        return $this->fields['ContentMd5']['FieldValue'];
    }

    /**
     * Sets the value of the ContentMd5 property.
     *
     * @param bool ContentMd5
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setContentMd5($value)
    {
        $this->fields['ContentMd5']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the ContentMd5 and returns this instance.
     *
     * @param bool $value ContentMd5
     *
     * @return SubmitFeedRequest instance
     */
    public function withContentMd5($value)
    {
        $this->setContentMd5($value);

        return $this;
    }

    /**
     * Checks if ContentMd5 is set.
     *
     * @return bool true if ContentMd5  is set
     */
    public function isSetContentMd5()
    {
        return null !== $this->fields['ContentMd5']['FieldValue'];
    }

    /**
     * Gets the value of the FeedOptions property.
     *
     * @return bool FeedOptions
     */
    public function getFeedOptions()
    {
        return $this->fields['FeedOptions']['FieldValue'];
    }

    /**
     * Sets the value of the FeedOptions property.
     *
     * @param bool FeedOptions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFeedOptions($value)
    {
        $this->fields['FeedOptions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Sets the value of the FeedOptions and returns this instance.
     *
     * @param bool $value FeedOptions
     *
     * @return SubmitFeedRequest instance
     */
    public function withFeedOptions($value)
    {
        $this->setFeedOptions($value);

        return $this;
    }

    /**
     * Checks if FeedOptions is set.
     *
     * @return bool true if FeedOptions  is set
     */
    public function isSetFeedOptions()
    {
        return null !== $this->fields['FeedOptions']['FieldValue'];
    }

    private function verifySupportedContentType($supplied): void
    {
        if (!($supplied == self::$DEFAULT_CONTENT_TYPE)) {
            throw new AmazonApiException(['Message' => 'Unsupported ContentType ' . $supplied->getContentType() . ' ContentType must be ' . self::$DEFAULT_CONTENT_TYPE->getContentType()]);
        }
    }
}
