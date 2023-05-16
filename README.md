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
    <a href="https://packagist.org/packages/fingerprint/fingerprint-pro-server-api-sdk">
        <img src="https://poser.pugx.org/fingerprint/fingerprint-pro-server-api-sdk/v" alt="Latest Stable Version on Packagist">
    </a>
    <a href="https://packagist.org/packages/fingerprint/fingerprint-pro-server-api-sdk">
        <img src="http://poser.pugx.org/fingerprint/fingerprint-pro-server-api-sdk/require/php" alt="PHP Version Require">
    </a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/:license-mit-blue.svg?style=flat"/>
    </a>
    <a href="https://discord.gg/39EpE2neBg">
        <img src="https://img.shields.io/discord/852099967190433792?style=logo&label=Discord&logo=Discord&logoColor=white" alt="Discord server">
    </a>
</p>

# Fingerprint Pro Server API PHP SDK
**Fingerprint Pro Server API allows you to get information about visitors and about individual events in a server environment. This API can be used for data exports, decision-making, and data analysis scenarios.**

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3
    - Package version: 1.2.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 7.1 and later.

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
    "require": {
        "fingerprint/fingerprint-pro-server-api-sdk": "dev-main"
    }
}
```

Then run `composer install`.

Or you can just run this command on your terminal:

`composer require fingerprint/fingerprint-pro-server-api-sdk`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Fingerprint Pro Secret API Key
const FPJS_API_SECRET = "Fingerprint Pro Secret API Key";
// A mandatory visitorId of a specific visitor
const FPJS_VISITOR_ID = "visitorId";
// An optional requestId made by a specific visitor
const FPJS_REQUEST_ID = "requestId";

// An optional linkedId of the visit
const FPJS_LINKED_ID = "linkedId";
// An optional parameter limiting scanned results
const LIMIT = 10;
// An optional parameter used to paginate results, see lastTimestamp
const BEFORE = 1;

// Import Fingerprint Pro Classes and Guzzle Http Client
use Fingerprint\ServerAPI\Api\FingerprintApi;
use Fingerprint\ServerAPI\Configuration;
use GuzzleHttp\Client;

// Create a new Configuration instance with your Fingerprint Pro Server API Key and your Fingerprint Pro Server API Region.
/**
 * You can specify a region on getDefaultConfiguration function's second parameter
 * If you leave the second parameter empty, then Configuration::REGION_GLOBAL will be used as a default region
 * Options for regions are:
 * Configuration::REGION_EUROPE
 * Congiruration::REGION_GLOBAL
 * Configuration::REGION_ASIA
 */
$config = Configuration::getDefaultConfiguration(FPJS_API_SECRET, Configuration::REGION_EUROPE);
$client = new FingerprintApi(
    new Client(),
    $config
);

// Get an event with a given requestId
try {
    // Fetch the event with a given requestId
    $response = $client->getEvent(FPJS_REQUEST_ID);
    echo "<pre>" . $response->__toString() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

// Get a specific visitor's all visits
try {
    // Fetch all visits with a given visitorId, with a page limit
    $response = $client->getVisits(FPJS_VISITOR_ID, null, null, LIMIT);
    echo "<pre>" . $response->__toString() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

// Get a specific visitor's all visits with a linkedId
try {
    // Fetch all visits with a given visitorId, with a page limit, skipping the first visit
    $response = $client->getVisits(FPJS_VISITOR_ID, null, FPJS_LINKED_ID, LIMIT, BEFORE);
    echo "<pre>" . $response->__toString() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

// Use all the parameters on getVisits
try {
    // Fetch the visitor's all visits with a given requestId and linkedId with a page limit while skipping the first visit
    $response = $client->getVisits(FPJS_VISITOR_ID, FPJS_REQUEST_ID, FPJS_LINKED_ID, LIMIT, BEFORE);
    echo "<pre>" . $response->__toString() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

## Documentation for API Endpoints

All URIs are relative to your region's base URL.

| Region      | BasePath               |
|-------------|------------------------|
| US / Global | https://api.fpjs.io    |
| Europe      | https://eu.api.fpjs.io |
| Asia        | https://ap.api.fpjs.io |

## Endpoints


Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FingerprintApi* | [**getEvent**](docs/Api/FingerprintApi.md#getevent) | **GET** /events/{request_id} | Get event by requestId
*FingerprintApi* | [**getVisits**](docs/Api/FingerprintApi.md#getvisits) | **GET** /visitors/{visitor_id} | Get visits by visitorId

## Documentation for Models

 - [BotdDetectionResult](docs/Model/BotdDetectionResult.md)
 - [BotdResult](docs/Model/BotdResult.md)
 - [BrowserDetails](docs/Model/BrowserDetails.md)
 - [Confidence](docs/Model/Confidence.md)
 - [ErrorEvent403Response](docs/Model/ErrorEvent403Response.md)
 - [ErrorEvent403ResponseError](docs/Model/ErrorEvent403ResponseError.md)
 - [ErrorEvent404Response](docs/Model/ErrorEvent404Response.md)
 - [ErrorEvent404ResponseError](docs/Model/ErrorEvent404ResponseError.md)
 - [ErrorVisits403](docs/Model/ErrorVisits403.md)
 - [EventResponse](docs/Model/EventResponse.md)
 - [IPLocation](docs/Model/IPLocation.md)
 - [IPLocationCity](docs/Model/IPLocationCity.md)
 - [IdentificationError](docs/Model/IdentificationError.md)
 - [IpBlockListResult](docs/Model/IpBlockListResult.md)
 - [IpBlockListResultDetails](docs/Model/IpBlockListResultDetails.md)
 - [IpInfoResult](docs/Model/IpInfoResult.md)
 - [IpInfoResultV4](docs/Model/IpInfoResultV4.md)
 - [IpInfoResultV6](docs/Model/IpInfoResultV6.md)
 - [Location](docs/Model/Location.md)
 - [ManyRequestsResponse](docs/Model/ManyRequestsResponse.md)
 - [ProductError](docs/Model/ProductError.md)
 - [ProductsResponse](docs/Model/ProductsResponse.md)
 - [ProductsResponseBotd](docs/Model/ProductsResponseBotd.md)
 - [ProductsResponseIdentification](docs/Model/ProductsResponseIdentification.md)
 - [ProductsResponseIdentificationData](docs/Model/ProductsResponseIdentificationData.md)
 - [Response](docs/Model/Response.md)
 - [ResponseVisits](docs/Model/ResponseVisits.md)
 - [SeenAt](docs/Model/SeenAt.md)
 - [SignalResponseEmulator](docs/Model/SignalResponseEmulator.md)
 - [SignalResponseEmulatorData](docs/Model/SignalResponseEmulatorData.md)
 - [SignalResponseIncognito](docs/Model/SignalResponseIncognito.md)
 - [SignalResponseIncognitoData](docs/Model/SignalResponseIncognitoData.md)
 - [SignalResponseIpBlocklist](docs/Model/SignalResponseIpBlocklist.md)
 - [SignalResponseIpInfo](docs/Model/SignalResponseIpInfo.md)
 - [SignalResponseProxy](docs/Model/SignalResponseProxy.md)
 - [SignalResponseProxyData](docs/Model/SignalResponseProxyData.md)
 - [SignalResponseRootApps](docs/Model/SignalResponseRootApps.md)
 - [SignalResponseRootAppsData](docs/Model/SignalResponseRootAppsData.md)
 - [SignalResponseTampering](docs/Model/SignalResponseTampering.md)
 - [SignalResponseTor](docs/Model/SignalResponseTor.md)
 - [SignalResponseTorData](docs/Model/SignalResponseTorData.md)
 - [SignalResponseVpn](docs/Model/SignalResponseVpn.md)
 - [Subdivision](docs/Model/Subdivision.md)
 - [TamperingResult](docs/Model/TamperingResult.md)
 - [Visit](docs/Model/Visit.md)
 - [VpnResult](docs/Model/VpnResult.md)
 - [VpnResultMethods](docs/Model/VpnResultMethods.md)
 - [WebhookSignalResponseEmulator](docs/Model/WebhookSignalResponseEmulator.md)
 - [WebhookSignalResponseProxy](docs/Model/WebhookSignalResponseProxy.md)
 - [WebhookSignalResponseRootApps](docs/Model/WebhookSignalResponseRootApps.md)
 - [WebhookSignalResponseTor](docs/Model/WebhookSignalResponseTor.md)
 - [WebhookVisit](docs/Model/WebhookVisit.md)

## Documentation for Authorization


## ApiKeyHeader

- **Type**: API key
- **API key parameter name**: Auth-API-Key
- **Location**: HTTP header

## ApiKeyQuery

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: URL query string


## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Author

support@fingerprint.com

