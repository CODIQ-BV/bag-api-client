# Swagger\Client\AdresUitgebreidApi

All URIs are relative to *https://api.bag.acceptatie.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bevraagAdresUitgebreidMetNumId**](AdresUitgebreidApi.md#bevraagadresuitgebreidmetnumid) | **GET** /adressenuitgebreid/{nummeraanduidingIdentificatie} | Bevragen van de uitgebreide informatie van één huidig adres met de identificatie van een nummeraanduiding.
[**zoekAdresUitgebreid**](AdresUitgebreidApi.md#zoekadresuitgebreid) | **GET** /adressenuitgebreid | Bevragen van de uitgebreide informatie van één of meer huidige adressen op basis van verschillende combinaties van parameters.

# **bevraagAdresUitgebreidMetNumId**
> \Swagger\Client\Model\AdresUitgebreidHal bevraagAdresUitgebreidMetNumId($nummeraanduiding_identificatie, $accept_crs)

Bevragen van de uitgebreide informatie van één huidig adres met de identificatie van een nummeraanduiding.

Bevragen van de uitgebreide informatie van één huidig adres met de identificatie van een nummeraanduiding.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AdresUitgebreidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nummeraanduiding_identificatie = "nummeraanduiding_identificatie_example"; // string | Identificatie van een nummeraanduiding uit de BAG.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->bevraagAdresUitgebreidMetNumId($nummeraanduiding_identificatie, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresUitgebreidApi->bevraagAdresUitgebreidMetNumId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nummeraanduiding_identificatie** | **string**| Identificatie van een nummeraanduiding uit de BAG. |
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\Swagger\Client\Model\AdresUitgebreidHal**](../Model/AdresUitgebreidHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekAdresUitgebreid**
> \Swagger\Client\Model\AdresUitgebreidHalCollection zoekAdresUitgebreid($postcode, $huisnummer, $huisnummertoevoeging, $huisletter, $exacte_match, $adresseerbaar_object_identificatie, $woonplaats_naam, $openbare_ruimte_naam, $accept_crs)

Bevragen van de uitgebreide informatie van één of meer huidige adressen op basis van verschillende combinaties van parameters.

De volgende (combinaties van) parameters worden ondersteund: <ol>   <li>Bevragen van de uitgebreide informatie van één of meer huidige adressen met een postcode, huisnummer en optioneel huisnummertoevoeging en huisletter.     Het opgeven van een combinatie van parameters levert niet altijd een exacte match met één adres, bv. in geval van meerdere objecten met huisnummertoevoegingen en/of huisletters.      Met de exacteMatch parameter kan worden aangegeven dat alleen object(en) die exact overeenkomen met de opgegeven parameters, geretourneerd moeten worden.   </li>   <li>Bevragen van de uitgebreide informatie van één of meer huidige adressen met de identificatie van een adresseerbaar object.</li>   <li>Bevragen van de uitgebreide informatie van één of meer huidige adressen met woonplaats naam, openbare ruimte naam, huisnummer en optioneel huisnummertoevoeging en huisletter.     Het opgeven van een combinatie van parameters levert niet altijd een exacte match met één adres, bv. in geval van meerdere objecten met huisnummertoevoegingen en/of huisletters.      Met de exacteMatch parameter kan worden aangegeven dat alleen object(en) die exact overeenkomen met de opgegeven parameters, geretourneerd moeten worden.   </li> </ol>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AdresUitgebreidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postcode = "postcode_example"; // string | Postcode behorende bij een nummeraanduiding.
$huisnummer = 56; // int | Huisnummer behorende bij een nummeraanduiding.
$huisnummertoevoeging = "huisnummertoevoeging_example"; // string | Huisnummertoevoeging behorende bij een nummeraanduiding.
$huisletter = "huisletter_example"; // string | Huisletter behorende bij een nummeraanduiding.
$exacte_match = false; // bool | \"Een indicatie of de resultaten van een zoekoperatie exact overeen moeten komen met de zoekcriteria, zie [functionele specificatie exacte match](https://github.com/lvbag/BAG-API/blob/master/Features/exacte_match.feature).\"
$adresseerbaar_object_identificatie = "adresseerbaar_object_identificatie_example"; // string | Identificatie van een adresseerbaar object uit de BAG.
$woonplaats_naam = "woonplaats_naam_example"; // string | Naam van een woonplaats.
$openbare_ruimte_naam = "openbare_ruimte_naam_example"; // string | Naam van een openbare ruimte.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de co�rdinaten in de response.

try {
    $result = $apiInstance->zoekAdresUitgebreid($postcode, $huisnummer, $huisnummertoevoeging, $huisletter, $exacte_match, $adresseerbaar_object_identificatie, $woonplaats_naam, $openbare_ruimte_naam, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresUitgebreidApi->zoekAdresUitgebreid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postcode** | **string**| Postcode behorende bij een nummeraanduiding. | [optional]
 **huisnummer** | **int**| Huisnummer behorende bij een nummeraanduiding. | [optional]
 **huisnummertoevoeging** | **string**| Huisnummertoevoeging behorende bij een nummeraanduiding. | [optional]
 **huisletter** | **string**| Huisletter behorende bij een nummeraanduiding. | [optional]
 **exacte_match** | **bool**| \&quot;Een indicatie of de resultaten van een zoekoperatie exact overeen moeten komen met de zoekcriteria, zie [functionele specificatie exacte match](https://github.com/lvbag/BAG-API/blob/master/Features/exacte_match.feature).\&quot; | [optional] [default to false]
 **adresseerbaar_object_identificatie** | **string**| Identificatie van een adresseerbaar object uit de BAG. | [optional]
 **woonplaats_naam** | **string**| Naam van een woonplaats. | [optional]
 **openbare_ruimte_naam** | **string**| Naam van een openbare ruimte. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de co�rdinaten in de response. | [optional]

### Return type

[**\Swagger\Client\Model\AdresUitgebreidHalCollection**](../Model/AdresUitgebreidHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

