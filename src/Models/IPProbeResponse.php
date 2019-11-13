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
     * The detected provider type, possible values are: <ul> <li>isp - IP belongs to an internet service
     * provider. This includes both mobile, home and business internet providers</li> <li>hosting - IP
     * belongs to a hosting company. This includes website hosting, cloud computing platforms and
     * colocation facilities</li> <li>vpn - IP belongs to a VPN provider</li> <li>proxy - IP belongs to a
     * proxy service. This includes HTTP/SOCKS proxies and browser based proxies</li> <li>university - IP
     * belongs to a university/college/campus</li> <li>government - IP belongs to a government department.
     * This includes military facilities</li> <li>commercial - IP belongs to a commercial entity such as a
     * corporate headquarters or company office</li> <li>unknown - could not identify the provider
     * type</li> </ul>
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
     * The IPs full hostname (PTR)
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
     * A description of the provider (usually extracted from the providers website)
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
     * True if this IP belongs to an internet service provider. Note that this can still be true even if
     * the provider type is VPN/proxy, this occurs in the case that the IP is detected as both types
     * @required
     * @var bool $isIsp public property
     */
    public $isIsp;

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
     * True if this IP ia a VPN
     * @required
     * @var bool $isVpn public property
     */
    public $isVpn;

    /**
     * True if this IP ia a proxy
     * @required
     * @var bool $isProxy public property
     */
    public $isProxy;

    /**
     * The autonomous system (AS) number
     * @required
     * @var string $asn public property
     */
    public $asn;

    /**
     * The autonomous system (AS) CIDR range
     * @required
     * @var string $asCidr public property
     */
    public $asCidr;

    /**
     * The autonomous system (AS) ISO 2-letter country code
     * @required
     * @var string $asCountryCode public property
     */
    public $asCountryCode;

    /**
     * The autonomous system (AS) ISO 3-letter country code
     * @required
     * @var string $asCountryCode3 public property
     */
    public $asCountryCode3;

    /**
     * Array of all the domains associated with the autonomous system (AS)
     * @required
     * @var array $asDomains public property
     */
    public $asDomains;

    /**
     * The autonomous system (AS) description / company name
     * @required
     * @var string $asDescription public property
     */
    public $asDescription;

    /**
     * The age of the autonomous system (AS) in number of years since registration
     * @required
     * @var integer $asAge public property
     */
    public $asAge;

    /**
     * The IPs host domain
     * @required
     * @var string $hostDomain public property
     */
    public $hostDomain;

    /**
     * The domain of the VPN provider (may be empty if the VPN domain is not detectable)
     * @required
     * @var string $vpnDomain public property
     */
    public $vpnDomain;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $valid               Initialization value for $this->valid
     * @param string  $country             Initialization value for $this->country
     * @param string  $providerType        Initialization value for $this->providerType
     * @param string  $countryCode         Initialization value for $this->countryCode
     * @param string  $hostname            Initialization value for $this->hostname
     * @param string  $providerDomain      Initialization value for $this->providerDomain
     * @param string  $city                Initialization value for $this->city
     * @param string  $providerWebsite     Initialization value for $this->providerWebsite
     * @param string  $ip                  Initialization value for $this->ip
     * @param string  $region              Initialization value for $this->region
     * @param string  $providerDescription Initialization value for $this->providerDescription
     * @param string  $continentCode       Initialization value for $this->continentCode
     * @param bool    $isHosting           Initialization value for $this->isHosting
     * @param bool    $isIsp               Initialization value for $this->isIsp
     * @param string  $countryCode3        Initialization value for $this->countryCode3
     * @param string  $currencyCode        Initialization value for $this->currencyCode
     * @param bool    $isVpn               Initialization value for $this->isVpn
     * @param bool    $isProxy             Initialization value for $this->isProxy
     * @param string  $asn                 Initialization value for $this->asn
     * @param string  $asCidr              Initialization value for $this->asCidr
     * @param string  $asCountryCode       Initialization value for $this->asCountryCode
     * @param string  $asCountryCode3      Initialization value for $this->asCountryCode3
     * @param array   $asDomains           Initialization value for $this->asDomains
     * @param string  $asDescription       Initialization value for $this->asDescription
     * @param integer $asAge               Initialization value for $this->asAge
     * @param string  $hostDomain          Initialization value for $this->hostDomain
     * @param string  $vpnDomain           Initialization value for $this->vpnDomain
     */
    public function __construct()
    {
        if (27 == func_num_args()) {
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
            $this->countryCode3        = func_get_arg(14);
            $this->currencyCode        = func_get_arg(15);
            $this->isVpn               = func_get_arg(16);
            $this->isProxy             = func_get_arg(17);
            $this->asn                 = func_get_arg(18);
            $this->asCidr              = func_get_arg(19);
            $this->asCountryCode       = func_get_arg(20);
            $this->asCountryCode3      = func_get_arg(21);
            $this->asDomains           = func_get_arg(22);
            $this->asDescription       = func_get_arg(23);
            $this->asAge               = func_get_arg(24);
            $this->hostDomain          = func_get_arg(25);
            $this->vpnDomain           = func_get_arg(26);
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
        $json['countryCode3']        = $this->countryCode3;
        $json['currencyCode']        = $this->currencyCode;
        $json['isVpn']               = $this->isVpn;
        $json['isProxy']             = $this->isProxy;
        $json['asn']                 = $this->asn;
        $json['asCidr']              = $this->asCidr;
        $json['asCountryCode']       = $this->asCountryCode;
        $json['asCountryCode3']      = $this->asCountryCode3;
        $json['asDomains']           = $this->asDomains;
        $json['asDescription']       = $this->asDescription;
        $json['asAge']               = $this->asAge;
        $json['hostDomain']          = $this->hostDomain;
        $json['vpnDomain']           = $this->vpnDomain;

        return $json;
    }
}
