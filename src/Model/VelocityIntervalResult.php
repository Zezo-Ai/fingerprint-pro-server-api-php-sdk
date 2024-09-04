<?php
/**
 * VelocityIntervalResult.
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

namespace Fingerprint\ServerAPI\Model;

use Fingerprint\ServerAPI\ObjectSerializer;

/**
 * VelocityIntervalResult Class Doc Comment.
 *
 * @category Class
 *
 * @description Is absent if the velocity data could not be generated for the visitor ID.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class VelocityIntervalResult implements ModelInterface, \ArrayAccess
{
    /**
     * The original name of the model.
     *
     */
    protected static string $swaggerModelName = 'VelocityIntervalResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        '_5m' => 'int',
        '_1h' => 'int',
        '_24h' => 'int'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerFormats = [
        '_5m' => null,
        '_1h' => null,
        '_24h' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        '_5m' => '5m',
        '_1h' => '1h',
        '_24h' => '24h'];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        '_5m' => 'set5m',
        '_1h' => 'set1h',
        '_24h' => 'set24h'];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        '_5m' => 'get5m',
        '_1h' => 'get1h',
        '_24h' => 'get24h'];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->container['_5m'] = isset($data['_5m']) ? $data['_5m'] : null;
        $this->container['_1h'] = isset($data['_1h']) ? $data['_1h'] : null;
        $this->container['_24h'] = isset($data['_24h']) ? $data['_24h'] : null;
    }

    /**
     * Gets the string presentation of the object.
     *
     */
    public function __toString(): string
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (null === $this->container['_5m']) {
            $invalidProperties[] = "'_5m' can't be null";
        }
        if (null === $this->container['_1h']) {
            $invalidProperties[] = "'_1h' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets _5m.
     */
    public function get5m(): int
    {
        return $this->container['_5m'];
    }

    /**
     * Sets _5m.
     *
     * @param int $_5m _5m
     *
     * @return $this
     */
    public function set5m(int $_5m): self
    {
        $this->container['_5m'] = $_5m;

        return $this;
    }

    /**
     * Gets _1h.
     */
    public function get1h(): int
    {
        return $this->container['_1h'];
    }

    /**
     * Sets _1h.
     *
     * @param int $_1h _1h
     *
     * @return $this
     */
    public function set1h(int $_1h): self
    {
        $this->container['_1h'] = $_1h;

        return $this;
    }

    /**
     * Gets _24h.
     *
     * @return ?int
     */
    public function get24h(): ?int
    {
        return $this->container['_24h'];
    }

    /**
     * Sets _24h.
     *
     * @param ?int $_24h The `24h` interval of `distinctIp`, `distinctLinkedId`, and `distinctCountry` will be omitted if the number of `events`` for the visitor ID in the last 24 hours (`events.intervals.['24h']`) is higher than 20.000.
     *
     * @return $this
     */
    public function set24h(?int $_24h): self
    {
        $this->container['_24h'] = $_24h;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     */
    public function offsetSet($offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }
}
