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