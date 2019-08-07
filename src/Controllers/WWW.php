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
class WWW extends BaseController
{
    /**
     * @var WWW The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return WWW The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Parse, analyze and retrieve content from the supplied URL. See: https://www.neutrinoapi.com/api/url-
     * info/
     *
     * @param string  $url                       The URL to probe
     * @param bool    $fetchContent              (optional) If this URL responds with html, text, json or xml then
     *                                           return the response. This option is useful if you want to perform
     *                                           further processing on the URL content (e.g. with the HTML Extract or
     *                                           HTML Clean APIs)
     * @param bool    $ignoreCertificateErrors   (optional) Ignore any TLS/SSL certificate errors and load the URL
     *                                           anyway
     * @param integer $timeout                   (optional) Timeout in seconds. Give up if still trying to load the URL
     *                                           after this number of seconds
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function uRLInfo(
        $url,
        $fetchContent = false,
        $ignoreCertificateErrors = false,
        $timeout = 20
    ) {

        //prepare query string for API call
        $_queryBuilder = '/url-info';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'              => BaseController::USER_AGENT,
            'Accept'                  => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case'               => 'camel',
            'url'                       => $url,
            'fetch-content'             => (null != $fetchContent) ? var_export($fetchContent, true) : false,
            'ignore-certificate-errors' => (null != $ignoreCertificateErrors) ? var_export($ignoreCertificateErrors, true) : false,
            'timeout'                   => (null != $timeout) ? $timeout : 20
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\URLInfoResponse');
    }

    /**
     * Clean and sanitize untrusted HTML. See: https://www.neutrinoapi.com/api/html-clean/
     *
     * @param string $content     The HTML content. This can be either a URL to load HTML from or an actual HTML
     *                            content string
     * @param string $outputType  The level of sanitization, possible values are: <b>plain-text</b>: reduce the content
     *                            to plain text only (no HTML tags at all) <b>simple-text</b>: allow only very basic
     *                            text formatting tags like b, em, i, strong, u <b>basic-html</b>: allow advanced text
     *                            formatting and hyper links <b>basic-html-with-images</b>: same as basic html but also
     *                            allows image tags <b>advanced-html</b>: same as basic html with images but also
     *                            allows many more common HTML tags like table, ul, dl, pre
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function hTMLClean(
        $content,
        $outputType
    ) {

        //prepare query string for API call
        $_queryBuilder = '/html-clean';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT
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
     * Browser bot can extract content, interact with keyboard and mouse events, and execute JavaScript on
     * a website. See: https://www.neutrinoapi.com/api/browser-bot/
     *
     * @param string  $url                       The URL to load
     * @param integer $timeout                   (optional) Timeout in seconds. Give up if still trying to load the
     *                                           page after this number of seconds
     * @param integer $delay                     (optional) Delay in seconds to wait before capturing any page data,
     *                                           executing selectors or JavaScript
     * @param string  $selector                  (optional) Extract content from the page DOM using this selector.
     *                                           Commonly known as a CSS selector, you can find a good reference <a
     *                                           href="https://www.w3schools.com/cssref/css_selectors.asp">here</a>
     * @param array   $exec                      (optional) Execute JavaScript on the page. Each array element should
     *                                           contain a valid JavaScript statement in string form. If a statement
     *                                           returns any kind of value it will be returned in the 'exec-results'
     *                                           response. For your convenience you can also use the following special
     *                                           shortcut functions: <div> sleep(seconds); Just wait/sleep for the
     *                                           specified number of seconds. click('selector'); Click on the first
     *                                           element matching the given selector. focus('selector'); Focus on the
     *                                           first element matching the given selector. keys('characters'); Send
     *                                           the specified keyboard characters. Use click() or focus() first to
     *                                           send keys to a specific element. enter(); Send the Enter key. tab();
     *                                           Send the Tab key. </div> Example: <div> [ "click('#button-id')",
     *                                           "sleep(1)", "click('.field-class')", "keys('1234')", "enter()" ]
     *                                           </div>
     * @param string  $userAgent                 (optional) Override the browsers default user-agent string with this
     *                                           one
     * @param bool    $ignoreCertificateErrors   (optional) Ignore any TLS/SSL certificate errors and load the page
     *                                           anyway
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function browserBot(
        $url,
        $timeout = 30,
        $delay = 3,
        $selector = null,
        $exec = '[]',
        $userAgent = null,
        $ignoreCertificateErrors = false
    ) {

        //prepare query string for API call
        $_queryBuilder = '/browser-bot';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user-id' => Configuration::$userId,
            'api-key' => Configuration::$apiKey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'              => BaseController::USER_AGENT,
            'Accept'                  => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'output-case'               => 'camel',
            'url'                       => $url,
            'timeout'                   => (null != $timeout) ? $timeout : 30,
            'delay'                     => (null != $delay) ? $delay : 3,
            'selector'                  => $selector,
            'exec'                    => array_values($exec),
            'user-agent'                => $userAgent,
            'ignore-certificate-errors' => (null != $ignoreCertificateErrors) ? var_export($ignoreCertificateErrors, true) : false
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

        return $mapper->mapClass($response->body, 'NeutrinoAPILib\\Models\\BrowserBotResponse');
    }
}
