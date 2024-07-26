<?php
/**
 * IpInfoResultV4.
 *
 * PHP version 5
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
 * IpInfoResultV4 Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class IpInfoResultV4 implements ModelInterface, \ArrayAccess
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'IpInfoResult_v4';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'address' => 'string',
        'geolocation' => '\Fingerprint\ServerAPI\Model\IPLocation',
        'asn' => '\Fingerprint\ServerAPI\Model\ASN',
        'datacenter' => '\Fingerprint\ServerAPI\Model\DataCenter'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'address' => 'ipv4',
        'geolocation' => null,
        'asn' => null,
        'datacenter' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address' => 'address',
        'geolocation' => 'geolocation',
        'asn' => 'asn',
        'datacenter' => 'datacenter'];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'geolocation' => 'setGeolocation',
        'asn' => 'setAsn',
        'datacenter' => 'setDatacenter'];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'geolocation' => 'getGeolocation',
        'asn' => 'getAsn',
        'datacenter' => 'getDatacenter'];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['geolocation'] = isset($data['geolocation']) ? $data['geolocation'] : null;
        $this->container['asn'] = isset($data['asn']) ? $data['asn'] : null;
        $this->container['datacenter'] = isset($data['datacenter']) ? $data['datacenter'] : null;
    }

    /**
     * Gets the string presentation of the object.
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

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['address']) {
            $invalidProperties[] = "'address' can't be null";
        }
        if (null === $this->container['geolocation']) {
            $invalidProperties[] = "'geolocation' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets geolocation.
     *
     * @return IPLocation
     */
    public function getGeolocation()
    {
        return $this->container['geolocation'];
    }

    /**
     * Sets geolocation.
     *
     * @param IPLocation $geolocation geolocation
     *
     * @return $this
     */
    public function setGeolocation($geolocation)
    {
        $this->container['geolocation'] = $geolocation;

        return $this;
    }

    /**
     * Gets asn.
     *
     * @return ASN
     */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
     * Sets asn.
     *
     * @param ASN $asn asn
     *
     * @return $this
     */
    public function setAsn($asn)
    {
        $this->container['asn'] = $asn;

        return $this;
    }

    /**
     * Gets datacenter.
     *
     * @return DataCenter
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter.
     *
     * @param DataCenter $datacenter datacenter
     *
     * @return $this
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}
