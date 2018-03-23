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
class GeocodeAddressResponse implements JsonSerializable
{
    /**
     * The number of possible matching locations found
     * @required
     * @var integer $found public property
     */
    public $found;

    /**
     * Array of matching location objects
     * @required
     * @var \NeutrinoAPILib\Models\Location[] $locations public property
     */
    public $locations;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $found     Initialization value for $this->found
     * @param array   $locations Initialization value for $this->locations
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->found     = func_get_arg(0);
            $this->locations = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['found']     = $this->found;
        $json['locations'] = $this->locations;

        return $json;
    }
}
