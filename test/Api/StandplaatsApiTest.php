<?php
/**
 * StandplaatsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  BAG
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
 * Please update the test case below to test the endpoint.
 */

namespace BAG;

use BAG\Configuration;
use BAG\ApiException;
use BAG\ObjectSerializer;

/**
 * StandplaatsApiTest Class Doc Comment
 *
 * @category Class
 * @package  BAG
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandplaatsApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for standplaatsGeometrie
     *
     * bevragen van een standplaats met een geometrische locatie..
     *
     */
    public function testStandplaatsGeometrie()
    {
    }

    /**
     * Test case for standplaatsIdentificatie
     *
     * bevragen van een standplaats met de identificatie van een standplaats..
     *
     */
    public function testStandplaatsIdentificatie()
    {
    }

    /**
     * Test case for standplaatsIdentificatieVoorkomen
     *
     * bevragen van een voorkomen van een standplaats met de identificatie van een standplaats en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG..
     *
     */
    public function testStandplaatsIdentificatieVoorkomen()
    {
    }

    /**
     * Test case for standplaatsLvcIdentificatie
     *
     * bevragen levenscyclus van een standplaats met de identificatie van een standplaats..
     *
     */
    public function testStandplaatsLvcIdentificatie()
    {
    }
}
