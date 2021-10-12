<?php
/**
 * KenmerkNummeraanduidingInOnderzoek
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
 * KenmerkNummeraanduidingInOnderzoek Class Doc Comment
 *
 * @category Class
 * @description Limitatieve opsomming van alle kenmerken van dit object die in onderzoek zijn op dit moment, of van alle kenmerken die ooit in onderzoek zijn geweest als er een tijdreisvraag is gesteld of een vraag naar de levenscyclus.
 * @package  BAG\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KenmerkNummeraanduidingInOnderzoek implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KenmerkNummeraanduidingInOnderzoek';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kenmerk' => '\BAG\Client\Model\InOnderzoekNummeraanduiding',
'identificatie_van_nummeraanduiding' => '\BAG\Client\Model\NummeraanduidingIdentificatie',
'in_onderzoek' => '\BAG\Client\Model\Indicatie',
'historie' => '\BAG\Client\Model\HistorieInOnderzoek',
'documentdatum' => '\DateTime',
'documentnummer' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kenmerk' => null,
'identificatie_van_nummeraanduiding' => null,
'in_onderzoek' => null,
'historie' => null,
'documentdatum' => 'date',
'documentnummer' => null    ];

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
        'kenmerk' => 'kenmerk',
'identificatie_van_nummeraanduiding' => 'identificatieVanNummeraanduiding',
'in_onderzoek' => 'inOnderzoek',
'historie' => 'historie',
'documentdatum' => 'documentdatum',
'documentnummer' => 'documentnummer'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kenmerk' => 'setKenmerk',
'identificatie_van_nummeraanduiding' => 'setIdentificatieVanNummeraanduiding',
'in_onderzoek' => 'setInOnderzoek',
'historie' => 'setHistorie',
'documentdatum' => 'setDocumentdatum',
'documentnummer' => 'setDocumentnummer'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kenmerk' => 'getKenmerk',
'identificatie_van_nummeraanduiding' => 'getIdentificatieVanNummeraanduiding',
'in_onderzoek' => 'getInOnderzoek',
'historie' => 'getHistorie',
'documentdatum' => 'getDocumentdatum',
'documentnummer' => 'getDocumentnummer'    ];

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
        $this->container['kenmerk'] = isset($data['kenmerk']) ? $data['kenmerk'] : null;
        $this->container['identificatie_van_nummeraanduiding'] = isset($data['identificatie_van_nummeraanduiding']) ? $data['identificatie_van_nummeraanduiding'] : null;
        $this->container['in_onderzoek'] = isset($data['in_onderzoek']) ? $data['in_onderzoek'] : null;
        $this->container['historie'] = isset($data['historie']) ? $data['historie'] : null;
        $this->container['documentdatum'] = isset($data['documentdatum']) ? $data['documentdatum'] : null;
        $this->container['documentnummer'] = isset($data['documentnummer']) ? $data['documentnummer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['kenmerk'] === null) {
            $invalidProperties[] = "'kenmerk' can't be null";
        }
        if ($this->container['identificatie_van_nummeraanduiding'] === null) {
            $invalidProperties[] = "'identificatie_van_nummeraanduiding' can't be null";
        }
        if ($this->container['in_onderzoek'] === null) {
            $invalidProperties[] = "'in_onderzoek' can't be null";
        }
        if ($this->container['historie'] === null) {
            $invalidProperties[] = "'historie' can't be null";
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
     * Gets kenmerk
     *
     * @return \BAG\Client\Model\InOnderzoekNummeraanduiding
     */
    public function getKenmerk()
    {
        return $this->container['kenmerk'];
    }

    /**
     * Sets kenmerk
     *
     * @param \BAG\Client\Model\InOnderzoekNummeraanduiding $kenmerk kenmerk
     *
     * @return $this
     */
    public function setKenmerk($kenmerk)
    {
        $this->container['kenmerk'] = $kenmerk;

        return $this;
    }

    /**
     * Gets identificatie_van_nummeraanduiding
     *
     * @return \BAG\Client\Model\NummeraanduidingIdentificatie
     */
    public function getIdentificatieVanNummeraanduiding()
    {
        return $this->container['identificatie_van_nummeraanduiding'];
    }

    /**
     * Sets identificatie_van_nummeraanduiding
     *
     * @param \BAG\Client\Model\NummeraanduidingIdentificatie $identificatie_van_nummeraanduiding identificatie_van_nummeraanduiding
     *
     * @return $this
     */
    public function setIdentificatieVanNummeraanduiding($identificatie_van_nummeraanduiding)
    {
        $this->container['identificatie_van_nummeraanduiding'] = $identificatie_van_nummeraanduiding;

        return $this;
    }

    /**
     * Gets in_onderzoek
     *
     * @return \BAG\Client\Model\Indicatie
     */
    public function getInOnderzoek()
    {
        return $this->container['in_onderzoek'];
    }

    /**
     * Sets in_onderzoek
     *
     * @param \BAG\Client\Model\Indicatie $in_onderzoek in_onderzoek
     *
     * @return $this
     */
    public function setInOnderzoek($in_onderzoek)
    {
        $this->container['in_onderzoek'] = $in_onderzoek;

        return $this;
    }

    /**
     * Gets historie
     *
     * @return \BAG\Client\Model\HistorieInOnderzoek
     */
    public function getHistorie()
    {
        return $this->container['historie'];
    }

    /**
     * Sets historie
     *
     * @param \BAG\Client\Model\HistorieInOnderzoek $historie historie
     *
     * @return $this
     */
    public function setHistorie($historie)
    {
        $this->container['historie'] = $historie;

        return $this;
    }

    /**
     * Gets documentdatum
     *
     * @return \DateTime
     */
    public function getDocumentdatum()
    {
        return $this->container['documentdatum'];
    }

    /**
     * Sets documentdatum
     *
     * @param \DateTime $documentdatum De datum van het document waarin de grondslag van het onderzoek wordt vastgelegd. Dit wordt vastgelegd in het attribuut documentdatum.
     *
     * @return $this
     */
    public function setDocumentdatum($documentdatum)
    {
        $this->container['documentdatum'] = $documentdatum;

        return $this;
    }

    /**
     * Gets documentnummer
     *
     * @return string
     */
    public function getDocumentnummer()
    {
        return $this->container['documentnummer'];
    }

    /**
     * Sets documentnummer
     *
     * @param string $documentnummer Het nummer van het document waarin de grondslag van het onderzoek wordt vastgelegd. Dit wordt vastgelegd in het attribuut documentnummer.
     *
     * @return $this
     */
    public function setDocumentnummer($documentnummer)
    {
        $this->container['documentnummer'] = $documentnummer;

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
