<?php
/**
 * WoonplaatsIOHal
 *
 * PHP version 5
 *
 * @category Class
 * @package  BAG\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IMBAG API - van de LVBAG
 *
 * Dit is de [BAG API](https://zakelijk.kadaster.nl/-/bag-api) Individuele Bevragingen van de Landelijke Voorziening Basisregistratie Adressen en Gebouwen (LVBAG).                                         <br/>                                         Meer informatie over de Basisregistratie Adressen en Gebouwen is te vinden op de website van het [Ministerie van Binnenlandse Zaken en Koninkrijksrelaties](https://www.geobasisregistraties.nl/basisregistraties/adressen-en-gebouwen) en [Kadaster](https://zakelijk.kadaster.nl/bag).                                         <br/>                                         <br/>                                         De BAG API levert informatie conform de [BAG Catalogus 2018](https://www.geobasisregistraties.nl/documenten/publicatie/2018/03/12/catalogus-2018) en het informatiemodel IMBAG 2.0.                                         De API specificatie volgt de [Nederlandse API-Strategie](https://docs.geostandaarden.nl/api/API-Strategie) specificatie versie van 20200204 en is opgesteld in [OpenAPI Specificatie](https://www.forumstandaardisatie.nl/standaard/openapi-specification) (OAS) v3.                                         <br/>                                         Het standaard mediatype HAL (`application/hal+json`) wordt gebruikt. Dit is een mediatype voor het weergeven van resources en hun relaties via hyperlinks.                                         <br/>                                         <br/>                                         Deze API is vooral gericht op individuele bevragingen (op basis van de identificerende gegevens van een object).                                         Om gebruik te kunnen maken van de BAG API is een API key nodig, deze kan verkregen worden door het [aanvraagformulier](https://formulieren.kadaster.nl/aanvraag_bag_api_individuele_bevragingen_productie) in te vullen.                                         <br/>                                         <br/>                                         Voor vragen, neem contact op met de LVBAG beheerder o.v.v. BAG API 2.0. We zijn aan het kijken naar een geschikt medium hiervoor, mede ook om de API iteratief te kunnen opstellen of doorontwikkelen samen met de community. Als de API iets (nog) niet kan, wat u wel graag wilt, neem dan contact op.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BAG\Client\Model;

use \ArrayAccess;
use \BAG\Client\ObjectSerializer;

/**
 * WoonplaatsIOHal Class Doc Comment
 *
 * @category Class
 * @description Woonplaats, aangevuld met een limitatieve opsomming van alle kenmerken van dit object die in onderzoek zijn(als metadata). Bij een normale vraag wordt aangegeven welke kenmerken er op dit moment in onderzoek zijn. Bij een tijdreisvraag wordt aangegeven welke gegevens er ooit in onderzoek zijn geweest. Bij een levenscyclus vraag wordt aangegeven welke gegevens er ooit in onderzoek zijn geweest.
 * @package  BAG\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WoonplaatsIOHal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WoonplaatsIOHal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'woonplaats' => '\BAG\Client\Model\Woonplaats',
'inonderzoek' => '\BAG\Client\Model\KenmerkWoonplaatsInOnderzoek[]',
'_embedded' => '\BAG\Client\Model\WoonplaatsEmbedded',
'_links' => '\BAG\Client\Model\WoonplaatsLinks'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'woonplaats' => null,
'inonderzoek' => null,
'_embedded' => null,
'_links' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'woonplaats' => 'woonplaats',
'inonderzoek' => 'inonderzoek',
'_embedded' => '_embedded',
'_links' => '_links'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'woonplaats' => 'setWoonplaats',
'inonderzoek' => 'setInonderzoek',
'_embedded' => 'setEmbedded',
'_links' => 'setLinks'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'woonplaats' => 'getWoonplaats',
'inonderzoek' => 'getInonderzoek',
'_embedded' => 'getEmbedded',
'_links' => 'getLinks'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['woonplaats'] = isset($data['woonplaats']) ? $data['woonplaats'] : null;
        $this->container['inonderzoek'] = isset($data['inonderzoek']) ? $data['inonderzoek'] : null;
        $this->container['_embedded'] = isset($data['_embedded']) ? $data['_embedded'] : null;
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['woonplaats'] === null) {
            $invalidProperties[] = "'woonplaats' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets woonplaats
     *
     * @return \BAG\Client\Model\Woonplaats
     */
    public function getWoonplaats()
    {
        return $this->container['woonplaats'];
    }

    /**
     * Sets woonplaats
     *
     * @param \BAG\Client\Model\Woonplaats $woonplaats woonplaats
     *
     * @return $this
     */
    public function setWoonplaats($woonplaats)
    {
        $this->container['woonplaats'] = $woonplaats;

        return $this;
    }

    /**
     * Gets inonderzoek
     *
     * @return \BAG\Client\Model\KenmerkWoonplaatsInOnderzoek[]
     */
    public function getInonderzoek()
    {
        return $this->container['inonderzoek'];
    }

    /**
     * Sets inonderzoek
     *
     * @param \BAG\Client\Model\KenmerkWoonplaatsInOnderzoek[] $inonderzoek inonderzoek
     *
     * @return $this
     */
    public function setInonderzoek($inonderzoek)
    {
        $this->container['inonderzoek'] = $inonderzoek;

        return $this;
    }

    /**
     * Gets _embedded
     *
     * @return \BAG\Client\Model\WoonplaatsEmbedded
     */
    public function getEmbedded()
    {
        return $this->container['_embedded'];
    }

    /**
     * Sets _embedded
     *
     * @param \BAG\Client\Model\WoonplaatsEmbedded $_embedded _embedded
     *
     * @return $this
     */
    public function setEmbedded($_embedded)
    {
        $this->container['_embedded'] = $_embedded;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \BAG\Client\Model\WoonplaatsLinks
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \BAG\Client\Model\WoonplaatsLinks $_links _links
     *
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
