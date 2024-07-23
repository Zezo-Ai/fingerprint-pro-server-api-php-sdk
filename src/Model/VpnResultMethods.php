<?php
/**
 * VpnResultMethods
 *
 * PHP version 5
 *
 * @category Class
 * @package  Fingerprint\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fingerprint Pro Server API
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

use ArrayAccess;
use Fingerprint\ServerAPI\ObjectSerializer;

/**
 * VpnResultMethods Class Doc Comment
 *
 * @category Class
 * @package  Fingerprint\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VpnResultMethods implements ModelInterface, ArrayAccess
{
    // use \Fingerprint\ServerAPI\Traits\WithRawResponse;
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VpnResult_methods';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timezone_mismatch' => 'bool',
'public_vpn' => 'bool',
'auxiliary_mobile' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timezone_mismatch' => null,
'public_vpn' => null,
'auxiliary_mobile' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'timezone_mismatch' => 'timezoneMismatch',
'public_vpn' => 'publicVPN',
'auxiliary_mobile' => 'auxiliaryMobile'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timezone_mismatch' => 'setTimezoneMismatch',
'public_vpn' => 'setPublicVpn',
'auxiliary_mobile' => 'setAuxiliaryMobile'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timezone_mismatch' => 'getTimezoneMismatch',
'public_vpn' => 'getPublicVpn',
'auxiliary_mobile' => 'getAuxiliaryMobile'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['timezone_mismatch'] = isset($data['timezone_mismatch']) ? $data['timezone_mismatch'] : null;
        $this->container['public_vpn'] = isset($data['public_vpn']) ? $data['public_vpn'] : null;
        $this->container['auxiliary_mobile'] = isset($data['auxiliary_mobile']) ? $data['auxiliary_mobile'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['timezone_mismatch'] === null) {
            $invalidProperties[] = "'timezone_mismatch' can't be null";
        }
        if ($this->container['public_vpn'] === null) {
            $invalidProperties[] = "'public_vpn' can't be null";
        }
        if ($this->container['auxiliary_mobile'] === null) {
            $invalidProperties[] = "'auxiliary_mobile' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets timezone_mismatch
     *
     * @return bool
     */
    public function getTimezoneMismatch()
    {
        return $this->container['timezone_mismatch'];
    }

    /**
     * Sets timezone_mismatch
     *
     * @param bool $timezone_mismatch User's browser timezone doesn't match the timezone from which the request was originally made.
     *
     * @return $this
     */
    public function setTimezoneMismatch($timezone_mismatch)
    {
        $this->container['timezone_mismatch'] = $timezone_mismatch;

        return $this;
    }

    /**
     * Gets public_vpn
     *
     * @return bool
     */
    public function getPublicVpn()
    {
        return $this->container['public_vpn'];
    }

    /**
     * Sets public_vpn
     *
     * @param bool $public_vpn Request IP address is owned and used by a public VPN service provider.
     *
     * @return $this
     */
    public function setPublicVpn($public_vpn)
    {
        $this->container['public_vpn'] = $public_vpn;

        return $this;
    }

    /**
     * Gets auxiliary_mobile
     *
     * @return bool
     */
    public function getAuxiliaryMobile()
    {
        return $this->container['auxiliary_mobile'];
    }

    /**
     * Sets auxiliary_mobile
     *
     * @param bool $auxiliary_mobile This method applies to mobile devices only. Indicates the result of additional methods used to detect a VPN in mobile devices.
     *
     * @return $this
     */
    public function setAuxiliaryMobile($auxiliary_mobile)
    {
        $this->container['auxiliary_mobile'] = $auxiliary_mobile;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
