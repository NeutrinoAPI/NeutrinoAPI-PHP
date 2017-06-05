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
class ECommerce extends BaseController
{
    /**
     * @var ECommerce The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ECommerce The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Perform a BIN (Bank Identification Number) or IIN (Issuer Identification Number) lookup. See: https:
     * //www.neutrinoapi.com/api/bin-lookup/
     *
     * @param string $binNumber   The BIN or IIN number (the first 6 digits of a credit card number)
     * @param string $customerIp  (optional) Pass in a customers remote IP address. The API will then determine the
     *                            country of the IP address and match it against the BIN country. This feature is
     *                            designed for fraud prevention and detection checks.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function bINLookup(
        $binNumber,
        $customerIp = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/bin-lookup';

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
            'bin-number'  => $binNumber,
            'customer-ip' => $customerIp
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\BINLookupResponse');
    }
}
