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
class VerifySecurityCodeResponse implements JsonSerializable
{
    /**
     * True if the code is valid
     * @required
     * @var bool $verified public property
     */
    public $verified;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool $verified Initialization value for $this->verified
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->verified = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['verified'] = $this->verified;

        return $json;
    }
}
