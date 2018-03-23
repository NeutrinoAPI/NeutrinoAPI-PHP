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
class PhoneVerifyResponse implements JsonSerializable
{
    /**
     * Is this a valid phone number
     * @required
     * @var bool $numberValid public property
     */
    public $numberValid;

    /**
     * True if the call is being made now
     * @required
     * @var bool $calling public property
     */
    public $calling;

    /**
     * The security code generated, you can save this code to perform your own verification or you can use
     * the Verify Security Code API
     * @required
     * @var string $securityCode public property
     */
    public $securityCode;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $numberValid  Initialization value for $this->numberValid
     * @param bool   $calling      Initialization value for $this->calling
     * @param string $securityCode Initialization value for $this->securityCode
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->numberValid  = func_get_arg(0);
            $this->calling      = func_get_arg(1);
            $this->securityCode = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['numberValid']  = $this->numberValid;
        $json['calling']      = $this->calling;
        $json['securityCode'] = $this->securityCode;

        return $json;
    }
}
