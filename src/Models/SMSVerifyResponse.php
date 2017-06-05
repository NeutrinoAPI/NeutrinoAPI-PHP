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
class SMSVerifyResponse implements JsonSerializable
{
    /**
     * Is this a valid phone number
     * @required
     * @var bool $numberValid public property
     */
    public $numberValid;

    /**
     * The security code generated, you can save this code to perform your own verification or you can use the Verify Security Code API
     * @required
     * @var string $securityCode public property
     */
    public $securityCode;

    /**
     * True if the SMS has been sent
     * @required
     * @var bool $sent public property
     */
    public $sent;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $numberValid  Initialization value for $this->numberValid
     * @param string $securityCode Initialization value for $this->securityCode
     * @param bool   $sent         Initialization value for $this->sent
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->numberValid  = func_get_arg(0);
            $this->securityCode = func_get_arg(1);
            $this->sent         = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['numberValid']  = $this->numberValid;
        $json['securityCode'] = $this->securityCode;
        $json['sent']         = $this->sent;

        return $json;
    }
}
