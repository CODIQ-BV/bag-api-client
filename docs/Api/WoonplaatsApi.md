# BAGClient\WoonplaatsApi

All URIs are relative to *https://api.bag.acceptatie.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**woonplaatsGeometrie**](WoonplaatsApi.md#woonplaatsgeometrie) | **POST** /woonplaatsen | bevragen van een woonplaats met een geometrische locatie.
[**woonplaatsIdentificatie**](WoonplaatsApi.md#woonplaatsidentificatie) | **GET** /woonplaatsen/{identificatie} | bevragen van een woonplaats met de identificatie van een woonplaats.
[**woonplaatsIdentificatieVoorkomen**](WoonplaatsApi.md#woonplaatsidentificatievoorkomen) | **GET** /woonplaatsen/{identificatie}/{versie}/{timestampRegistratieLv} | bevragen van een voorkomen van een woonplaats met de identificatie van een woonplaats en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.
[**woonplaatsLvcIdentificatie**](WoonplaatsApi.md#woonplaatslvcidentificatie) | **GET** /woonplaatsen/{identificatie}/lvc | bevragen van de levenscyclus van een woonplaats met de identificatie van een woonplaats.
[**woonplaatsNaam**](WoonplaatsApi.md#woonplaatsnaam) | **GET** /woonplaatsen | bevragen van één of meer woonplaatsen met een woonplaatsnaam.

# **woonplaatsGeometrie**
> \BAGClient\BAGClient\WoonplaatsIOHalCollection woonplaatsGeometrie($body, $content_crs, $accept_crs, $geldig_op, $beschikbaar_op, $huidig, $expand)

bevragen van een woonplaats met een geometrische locatie.

Bevragen/raadplegen van een voorkomen van een Woonplaats met een geometrische locatie. Parameter huidig kan worden toegepast. Als geldigOp en/of beschikbaarOp niet wordt opgegeven, worden de actuele gegevens geleverd.  Als expand=bronhouders, geometrie of true dan worden de gevraagde of alle gerelateerde objecten als geneste resource geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAGClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAGClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAGClient\BAG\WoonplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BAGClient\BAGClient\Point(); // \BAGClient\BAGClient\Point | Geometrisch punt waarop de woonplaatsen bepaald moeten worden.
$content_crs = "content_crs_example"; // string | CRS van de meegegeven geometrie.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum 'YYYY-MM-DD' Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd `YYYY-MM-DDThh:mm:ss.sss' Hierin kunnen de seconden ':ss' en milliseconden '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde ':00' respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3 cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.

try {
    $result = $apiInstance->woonplaatsGeometrie($body, $content_crs, $accept_crs, $geldig_op, $beschikbaar_op, $huidig, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WoonplaatsApi->woonplaatsGeometrie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BAGClient\BAGClient\Point**](../Model/Point.md)| Geometrisch punt waarop de woonplaatsen bepaald moeten worden. |
 **content_crs** | **string**| CRS van de meegegeven geometrie. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x27;YYYY-MM-DD&#x27; Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27; Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27; respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3 cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]

### Return type

[**\BAGClient\BAGClient\WoonplaatsIOHalCollection**](../Model/WoonplaatsIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **woonplaatsIdentificatie**
> \BAGClient\BAGClient\WoonplaatsIOHal woonplaatsIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $expand, $accept_crs)

bevragen van een woonplaats met de identificatie van een woonplaats.

Bevragen/raadplegen van een voorkomen van een Woonplaats met de identificatie van de woonplaats.  Als geldigOp en/of beschikbaarOp niet wordt opgegeven, worden de actuele gegevens geleverd. Als expand=bronhouders, geometrie of true dan worden de gevraagde of alle gerelateerde objecten als geneste resource geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAGClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAGClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAGClient\BAG\WoonplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = "identificatie_example"; // string | De identificatie van een BAG object. Deze is 4 cijfers lang bij een woonplaats.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum 'YYYY-MM-DD' Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd `YYYY-MM-DDThh:mm:ss.sss' Hierin kunnen de seconden ':ss' en milliseconden '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde ':00' respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3 cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->woonplaatsIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $expand, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WoonplaatsApi->woonplaatsIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | **string**| De identificatie van een BAG object. Deze is 4 cijfers lang bij een woonplaats. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x27;YYYY-MM-DD&#x27; Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27; Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27; respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3 cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\BAGClient\BAGClient\WoonplaatsIOHal**](../Model/WoonplaatsIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **woonplaatsIdentificatieVoorkomen**
> \BAGClient\BAGClient\WoonplaatsIOHal woonplaatsIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $expand, $accept_crs)

bevragen van een voorkomen van een woonplaats met de identificatie van een woonplaats en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

Bevragen/raadplegen van een voorkomen van een Woonplaats met de identificatie van een woonplaats en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG. Als expand=bronhouders, geometrie of true dan worden de gevraagde of alle gerelateerde objecten als geneste resource geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAGClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAGClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAGClient\BAG\WoonplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = "identificatie_example"; // string | De identificatie van een BAG object. Deze is 4 cijfers lang bij een woonplaats.
$versie = 56; // int | De versie van een voorkomen van een object
$timestamp_registratie_lv = "timestamp_registratie_lv_example"; // string | Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->woonplaatsIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $expand, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WoonplaatsApi->woonplaatsIdentificatieVoorkomen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | **string**| De identificatie van een BAG object. Deze is 4 cijfers lang bij een woonplaats. |
 **versie** | **int**| De versie van een voorkomen van een object |
 **timestamp_registratie_lv** | **string**| Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG |
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\BAGClient\BAGClient\WoonplaatsIOHal**](../Model/WoonplaatsIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **woonplaatsLvcIdentificatie**
> \BAGClient\BAGClient\WoonplaatsIOLvcHalCollection woonplaatsLvcIdentificatie($identificatie, $gehele_lvc, $expand, $accept_crs)

bevragen van de levenscyclus van een woonplaats met de identificatie van een woonplaats.

Bevragen/raadplegen van de levenscyclus van een Woonplaats met de identificatie van de woonplaats. Als expand=bronhouders, geometrie of true dan worden de gevraagde of alle gerelateerde objecten als geneste resource geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAGClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAGClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAGClient\BAG\WoonplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = "identificatie_example"; // string | De identificatie van een BAG object. Deze is 4 cijfers lang bij een woonplaats.
$gehele_lvc = false; // bool | Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). Voor een toelichting zie de [Praktijkhandleiding BAG](https://imbag.github.io/praktijkhandleiding/artikelen/wat-is-het-verschil-tussen-actieve-voorkomens-actuele-voorkomens-en-huidige-voorkomens).
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->woonplaatsLvcIdentificatie($identificatie, $gehele_lvc, $expand, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WoonplaatsApi->woonplaatsLvcIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | **string**| De identificatie van een BAG object. Deze is 4 cijfers lang bij een woonplaats. |
 **gehele_lvc** | **bool**| Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). Voor een toelichting zie de [Praktijkhandleiding BAG](https://imbag.github.io/praktijkhandleiding/artikelen/wat-is-het-verschil-tussen-actieve-voorkomens-actuele-voorkomens-en-huidige-voorkomens). | [optional] [default to false]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\BAGClient\BAGClient\WoonplaatsIOLvcHalCollection**](../Model/WoonplaatsIOLvcHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **woonplaatsNaam**
> \BAGClient\BAGClient\WoonplaatsIOHalCollection woonplaatsNaam($naam, $geldig_op, $beschikbaar_op, $expand, $accept_crs)

bevragen van één of meer woonplaatsen met een woonplaatsnaam.

Bevragen/raadplegen van één voorkomen van één of meer woonplaatsen met een woonplaatsnaam. Als geldigOp en/of beschikbaarOp niet wordt opgegeven, worden de actuele gegevens geleverd.  Als expand=bronhouders, geometrie of true dan worden de gevraagde of alle gerelateerde objecten als geneste resource geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAGClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAGClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAGClient\BAG\WoonplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$naam = "naam_example"; // string | Naam van een woonplaats object uit de BAG.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum 'YYYY-MM-DD' Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd `YYYY-MM-DDThh:mm:ss.sss' Hierin kunnen de seconden ':ss' en milliseconden '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde ':00' respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3 cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->woonplaatsNaam($naam, $geldig_op, $beschikbaar_op, $expand, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WoonplaatsApi->woonplaatsNaam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **naam** | **string**| Naam van een woonplaats object uit de BAG. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x27;YYYY-MM-DD&#x27; Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27; Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27; respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3 cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\BAGClient\BAGClient\WoonplaatsIOHalCollection**](../Model/WoonplaatsIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

