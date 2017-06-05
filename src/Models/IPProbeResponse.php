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
     * The detected provider type. See API docs for specific provider type details
     * @required
     * @maps provider-type
     * @var string $providerType public property
     */
    public $providerType;

    /**
     * ISO 2-letter country code
     * @required
     * @maps country-code
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
     * @maps provider-domain
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
     * @maps provider-website
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
     * @maps provider-description
     * @var string $providerDescription public property
     */
    public $providerDescription;

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
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
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
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['valid']                = $this->valid;
        $json['country']              = $this->country;
        $json['provider-type']        = $this->providerType;
        $json['country-code']         = $this->countryCode;
        $json['hostname']             = $this->hostname;
        $json['provider-domain']      = $this->providerDomain;
        $json['city']                 = $this->city;
        $json['provider-website']     = $this->providerWebsite;
        $json['ip']                   = $this->ip;
        $json['region']               = $this->region;
        $json['provider-description'] = $this->providerDescription;

        return $json;
    }
}
