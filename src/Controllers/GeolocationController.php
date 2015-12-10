<?php
/*
 * NeutrinoAPILib
 *
 * This file was automatically generated for NeutrinoAPI.com by APIMATIC BETA v2.0 on 12/10/2015
 */

namespace NeutrinoAPILib\Controllers;

use NeutrinoAPILib\APIException;
use NeutrinoAPILib\APIHelper;
use NeutrinoAPILib\Configuration;
use Unirest\Unirest;
class GeolocationController {

    /* private fields for configuration */

    /**
     * Your user ID 
     * @var string
     */
    private $userId;

    /**
     * Your API key 
     * @var string
     */
    private $apiKey;

    /**
     * Constructor with authentication and configuration parameters
     */
    function __construct($userId, $apiKey)
    {
        $this->userId = $userId ? $userId : Configuration::$userId;
        $this->apiKey = $apiKey ? $apiKey : Configuration::$apiKey;
    }

    /**
     * Get location information about an IP address and do reverse DNS (PTR) lookups. See: https://www.neutrinoapi.com/api/ip-info/
     * @param  string        $ip                 Required parameter: The IP address
     * @param  bool|null     $reverseLookup      Optional parameter: Do reverse DNS (PTR) lookup. This option can add extra delay to the request so only use it if you need it
     * @return mixed response from the API call*/
    public function createIPInfo (
                $ip,
                $reverseLookup = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ip-info';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'user-id' => $this->userId,
            'api-key' => $this->apiKey,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'ip'             => $ip,
            'output-case'    => 'camel',
            'reverse-lookup' => (null != $reverseLookup) ? var_export($reverseLookup, true) : false
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Geocode an address or partial address. See: https://www.neutrinoapi.com/api/geocode-address/
     * @param  string          $address           Required parameter: The address or partial address to try and locate
     * @param  string|null     $countryCode       Optional parameter: The ISO 2-letter country code to be biased towards (default is no country bias)
     * @param  string|null     $languageCode      Optional parameter: The language to display results in
     * @return mixed response from the API call*/
    public function createGeocodeAddress (
                $address,
                $countryCode = NULL,
                $languageCode = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/geocode-address';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'user-id' => $this->userId,
            'api-key' => $this->apiKey,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'address'       => $address,
            'output-case'   => 'camel',
            'country-code'  => $countryCode,
            'language-code' => (null != $languageCode) ? $languageCode : 'en'
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Reverse geocoding is the process of taking a coordinate (latitude and longitude) and mapping this to a real world address or location. See: https://www.neutrinoapi.com/api/geocode-reverse/
     * @param  double          $latitude          Required parameter: The location latitude
     * @param  double          $longitude         Required parameter: The location longitude
     * @param  string|null     $languageCode      Optional parameter: The language to display results in
     * @return mixed response from the API call*/
    public function createGeocodeReverse (
                $latitude,
                $longitude,
                $languageCode = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/geocode-reverse';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'user-id' => $this->userId,
            'api-key' => $this->apiKey,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'latitude'      => $latitude,
            'longitude'     => $longitude,
            'output-case'   => 'camel',
            'language-code' => (null != $languageCode) ? $languageCode : 'en'
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
}