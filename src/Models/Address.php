<?php

declare(strict_types=1);
/*
 * Copyright 2009-2019 Amazon Services. All Rights Reserved.
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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Tue Jul 09 13:26:52 PDT 2019
 */

namespace MobiMarket\Amazon\Models;

use MobiMarket\Amazon\Model;

/**
 * Address.
 *
 * Properties:
 * <ul>
 *
 * <li>Name: string</li>
 * <li>AddressLine1: string</li>
 * <li>AddressLine2: string</li>
 * <li>AddressLine3: string</li>
 * <li>DistrictOrCounty: string</li>
 * <li>Email: string</li>
 * <li>City: string</li>
 * <li>StateOrProvinceCode: string</li>
 * <li>PostalCode: string</li>
 * <li>CountryCode: string</li>
 * <li>Phone: string</li>
 *
 * </ul>
 */
class Address extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Name'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'AddressLine1'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'AddressLine2'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'AddressLine3'        => ['FieldValue' => null, 'FieldType' => 'string'],
            'DistrictOrCounty'    => ['FieldValue' => null, 'FieldType' => 'string'],
            'Email'               => ['FieldValue' => null, 'FieldType' => 'string'],
            'City'                => ['FieldValue' => null, 'FieldType' => 'string'],
            'StateOrProvinceCode' => ['FieldValue' => null, 'FieldType' => 'string'],
            'PostalCode'          => ['FieldValue' => null, 'FieldType' => 'string'],
            'CountryCode'         => ['FieldValue' => null, 'FieldType' => 'string'],
            'Phone'               => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Name property.
     *
     * @return string name
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Set the value of the Name property.
     *
     * @param string name
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setName($value)
    {
        $this->_fields['Name']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Name is set.
     *
     * @return true if Name is set
     */
    public function isSetName()
    {
        return null !== $this->_fields['Name']['FieldValue'];
    }

    /**
     * Set the value of Name, return this.
     *
     * @param name
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withName($value)
    {
        $this->setName($value);

        return $this;
    }

    /**
     * Get the value of the AddressLine1 property.
     *
     * @return string addressLine1
     */
    public function getAddressLine1()
    {
        return $this->_fields['AddressLine1']['FieldValue'];
    }

    /**
     * Set the value of the AddressLine1 property.
     *
     * @param string addressLine1
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAddressLine1($value)
    {
        $this->_fields['AddressLine1']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AddressLine1 is set.
     *
     * @return true if AddressLine1 is set
     */
    public function isSetAddressLine1()
    {
        return null !== $this->_fields['AddressLine1']['FieldValue'];
    }

    /**
     * Set the value of AddressLine1, return this.
     *
     * @param addressLine1
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAddressLine1($value)
    {
        $this->setAddressLine1($value);

        return $this;
    }

    /**
     * Get the value of the AddressLine2 property.
     *
     * @return string addressLine2
     */
    public function getAddressLine2()
    {
        return $this->_fields['AddressLine2']['FieldValue'];
    }

    /**
     * Set the value of the AddressLine2 property.
     *
     * @param string addressLine2
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAddressLine2($value)
    {
        $this->_fields['AddressLine2']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AddressLine2 is set.
     *
     * @return true if AddressLine2 is set
     */
    public function isSetAddressLine2()
    {
        return null !== $this->_fields['AddressLine2']['FieldValue'];
    }

    /**
     * Set the value of AddressLine2, return this.
     *
     * @param addressLine2
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAddressLine2($value)
    {
        $this->setAddressLine2($value);

        return $this;
    }

    /**
     * Get the value of the AddressLine3 property.
     *
     * @return string addressLine3
     */
    public function getAddressLine3()
    {
        return $this->_fields['AddressLine3']['FieldValue'];
    }

    /**
     * Set the value of the AddressLine3 property.
     *
     * @param string addressLine3
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setAddressLine3($value)
    {
        $this->_fields['AddressLine3']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if AddressLine3 is set.
     *
     * @return true if AddressLine3 is set
     */
    public function isSetAddressLine3()
    {
        return null !== $this->_fields['AddressLine3']['FieldValue'];
    }

    /**
     * Set the value of AddressLine3, return this.
     *
     * @param addressLine3
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withAddressLine3($value)
    {
        $this->setAddressLine3($value);

        return $this;
    }

    /**
     * Get the value of the DistrictOrCounty property.
     *
     * @return string districtOrCounty
     */
    public function getDistrictOrCounty()
    {
        return $this->_fields['DistrictOrCounty']['FieldValue'];
    }

    /**
     * Set the value of the DistrictOrCounty property.
     *
     * @param string districtOrCounty
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setDistrictOrCounty($value)
    {
        $this->_fields['DistrictOrCounty']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DistrictOrCounty is set.
     *
     * @return true if DistrictOrCounty is set
     */
    public function isSetDistrictOrCounty()
    {
        return null !== $this->_fields['DistrictOrCounty']['FieldValue'];
    }

    /**
     * Set the value of DistrictOrCounty, return this.
     *
     * @param districtOrCounty
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withDistrictOrCounty($value)
    {
        $this->setDistrictOrCounty($value);

        return $this;
    }

    /**
     * Get the value of the Email property.
     *
     * @return string email
     */
    public function getEmail()
    {
        return $this->_fields['Email']['FieldValue'];
    }

    /**
     * Set the value of the Email property.
     *
     * @param string email
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setEmail($value)
    {
        $this->_fields['Email']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Email is set.
     *
     * @return true if Email is set
     */
    public function isSetEmail()
    {
        return null !== $this->_fields['Email']['FieldValue'];
    }

    /**
     * Set the value of Email, return this.
     *
     * @param email
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withEmail($value)
    {
        $this->setEmail($value);

        return $this;
    }

    /**
     * Get the value of the City property.
     *
     * @return string city
     */
    public function getCity()
    {
        return $this->_fields['City']['FieldValue'];
    }

    /**
     * Set the value of the City property.
     *
     * @param string city
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCity($value)
    {
        $this->_fields['City']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if City is set.
     *
     * @return true if City is set
     */
    public function isSetCity()
    {
        return null !== $this->_fields['City']['FieldValue'];
    }

    /**
     * Set the value of City, return this.
     *
     * @param city
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCity($value)
    {
        $this->setCity($value);

        return $this;
    }

    /**
     * Get the value of the StateOrProvinceCode property.
     *
     * @return string stateOrProvinceCode
     */
    public function getStateOrProvinceCode()
    {
        return $this->_fields['StateOrProvinceCode']['FieldValue'];
    }

    /**
     * Set the value of the StateOrProvinceCode property.
     *
     * @param string stateOrProvinceCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setStateOrProvinceCode($value)
    {
        $this->_fields['StateOrProvinceCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if StateOrProvinceCode is set.
     *
     * @return true if StateOrProvinceCode is set
     */
    public function isSetStateOrProvinceCode()
    {
        return null !== $this->_fields['StateOrProvinceCode']['FieldValue'];
    }

    /**
     * Set the value of StateOrProvinceCode, return this.
     *
     * @param stateOrProvinceCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withStateOrProvinceCode($value)
    {
        $this->setStateOrProvinceCode($value);

        return $this;
    }

    /**
     * Get the value of the PostalCode property.
     *
     * @return string postalCode
     */
    public function getPostalCode()
    {
        return $this->_fields['PostalCode']['FieldValue'];
    }

    /**
     * Set the value of the PostalCode property.
     *
     * @param string postalCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPostalCode($value)
    {
        $this->_fields['PostalCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if PostalCode is set.
     *
     * @return true if PostalCode is set
     */
    public function isSetPostalCode()
    {
        return null !== $this->_fields['PostalCode']['FieldValue'];
    }

    /**
     * Set the value of PostalCode, return this.
     *
     * @param postalCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPostalCode($value)
    {
        $this->setPostalCode($value);

        return $this;
    }

    /**
     * Get the value of the CountryCode property.
     *
     * @return string countryCode
     */
    public function getCountryCode()
    {
        return $this->_fields['CountryCode']['FieldValue'];
    }

    /**
     * Set the value of the CountryCode property.
     *
     * @param string countryCode
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setCountryCode($value)
    {
        $this->_fields['CountryCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if CountryCode is set.
     *
     * @return true if CountryCode is set
     */
    public function isSetCountryCode()
    {
        return null !== $this->_fields['CountryCode']['FieldValue'];
    }

    /**
     * Set the value of CountryCode, return this.
     *
     * @param countryCode
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withCountryCode($value)
    {
        $this->setCountryCode($value);

        return $this;
    }

    /**
     * Get the value of the Phone property.
     *
     * @return string phone
     */
    public function getPhone()
    {
        return $this->_fields['Phone']['FieldValue'];
    }

    /**
     * Set the value of the Phone property.
     *
     * @param string phone
     * @param mixed $value
     *
     * @return $this instance
     */
    public function setPhone($value)
    {
        $this->_fields['Phone']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Phone is set.
     *
     * @return true if Phone is set
     */
    public function isSetPhone()
    {
        return null !== $this->_fields['Phone']['FieldValue'];
    }

    /**
     * Set the value of Phone, return this.
     *
     * @param phone
     *             The new value to set
     * @param mixed $value
     *
     * @return $this instance
     */
    public function withPhone($value)
    {
        $this->setPhone($value);

        return $this;
    }
}
