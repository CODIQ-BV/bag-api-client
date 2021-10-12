# BAG\Client\PandApi

All URIs are relative to *https://api.bag.acceptatie.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pandGeometrie**](PandApi.md#pandgeometrie) | **POST** /panden | bevragen panden met een geometrische locatie.
[**pandIdentificatie**](PandApi.md#pandidentificatie) | **GET** /panden/{identificatie} | bevragen van een pand met de identificatie van een pand.
[**pandIdentificatieVoorkomen**](PandApi.md#pandidentificatievoorkomen) | **GET** /panden/{identificatie}/{versie}/{timestampRegistratieLv} | bevragen voorkomen van een pand met de identificatie van een pand en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.
[**pandLvcIdentificatie**](PandApi.md#pandlvcidentificatie) | **GET** /panden/{identificatie}/lvc | bevragen levenscyclus van een pand met de identificatie van een pand.

# **pandGeometrie**
> \BAG\Client\Model\PandIOHalCollection pandGeometrie($body, $content_crs, $accept_crs, $geldig_op, $beschikbaar_op, $huidig)

bevragen panden met een geometrische locatie.

Bevragen/raadplegen van een voorkomen van één of meer panden met de geometrische locatie van het pand. Parameter huidig kan worden toegepast. Als geldigOp en/of beschikbaarOp niet wordt opgegeven, worden de actuele gegevens geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAG\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAG\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAG\Client\Api\PandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BAG\Client\Model\Point(); // \BAG\Client\Model\Point | Geometrisch punt waarop de panden bepaald moeten worden.
$content_crs = "content_crs_example"; // string | CRS van de meegegeven geometrie.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd `YYYY-MM-DDThh:mm:ss.sss' Hierin kunnen de seconden ':ss' en milliseconden '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde ':00' respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3 cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.

try {
    $result = $apiInstance->pandGeometrie($body, $content_crs, $accept_crs, $geldig_op, $beschikbaar_op, $huidig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->pandGeometrie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BAG\Client\Model\Point**](../Model/Point.md)| Geometrisch punt waarop de panden bepaald moeten worden. |
 **content_crs** | **string**| CRS van de meegegeven geometrie. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27; Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27; respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3 cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]

### Return type

[**\BAG\Client\Model\PandIOHalCollection**](../Model/PandIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pandIdentificatie**
> \BAG\Client\Model\PandIOHal pandIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $accept_crs)

bevragen van een pand met de identificatie van een pand.

Bevragen/raadplegen van een voorkomen van een pand met de identificatie van het pand. Als geldigOp en/of beschikbaarOp niet wordt opgegeven, worden de actuele gegevens geleverd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAG\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAG\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAG\Client\Api\PandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = "identificatie_example"; // string | Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd `YYYY-MM-DDThh:mm:ss.sss' Hierin kunnen de seconden ':ss' en milliseconden '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde ':00' respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3 cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->pandIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->pandIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | **string**| Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27; Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27; respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3 cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameters komen uit de API strategie, het hoofdstuk tijdreizen. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\BAG\Client\Model\PandIOHal**](../Model/PandIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pandIdentificatieVoorkomen**
> \BAG\Client\Model\PandIOHal pandIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $accept_crs)

bevragen voorkomen van een pand met de identificatie van een pand en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

Bevragen/raadplegen van een voorkomen van een pand met de identificatie van een pand en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAG\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAG\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAG\Client\Api\PandApi(
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
    $result = $apiInstance->pandIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->pandIdentificatieVoorkomen: ', $e->getMessage(), PHP_EOL;
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

[**\BAG\Client\Model\PandIOHal**](../Model/PandIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pandLvcIdentificatie**
> \BAG\Client\Model\PandIOLvcHalCollection pandLvcIdentificatie($identificatie, $gehele_lvc, $accept_crs)

bevragen levenscyclus van een pand met de identificatie van een pand.

Bevragen/raadplegen van de levenscyclus van een pand met de identificatie van een pand.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = BAG\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BAG\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new BAG\Client\Api\PandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = "identificatie_example"; // string | Identificatie van een object uit de BAG. Deze is 4 lang bij een woonplaats en 16 lang bij de andere objecten.
$gehele_lvc = false; // bool | Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). Voor een toelichting zie de [Praktijkhandleiding BAG](https://imbag.github.io/praktijkhandleiding/artikelen/wat-is-het-verschil-tussen-actieve-voorkomens-actuele-voorkomens-en-huidige-voorkomens).
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->pandLvcIdentificatie($identificatie, $gehele_lvc, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->pandLvcIdentificatie: ', $e->getMessage(), PHP_EOL;
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

[**\BAG\Client\Model\PandIOLvcHalCollection**](../Model/PandIOLvcHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

