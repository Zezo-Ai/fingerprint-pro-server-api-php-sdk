<?php
/**
 * FingerprintApi
 * PHP version 5
 *
 * @category Class
 * @package  Fingerprintjs\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fingerprint Pro Server API
 *
 * Fingerprint Pro Server API provides a way for validating visitors’ data issued by Fingerprint Pro.
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

namespace Fingerprintjs\ServerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Fingerprintjs\ServerAPI\ApiException;
use Fingerprintjs\ServerAPI\Configuration;
use Fingerprintjs\ServerAPI\HeaderSelector;
use Fingerprintjs\ServerAPI\ObjectSerializer;

/**
 * FingerprintApi Class Doc Comment
 *
 * @category Class
 * @package  Fingerprintjs\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FingerprintApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getEvent
     *
     * Get event by request ID
     *
     * @param  string $request_id Request ID (required)
     *
     * @throws \Fingerprintjs\ServerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fingerprintjs\ServerAPI\Model\EventResponse
     */
    public function getEvent($request_id)
    {
        list($response) = $this->getEventWithHttpInfo($request_id);
        return $response;
    }

    /**
     * Operation getEventWithHttpInfo
     *
     * Get event by request ID
     *
     * @param  string $request_id Request ID (required)
     *
     * @throws \Fingerprintjs\ServerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fingerprintjs\ServerAPI\Model\EventResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEventWithHttpInfo($request_id)
    {
        $returnType = '\Fingerprintjs\ServerAPI\Model\EventResponse';
        $request = $this->getEventRequest($request_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fingerprintjs\ServerAPI\Model\EventResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fingerprintjs\ServerAPI\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fingerprintjs\ServerAPI\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fingerprintjs\ServerAPI\Model\ManyRequestsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEventAsync
     *
     * Get event by request ID
     *
     * @param  string $request_id Request ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventAsync($request_id)
    {
        return $this->getEventAsyncWithHttpInfo($request_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEventAsyncWithHttpInfo
     *
     * Get event by request ID
     *
     * @param  string $request_id Request ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventAsyncWithHttpInfo($request_id)
    {
        $returnType = '\Fingerprintjs\ServerAPI\Model\EventResponse';
        $request = $this->getEventRequest($request_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEvent'
     *
     * @param  string $request_id Request ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEventRequest($request_id)
    {
        // verify the required parameter 'request_id' is set
        if ($request_id === null || (is_array($request_id) && count($request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request_id when calling getEvent'
            );
        }

        $resourcePath = '/events/{request_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'request_id' . '}',
                ObjectSerializer::toPathValue($request_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Auth-API-Key');
        if ($apiKey !== null) {
            $headers['Auth-API-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('api_key');
        if ($apiKey !== null) {
            $queryParams['api_key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getVisits
     *
     * @param  string $visitor_id visitor_id (required)
     * @param  string $request_id Filter events by requestId (optional)
     * @param  string $linked_id Filter events by custom identifier (optional)
     * @param  int $limit Limit scanned results (optional)
     * @param  int $before Used to paginate results (optional)
     *
     * @throws \Fingerprintjs\ServerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fingerprintjs\ServerAPI\Model\Response
     */
    public function getVisits($visitor_id, $request_id = null, $linked_id = null, $limit = null, $before = null)
    {
        list($response) = $this->getVisitsWithHttpInfo($visitor_id, $request_id, $linked_id, $limit, $before);
        return $response;
    }

    /**
     * Operation getVisitsWithHttpInfo
     *
     * @param  string $visitor_id (required)
     * @param  string $request_id Filter events by requestId (optional)
     * @param  string $linked_id Filter events by custom identifier (optional)
     * @param  int $limit Limit scanned results (optional)
     * @param  int $before Used to paginate results (optional)
     *
     * @throws \Fingerprintjs\ServerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fingerprintjs\ServerAPI\Model\Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVisitsWithHttpInfo($visitor_id, $request_id = null, $linked_id = null, $limit = null, $before = null)
    {
        $returnType = '\Fingerprintjs\ServerAPI\Model\Response';
        $request = $this->getVisitsRequest($visitor_id, $request_id, $linked_id, $limit, $before);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fingerprintjs\ServerAPI\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fingerprintjs\ServerAPI\Model\ManyRequestsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getVisitsAsync
     *
     * 
     *
     * @param  string $visitor_id (required)
     * @param  string $request_id Filter events by requestId (optional)
     * @param  string $linked_id Filter events by custom identifier (optional)
     * @param  int $limit Limit scanned results (optional)
     * @param  int $before Used to paginate results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVisitsAsync($visitor_id, $request_id = null, $linked_id = null, $limit = null, $before = null)
    {
        return $this->getVisitsAsyncWithHttpInfo($visitor_id, $request_id, $linked_id, $limit, $before)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVisitsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $visitor_id (required)
     * @param  string $request_id Filter events by requestId (optional)
     * @param  string $linked_id Filter events by custom identifier (optional)
     * @param  int $limit Limit scanned results (optional)
     * @param  int $before Used to paginate results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVisitsAsyncWithHttpInfo($visitor_id, $request_id = null, $linked_id = null, $limit = null, $before = null)
    {
        $returnType = '\Fingerprintjs\ServerAPI\Model\Response';
        $request = $this->getVisitsRequest($visitor_id, $request_id, $linked_id, $limit, $before);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getVisits'
     *
     * @param  string $visitor_id (required)
     * @param  string $request_id Filter events by requestId (optional)
     * @param  string $linked_id Filter events by custom identifier (optional)
     * @param  int $limit Limit scanned results (optional)
     * @param  int $before Used to paginate results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getVisitsRequest($visitor_id, $request_id = null, $linked_id = null, $limit = null, $before = null)
    {
        // verify the required parameter 'visitor_id' is set
        if ($visitor_id === null || (is_array($visitor_id) && count($visitor_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $visitor_id when calling getVisits'
            );
        }

        $resourcePath = '/visitors/{visitor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($request_id !== null) {
            $queryParams['request_id'] = ObjectSerializer::toQueryValue($request_id, null);
        }
        // query params
        if ($linked_id !== null) {
            $queryParams['linked_id'] = ObjectSerializer::toQueryValue($linked_id, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($before !== null) {
            $queryParams['before'] = ObjectSerializer::toQueryValue($before, 'int32');
        }

        // path params
        if ($visitor_id !== null) {
            $resourcePath = str_replace(
                '{' . 'visitor_id' . '}',
                ObjectSerializer::toPathValue($visitor_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Auth-API-Key');
        if ($apiKey !== null) {
            $headers['Auth-API-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('api_key');
        if ($apiKey !== null) {
            $queryParams['api_key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
