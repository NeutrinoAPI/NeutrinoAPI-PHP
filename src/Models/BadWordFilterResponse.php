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
class BadWordFilterResponse implements JsonSerializable
{
    /**
     * An array of the bad words found
     * @required
     * @var array $badWordsList public property
     */
    public $badWordsList;

    /**
     * Total number of bad words detected
     * @required
     * @var integer $badWordsTotal public property
     */
    public $badWordsTotal;

    /**
     * The censored content (only set if censor-character has been set)
     * @required
     * @var string $censoredContent public property
     */
    public $censoredContent;

    /**
     * Does the text contain bad words
     * @required
     * @var bool $isBad public property
     */
    public $isBad;

    /**
     * Constructor to set initial or default values of member properties
     * @param array   $badWordsList    Initialization value for $this->badWordsList
     * @param integer $badWordsTotal   Initialization value for $this->badWordsTotal
     * @param string  $censoredContent Initialization value for $this->censoredContent
     * @param bool    $isBad           Initialization value for $this->isBad
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->badWordsList    = func_get_arg(0);
            $this->badWordsTotal   = func_get_arg(1);
            $this->censoredContent = func_get_arg(2);
            $this->isBad           = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['badWordsList']    = $this->badWordsList;
        $json['badWordsTotal']   = $this->badWordsTotal;
        $json['censoredContent'] = $this->censoredContent;
        $json['isBad']           = $this->isBad;

        return $json;
    }
}
