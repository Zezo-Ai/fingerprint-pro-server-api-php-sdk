# Visit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | Unique identifier of the user's identification request. | 
**browser_details** | [**\Fingerprint\ServerAPI\Model\BrowserDetails**](BrowserDetails.md) |  | 
**incognito** | **bool** | Flag if user used incognito session. | 
**ip** | **string** |  | 
**ip_location** | [**\Fingerprint\ServerAPI\Model\DeprecatedIPLocation**](DeprecatedIPLocation.md) |  | [optional] 
**timestamp** | **int** | Timestamp of the event with millisecond precision in Unix time. | 
**time** | [**\DateTime**](\DateTime.md) | Time expressed according to ISO 8601 in UTC format. | 
**url** | **string** | Page URL from which the identification request was sent. | 
**tag** | **map[string,object]** | A customer-provided value or an object that was sent with identification request. | [optional] 
**linked_id** | **string** | A customer-provided id that was sent with identification request. | [optional] 
**confidence** | [**\Fingerprint\ServerAPI\Model\Confidence**](Confidence.md) |  | [optional] 
**visitor_found** | **bool** | Attribute represents if a visitor had been identified before. | 
**first_seen_at** | [**\Fingerprint\ServerAPI\Model\SeenAt**](SeenAt.md) |  | 
**last_seen_at** | [**\Fingerprint\ServerAPI\Model\SeenAt**](SeenAt.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

