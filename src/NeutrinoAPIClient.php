<?php
/*
 * NeutrinoAPI
 *
 * This file was automatically generated for NeutrinoAPI by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace NeutrinoAPILib;

use NeutrinoAPILib\Controllers;

/**
 * NeutrinoAPI client class
 */
class NeutrinoAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $userId = null,
        $apiKey = null
    ) {
        Configuration::$userId = $userId ? $userId : Configuration::$userId;
        Configuration::$apiKey = $apiKey ? $apiKey : Configuration::$apiKey;
    }
    /**
     * Singleton access to Imaging controller
     * @return Controllers\Imaging The *Singleton* instance
     */
    public function getImaging()
    {
        return Controllers\Imaging::getInstance();
    }
    /**
     * Singleton access to Telephony controller
     * @return Controllers\Telephony The *Singleton* instance
     */
    public function getTelephony()
    {
        return Controllers\Telephony::getInstance();
    }
    /**
     * Singleton access to DataTools controller
     * @return Controllers\DataTools The *Singleton* instance
     */
    public function getDataTools()
    {
        return Controllers\DataTools::getInstance();
    }
    /**
     * Singleton access to SecurityAndNetworking controller
     * @return Controllers\SecurityAndNetworking The *Singleton* instance
     */
    public function getSecurityAndNetworking()
    {
        return Controllers\SecurityAndNetworking::getInstance();
    }
    /**
     * Singleton access to Geolocation controller
     * @return Controllers\Geolocation The *Singleton* instance
     */
    public function getGeolocation()
    {
        return Controllers\Geolocation::getInstance();
    }
    /**
     * Singleton access to ECommerce controller
     * @return Controllers\ECommerce The *Singleton* instance
     */
    public function getECommerce()
    {
        return Controllers\ECommerce::getInstance();
    }
}
