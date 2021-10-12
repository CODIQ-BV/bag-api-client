# Nummeraanduiding

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identificatie** | [**\BAGClient\BAGClient\NummeraanduidingIdentificatie**](NummeraanduidingIdentificatie.md) |  | 
**domein** | **string** | NL.IMBAG.Nummeraanduiding | 
**huisnummer** | **int** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende nummering. | 
**huisletter** | **string** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende toevoeging aan een huisnummer in de vorm van een alfanumeriek teken. | [optional] 
**huisnummertoevoeging** | **string** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende nadere toevoeging aan een huisnummer of een combinatie van huisnummer en huisletter. | [optional] 
**postcode** | **string** | De door PostNL vastgestelde code behorende bij een bepaalde combinatie van een straatnaam en een huisnummer. | [optional] 
**type_adresseerbaar_object** | [**\BAGClient\BAGClient\TypeAdresseerbaarObject**](TypeAdresseerbaarObject.md) |  | 
**status** | [**\BAGClient\BAGClient\StatusNaamgeving**](StatusNaamgeving.md) |  | 
**geconstateerd** | [**\BAGClient\BAGClient\Indicatie**](Indicatie.md) |  | 
**documentdatum** | [**\DateTime**](\DateTime.md) | De datum waarop het brondocument is vastgesteld, op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een object heeft plaatsgevonden. | 
**documentnummer** | **string** | De unieke aanduiding van het brondocument op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een woonplaats heeft plaatsgevonden binnen een gemeente. Alle karakters uit de MES-1 karakterset zijn toegestaan. | 
**voorkomen** | [**\BAGClient\BAGClient\Voorkomen**](Voorkomen.md) |  | 
**ligt_in** | [**\BAGClient\BAGClient\WoonplaatsIdentificatie**](WoonplaatsIdentificatie.md) |  | [optional] 
**ligt_aan** | [**\BAGClient\BAGClient\OpenbareRuimteIdentificatie**](OpenbareRuimteIdentificatie.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

