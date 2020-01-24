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
 * Product.
 *
 * Properties:
 * <ul>
 *
 * <li>Identifiers: IdentifierType</li>
 * <li>AttributeSets: AttributeSetList</li>
 * <li>Relationships: RelationshipList</li>
 * <li>CompetitivePricing: CompetitivePricingType</li>
 * <li>SalesRankings: SalesRankList</li>
 * <li>LowestOfferListings: LowestOfferListingList</li>
 * <li>Offers: OffersList</li>
 *
 * </ul>
 */
class Product extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Identifiers'         => ['FieldValue' => null, 'FieldType' => 'IdentifierType'],
            'AttributeSets'       => ['FieldValue' => null, 'FieldType' => 'AttributeSetList'],
            'Relationships'       => ['FieldValue' => null, 'FieldType' => 'RelationshipList'],
            'CompetitivePricing'  => ['FieldValue' => null, 'FieldType' => 'CompetitivePricingType'],
            'SalesRankings'       => ['FieldValue' => null, 'FieldType' => 'SalesRankList'],
            'LowestOfferListings' => ['FieldValue' => null, 'FieldType' => 'LowestOfferListingList'],
            'Offers'              => ['FieldValue' => null, 'FieldType' => 'OffersList'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Identifiers property.
     *
     * @return IdentifierType identifiers
     */
    public function getIdentifiers()
    {
        return $this->_fields['Identifiers']['FieldValue'];
    }

    /**
     * Set the value of the Identifiers property.
     *
     * @param IdentifierType identifiers
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setIdentifiers($value)
    {
        $this->_fields['Identifiers']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Identifiers is set.
     *
     * @return true if Identifiers is set
     */
    public function isSetIdentifiers()
    {
        return null !== $this->_fields['Identifiers']['FieldValue'];
    }

    /**
     * Set the value of Identifiers, return this.
     *
     * @param identifiers
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withIdentifiers($value)
    {
        $this->setIdentifiers($value);

        return $this;
    }

    /**
     * Get the value of the AttributeSets property.
     *
     * @return AttributeSetList attributeSets
     */
    public function getAttributeSets()
    {
        return $this->_fields['AttributeSets']['FieldValue'];
    }

    /**
     * Set the value of the AttributeSets property.
     *
     * @param AttributeSetList attributeSets
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAttributeSets($value)
    {
        $this->_fields['AttributeSets']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AttributeSets is set.
     *
     * @return true if AttributeSets is set
     */
    public function isSetAttributeSets()
    {
        return null !== $this->_fields['AttributeSets']['FieldValue'];
    }

    /**
     * Set the value of AttributeSets, return this.
     *
     * @param attributeSets
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAttributeSets($value)
    {
        $this->setAttributeSets($value);

        return $this;
    }

    /**
     * Get the value of the Relationships property.
     *
     * @return RelationshipList relationships
     */
    public function getRelationships()
    {
        return $this->_fields['Relationships']['FieldValue'];
    }

    /**
     * Set the value of the Relationships property.
     *
     * @param RelationshipList relationships
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setRelationships($value)
    {
        $this->_fields['Relationships']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Relationships is set.
     *
     * @return true if Relationships is set
     */
    public function isSetRelationships()
    {
        return null !== $this->_fields['Relationships']['FieldValue'];
    }

    /**
     * Set the value of Relationships, return this.
     *
     * @param relationships
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withRelationships($value)
    {
        $this->setRelationships($value);

        return $this;
    }

    /**
     * Get the value of the CompetitivePricing property.
     *
     * @return CompetitivePricingType competitivePricing
     */
    public function getCompetitivePricing()
    {
        return $this->_fields['CompetitivePricing']['FieldValue'];
    }

    /**
     * Set the value of the CompetitivePricing property.
     *
     * @param CompetitivePricingType competitivePricing
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCompetitivePricing($value)
    {
        $this->_fields['CompetitivePricing']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CompetitivePricing is set.
     *
     * @return true if CompetitivePricing is set
     */
    public function isSetCompetitivePricing()
    {
        return null !== $this->_fields['CompetitivePricing']['FieldValue'];
    }

    /**
     * Set the value of CompetitivePricing, return this.
     *
     * @param competitivePricing
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCompetitivePricing($value)
    {
        $this->setCompetitivePricing($value);

        return $this;
    }

    /**
     * Get the value of the SalesRankings property.
     *
     * @return SalesRankList salesRankings
     */
    public function getSalesRankings()
    {
        return $this->_fields['SalesRankings']['FieldValue'];
    }

    /**
     * Set the value of the SalesRankings property.
     *
     * @param SalesRankList salesRankings
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setSalesRankings($value)
    {
        $this->_fields['SalesRankings']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SalesRankings is set.
     *
     * @return true if SalesRankings is set
     */
    public function isSetSalesRankings()
    {
        return null !== $this->_fields['SalesRankings']['FieldValue'];
    }

    /**
     * Set the value of SalesRankings, return this.
     *
     * @param salesRankings
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withSalesRankings($value)
    {
        $this->setSalesRankings($value);

        return $this;
    }

    /**
     * Get the value of the LowestOfferListings property.
     *
     * @return LowestOfferListingList lowestOfferListings
     */
    public function getLowestOfferListings()
    {
        return $this->_fields['LowestOfferListings']['FieldValue'];
    }

    /**
     * Set the value of the LowestOfferListings property.
     *
     * @param LowestOfferListingList lowestOfferListings
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setLowestOfferListings($value)
    {
        $this->_fields['LowestOfferListings']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if LowestOfferListings is set.
     *
     * @return true if LowestOfferListings is set
     */
    public function isSetLowestOfferListings()
    {
        return null !== $this->_fields['LowestOfferListings']['FieldValue'];
    }

    /**
     * Set the value of LowestOfferListings, return this.
     *
     * @param lowestOfferListings
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withLowestOfferListings($value)
    {
        $this->setLowestOfferListings($value);

        return $this;
    }

    /**
     * Get the value of the Offers property.
     *
     * @return OffersList offers
     */
    public function getOffers()
    {
        return $this->_fields['Offers']['FieldValue'];
    }

    /**
     * Set the value of the Offers property.
     *
     * @param OffersList offers
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setOffers($value)
    {
        $this->_fields['Offers']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Offers is set.
     *
     * @return true if Offers is set
     */
    public function isSetOffers()
    {
        return null !== $this->_fields['Offers']['FieldValue'];
    }

    /**
     * Set the value of Offers, return this.
     *
     * @param offers
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withOffers($value)
    {
        $this->setOffers($value);

        return $this;
    }
}
