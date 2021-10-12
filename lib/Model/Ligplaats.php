<?php
/**
 * Ligplaats
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
use \BAG\Client\ObjectSerializer;

/**
 * Ligplaats Class Doc Comment
 *
 * @category Class
 * @description Een Ligplaats is een door het bevoegde gemeentelijke orgaan als zodanig aangewezen plaats in het water al dan niet aangevuld met een op de oever aanwezig terrein of een gedeelte daarvan, die bestemd is voor het permanent afmeren van een voor woon-, bedrijfsmatige of recreatieve doeleinden geschikt drijvend object.
 * @package  BAG\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Ligplaats extends AdresseerbaarObject 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ligplaats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identificatie' => '\BAG\Client\Model\LigplaatsIdentificatie',
'domein' => 'string',
'status' => '\BAG\Client\Model\StatusPlaats',
'geometrie' => '\BAG\Client\Model\Surface',
'geconstateerd' => '\BAG\Client\Model\Indicatie',
'documentdatum' => '\DateTime',
'documentnummer' => 'string',
'voorkomen' => '\BAG\Client\Model\Voorkomen'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identificatie' => null,
'domein' => null,
'status' => null,
'geometrie' => null,
'geconstateerd' => null,
'documentdatum' => 'date',
'documentnummer' => null,
'voorkomen' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
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
'status' => 'status',
'geometrie' => 'geometrie',
'geconstateerd' => 'geconstateerd',
'documentdatum' => 'documentdatum',
'documentnummer' => 'documentnummer',
'voorkomen' => 'voorkomen'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identificatie' => 'setIdentificatie',
'domein' => 'setDomein',
'status' => 'setStatus',
'geometrie' => 'setGeometrie',
'geconstateerd' => 'setGeconstateerd',
'documentdatum' => 'setDocumentdatum',
'documentnummer' => 'setDocumentnummer',
'voorkomen' => 'setVoorkomen'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identificatie' => 'getIdentificatie',
'domein' => 'getDomein',
'status' => 'getStatus',
'geometrie' => 'getGeometrie',
'geconstateerd' => 'getGeconstateerd',
'documentdatum' => 'getDocumentdatum',
'documentnummer' => 'getDocumentnummer',
'voorkomen' => 'getVoorkomen'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['identificatie'] = isset($data['identificatie']) ? $data['identificatie'] : null;
        $this->container['domein'] = isset($data['domein']) ? $data['domein'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['geometrie'] = isset($data['geometrie']) ? $data['geometrie'] : null;
        $this->container['geconstateerd'] = isset($data['geconstateerd']) ? $data['geconstateerd'] : null;
        $this->container['documentdatum'] = isset($data['documentdatum']) ? $data['documentdatum'] : null;
        $this->container['documentnummer'] = isset($data['documentnummer']) ? $data['documentnummer'] : null;
        $this->container['voorkomen'] = isset($data['voorkomen']) ? $data['voorkomen'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['identificatie'] === null) {
            $invalidProperties[] = "'identificatie' can't be null";
        }
        if ($this->container['domein'] === null) {
            $invalidProperties[] = "'domein' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['geometrie'] === null) {
            $invalidProperties[] = "'geometrie' can't be null";
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
     * @return \BAG\Client\Model\LigplaatsIdentificatie
     */
    public function getIdentificatie()
    {
        return $this->container['identificatie'];
    }

    /**
     * Sets identificatie
     *
     * @param \BAG\Client\Model\LigplaatsIdentificatie $identificatie identificatie
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
     * @param string $domein NL.IMBAG.Ligplaats
     *
     * @return $this
     */
    public function setDomein($domein)
    {
        $this->container['domein'] = $domein;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \BAG\Client\Model\StatusPlaats
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \BAG\Client\Model\StatusPlaats $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets geometrie
     *
     * @return \BAG\Client\Model\Surface
     */
    public function getGeometrie()
    {
        return $this->container['geometrie'];
    }

    /**
     * Sets geometrie
     *
     * @param \BAG\Client\Model\Surface $geometrie geometrie
     *
     * @return $this
     */
    public function setGeometrie($geometrie)
    {
        $this->container['geometrie'] = $geometrie;

        return $this;
    }

    /**
     * Gets geconstateerd
     *
     * @return \BAG\Client\Model\Indicatie
     */
    public function getGeconstateerd()
    {
        return $this->container['geconstateerd'];
    }

    /**
     * Sets geconstateerd
     *
     * @param \BAG\Client\Model\Indicatie $geconstateerd geconstateerd
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
     * @param string $documentnummer De unieke aanduiding van het brondocument op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een woonplaats heeft plaatsgevonden, binnen een gemeente. Alle karakters uit de MES-1 karakterset zijn toegestaan.
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
     * @return \BAG\Client\Model\Voorkomen
     */
    public function getVoorkomen()
    {
        return $this->container['voorkomen'];
    }

    /**
     * Sets voorkomen
     *
     * @param \BAG\Client\Model\Voorkomen $voorkomen voorkomen
     *
     * @return $this
     */
    public function setVoorkomen($voorkomen)
    {
        $this->container['voorkomen'] = $voorkomen;

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
