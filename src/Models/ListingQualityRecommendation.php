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

use MobiMarket\Amazon\Model;

/**
 * ListingQualityRecommendation.
 *
 * Properties:
 * <ul>
 *
 * <li>QualitySet: string</li>
 * <li>DefectGroup: string</li>
 * <li>DefectAttribute: string</li>
 * <li>ItemIdentifier: ProductIdentifier</li>
 * <li>ItemName: string</li>
 * <li>RecommendationId: string</li>
 * <li>RecommendationReason: string</li>
 *
 * </ul>
 */
class ListingQualityRecommendation extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'QualitySet'           => ['FieldValue' => null, 'FieldType' => 'string'],
            'DefectGroup'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'DefectAttribute'      => ['FieldValue' => null, 'FieldType' => 'string'],
            'ItemIdentifier'       => ['FieldValue' => null, 'FieldType' => 'ProductIdentifier'],
            'ItemName'             => ['FieldValue' => null, 'FieldType' => 'string'],
            'RecommendationId'     => ['FieldValue' => null, 'FieldType' => 'string'],
            'RecommendationReason' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the QualitySet property.
     *
     * @return string qualitySet
     */
    public function getQualitySet()
    {
        return $this->_fields['QualitySet']['FieldValue'];
    }

    /**
     * Set the value of the QualitySet property.
     *
     * @param string qualitySet
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setQualitySet($value)
    {
        $this->_fields['QualitySet']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if QualitySet is set.
     *
     * @return true if QualitySet is set
     */
    public function isSetQualitySet()
    {
        return null !== $this->_fields['QualitySet']['FieldValue'];
    }

    /**
     * Set the value of QualitySet, return this.
     *
     * @param qualitySet
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withQualitySet($value)
    {
        $this->setQualitySet($value);

        return $this;
    }

    /**
     * Get the value of the DefectGroup property.
     *
     * @return string defectGroup
     */
    public function getDefectGroup()
    {
        return $this->_fields['DefectGroup']['FieldValue'];
    }

    /**
     * Set the value of the DefectGroup property.
     *
     * @param string defectGroup
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDefectGroup($value)
    {
        $this->_fields['DefectGroup']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DefectGroup is set.
     *
     * @return true if DefectGroup is set
     */
    public function isSetDefectGroup()
    {
        return null !== $this->_fields['DefectGroup']['FieldValue'];
    }

    /**
     * Set the value of DefectGroup, return this.
     *
     * @param defectGroup
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDefectGroup($value)
    {
        $this->setDefectGroup($value);

        return $this;
    }

    /**
     * Get the value of the DefectAttribute property.
     *
     * @return string defectAttribute
     */
    public function getDefectAttribute()
    {
        return $this->_fields['DefectAttribute']['FieldValue'];
    }

    /**
     * Set the value of the DefectAttribute property.
     *
     * @param string defectAttribute
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDefectAttribute($value)
    {
        $this->_fields['DefectAttribute']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DefectAttribute is set.
     *
     * @return true if DefectAttribute is set
     */
    public function isSetDefectAttribute()
    {
        return null !== $this->_fields['DefectAttribute']['FieldValue'];
    }

    /**
     * Set the value of DefectAttribute, return this.
     *
     * @param defectAttribute
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDefectAttribute($value)
    {
        $this->setDefectAttribute($value);

        return $this;
    }

    /**
     * Get the value of the ItemIdentifier property.
     *
     * @return ProductIdentifier itemIdentifier
     */
    public function getItemIdentifier()
    {
        return $this->_fields['ItemIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the ItemIdentifier property.
     *
     * @param ProductIdentifier itemIdentifier
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemIdentifier($value)
    {
        $this->_fields['ItemIdentifier']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemIdentifier is set.
     *
     * @return true if ItemIdentifier is set
     */
    public function isSetItemIdentifier()
    {
        return null !== $this->_fields['ItemIdentifier']['FieldValue'];
    }

    /**
     * Set the value of ItemIdentifier, return this.
     *
     * @param itemIdentifier
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemIdentifier($value)
    {
        $this->setItemIdentifier($value);

        return $this;
    }

    /**
     * Get the value of the ItemName property.
     *
     * @return string itemName
     */
    public function getItemName()
    {
        return $this->_fields['ItemName']['FieldValue'];
    }

    /**
     * Set the value of the ItemName property.
     *
     * @param string itemName
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setItemName($value)
    {
        $this->_fields['ItemName']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ItemName is set.
     *
     * @return true if ItemName is set
     */
    public function isSetItemName()
    {
        return null !== $this->_fields['ItemName']['FieldValue'];
    }

    /**
     * Set the value of ItemName, return this.
     *
     * @param itemName
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withItemName($value)
    {
        $this->setItemName($value);

        return $this;
    }

    /**
     * Get the value of the RecommendationId property.
     *
     * @return string recommendationId
     */
    public function getRecommendationId()
    {
        return $this->_fields['RecommendationId']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationId property.
     *
     * @param string recommendationId
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRecommendationId($value)
    {
        $this->_fields['RecommendationId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RecommendationId is set.
     *
     * @return true if RecommendationId is set
     */
    public function isSetRecommendationId()
    {
        return null !== $this->_fields['RecommendationId']['FieldValue'];
    }

    /**
     * Set the value of RecommendationId, return this.
     *
     * @param recommendationId
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRecommendationId($value)
    {
        $this->setRecommendationId($value);

        return $this;
    }

    /**
     * Get the value of the RecommendationReason property.
     *
     * @return string recommendationReason
     */
    public function getRecommendationReason()
    {
        return $this->_fields['RecommendationReason']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationReason property.
     *
     * @param string recommendationReason
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRecommendationReason($value)
    {
        $this->_fields['RecommendationReason']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RecommendationReason is set.
     *
     * @return true if RecommendationReason is set
     */
    public function isSetRecommendationReason()
    {
        return null !== $this->_fields['RecommendationReason']['FieldValue'];
    }

    /**
     * Set the value of RecommendationReason, return this.
     *
     * @param recommendationReason
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRecommendationReason($value)
    {
        $this->setRecommendationReason($value);

        return $this;
    }
}
