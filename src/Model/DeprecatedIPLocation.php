<?php
/**
 * DeprecatedIPLocation.
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
 * DeprecatedIPLocation Class Doc Comment.
 *
 * @category Class
 *
 * @description This field is **deprecated** and will not return a result for **applications created after January 23rd, 2024**. Please use the [IP Geolocation Smart signal](https://dev.fingerprint.com/docs/smart-signals-overview#ip-geolocation) for geolocation information.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class DeprecatedIPLocation implements ModelInterface, \ArrayAccess
{
    /**
     * The original name of the model.
     *
     */
    protected static string $swaggerModelName = 'DeprecatedIPLocation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'accuracy_radius' => 'int',
        'latitude' => 'double',
        'longitude' => 'double',
        'postal_code' => 'string',
        'timezone' => 'string',
        'city' => '\Fingerprint\ServerAPI\Model\DeprecatedIPLocationCity',
        'country' => '\Fingerprint\ServerAPI\Model\Location',
        'continent' => '\Fingerprint\ServerAPI\Model\Location',
        'subdivisions' => '\Fingerprint\ServerAPI\Model\Subdivision[]'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerFormats = [
        'accuracy_radius' => null,
        'latitude' => 'double',
        'longitude' => 'double',
        'postal_code' => null,
        'timezone' => 'timezone',
        'city' => null,
        'country' => null,
        'continent' => null,
        'subdivisions' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'accuracy_radius' => 'accuracyRadius',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'postal_code' => 'postalCode',
        'timezone' => 'timezone',
        'city' => 'city',
        'country' => 'country',
        'continent' => 'continent',
        'subdivisions' => 'subdivisions'];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'accuracy_radius' => 'setAccuracyRadius',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'postal_code' => 'setPostalCode',
        'timezone' => 'setTimezone',
        'city' => 'setCity',
        'country' => 'setCountry',
        'continent' => 'setContinent',
        'subdivisions' => 'setSubdivisions'];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'accuracy_radius' => 'getAccuracyRadius',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'postal_code' => 'getPostalCode',
        'timezone' => 'getTimezone',
        'city' => 'getCity',
        'country' => 'getCountry',
        'continent' => 'getContinent',
        'subdivisions' => 'getSubdivisions'];

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
        $this->container['accuracy_radius'] = isset($data['accuracy_radius']) ? $data['accuracy_radius'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['continent'] = isset($data['continent']) ? $data['continent'] : null;
        $this->container['subdivisions'] = isset($data['subdivisions']) ? $data['subdivisions'] : null;
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
        return [];
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
     * Gets accuracy_radius.
     *
     * @return ?int
     */
    public function getAccuracyRadius(): ?int
    {
        return $this->container['accuracy_radius'];
    }

    /**
     * Sets accuracy_radius.
     *
     * @param ?int $accuracy_radius the IP address is likely to be within this radius (in km) of the specified location
     *
     * @return $this
     */
    public function setAccuracyRadius(?int $accuracy_radius): self
    {
        $this->container['accuracy_radius'] = $accuracy_radius;

        return $this;
    }

    /**
     * Gets latitude.
     *
     * @return ?double
     */
    public function getLatitude(): ?float
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude.
     *
     * @param ?double $latitude latitude
     *
     * @return $this
     */
    public function setLatitude(?float $latitude): self
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude.
     *
     * @return ?double
     */
    public function getLongitude(): ?float
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude.
     *
     * @param ?double $longitude longitude
     *
     * @return $this
     */
    public function setLongitude(?float $longitude): self
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets postal_code.
     *
     * @return ?string
     */
    public function getPostalCode(): ?string
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param ?string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode(?string $postal_code): self
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets timezone.
     *
     * @return ?string
     */
    public function getTimezone(): ?string
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone.
     *
     * @param ?string $timezone timezone
     *
     * @return $this
     */
    public function setTimezone(?string $timezone): self
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets city.
     *
     * @return ?\Fingerprint\ServerAPI\Model\DeprecatedIPLocationCity
     */
    public function getCity(): ?DeprecatedIPLocationCity
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param ?\Fingerprint\ServerAPI\Model\DeprecatedIPLocationCity $city city
     *
     * @return $this
     */
    public function setCity(?DeprecatedIPLocationCity $city): self
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country.
     *
     * @return ?\Fingerprint\ServerAPI\Model\Location
     */
    public function getCountry(): ?Location
    {
        return $this->container['country'];
    }

    /**
     * Sets country.
     *
     * @param ?\Fingerprint\ServerAPI\Model\Location $country country
     *
     * @return $this
     */
    public function setCountry(?Location $country): self
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets continent.
     *
     * @return ?\Fingerprint\ServerAPI\Model\Location
     */
    public function getContinent(): ?Location
    {
        return $this->container['continent'];
    }

    /**
     * Sets continent.
     *
     * @param ?\Fingerprint\ServerAPI\Model\Location $continent continent
     *
     * @return $this
     */
    public function setContinent(?Location $continent): self
    {
        $this->container['continent'] = $continent;

        return $this;
    }

    /**
     * Gets subdivisions.
     *
     * @return ?\Fingerprint\ServerAPI\Model\Subdivision[]
     */
    public function getSubdivisions(): ?array
    {
        return $this->container['subdivisions'];
    }

    /**
     * Sets subdivisions.
     *
     * @param ?\Fingerprint\ServerAPI\Model\Subdivision[] $subdivisions subdivisions
     *
     * @return $this
     */
    public function setSubdivisions(?array $subdivisions): self
    {
        $this->container['subdivisions'] = $subdivisions;

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
