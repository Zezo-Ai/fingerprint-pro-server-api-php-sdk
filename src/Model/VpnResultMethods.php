<?php
/**
 * VpnResultMethods.
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
 * VpnResultMethods Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class VpnResultMethods implements ModelInterface, \ArrayAccess
{
    /**
     * The original name of the model.
     */
    protected static string $swaggerModelName = 'VpnResult_methods';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'timezone_mismatch' => 'bool',
        'public_vpn' => 'bool',
        'auxiliary_mobile' => 'bool',
        'os_mismatch' => 'bool'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $swaggerFormats = [
        'timezone_mismatch' => null,
        'public_vpn' => null,
        'auxiliary_mobile' => null,
        'os_mismatch' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'timezone_mismatch' => 'timezoneMismatch',
        'public_vpn' => 'publicVPN',
        'auxiliary_mobile' => 'auxiliaryMobile',
        'os_mismatch' => 'osMismatch'];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'timezone_mismatch' => 'setTimezoneMismatch',
        'public_vpn' => 'setPublicVpn',
        'auxiliary_mobile' => 'setAuxiliaryMobile',
        'os_mismatch' => 'setOsMismatch'];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'timezone_mismatch' => 'getTimezoneMismatch',
        'public_vpn' => 'getPublicVpn',
        'auxiliary_mobile' => 'getAuxiliaryMobile',
        'os_mismatch' => 'getOsMismatch'];

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
        $this->container['timezone_mismatch'] = isset($data['timezone_mismatch']) ? $data['timezone_mismatch'] : null;
        $this->container['public_vpn'] = isset($data['public_vpn']) ? $data['public_vpn'] : null;
        $this->container['auxiliary_mobile'] = isset($data['auxiliary_mobile']) ? $data['auxiliary_mobile'] : null;
        $this->container['os_mismatch'] = isset($data['os_mismatch']) ? $data['os_mismatch'] : null;
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

        if (null === $this->container['timezone_mismatch']) {
            $invalidProperties[] = "'timezone_mismatch' can't be null";
        }
        if (null === $this->container['public_vpn']) {
            $invalidProperties[] = "'public_vpn' can't be null";
        }
        if (null === $this->container['auxiliary_mobile']) {
            $invalidProperties[] = "'auxiliary_mobile' can't be null";
        }
        if (null === $this->container['os_mismatch']) {
            $invalidProperties[] = "'os_mismatch' can't be null";
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
     * Gets timezone_mismatch.
     */
    public function getTimezoneMismatch(): bool
    {
        return $this->container['timezone_mismatch'];
    }

    /**
     * Sets timezone_mismatch.
     *
     * @param bool $timezone_mismatch the browser timezone doesn't match the timezone inferred from the request IP address
     *
     * @return $this
     */
    public function setTimezoneMismatch(bool $timezone_mismatch): self
    {
        $this->container['timezone_mismatch'] = $timezone_mismatch;

        return $this;
    }

    /**
     * Gets public_vpn.
     */
    public function getPublicVpn(): bool
    {
        return $this->container['public_vpn'];
    }

    /**
     * Sets public_vpn.
     *
     * @param bool $public_vpn request IP address is owned and used by a public VPN service provider
     *
     * @return $this
     */
    public function setPublicVpn(bool $public_vpn): self
    {
        $this->container['public_vpn'] = $public_vpn;

        return $this;
    }

    /**
     * Gets auxiliary_mobile.
     */
    public function getAuxiliaryMobile(): bool
    {
        return $this->container['auxiliary_mobile'];
    }

    /**
     * Sets auxiliary_mobile.
     *
     * @param bool $auxiliary_mobile This method applies to mobile devices only. Indicates the result of additional methods used to detect a VPN in mobile devices.
     *
     * @return $this
     */
    public function setAuxiliaryMobile(bool $auxiliary_mobile): self
    {
        $this->container['auxiliary_mobile'] = $auxiliary_mobile;

        return $this;
    }

    /**
     * Gets os_mismatch.
     */
    public function getOsMismatch(): bool
    {
        return $this->container['os_mismatch'];
    }

    /**
     * Sets os_mismatch.
     *
     * @param bool $os_mismatch the browser runs on a different operating system than the operating system inferred from the  request network signature
     *
     * @return $this
     */
    public function setOsMismatch(bool $os_mismatch): self
    {
        $this->container['os_mismatch'] = $os_mismatch;

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
