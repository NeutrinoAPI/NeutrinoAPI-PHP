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
class DataToolsController {

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
     * Parse, validate and get location information about a phone number. See: https://www.neutrinoapi.com/api/phone-validate/
     * @param  string          $number           Required parameter: The phone number
     * @param  string|null     $countryCode      Optional parameter: ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign)
     * @return mixed response from the API call*/
    public function phoneValidate (
                $number,
                $countryCode = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/phone-validate';

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
            'number'       => $number,
            'output-case'  => 'camel',
            'country-code' => $countryCode
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
     * Parse, validate and get detailed user-agent information from a user-agent string. See: https://www.neutrinoapi.com/api/user-agent-info/
     * @param  string     $userAgent       Required parameter: A user-agent string
     * @return mixed response from the API call*/
    public function userAgentInfo (
                $userAgent) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/user-agent-info';

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
            'output-case' => 'camel',
            'user-agent'  => $userAgent
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
     * Code highlight will take raw source code and convert into nicely formatted HTML with syntax and keyword highlighting. See: https://www.neutrinoapi.com/api/code-highlight/
     * @param  string        $content               Required parameter: The source content. This can be either a URL to load from or an actual content string
     * @param  string        $type                  Required parameter: The code type. See the API docs for all supported types
     * @param  bool|null     $addKeywordLinks       Optional parameter: Add links on source code keywords to the relevant language documentation
     * @return binary response from the API call*/
    public function codeHighlight (
                $content,
                $type,
                $addKeywordLinks = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/code-highlight';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'user-id' => $this->userId,
            'api-key' => $this->apiKey,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'      => 'APIMATIC 2.0'
        );

        //prepare parameters
        $parameters = array (
            'content'           => $content,
            'type'              => $type,
            'add-keyword-links' => (null != $addKeywordLinks) ? var_export($addKeywordLinks, true) : false
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
     * Detect bad words, swear words and profanity in a given text. See: https://www.neutrinoapi.com/api/bad-word-filter/
     * @param  string          $content              Required parameter: The text content to check. This can be either a URL to load content from or an actual content string
     * @param  string|null     $censorCharacter      Optional parameter: The character to use to censor out the bad words found
     * @return mixed response from the API call*/
    public function badWordFilter (
                $content,
                $censorCharacter = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/bad-word-filter';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'user-id' => $this->userId,
            'api-key' => $this->apiKey,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'     => 'APIMATIC 2.0',
            'Accept'         => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'content'          => $content,
            'output-case'      => 'camel',
            'censor-character' => $censorCharacter
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
     * A powerful unit and currency conversion tool. See: https://www.neutrinoapi.com/api/convert/
     * @param  string     $fromType        Required parameter: The type of the value to convert from
     * @param  string     $fromValue       Required parameter: The value to convert from
     * @param  string     $toType          Required parameter: The type to convert to
     * @return mixed response from the API call*/
    public function convert (
                $fromType,
                $fromValue,
                $toType) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/convert';

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
            'from-type'   => $fromType,
            'from-value'  => $fromValue,
            'output-case' => 'camel',
            'to-type'     => $toType
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
     * Parse, validate and clean an email address. See: https://www.neutrinoapi.com/api/email-validate/
     * @param  string        $email           Required parameter: The email address
     * @param  bool|null     $fixTypos        Optional parameter: Automatically attempt to fix typos in the address
     * @return mixed response from the API call*/
    public function emailValidate (
                $email,
                $fixTypos = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/email-validate';

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
            'email'       => $email,
            'output-case' => 'camel',
            'fix-typos'   => (null != $fixTypos) ? var_export($fixTypos, true) : false
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
     * Clean and sanitize untrusted HTML. See: https://www.neutrinoapi.com/api/html-clean/
     * @param  string     $content         Required parameter: The HTML content. This can be either a URL to load HTML from or an actual HTML content string
     * @param  string     $outputType      Required parameter: The level of sanitization, possible values are: plain-text, simple-text, basic-html, basic-html-with-images, advanced-html
     * @return binary response from the API call*/
    public function hTMLClean (
                $content,
                $outputType) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/html-clean';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'user-id' => $this->userId,
            'api-key' => $this->apiKey,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $parameters = array (
            'content'     => $content,
            'output-type' => $outputType
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
     * Extract HTML tag contents or attributes from complex HTML or XHTML content. See: https://www.neutrinoapi.com/api/html-extract-tags/
     * @param  string          $content         Required parameter: The HTML content. This can be either a URL to load HTML from or an actual HTML content string
     * @param  string          $tag             Required parameter: The HTML tag(s) to extract data from. This can just be a simple tag name like 'img' OR a CSS/jQuery style selector
     * @param  string|null     $attribute       Optional parameter: If set, then extract data from the specified tag attribute. If not set, then data will be extracted from the tags inner content
     * @param  string|null     $baseUrl         Optional parameter: The base URL to replace into realive links
     * @return mixed response from the API call*/
    public function hTMLExtract (
                $content,
                $tag,
                $attribute = NULL,
                $baseUrl = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/html-extract-tags';

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
            'content'     => $content,
            'output-case' => 'camel',
            'tag'         => $tag,
            'attribute'   => $attribute,
            'base-url'    => $baseUrl
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