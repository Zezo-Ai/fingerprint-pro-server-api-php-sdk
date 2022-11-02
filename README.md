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

# Fingerprint Pro Server PHP SDK
    Fingerprint Pro Server API provides a way for validating visitors’ data issued by Fingerprint Pro.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3
    - Package version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 7.1 and later

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

Then run `composer install`

Or you can just run

`composer require fingerprint/fingerprint-pro-server-api-sdk`

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

// Our Fingerprint API Secret
const FPJS_API_SECRET = "YOUR SECRET KEY COMES HERE";
// A Request ID that made by a specific visitor
const FPJS_REQUEST_ID = "REQUEST ID"; // Change this value with your request id
// A Visitor ID of a specific visitor
const FPJS_VISITOR_ID = "VISITOR ID"; // Change this value with your visitor id

// Linked id of the visit
const FPJS_LINKED_ID = "LINKED ID"; // Change this value with your linked id
// How many items to fetch, while paginating
const LIMIT = 10;
// How many items to skip, while paginating
const BEFORE = 1;

// Import Fingerprint Classes and Guzzle Http Client
use Fingerprint\ServerAPI\Api\FingerprintApi;
use Fingerprint\ServerAPI\Configuration;
use GuzzleHttp\Client;

// Create new Configuration instance with defaultValues, added our API Secret and our Region
$config = Configuration::getDefaultConfiguration(FPJS_API_SECRET, Configuration::REGION_EUROPE);
$client = new FingerprintApi(
    new Client(),
    $config
);

// Let's try to get an event with given Request ID
try {
    // Fetch event with given Request ID
    $response = $client->getEvent(FPJS_REQUEST_ID);
    echo "<pre>" . $response->__toString() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

// Let's try to get a specific visitor's all visits
try {
    // Fetch all visits with given Visitor ID, with a page limit
    $response = $client->getVisits(FPJS_VISITOR_ID, null, null, LIMIT);
    echo "<pre>" . $response->__toString() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

// Let's try to get a specific visitor's all visits with linked id
try {
    // Fetch all visits with given Visitor ID, with a page limit, skipping first the first visit
    $response = $client->getVisits(FPJS_VISITOR_ID, null, FPJS_LINKED_ID, LIMIT, BEFORE);
    echo "<pre>" . $response->__toString() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

// Let's use all the parameters on getVisits
try {
    // We fetch the visitor's all visits with given Request ID, Linked ID with a page limit while skipping first visit
    $response = $client->getVisits(FPJS_VISITOR_ID, FPJS_REQUEST_ID, FPJS_LINKED_ID, LIMIT, BEFORE);
    echo "<pre>" . $response->__toString() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

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

