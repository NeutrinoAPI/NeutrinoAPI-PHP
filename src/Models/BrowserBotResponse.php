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
class BrowserBotResponse implements JsonSerializable
{
    /**
     * The page URL
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * The complete raw, decompressed and decoded page content. Usually will be either HTML, JSON or XML
     * @required
     * @var string $content public property
     */
    public $content;

    /**
     * The document MIME type
     * @required
     * @var string $mimeType public property
     */
    public $mimeType;

    /**
     * The document title
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * True if an error has occurred loading the page. Check the 'error-message' field for details
     * @required
     * @var bool $isError public property
     */
    public $isError;

    /**
     * True if a timeout occurred while loading the page. You can set the timeout with the request
     * parameter 'timeout'
     * @required
     * @var bool $isTimeout public property
     */
    public $isTimeout;

    /**
     * Contains the error message if an error has occurred ('is-error' will be true)
     * @required
     * @var string $errorMessage public property
     */
    public $errorMessage;

    /**
     * The HTTP status code the URL returned
     * @required
     * @var integer $httpStatusCode public property
     */
    public $httpStatusCode;

    /**
     * The HTTP status message the URL returned
     * @required
     * @var string $httpStatusMessage public property
     */
    public $httpStatusMessage;

    /**
     * True if the HTTP status is OK (200)
     * @required
     * @var bool $isHttpOk public property
     */
    public $isHttpOk;

    /**
     * True if the URL responded with an HTTP redirect
     * @required
     * @var bool $isHttpRedirect public property
     */
    public $isHttpRedirect;

    /**
     * The redirected URL if the URL responded with an HTTP redirect
     * @required
     * @var string $httpRedirectUrl public property
     */
    public $httpRedirectUrl;

    /**
     * The HTTP servers IP address
     * @required
     * @var string $serverIp public property
     */
    public $serverIp;

    /**
     * The number of seconds taken to load the page (from initial request until DOM ready)
     * @required
     * @var integer $loadTime public property
     */
    public $loadTime;

    /**
     * Map containing all the HTTP response headers the URL responded with
     * @required
     * @var array $responseHeaders public property
     */
    public $responseHeaders;

    /**
     * True if the page is secured using TLS/SSL
     * @required
     * @var bool $isSecure public property
     */
    public $isSecure;

    /**
     * Map containing details of the TLS/SSL setup
     * @required
     * @var array $securityDetails public property
     */
    public $securityDetails;

    /**
     * Array containing all the elements matching the supplied selector.<br/>Each element object will
     * contain the text content, HTML content and all current element attributes
     * @required
     * @var array $elements public property
     */
    public $elements;

    /**
     * If you executed any JavaScript this array holds the results as objects
     * @required
     * @var array $execResults public property
     */
    public $execResults;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $url               Initialization value for $this->url
     * @param string  $content           Initialization value for $this->content
     * @param string  $mimeType          Initialization value for $this->mimeType
     * @param string  $title             Initialization value for $this->title
     * @param bool    $isError           Initialization value for $this->isError
     * @param bool    $isTimeout         Initialization value for $this->isTimeout
     * @param string  $errorMessage      Initialization value for $this->errorMessage
     * @param integer $httpStatusCode    Initialization value for $this->httpStatusCode
     * @param string  $httpStatusMessage Initialization value for $this->httpStatusMessage
     * @param bool    $isHttpOk          Initialization value for $this->isHttpOk
     * @param bool    $isHttpRedirect    Initialization value for $this->isHttpRedirect
     * @param string  $httpRedirectUrl   Initialization value for $this->httpRedirectUrl
     * @param string  $serverIp          Initialization value for $this->serverIp
     * @param integer $loadTime          Initialization value for $this->loadTime
     * @param array   $responseHeaders   Initialization value for $this->responseHeaders
     * @param bool    $isSecure          Initialization value for $this->isSecure
     * @param array   $securityDetails   Initialization value for $this->securityDetails
     * @param array   $elements          Initialization value for $this->elements
     * @param array   $execResults       Initialization value for $this->execResults
     */
    public function __construct()
    {
        if (19 == func_num_args()) {
            $this->url               = func_get_arg(0);
            $this->content           = func_get_arg(1);
            $this->mimeType          = func_get_arg(2);
            $this->title             = func_get_arg(3);
            $this->isError           = func_get_arg(4);
            $this->isTimeout         = func_get_arg(5);
            $this->errorMessage      = func_get_arg(6);
            $this->httpStatusCode    = func_get_arg(7);
            $this->httpStatusMessage = func_get_arg(8);
            $this->isHttpOk          = func_get_arg(9);
            $this->isHttpRedirect    = func_get_arg(10);
            $this->httpRedirectUrl   = func_get_arg(11);
            $this->serverIp          = func_get_arg(12);
            $this->loadTime          = func_get_arg(13);
            $this->responseHeaders   = func_get_arg(14);
            $this->isSecure          = func_get_arg(15);
            $this->securityDetails   = func_get_arg(16);
            $this->elements          = func_get_arg(17);
            $this->execResults       = func_get_arg(18);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['url']               = $this->url;
        $json['content']           = $this->content;
        $json['mimeType']          = $this->mimeType;
        $json['title']             = $this->title;
        $json['isError']           = $this->isError;
        $json['isTimeout']         = $this->isTimeout;
        $json['errorMessage']      = $this->errorMessage;
        $json['httpStatusCode']    = $this->httpStatusCode;
        $json['httpStatusMessage'] = $this->httpStatusMessage;
        $json['isHttpOk']          = $this->isHttpOk;
        $json['isHttpRedirect']    = $this->isHttpRedirect;
        $json['httpRedirectUrl']   = $this->httpRedirectUrl;
        $json['serverIp']          = $this->serverIp;
        $json['loadTime']          = $this->loadTime;
        $json['responseHeaders']   = $this->responseHeaders;
        $json['isSecure']          = $this->isSecure;
        $json['securityDetails']   = $this->securityDetails;
        $json['elements']          = $this->elements;
        $json['execResults']       = $this->execResults;

        return $json;
    }
}
