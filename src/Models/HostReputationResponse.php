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
class HostReputationResponse implements JsonSerializable
{
    /**
     * Is this host blacklisted
     * @required
     * @var bool $isListed public property
     */
    public $isListed;

    /**
     * An array of objects for each DNSBL checked
     * @required
     * @var \NeutrinoAPILib\Models\Blacklist[] $lists public property
     */
    public $lists;

    /**
     * The number of DNSBL's the host is listed on
     * @required
     * @var integer $listCount public property
     */
    public $listCount;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $isListed  Initialization value for $this->isListed
     * @param array   $lists     Initialization value for $this->lists
     * @param integer $listCount Initialization value for $this->listCount
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->isListed  = func_get_arg(0);
            $this->lists     = func_get_arg(1);
            $this->listCount = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['isListed']  = $this->isListed;
        $json['lists']     = $this->lists;
        $json['listCount'] = $this->listCount;

        return $json;
    }
}
