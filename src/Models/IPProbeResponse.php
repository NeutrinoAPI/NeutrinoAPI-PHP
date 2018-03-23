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
class IPProbeResponse implements JsonSerializable
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
     * The detected provider type. See online API docs for specific provider type details
     * @required
     * @var string $providerType public property
     */
    public $providerType;

    /**
     * ISO 2-letter country code
     * @required
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * The IPs hostname (PTR)
     * @required
     * @var string $hostname public property
     */
    public $hostname;

    /**
     * The domain name of the provider
     * @required
     * @var string $providerDomain public property
     */
    public $providerDomain;

    /**
     * Full city name (if detectable)
     * @required
     * @var string $city public property
     */
    public $city;

    /**
     * The website URL for the provider
     * @required
     * @var string $providerWebsite public property
     */
    public $providerWebsite;

    /**
     * The IP address
     * @required
     * @var string $ip public property
     */
    public $ip;

    /**
     * Full region name (if detectable)
     * @required
     * @var string $region public property
     */
    public $region;

    /**
     * A description of the provider, usually extracted from the providers website or WHOIS record
     * @required
     * @var string $providerDescription public property
     */
    public $providerDescription;

    /**
     * ISO 2-letter continent code
     * @required
     * @var string $continentCode public property
     */
    public $continentCode;

    /**
     * True if this IP belongs to a hosting company. Note that this can still be true even if the provider
     * type is VPN/proxy, this occurs in the case that the IP is detected as both types
     * @required
     * @var bool $isHosting public property
     */
    public $isHosting;

    /**
     * True if this IP belongs to an ISP. Note that this can still be true even if the provider type is
     * VPN/proxy, this occurs in the case that the IP is detected as both types
     * @required
     * @var bool $isIsp public property
     */
    public $isIsp;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $valid               Initialization value for $this->valid
     * @param string $country             Initialization value for $this->country
     * @param string $providerType        Initialization value for $this->providerType
     * @param string $countryCode         Initialization value for $this->countryCode
     * @param string $hostname            Initialization value for $this->hostname
     * @param string $providerDomain      Initialization value for $this->providerDomain
     * @param string $city                Initialization value for $this->city
     * @param string $providerWebsite     Initialization value for $this->providerWebsite
     * @param string $ip                  Initialization value for $this->ip
     * @param string $region              Initialization value for $this->region
     * @param string $providerDescription Initialization value for $this->providerDescription
     * @param string $continentCode       Initialization value for $this->continentCode
     * @param bool   $isHosting           Initialization value for $this->isHosting
     * @param bool   $isIsp               Initialization value for $this->isIsp
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->valid               = func_get_arg(0);
            $this->country             = func_get_arg(1);
            $this->providerType        = func_get_arg(2);
            $this->countryCode         = func_get_arg(3);
            $this->hostname            = func_get_arg(4);
            $this->providerDomain      = func_get_arg(5);
            $this->city                = func_get_arg(6);
            $this->providerWebsite     = func_get_arg(7);
            $this->ip                  = func_get_arg(8);
            $this->region              = func_get_arg(9);
            $this->providerDescription = func_get_arg(10);
            $this->continentCode       = func_get_arg(11);
            $this->isHosting           = func_get_arg(12);
            $this->isIsp               = func_get_arg(13);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['valid']               = $this->valid;
        $json['country']             = $this->country;
        $json['providerType']        = $this->providerType;
        $json['countryCode']         = $this->countryCode;
        $json['hostname']            = $this->hostname;
        $json['providerDomain']      = $this->providerDomain;
        $json['city']                = $this->city;
        $json['providerWebsite']     = $this->providerWebsite;
        $json['ip']                  = $this->ip;
        $json['region']              = $this->region;
        $json['providerDescription'] = $this->providerDescription;
        $json['continentCode']       = $this->continentCode;
        $json['isHosting']           = $this->isHosting;
        $json['isIsp']               = $this->isIsp;

        return $json;
    }
}
