<?php
/*
 * NeutrinoAPILib
 *
 * This file was automatically generated for NeutrinoAPI.com by APIMATIC BETA v2.0 on 01/07/2016
 */

namespace NeutrinoAPILib\Controllers;

use NeutrinoAPILib\APIException;
use NeutrinoAPILib\APIHelper;
use NeutrinoAPILib\Configuration;
use Unirest\Unirest;
class SecurityAndNetworkingController {

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
     * Parse, analyze and retrieve content from the supplied URL. See: https://www.neutrinoapi.com/api/url-info/
     * @param  bool       $fetchContent      Required parameter: If this URL responds with html, text, json or xml then return the response. This option is useful if you want to perform further processing on the URL content
     * @param  string     $url               Required parameter: The URL to process
     * @return mixed response from the API call*/
    public function uRLInfo (
                $fetchContent,
                $url) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/url-info';

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
            'fetch-content' => var_export($fetchContent, true),
            'output-case'   => 'camel',
            'url'           => $url
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Check the reputation of an IP address or domain against a comprehensive list of blacklists and blocklists (DNSBLs). See: https://www.neutrinoapi.com/api/host-reputation/
     * @param  string     $host            Required parameter: An IPv4 address or a domain name. If you supply a domain name it will be checked against the URI DNSBL list
     * @return mixed response from the API call*/
    public function hostReputation (
                $host) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/host-reputation';

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
            'host'        => $host,
            'output-case' => 'camel'
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * The IP Blocklist API will detect potentially malicious or dangerous IP addresses. See: https://www.neutrinoapi.com/api/ip-blocklist/
     * @param  string     $ip              Required parameter: An IPv4 address
     * @return mixed response from the API call*/
    public function iPBlocklist (
                $ip) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ip-blocklist';

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
            'ip'          => $ip,
            'output-case' => 'camel'
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
}