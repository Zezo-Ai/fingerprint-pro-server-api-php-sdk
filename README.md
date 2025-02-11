<p align="center">
<a href="https://fingerprint.com">
<picture>
<source media="(prefers-color-scheme: dark)" srcset="https://fingerprintjs.github.io/home/resources/logo_light.svg" />
<source media="(prefers-color-scheme: light)" srcset="https://fingerprintjs.github.io/home/resources/logo_dark.svg" />
<img src="https://fingerprintjs.github.io/home/resources/logo_dark.svg" alt="Fingerprint logo" width="312px" />
</picture>
</a>
</p>
<p align="center">
<a href="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/release.yml"><img src="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/release.yml/badge.svg" alt="CI badge" /></a>
<a href="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/test.yml"><img src="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/test.yml/badge.svg" alt="CI badge" /></a>
<a href="https://fingerprintjs.github.io/fingerprint-pro-server-api-php-sdk"><img src="https://fingerprintjs.github.io/fingerprint-pro-server-api-php-sdk/coverage.svg" alt="Unit Test Coverage" /></a>
<a href="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/functional.yml"><img src="https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/actions/workflows/functional.yml/badge.svg" alt="CI badge" /></a>
<a href="https://packagist.org/packages/fingerprint/fingerprint-pro-server-api-sdk"><img src="https://poser.pugx.org/fingerprint/fingerprint-pro-server-api-sdk/v" alt="Latest Stable Version on Packagist"></a>
<a href="https://packagist.org/packages/fingerprint/fingerprint-pro-server-api-sdk"><img src="https://poser.pugx.org/fingerprint/fingerprint-pro-server-api-sdk/require/php?style=flat-square" alt="PHP Version Require"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/:license-mit-blue.svg?style=flat"/></a>
<a href="https://discord.gg/39EpE2neBg"><img src="https://img.shields.io/discord/852099967190433792?style=logo&label=Discord&logo=Discord&logoColor=white" alt="Discord server"></a>
</p>

# Fingerprint Pro Server API PHP SDK
**Fingerprint Pro Server API allows you to get information about visitors and about individual events in a server environment. It can be used for data exports, decision-making, and data analysis scenarios. Server API is intended for server-side usage, it&#x27;s not intended to be used from the client side, whether it&#x27;s a browser or a mobile device.**

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3
    - Package version: dev-6.3.0-0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

This library supports the following PHP implementations:

- PHP 8.1
- PHP 8.2
- PHP 8.3
- PHP 8.4

We currently don't support external PHP Runtimes like:

- Bref
- ReactPHP

## Installation & Usage
### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

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
const PAGINATION_KEY = "1683900801733.Ogvu1j";

// Import Fingerprint Pro Classes and Guzzle Http Client
use Fingerprint\ServerAPI\Api\FingerprintApi;
use Fingerprint\ServerAPI\Configuration;
use Fingerprint\ServerAPI\Model\EventsUpdateRequest;
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
    list($model, $response) = $client->getEvent(FPJS_REQUEST_ID);
    echo "<pre>" . $response->getBody()->getContents() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getEvent: ', $e->getMessage(), PHP_EOL;
}

// Get a specific visitor's all visits
try {
    // Fetch all visits with a given visitorId, with a page limit
    list($model, $response) = $client->getVisits(FPJS_VISITOR_ID, null, null, LIMIT);
    echo "<pre>" . $response->getBody()->getContents() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getVisits: ', $e->getMessage(), PHP_EOL;
}

// Search for specific events
try {
    // Search events for given visitor id marked as suspicious and "bad" bot
    list($model, $response) = $client->searchEvents(LIMIT, FPJS_VISITOR_ID, 'bad', null, null, null, null, null, true);
    echo "<pre>" . $response->getBody()->getContents() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->searchEvents: ', $e->getMessage(), PHP_EOL;
}

// Get a specific visitor's all visits with a linkedId
try {
    // Fetch all visits with a given visitorId, with a page limit, skipping the first visit
    list($model, $response) = $client->getVisits(FPJS_VISITOR_ID, null, FPJS_LINKED_ID, LIMIT, PAGINATION_KEY);
    echo "<pre>" . $response->getBody()->getContents() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getVisits: ', $e->getMessage(), PHP_EOL;
}

// Use all the parameters on getVisits
try {
    // Fetch the visitor's all visits with a given requestId and linkedId with a page limit while skipping the first visit
    list($model, $response) = $client->getVisits(FPJS_VISITOR_ID, FPJS_REQUEST_ID, FPJS_LINKED_ID, LIMIT, PAGINATION_KEY);
    echo "<pre>" . $response->getBody()->getContents() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->getVisits: ', $e->getMessage(), PHP_EOL;
}

// Update Event
try {
    $body = new EventsUpdateRequest([
        'linked_id' => 'new linked id',
        'tag' => ['new_property' => 'new value'],
        'suspect' => true,
    ]);
    list($model, $response) = $client->updateEvent($body, FPJS_REQUEST_ID);
    echo "<pre>" . $response->getBody()->getContents() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->updateEvent: ', $e->getMessage(), PHP_EOL;
}

// Delete by visitor ID
try {
    list($model, $response) = $client->deleteVisitorData(FPJS_VISITOR_ID);
    echo "<pre>" . $response->getBody()->getContents() . "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling FingerprintApi->deleteVisitorData: ', $e->getMessage(), PHP_EOL;
}
```

> ⚠️ Warning It's not possible to update events older than 10 days.

> ⚠️ If you are interested in using `deleteVisitorData` API, please [contact our support team](https://fingerprint.com/support/) to enable it for you. Otherwise, you will receive a 403.

## Sealed results

This SDK provides utility methods for decoding [sealed results](https://dev.fingerprint.com/docs/sealed-client-results).
```php
<?php

use Fingerprint\ServerAPI\Sealed\DecryptionAlgorithm;
use Fingerprint\ServerAPI\Sealed\DecryptionKey;
use Fingerprint\ServerAPI\Sealed\Sealed;

require_once(__DIR__ . '/vendor/autoload.php');

$sealed_result = base64_decode($_ENV['BASE64_SEALED_RESULT']);
$sealed_key = base64_decode($_ENV['BASE64_KEY']);

try {
    $data = Sealed::unsealEventResponse($sealed_result, [new DecryptionKey($sealed_key, DecryptionAlgorithm::AES_256_GCM)]);

    fwrite(STDOUT, sprintf("Unsealed event: %s \n", $data));
} catch (Exception $e) {
    fwrite(STDERR, sprintf("Exception when unsealing event: %s\n", $e->getMessage()));
    exit(1);
}
```
To learn more, refer to example located in [sealed_results_example.php](sealed_results_example.php).

## Documentation for API Endpoints

All URIs are relative to your region's base URL.

| Region      | BasePath               |
|-------------|------------------------|
| US / Global | https://api.fpjs.io    |
| Europe      | https://eu.api.fpjs.io |
| Asia        | https://ap.api.fpjs.io |

## Webhook Signing

This SDK provides utility method for verifying the HMAC signature of the incoming webhook request.
You can use below code to verify signature:

```php
<?php

use Fingerprint\ServerAPI\Webhook\WebhookVerifier;

// Your webhook signing secret.
$webhookSecret = "secret";

// Request data. In real life scenerio this will be the body of incoming request
$webhookData = "data";

// Value of the "fpjs-event-signature" header.
$webhookHeader = "v1=1b2c16b75bd2a870c114153ccda5bcfca63314bc722fa160d690de133ccbb9db";

$isValidWebhookSign = WebhookVerifier::IsValidWebhookSignature($webhookHeader, $webhookData, $webhookSecret);

if(!$isValidWebhookSign) {
    fwrite(STDERR, sprintf("Webhook signature verification failed\n"));
    exit(1);
}

```

## Endpoints


Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FingerprintApi* | [**deleteVisitorData**](docs/Api/FingerprintApi.md#deletevisitordata) | **DELETE** /visitors/{visitor_id} | Delete data by visitor ID
*FingerprintApi* | [**getEvent**](docs/Api/FingerprintApi.md#getevent) | **GET** /events/{request_id} | Get event by request ID
*FingerprintApi* | [**getRelatedVisitors**](docs/Api/FingerprintApi.md#getrelatedvisitors) | **GET** /related-visitors | Get Related Visitors
*FingerprintApi* | [**getVisits**](docs/Api/FingerprintApi.md#getvisits) | **GET** /visitors/{visitor_id} | Get visits by visitor ID
*FingerprintApi* | [**searchEvents**](docs/Api/FingerprintApi.md#searchevents) | **GET** /events/search | Get events via search
*FingerprintApi* | [**updateEvent**](docs/Api/FingerprintApi.md#updateevent) | **PUT** /events/{request_id} | Update an event with a given request ID

## Documentation for Models

 - [Botd](docs/Model/Botd.md)
 - [BotdBot](docs/Model/BotdBot.md)
 - [BotdBotResult](docs/Model/BotdBotResult.md)
 - [BrowserDetails](docs/Model/BrowserDetails.md)
 - [ClonedApp](docs/Model/ClonedApp.md)
 - [DeprecatedGeolocation](docs/Model/DeprecatedGeolocation.md)
 - [DeveloperTools](docs/Model/DeveloperTools.md)
 - [Emulator](docs/Model/Emulator.md)
 - [Error](docs/Model/Error.md)
 - [ErrorCode](docs/Model/ErrorCode.md)
 - [ErrorPlainResponse](docs/Model/ErrorPlainResponse.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [EventsGetResponse](docs/Model/EventsGetResponse.md)
 - [EventsUpdateRequest](docs/Model/EventsUpdateRequest.md)
 - [FactoryReset](docs/Model/FactoryReset.md)
 - [Frida](docs/Model/Frida.md)
 - [Geolocation](docs/Model/Geolocation.md)
 - [GeolocationCity](docs/Model/GeolocationCity.md)
 - [GeolocationContinent](docs/Model/GeolocationContinent.md)
 - [GeolocationCountry](docs/Model/GeolocationCountry.md)
 - [HighActivity](docs/Model/HighActivity.md)
 - [IPBlocklist](docs/Model/IPBlocklist.md)
 - [IPBlocklistDetails](docs/Model/IPBlocklistDetails.md)
 - [IPInfo](docs/Model/IPInfo.md)
 - [IPInfoASN](docs/Model/IPInfoASN.md)
 - [IPInfoDataCenter](docs/Model/IPInfoDataCenter.md)
 - [IPInfoV4](docs/Model/IPInfoV4.md)
 - [IPInfoV6](docs/Model/IPInfoV6.md)
 - [Identification](docs/Model/Identification.md)
 - [IdentificationConfidence](docs/Model/IdentificationConfidence.md)
 - [IdentificationSeenAt](docs/Model/IdentificationSeenAt.md)
 - [Incognito](docs/Model/Incognito.md)
 - [Jailbroken](docs/Model/Jailbroken.md)
 - [LocationSpoofing](docs/Model/LocationSpoofing.md)
 - [PrivacySettings](docs/Model/PrivacySettings.md)
 - [ProductBotd](docs/Model/ProductBotd.md)
 - [ProductClonedApp](docs/Model/ProductClonedApp.md)
 - [ProductDeveloperTools](docs/Model/ProductDeveloperTools.md)
 - [ProductEmulator](docs/Model/ProductEmulator.md)
 - [ProductFactoryReset](docs/Model/ProductFactoryReset.md)
 - [ProductFrida](docs/Model/ProductFrida.md)
 - [ProductHighActivity](docs/Model/ProductHighActivity.md)
 - [ProductIPBlocklist](docs/Model/ProductIPBlocklist.md)
 - [ProductIPInfo](docs/Model/ProductIPInfo.md)
 - [ProductIdentification](docs/Model/ProductIdentification.md)
 - [ProductIncognito](docs/Model/ProductIncognito.md)
 - [ProductJailbroken](docs/Model/ProductJailbroken.md)
 - [ProductLocationSpoofing](docs/Model/ProductLocationSpoofing.md)
 - [ProductPrivacySettings](docs/Model/ProductPrivacySettings.md)
 - [ProductProxy](docs/Model/ProductProxy.md)
 - [ProductRawDeviceAttributes](docs/Model/ProductRawDeviceAttributes.md)
 - [ProductRemoteControl](docs/Model/ProductRemoteControl.md)
 - [ProductRootApps](docs/Model/ProductRootApps.md)
 - [ProductSuspectScore](docs/Model/ProductSuspectScore.md)
 - [ProductTampering](docs/Model/ProductTampering.md)
 - [ProductTor](docs/Model/ProductTor.md)
 - [ProductVPN](docs/Model/ProductVPN.md)
 - [ProductVelocity](docs/Model/ProductVelocity.md)
 - [ProductVirtualMachine](docs/Model/ProductVirtualMachine.md)
 - [Products](docs/Model/Products.md)
 - [Proxy](docs/Model/Proxy.md)
 - [RelatedVisitor](docs/Model/RelatedVisitor.md)
 - [RelatedVisitorsResponse](docs/Model/RelatedVisitorsResponse.md)
 - [RemoteControl](docs/Model/RemoteControl.md)
 - [RootApps](docs/Model/RootApps.md)
 - [SearchEventsResponse](docs/Model/SearchEventsResponse.md)
 - [SearchEventsResponseEvents](docs/Model/SearchEventsResponseEvents.md)
 - [SuspectScore](docs/Model/SuspectScore.md)
 - [Tampering](docs/Model/Tampering.md)
 - [Tor](docs/Model/Tor.md)
 - [VPN](docs/Model/VPN.md)
 - [VPNConfidence](docs/Model/VPNConfidence.md)
 - [VPNMethods](docs/Model/VPNMethods.md)
 - [Velocity](docs/Model/Velocity.md)
 - [VelocityData](docs/Model/VelocityData.md)
 - [VelocityIntervals](docs/Model/VelocityIntervals.md)
 - [VirtualMachine](docs/Model/VirtualMachine.md)
 - [Visit](docs/Model/Visit.md)
 - [VisitorsGetResponse](docs/Model/VisitorsGetResponse.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookClonedApp](docs/Model/WebhookClonedApp.md)
 - [WebhookDeveloperTools](docs/Model/WebhookDeveloperTools.md)
 - [WebhookEmulator](docs/Model/WebhookEmulator.md)
 - [WebhookFactoryReset](docs/Model/WebhookFactoryReset.md)
 - [WebhookFrida](docs/Model/WebhookFrida.md)
 - [WebhookHighActivity](docs/Model/WebhookHighActivity.md)
 - [WebhookIPBlocklist](docs/Model/WebhookIPBlocklist.md)
 - [WebhookIPInfo](docs/Model/WebhookIPInfo.md)
 - [WebhookJailbroken](docs/Model/WebhookJailbroken.md)
 - [WebhookLocationSpoofing](docs/Model/WebhookLocationSpoofing.md)
 - [WebhookPrivacySettings](docs/Model/WebhookPrivacySettings.md)
 - [WebhookProxy](docs/Model/WebhookProxy.md)
 - [WebhookRemoteControl](docs/Model/WebhookRemoteControl.md)
 - [WebhookRootApps](docs/Model/WebhookRootApps.md)
 - [WebhookSuspectScore](docs/Model/WebhookSuspectScore.md)
 - [WebhookTampering](docs/Model/WebhookTampering.md)
 - [WebhookTor](docs/Model/WebhookTor.md)
 - [WebhookVPN](docs/Model/WebhookVPN.md)
 - [WebhookVelocity](docs/Model/WebhookVelocity.md)
 - [WebhookVirtualMachine](docs/Model/WebhookVirtualMachine.md)

## Documentation for Authorization


## ApiKeyHeader

- **Type**: API key
- **API key parameter name**: Auth-API-Key
- **Location**: HTTP header

## ApiKeyQuery

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: URL query string


## Documentation for sealed results

- [Sealed](docs/Sealed/Sealed.md)
- [DecryptionKey](docs/Sealed/DecryptionKey.md)

## Documentation for webhooks

- [Webhook](docs/Webhook.md)

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Support

To report problems, ask questions or provide feedback, please use [Issues](https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/issues).
If you need private support, you can email us at [oss-support@fingerprint.com](mailto:oss-support@fingerprint.com).

## License

This project is licensed under the [MIT License](https://github.com/fingerprintjs/fingerprint-pro-server-api-php-sdk/blob/main/LICENSE).
