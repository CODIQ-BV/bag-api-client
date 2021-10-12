<?php
/**
 * Adres
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
 * Adres Class Doc Comment
 *
 * @category Class
 * @description Door het bevoegde gemeentelijke orgaan aan een verblijfsobject, een standplaats of een ligplaats toegekende benaming, bestaande uit een combinatie van de naam van een openbare ruimte, een nummeraanduiding en de naam van een woonplaats.
 * @package  BAG\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Adres implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Adres';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'openbare_ruimte_naam' => 'string',
'korte_naam' => 'string',
'huisnummer' => 'int',
'huisletter' => 'string',
'huisnummertoevoeging' => 'string',
'postcode' => 'string',
'woonplaats_naam' => 'string',
'nummeraanduiding_identificatie' => '\BAG\Client\Model\NummeraanduidingIdentificatie',
'openbare_ruimte_identificatie' => '\BAG\Client\Model\OpenbareRuimteIdentificatie',
'woonplaats_identificatie' => '\BAG\Client\Model\WoonplaatsIdentificatie',
'adresseerbaar_object_identificatie' => '\BAG\Client\Model\AdresseerbaarObjectIdentificatie',
'pand_identificaties' => '\BAG\Client\Model\PandIdentificatie[]',
'indicatie_nevenadres' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'openbare_ruimte_naam' => null,
'korte_naam' => null,
'huisnummer' => null,
'huisletter' => null,
'huisnummertoevoeging' => null,
'postcode' => null,
'woonplaats_naam' => null,
'nummeraanduiding_identificatie' => null,
'openbare_ruimte_identificatie' => null,
'woonplaats_identificatie' => null,
'adresseerbaar_object_identificatie' => null,
'pand_identificaties' => null,
'indicatie_nevenadres' => null    ];

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
        'openbare_ruimte_naam' => 'openbareRuimteNaam',
'korte_naam' => 'korteNaam',
'huisnummer' => 'huisnummer',
'huisletter' => 'huisletter',
'huisnummertoevoeging' => 'huisnummertoevoeging',
'postcode' => 'postcode',
'woonplaats_naam' => 'woonplaatsNaam',
'nummeraanduiding_identificatie' => 'nummeraanduidingIdentificatie',
'openbare_ruimte_identificatie' => 'openbareRuimteIdentificatie',
'woonplaats_identificatie' => 'woonplaatsIdentificatie',
'adresseerbaar_object_identificatie' => 'adresseerbaarObjectIdentificatie',
'pand_identificaties' => 'pandIdentificaties',
'indicatie_nevenadres' => 'indicatieNevenadres'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'openbare_ruimte_naam' => 'setOpenbareRuimteNaam',
'korte_naam' => 'setKorteNaam',
'huisnummer' => 'setHuisnummer',
'huisletter' => 'setHuisletter',
'huisnummertoevoeging' => 'setHuisnummertoevoeging',
'postcode' => 'setPostcode',
'woonplaats_naam' => 'setWoonplaatsNaam',
'nummeraanduiding_identificatie' => 'setNummeraanduidingIdentificatie',
'openbare_ruimte_identificatie' => 'setOpenbareRuimteIdentificatie',
'woonplaats_identificatie' => 'setWoonplaatsIdentificatie',
'adresseerbaar_object_identificatie' => 'setAdresseerbaarObjectIdentificatie',
'pand_identificaties' => 'setPandIdentificaties',
'indicatie_nevenadres' => 'setIndicatieNevenadres'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'openbare_ruimte_naam' => 'getOpenbareRuimteNaam',
'korte_naam' => 'getKorteNaam',
'huisnummer' => 'getHuisnummer',
'huisletter' => 'getHuisletter',
'huisnummertoevoeging' => 'getHuisnummertoevoeging',
'postcode' => 'getPostcode',
'woonplaats_naam' => 'getWoonplaatsNaam',
'nummeraanduiding_identificatie' => 'getNummeraanduidingIdentificatie',
'openbare_ruimte_identificatie' => 'getOpenbareRuimteIdentificatie',
'woonplaats_identificatie' => 'getWoonplaatsIdentificatie',
'adresseerbaar_object_identificatie' => 'getAdresseerbaarObjectIdentificatie',
'pand_identificaties' => 'getPandIdentificaties',
'indicatie_nevenadres' => 'getIndicatieNevenadres'    ];

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
        $this->container['openbare_ruimte_naam'] = isset($data['openbare_ruimte_naam']) ? $data['openbare_ruimte_naam'] : null;
        $this->container['korte_naam'] = isset($data['korte_naam']) ? $data['korte_naam'] : null;
        $this->container['huisnummer'] = isset($data['huisnummer']) ? $data['huisnummer'] : null;
        $this->container['huisletter'] = isset($data['huisletter']) ? $data['huisletter'] : null;
        $this->container['huisnummertoevoeging'] = isset($data['huisnummertoevoeging']) ? $data['huisnummertoevoeging'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['woonplaats_naam'] = isset($data['woonplaats_naam']) ? $data['woonplaats_naam'] : null;
        $this->container['nummeraanduiding_identificatie'] = isset($data['nummeraanduiding_identificatie']) ? $data['nummeraanduiding_identificatie'] : null;
        $this->container['openbare_ruimte_identificatie'] = isset($data['openbare_ruimte_identificatie']) ? $data['openbare_ruimte_identificatie'] : null;
        $this->container['woonplaats_identificatie'] = isset($data['woonplaats_identificatie']) ? $data['woonplaats_identificatie'] : null;
        $this->container['adresseerbaar_object_identificatie'] = isset($data['adresseerbaar_object_identificatie']) ? $data['adresseerbaar_object_identificatie'] : null;
        $this->container['pand_identificaties'] = isset($data['pand_identificaties']) ? $data['pand_identificaties'] : null;
        $this->container['indicatie_nevenadres'] = isset($data['indicatie_nevenadres']) ? $data['indicatie_nevenadres'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['openbare_ruimte_naam'] === null) {
            $invalidProperties[] = "'openbare_ruimte_naam' can't be null";
        }
        if ($this->container['huisnummer'] === null) {
            $invalidProperties[] = "'huisnummer' can't be null";
        }
        if ($this->container['woonplaats_naam'] === null) {
            $invalidProperties[] = "'woonplaats_naam' can't be null";
        }
        if ($this->container['nummeraanduiding_identificatie'] === null) {
            $invalidProperties[] = "'nummeraanduiding_identificatie' can't be null";
        }
        if ($this->container['openbare_ruimte_identificatie'] === null) {
            $invalidProperties[] = "'openbare_ruimte_identificatie' can't be null";
        }
        if ($this->container['woonplaats_identificatie'] === null) {
            $invalidProperties[] = "'woonplaats_identificatie' can't be null";
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
     * Gets openbare_ruimte_naam
     *
     * @return string
     */
    public function getOpenbareRuimteNaam()
    {
        return $this->container['openbare_ruimte_naam'];
    }

    /**
     * Sets openbare_ruimte_naam
     *
     * @param string $openbare_ruimte_naam Een naam die aan een openbare ruimte is toegekend in een daartoe strekkend formeel gemeentelijk besluit.
     *
     * @return $this
     */
    public function setOpenbareRuimteNaam($openbare_ruimte_naam)
    {
        $this->container['openbare_ruimte_naam'] = $openbare_ruimte_naam;

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
     * Gets huisnummer
     *
     * @return int
     */
    public function getHuisnummer()
    {
        return $this->container['huisnummer'];
    }

    /**
     * Sets huisnummer
     *
     * @param int $huisnummer Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende nummering.
     *
     * @return $this
     */
    public function setHuisnummer($huisnummer)
    {
        $this->container['huisnummer'] = $huisnummer;

        return $this;
    }

    /**
     * Gets huisletter
     *
     * @return string
     */
    public function getHuisletter()
    {
        return $this->container['huisletter'];
    }

    /**
     * Sets huisletter
     *
     * @param string $huisletter Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende toevoeging aan een huisnummer in de vorm van een alfanumeriek teken.
     *
     * @return $this
     */
    public function setHuisletter($huisletter)
    {
        $this->container['huisletter'] = $huisletter;

        return $this;
    }

    /**
     * Gets huisnummertoevoeging
     *
     * @return string
     */
    public function getHuisnummertoevoeging()
    {
        return $this->container['huisnummertoevoeging'];
    }

    /**
     * Sets huisnummertoevoeging
     *
     * @param string $huisnummertoevoeging Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende nadere toevoeging aan een huisnummer of een combinatie van huisnummer en huisletter.
     *
     * @return $this
     */
    public function setHuisnummertoevoeging($huisnummertoevoeging)
    {
        $this->container['huisnummertoevoeging'] = $huisnummertoevoeging;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode De door PostNL vastgestelde code behorende bij een bepaalde combinatie van een straatnaam en een huisnummer.
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets woonplaats_naam
     *
     * @return string
     */
    public function getWoonplaatsNaam()
    {
        return $this->container['woonplaats_naam'];
    }

    /**
     * Sets woonplaats_naam
     *
     * @param string $woonplaats_naam De benaming van een door het gemeentebestuur aangewezen woonplaats.
     *
     * @return $this
     */
    public function setWoonplaatsNaam($woonplaats_naam)
    {
        $this->container['woonplaats_naam'] = $woonplaats_naam;

        return $this;
    }

    /**
     * Gets nummeraanduiding_identificatie
     *
     * @return \BAG\Client\Model\NummeraanduidingIdentificatie
     */
    public function getNummeraanduidingIdentificatie()
    {
        return $this->container['nummeraanduiding_identificatie'];
    }

    /**
     * Sets nummeraanduiding_identificatie
     *
     * @param \BAG\Client\Model\NummeraanduidingIdentificatie $nummeraanduiding_identificatie nummeraanduiding_identificatie
     *
     * @return $this
     */
    public function setNummeraanduidingIdentificatie($nummeraanduiding_identificatie)
    {
        $this->container['nummeraanduiding_identificatie'] = $nummeraanduiding_identificatie;

        return $this;
    }

    /**
     * Gets openbare_ruimte_identificatie
     *
     * @return \BAG\Client\Model\OpenbareRuimteIdentificatie
     */
    public function getOpenbareRuimteIdentificatie()
    {
        return $this->container['openbare_ruimte_identificatie'];
    }

    /**
     * Sets openbare_ruimte_identificatie
     *
     * @param \BAG\Client\Model\OpenbareRuimteIdentificatie $openbare_ruimte_identificatie openbare_ruimte_identificatie
     *
     * @return $this
     */
    public function setOpenbareRuimteIdentificatie($openbare_ruimte_identificatie)
    {
        $this->container['openbare_ruimte_identificatie'] = $openbare_ruimte_identificatie;

        return $this;
    }

    /**
     * Gets woonplaats_identificatie
     *
     * @return \BAG\Client\Model\WoonplaatsIdentificatie
     */
    public function getWoonplaatsIdentificatie()
    {
        return $this->container['woonplaats_identificatie'];
    }

    /**
     * Sets woonplaats_identificatie
     *
     * @param \BAG\Client\Model\WoonplaatsIdentificatie $woonplaats_identificatie woonplaats_identificatie
     *
     * @return $this
     */
    public function setWoonplaatsIdentificatie($woonplaats_identificatie)
    {
        $this->container['woonplaats_identificatie'] = $woonplaats_identificatie;

        return $this;
    }

    /**
     * Gets adresseerbaar_object_identificatie
     *
     * @return \BAG\Client\Model\AdresseerbaarObjectIdentificatie
     */
    public function getAdresseerbaarObjectIdentificatie()
    {
        return $this->container['adresseerbaar_object_identificatie'];
    }

    /**
     * Sets adresseerbaar_object_identificatie
     *
     * @param \BAG\Client\Model\AdresseerbaarObjectIdentificatie $adresseerbaar_object_identificatie adresseerbaar_object_identificatie
     *
     * @return $this
     */
    public function setAdresseerbaarObjectIdentificatie($adresseerbaar_object_identificatie)
    {
        $this->container['adresseerbaar_object_identificatie'] = $adresseerbaar_object_identificatie;

        return $this;
    }

    /**
     * Gets pand_identificaties
     *
     * @return \BAG\Client\Model\PandIdentificatie[]
     */
    public function getPandIdentificaties()
    {
        return $this->container['pand_identificaties'];
    }

    /**
     * Sets pand_identificaties
     *
     * @param \BAG\Client\Model\PandIdentificatie[] $pand_identificaties Identificatie(s) van het pand of de panden waar het verblijfsobject deel van uit maakt.
     *
     * @return $this
     */
    public function setPandIdentificaties($pand_identificaties)
    {
        $this->container['pand_identificaties'] = $pand_identificaties;

        return $this;
    }

    /**
     * Gets indicatie_nevenadres
     *
     * @return bool
     */
    public function getIndicatieNevenadres()
    {
        return $this->container['indicatie_nevenadres'];
    }

    /**
     * Sets indicatie_nevenadres
     *
     * @param bool $indicatie_nevenadres Indicatie dat dit adres een nevenadres is van een adresseerbaar object. Het adres is een hoofdadres als deze indicatie niet wordt meegeleverd.
     *
     * @return $this
     */
    public function setIndicatieNevenadres($indicatie_nevenadres)
    {
        $this->container['indicatie_nevenadres'] = $indicatie_nevenadres;

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
