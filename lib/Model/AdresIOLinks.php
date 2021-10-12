<?php
/**
 * AdresIOLinks
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AdresIOLinks Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdresIOLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdresIO_links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'self' => '\Swagger\Client\Model\HalLink',
'openbare_ruimte' => '\Swagger\Client\Model\HalLink',
'nummeraanduiding' => '\Swagger\Client\Model\HalLink',
'woonplaats' => '\Swagger\Client\Model\HalLink',
'adresseerbaar_object' => '\Swagger\Client\Model\HalLink',
'panden' => '\Swagger\Client\Model\HalLink[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'self' => null,
'openbare_ruimte' => null,
'nummeraanduiding' => null,
'woonplaats' => null,
'adresseerbaar_object' => null,
'panden' => null    ];

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
        'self' => 'self',
'openbare_ruimte' => 'openbareRuimte',
'nummeraanduiding' => 'nummeraanduiding',
'woonplaats' => 'woonplaats',
'adresseerbaar_object' => 'adresseerbaarObject',
'panden' => 'panden'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
'openbare_ruimte' => 'setOpenbareRuimte',
'nummeraanduiding' => 'setNummeraanduiding',
'woonplaats' => 'setWoonplaats',
'adresseerbaar_object' => 'setAdresseerbaarObject',
'panden' => 'setPanden'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
'openbare_ruimte' => 'getOpenbareRuimte',
'nummeraanduiding' => 'getNummeraanduiding',
'woonplaats' => 'getWoonplaats',
'adresseerbaar_object' => 'getAdresseerbaarObject',
'panden' => 'getPanden'    ];

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
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['openbare_ruimte'] = isset($data['openbare_ruimte']) ? $data['openbare_ruimte'] : null;
        $this->container['nummeraanduiding'] = isset($data['nummeraanduiding']) ? $data['nummeraanduiding'] : null;
        $this->container['woonplaats'] = isset($data['woonplaats']) ? $data['woonplaats'] : null;
        $this->container['adresseerbaar_object'] = isset($data['adresseerbaar_object']) ? $data['adresseerbaar_object'] : null;
        $this->container['panden'] = isset($data['panden']) ? $data['panden'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets self
     *
     * @return \Swagger\Client\Model\HalLink
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \Swagger\Client\Model\HalLink $self self
     *
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets openbare_ruimte
     *
     * @return \Swagger\Client\Model\HalLink
     */
    public function getOpenbareRuimte()
    {
        return $this->container['openbare_ruimte'];
    }

    /**
     * Sets openbare_ruimte
     *
     * @param \Swagger\Client\Model\HalLink $openbare_ruimte openbare_ruimte
     *
     * @return $this
     */
    public function setOpenbareRuimte($openbare_ruimte)
    {
        $this->container['openbare_ruimte'] = $openbare_ruimte;

        return $this;
    }

    /**
     * Gets nummeraanduiding
     *
     * @return \Swagger\Client\Model\HalLink
     */
    public function getNummeraanduiding()
    {
        return $this->container['nummeraanduiding'];
    }

    /**
     * Sets nummeraanduiding
     *
     * @param \Swagger\Client\Model\HalLink $nummeraanduiding nummeraanduiding
     *
     * @return $this
     */
    public function setNummeraanduiding($nummeraanduiding)
    {
        $this->container['nummeraanduiding'] = $nummeraanduiding;

        return $this;
    }

    /**
     * Gets woonplaats
     *
     * @return \Swagger\Client\Model\HalLink
     */
    public function getWoonplaats()
    {
        return $this->container['woonplaats'];
    }

    /**
     * Sets woonplaats
     *
     * @param \Swagger\Client\Model\HalLink $woonplaats woonplaats
     *
     * @return $this
     */
    public function setWoonplaats($woonplaats)
    {
        $this->container['woonplaats'] = $woonplaats;

        return $this;
    }

    /**
     * Gets adresseerbaar_object
     *
     * @return \Swagger\Client\Model\HalLink
     */
    public function getAdresseerbaarObject()
    {
        return $this->container['adresseerbaar_object'];
    }

    /**
     * Sets adresseerbaar_object
     *
     * @param \Swagger\Client\Model\HalLink $adresseerbaar_object adresseerbaar_object
     *
     * @return $this
     */
    public function setAdresseerbaarObject($adresseerbaar_object)
    {
        $this->container['adresseerbaar_object'] = $adresseerbaar_object;

        return $this;
    }

    /**
     * Gets panden
     *
     * @return \Swagger\Client\Model\HalLink[]
     */
    public function getPanden()
    {
        return $this->container['panden'];
    }

    /**
     * Sets panden
     *
     * @param \Swagger\Client\Model\HalLink[] $panden Het/de aan het adres gerelateerde pand(en).
     *
     * @return $this
     */
    public function setPanden($panden)
    {
        $this->container['panden'] = $panden;

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
