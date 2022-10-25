<p align="center">
    <a href="https://fingerprint.com">
        <picture>
            <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/main/.github/resources/logo_light.svg" />
            <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/main/.github/resources/logo_dark.svg" />
            <img src="https://raw.githubusercontent.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/main/.github/resources/logo_light.svg" alt="Fingerprint logo" width="312px" />
        </picture>
    </a>
</p>
<p align="center">
    <a href="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/release.yml">
        <img src="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/release.yml/badge.svg" alt="CI badge" />
    </a>
    <a href="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/test.yml">
        <img src="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/test.yml/badge.svg" alt="CI badge" />
    </a>
    <a href="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/functional.yml">
        <img src="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/functional.yml/badge.svg" alt="CI badge" />
    </a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/:license-mit-blue.svg?style=flat"/>
    </a>
    <a href="https://discord.gg/39EpE2neBg">
        <img src="https://img.shields.io/discord/852099967190433792?style=logo&label=Discord&logo=Discord&logoColor=white" alt="Discord server">
    </a>
</p>

# Fingerprint Pro Server PHP SDK
    Fingerprint Pro Server API provides a way for validating visitors’ data issued by Fingerprint Pro.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3
    - Package version: dev-0.3.0-3
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk.git"
        }
    ],
    "require": {
        "fingerprintjs/fingerprint-pro-server-api-php-sdk": "*@dev"
    }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
require_once('/path/to/src/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyHeader
$config = Fingerprintjs\ServerAPI\Configuration::getDefaultConfiguration()->setApiKey('Auth-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fingerprintjs\ServerAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Auth-API-Key', 'Bearer');
// Configure API key authorization: ApiKeyQuery
$config = Fingerprintjs\ServerAPI\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fingerprintjs\ServerAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Fingerprintjs\ServerAPI\Api\FingerprintApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = "request_id_example"; // string | Request ID

try {
    $result = $apiInstance->getEvent($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKeyHeader
$config = Fingerprintjs\ServerAPI\Configuration::getDefaultConfiguration()->setApiKey('Auth-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fingerprintjs\ServerAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Auth-API-Key', 'Bearer');
// Configure API key authorization: ApiKeyQuery
$config = Fingerprintjs\ServerAPI\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fingerprintjs\ServerAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Fingerprintjs\ServerAPI\Api\FingerprintApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$visitor_id = "visitor_id_example"; // string | 
$request_id = "request_id_example"; // string | Filter events by requestId
$linked_id = "linked_id_example"; // string | Filter events by custom identifier
$limit = 56; // int | Limit scanned results
$before = 56; // int | Used to paginate results

try {
    $result = $apiInstance->getVisits($visitor_id, $request_id, $linked_id, $limit, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.fpjs.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FingerprintApi* | [**getEvent**](docs/Api/FingerprintApi.md#getevent) | **GET** /events/{request_id} | Get event by request ID
*FingerprintApi* | [**getVisits**](docs/Api/FingerprintApi.md#getvisits) | **GET** /visitors/{visitor_id} | 

## Documentation For Models

 - [BotdDetectionResult](docs/Model/BotdDetectionResult.md)
 - [BotdResult](docs/Model/BotdResult.md)
 - [BrowserDetails](docs/Model/BrowserDetails.md)
 - [Confidence](docs/Model/Confidence.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ErrorResponseError](docs/Model/ErrorResponseError.md)
 - [EventResponse](docs/Model/EventResponse.md)
 - [IPLocation](docs/Model/IPLocation.md)
 - [IPLocationCity](docs/Model/IPLocationCity.md)
 - [Location](docs/Model/Location.md)
 - [ManyRequestsResponse](docs/Model/ManyRequestsResponse.md)
 - [ProductsResponse](docs/Model/ProductsResponse.md)
 - [ProductsResponseBotd](docs/Model/ProductsResponseBotd.md)
 - [ProductsResponseIdentification](docs/Model/ProductsResponseIdentification.md)
 - [ProductsResponseIdentificationData](docs/Model/ProductsResponseIdentificationData.md)
 - [Response](docs/Model/Response.md)
 - [ResponseVisits](docs/Model/ResponseVisits.md)
 - [StSeenAt](docs/Model/StSeenAt.md)
 - [Subdivision](docs/Model/Subdivision.md)
 - [Visit](docs/Model/Visit.md)
 - [WebhookVisit](docs/Model/WebhookVisit.md)

## Documentation For Authorization


## ApiKeyHeader

- **Type**: API key
- **API key parameter name**: Auth-API-Key
- **Location**: HTTP header

## ApiKeyQuery

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: URL query string


## Author

support@fingerprint.com

