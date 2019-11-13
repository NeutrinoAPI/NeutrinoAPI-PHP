<?php
/*
 * NeutrinoAPI
 *
 * This file was automatically generated for NeutrinoAPI by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace NeutrinoAPILib;

/**
 * All configuration including auth info and base URI for the API access
 * are configured in this class.
 */
class Configuration
{
    /**
     * The environment being used'
     * @var string
     */
    public static $environment = Environments::MULTICLOUD;

    /**
     * Your user ID
     * @var string
     */
    public static $userId = '';

    /**
     * Your API key
     * @var string
     */
    public static $apiKey = '';

    /**
     * Get the base uri for a given server in the current environment
     * @param  string $server Server name
     * @return string         Base URI
     */
    public static function getBaseUri($server = Servers::DEFAULT_)
    {
        return APIHelper::appendUrlWithTemplateParameters(
            static::$environmentsMap[static::$environment][$server],
            array(
            )
        );
    }

    /**
     * A map of all baseurls used in different environments and servers
     * @var array
     */
    private static $environmentsMap = array(
        Environments::MULTICLOUD => array(
            Servers::DEFAULT_ => 'https://neutrinoapi.net/',
        ),
        Environments::AWS => array(
            Servers::DEFAULT_ => 'https://aws.neutrinoapi.net/',
        ),
        Environments::GCP => array(
            Servers::DEFAULT_ => 'https://gcp.neutrinoapi.net/',
        ),
        Environments::MSA => array(
            Servers::DEFAULT_ => 'https://msa.neutrinoapi.net/',
        ),
    );
}
