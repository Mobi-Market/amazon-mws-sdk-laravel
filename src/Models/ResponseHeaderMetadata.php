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

class ResponseHeaderMetadata extends Model
{
    public const REQUEST_ID       = 'x-mws-request-id';
    public const RESPONSE_CONTEXT = 'x-mws-response-context';
    public const TIMESTAMP        = 'x-mws-timestamp';
    public const QUOTA_MAX        = 'x-mws-quota-max';
    public const QUOTA_REMAINING  = 'x-mws-quota-remaining';
    public const QUOTA_RESETS_AT  = 'x-mws-quota-resetsOn';

    private $metadata = [];

    public function __construct(
        $requestId = null,
        $responseContext = null,
        $timestamp = null,
        $quotaMax = null,
        $quotaRemaining = null,
        $quotaResetsAt = null
    ) {
        $this->metadata[self::REQUEST_ID]       = $requestId;
        $this->metadata[self::RESPONSE_CONTEXT] = $responseContext;
        $this->metadata[self::TIMESTAMP]        = $timestamp;
        $this->metadata[self::QUOTA_MAX]        = $quotaMax;
        $this->metadata[self::QUOTA_REMAINING]  = $quotaRemaining;
        $this->metadata[self::QUOTA_RESETS_AT]  = $quotaResetsAt;
    }

    public function __toString()
    {
        return 'RequestId: ' . $this->getRequestId() . ', ResponseContext: ' . $this->getResponseContext() .
      ', Timestamp: ' . $this->getTimestamp() . ', Quota Max: ' . $this->getQuotaMax() .
      ', Quota Remaining: ' . $this->getQuotaRemaining() . ', Quota Resets At: ' . $this->getQuotaResetsAt();
    }

    public function getRequestId()
    {
        return $this->metadata[self::REQUEST_ID];
    }

    public function getResponseContext()
    {
        return $this->metadata[self::RESPONSE_CONTEXT];
    }

    public function getTimestamp()
    {
        return $this->metadata[self::TIMESTAMP];
    }

    /**
     * Gets the max quota allowed for a quota period
     * (from the x-mws-quota-max header).
     *
     * @return the max quota allowed for a quota period
     */
    public function getQuotaMax()
    {
        return $this->metadata[self::QUOTA_MAX];
    }

    /**
     * Gets the quota remaining within this quota period
     * (from the x-mws-quota-remaining header).
     *
     * @return the quota remaining within this quota period
     */
    public function getQuotaRemaining()
    {
        return $this->metadata[self::QUOTA_REMAINING];
    }

    /**
     * Gets the time that this quota period ends
     * (from the x-mws-quota-resetsOn header).
     *
     * @return the time that this quota period ends
     */
    public function getQuotaResetsAt()
    {
        return $this->metadata[self::QUOTA_RESETS_AT];
    }
}
