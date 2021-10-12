<?php
/**
 * AdresUitgebreid
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
 * AdresUitgebreid Class Doc Comment
 *
 * @category Class
 * @description Een adres is een verzameling van informatie uit adresseerbare objecten, gerelateerde nummeraanduidingen (hoofd- en nevenadres(sen)), aan de nummeraanduiding gerelateerde openbare ruimte en (indien aanwezig) de aan de nummeraanduiding gerelateerde woonplaats en indien deze niet beschikbaar is, de aan de openbare ruimte gerelateerde woonplaats. Waarbij alleen &#x27;huidige&#x27; object voorkomen informatie wordt geretourneerd, dit houdt in: het actuele object voorkomen mits deze geen eind status heeft. Adres uitgebreid bevat een adres uitgebreid met adresseerbaar object informatie.
 * @package  BAG\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdresUitgebreid extends Adres 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdresUitgebreid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type_adresseerbaar_object' => '\BAG\Client\Model\TypeAdresseerbaarObject',
'adresseerbaar_object_geometrie' => '\BAG\Client\Model\PuntOfVlak',
'adresseerbaar_object_status' => 'string',
'gebruiksdoelen' => '\BAG\Client\Model\Gebruiksdoel[]',
'oppervlakte' => 'int',
'oorspronkelijk_bouwjaar' => 'string[]',
'geconstateerd' => '\BAG\Client\Model\AdresUitgebreidGeconstateerd',
'inonderzoek' => '\BAG\Client\Model\AdresUitgebreidInOnderzoek'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type_adresseerbaar_object' => null,
'adresseerbaar_object_geometrie' => null,
'adresseerbaar_object_status' => null,
'gebruiksdoelen' => null,
'oppervlakte' => null,
'oorspronkelijk_bouwjaar' => null,
'geconstateerd' => null,
'inonderzoek' => null    ];

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
        'type_adresseerbaar_object' => 'typeAdresseerbaarObject',
'adresseerbaar_object_geometrie' => 'adresseerbaarObjectGeometrie',
'adresseerbaar_object_status' => 'adresseerbaarObjectStatus',
'gebruiksdoelen' => 'gebruiksdoelen',
'oppervlakte' => 'oppervlakte',
'oorspronkelijk_bouwjaar' => 'oorspronkelijkBouwjaar',
'geconstateerd' => 'geconstateerd',
'inonderzoek' => 'inonderzoek'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_adresseerbaar_object' => 'setTypeAdresseerbaarObject',
'adresseerbaar_object_geometrie' => 'setAdresseerbaarObjectGeometrie',
'adresseerbaar_object_status' => 'setAdresseerbaarObjectStatus',
'gebruiksdoelen' => 'setGebruiksdoelen',
'oppervlakte' => 'setOppervlakte',
'oorspronkelijk_bouwjaar' => 'setOorspronkelijkBouwjaar',
'geconstateerd' => 'setGeconstateerd',
'inonderzoek' => 'setInonderzoek'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_adresseerbaar_object' => 'getTypeAdresseerbaarObject',
'adresseerbaar_object_geometrie' => 'getAdresseerbaarObjectGeometrie',
'adresseerbaar_object_status' => 'getAdresseerbaarObjectStatus',
'gebruiksdoelen' => 'getGebruiksdoelen',
'oppervlakte' => 'getOppervlakte',
'oorspronkelijk_bouwjaar' => 'getOorspronkelijkBouwjaar',
'geconstateerd' => 'getGeconstateerd',
'inonderzoek' => 'getInonderzoek'    ];

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

        $this->container['type_adresseerbaar_object'] = isset($data['type_adresseerbaar_object']) ? $data['type_adresseerbaar_object'] : null;
        $this->container['adresseerbaar_object_geometrie'] = isset($data['adresseerbaar_object_geometrie']) ? $data['adresseerbaar_object_geometrie'] : null;
        $this->container['adresseerbaar_object_status'] = isset($data['adresseerbaar_object_status']) ? $data['adresseerbaar_object_status'] : null;
        $this->container['gebruiksdoelen'] = isset($data['gebruiksdoelen']) ? $data['gebruiksdoelen'] : null;
        $this->container['oppervlakte'] = isset($data['oppervlakte']) ? $data['oppervlakte'] : null;
        $this->container['oorspronkelijk_bouwjaar'] = isset($data['oorspronkelijk_bouwjaar']) ? $data['oorspronkelijk_bouwjaar'] : null;
        $this->container['geconstateerd'] = isset($data['geconstateerd']) ? $data['geconstateerd'] : null;
        $this->container['inonderzoek'] = isset($data['inonderzoek']) ? $data['inonderzoek'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets type_adresseerbaar_object
     *
     * @return \BAG\Client\Model\TypeAdresseerbaarObject
     */
    public function getTypeAdresseerbaarObject()
    {
        return $this->container['type_adresseerbaar_object'];
    }

    /**
     * Sets type_adresseerbaar_object
     *
     * @param \BAG\Client\Model\TypeAdresseerbaarObject $type_adresseerbaar_object type_adresseerbaar_object
     *
     * @return $this
     */
    public function setTypeAdresseerbaarObject($type_adresseerbaar_object)
    {
        $this->container['type_adresseerbaar_object'] = $type_adresseerbaar_object;

        return $this;
    }

    /**
     * Gets adresseerbaar_object_geometrie
     *
     * @return \BAG\Client\Model\PuntOfVlak
     */
    public function getAdresseerbaarObjectGeometrie()
    {
        return $this->container['adresseerbaar_object_geometrie'];
    }

    /**
     * Sets adresseerbaar_object_geometrie
     *
     * @param \BAG\Client\Model\PuntOfVlak $adresseerbaar_object_geometrie adresseerbaar_object_geometrie
     *
     * @return $this
     */
    public function setAdresseerbaarObjectGeometrie($adresseerbaar_object_geometrie)
    {
        $this->container['adresseerbaar_object_geometrie'] = $adresseerbaar_object_geometrie;

        return $this;
    }

    /**
     * Gets adresseerbaar_object_status
     *
     * @return string
     */
    public function getAdresseerbaarObjectStatus()
    {
        return $this->container['adresseerbaar_object_status'];
    }

    /**
     * Sets adresseerbaar_object_status
     *
     * @param string $adresseerbaar_object_status adresseerbaar_object_status
     *
     * @return $this
     */
    public function setAdresseerbaarObjectStatus($adresseerbaar_object_status)
    {
        $this->container['adresseerbaar_object_status'] = $adresseerbaar_object_status;

        return $this;
    }

    /**
     * Gets gebruiksdoelen
     *
     * @return \BAG\Client\Model\Gebruiksdoel[]
     */
    public function getGebruiksdoelen()
    {
        return $this->container['gebruiksdoelen'];
    }

    /**
     * Sets gebruiksdoelen
     *
     * @param \BAG\Client\Model\Gebruiksdoel[] $gebruiksdoelen gebruiksdoelen
     *
     * @return $this
     */
    public function setGebruiksdoelen($gebruiksdoelen)
    {
        $this->container['gebruiksdoelen'] = $gebruiksdoelen;

        return $this;
    }

    /**
     * Gets oppervlakte
     *
     * @return int
     */
    public function getOppervlakte()
    {
        return $this->container['oppervlakte'];
    }

    /**
     * Sets oppervlakte
     *
     * @param int $oppervlakte oppervlakte
     *
     * @return $this
     */
    public function setOppervlakte($oppervlakte)
    {
        $this->container['oppervlakte'] = $oppervlakte;

        return $this;
    }

    /**
     * Gets oorspronkelijk_bouwjaar
     *
     * @return string[]
     */
    public function getOorspronkelijkBouwjaar()
    {
        return $this->container['oorspronkelijk_bouwjaar'];
    }

    /**
     * Sets oorspronkelijk_bouwjaar
     *
     * @param string[] $oorspronkelijk_bouwjaar oorspronkelijk_bouwjaar
     *
     * @return $this
     */
    public function setOorspronkelijkBouwjaar($oorspronkelijk_bouwjaar)
    {
        $this->container['oorspronkelijk_bouwjaar'] = $oorspronkelijk_bouwjaar;

        return $this;
    }

    /**
     * Gets geconstateerd
     *
     * @return \BAG\Client\Model\AdresUitgebreidGeconstateerd
     */
    public function getGeconstateerd()
    {
        return $this->container['geconstateerd'];
    }

    /**
     * Sets geconstateerd
     *
     * @param \BAG\Client\Model\AdresUitgebreidGeconstateerd $geconstateerd geconstateerd
     *
     * @return $this
     */
    public function setGeconstateerd($geconstateerd)
    {
        $this->container['geconstateerd'] = $geconstateerd;

        return $this;
    }

    /**
     * Gets inonderzoek
     *
     * @return \BAG\Client\Model\AdresUitgebreidInOnderzoek
     */
    public function getInonderzoek()
    {
        return $this->container['inonderzoek'];
    }

    /**
     * Sets inonderzoek
     *
     * @param \BAG\Client\Model\AdresUitgebreidInOnderzoek $inonderzoek inonderzoek
     *
     * @return $this
     */
    public function setInonderzoek($inonderzoek)
    {
        $this->container['inonderzoek'] = $inonderzoek;

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
