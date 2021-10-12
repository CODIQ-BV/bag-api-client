<?php
/**
 * StatusVerblijfsobject
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

namespace BAGClient\BAGClient;
use \BAGClient\ObjectSerializer;

/**
 * StatusVerblijfsobject Class Doc Comment
 *
 * @category Class
 * @package  BAGClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatusVerblijfsobject
{
    /**
     * Possible values of this enum
     */
    const VERBLIJFSOBJECT_GEVORMD = 'Verblijfsobject gevormd';
const NIET_GEREALISEERD_VERBLIJFSOBJECT = 'Niet gerealiseerd verblijfsobject';
const VERBLIJFSOBJECT_IN_GEBRUIK__NIET_INGEMETEN = 'Verblijfsobject in gebruik (niet ingemeten)';
const VERBLIJFSOBJECT_IN_GEBRUIK = 'Verblijfsobject in gebruik';
const VERBOUWING_VERBLIJFSOBJECT = 'Verbouwing verblijfsobject';
const VERBLIJFSOBJECT_INGETROKKEN = 'Verblijfsobject ingetrokken';
const VERBLIJFSOBJECT_BUITEN_GEBRUIK = 'Verblijfsobject buiten gebruik';
const VERBLIJFSOBJECT_TEN_ONRECHTE_OPGEVOERD = 'Verblijfsobject ten onrechte opgevoerd';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VERBLIJFSOBJECT_GEVORMD,
self::NIET_GEREALISEERD_VERBLIJFSOBJECT,
self::VERBLIJFSOBJECT_IN_GEBRUIK__NIET_INGEMETEN,
self::VERBLIJFSOBJECT_IN_GEBRUIK,
self::VERBOUWING_VERBLIJFSOBJECT,
self::VERBLIJFSOBJECT_INGETROKKEN,
self::VERBLIJFSOBJECT_BUITEN_GEBRUIK,
self::VERBLIJFSOBJECT_TEN_ONRECHTE_OPGEVOERD,        ];
    }
}
