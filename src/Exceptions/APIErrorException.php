<?php
/*
 * NeutrinoAPI
 *
 * This file was automatically generated for NeutrinoAPI by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace NeutrinoAPILib\Exceptions;

use NeutrinoAPILib\APIException;
use NeutrinoAPILib\APIHelper;

/**
 * @todo Write general description for this model
 */
class APIErrorException extends APIException
{
    /**
 * API error code. If set and > 0 then an API error has occurred your request could not be completed
     * @required
     * @var integer $apiError public property
     */
    public $apiError;

    /**
 * API error message
     * @required
     * @var string $apiErrorMsg public property
     */
    public $apiErrorMsg;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context);
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
        APIHelper::deserialize(self::getResponseBody(), $this, false, false);
    }
}
