<?php
/**
 * Identification.
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
 * Identification Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Identification implements ModelInterface, \ArrayAccess
{
    /**
     * The original name of the model.
     *
     */
    protected static string $swaggerModelName = 'Identification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'visitor_id' => 'string',
        'request_id' => 'string',
        'browser_details' => '\Fingerprint\ServerAPI\Model\BrowserDetails',
        'incognito' => 'bool',
        'ip' => 'string',
        'ip_location' => '\Fingerprint\ServerAPI\Model\DeprecatedGeolocation',
        'linked_id' => 'string',
        'suspect' => 'bool',
        'timestamp' => 'int',
        'time' => '\DateTime',
        'url' => 'string',
        'tag' => 'array',
        'confidence' => '\Fingerprint\ServerAPI\Model\IdentificationConfidence',
        'visitor_found' => 'bool',
        'first_seen_at' => '\Fingerprint\ServerAPI\Model\IdentificationSeenAt',
        'last_seen_at' => '\Fingerprint\ServerAPI\Model\IdentificationSeenAt',
        'components' => 'array'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerFormats = [
        'visitor_id' => null,
        'request_id' => null,
        'browser_details' => null,
        'incognito' => null,
        'ip' => null,
        'ip_location' => null,
        'linked_id' => null,
        'suspect' => null,
        'timestamp' => 'int64',
        'time' => 'date-time',
        'url' => null,
        'tag' => null,
        'confidence' => null,
        'visitor_found' => null,
        'first_seen_at' => null,
        'last_seen_at' => null,
        'components' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'visitor_id' => 'visitorId',
        'request_id' => 'requestId',
        'browser_details' => 'browserDetails',
        'incognito' => 'incognito',
        'ip' => 'ip',
        'ip_location' => 'ipLocation',
        'linked_id' => 'linkedId',
        'suspect' => 'suspect',
        'timestamp' => 'timestamp',
        'time' => 'time',
        'url' => 'url',
        'tag' => 'tag',
        'confidence' => 'confidence',
        'visitor_found' => 'visitorFound',
        'first_seen_at' => 'firstSeenAt',
        'last_seen_at' => 'lastSeenAt',
        'components' => 'components'];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'visitor_id' => 'setVisitorId',
        'request_id' => 'setRequestId',
        'browser_details' => 'setBrowserDetails',
        'incognito' => 'setIncognito',
        'ip' => 'setIp',
        'ip_location' => 'setIpLocation',
        'linked_id' => 'setLinkedId',
        'suspect' => 'setSuspect',
        'timestamp' => 'setTimestamp',
        'time' => 'setTime',
        'url' => 'setUrl',
        'tag' => 'setTag',
        'confidence' => 'setConfidence',
        'visitor_found' => 'setVisitorFound',
        'first_seen_at' => 'setFirstSeenAt',
        'last_seen_at' => 'setLastSeenAt',
        'components' => 'setComponents'];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'visitor_id' => 'getVisitorId',
        'request_id' => 'getRequestId',
        'browser_details' => 'getBrowserDetails',
        'incognito' => 'getIncognito',
        'ip' => 'getIp',
        'ip_location' => 'getIpLocation',
        'linked_id' => 'getLinkedId',
        'suspect' => 'getSuspect',
        'timestamp' => 'getTimestamp',
        'time' => 'getTime',
        'url' => 'getUrl',
        'tag' => 'getTag',
        'confidence' => 'getConfidence',
        'visitor_found' => 'getVisitorFound',
        'first_seen_at' => 'getFirstSeenAt',
        'last_seen_at' => 'getLastSeenAt',
        'components' => 'getComponents'];

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
        $this->container['visitor_id'] = isset($data['visitor_id']) ? $data['visitor_id'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['browser_details'] = isset($data['browser_details']) ? $data['browser_details'] : null;
        $this->container['incognito'] = isset($data['incognito']) ? $data['incognito'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['ip_location'] = isset($data['ip_location']) ? $data['ip_location'] : null;
        $this->container['linked_id'] = isset($data['linked_id']) ? $data['linked_id'] : null;
        $this->container['suspect'] = isset($data['suspect']) ? $data['suspect'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['visitor_found'] = isset($data['visitor_found']) ? $data['visitor_found'] : null;
        $this->container['first_seen_at'] = isset($data['first_seen_at']) ? $data['first_seen_at'] : null;
        $this->container['last_seen_at'] = isset($data['last_seen_at']) ? $data['last_seen_at'] : null;
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
    }

    /**
     * Gets the string presentation of the object.
     *
     */
    public function __toString(): string
    {
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

        if (null === $this->container['visitor_id']) {
            $invalidProperties[] = "'visitor_id' can't be null";
        }
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
        if (null === $this->container['tag']) {
            $invalidProperties[] = "'tag' can't be null";
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
     * Gets visitor_id.
     */
    public function getVisitorId(): string
    {
        return $this->container['visitor_id'];
    }

    /**
     * Sets visitor_id.
     *
     * @param string $visitor_id string of 20 characters that uniquely identifies the visitor's browser
     *
     * @return $this
     */
    public function setVisitorId(string $visitor_id): self
    {
        $this->container['visitor_id'] = $visitor_id;

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
     * @param string $request_id unique identifier of the user's request
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
     * Gets ip_location.
     */
    public function getIpLocation(): ?DeprecatedGeolocation
    {
        return $this->container['ip_location'];
    }

    /**
     * Sets ip_location.
     *
     * @param ?\Fingerprint\ServerAPI\Model\DeprecatedGeolocation $ip_location ip_location
     *
     * @return $this
     */
    public function setIpLocation(?DeprecatedGeolocation $ip_location): self
    {
        $this->container['ip_location'] = $ip_location;

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
     * @param ?string $linked_id a customer-provided id that was sent with the request
     *
     * @return $this
     */
    public function setLinkedId(?string $linked_id): self
    {
        $this->container['linked_id'] = $linked_id;

        return $this;
    }

    /**
     * Gets suspect.
     */
    public function getSuspect(): ?bool
    {
        return $this->container['suspect'];
    }

    /**
     * Sets suspect.
     *
     * @param ?bool $suspect Field is `true` if you have previously set the `suspect` flag for this event using the [Server API Update event endpoint](https://dev.fingerprint.com/reference/updateevent).
     *
     * @return $this
     */
    public function setSuspect(?bool $suspect): self
    {
        $this->container['suspect'] = $suspect;

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
     * @param \DateTime $time Time expressed according to ISO 8601 in UTC format, when the request from the JS agent was made. We recommend to treat requests that are older than 2 minutes as malicious. Otherwise, request replay attacks are possible.
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
     * @param string $url page URL from which the request was sent
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
     */
    public function getTag(): array
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag.
     *
     * @param array $tag tag
     *
     * @return $this
     */
    public function setTag(array $tag): self
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets confidence.
     */
    public function getConfidence(): ?IdentificationConfidence
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence.
     *
     * @param ?\Fingerprint\ServerAPI\Model\IdentificationConfidence $confidence confidence
     *
     * @return $this
     */
    public function setConfidence(?IdentificationConfidence $confidence): self
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
    public function getFirstSeenAt(): IdentificationSeenAt
    {
        return $this->container['first_seen_at'];
    }

    /**
     * Sets first_seen_at.
     *
     * @param IdentificationSeenAt $first_seen_at first_seen_at
     *
     * @return $this
     */
    public function setFirstSeenAt(IdentificationSeenAt $first_seen_at): self
    {
        $this->container['first_seen_at'] = $first_seen_at;

        return $this;
    }

    /**
     * Gets last_seen_at.
     */
    public function getLastSeenAt(): IdentificationSeenAt
    {
        return $this->container['last_seen_at'];
    }

    /**
     * Sets last_seen_at.
     *
     * @param IdentificationSeenAt $last_seen_at last_seen_at
     *
     * @return $this
     */
    public function setLastSeenAt(IdentificationSeenAt $last_seen_at): self
    {
        $this->container['last_seen_at'] = $last_seen_at;

        return $this;
    }

    /**
     * Gets components.
     */
    public function getComponents(): ?array
    {
        return $this->container['components'];
    }

    /**
     * Sets components.
     *
     * @param ?array $components components
     *
     * @return $this
     */
    public function setComponents(?array $components): self
    {
        $this->container['components'] = $components;

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

    /**
     * Gets the string presentation of the object in a pretty JSON format.
     *
     */
    public function toPrettyString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}
