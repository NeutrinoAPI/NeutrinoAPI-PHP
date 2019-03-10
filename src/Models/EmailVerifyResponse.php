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
class EmailVerifyResponse implements JsonSerializable
{
    /**
     * Is this a valid email address (syntax and domain is valid)
     * @required
     * @var bool $valid public property
     */
    public $valid;

    /**
     * True if this address has passed SMTP verification. Check the smtp-status and smtp-response fields
     * for specific verification details
     * @required
     * @var bool $verified public property
     */
    public $verified;

    /**
     * The full email address (this could be different to the supplied address if typos-fixed is true)
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * True if typos have been fixed
     * @required
     * @var bool $typosFixed public property
     */
    public $typosFixed;

    /**
     * True if this address has a syntax error
     * @required
     * @var bool $syntaxError public property
     */
    public $syntaxError;

    /**
     * True if this address has a domain error (e.g. no valid mail server records)
     * @required
     * @var bool $domainError public property
     */
    public $domainError;

    /**
     * The email domain
     * @required
     * @var string $domain public property
     */
    public $domain;

    /**
     * The email service provider domain
     * @required
     * @var string $provider public property
     */
    public $provider;

    /**
     * True if this address is a free-mail address
     * @required
     * @var bool $isFreemail public property
     */
    public $isFreemail;

    /**
     * True if this address is a disposable, temporary or darknet related email address
     * @required
     * @var bool $isDisposable public property
     */
    public $isDisposable;

    /**
     * True if this address is for a person. False if this is a role based address, e.g. admin@, help@,
     * office@, etc.
     * @required
     * @var bool $isPersonal public property
     */
    public $isPersonal;

    /**
     * The SMTP verification status for the address:<br/><ul><li>ok - SMTP verification was successful,
     * this is a real address that can receive mail</li><li>invalid - this is not a valid email address
     * (has either a domain or syntax error)</li><li>absent - this address is not registered with the email
     * service provider</li><li>unresponsive - the mail server(s) for this address timed-out or refused to
     * open an SMTP connection</li><li>unknown - sorry, we could not reliably determine the real status of
     * this address (this address may or may not exist)</li></ul>
     * @required
     * @var string $smtpStatus public property
     */
    public $smtpStatus;

    /**
     * The raw SMTP response message received during verification
     * @required
     * @var string $smtpResponse public property
     */
    public $smtpResponse;

    /**
     * True if this email domain has a catch-all policy (it will accept mail for any username)
     * @required
     * @var bool $isCatchAll public property
     */
    public $isCatchAll;

    /**
     * True if the mail server responded with a temporary failure (either a 4xx response code or
     * unresponsive server). You can retry this address later, we recommend waiting at least 15 minutes
     * before retrying
     * @required
     * @var bool $isDeferred public property
     */
    public $isDeferred;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $valid        Initialization value for $this->valid
     * @param bool   $verified     Initialization value for $this->verified
     * @param string $email        Initialization value for $this->email
     * @param bool   $typosFixed   Initialization value for $this->typosFixed
     * @param bool   $syntaxError  Initialization value for $this->syntaxError
     * @param bool   $domainError  Initialization value for $this->domainError
     * @param string $domain       Initialization value for $this->domain
     * @param string $provider     Initialization value for $this->provider
     * @param bool   $isFreemail   Initialization value for $this->isFreemail
     * @param bool   $isDisposable Initialization value for $this->isDisposable
     * @param bool   $isPersonal   Initialization value for $this->isPersonal
     * @param string $smtpStatus   Initialization value for $this->smtpStatus
     * @param string $smtpResponse Initialization value for $this->smtpResponse
     * @param bool   $isCatchAll   Initialization value for $this->isCatchAll
     * @param bool   $isDeferred   Initialization value for $this->isDeferred
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->valid        = func_get_arg(0);
            $this->verified     = func_get_arg(1);
            $this->email        = func_get_arg(2);
            $this->typosFixed   = func_get_arg(3);
            $this->syntaxError  = func_get_arg(4);
            $this->domainError  = func_get_arg(5);
            $this->domain       = func_get_arg(6);
            $this->provider     = func_get_arg(7);
            $this->isFreemail   = func_get_arg(8);
            $this->isDisposable = func_get_arg(9);
            $this->isPersonal   = func_get_arg(10);
            $this->smtpStatus   = func_get_arg(11);
            $this->smtpResponse = func_get_arg(12);
            $this->isCatchAll   = func_get_arg(13);
            $this->isDeferred   = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['valid']        = $this->valid;
        $json['verified']     = $this->verified;
        $json['email']        = $this->email;
        $json['typosFixed']   = $this->typosFixed;
        $json['syntaxError']  = $this->syntaxError;
        $json['domainError']  = $this->domainError;
        $json['domain']       = $this->domain;
        $json['provider']     = $this->provider;
        $json['isFreemail']   = $this->isFreemail;
        $json['isDisposable'] = $this->isDisposable;
        $json['isPersonal']   = $this->isPersonal;
        $json['smtpStatus']   = $this->smtpStatus;
        $json['smtpResponse'] = $this->smtpResponse;
        $json['isCatchAll']   = $this->isCatchAll;
        $json['isDeferred']   = $this->isDeferred;

        return $json;
    }
}
