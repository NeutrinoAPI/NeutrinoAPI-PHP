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
class PhonePlaybackResponse implements JsonSerializable
{
    /**
     * True if the call is being made now
     * @required
     * @var bool $calling public property
     */
    public $calling;

    /**
     * Is this a valid phone number
     * @required
     * @maps number-valid
     * @var bool $numberValid public property
     */
    public $numberValid;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool $calling     Initialization value for $this->calling
     * @param bool $numberValid Initialization value for $this->numberValid
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->calling     = func_get_arg(0);
            $this->numberValid = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['calling']      = $this->calling;
        $json['number-valid'] = $this->numberValid;

        return $json;
    }
}
