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
class BINLookupResponse implements JsonSerializable
{
    /**
     * The full country name of the issuer
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * The city of the customers IP (if detectable)
     * @required
     * @var string $ipCity public property
     */
    public $ipCity;

    /**
     * True if the customers IP country matches the BIN country
     * @required
     * @var bool $ipMatchesBin public property
     */
    public $ipMatchesBin;

    /**
     * The card type, will always be one of: DEBIT, CREDIT, CHARGE CARD
     * @required
     * @var string $cardType public property
     */
    public $cardType;

    /**
     * The card category. There are many different card categories the most common card categories are:
     * CLASSIC, BUSINESS, CORPORATE, PLATINUM, PREPAID
     * @required
     * @var string $cardCategory public property
     */
    public $cardCategory;

    /**
     * The ISO 2-letter country code of the customers IP
     * @required
     * @var string $ipCountryCode public property
     */
    public $ipCountryCode;

    /**
     * The country of the customers IP
     * @required
     * @var string $ipCountry public property
     */
    public $ipCountry;

    /**
     * The card issuer
     * @required
     * @var string $issuer public property
     */
    public $issuer;

    /**
     * True if the customers IP is listed on one of our blocklists, see the <a href="http://www.neutrinoapi.
     * com/api/ip-blocklist/">IP Blocklist API</a>
     * @required
     * @var bool $ipBlocklisted public property
     */
    public $ipBlocklisted;

    /**
     * Is this a valid BIN or IIN number
     * @required
     * @var bool $valid public property
     */
    public $valid;

    /**
     * An array of strings indicating which blocklists this IP is listed on
     * @required
     * @var array $ipBlocklists public property
     */
    public $ipBlocklists;

    /**
     * The card issuers website
     * @required
     * @var string $issuerWebsite public property
     */
    public $issuerWebsite;

    /**
     * The ISO 2-letter country code of the issuer
     * @required
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * The region of the customers IP (if detectable)
     * @required
     * @var string $ipRegion public property
     */
    public $ipRegion;

    /**
     * The card brand (e.g. Visa or Mastercard)
     * @required
     * @var string $cardBrand public property
     */
    public $cardBrand;

    /**
     * The card issuers phone number
     * @required
     * @var string $issuerPhone public property
     */
    public $issuerPhone;

    /**
     * The ISO 3-letter country code of the issuer
     * @required
     * @var string $countryCode3 public property
     */
    public $countryCode3;

    /**
     * ISO 4217 currency code associated with the country of the issuer
     * @required
     * @var string $currencyCode public property
     */
    public $currencyCode;

    /**
     * The ISO 3-letter country code of the customers IP
     * @required
     * @var string $ipCountryCode3 public property
     */
    public $ipCountryCode3;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $country        Initialization value for $this->country
     * @param string $ipCity         Initialization value for $this->ipCity
     * @param bool   $ipMatchesBin   Initialization value for $this->ipMatchesBin
     * @param string $cardType       Initialization value for $this->cardType
     * @param string $cardCategory   Initialization value for $this->cardCategory
     * @param string $ipCountryCode  Initialization value for $this->ipCountryCode
     * @param string $ipCountry      Initialization value for $this->ipCountry
     * @param string $issuer         Initialization value for $this->issuer
     * @param bool   $ipBlocklisted  Initialization value for $this->ipBlocklisted
     * @param bool   $valid          Initialization value for $this->valid
     * @param array  $ipBlocklists   Initialization value for $this->ipBlocklists
     * @param string $issuerWebsite  Initialization value for $this->issuerWebsite
     * @param string $countryCode    Initialization value for $this->countryCode
     * @param string $ipRegion       Initialization value for $this->ipRegion
     * @param string $cardBrand      Initialization value for $this->cardBrand
     * @param string $issuerPhone    Initialization value for $this->issuerPhone
     * @param string $countryCode3   Initialization value for $this->countryCode3
     * @param string $currencyCode   Initialization value for $this->currencyCode
     * @param string $ipCountryCode3 Initialization value for $this->ipCountryCode3
     */
    public function __construct()
    {
        if (19 == func_num_args()) {
            $this->country        = func_get_arg(0);
            $this->ipCity         = func_get_arg(1);
            $this->ipMatchesBin   = func_get_arg(2);
            $this->cardType       = func_get_arg(3);
            $this->cardCategory   = func_get_arg(4);
            $this->ipCountryCode  = func_get_arg(5);
            $this->ipCountry      = func_get_arg(6);
            $this->issuer         = func_get_arg(7);
            $this->ipBlocklisted  = func_get_arg(8);
            $this->valid          = func_get_arg(9);
            $this->ipBlocklists   = func_get_arg(10);
            $this->issuerWebsite  = func_get_arg(11);
            $this->countryCode    = func_get_arg(12);
            $this->ipRegion       = func_get_arg(13);
            $this->cardBrand      = func_get_arg(14);
            $this->issuerPhone    = func_get_arg(15);
            $this->countryCode3   = func_get_arg(16);
            $this->currencyCode   = func_get_arg(17);
            $this->ipCountryCode3 = func_get_arg(18);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['country']        = $this->country;
        $json['ipCity']         = $this->ipCity;
        $json['ipMatchesBin']   = $this->ipMatchesBin;
        $json['cardType']       = $this->cardType;
        $json['cardCategory']   = $this->cardCategory;
        $json['ipCountryCode']  = $this->ipCountryCode;
        $json['ipCountry']      = $this->ipCountry;
        $json['issuer']         = $this->issuer;
        $json['ipBlocklisted']  = $this->ipBlocklisted;
        $json['valid']          = $this->valid;
        $json['ipBlocklists']   = $this->ipBlocklists;
        $json['issuerWebsite']  = $this->issuerWebsite;
        $json['countryCode']    = $this->countryCode;
        $json['ipRegion']       = $this->ipRegion;
        $json['cardBrand']      = $this->cardBrand;
        $json['issuerPhone']    = $this->issuerPhone;
        $json['countryCode3']   = $this->countryCode3;
        $json['currencyCode']   = $this->currencyCode;
        $json['ipCountryCode3'] = $this->ipCountryCode3;

        return $json;
    }
}
