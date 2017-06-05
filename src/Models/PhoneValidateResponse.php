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
class PhoneValidateResponse implements JsonSerializable
{
    /**
     * Is this a valid phone number
     * @required
     * @var bool $valid public property
     */
    public $valid;

    /**
     * Numbers international calling code
     * @required
     * @var string $internationalCallingCode public property
     */
    public $internationalCallingCode;

    /**
     * Number location ISO 2-letter country code
     * @required
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * Number location (could be a city, region or country)
     * @required
     * @var string $location public property
     */
    public $location;

    /**
     * Is this a mobile number
     * @required
     * @var bool $isMobile public property
     */
    public $isMobile;

    /**
     * The number type, possible values are: mobile, fixed-line, premium-rate, toll-free, voip, unknown
     * @required
     * @var string $type public property
     */
    public $type;

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
     * The phone number country
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $valid                    Initialization value for $this->valid
     * @param string $internationalCallingCode Initialization value for $this->internationalCallingCode
     * @param string $countryCode              Initialization value for $this->countryCode
     * @param string $location                 Initialization value for $this->location
     * @param bool   $isMobile                 Initialization value for $this->isMobile
     * @param string $type                     Initialization value for $this->type
     * @param string $internationalNumber      Initialization value for $this->internationalNumber
     * @param string $localNumber              Initialization value for $this->localNumber
     * @param string $country                  Initialization value for $this->country
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->valid                    = func_get_arg(0);
            $this->internationalCallingCode = func_get_arg(1);
            $this->countryCode              = func_get_arg(2);
            $this->location                 = func_get_arg(3);
            $this->isMobile                 = func_get_arg(4);
            $this->type                     = func_get_arg(5);
            $this->internationalNumber      = func_get_arg(6);
            $this->localNumber              = func_get_arg(7);
            $this->country                  = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['valid']                    = $this->valid;
        $json['internationalCallingCode'] = $this->internationalCallingCode;
        $json['countryCode']              = $this->countryCode;
        $json['location']                 = $this->location;
        $json['isMobile']                 = $this->isMobile;
        $json['type']                     = $this->type;
        $json['internationalNumber']      = $this->internationalNumber;
        $json['localNumber']              = $this->localNumber;
        $json['country']                  = $this->country;

        return $json;
    }
}
