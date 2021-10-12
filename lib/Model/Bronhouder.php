<?php
/**
 * Bronhouder
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
 * Bronhouder Class Doc Comment
 *
 * @category Class
 * @description Een bronhouder is een gemeente of samenwerkingsverband van gemeenten en heeft een code en naam net als een gemeente.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Bronhouder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Bronhouder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'naam' => 'string',
'begin_geldigheid' => '\DateTime',
'eind_geldigheid' => '\DateTime',
'provincie' => '\Swagger\Client\Model\Provincie'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'naam' => null,
'begin_geldigheid' => 'date',
'eind_geldigheid' => 'date',
'provincie' => null    ];

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
        'code' => 'code',
'naam' => 'naam',
'begin_geldigheid' => 'beginGeldigheid',
'eind_geldigheid' => 'eindGeldigheid',
'provincie' => 'provincie'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'naam' => 'setNaam',
'begin_geldigheid' => 'setBeginGeldigheid',
'eind_geldigheid' => 'setEindGeldigheid',
'provincie' => 'setProvincie'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'naam' => 'getNaam',
'begin_geldigheid' => 'getBeginGeldigheid',
'eind_geldigheid' => 'getEindGeldigheid',
'provincie' => 'getProvincie'    ];

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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['naam'] = isset($data['naam']) ? $data['naam'] : null;
        $this->container['begin_geldigheid'] = isset($data['begin_geldigheid']) ? $data['begin_geldigheid'] : null;
        $this->container['eind_geldigheid'] = isset($data['eind_geldigheid']) ? $data['eind_geldigheid'] : null;
        $this->container['provincie'] = isset($data['provincie']) ? $data['provincie'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['naam'] === null) {
            $invalidProperties[] = "'naam' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Een officiële code die aan een gemeente is toegekend, ontleend is aan tabel 33 en zoals bijgehouden in de LVBAG. Dit gegeven is geen officieel BAG gegeven en wordt niet als kenmerk van het BAG object Woonplaats object bijgehouden. Het wordt als hulpgegeven meegeleverd.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->container['naam'];
    }

    /**
     * Sets naam
     *
     * @param string $naam Een officiële naam die aan een gemeente is toegekend.
     *
     * @return $this
     */
    public function setNaam($naam)
    {
        $this->container['naam'] = $naam;

        return $this;
    }

    /**
     * Gets begin_geldigheid
     *
     * @return \DateTime
     */
    public function getBeginGeldigheid()
    {
        return $this->container['begin_geldigheid'];
    }

    /**
     * Sets begin_geldigheid
     *
     * @param \DateTime $begin_geldigheid De datum waarop een versie van een bronhouder geldig is in de werkelijkheid. Dit tijdstip wordt vastgelegd in de beginGeldigheid.
     *
     * @return $this
     */
    public function setBeginGeldigheid($begin_geldigheid)
    {
        $this->container['begin_geldigheid'] = $begin_geldigheid;

        return $this;
    }

    /**
     * Gets eind_geldigheid
     *
     * @return \DateTime
     */
    public function getEindGeldigheid()
    {
        return $this->container['eind_geldigheid'];
    }

    /**
     * Sets eind_geldigheid
     *
     * @param \DateTime $eind_geldigheid De datum waarop de periode van geldigheid van een versie van een bronhouder eindigt. Wanneer er geen tijdstip is ingevuld, dan is de versie nog geldig. Dit tijdstip wordt vastgelegd in de eindGeldigheid.
     *
     * @return $this
     */
    public function setEindGeldigheid($eind_geldigheid)
    {
        $this->container['eind_geldigheid'] = $eind_geldigheid;

        return $this;
    }

    /**
     * Gets provincie
     *
     * @return \Swagger\Client\Model\Provincie
     */
    public function getProvincie()
    {
        return $this->container['provincie'];
    }

    /**
     * Sets provincie
     *
     * @param \Swagger\Client\Model\Provincie $provincie provincie
     *
     * @return $this
     */
    public function setProvincie($provincie)
    {
        $this->container['provincie'] = $provincie;

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
