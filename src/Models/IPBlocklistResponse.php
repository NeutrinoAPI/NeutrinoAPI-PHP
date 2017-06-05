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
     * IP is hosting a malicious bot or is part of a botnet
     * @required
     * @var bool $isBot public property
     */
    public $isBot;

    /**
     * IP is hosting an exploit finding bot or exploit scanning software
     * @required
     * @var bool $isExploitBot public property
     */
    public $isExploitBot;

    /**
     * IP is involved in distributing malware
     * @required
     * @var bool $isMalware public property
     */
    public $isMalware;

    /**
     * IP is a hostile spider or crawler
     * @required
     * @var bool $isSpider public property
     */
    public $isSpider;

    /**
     * IP has been flagged on DShield (dshield.org)
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
     * hijacked netblocks or netblocks controlled by criminal organizations
     * @required
     * @var bool $isHijacked public property
     */
    public $isHijacked;

    /**
     * IP is coming from a Tor node
     * @required
     * @var bool $isTor public property
     */
    public $isTor;

    /**
     * IP is being used by spyware, malware, botnets or for other malicious activities
     * @required
     * @var bool $isSpyware public property
     */
    public $isSpyware;

    /**
     * IP address is hosting a spam bot, comment spamming or other spamming software
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
     * IP has been detected as coming from a VPN hosting provider
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
     * Constructor to set initial or default values of member properties
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
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->isBot        = func_get_arg(0);
            $this->isExploitBot = func_get_arg(1);
            $this->isMalware    = func_get_arg(2);
            $this->isSpider     = func_get_arg(3);
            $this->isDshield    = func_get_arg(4);
            $this->listCount    = func_get_arg(5);
            $this->isProxy      = func_get_arg(6);
            $this->isHijacked   = func_get_arg(7);
            $this->isTor        = func_get_arg(8);
            $this->isSpyware    = func_get_arg(9);
            $this->isSpamBot    = func_get_arg(10);
            $this->isListed     = func_get_arg(11);
            $this->isVpn        = func_get_arg(12);
            $this->lastSeen     = func_get_arg(13);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
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

        return $json;
    }
}
