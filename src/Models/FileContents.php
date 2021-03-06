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
 * FileContents.
 *
 * Properties:
 * <ul>
 *
 * <li>Contents: string</li>
 * <li>FileType: string</li>
 * <li>Checksum: string</li>
 *
 * </ul>
 */
class FileContents extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Contents' => ['FieldValue' => null, 'FieldType' => 'string'],
            'FileType' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Checksum' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Contents property.
     *
     * @return string contents
     */
    public function getContents()
    {
        return $this->_fields['Contents']['FieldValue'];
    }

    /**
     * Set the value of the Contents property.
     *
     * @param string contents
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setContents($value)
    {
        $this->_fields['Contents']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Contents is set.
     *
     * @return true if Contents is set
     */
    public function isSetContents()
    {
        return null !== $this->_fields['Contents']['FieldValue'];
    }

    /**
     * Set the value of Contents, return this.
     *
     * @param contents
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withContents($value)
    {
        $this->setContents($value);

        return $this;
    }

    /**
     * Get the value of the FileType property.
     *
     * @return string fileType
     */
    public function getFileType()
    {
        return $this->_fields['FileType']['FieldValue'];
    }

    /**
     * Set the value of the FileType property.
     *
     * @param string fileType
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFileType($value)
    {
        $this->_fields['FileType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if FileType is set.
     *
     * @return true if FileType is set
     */
    public function isSetFileType()
    {
        return null !== $this->_fields['FileType']['FieldValue'];
    }

    /**
     * Set the value of FileType, return this.
     *
     * @param fileType
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withFileType($value)
    {
        $this->setFileType($value);

        return $this;
    }

    /**
     * Get the value of the Checksum property.
     *
     * @return string checksum
     */
    public function getChecksum()
    {
        return $this->_fields['Checksum']['FieldValue'];
    }

    /**
     * Set the value of the Checksum property.
     *
     * @param string checksum
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setChecksum($value)
    {
        $this->_fields['Checksum']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Checksum is set.
     *
     * @return true if Checksum is set
     */
    public function isSetChecksum()
    {
        return null !== $this->_fields['Checksum']['FieldValue'];
    }

    /**
     * Set the value of Checksum, return this.
     *
     * @param checksum
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withChecksum($value)
    {
        $this->setChecksum($value);

        return $this;
    }
}
