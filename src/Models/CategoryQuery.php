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
 * CategoryQuery.
 *
 * Properties:
 * <ul>
 *
 * <li>RecommendationCategory: string</li>
 * <li>FilterOptions: array</li>
 *
 * </ul>
 */
class CategoryQuery extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'RecommendationCategory' => ['FieldValue' => null, 'FieldType' => 'string'],
            'FilterOptions'          => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'FilterOption'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the RecommendationCategory property.
     *
     * @return string recommendationCategory
     */
    public function getRecommendationCategory()
    {
        return $this->_fields['RecommendationCategory']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationCategory property.
     *
     * @param string recommendationCategory
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRecommendationCategory($value)
    {
        $this->_fields['RecommendationCategory']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if RecommendationCategory is set.
     *
     * @return true if RecommendationCategory is set
     */
    public function isSetRecommendationCategory()
    {
        return null !== $this->_fields['RecommendationCategory']['FieldValue'];
    }

    /**
     * Set the value of RecommendationCategory, return this.
     *
     * @param recommendationCategory
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRecommendationCategory($value)
    {
        $this->setRecommendationCategory($value);

        return $this;
    }

    /**
     * Get the value of the FilterOptions property.
     *
     * @return List<String> filterOptions
     */
    public function getFilterOptions()
    {
        if (null == $this->_fields['FilterOptions']['FieldValue']) {
            $this->_fields['FilterOptions']['FieldValue'] = [];
        }

        return $this->_fields['FilterOptions']['FieldValue'];
    }

    /**
     * Set the value of the FilterOptions property.
     *
     * @param array filterOptions
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setFilterOptions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FilterOptions']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear FilterOptions.
     */
    public function unsetFilterOptions(): void
    {
        $this->_fields['FilterOptions']['FieldValue'] = [];
    }

    /**
     * Check to see if FilterOptions is set.
     *
     * @return true if FilterOptions is set
     */
    public function isSetFilterOptions()
    {
        return !empty($this->_fields['FilterOptions']['FieldValue']);
    }

    /**
     * Add values for FilterOptions, return this.
     *
     * @param filterOptions
     *             New values to add
     *
     * @return $this instance
     */
    public function withFilterOptions()
    {
        foreach (\func_get_args() as $FilterOptions) {
            $this->_fields['FilterOptions']['FieldValue'][] = $FilterOptions;
        }

        return $this;
    }
}
