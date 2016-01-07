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
class ECommerceController {

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
     * Perform a BIN (Bank Identification Number) or IIN (Issuer Identification Number) lookup. See: https://www.neutrinoapi.com/api/bin-lookup/
     * @param  string          $binNumber       Required parameter: The BIN or IIN number (the first 6 digits of a credit card number)
     * @param  string|null     $customerIp      Optional parameter: Pass in a customers remote IP address. The API will then determine the country of the IP address and match it against the BIN country. This feature is designed for fraud prevention and detection checks.
     * @return mixed response from the API call*/
    public function bINLookup (
                $binNumber,
                $customerIp = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/bin-lookup';

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
            'bin-number'  => $binNumber,
            'output-case' => 'camel',
            'customer-ip' => $customerIp
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