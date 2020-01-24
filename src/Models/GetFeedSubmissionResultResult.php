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
 * GetFeedSubmissionResultResult.
 *
 * Properties:
 * <ul>
 *
 *
 * </ul>
 */
class GetFeedSubmissionResultResult extends Model
{
    /**
     * Construct new GetFeedSubmissionResultResult.
     *
     * @param mixed $data \DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = [
            'ContentMd5' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    public function getContentMd5()
    {
        return $this->fields['ContentMd5']['FieldValue'];
    }

    public function setContentMd5($value): void
    {
        $this->fields['ContentMd5']['FieldValue'] = $value;
    }

    public function isSetContentMd5()
    {
        return null !== $this->fields['ContentMd5']['FieldValue'];
    }

    public function withContentMd5($value)
    {
        $this->setContentMd5($value);

        return $this;
    }
}