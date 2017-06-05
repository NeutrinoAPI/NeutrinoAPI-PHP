<?php
/*
 * NeutrinoAPI
 *
 * This file was automatically generated for NeutrinoAPI by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace NeutrinoAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class EmailValidateResponse implements JsonSerializable
{
    /**
     * Is this a valid email
     * @required
     * @var bool $valid public property
     */
    public $valid;

    /**
     * True if this address has a syntax error
     * @required
     * @var bool $syntaxError public property
     */
    public $syntaxError;

    /**
     * The email domain
     * @required
     * @var string $domain public property
     */
    public $domain;

    /**
     * True if this address has a domain error (e.g. no valid mail server records)
     * @required
     * @var bool $domainError public property
     */
    public $domainError;

    /**
     * True if this address is a free-mail address
     * @required
     * @var bool $isFreemail public property
     */
    public $isFreemail;

    /**
     * The full email address (this could be different to the supplied address if fix-typos is used)
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * True if this address is a disposable, temporary or darknet related email address
     * @required
     * @var bool $isDisposable public property
     */
    public $isDisposable;

    /**
     * True if typos have been fixed
     * @required
     * @var bool $typosFixed public property
     */
    public $typosFixed;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $valid        Initialization value for $this->valid
     * @param bool   $syntaxError  Initialization value for $this->syntaxError
     * @param string $domain       Initialization value for $this->domain
     * @param bool   $domainError  Initialization value for $this->domainError
     * @param bool   $isFreemail   Initialization value for $this->isFreemail
     * @param string $email        Initialization value for $this->email
     * @param bool   $isDisposable Initialization value for $this->isDisposable
     * @param bool   $typosFixed   Initialization value for $this->typosFixed
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->valid        = func_get_arg(0);
            $this->syntaxError  = func_get_arg(1);
            $this->domain       = func_get_arg(2);
            $this->domainError  = func_get_arg(3);
            $this->isFreemail   = func_get_arg(4);
            $this->email        = func_get_arg(5);
            $this->isDisposable = func_get_arg(6);
            $this->typosFixed   = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['valid']        = $this->valid;
        $json['syntaxError']  = $this->syntaxError;
        $json['domain']       = $this->domain;
        $json['domainError']  = $this->domainError;
        $json['isFreemail']   = $this->isFreemail;
        $json['email']        = $this->email;
        $json['isDisposable'] = $this->isDisposable;
        $json['typosFixed']   = $this->typosFixed;

        return $json;
    }
}
