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
     * Is this a valid IPv4 or IPv6 address
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
     * The IPs full hostname (only set if reverse-lookup has been used)
     * @required
     * @var string $hostname public property
     */
    public $hostname;

    /**
     * Name of the city (if detectable)
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
     * @var integer $latitude public property
     */
    public $latitude;

    /**
     * Name of the region (if detectable)
     * @required
     * @var string $region public property
     */
    public $region;

    /**
     * Location longitude
     * @required
     * @var integer $longitude public property
     */
    public $longitude;

    /**
     * ISO 2-letter continent code
     * @required
     * @var string $continentCode public property
     */
    public $continentCode;

    /**
     * The IP address
     * @required
     * @var string $ip public property
     */
    public $ip;

    /**
     * ISO 3-letter country code
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
     * The IPs host domain (only set if reverse-lookup has been used)
     * @required
     * @var string $hostDomain public property
     */
    public $hostDomain;

    /**
     * Map containing timezone details for the location: <ul> <li>id - the time zone ID as per the IANA
     * time zone database (tzdata)</li> <li>name - the time zone name</li> <li>abbr - the time zone
     * abbreviation</li> <li>date - the current date within the time zone (ISO format)</li> <li>time - the
     * current time within the time zone (ISO format)</li> </ul>
     * @required
     * @var array $timezone public property
     */
    public $timezone;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $valid         Initialization value for $this->valid
     * @param string  $country       Initialization value for $this->country
     * @param string  $hostname      Initialization value for $this->hostname
     * @param string  $city          Initialization value for $this->city
     * @param string  $countryCode   Initialization value for $this->countryCode
     * @param integer $latitude      Initialization value for $this->latitude
     * @param string  $region        Initialization value for $this->region
     * @param integer $longitude     Initialization value for $this->longitude
     * @param string  $continentCode Initialization value for $this->continentCode
     * @param string  $ip            Initialization value for $this->ip
     * @param string  $countryCode3  Initialization value for $this->countryCode3
     * @param string  $currencyCode  Initialization value for $this->currencyCode
     * @param string  $hostDomain    Initialization value for $this->hostDomain
     * @param array   $timezone      Initialization value for $this->timezone
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->valid         = func_get_arg(0);
            $this->country       = func_get_arg(1);
            $this->hostname      = func_get_arg(2);
            $this->city          = func_get_arg(3);
            $this->countryCode   = func_get_arg(4);
            $this->latitude      = func_get_arg(5);
            $this->region        = func_get_arg(6);
            $this->longitude     = func_get_arg(7);
            $this->continentCode = func_get_arg(8);
            $this->ip            = func_get_arg(9);
            $this->countryCode3  = func_get_arg(10);
            $this->currencyCode  = func_get_arg(11);
            $this->hostDomain    = func_get_arg(12);
            $this->timezone      = func_get_arg(13);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['valid']         = $this->valid;
        $json['country']       = $this->country;
        $json['hostname']      = $this->hostname;
        $json['city']          = $this->city;
        $json['countryCode']   = $this->countryCode;
        $json['latitude']      = $this->latitude;
        $json['region']        = $this->region;
        $json['longitude']     = $this->longitude;
        $json['continentCode'] = $this->continentCode;
        $json['ip']            = $this->ip;
        $json['countryCode3']  = $this->countryCode3;
        $json['currencyCode']  = $this->currencyCode;
        $json['hostDomain']    = $this->hostDomain;
        $json['timezone']      = $this->timezone;

        return $json;
    }
}
