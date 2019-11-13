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
class IPBlocklistResponse implements JsonSerializable
{
    /**
     * The IP address
     * @required
     * @var string $ip public property
     */
    public $ip;

    /**
     * IP is hosting a malicious bot or is part of a botnet. Includes brute-force crackers
     * @required
     * @var bool $isBot public property
     */
    public $isBot;

    /**
     * IP is hosting an exploit finding bot or is running exploit scanning software
     * @required
     * @var bool $isExploitBot public property
     */
    public $isExploitBot;

    /**
     * IP is involved in distributing or is running malware
     * @required
     * @var bool $isMalware public property
     */
    public $isMalware;

    /**
     * IP is running a hostile web spider / web crawler
     * @required
     * @var bool $isSpider public property
     */
    public $isSpider;

    /**
     * IP has been flagged as an attack source on DShield (dshield.org)
     * @required
     * @var bool $isDshield public property
     */
    public $isDshield;

    /**
     * The number of blocklists the IP is listed on
     * @required
     * @var integer $listCount public property
     */
    public $listCount;

    /**
     * IP has been detected as an anonymous web proxy or anonymous HTTP proxy
     * @required
     * @var bool $isProxy public property
     */
    public $isProxy;

    /**
     * IP is part of a hijacked netblock or a netblock controlled by a criminal organization
     * @required
     * @var bool $isHijacked public property
     */
    public $isHijacked;

    /**
     * IP is a Tor node or running a Tor related service
     * @required
     * @var bool $isTor public property
     */
    public $isTor;

    /**
     * IP is involved in distributing or is running spyware
     * @required
     * @var bool $isSpyware public property
     */
    public $isSpyware;

    /**
     * IP address is hosting a spam bot, comment spamming or any other spamming type software
     * @required
     * @var bool $isSpamBot public property
     */
    public $isSpamBot;

    /**
     * Is this IP on a blocklist
     * @required
     * @var bool $isListed public property
     */
    public $isListed;

    /**
     * IP belongs to a VPN provider. This field is only kept for backward compatibility, for VPN detection
     * use the <a href="https://www.neutrinoapi.com/api/ip-probe/">IP Probe</a> API
     * @required
     * @var bool $isVpn public property
     */
    public $isVpn;

    /**
     * The last time this IP was seen on a blocklist (in Unix time or 0 if not listed recently)
     * @required
     * @var integer $lastSeen public property
     */
    public $lastSeen;

    /**
     * An array of strings indicating which blocklists this IP is listed on (empty if not listed)
     * @required
     * @var array $blocklists public property
     */
    public $blocklists;

    /**
     * An array of objects containing details on which sensors were used to detect this IP
     * @required
     * @var array $sensors public property
     */
    public $sensors;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $ip           Initialization value for $this->ip
     * @param bool    $isBot        Initialization value for $this->isBot
     * @param bool    $isExploitBot Initialization value for $this->isExploitBot
     * @param bool    $isMalware    Initialization value for $this->isMalware
     * @param bool    $isSpider     Initialization value for $this->isSpider
     * @param bool    $isDshield    Initialization value for $this->isDshield
     * @param integer $listCount    Initialization value for $this->listCount
     * @param bool    $isProxy      Initialization value for $this->isProxy
     * @param bool    $isHijacked   Initialization value for $this->isHijacked
     * @param bool    $isTor        Initialization value for $this->isTor
     * @param bool    $isSpyware    Initialization value for $this->isSpyware
     * @param bool    $isSpamBot    Initialization value for $this->isSpamBot
     * @param bool    $isListed     Initialization value for $this->isListed
     * @param bool    $isVpn        Initialization value for $this->isVpn
     * @param integer $lastSeen     Initialization value for $this->lastSeen
     * @param array   $blocklists   Initialization value for $this->blocklists
     * @param array   $sensors      Initialization value for $this->sensors
     */
    public function __construct()
    {
        if (17 == func_num_args()) {
            $this->ip           = func_get_arg(0);
            $this->isBot        = func_get_arg(1);
            $this->isExploitBot = func_get_arg(2);
            $this->isMalware    = func_get_arg(3);
            $this->isSpider     = func_get_arg(4);
            $this->isDshield    = func_get_arg(5);
            $this->listCount    = func_get_arg(6);
            $this->isProxy      = func_get_arg(7);
            $this->isHijacked   = func_get_arg(8);
            $this->isTor        = func_get_arg(9);
            $this->isSpyware    = func_get_arg(10);
            $this->isSpamBot    = func_get_arg(11);
            $this->isListed     = func_get_arg(12);
            $this->isVpn        = func_get_arg(13);
            $this->lastSeen     = func_get_arg(14);
            $this->blocklists   = func_get_arg(15);
            $this->sensors      = func_get_arg(16);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ip']           = $this->ip;
        $json['isBot']        = $this->isBot;
        $json['isExploitBot'] = $this->isExploitBot;
        $json['isMalware']    = $this->isMalware;
        $json['isSpider']     = $this->isSpider;
        $json['isDshield']    = $this->isDshield;
        $json['listCount']    = $this->listCount;
        $json['isProxy']      = $this->isProxy;
        $json['isHijacked']   = $this->isHijacked;
        $json['isTor']        = $this->isTor;
        $json['isSpyware']    = $this->isSpyware;
        $json['isSpamBot']    = $this->isSpamBot;
        $json['isListed']     = $this->isListed;
        $json['isVpn']        = $this->isVpn;
        $json['lastSeen']     = $this->lastSeen;
        $json['blocklists']   = $this->blocklists;
        $json['sensors']      = $this->sensors;

        return $json;
    }
}
