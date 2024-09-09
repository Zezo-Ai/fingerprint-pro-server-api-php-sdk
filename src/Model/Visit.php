<?php
/**
 * Visit.
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
 * Visit Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Visit implements ModelInterface, \ArrayAccess
{
    /**
     * The original name of the model.
     *
     */
    protected static string $swaggerModelName = 'Visit';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'request_id' => 'string',
        'browser_details' => '\Fingerprint\ServerAPI\Model\BrowserDetails',
        'incognito' => 'bool',
        'ip' => 'string',
        'ip_location' => '\Fingerprint\ServerAPI\Model\DeprecatedIPLocation',
        'timestamp' => 'int',
        'time' => '\DateTime',
        'url' => 'string',
        'tag' => 'map[string,object]',
        'linked_id' => 'string',
        'confidence' => '\Fingerprint\ServerAPI\Model\Confidence',
        'visitor_found' => 'bool',
        'first_seen_at' => '\Fingerprint\ServerAPI\Model\SeenAt',
        'last_seen_at' => '\Fingerprint\ServerAPI\Model\SeenAt'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerFormats = [
        'request_id' => null,
        'browser_details' => null,
        'incognito' => null,
        'ip' => 'ipv4',
        'ip_location' => null,
        'timestamp' => 'int64',
        'time' => 'date-time',
        'url' => null,
        'tag' => null,
        'linked_id' => null,
        'confidence' => null,
        'visitor_found' => null,
        'first_seen_at' => null,
        'last_seen_at' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'request_id' => 'requestId',
        'browser_details' => 'browserDetails',
        'incognito' => 'incognito',
        'ip' => 'ip',
        'ip_location' => 'ipLocation',
        'timestamp' => 'timestamp',
        'time' => 'time',
        'url' => 'url',
        'tag' => 'tag',
        'linked_id' => 'linkedId',
        'confidence' => 'confidence',
        'visitor_found' => 'visitorFound',
        'first_seen_at' => 'firstSeenAt',
        'last_seen_at' => 'lastSeenAt'];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'request_id' => 'setRequestId',
        'browser_details' => 'setBrowserDetails',
        'incognito' => 'setIncognito',
        'ip' => 'setIp',
        'ip_location' => 'setIpLocation',
        'timestamp' => 'setTimestamp',
        'time' => 'setTime',
        'url' => 'setUrl',
        'tag' => 'setTag',
        'linked_id' => 'setLinkedId',
        'confidence' => 'setConfidence',
        'visitor_found' => 'setVisitorFound',
        'first_seen_at' => 'setFirstSeenAt',
        'last_seen_at' => 'setLastSeenAt'];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'request_id' => 'getRequestId',
        'browser_details' => 'getBrowserDetails',
        'incognito' => 'getIncognito',
        'ip' => 'getIp',
        'ip_location' => 'getIpLocation',
        'timestamp' => 'getTimestamp',
        'time' => 'getTime',
        'url' => 'getUrl',
        'tag' => 'getTag',
        'linked_id' => 'getLinkedId',
        'confidence' => 'getConfidence',
        'visitor_found' => 'getVisitorFound',
        'first_seen_at' => 'getFirstSeenAt',
        'last_seen_at' => 'getLastSeenAt'];

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
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['browser_details'] = isset($data['browser_details']) ? $data['browser_details'] : null;
        $this->container['incognito'] = isset($data['incognito']) ? $data['incognito'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['ip_location'] = isset($data['ip_location']) ? $data['ip_location'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['linked_id'] = isset($data['linked_id']) ? $data['linked_id'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['visitor_found'] = isset($data['visitor_found']) ? $data['visitor_found'] : null;
        $this->container['first_seen_at'] = isset($data['first_seen_at']) ? $data['first_seen_at'] : null;
        $this->container['last_seen_at'] = isset($data['last_seen_at']) ? $data['last_seen_at'] : null;
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

        if (null === $this->container['request_id']) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if (null === $this->container['browser_details']) {
            $invalidProperties[] = "'browser_details' can't be null";
        }
        if (null === $this->container['incognito']) {
            $invalidProperties[] = "'incognito' can't be null";
        }
        if (null === $this->container['ip']) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if (null === $this->container['timestamp']) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if (null === $this->container['time']) {
            $invalidProperties[] = "'time' can't be null";
        }
        if (null === $this->container['url']) {
            $invalidProperties[] = "'url' can't be null";
        }
        if (null === $this->container['visitor_found']) {
            $invalidProperties[] = "'visitor_found' can't be null";
        }
        if (null === $this->container['first_seen_at']) {
            $invalidProperties[] = "'first_seen_at' can't be null";
        }
        if (null === $this->container['last_seen_at']) {
            $invalidProperties[] = "'last_seen_at' can't be null";
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
     * Gets request_id.
     */
    public function getRequestId(): string
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id.
     *
     * @param string $request_id unique identifier of the user's identification request
     *
     * @return $this
     */
    public function setRequestId(string $request_id): self
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets browser_details.
     */
    public function getBrowserDetails(): BrowserDetails
    {
        return $this->container['browser_details'];
    }

    /**
     * Sets browser_details.
     *
     * @param BrowserDetails $browser_details browser_details
     *
     * @return $this
     */
    public function setBrowserDetails(BrowserDetails $browser_details): self
    {
        $this->container['browser_details'] = $browser_details;

        return $this;
    }

    /**
     * Gets incognito.
     */
    public function getIncognito(): bool
    {
        return $this->container['incognito'];
    }

    /**
     * Sets incognito.
     *
     * @param bool $incognito flag if user used incognito session
     *
     * @return $this
     */
    public function setIncognito(bool $incognito): self
    {
        $this->container['incognito'] = $incognito;

        return $this;
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
     * @param string $ip ip
     *
     * @return $this
     */
    public function setIp(string $ip): self
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets ip_location.
     */
    public function getIpLocation(): ?DeprecatedIPLocation
    {
        return $this->container['ip_location'];
    }

    /**
     * Sets ip_location.
     *
     * @param ?\Fingerprint\ServerAPI\Model\DeprecatedIPLocation $ip_location ip_location
     *
     * @return $this
     */
    public function setIpLocation(?DeprecatedIPLocation $ip_location): self
    {
        $this->container['ip_location'] = $ip_location;

        return $this;
    }

    /**
     * Gets timestamp.
     */
    public function getTimestamp(): int
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp.
     *
     * @param int $timestamp timestamp of the event with millisecond precision in Unix time
     *
     * @return $this
     */
    public function setTimestamp(int $timestamp): self
    {
        $this->container['timestamp'] = $timestamp;

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
     * @param \DateTime $time time expressed according to ISO 8601 in UTC format
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
     * @param string $url page URL from which the identification request was sent
     *
     * @return $this
     */
    public function setUrl(string $url): self
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets tag.
     *
     * @return ?map[string,object]
     */
    public function getTag(): ?array
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag.
     *
     * @param ?map[string,object] $tag A customer-provided value or an object that was sent with identification request
     *
     * @return $this
     */
    public function setTag(?array $tag): self
    {
        $this->container['tag'] = $tag;

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
     * @param ?string $linked_id a customer-provided id that was sent with identification request
     *
     * @return $this
     */
    public function setLinkedId(?string $linked_id): self
    {
        $this->container['linked_id'] = $linked_id;

        return $this;
    }

    /**
     * Gets confidence.
     */
    public function getConfidence(): ?Confidence
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence.
     *
     * @param ?\Fingerprint\ServerAPI\Model\Confidence $confidence confidence
     *
     * @return $this
     */
    public function setConfidence(?Confidence $confidence): self
    {
        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets visitor_found.
     */
    public function getVisitorFound(): bool
    {
        return $this->container['visitor_found'];
    }

    /**
     * Sets visitor_found.
     *
     * @param bool $visitor_found attribute represents if a visitor had been identified before
     *
     * @return $this
     */
    public function setVisitorFound(bool $visitor_found): self
    {
        $this->container['visitor_found'] = $visitor_found;

        return $this;
    }

    /**
     * Gets first_seen_at.
     */
    public function getFirstSeenAt(): SeenAt
    {
        return $this->container['first_seen_at'];
    }

    /**
     * Sets first_seen_at.
     *
     * @param SeenAt $first_seen_at first_seen_at
     *
     * @return $this
     */
    public function setFirstSeenAt(SeenAt $first_seen_at): self
    {
        $this->container['first_seen_at'] = $first_seen_at;

        return $this;
    }

    /**
     * Gets last_seen_at.
     */
    public function getLastSeenAt(): SeenAt
    {
        return $this->container['last_seen_at'];
    }

    /**
     * Sets last_seen_at.
     *
     * @param SeenAt $last_seen_at last_seen_at
     *
     * @return $this
     */
    public function setLastSeenAt(SeenAt $last_seen_at): self
    {
        $this->container['last_seen_at'] = $last_seen_at;

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
