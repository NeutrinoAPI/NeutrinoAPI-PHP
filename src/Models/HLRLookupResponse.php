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
class HLRLookupResponse implements JsonSerializable
{
    /**
     * True if this a valid phone number
     * @required
     * @var bool $numberValid public property
     */
    public $numberValid;

    /**
     * The numbers international calling code
     * @required
     * @var integer $internationalCallingCode public property
     */
    public $internationalCallingCode;

    /**
     * The mobile MNC number
     * @required
     * @var string $mnc public property
     */
    public $mnc;

    /**
     * The number type, possible values are:<br/><ul><li>mobile</li><li>fixed-line</li><li>premium-
     * rate</li><li>toll-free</li><li>voip</li><li>unknown</li></ul>
     * @required
     * @var string $numberType public property
     */
    public $numberType;

    /**
     * Was the HLR lookup successful. If true then this is a working and registered cell-phone or mobile
     * device (SMS and phone calls will be delivered)
     * @required
     * @var bool $hlrValid public property
     */
    public $hlrValid;

    /**
     * The HLR lookup status, possible values are:<br/><ul><li>ok - the HLR lookup was successful and the
     * device is connected</li><li>absent - the number was once registered but the device has been switched
     * off or out of network range for some time</li><li>unknown - the number is not known by the mobile
     * network</li><li>invalid  - the number is not a valid mobile MSISDN number</li><li>fixed-line - the
     * number is a registered fixed-line not mobile</li><li>voip - the number has been detected as a VOIP
     * line</li><li>failed - the HLR lookup has failed, we could not determine the real status of this
     * number</li></ul>
     * @required
     * @var string $hlrStatus public property
     */
    public $hlrStatus;

    /**
     * If the number has been ported, the ported to carrier name
     * @required
     * @var string $portedNetwork public property
     */
    public $portedNetwork;

    /**
     * The mobile IMSI number
     * @required
     * @var string $imsi public property
     */
    public $imsi;

    /**
     * The mobile MCC number
     * @required
     * @var string $mcc public property
     */
    public $mcc;

    /**
     * The number represented in full international format
     * @required
     * @var string $internationalNumber public property
     */
    public $internationalNumber;

    /**
     * The number represented in local dialing format
     * @required
     * @var string $localNumber public property
     */
    public $localNumber;

    /**
     * The number location as an ISO 2-letter country code
     * @required
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * Has this number been ported to another network
     * @required
     * @var bool $isPorted public property
     */
    public $isPorted;

    /**
     * The mobile MSIN number
     * @required
     * @var string $msin public property
     */
    public $msin;

    /**
     * The number location. Could be a city, region or country depending on the type of number
     * @required
     * @var string $location public property
     */
    public $location;

    /**
     * The origin mobile carrier name
     * @required
     * @var string $originNetwork public property
     */
    public $originNetwork;

    /**
     * True if this is a mobile number (only true with 100% certainty, if the number type is unknown this
     * value will be false)
     * @required
     * @var bool $isMobile public property
     */
    public $isMobile;

    /**
     * Is this number currently roaming from its origin country
     * @required
     * @var bool $isRoaming public property
     */
    public $isRoaming;

    /**
     * The phone number country
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * The number location as an ISO 3-letter country code
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
     * If the number is currently roaming, the ISO 2-letter country code of the roaming in country
     * @required
     * @var string $roamingCountryCode public property
     */
    public $roamingCountryCode;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $numberValid              Initialization value for $this->numberValid
     * @param integer $internationalCallingCode Initialization value for $this->internationalCallingCode
     * @param string  $mnc                      Initialization value for $this->mnc
     * @param string  $numberType               Initialization value for $this->numberType
     * @param bool    $hlrValid                 Initialization value for $this->hlrValid
     * @param string  $hlrStatus                Initialization value for $this->hlrStatus
     * @param string  $portedNetwork            Initialization value for $this->portedNetwork
     * @param string  $imsi                     Initialization value for $this->imsi
     * @param string  $mcc                      Initialization value for $this->mcc
     * @param string  $internationalNumber      Initialization value for $this->internationalNumber
     * @param string  $localNumber              Initialization value for $this->localNumber
     * @param string  $countryCode              Initialization value for $this->countryCode
     * @param bool    $isPorted                 Initialization value for $this->isPorted
     * @param string  $msin                     Initialization value for $this->msin
     * @param string  $location                 Initialization value for $this->location
     * @param string  $originNetwork            Initialization value for $this->originNetwork
     * @param bool    $isMobile                 Initialization value for $this->isMobile
     * @param bool    $isRoaming                Initialization value for $this->isRoaming
     * @param string  $country                  Initialization value for $this->country
     * @param string  $countryCode3             Initialization value for $this->countryCode3
     * @param string  $currencyCode             Initialization value for $this->currencyCode
     * @param string  $roamingCountryCode       Initialization value for $this->roamingCountryCode
     */
    public function __construct()
    {
        if (22 == func_num_args()) {
            $this->numberValid              = func_get_arg(0);
            $this->internationalCallingCode = func_get_arg(1);
            $this->mnc                      = func_get_arg(2);
            $this->numberType               = func_get_arg(3);
            $this->hlrValid                 = func_get_arg(4);
            $this->hlrStatus                = func_get_arg(5);
            $this->portedNetwork            = func_get_arg(6);
            $this->imsi                     = func_get_arg(7);
            $this->mcc                      = func_get_arg(8);
            $this->internationalNumber      = func_get_arg(9);
            $this->localNumber              = func_get_arg(10);
            $this->countryCode              = func_get_arg(11);
            $this->isPorted                 = func_get_arg(12);
            $this->msin                     = func_get_arg(13);
            $this->location                 = func_get_arg(14);
            $this->originNetwork            = func_get_arg(15);
            $this->isMobile                 = func_get_arg(16);
            $this->isRoaming                = func_get_arg(17);
            $this->country                  = func_get_arg(18);
            $this->countryCode3             = func_get_arg(19);
            $this->currencyCode             = func_get_arg(20);
            $this->roamingCountryCode       = func_get_arg(21);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['numberValid']              = $this->numberValid;
        $json['internationalCallingCode'] = $this->internationalCallingCode;
        $json['mnc']                      = $this->mnc;
        $json['numberType']               = $this->numberType;
        $json['hlrValid']                 = $this->hlrValid;
        $json['hlrStatus']                = $this->hlrStatus;
        $json['portedNetwork']            = $this->portedNetwork;
        $json['imsi']                     = $this->imsi;
        $json['mcc']                      = $this->mcc;
        $json['internationalNumber']      = $this->internationalNumber;
        $json['localNumber']              = $this->localNumber;
        $json['countryCode']              = $this->countryCode;
        $json['isPorted']                 = $this->isPorted;
        $json['msin']                     = $this->msin;
        $json['location']                 = $this->location;
        $json['originNetwork']            = $this->originNetwork;
        $json['isMobile']                 = $this->isMobile;
        $json['isRoaming']                = $this->isRoaming;
        $json['country']                  = $this->country;
        $json['countryCode3']             = $this->countryCode3;
        $json['currencyCode']             = $this->currencyCode;
        $json['roamingCountryCode']       = $this->roamingCountryCode;

        return $json;
    }
}
