<?php
/**
 * FingerprintApi
 * PHP version 5.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fingerprint Pro Server API.
 *
 * Fingerprint Pro Server API allows you to get information about visitors and about individual events in a server environment. It can be used for data exports, decision-making, and data analysis scenarios. Server API is intended for server-side usage, it's not intended to be used from the client side, whether it's a browser or a mobile device.
 *
 * OpenAPI spec version: 3
 * Contact: support@fingerprint.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Fingerprint\ServerAPI\Api;

use Fingerprint\ServerAPI\ApiException;
use Fingerprint\ServerAPI\Configuration;
use Fingerprint\ServerAPI\ObjectSerializer;
use Fingerprint\ServerAPI\SerializationException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

/**
 * FingerprintApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FingerprintApi
{
    protected ClientInterface $client;
    protected Configuration $config;

    protected string $integration_info = 'fingerprint-pro-server-php-sdk/4.1.0';

    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
    }

    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation getEvent.
     *
     * Get event by request ID
     *
     * @param string $request_id The unique [identifier](https://dev.fingerprint.com/docs/js-agent#requestid) of each identification request. (required)
     *
     * @return array{ null|\Fingerprint\ServerAPI\Model\EventResponse, \Psr\Http\Message\ResponseInterface }
     *
     * @throws \InvalidArgumentException
     * @throws SerializationException
     * @throws GuzzleException
     */
    public function getEvent(string $request_id): array
    {
        $returnType = '\Fingerprint\ServerAPI\Model\EventResponse';
        $request = $this->getEventRequest($request_id);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $apiException = new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode()
                );
                $apiException->setResponseObject($e->getResponse());

                throw $apiException;
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                $apiException = new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode
                );
                $apiException->setResponseObject($response);

                throw $apiException;
            }

            $serialized = ObjectSerializer::deserialize($response, $returnType);

            return [$serialized, $response];
        } catch (ApiException $e) {
            /** @var ResponseInterface $response */
            $response = $e->getResponseObject();

            switch ($e->getCode()) {
                case 200:
                    $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\EventResponse');
                    $e->setErrorDetails($errorDetail);
                    $e->setResponseObject($response);

                    break;

                case 403:
                    $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\ErrorCommon403Response');
                    $e->setErrorDetails($errorDetail);
                    $e->setResponseObject($response);

                    break;

                case 404:
                    $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\ErrorEvent404Response');
                    $e->setErrorDetails($errorDetail);
                    $e->setResponseObject($response);

                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getEventAsync.
     *
     * Get event by request ID
     *
     * @param string $request_id The unique [identifier](https://dev.fingerprint.com/docs/js-agent#requestid) of each identification request. (required)
     *
     * @throws \InvalidArgumentException
     * @throws SerializationException
     */
    public function getEventAsync(string $request_id): PromiseInterface
    {
        $returnType = '\Fingerprint\ServerAPI\Model\EventResponse';
        $request = $this->getEventRequest($request_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType, $request) {
                    $statusCode = $response->getStatusCode();

                    if ($statusCode < 200 || $statusCode > 299) {
                        $apiException = new ApiException(
                            sprintf(
                                '[%d] Error connecting to the API (%s)',
                                $statusCode,
                                $request->getUri()
                            ),
                            $statusCode
                        );
                        $apiException->setResponseObject($response);

                        throw $apiException;
                    }

                    $serialized = ObjectSerializer::deserialize($response, $returnType);

                    return [$serialized, $response];
                },
                function ($e) {
                    /** @var ResponseInterface $response */
                    $response = $e->getResponseObject();

                    switch ($e->getCode()) {
                        case 200:
                            $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\EventResponse');
                            $e->setErrorDetails($errorDetail);
                            $e->setResponseObject($response);

                            break;

                        case 403:
                            $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\ErrorCommon403Response');
                            $e->setErrorDetails($errorDetail);
                            $e->setResponseObject($response);

                            break;

                        case 404:
                            $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\ErrorEvent404Response');
                            $e->setErrorDetails($errorDetail);
                            $e->setResponseObject($response);

                            break;
                    }

                    throw $e;
                }
            );
    }

    /**
     * Operation getVisits.
     *
     * Get visits by visitor ID
     *
     * @param string $visitor_id     Unique [visitor identifier](https://dev.fingerprint.com/docs/js-agent#visitorid) issued by Fingerprint Pro. (required)
     * @param string $request_id     Filter visits by `requestId`.   Every identification request has a unique identifier associated with it called `requestId`. This identifier is returned to the client in the identification [result](https://dev.fingerprint.com/docs/js-agent#requestid). When you filter visits by `requestId`, only one visit will be returned. (optional)
     * @param string $linked_id      Filter visits by your custom identifier.   You can use [`linkedId`](https://dev.fingerprint.com/docs/js-agent#linkedid) to associate identification requests with your own identifier, for example: session ID, purchase ID, or transaction ID. You can then use this `linked_id` parameter to retrieve all events associated with your custom identifier. (optional)
     * @param int    $limit          Limit scanned results.   For performance reasons, the API first scans some number of events before filtering them. Use `limit` to specify how many events are scanned before they are filtered by `requestId` or `linkedId`. Results are always returned sorted by the timestamp (most recent first). By default, the most recent 100 visits are scanned, the maximum is 500. (optional)
     * @param string $pagination_key Use `paginationKey` to get the next page of results.   When more results are available (e.g., you requested 200 results using `limit` parameter, but a total of 600 results are available), the `paginationKey` top-level attribute is added to the response. The key corresponds to the `requestId` of the last returned event. In the following request, use that value in the `paginationKey` parameter to get the next page of results:  1. First request, returning most recent 200 events: `GET api-base-url/visitors/:visitorId?limit=200` 2. Use `response.paginationKey` to get the next page of results: `GET api-base-url/visitors/:visitorId?limit=200&paginationKey=1683900801733.Ogvu1j`  Pagination happens during scanning and before filtering, so you can get less visits than the `limit` you specified with more available on the next page. When there are no more results available for scanning, the `paginationKey` attribute is not returned. (optional)
     * @param int    $before         ⚠️ Deprecated pagination method, please use `paginationKey` instead. Timestamp (in milliseconds since epoch) used to paginate results. (optional)
     *
     * @return array{ null|\Fingerprint\ServerAPI\Model\Response, \Psr\Http\Message\ResponseInterface }
     *
     * @throws \InvalidArgumentException
     * @throws SerializationException
     * @throws GuzzleException
     */
    public function getVisits(string $visitor_id, ?string $request_id = null, ?string $linked_id = null, ?int $limit = null, ?string $pagination_key = null, ?int $before = null): array
    {
        $returnType = '\Fingerprint\ServerAPI\Model\Response';
        $request = $this->getVisitsRequest($visitor_id, $request_id, $linked_id, $limit, $pagination_key, $before);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $apiException = new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode()
                );
                $apiException->setResponseObject($e->getResponse());

                throw $apiException;
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                $apiException = new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode
                );
                $apiException->setResponseObject($response);

                throw $apiException;
            }

            $serialized = ObjectSerializer::deserialize($response, $returnType);

            return [$serialized, $response];
        } catch (ApiException $e) {
            /** @var ResponseInterface $response */
            $response = $e->getResponseObject();

            switch ($e->getCode()) {
                case 200:
                    $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\Response');
                    $e->setErrorDetails($errorDetail);
                    $e->setResponseObject($response);

                    break;

                case 403:
                    $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\ErrorVisits403');
                    $e->setErrorDetails($errorDetail);
                    $e->setResponseObject($response);

                    break;

                case 429:
                    $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\TooManyRequestsResponse');
                    $e->setErrorDetails($errorDetail);
                    $e->setResponseObject($response);

                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getVisitsAsync.
     *
     * Get visits by visitor ID
     *
     * @param string $visitor_id     Unique [visitor identifier](https://dev.fingerprint.com/docs/js-agent#visitorid) issued by Fingerprint Pro. (required)
     * @param string $request_id     Filter visits by `requestId`.   Every identification request has a unique identifier associated with it called `requestId`. This identifier is returned to the client in the identification [result](https://dev.fingerprint.com/docs/js-agent#requestid). When you filter visits by `requestId`, only one visit will be returned. (optional)
     * @param string $linked_id      Filter visits by your custom identifier.   You can use [`linkedId`](https://dev.fingerprint.com/docs/js-agent#linkedid) to associate identification requests with your own identifier, for example: session ID, purchase ID, or transaction ID. You can then use this `linked_id` parameter to retrieve all events associated with your custom identifier. (optional)
     * @param int    $limit          Limit scanned results.   For performance reasons, the API first scans some number of events before filtering them. Use `limit` to specify how many events are scanned before they are filtered by `requestId` or `linkedId`. Results are always returned sorted by the timestamp (most recent first). By default, the most recent 100 visits are scanned, the maximum is 500. (optional)
     * @param string $pagination_key Use `paginationKey` to get the next page of results.   When more results are available (e.g., you requested 200 results using `limit` parameter, but a total of 600 results are available), the `paginationKey` top-level attribute is added to the response. The key corresponds to the `requestId` of the last returned event. In the following request, use that value in the `paginationKey` parameter to get the next page of results:  1. First request, returning most recent 200 events: `GET api-base-url/visitors/:visitorId?limit=200` 2. Use `response.paginationKey` to get the next page of results: `GET api-base-url/visitors/:visitorId?limit=200&paginationKey=1683900801733.Ogvu1j`  Pagination happens during scanning and before filtering, so you can get less visits than the `limit` you specified with more available on the next page. When there are no more results available for scanning, the `paginationKey` attribute is not returned. (optional)
     * @param int    $before         ⚠️ Deprecated pagination method, please use `paginationKey` instead. Timestamp (in milliseconds since epoch) used to paginate results. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws SerializationException
     */
    public function getVisitsAsync(string $visitor_id, ?string $request_id = null, ?string $linked_id = null, ?int $limit = null, ?string $pagination_key = null, ?int $before = null): PromiseInterface
    {
        $returnType = '\Fingerprint\ServerAPI\Model\Response';
        $request = $this->getVisitsRequest($visitor_id, $request_id, $linked_id, $limit, $pagination_key, $before);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType, $request) {
                    $statusCode = $response->getStatusCode();

                    if ($statusCode < 200 || $statusCode > 299) {
                        $apiException = new ApiException(
                            sprintf(
                                '[%d] Error connecting to the API (%s)',
                                $statusCode,
                                $request->getUri()
                            ),
                            $statusCode
                        );
                        $apiException->setResponseObject($response);

                        throw $apiException;
                    }

                    $serialized = ObjectSerializer::deserialize($response, $returnType);

                    return [$serialized, $response];
                },
                function ($e) {
                    /** @var ResponseInterface $response */
                    $response = $e->getResponseObject();

                    switch ($e->getCode()) {
                        case 200:
                            $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\Response');
                            $e->setErrorDetails($errorDetail);
                            $e->setResponseObject($response);

                            break;

                        case 403:
                            $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\ErrorVisits403');
                            $e->setErrorDetails($errorDetail);
                            $e->setResponseObject($response);

                            break;

                        case 429:
                            $errorDetail = ObjectSerializer::deserialize($response, '\Fingerprint\ServerAPI\Model\TooManyRequestsResponse');
                            $e->setErrorDetails($errorDetail);
                            $e->setResponseObject($response);

                            break;
                    }

                    throw $e;
                }
            );
    }

    /**
     * Create request for operation 'getEvent'.
     *
     * @throws \InvalidArgumentException
     * @throws SerializationException
     */
    protected function getEventRequest(string $request_id): Request
    {
        // verify the required parameter 'request_id' is set
        if (null === $request_id || (is_array($request_id) && 0 === count($request_id))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request_id when calling getEvent'
            );
        }

        $resourcePath = '/events/{request_id}';
        $headers = [];
        $queryParams = ['ii' => $this->integration_info];
        $headerParams = [];
        $httpBody = '';

        // path params
        if (null !== $request_id) {
            $resourcePath = str_replace(
                '{request_id}',
                ObjectSerializer::toPathValue($request_id),
                $resourcePath
            );
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Auth-API-Key');
        if (null !== $apiKey) {
            $headers['Auth-API-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('api_key');
        if (null !== $apiKey) {
            $queryParams['api_key'] = $apiKey;
        }

        $defaultHeaders = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = http_build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create request for operation 'getVisits'.
     *
     * @throws \InvalidArgumentException
     * @throws SerializationException
     */
    protected function getVisitsRequest(string $visitor_id, ?string $request_id = null, ?string $linked_id = null, ?int $limit = null, ?string $pagination_key = null, ?int $before = null): Request
    {
        // verify the required parameter 'visitor_id' is set
        if (null === $visitor_id || (is_array($visitor_id) && 0 === count($visitor_id))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $visitor_id when calling getVisits'
            );
        }

        $resourcePath = '/visitors/{visitor_id}';
        $headers = [];
        $queryParams = ['ii' => $this->integration_info];
        $headerParams = [];
        $httpBody = '';

        // query params
        if (null !== $request_id) {
            $queryParams['request_id'] = ObjectSerializer::toQueryValue($request_id, null);
        }
        // query params
        if (null !== $linked_id) {
            $queryParams['linked_id'] = ObjectSerializer::toQueryValue($linked_id, null);
        }
        // query params
        if (null !== $limit) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if (null !== $pagination_key) {
            $queryParams['paginationKey'] = ObjectSerializer::toQueryValue($pagination_key, null);
        }
        // query params
        if (null !== $before) {
            $queryParams['before'] = ObjectSerializer::toQueryValue($before, 'int64');
        }

        // path params
        if (null !== $visitor_id) {
            $resourcePath = str_replace(
                '{visitor_id}',
                ObjectSerializer::toPathValue($visitor_id),
                $resourcePath
            );
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Auth-API-Key');
        if (null !== $apiKey) {
            $headers['Auth-API-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('api_key');
        if (null !== $apiKey) {
            $queryParams['api_key'] = $apiKey;
        }

        $defaultHeaders = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = http_build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option.
     *
     * @throws \RuntimeException on file opening failure
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
