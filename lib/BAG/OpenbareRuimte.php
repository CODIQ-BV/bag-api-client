<?php
/**
 * OpenbareRuimte
 *
 * PHP version 5
 *
 * @category Class
 * @package  BAGClient
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

namespace BAGClient\BAG;

use \ArrayAccess;
use \BAGClient\ObjectSerializer;

/**
 * OpenbareRuimte Class Doc Comment
 *
 * @category Class
 * @description Een Openbare ruimte is een door het bevoegde gemeentelijke orgaan als zodanig aangewezen en van een naam voorziene buitenruimte die binnen één woonplaats is gelegen.
 * @package  BAGClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpenbareRuimte implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OpenbareRuimte';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identificatie' => '\BAGClient\BAG\OpenbareRuimteIdentificatie',
'domein' => 'string',
'naam' => 'string',
'type' => '\BAGClient\BAG\TypeOpenbareRuimte',
'status' => '\BAGClient\BAG\StatusNaamgeving',
'korte_naam' => 'string',
'geconstateerd' => '\BAGClient\BAG\Indicatie',
'documentdatum' => '\DateTime',
'documentnummer' => 'string',
'voorkomen' => '\BAGClient\BAG\Voorkomen',
'ligt_in' => '\BAGClient\BAG\WoonplaatsIdentificatie'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identificatie' => null,
'domein' => null,
'naam' => null,
'type' => null,
'status' => null,
'korte_naam' => null,
'geconstateerd' => null,
'documentdatum' => 'date',
'documentnummer' => null,
'voorkomen' => null,
'ligt_in' => null    ];

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
        'identificatie' => 'identificatie',
'domein' => 'domein',
'naam' => 'naam',
'type' => 'type',
'status' => 'status',
'korte_naam' => 'korteNaam',
'geconstateerd' => 'geconstateerd',
'documentdatum' => 'documentdatum',
'documentnummer' => 'documentnummer',
'voorkomen' => 'voorkomen',
'ligt_in' => 'ligtIn'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identificatie' => 'setIdentificatie',
'domein' => 'setDomein',
'naam' => 'setNaam',
'type' => 'setType',
'status' => 'setStatus',
'korte_naam' => 'setKorteNaam',
'geconstateerd' => 'setGeconstateerd',
'documentdatum' => 'setDocumentdatum',
'documentnummer' => 'setDocumentnummer',
'voorkomen' => 'setVoorkomen',
'ligt_in' => 'setLigtIn'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identificatie' => 'getIdentificatie',
'domein' => 'getDomein',
'naam' => 'getNaam',
'type' => 'getType',
'status' => 'getStatus',
'korte_naam' => 'getKorteNaam',
'geconstateerd' => 'getGeconstateerd',
'documentdatum' => 'getDocumentdatum',
'documentnummer' => 'getDocumentnummer',
'voorkomen' => 'getVoorkomen',
'ligt_in' => 'getLigtIn'    ];

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
        $this->container['identificatie'] = isset($data['identificatie']) ? $data['identificatie'] : null;
        $this->container['domein'] = isset($data['domein']) ? $data['domein'] : null;
        $this->container['naam'] = isset($data['naam']) ? $data['naam'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['korte_naam'] = isset($data['korte_naam']) ? $data['korte_naam'] : null;
        $this->container['geconstateerd'] = isset($data['geconstateerd']) ? $data['geconstateerd'] : null;
        $this->container['documentdatum'] = isset($data['documentdatum']) ? $data['documentdatum'] : null;
        $this->container['documentnummer'] = isset($data['documentnummer']) ? $data['documentnummer'] : null;
        $this->container['voorkomen'] = isset($data['voorkomen']) ? $data['voorkomen'] : null;
        $this->container['ligt_in'] = isset($data['ligt_in']) ? $data['ligt_in'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identificatie'] === null) {
            $invalidProperties[] = "'identificatie' can't be null";
        }
        if ($this->container['domein'] === null) {
            $invalidProperties[] = "'domein' can't be null";
        }
        if ($this->container['naam'] === null) {
            $invalidProperties[] = "'naam' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['korte_naam'] === null) {
            $invalidProperties[] = "'korte_naam' can't be null";
        }
        if ($this->container['geconstateerd'] === null) {
            $invalidProperties[] = "'geconstateerd' can't be null";
        }
        if ($this->container['documentdatum'] === null) {
            $invalidProperties[] = "'documentdatum' can't be null";
        }
        if ($this->container['documentnummer'] === null) {
            $invalidProperties[] = "'documentnummer' can't be null";
        }
        if ($this->container['voorkomen'] === null) {
            $invalidProperties[] = "'voorkomen' can't be null";
        }
        if ($this->container['ligt_in'] === null) {
            $invalidProperties[] = "'ligt_in' can't be null";
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
     * Gets identificatie
     *
     * @return \BAGClient\BAG\OpenbareRuimteIdentificatie
     */
    public function getIdentificatie()
    {
        return $this->container['identificatie'];
    }

    /**
     * Sets identificatie
     *
     * @param \BAGClient\BAG\OpenbareRuimteIdentificatie $identificatie identificatie
     *
     * @return $this
     */
    public function setIdentificatie($identificatie)
    {
        $this->container['identificatie'] = $identificatie;

        return $this;
    }

    /**
     * Gets domein
     *
     * @return string
     */
    public function getDomein()
    {
        return $this->container['domein'];
    }

    /**
     * Sets domein
     *
     * @param string $domein NL.IMBAG.Openbareruimte
     *
     * @return $this
     */
    public function setDomein($domein)
    {
        $this->container['domein'] = $domein;

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
     * @param string $naam Een naam die aan een openbare ruimte is toegekend in een daartoe strekkend formeel gemeentelijk besluit.
     *
     * @return $this
     */
    public function setNaam($naam)
    {
        $this->container['naam'] = $naam;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \BAGClient\BAG\TypeOpenbareRuimte
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \BAGClient\BAG\TypeOpenbareRuimte $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \BAGClient\BAG\StatusNaamgeving
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \BAGClient\BAG\StatusNaamgeving $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets korte_naam
     *
     * @return string
     */
    public function getKorteNaam()
    {
        return $this->container['korte_naam'];
    }

    /**
     * Sets korte_naam
     *
     * @param string $korte_naam De officiële openbare ruimte naam als deze niet langer is dan 24 tekens of de volgens de NEN5825 verkorte naam van maximaal 24 tekens.
     *
     * @return $this
     */
    public function setKorteNaam($korte_naam)
    {
        $this->container['korte_naam'] = $korte_naam;

        return $this;
    }

    /**
     * Gets geconstateerd
     *
     * @return \BAGClient\BAG\Indicatie
     */
    public function getGeconstateerd()
    {
        return $this->container['geconstateerd'];
    }

    /**
     * Sets geconstateerd
     *
     * @param \BAGClient\BAG\Indicatie $geconstateerd geconstateerd
     *
     * @return $this
     */
    public function setGeconstateerd($geconstateerd)
    {
        $this->container['geconstateerd'] = $geconstateerd;

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
     * @param \DateTime $documentdatum De datum waarop het brondocument is vastgesteld, op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een object heeft plaatsgevonden.
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
     * @param string $documentnummer De unieke aanduiding van het brondocument op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een woonplaats heeft plaatsgevonden binnen een gemeente. Alle karakters uit de MES-1 karakterset zijn toegestaan.
     *
     * @return $this
     */
    public function setDocumentnummer($documentnummer)
    {
        $this->container['documentnummer'] = $documentnummer;

        return $this;
    }

    /**
     * Gets voorkomen
     *
     * @return \BAGClient\BAG\Voorkomen
     */
    public function getVoorkomen()
    {
        return $this->container['voorkomen'];
    }

    /**
     * Sets voorkomen
     *
     * @param \BAGClient\BAG\Voorkomen $voorkomen voorkomen
     *
     * @return $this
     */
    public function setVoorkomen($voorkomen)
    {
        $this->container['voorkomen'] = $voorkomen;

        return $this;
    }

    /**
     * Gets ligt_in
     *
     * @return \BAGClient\BAG\WoonplaatsIdentificatie
     */
    public function getLigtIn()
    {
        return $this->container['ligt_in'];
    }

    /**
     * Sets ligt_in
     *
     * @param \BAGClient\BAG\WoonplaatsIdentificatie $ligt_in ligt_in
     *
     * @return $this
     */
    public function setLigtIn($ligt_in)
    {
        $this->container['ligt_in'] = $ligt_in;

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
