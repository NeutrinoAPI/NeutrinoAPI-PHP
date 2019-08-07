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
     * The international calling code
     * @required
     * @var integer $internationalCallingCode public property
     */
    public $internationalCallingCode;

    /**
     * The phone number country as an ISO 2-letter country code
     * @required
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * The phone number location. Could be a city, region or country depending on the type of number
     * @required
     * @var string $location public property
     */
    public $location;

    /**
     * True if this is a mobile number. If the number type is unknown this value will be false, use HLR
     * lookup instead
     * @required
     * @var bool $isMobile public property
     */
    public $isMobile;

    /**
     * The predicted number type. Note: type detection is not possible in some countries which have no
     * predictable prefix pattern (you can use the HLR Lookup API in these cases) Possible values are: <ul>
     * <li>mobile</li> <li>fixed-line</li> <li>premium-rate</li> <li>toll-free</li> <li>voip</li>
     * <li>unknown (use HLR lookup)</li> </ul>
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * The number represented in full international format (E.164)
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
     * The phone number country
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * The phone number country as an ISO 3-letter country code
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
     * Constructor to set initial or default values of member properties
     * @param bool    $valid                    Initialization value for $this->valid
     * @param integer $internationalCallingCode Initialization value for $this->internationalCallingCode
     * @param string  $countryCode              Initialization value for $this->countryCode
     * @param string  $location                 Initialization value for $this->location
     * @param bool    $isMobile                 Initialization value for $this->isMobile
     * @param string  $type                     Initialization value for $this->type
     * @param string  $internationalNumber      Initialization value for $this->internationalNumber
     * @param string  $localNumber              Initialization value for $this->localNumber
     * @param string  $country                  Initialization value for $this->country
     * @param string  $countryCode3             Initialization value for $this->countryCode3
     * @param string  $currencyCode             Initialization value for $this->currencyCode
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->valid                    = func_get_arg(0);
            $this->internationalCallingCode = func_get_arg(1);
            $this->countryCode              = func_get_arg(2);
            $this->location                 = func_get_arg(3);
            $this->isMobile                 = func_get_arg(4);
            $this->type                     = func_get_arg(5);
            $this->internationalNumber      = func_get_arg(6);
            $this->localNumber              = func_get_arg(7);
            $this->country                  = func_get_arg(8);
            $this->countryCode3             = func_get_arg(9);
            $this->currencyCode             = func_get_arg(10);
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
        $json['countryCode3']             = $this->countryCode3;
        $json['currencyCode']             = $this->currencyCode;

        return $json;
    }
}
