# Verblijfsobject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identificatie** | [**\BAGClient\Model\VerblijfsobjectIdentificatie**](VerblijfsobjectIdentificatie.md) |  | 
**domein** | **string** | NL.IMBAG.Verblijfsobject | 
**geometrie** | [**\BAGClient\Model\PuntOfVlak**](PuntOfVlak.md) |  | 
**gebruiksdoelen** | [**\BAGClient\Model\Gebruiksdoel[]**](Gebruiksdoel.md) |  | 
**oppervlakte** | **int** |  | 
**status** | [**\BAGClient\Model\StatusVerblijfsobject**](StatusVerblijfsobject.md) |  | 
**geconstateerd** | [**\BAGClient\Model\Indicatie**](Indicatie.md) |  | 
**documentdatum** | [**\DateTime**](\DateTime.md) | De datum waarop het brondocument is vastgesteld, op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een object heeft plaatsgevonden. | 
**documentnummer** | **string** | De unieke aanduiding van het brondocument op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een woonplaats heeft plaatsgevonden, binnen een gemeente. Alle karakters uit de MES-1 karakterset zijn toegestaan. | 
**voorkomen** | [**\BAGClient\Model\Voorkomen**](Voorkomen.md) |  | 
**maakt_deel_uit_van** | [**\BAGClient\Model\PandIdentificatie[]**](PandIdentificatie.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

