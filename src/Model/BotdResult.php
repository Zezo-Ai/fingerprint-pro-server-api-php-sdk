<?php
/**
 * BotdResult.
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
 * BotdResult Class Doc Comment.
 *
 * @category Class
 *
 * @description Contains all the information from Bot Detection product
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class BotdResult implements ModelInterface, \ArrayAccess
{
    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'BotdResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'ip' => 'string',
        'time' => '\DateTime',
        'url' => 'string',
        'user_agent' => 'string',
        'request_id' => 'string',
        'linked_id' => 'string',
        'bot' => '\Fingerprint\ServerAPI\Model\BotdDetectionResult'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerFormats = [
        'ip' => 'ipv4',
        'time' => 'date-time',
        'url' => null,
        'user_agent' => null,
        'request_id' => null,
        'linked_id' => null,
        'bot' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ip' => 'ip',
        'time' => 'time',
        'url' => 'url',
        'user_agent' => 'userAgent',
        'request_id' => 'requestId',
        'linked_id' => 'linkedId',
        'bot' => 'bot'];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'ip' => 'setIp',
        'time' => 'setTime',
        'url' => 'setUrl',
        'user_agent' => 'setUserAgent',
        'request_id' => 'setRequestId',
        'linked_id' => 'setLinkedId',
        'bot' => 'setBot'];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'ip' => 'getIp',
        'time' => 'getTime',
        'url' => 'getUrl',
        'user_agent' => 'getUserAgent',
        'request_id' => 'getRequestId',
        'linked_id' => 'getLinkedId',
        'bot' => 'getBot'];

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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['linked_id'] = isset($data['linked_id']) ? $data['linked_id'] : null;
        $this->container['bot'] = isset($data['bot']) ? $data['bot'] : null;
    }

    /**
     * Gets the string presentation of the object.
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

        if (null === $this->container['ip']) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if (null === $this->container['time']) {
            $invalidProperties[] = "'time' can't be null";
        }
        if (null === $this->container['url']) {
            $invalidProperties[] = "'url' can't be null";
        }
        if (null === $this->container['user_agent']) {
            $invalidProperties[] = "'user_agent' can't be null";
        }
        if (null === $this->container['request_id']) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if (null === $this->container['bot']) {
            $invalidProperties[] = "'bot' can't be null";
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
     * Gets ip.
     */
    public function getIp(): string
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip.
     *
     * @param string $ip IP address of the requesting browser or bot
     *
     * @return $this
     */
    public function setIp(string $ip): self
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets time.
     */
    public function getTime(): \DateTime
    {
        return $this->container['time'];
    }

    /**
     * Sets time.
     *
     * @param \DateTime $time Time in UTC when the request from the JS agent was made. We recommend to treat requests that are older than 2 minutes as malicious. Otherwise, request replay attacks are possible
     *
     * @return $this
     */
    public function setTime(\DateTime $time): self
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets url.
     */
    public function getUrl(): string
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param string $url page URL from which identification request was sent
     *
     * @return $this
     */
    public function setUrl(string $url): self
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets user_agent.
     */
    public function getUserAgent(): string
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent.
     *
     * @param string $user_agent user_agent
     *
     * @return $this
     */
    public function setUserAgent(string $user_agent): self
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets request_id.
     */
    public function getRequestId(): string
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id.
     *
     * @param string $request_id request_id
     *
     * @return $this
     */
    public function setRequestId(string $request_id): self
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets linked_id.
     */
    public function getLinkedId(): ?string
    {
        return $this->container['linked_id'];
    }

    /**
     * Sets linked_id.
     *
     * @param ?string $linked_id linked_id
     *
     * @return $this
     */
    public function setLinkedId(?string $linked_id): self
    {
        $this->container['linked_id'] = $linked_id;

        return $this;
    }

    /**
     * Gets bot.
     */
    public function getBot(): BotdDetectionResult
    {
        return $this->container['bot'];
    }

    /**
     * Sets bot.
     *
     * @param BotdDetectionResult $bot bot
     *
     * @return $this
     */
    public function setBot(BotdDetectionResult $bot): self
    {
        $this->container['bot'] = $bot;

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
