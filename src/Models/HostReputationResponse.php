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
     * An array of objects for each DNSBL checked, with the following keys: <ul> <li>is-listed - true if
     * listed, false if not</li> <li>list-name - the name of the DNSBL</li> <li>list-host - the
     * domain/hostname of the DNSBL</li> <li>list-rating - the list rating [1-3] with 1 being the best
     * rating and 3 the lowest rating</li> <li>txt-record - the TXT record returned for this listing (if
     * listed)</li> <li>return-code - the specific return code for this listing (if listed)</li>
     * <li>response-time - the DNSBL server response time in milliseconds</li> </ul>
     * @required
     * @var \NeutrinoAPILib\Models\Blacklist[] $lists public property
     */
    public $lists;

    /**
     * The number of DNSBLs the host is listed on
     * @required
     * @var integer $listCount public property
     */
    public $listCount;

    /**
     * The IP address or host name
     * @required
     * @var string $host public property
     */
    public $host;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $isListed  Initialization value for $this->isListed
     * @param array   $lists     Initialization value for $this->lists
     * @param integer $listCount Initialization value for $this->listCount
     * @param string  $host      Initialization value for $this->host
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->isListed  = func_get_arg(0);
            $this->lists     = func_get_arg(1);
            $this->listCount = func_get_arg(2);
            $this->host      = func_get_arg(3);
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
        $json['host']      = $this->host;

        return $json;
    }
}
