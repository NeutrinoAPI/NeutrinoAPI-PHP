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
     * Is this a valid phone number (mobile or otherwise)
     * @required
     * @var bool $numberValid public property
     */
    public $numberValid;

    /**
     * Numbers international calling code
     * @required
     * @var string $internationalCallingCode public property
     */
    public $internationalCallingCode;

    /**
     * The mobile MNC number (only set if HLR lookup valid)
     * @required
     * @var string $mnc public property
     */
    public $mnc;

    /**
     * The number type, possible values are: mobile, fixed-line, premium-rate, toll-free, voip, unknown
     * @required
     * @var string $numberType public property
     */
    public $numberType;

    /**
     * Was the HLR lookup successful. If true then this is a working and registered cell-phone or mobile device (SMS and phone calls will be delivered)
     * @required
     * @var bool $hlrValid public property
     */
    public $hlrValid;

    /**
     * The HLR lookup status. See API docs for specific status details
     * @required
     * @var string $hlrStatus public property
     */
    public $hlrStatus;

    /**
     * If the number has been ported, the ported to mobile carrier name (only set if HLR lookup valid)
     * @required
     * @var string $portedNetwork public property
     */
    public $portedNetwork;

    /**
     * The mobile IMSI number (only set if HLR lookup valid)
     * @required
     * @var string $imsi public property
     */
    public $imsi;

    /**
     * The mobile MCC number (only set if HLR lookup valid)
     * @required
     * @var string $mcc public property
     */
    public $mcc;

    /**
     * Number represented in international format
     * @required
     * @var string $internationalNumber public property
     */
    public $internationalNumber;

    /**
     * Number represented in local format
     * @required
     * @var string $localNumber public property
     */
    public $localNumber;

    /**
     * Number location ISO 2-letter country code
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
     * The mobile MSIN number (only set if HLR lookup valid)
     * @required
     * @var string $msin public property
     */
    public $msin;

    /**
     * Number location (could be a city, region or country)
     * @required
     * @var string $location public property
     */
    public $location;

    /**
     * The origin mobile carrier name (only set if HLR lookup valid)
     * @required
     * @var string $originNetwork public property
     */
    public $originNetwork;

    /**
     * Is this a mobile number
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
     * Constructor to set initial or default values of member properties
     * @param bool   $numberValid              Initialization value for $this->numberValid
     * @param string $internationalCallingCode Initialization value for $this->internationalCallingCode
     * @param string $mnc                      Initialization value for $this->mnc
     * @param string $numberType               Initialization value for $this->numberType
     * @param bool   $hlrValid                 Initialization value for $this->hlrValid
     * @param string $hlrStatus                Initialization value for $this->hlrStatus
     * @param string $portedNetwork            Initialization value for $this->portedNetwork
     * @param string $imsi                     Initialization value for $this->imsi
     * @param string $mcc                      Initialization value for $this->mcc
     * @param string $internationalNumber      Initialization value for $this->internationalNumber
     * @param string $localNumber              Initialization value for $this->localNumber
     * @param string $countryCode              Initialization value for $this->countryCode
     * @param bool   $isPorted                 Initialization value for $this->isPorted
     * @param string $msin                     Initialization value for $this->msin
     * @param string $location                 Initialization value for $this->location
     * @param string $originNetwork            Initialization value for $this->originNetwork
     * @param bool   $isMobile                 Initialization value for $this->isMobile
     * @param bool   $isRoaming                Initialization value for $this->isRoaming
     * @param string $country                  Initialization value for $this->country
     */
    public function __construct()
    {
        if (19 == func_num_args()) {
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

        return $json;
    }
}
