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
class IPInfoResponse implements JsonSerializable
{
    /**
     * Is this a valid IP address
     * @required
     * @var bool $valid public property
     */
    public $valid;

    /**
     * Full country name
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * The IPs hostname (only set if reverse-lookup has been used)
     * @required
     * @var string $hostname public property
     */
    public $hostname;

    /**
     * Full city name (if detectable)
     * @required
     * @var string $city public property
     */
    public $city;

    /**
     * ISO 2-letter country code
     * @required
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * Location latitude
     * @required
     * @var double $latitude public property
     */
    public $latitude;

    /**
     * Full region name (if detectable)
     * @required
     * @var string $region public property
     */
    public $region;

    /**
     * Location longitude
     * @required
     * @var double $longitude public property
     */
    public $longitude;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $valid       Initialization value for $this->valid
     * @param string $country     Initialization value for $this->country
     * @param string $hostname    Initialization value for $this->hostname
     * @param string $city        Initialization value for $this->city
     * @param string $countryCode Initialization value for $this->countryCode
     * @param double $latitude    Initialization value for $this->latitude
     * @param string $region      Initialization value for $this->region
     * @param double $longitude   Initialization value for $this->longitude
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->valid       = func_get_arg(0);
            $this->country     = func_get_arg(1);
            $this->hostname    = func_get_arg(2);
            $this->city        = func_get_arg(3);
            $this->countryCode = func_get_arg(4);
            $this->latitude    = func_get_arg(5);
            $this->region      = func_get_arg(6);
            $this->longitude   = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['valid']       = $this->valid;
        $json['country']     = $this->country;
        $json['hostname']    = $this->hostname;
        $json['city']        = $this->city;
        $json['countryCode'] = $this->countryCode;
        $json['latitude']    = $this->latitude;
        $json['region']      = $this->region;
        $json['longitude']   = $this->longitude;

        return $json;
    }
}
