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
class Telephony extends BaseController
{
    /**
     * @var Telephony The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return Telephony The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Connect to the global mobile cellular network and retrieve the status of a mobile device
     *
     * @param string $number       A phone number
     * @param string $countryCode  (optional) ISO 2-letter country code, assume numbers are based in this country. If
     *                             not set numbers are assumed to be in international format (with or without the
     *                             leading + sign)
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function hLRLookup(
        $number,
        $countryCode = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/hlr-lookup';

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
            'country-code' => $countryCode
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\HLRLookupResponse');
    }

    /**
     * Check if a security code from one of the verify APIs is valid
     *
     * @param integer $securityCode  The security code to verify
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function verifySecurityCode(
        $securityCode
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/verify-security-code';

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
            'output-case'   => 'camel',
            'security-code' => $securityCode
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\VerifySecurityCodeResponse');
    }

    /**
     * Send a unique security code to any mobile device via SMS
     *
     * @param string  $number        The phone number to send a verification code to
     * @param integer $codeLength    (optional) The number of digits to use in the security code (must be between 4 and
     *                               12)
     * @param integer $securityCode  (optional) ass in your own security code. This is useful if you have implemented
     *                               TOTP or similar 2FA methods. If not set then we will generate a secure random code
     *                               (only numerical security codes are currently supported)
     * @param string  $countryCode   (optional) ISO 2-letter country code, assume numbers are based in this country. If
     *                               not set numbers are assumed to be in international format (with or without the
     *                               leading + sign)
     * @param string  $languageCode  (optional) The language to send the verification code in, available languages are:
     *                               de - German, en - English, es - Spanish, fr - Fench, it - Italian, pt - Portuguese,
     *                               ru - Russian
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function sMSVerify(
        $number,
        $codeLength = 5,
        $securityCode = null,
        $countryCode = null,
        $languageCode = 'en'
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms-verify';

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
            'output-case'   => 'camel',
            'number'        => $number,
            'code-length'   => (null != $codeLength) ? $codeLength : 5,
            'security-code' => $securityCode,
            'country-code'  => $countryCode,
            'language-code' => (null != $languageCode) ? $languageCode : 'en'
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\SMSVerifyResponse');
    }

    /**
     * Make an automated call to any valid phone number and playback an audio message
     *
     * @param string $number      The phone number to call. Must be valid international format
     * @param string $audioUrl    A URL to a valid audio file. Accepted audio formats are: MP3, WAV, OGG
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function phonePlayback(
        $number,
        $audioUrl
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/phone-playback';

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
            'number'      => $number,
            'audio-url'   => $audioUrl
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\PhonePlaybackResponse');
    }

    /**
     * Make an automated call to any valid phone number and playback a unique security code
     *
     * @param string  $number         The phone number to send the verification code to
     * @param integer $codeLength     (optional) The number of digits to use in the security code (between 4 and 12)
     * @param integer $securityCode   (optional) Pass in your own security code. This is useful if you have implemented
     *                                TOTP or similar 2FA methods. If not set then we will generate a secure random
     *                                code (only numerical security codes are currently supported)
     * @param integer $playbackDelay  (optional) The delay in milliseconds between the playback of each security code
     * @param string  $countryCode    (optional) ISO 2-letter country code, assume numbers are based in this country.
     *                                If not set numbers are assumed to be in international format (with or without the
     *                                leading + sign)
     * @param string  $languageCode   (optional) The language to playback the verification code in, available languages
     *                                are: de - German, en - English, es - Spanish, fr - Fench, it - Italian, pt -
     *                                Portuguese, ru - Russian
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function phoneVerify(
        $number,
        $codeLength = 6,
        $securityCode = null,
        $playbackDelay = 800,
        $countryCode = null,
        $languageCode = 'en'
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/phone-verify';

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
            'output-case'    => 'camel',
            'number'         => $number,
            'code-length'    => (null != $codeLength) ? $codeLength : 6,
            'security-code'  => $securityCode,
            'playback-delay' => (null != $playbackDelay) ? $playbackDelay : 800,
            'country-code'   => $countryCode,
            'language-code'  => (null != $languageCode) ? $languageCode : 'en'
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\PhoneVerifyResponse');
    }
}
