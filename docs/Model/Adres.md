# Adres

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**openbare_ruimte_naam** | **string** | Een naam die aan een openbare ruimte is toegekend in een daartoe strekkend formeel gemeentelijk besluit. | 
**korte_naam** | **string** | De officiële openbare ruimte naam als deze niet langer is dan 24 tekens of de volgens de NEN5825 verkorte naam van maximaal 24 tekens. | [optional] 
**huisnummer** | **int** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende nummering. | 
**huisletter** | **string** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende toevoeging aan een huisnummer in de vorm van een alfanumeriek teken. | [optional] 
**huisnummertoevoeging** | **string** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende nadere toevoeging aan een huisnummer of een combinatie van huisnummer en huisletter. | [optional] 
**postcode** | **string** | De door PostNL vastgestelde code behorende bij een bepaalde combinatie van een straatnaam en een huisnummer. | [optional] 
**woonplaats_naam** | **string** | De benaming van een door het gemeentebestuur aangewezen woonplaats. | 
**nummeraanduiding_identificatie** | [**\BAGClient\BAGClient\NummeraanduidingIdentificatie**](NummeraanduidingIdentificatie.md) |  | 
**openbare_ruimte_identificatie** | [**\BAGClient\BAGClient\OpenbareRuimteIdentificatie**](OpenbareRuimteIdentificatie.md) |  | 
**woonplaats_identificatie** | [**\BAGClient\BAGClient\WoonplaatsIdentificatie**](WoonplaatsIdentificatie.md) |  | 
**adresseerbaar_object_identificatie** | [**\BAGClient\BAGClient\AdresseerbaarObjectIdentificatie**](AdresseerbaarObjectIdentificatie.md) |  | [optional] 
**pand_identificaties** | [**\BAGClient\BAGClient\PandIdentificatie[]**](PandIdentificatie.md) | Identificatie(s) van het pand of de panden waar het verblijfsobject deel van uit maakt. | [optional] 
**indicatie_nevenadres** | **bool** | Indicatie dat dit adres een nevenadres is van een adresseerbaar object. Het adres is een hoofdadres als deze indicatie niet wordt meegeleverd. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

