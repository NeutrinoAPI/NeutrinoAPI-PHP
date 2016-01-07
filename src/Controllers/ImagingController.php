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
class ImagingController {

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
     * Generate a QR code as a PNG image. See: https://www.neutrinoapi.com/api/qr-code/
     * @param  string          $content      Required parameter: The content to encode into the QR code (e.g. a URL or a phone number)
     * @param  string|null     $bgColor      Optional parameter: The QR code background color (you should always use a light color for this)
     * @param  string|null     $fgColor      Optional parameter: The QR code foreground color (you should always use a dark color for this)
     * @param  int|null        $height       Optional parameter: The height of the QR code (in px)
     * @param  int|null        $width        Optional parameter: The width of the QR code (in px)
     * @return binary response from the API call*/
    public function qRCode (
                $content,
                $bgColor = NULL,
                $fgColor = NULL,
                $height = NULL,
                $width = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/qr-code';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'width'    => (null != $width) ? $width : 250,
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
            'content'  => $content,
            'bg-color' => (null != $bgColor) ? $bgColor : '#ffffff',
            'fg-color' => (null != $fgColor) ? $fgColor : '#000000',
            'height'   => (null != $height) ? $height : 250
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
     * Convert HTML content into PDF documents. See: https://www.neutrinoapi.com/api/html-to-pdf/
     * @param  string          $content        Required parameter: The HTML content. This can be either a URL to load HTML from or an actual HTML content string
     * @param  int|null        $htmlWidth      Optional parameter: The width (in px) to render the HTML document at
     * @param  int|null        $margin         Optional parameter: The PDF document margin (in mm)
     * @param  string|null     $title          Optional parameter: The PDF document title
     * @return binary response from the API call*/
    public function hTMLToPDF (
                $content,
                $htmlWidth = NULL,
                $margin = NULL,
                $title = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/html-to-pdf';

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
            'content'    => $content,
            'html-width' => (null != $htmlWidth) ? $htmlWidth : 1024,
            'margin'     => (null != $margin) ? $margin : 10,
            'title'      => $title
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
     * Resize an image and output as either JPEG or PNG. See: https://www.neutrinoapi.com/api/image-resize/
     * @param  int             $height        Required parameter: Height to resize to (in px)
     * @param  string          $imageUrl      Required parameter: The URL to the source image
     * @param  int             $width         Required parameter: Width to resize to (in px)
     * @param  string|null     $format        Optional parameter: The output image format, can be either png or jpg
     * @return binary response from the API call*/
    public function imageResize (
                $height,
                $imageUrl,
                $width,
                $format = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/image-resize';

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
            'height'    => $height,
            'image-url' => $imageUrl,
            'width'     => $width,
            'format'    => (null != $format) ? $format : 'png'
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
     * Watermark one image with another image. See: https://www.neutrinoapi.com/api/image-watermark/
     * @param  string          $imageUrl          Required parameter: The URL to the source image
     * @param  string          $watermarkUrl      Required parameter: The URL to the watermark image
     * @param  string|null     $format            Optional parameter: The output image format, can be either png or jpg
     * @param  int|null        $height            Optional parameter: If set resize the resulting image to this height (preserving aspect ratio)
     * @param  int|null        $opacity           Optional parameter: The opacity of the watermark (0 to 100)
     * @param  string|null     $position          Optional parameter: The position of the watermark image, possible values are: center, top-left, top-center, top-right, bottom-left, bottom-center, bottom-right
     * @param  int|null        $width             Optional parameter: If set resize the resulting image to this width (preserving aspect ratio)
     * @return binary response from the API call*/
    public function imageWatermark (
                $imageUrl,
                $watermarkUrl,
                $format = NULL,
                $height = NULL,
                $opacity = NULL,
                $position = NULL,
                $width = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/image-watermark';

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
            'image-url'     => $imageUrl,
            'watermark-url' => $watermarkUrl,
            'format'        => (null != $format) ? $format : 'png',
            'height'        => $height,
            'opacity'       => (null != $opacity) ? $opacity : 50,
            'position'      => (null != $position) ? $position : 'center',
            'width'         => $width
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