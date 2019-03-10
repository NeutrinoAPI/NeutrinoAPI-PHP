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
class Geolocation extends BaseController
{
    /**
     * @var Geolocation The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return Geolocation The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Convert a geographic coordinate (latitude and longitude) into a real world address or location. See:
     * https://www.neutrinoapi.com/api/geocode-reverse/
     *
     * @param string $latitude      The location latitude in decimal degrees format
     * @param string $longitude     The location longitude in decimal degrees format
     * @param string $languageCode  (optional) The language to display results in, available languages are:<ul><li>de,
     *                              en, es, fr, it, pt, ru</li></ul>
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function geocodeReverse(
        $latitude,
        $longitude,
        $languageCode = 'en'
    ) {

        //prepare query string for API call
        $_queryBuilder = '/geocode-reverse';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case'   => 'camel',
            'latitude'      => $latitude,
            'longitude'     => $longitude,
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\GeocodeReverseResponse');
    }

    /**
     * Get location information about an IP address and do reverse DNS (PTR) lookups. See: https://www.
     * neutrinoapi.com/api/ip-info/
     *
     * @param string $ip             IPv4 or IPv6 address
     * @param bool   $reverseLookup  (optional) Do a reverse DNS (PTR) lookup. This option can add extra delay to the
     *                               request so only use it if you need it
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function iPInfo(
        $ip,
        $reverseLookup = false
    ) {

        //prepare query string for API call
        $_queryBuilder = '/ip-info';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case'    => 'camel',
            'ip'             => $ip,
            'reverse-lookup' => (null != $reverseLookup) ? var_export($reverseLookup, true) : false
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\IPInfoResponse');
    }

    /**
     * Geocode an address, partial address or just the name of a place. See: https://www.neutrinoapi.
     * com/api/geocode-address/
     *
     * @param string $address       The address, partial address or name of a place to try and locate
     * @param string $countryCode   (optional) The ISO 2-letter country code to be biased towards (the default is no
     *                              country bias)
     * @param string $languageCode  (optional) The language to display results in, available languages are:<ul><li>de,
     *                              en, es, fr, it, pt, ru</li></ul>
     * @param bool   $fuzzySearch   (optional) If no matches are found for the given address, start performing a
     *                              recursive fuzzy search until a geolocation is found. We use a combination of
     *                              approximate string matching and data cleansing to find possible location matches
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function geocodeAddress(
        $address,
        $countryCode = null,
        $languageCode = 'en',
        $fuzzySearch = false
    ) {

        //prepare query string for API call
        $_queryBuilder = '/geocode-address';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case'   => 'camel',
            'address'       => $address,
            'country-code'  => $countryCode,
            'language-code' => (null != $languageCode) ? $languageCode : 'en',
            'fuzzy-search'  => (null != $fuzzySearch) ? var_export($fuzzySearch, true) : false
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\GeocodeAddressResponse');
    }
}
