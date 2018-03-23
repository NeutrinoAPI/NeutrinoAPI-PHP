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
class UserAgentInfoResponse implements JsonSerializable
{
    /**
     * Mobile device screen width (in px)
     * @required
     * @var integer $mobileScreenWidth public property
     */
    public $mobileScreenWidth;

    /**
     * Mobile device brand
     * @required
     * @var string $mobileBrand public property
     */
    public $mobileBrand;

    /**
     * Mobile device model
     * @required
     * @var string $mobileModel public property
     */
    public $mobileModel;

    /**
     * Producer or manufacturer
     * @required
     * @var string $producer public property
     */
    public $producer;

    /**
     * Browser software name
     * @required
     * @var string $browserName public property
     */
    public $browserName;

    /**
     * Mobile device screen height (in px)
     * @required
     * @var integer $mobileScreenHeight public property
     */
    public $mobileScreenHeight;

    /**
     * True if this is a mobile user-agent
     * @required
     * @var bool $isMobile public property
     */
    public $isMobile;

    /**
     * The user-agent type, possible values are: desktop-browser, email-client, feed-reader, software-
     * library, media-player, mobile-browser, robot, unknown
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Software version
     * @required
     * @var string $version public property
     */
    public $version;

    /**
     * Operating system
     * @required
     * @var string $operatingSystem public property
     */
    public $operatingSystem;

    /**
     * Mobile device browser
     * @required
     * @var string $mobileBrowser public property
     */
    public $mobileBrowser;

    /**
     * True if this is an Android based mobile user agent
     * @required
     * @var bool $isAndroid public property
     */
    public $isAndroid;

    /**
     * True if this is an iOS based mobile user agent
     * @required
     * @var bool $isIos public property
     */
    public $isIos;

    /**
     * The operating system family name, this is the OS name without any version information
     * @required
     * @var string $operatingSystemFamily public property
     */
    public $operatingSystemFamily;

    /**
     * The operating system version number (if detectable)
     * @required
     * @var string $operatingSystemVersion public property
     */
    public $operatingSystemVersion;

    /**
     * The browser engine name
     * @required
     * @var string $engine public property
     */
    public $engine;

    /**
     * The browser engine version (if detectable)
     * @required
     * @var string $engineVersion public property
     */
    public $engineVersion;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $mobileScreenWidth      Initialization value for $this->mobileScreenWidth
     * @param string  $mobileBrand            Initialization value for $this->mobileBrand
     * @param string  $mobileModel            Initialization value for $this->mobileModel
     * @param string  $producer               Initialization value for $this->producer
     * @param string  $browserName            Initialization value for $this->browserName
     * @param integer $mobileScreenHeight     Initialization value for $this->mobileScreenHeight
     * @param bool    $isMobile               Initialization value for $this->isMobile
     * @param string  $type                   Initialization value for $this->type
     * @param string  $version                Initialization value for $this->version
     * @param string  $operatingSystem        Initialization value for $this->operatingSystem
     * @param string  $mobileBrowser          Initialization value for $this->mobileBrowser
     * @param bool    $isAndroid              Initialization value for $this->isAndroid
     * @param bool    $isIos                  Initialization value for $this->isIos
     * @param string  $operatingSystemFamily  Initialization value for $this->operatingSystemFamily
     * @param string  $operatingSystemVersion Initialization value for $this->operatingSystemVersion
     * @param string  $engine                 Initialization value for $this->engine
     * @param string  $engineVersion          Initialization value for $this->engineVersion
     */
    public function __construct()
    {
        if (17 == func_num_args()) {
            $this->mobileScreenWidth      = func_get_arg(0);
            $this->mobileBrand            = func_get_arg(1);
            $this->mobileModel            = func_get_arg(2);
            $this->producer               = func_get_arg(3);
            $this->browserName            = func_get_arg(4);
            $this->mobileScreenHeight     = func_get_arg(5);
            $this->isMobile               = func_get_arg(6);
            $this->type                   = func_get_arg(7);
            $this->version                = func_get_arg(8);
            $this->operatingSystem        = func_get_arg(9);
            $this->mobileBrowser          = func_get_arg(10);
            $this->isAndroid              = func_get_arg(11);
            $this->isIos                  = func_get_arg(12);
            $this->operatingSystemFamily  = func_get_arg(13);
            $this->operatingSystemVersion = func_get_arg(14);
            $this->engine                 = func_get_arg(15);
            $this->engineVersion          = func_get_arg(16);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['mobileScreenWidth']      = $this->mobileScreenWidth;
        $json['mobileBrand']            = $this->mobileBrand;
        $json['mobileModel']            = $this->mobileModel;
        $json['producer']               = $this->producer;
        $json['browserName']            = $this->browserName;
        $json['mobileScreenHeight']     = $this->mobileScreenHeight;
        $json['isMobile']               = $this->isMobile;
        $json['type']                   = $this->type;
        $json['version']                = $this->version;
        $json['operatingSystem']        = $this->operatingSystem;
        $json['mobileBrowser']          = $this->mobileBrowser;
        $json['isAndroid']              = $this->isAndroid;
        $json['isIos']                  = $this->isIos;
        $json['operatingSystemFamily']  = $this->operatingSystemFamily;
        $json['operatingSystemVersion'] = $this->operatingSystemVersion;
        $json['engine']                 = $this->engine;
        $json['engineVersion']          = $this->engineVersion;

        return $json;
    }
}
