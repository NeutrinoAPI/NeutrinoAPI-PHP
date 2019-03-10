<?php
/*
 * NeutrinoAPI
 *
 * This file was automatically generated for NeutrinoAPI by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace NeutrinoAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GeocodeReverseResponse implements JsonSerializable
{
    /**
     * The country of the location
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * True if these coordinates map to a real location
     * @required
     * @var bool $found public property
     */
    public $found;

    /**
     * The fully formatted address
     * @required
     * @var string $address public property
     */
    public $address;

    /**
     * The city of the location
     * @required
     * @var string $city public property
     */
    public $city;

    /**
     * The ISO 2-letter country code of the location
     * @required
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * The postal code for the location
     * @required
     * @var string $postalCode public property
     */
    public $postalCode;

    /**
     * The state of the location
     * @required
     * @var string $state public property
     */
    public $state;

    /**
     * The components which make up the address such as road, city, state, etc
     * @required
     * @var array $addressComponents public property
     */
    public $addressComponents;

    /**
     * The ISO 3-letter country code of the location
     * @required
     * @var string $countryCode3 public property
     */
    public $countryCode3;

    /**
     * ISO 4217 currency code associated with the country
     * @required
     * @var string $currencyCode public property
     */
    public $currencyCode;

    /**
     * The detected location type ordered roughly from most to least precise, possible values are:
     * <br/><ul><li>address - indicates a precise street address</li><li>street - accurate to the street
     * level but may not point to the exact location of the house/building number</li><li>city - accurate
     * to the city level, this includes villages, towns, suburbs, etc</li><li>postal-code - indicates a
     * postal code area (no house or street information present)</li><li>railway - location is part of a
     * rail network such as a station or railway track</li><li>natural - indicates a natural feature, for
     * example a mountain peak or a waterway</li><li>island - location is an island or
     * archipelago</li><li>administrative - indicates an administrative boundary such as a country, state
     * or province</li></ul>
     * @required
     * @var string $locationType public property
     */
    public $locationType;

    /**
     * Array of strings containing any location tags associated with the address. Tags are additional
     * pieces of metadata about a specific location, there are thousands of different tags. Some examples
     * of tags: shop, office, cafe, bank, pub
     * @required
     * @var array $locationTags public property
     */
    public $locationTags;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $country           Initialization value for $this->country
     * @param bool   $found             Initialization value for $this->found
     * @param string $address           Initialization value for $this->address
     * @param string $city              Initialization value for $this->city
     * @param string $countryCode       Initialization value for $this->countryCode
     * @param string $postalCode        Initialization value for $this->postalCode
     * @param string $state             Initialization value for $this->state
     * @param array  $addressComponents Initialization value for $this->addressComponents
     * @param string $countryCode3      Initialization value for $this->countryCode3
     * @param string $currencyCode      Initialization value for $this->currencyCode
     * @param string $locationType      Initialization value for $this->locationType
     * @param array  $locationTags      Initialization value for $this->locationTags
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->country           = func_get_arg(0);
            $this->found             = func_get_arg(1);
            $this->address           = func_get_arg(2);
            $this->city              = func_get_arg(3);
            $this->countryCode       = func_get_arg(4);
            $this->postalCode        = func_get_arg(5);
            $this->state             = func_get_arg(6);
            $this->addressComponents = func_get_arg(7);
            $this->countryCode3      = func_get_arg(8);
            $this->currencyCode      = func_get_arg(9);
            $this->locationType      = func_get_arg(10);
            $this->locationTags      = func_get_arg(11);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['country']           = $this->country;
        $json['found']             = $this->found;
        $json['address']           = $this->address;
        $json['city']              = $this->city;
        $json['countryCode']       = $this->countryCode;
        $json['postalCode']        = $this->postalCode;
        $json['state']             = $this->state;
        $json['addressComponents'] = $this->addressComponents;
        $json['countryCode3']      = $this->countryCode3;
        $json['currencyCode']      = $this->currencyCode;
        $json['locationType']      = $this->locationType;
        $json['locationTags']      = $this->locationTags;

        return $json;
    }
}
