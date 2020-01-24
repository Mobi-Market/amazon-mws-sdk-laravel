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
 * RequestReportResult.
 *
 * Properties:
 * <ul>
 *
 * <li>ReportRequestInfo: ReportRequestInfo</li>
 *
 * </ul>
 */
class RequestReportResult extends Model
{
    /**
     * Construct new RequestReportResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>ReportRequestInfo: ReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'ReportRequestInfo' => ['FieldValue' => null, 'FieldType' => 'ReportRequestInfo'],
        ];
        parent::__construct($data);
    }

    /**
     * Gets the value of the ReportRequestInfo.
     *
     * @return ReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfo()
    {
        return $this->fields['ReportRequestInfo']['FieldValue'];
    }

    /**
     * Sets the value of the ReportRequestInfo.
     *
     * @param ReportRequestInfo ReportRequestInfo
     * @param mixed $value
     */
    public function setReportRequestInfo($value): void
    {
        $this->fields['ReportRequestInfo']['FieldValue'] = $value;
    }

    /**
     * Sets the value of the ReportRequestInfo  and returns this instance.
     *
     * @param ReportRequestInfo $value ReportRequestInfo
     *
     * @return RequestReportResult instance
     */
    public function withReportRequestInfo($value)
    {
        $this->setReportRequestInfo($value);

        return $this;
    }

    /**
     * Checks if ReportRequestInfo  is set.
     *
     * @return bool true if ReportRequestInfo property is set
     */
    public function isSetReportRequestInfo()
    {
        return null !== $this->fields['ReportRequestInfo']['FieldValue'];
    }
}
