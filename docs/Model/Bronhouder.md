# Bronhouder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Een officiële code die aan een gemeente is toegekend, ontleend is aan tabel 33 en zoals bijgehouden in de LVBAG. Dit gegeven is geen officieel BAG gegeven en wordt niet als kenmerk van het BAG object Woonplaats object bijgehouden. Het wordt als hulpgegeven meegeleverd. | 
**naam** | **string** | Een officiële naam die aan een gemeente is toegekend. | 
**begin_geldigheid** | [**\DateTime**](\DateTime.md) | De datum waarop een versie van een bronhouder geldig is in de werkelijkheid. Dit tijdstip wordt vastgelegd in de beginGeldigheid. | [optional] 
**eind_geldigheid** | [**\DateTime**](\DateTime.md) | De datum waarop de periode van geldigheid van een versie van een bronhouder eindigt. Wanneer er geen tijdstip is ingevuld, dan is de versie nog geldig. Dit tijdstip wordt vastgelegd in de eindGeldigheid. | [optional] 
**provincie** | [**\BAGClient\BAGClient\Provincie**](Provincie.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

