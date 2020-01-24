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
/**
 * /**
 * ContentType.
 *
 * Defines the content type, encoding and character set used to send
 * a feed to MWS
 *
 * @param Associative Array or leave as default types.
 * Valid Properties:
 * <ul>
 *
 * <li>ContentType: string - Possible types: OctetStream</li>
 *
 * </ul>
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

// The only content type that MWS currently supports is octet-stream

class ContentType extends Model
{
    public function __construct($data = null)
    {
        $this->fields = [
            'ContentType' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Parameters'  => ['FieldValue' => null, 'FieldType' => ['string']],
        ];

        parent::__construct($data);
    }

    public function getContentType()
    {
        return $this->fields['ContentType']['FieldValue'];
    }

    public function isSetContentType()
    {
        return null !== $this->fields['ContentType']['FieldValue'];
    }

    public function setContentType($value)
    {
        $this->fields['ContentType']['FieldValue'] = $value;

        return $this;
    }

    public function getParameters()
    {
        return $this->fields['Parameters']['FieldValue'];
    }

    public function setParameters($parameters)
    {
        $this->fields['Parameters']['FieldValue'] = $parameters;

        return $this;
    }

    public function isSetParameters()
    {
        return \count($this->fields['Parameters']['FieldValue']) > 0;
    }

    public function toString()
    {
        $contentType = $this->getContentType();

        return $this->isSetParameters() ?
            $contentType . ';' . implode(';', $this->getParameters()) :
            $contentType;
    }
}
