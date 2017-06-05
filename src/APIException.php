<?php
/*
 * NeutrinoAPI
 *
 * This file was automatically generated for NeutrinoAPI by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace NeutrinoAPILib;

use Exception;

/**
 * Class for exceptions when there is a network error, status code error, etc.
 */
class APIException extends Exception
{
    /**
     * Error message
     * @var string
     */
    private $errorMessage;

    /**
     * HTTP context
     * @var Http\HttpContext
     */
    private $context;
    
    /**
     * The HTTP response code from the API request
     * @param string $reason the reason for raising an exception
     * @param int $responseCode the HTTP response code from the API request
     * @param string $responseBody the HTTP response body from the API request
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context->getResponse()->getStatusCode());
        $this->context = $context;
        $this->errorMessage = $reason;

        if (get_class() != 'APIException') {
            $this->unbox();
        }
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
    }

    /**
     * The HTTP context from the API request
     * @return Http\HttpContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The HTTP response code from the API request
     * @return int
     */
    public function getResponseCode()
    {
        return $this->context->getResponse()->getStatusCode();
    }

    /**
     * The HTTP response body from the API request
     * @return mixed
     */
    public function getResponseBody()
    {
        return $this->context->getResponse()->getRawBody();
    }

    /**
     * The reason for raising an exception
     * @return string
     */
    public function getReason()
    {
        return $this->message;
    }
}
