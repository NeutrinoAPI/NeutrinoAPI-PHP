<?php
/*
 * NeutrinoAPILib
 *
 * This file was automatically generated for NeutrinoAPI.com by APIMATIC BETA v2.0 on 01/07/2016
 */

namespace NeutrinoAPILib;

use InvalidArgumentException;

class APIHelper {
    /**
    * Replaces template parameters in the given url
    * @param	string	$queryBuilder    The query string builder to replace the template parameters
    * @param	array	$parameters	The parameters to replace in the url
    * @return	void */
    public static function appendUrlWithTemplateParameters(&$queryBuilder, $parameters)
    {
        //perform parameter validation
        if (is_null($queryBuilder) || !is_string($queryBuilder)) {
            throw new InvalidArgumentException('Given value for parameter "queryBuilder" is invalid.');
        }
        if (is_null($parameters)) {
            return;
        }
        //iterate and append parameters
        foreach ($parameters as $key => $value) {
            $replaceValue = '';

            //load parameter value
            if (is_null($value)) {
                $replaceValue = '';
            } elseif (is_array($value)) {
                $replaceValue = implode("/", $value);
            } else {
                $replaceValue = strval($value);
            }

            //find the template parameter and replace it with its value
            $queryBuilder = str_replace('{' . strval($key) . '}', $replaceValue, $queryBuilder);
        }
    }

    /**
    * Appends the given set of parameters to the given query string
    * @param	string	$queryBuilder	The query url string to append the parameters
    * @param	array	$parameters	The parameters to append
    * @return	void */
    public static function appendUrlWithQueryParameters(&$queryBuilder, $parameters)
    {
        //perform parameter validation
        if (is_null($queryBuilder) || !is_string($queryBuilder)) {
            throw new InvalidArgumentException('Given value for parameter "queryBuilder" is invalid.');
        }
        if (is_null($parameters)) {
            return;
        }
        //does the query string already has parameters
        $hasParams = (strrpos($queryBuilder, '?') > 0);

        //iterate and append parameters
        foreach ($parameters as $key => $value) {
            //ignore null values
            if (is_null($value)) {
                continue;
            }

            //if already has parameters, use the &amp; to append new parameters
            $queryBuilder = $queryBuilder . (($hasParams) ? '&' : '?');

            //indicate that now the query has some params
            $hasParams = true;

            if(is_array($value)) {
                $queryBuilder = $queryBuilder . urldecode(http_build_query(array($key => $value)));
            } else {
                $queryBuilder = $queryBuilder . $key . '=' . $value;
            }
        }
    }

    /**
    * Validates and processes the given Url
    * @param    string	$url The given Url to process
    * @return   string	Pre-processed Url as string */
    public static function cleanUrl($url)
    {
        //perform parameter validation
        if(is_null($url) || !is_string($url)) {
            throw new InvalidArgumentException('Invalid Url.');
        }
        //ensure that the urls are absolute
        $matchCount = preg_match("#^(https?://[^/]+)#", $url, $matches);
        if ($matchCount == 0) {
            throw new InvalidArgumentException('Invalid Url format.');
        }
        //get the http protocol match
        $protocol = $matches[1];

        //remove redundant forward slashes
        $query = substr($url, strlen($protocol));
        $query = preg_replace("#//+#", "/", $query);

        //return process url
        return $protocol.$query;
    }
}