<?php
/*
 * NeutrinoAPI
 *
 * This file was automatically generated for NeutrinoAPI by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace NeutrinoAPILib\Controllers;

use NeutrinoAPILib\APIException;
use NeutrinoAPILib\APIHelper;
use NeutrinoAPILib\Configuration;
use NeutrinoAPILib\Models;
use NeutrinoAPILib\Exceptions;
use NeutrinoAPILib\Http\HttpRequest;
use NeutrinoAPILib\Http\HttpResponse;
use NeutrinoAPILib\Http\HttpMethod;
use NeutrinoAPILib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class DataTools extends BaseController
{
    /**
     * @var DataTools The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return DataTools The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * A powerful unit and currency conversion tool
     *
     * @param string $fromValue   The value to convert from
     * @param string $fromType    The type of the value to convert from
     * @param string $toType      The type to convert to
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function convert(
        $fromValue,
        $fromType,
        $toType
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/convert';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case' => 'camel',
            'from-value'  => $fromValue,
            'from-type'   => $fromType,
            'to-type'     => $toType
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\ConvertResponse');
    }

    /**
     * Detect bad words, swear words and profanity in a given text
     *
     * @param string $content          The text content to check. This can be either a URL to load content from or an
     *                                 actual content string
     * @param string $censorCharacter  (optional) The character to use to censor out the bad words found
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function badWordFilter(
        $content,
        $censorCharacter = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/bad-word-filter';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => 'APIMATIC 2.0',
            'Accept'         => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case'      => 'camel',
            'content'          => $content,
            'censor-character' => $censorCharacter
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\BadWordFilterResponse');
    }

    /**
     * Parse, validate and clean an email address
     *
     * @param string $email       The email address
     * @param bool   $fixTypos    (optional) Automatically attempt to fix typos in the address
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function emailValidate(
        $email,
        $fixTypos = false
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email-validate';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case' => 'camel',
            'email'       => $email,
            'fix-typos'   => (null != $fixTypos) ? var_export($fixTypos, true) : false
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\EmailValidateResponse');
    }

    /**
     * Clean and sanitize untrusted HTML
     *
     * @param string $content     The HTML content. This can be either a URL to load HTML from or an actual HTML
     *                            content string
     * @param string $outputType  The level of sanitization, possible values are: plain-text, simple-text, basic-html,
     *                            basic-html-with-images, advanced-html
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function hTMLClean(
        $content,
        $outputType
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/html-clean';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'content'     => $content,
            'output-type' => $outputType
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Code highlight will take raw source code and convert into nicely formatted HTML with syntax and
     * keyword highlighting
     *
     * @param string $content           The source content. This can be either a URL to load from or an actual content
     *                                  string
     * @param string $type              The code type. See the API docs for all supported types
     * @param bool   $addKeywordLinks   (optional) Add links on source code keywords to the relevant language
     *                                  documentation
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function codeHighlight(
        $content,
        $type,
        $addKeywordLinks = false
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/code-highlight';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'content'           => $content,
            'type'              => $type,
            'add-keyword-links' => (null != $addKeywordLinks) ? var_export($addKeywordLinks, true) : false
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Parse, validate and get detailed user-agent information from a user agent string
     *
     * @param string $userAgent   A user-agent string
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function userAgentInfo(
        $userAgent
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-agent-info';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case' => 'camel',
            'user-agent'  => $userAgent
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\UserAgentInfoResponse');
    }

    /**
     * Extract specific HTML tag contents or attributes from complex HTML or XHTML content
     *
     * @param string $content     The HTML content. This can be either a URL to load HTML from or an actual HTML
     *                            content string
     * @param string $tag         The HTML tag(s) to extract data from. This can just be a simple tag name like 'img'
     *                            OR a CSS/jQuery style selector
     * @param string $attribute   (optional) If set, then extract data from the specified tag attribute. If not set,
     *                            then data will be extracted from the tags inner content
     * @param string $baseUrl     (optional) The base URL to replace into realive links
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function hTMLExtract(
        $content,
        $tag,
        $attribute = null,
        $baseUrl = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/html-extract-tags';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case' => 'camel',
            'content'     => $content,
            'tag'         => $tag,
            'attribute'   => $attribute,
            'base-url'    => $baseUrl
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\HTMLExtractResponse');
    }

    /**
     * Parse, validate and get location information about a phone number
     *
     * @param string $number       The phone number
     * @param string $countryCode  (optional) ISO 2-letter country code, assume numbers are based in this country. If
     *                             not set numbers are assumed to be in international format (with or without the
     *                             leading + sign)
     * @param string $ip           (optional) Pass in a users IP address and we will assume numbers are based in the
     *                             country of the IP address
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function phoneValidate(
        $number,
        $countryCode = null,
        $ip = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/phone-validate';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case'  => 'camel',
            'number'       => $number,
            'country-code' => $countryCode,
            'ip'           => $ip
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\PhoneValidateResponse');
    }
}
