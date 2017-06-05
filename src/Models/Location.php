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
class Location implements JsonSerializable
{
    /**
     * The country of the location
     * @required
     * @var string $country public property
     */
    public $country;

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
     * The location latitude
     * @required
     * @var double $latitude public property
     */
    public $latitude;

    /**
     * The postal code for the location
     * @required
     * @var string $postalCode public property
     */
    public $postalCode;

    /**
     * The location longitude
     * @required
     * @var double $longitude public property
     */
    public $longitude;

    /**
     * The state of the location (if applicable)
     * @required
     * @var string $state public property
     */
    public $state;

    /**
     * The components which make up the address such as road, city, state etc. May also include additional metadata about the address
     * @required
     * @var array $addressComponents public property
     */
    public $addressComponents;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $country           Initialization value for $this->country
     * @param string $address           Initialization value for $this->address
     * @param string $city              Initialization value for $this->city
     * @param string $countryCode       Initialization value for $this->countryCode
     * @param double $latitude          Initialization value for $this->latitude
     * @param string $postalCode        Initialization value for $this->postalCode
     * @param double $longitude         Initialization value for $this->longitude
     * @param string $state             Initialization value for $this->state
     * @param array  $addressComponents Initialization value for $this->addressComponents
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->country           = func_get_arg(0);
            $this->address           = func_get_arg(1);
            $this->city              = func_get_arg(2);
            $this->countryCode       = func_get_arg(3);
            $this->latitude          = func_get_arg(4);
            $this->postalCode        = func_get_arg(5);
            $this->longitude         = func_get_arg(6);
            $this->state             = func_get_arg(7);
            $this->addressComponents = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['country']           = $this->country;
        $json['address']           = $this->address;
        $json['city']              = $this->city;
        $json['countryCode']       = $this->countryCode;
        $json['latitude']          = $this->latitude;
        $json['postalCode']        = $this->postalCode;
        $json['longitude']         = $this->longitude;
        $json['state']             = $this->state;
        $json['addressComponents'] = $this->addressComponents;

        return $json;
    }
}
