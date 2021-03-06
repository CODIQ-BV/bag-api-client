# Swagger\Client\VerblijfsobjectApi

All URIs are relative to *https://api.bag.acceptatie.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verblijfsobjectIdentificatie**](VerblijfsobjectApi.md#verblijfsobjectidentificatie) | **GET** /verblijfsobjecten/{identificatie} | bevragen 1 verblijfsobject met de identificatie van een verblijfsobject.
[**verblijfsobjectIdentificatieVoorkomen**](VerblijfsobjectApi.md#verblijfsobjectidentificatievoorkomen) | **GET** /verblijfsobjecten/{identificatie}/{versie}/{timestampRegistratieLv} | bevragen voorkomen van een verblijfsobject, op basis van de identificatie van een verblijfsobject en de identificatie van een voorkomen
[**verblijfsobjectLvcIdentificatie**](VerblijfsobjectApi.md#verblijfsobjectlvcidentificatie) | **GET** /verblijfsobjecten/{identificatie}/lvc | bevragen levenscyclus van een verblijfsobject met de identificatie van een verblijfsobject.
[**zoekVerblijfsobjecten**](VerblijfsobjectApi.md#zoekverblijfsobjecten) | **GET** /verblijfsobjecten | bevragen van alle aan een pand gerelateerde verblijfsobjecten (met paginering).

# **verblijfsobjectIdentificatie**
> \Swagger\Client\Model\VerblijfsobjectIOHal verblijfsobjectIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $expand, $accept_crs)

bevragen 1 verblijfsobject met de identificatie van een verblijfsobject.

Bevragen/raadplegen van één voorkomen van een Verblijfsobject met de identificatie van een verblijfsobject. Als geldigOp en/of beschikbaarOp niet wordt opgegeven, worden de actuele gegevens geleverd. Als expand=heeftAlsHoofdAdres, heeftAlsNevenAdres, maaktDeelUitVan of true, dan worden de gevraagde of alle gerelateerde objecten als geneste resource geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerblijfsobjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = "identificatie_example"; // string | Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd `YYYY-MM-DDThh:mm:ss.sss' Hierin kunnen de seconden ':ss' en milliseconden '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde ':00' respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3 cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->verblijfsobjectIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $expand, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerblijfsobjectApi->verblijfsobjectIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | **string**| Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27; Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27; respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3 cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\Swagger\Client\Model\VerblijfsobjectIOHal**](../Model/VerblijfsobjectIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verblijfsobjectIdentificatieVoorkomen**
> \Swagger\Client\Model\VerblijfsobjectIOHal verblijfsobjectIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $accept_crs)

bevragen voorkomen van een verblijfsobject, op basis van de identificatie van een verblijfsobject en de identificatie van een voorkomen

Bevragen/raadplegen van een voorkomen van een verblijfsobject, met de identificatie van een verblijfsobject en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerblijfsobjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = "identificatie_example"; // string | Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten.
$versie = 56; // int | De versie van een voorkomen van een object
$timestamp_registratie_lv = "timestamp_registratie_lv_example"; // string | Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->verblijfsobjectIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerblijfsobjectApi->verblijfsobjectIdentificatieVoorkomen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | **string**| Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten. |
 **versie** | **int**| De versie van een voorkomen van een object |
 **timestamp_registratie_lv** | **string**| Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG |
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\Swagger\Client\Model\VerblijfsobjectIOHal**](../Model/VerblijfsobjectIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verblijfsobjectLvcIdentificatie**
> \Swagger\Client\Model\VerblijfsobjectIOLvcHalCollection verblijfsobjectLvcIdentificatie($identificatie, $gehele_lvc, $accept_crs)

bevragen levenscyclus van een verblijfsobject met de identificatie van een verblijfsobject.

Bevragen/raadplegen van de levenscyclus van een Verblijfsobject met de identificatie van de verblijfsobject.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerblijfsobjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = "identificatie_example"; // string | Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten.
$gehele_lvc = false; // bool | Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). Voor een toelichting zie de [Praktijkhandleiding BAG](https://imbag.github.io/praktijkhandleiding/artikelen/wat-is-het-verschil-tussen-actieve-voorkomens-actuele-voorkomens-en-huidige-voorkomens).
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->verblijfsobjectLvcIdentificatie($identificatie, $gehele_lvc, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerblijfsobjectApi->verblijfsobjectLvcIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | **string**| Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten. |
 **gehele_lvc** | **bool**| Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). Voor een toelichting zie de [Praktijkhandleiding BAG](https://imbag.github.io/praktijkhandleiding/artikelen/wat-is-het-verschil-tussen-actieve-voorkomens-actuele-voorkomens-en-huidige-voorkomens). | [optional] [default to false]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\Swagger\Client\Model\VerblijfsobjectIOLvcHalCollection**](../Model/VerblijfsobjectIOLvcHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekVerblijfsobjecten**
> \Swagger\Client\Model\VerblijfsobjectIOHalCollection zoekVerblijfsobjecten($pand_identificatie, $huidig, $geldig_op, $beschikbaar_op, $page, $page_size, $accept_crs)

bevragen van alle aan een pand gerelateerde verblijfsobjecten (met paginering).

Bevragen/zoeken van alle aan een pand gerelateerde verblijfsobjecten, met een pand identificatie en met paginering. Parameter huidig kan worden toegepast. Als geldigOp en/of beschikbaarOp niet wordt opgegeven, worden de actuele gegevens geleverd. Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerblijfsobjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pand_identificatie = "pand_identificatie_example"; // string | Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd `YYYY-MM-DDThh:mm:ss.sss' Hierin kunnen de seconden ':ss' en milliseconden '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde ':00' respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3 cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->zoekVerblijfsobjecten($pand_identificatie, $huidig, $geldig_op, $beschikbaar_op, $page, $page_size, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerblijfsobjectApi->zoekVerblijfsobjecten: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pand_identificatie** | **string**| Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten. |
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27; Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27; respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3 cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\Swagger\Client\Model\VerblijfsobjectIOHalCollection**](../Model/VerblijfsobjectIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

