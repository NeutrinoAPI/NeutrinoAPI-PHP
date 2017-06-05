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
class HTMLExtractResponse implements JsonSerializable
{
    /**
     * The total number of values extracted
     * @required
     * @var integer $total public property
     */
    public $total;

    /**
     * Array of extracted values
     * @required
     * @var array $values public property
     */
    public $values;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $total  Initialization value for $this->total
     * @param array   $values Initialization value for $this->values
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->total  = func_get_arg(0);
            $this->values = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['total']  = $this->total;
        $json['values'] = $this->values;

        return $json;
    }
}
