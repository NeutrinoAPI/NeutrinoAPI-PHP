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
class Blacklist implements JsonSerializable
{
    /**
     * true if listed, false if not
     * @required
     * @var bool $isListed public property
     */
    public $isListed;

    /**
     * the domain/hostname of the DNSBL
     * @required
     * @var string $listHost public property
     */
    public $listHost;

    /**
     * the list rating [1-3] with 1 being the best rating and 3 the lowest rating
     * @required
     * @var integer $listRating public property
     */
    public $listRating;

    /**
     * the name of the DNSBL
     * @required
     * @var string $listName public property
     */
    public $listName;

    /**
     * the TXT record returned for this listing (if listed)
     * @required
     * @var string $txtRecord public property
     */
    public $txtRecord;

    /**
     * the DNSBL server response time in milliseconds
     * @required
     * @var integer $responseTime public property
     */
    public $responseTime;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $isListed     Initialization value for $this->isListed
     * @param string  $listHost     Initialization value for $this->listHost
     * @param integer $listRating   Initialization value for $this->listRating
     * @param string  $listName     Initialization value for $this->listName
     * @param string  $txtRecord    Initialization value for $this->txtRecord
     * @param integer $responseTime Initialization value for $this->responseTime
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->isListed     = func_get_arg(0);
            $this->listHost     = func_get_arg(1);
            $this->listRating   = func_get_arg(2);
            $this->listName     = func_get_arg(3);
            $this->txtRecord    = func_get_arg(4);
            $this->responseTime = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['isListed']     = $this->isListed;
        $json['listHost']     = $this->listHost;
        $json['listRating']   = $this->listRating;
        $json['listName']     = $this->listName;
        $json['txtRecord']    = $this->txtRecord;
        $json['responseTime'] = $this->responseTime;

        return $json;
    }
}
