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
class GeocodeAddressResponse implements JsonSerializable
{
    /**
     * The number of possible matching locations found
     * @required
     * @var integer $found public property
     */
    public $found;

    /**
     * Array of matching location objects:<table class="data-
     * tbl"><tbody><tr><th>Key</th><th>Type</th><th>Description</th></tr><tr><td style="white-space: nowrap;
     * ">latitude</td><td>float</td><td>The location latitude</td></tr><tr><td style="white-space: nowrap;
     * ">longitude</td><td>float</td><td>The location longitude</td></tr><tr><td style="white-space: nowrap;
     * ">address</td><td>string</td><td>The fully formatted address</td></tr><tr><td style="white-space:
     * nowrap;">address-components</td><td>map</td><td>The components which make up the address such as
     * road, city, state, etc</td></tr><tr><td style="white-space: nowrap;">city</td><td>string</td><td>The
     * city of the location</td></tr><tr><td style="white-space: nowrap;">state</td><td>string</td><td>The
     * state of the location</td></tr><tr><td style="white-space: nowrap;
     * ">country</td><td>string</td><td>The country of the location</td></tr><tr><td style="white-space:
     * nowrap;">country-code</td><td>string</td><td>The ISO 2-letter country code of the
     * location</td></tr><tr><td style="white-space: nowrap;">country-code3</td><td>string</td><td>The ISO
     * 3-letter country code of the location</td></tr><tr><td style="white-space: nowrap;">currency-
     * code</td><td>string</td><td>ISO 4217 currency code associated with the country</td></tr><tr><td
     * style="white-space: nowrap;">postal-code</td><td>string</td><td>The postal code for the
     * location</td></tr><tr><td style="white-space: nowrap;">location-type</td><td>string</td><td>The
     * detected location type ordered roughly from most to least precise, possible values are:
     * <br><ul><li>address - indicates a precise street address</li><li>street - accurate to the street
     * level but may not point to the exact location of the house/building number</li><li>city - accurate
     * to the city level, this includes villages, towns, suburbs, etc</li><li>postal-code - indicates a
     * postal code area (no house or street information present)</li><li>railway - location is part of a
     * rail network such as a station or railway track</li><li>natural - indicates a natural feature, for
     * example a mountain peak or a waterway</li><li>island - location is an island or
     * archipelago</li><li>administrative - indicates an administrative boundary such as a country, state
     * or province</li></ul></td></tr><tr><td style="white-space: nowrap;">location-
     * tags</td><td>array</td><td>Array of strings containing any location tags associated with the address.
     * Tags are additional pieces of metadata about a specific location, there are thousands of different
     * tags. Some examples of tags: shop, office, cafe, bank, pub</td></tr></tbody></table>
     * @required
     * @var \NeutrinoAPILib\Models\Location[] $locations public property
     */
    public $locations;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $found     Initialization value for $this->found
     * @param array   $locations Initialization value for $this->locations
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->found     = func_get_arg(0);
            $this->locations = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['found']     = $this->found;
        $json['locations'] = $this->locations;

        return $json;
    }
}
