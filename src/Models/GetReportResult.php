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
 * GetReportResult.
 *
 * Properties:
 * <ul>
 *
 *
 * </ul>
 */
class GetReportResult extends Model
{
    /**
     * Construct new GetReportResult.
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
