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
class URLInfoResponse implements JsonSerializable
{
    /**
     * The HTTP status message assoicated with the status code
     * @required
     * @var integer $httpStatusMessage public property
     */
    public $httpStatusMessage;

    /**
     * The servers IP geo-location: full region name (if detectable)
     * @required
     * @var string $serverRegion public property
     */
    public $serverRegion;

    /**
     * A key-value map of the URL query paramaters
     * @required
     * @var array $query public property
     */
    public $query;

    /**
     * The name of the server software hosting this URL
     * @required
     * @var string $serverName public property
     */
    public $serverName;

    /**
     * The URL port
     * @required
     * @var integer $urlPort public property
     */
    public $urlPort;

    /**
     * The servers IP geo-location: full country name
     * @required
     * @var string $serverCountry public property
     */
    public $serverCountry;

    /**
     * Is this URL actually serving real content
     * @required
     * @var bool $real public property
     */
    public $real;

    /**
     * The servers IP geo-location: full city name (if detectable)
     * @required
     * @var string $serverCity public property
     */
    public $serverCity;

    /**
     * The URL path
     * @required
     * @var string $urlPath public property
     */
    public $urlPath;

    /**
     * The fully qualified URL. This may be different to the URL requested if http-redirect is true
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * Is this a valid well-formed URL
     * @required
     * @var bool $valid public property
     */
    public $valid;

    /**
     * The servers hostname (PTR record)
     * @required
     * @var string $serverHostname public property
     */
    public $serverHostname;

    /**
     * The time taken to load the URL content in seconds
     * @required
     * @var integer $loadTime public property
     */
    public $loadTime;

    /**
     * True if this URL responded with an HTTP OK (200) status
     * @required
     * @var bool $httpOk public property
     */
    public $httpOk;

    /**
     * The size of the URL content in bytes
     * @required
     * @var integer $contentSize public property
     */
    public $contentSize;

    /**
     * The HTTP status code this URL responded with. An HTTP status of 0 indicates a network level issue
     * @required
     * @var integer $httpStatus public property
     */
    public $httpStatus;

    /**
     * The servers IP geo-location: ISO 2-letter country code
     * @required
     * @var string $serverCountryCode public property
     */
    public $serverCountryCode;

    /**
     * The encoding format the URL uses
     * @required
     * @var string $contentEncoding public property
     */
    public $contentEncoding;

    /**
     * The IP address of the server hosting this URL
     * @required
     * @var string $serverIp public property
     */
    public $serverIp;

    /**
     * The URL protocol, usually http or https
     * @required
     * @var string $urlProtocol public property
     */
    public $urlProtocol;

    /**
     * The content-type this URL serves
     * @required
     * @var string $contentType public property
     */
    public $contentType;

    /**
     * True if this URL responded with an HTTP redirect
     * @required
     * @var bool $httpRedirect public property
     */
    public $httpRedirect;

    /**
     * The actual content this URL responded with. Only set if the 'fetch-content' option was used
     * @required
     * @var string $content public property
     */
    public $content;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $httpStatusMessage Initialization value for $this->httpStatusMessage
     * @param string  $serverRegion      Initialization value for $this->serverRegion
     * @param array   $query             Initialization value for $this->query
     * @param string  $serverName        Initialization value for $this->serverName
     * @param integer $urlPort           Initialization value for $this->urlPort
     * @param string  $serverCountry     Initialization value for $this->serverCountry
     * @param bool    $real              Initialization value for $this->real
     * @param string  $serverCity        Initialization value for $this->serverCity
     * @param string  $urlPath           Initialization value for $this->urlPath
     * @param string  $url               Initialization value for $this->url
     * @param bool    $valid             Initialization value for $this->valid
     * @param string  $serverHostname    Initialization value for $this->serverHostname
     * @param integer $loadTime          Initialization value for $this->loadTime
     * @param bool    $httpOk            Initialization value for $this->httpOk
     * @param integer $contentSize       Initialization value for $this->contentSize
     * @param integer $httpStatus        Initialization value for $this->httpStatus
     * @param string  $serverCountryCode Initialization value for $this->serverCountryCode
     * @param string  $contentEncoding   Initialization value for $this->contentEncoding
     * @param string  $serverIp          Initialization value for $this->serverIp
     * @param string  $urlProtocol       Initialization value for $this->urlProtocol
     * @param string  $contentType       Initialization value for $this->contentType
     * @param bool    $httpRedirect      Initialization value for $this->httpRedirect
     * @param string  $content           Initialization value for $this->content
     */
    public function __construct()
    {
        if (23 == func_num_args()) {
            $this->httpStatusMessage = func_get_arg(0);
            $this->serverRegion      = func_get_arg(1);
            $this->query             = func_get_arg(2);
            $this->serverName        = func_get_arg(3);
            $this->urlPort           = func_get_arg(4);
            $this->serverCountry     = func_get_arg(5);
            $this->real              = func_get_arg(6);
            $this->serverCity        = func_get_arg(7);
            $this->urlPath           = func_get_arg(8);
            $this->url               = func_get_arg(9);
            $this->valid             = func_get_arg(10);
            $this->serverHostname    = func_get_arg(11);
            $this->loadTime          = func_get_arg(12);
            $this->httpOk            = func_get_arg(13);
            $this->contentSize       = func_get_arg(14);
            $this->httpStatus        = func_get_arg(15);
            $this->serverCountryCode = func_get_arg(16);
            $this->contentEncoding   = func_get_arg(17);
            $this->serverIp          = func_get_arg(18);
            $this->urlProtocol       = func_get_arg(19);
            $this->contentType       = func_get_arg(20);
            $this->httpRedirect      = func_get_arg(21);
            $this->content           = func_get_arg(22);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['httpStatusMessage'] = $this->httpStatusMessage;
        $json['serverRegion']      = $this->serverRegion;
        $json['query']             = $this->query;
        $json['serverName']        = $this->serverName;
        $json['urlPort']           = $this->urlPort;
        $json['serverCountry']     = $this->serverCountry;
        $json['real']              = $this->real;
        $json['serverCity']        = $this->serverCity;
        $json['urlPath']           = $this->urlPath;
        $json['url']               = $this->url;
        $json['valid']             = $this->valid;
        $json['serverHostname']    = $this->serverHostname;
        $json['loadTime']          = $this->loadTime;
        $json['httpOk']            = $this->httpOk;
        $json['contentSize']       = $this->contentSize;
        $json['httpStatus']        = $this->httpStatus;
        $json['serverCountryCode'] = $this->serverCountryCode;
        $json['contentEncoding']   = $this->contentEncoding;
        $json['serverIp']          = $this->serverIp;
        $json['urlProtocol']       = $this->urlProtocol;
        $json['contentType']       = $this->contentType;
        $json['httpRedirect']      = $this->httpRedirect;
        $json['content']           = $this->content;

        return $json;
    }
}
