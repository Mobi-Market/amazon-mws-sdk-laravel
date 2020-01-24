<?php

declare(strict_types=1);
/*
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2015-06-18
 * Generated: Wed Sep 12 08:12:03 PDT 2018
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * ListMarketplaceParticipationsResult.
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>ListParticipations: ListParticipations</li>
 * <li>ListMarketplaces: ListMarketplaces</li>
 *
 * </ul>
 */
class ListMarketplaceParticipationsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'NextToken'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'ListParticipations' => ['FieldValue' => null, 'FieldType' => 'ListParticipations'],
            'ListMarketplaces'   => ['FieldValue' => null, 'FieldType' => 'ListMarketplaces'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return string nextToken
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set
     */
    public function isSetNextToken()
    {
        return null !== $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);

        return $this;
    }

    /**
     * Get the value of the ListParticipations property.
     *
     * @return ListParticipations listParticipations
     */
    public function getListParticipations()
    {
        return $this->_fields['ListParticipations']['FieldValue'];
    }

    /**
     * Set the value of the ListParticipations property.
     *
     * @param ListParticipations listParticipations
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setListParticipations($value)
    {
        $this->_fields['ListParticipations']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ListParticipations is set.
     *
     * @return true if ListParticipations is set
     */
    public function isSetListParticipations()
    {
        return null !== $this->_fields['ListParticipations']['FieldValue'];
    }

    /**
     * Set the value of ListParticipations, return this.
     *
     * @param listParticipations
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withListParticipations($value)
    {
        $this->setListParticipations($value);

        return $this;
    }

    /**
     * Get the value of the ListMarketplaces property.
     *
     * @return ListMarketplaces listMarketplaces
     */
    public function getListMarketplaces()
    {
        return $this->_fields['ListMarketplaces']['FieldValue'];
    }

    /**
     * Set the value of the ListMarketplaces property.
     *
     * @param ListMarketplaces listMarketplaces
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setListMarketplaces($value)
    {
        $this->_fields['ListMarketplaces']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ListMarketplaces is set.
     *
     * @return true if ListMarketplaces is set
     */
    public function isSetListMarketplaces()
    {
        return null !== $this->_fields['ListMarketplaces']['FieldValue'];
    }

    /**
     * Set the value of ListMarketplaces, return this.
     *
     * @param listMarketplaces
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withListMarketplaces($value)
    {
        $this->setListMarketplaces($value);

        return $this;
    }
}
