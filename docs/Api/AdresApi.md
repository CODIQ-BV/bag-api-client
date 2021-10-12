# BAGClient\AdresApi

All URIs are relative to *https://api.bag.acceptatie.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bevraagAdressen**](AdresApi.md#bevraagadressen) | **GET** /adressen | Bevragen van huidige adressen met een (combinatie van) zoek parameters.
[**bevraagAdressenMetNumId**](AdresApi.md#bevraagadressenmetnumid) | **GET** /adressen/{nummeraanduidingIdentificatie} | Bevragen van een huidig adres met de identificatie van een nummeraanduiding.
[**zoek**](AdresApi.md#zoek) | **GET** /adressen/zoek | Zoeken van huidige adressen

# **bevraagAdressen**
> \BAGClient\BAGClient\AdresIOHalCollection bevraagAdressen($zoekresultaat_identificatie, $postcode, $huisnummer, $huisnummertoevoeging, $huisletter, $exacte_match, $adresseerbaar_object_identificatie, $woonplaats_naam, $openbare_ruimte_naam, $pand_identificatie, $expand, $page, $page_size)

Bevragen van huidige adressen met een (combinatie van) zoek parameters.

De volgende bevragingen worden ondersteund: <ol>   <li>     Bevragen van één huidig adres met de identificatie van een zoekresultaat verkregen via /adressen/zoek.   </li>   <li>     Bevragen van één of meer huidige adressen met postcode, huisnummer en optioneel huisnummertoevoeging en huisletter.     Parameter exacteMatch kan worden toegepast.   </li>   <li>     Bevragen van één of meer huidige adressen met de identificatie van een adresseerbaar object.   </li>   <li>     Bevragen van één of meer huidige adressen met woonplaats naam, openbare ruimte naam, huisnummer en optioneel huisnummertoevoeging en/of huisletter.     Parameter exacteMatch kan worden toegepast.   </li>   <li>     Bevragen van één of meer huidige adressen met de identificatie van een pand.     Expand wordt niet ondersteund.   </li> </ol> Bij de bovenstaande bevragingen kunnen eveneens de volgende parameters worden gebruikt (tenzij anders vermeld):<br/> Als expand=nummeraanduiding, openbareRuimte, woonplaats (of een combinatie daarvan) of als expand=true, dan worden de gevraagde of alle gerelateerde resources als geneste resource geleverd. Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAGClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAGClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAGClient\BAG\AdresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zoekresultaat_identificatie = "zoekresultaat_identificatie_example"; // string | De identificatie van een gekozen zoekresultaat uit de zoekResultatenHalCollectie verkregen bij een GET /adressen/zoek
$postcode = "postcode_example"; // string | Postcode behorende bij een nummeraanduiding.
$huisnummer = 56; // int | Huisnummer behorende bij een nummeraanduiding.
$huisnummertoevoeging = "huisnummertoevoeging_example"; // string | Huisnummertoevoeging behorende bij een nummeraanduiding.
$huisletter = "huisletter_example"; // string | Huisletter behorende bij een nummeraanduiding.
$exacte_match = false; // bool | \"Een indicatie of de resultaten van een zoekoperatie exact overeen moeten komen met de zoekcriteria, zie [functionele specificatie exacte match](https://github.com/lvbag/BAG-API/blob/master/Features/exacte_match.feature).\"
$adresseerbaar_object_identificatie = "adresseerbaar_object_identificatie_example"; // string | Identificatie van een adresseerbaar object (ligplaats, standplaats of verblijfsobject) uit de BAG.
$woonplaats_naam = "woonplaats_naam_example"; // string | Naam van een woonplaats.
$openbare_ruimte_naam = "openbare_ruimte_naam_example"; // string | Naam van een openbare ruimte.
$pand_identificatie = "pand_identificatie_example"; // string | Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten.
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina

try {
    $result = $apiInstance->bevraagAdressen($zoekresultaat_identificatie, $postcode, $huisnummer, $huisnummertoevoeging, $huisletter, $exacte_match, $adresseerbaar_object_identificatie, $woonplaats_naam, $openbare_ruimte_naam, $pand_identificatie, $expand, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresApi->bevraagAdressen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zoekresultaat_identificatie** | **string**| De identificatie van een gekozen zoekresultaat uit de zoekResultatenHalCollectie verkregen bij een GET /adressen/zoek | [optional]
 **postcode** | **string**| Postcode behorende bij een nummeraanduiding. | [optional]
 **huisnummer** | **int**| Huisnummer behorende bij een nummeraanduiding. | [optional]
 **huisnummertoevoeging** | **string**| Huisnummertoevoeging behorende bij een nummeraanduiding. | [optional]
 **huisletter** | **string**| Huisletter behorende bij een nummeraanduiding. | [optional]
 **exacte_match** | **bool**| \&quot;Een indicatie of de resultaten van een zoekoperatie exact overeen moeten komen met de zoekcriteria, zie [functionele specificatie exacte match](https://github.com/lvbag/BAG-API/blob/master/Features/exacte_match.feature).\&quot; | [optional] [default to false]
 **adresseerbaar_object_identificatie** | **string**| Identificatie van een adresseerbaar object (ligplaats, standplaats of verblijfsobject) uit de BAG. | [optional]
 **woonplaats_naam** | **string**| Naam van een woonplaats. | [optional]
 **openbare_ruimte_naam** | **string**| Naam van een openbare ruimte. | [optional]
 **pand_identificatie** | **string**| Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten. | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]

### Return type

[**\BAGClient\BAGClient\AdresIOHalCollection**](../Model/AdresIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bevraagAdressenMetNumId**
> \BAGClient\BAGClient\AdresIOHal bevraagAdressenMetNumId($nummeraanduiding_identificatie, $expand)

Bevragen van een huidig adres met de identificatie van een nummeraanduiding.

Bevragen van een huidig adres met de identificatie van een nummeraanduiding. Als expand=nummeraanduiding, openbareRuimte, woonplaats (of een combinatie daarvan) of als expand=true, dan worden de gevraagde of alle gerelateerde resources als geneste resource geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAGClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAGClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAGClient\BAG\AdresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nummeraanduiding_identificatie = "nummeraanduiding_identificatie_example"; // string | Identificatie van een nummeraanduiding uit de BAG. Deze is 16 cijfers lang.
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.

try {
    $result = $apiInstance->bevraagAdressenMetNumId($nummeraanduiding_identificatie, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresApi->bevraagAdressenMetNumId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nummeraanduiding_identificatie** | **string**| Identificatie van een nummeraanduiding uit de BAG. Deze is 16 cijfers lang. |
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]

### Return type

[**\BAGClient\BAGClient\AdresIOHal**](../Model/AdresIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoek**
> \BAGClient\BAGClient\ZoekResultaatHalCollection zoek($zoek, $page, $page_size)

Zoeken van huidige adressen

Zoeken van huidige adressen met postcode, woonplaats, straatnaam, huisnummer, huisletter, huisnummertoevoeging.  Een adres kan worden gevonden door de zoekresultaatidentificatie uit het antwoord als parameter mee te geven in get /adressen. Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAGClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAGClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAGClient\BAG\AdresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zoek = "zoek_example"; // string | Zoekterm op postcode, woonplaats, straatnaam, huisnummer, huisletter, huisnummertoevoeging
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina

try {
    $result = $apiInstance->zoek($zoek, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresApi->zoek: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zoek** | **string**| Zoekterm op postcode, woonplaats, straatnaam, huisnummer, huisletter, huisnummertoevoeging |
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]

### Return type

[**\BAGClient\BAGClient\ZoekResultaatHalCollection**](../Model/ZoekResultaatHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

