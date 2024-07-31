<?php
/**
 * ApiException
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

namespace Fingerprint\ServerAPI;

use Psr\Http\Message\ResponseInterface;

/**
 * ApiException Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ApiException extends \Exception
{
    protected ResponseInterface $responseObject;

    public function __construct(?string $message = '', ?int $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function setResponseObject(ResponseInterface $obj): void
    {
        $this->responseObject = $obj;
    }

    public function getResponseObject(): ResponseInterface
    {
        return $this->responseObject;
    }
}
