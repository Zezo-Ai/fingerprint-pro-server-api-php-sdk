<?php
/**
 * Response
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

use \ArrayAccess;
use \Fingerprint\ServerAPI\ObjectSerializer;

/**
 * Response Class Doc Comment
 *
 * @category Class
 * @description Fields `lastTimestamp` and `paginationKey` added when `limit` or `before` parameter provided and there is more data to show
 * @package  Fingerprint\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'visitor_id' => 'string',
'visits' => '\Fingerprint\ServerAPI\Model\ResponseVisits[]',
'last_timestamp' => 'int',
'pagination_key' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'visitor_id' => null,
'visits' => null,
'last_timestamp' => 'int64',
'pagination_key' => null    ];

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
        'visitor_id' => 'visitorId',
'visits' => 'visits',
'last_timestamp' => 'lastTimestamp',
'pagination_key' => 'paginationKey'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'visitor_id' => 'setVisitorId',
'visits' => 'setVisits',
'last_timestamp' => 'setLastTimestamp',
'pagination_key' => 'setPaginationKey'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'visitor_id' => 'getVisitorId',
'visits' => 'getVisits',
'last_timestamp' => 'getLastTimestamp',
'pagination_key' => 'getPaginationKey'    ];

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
        $this->container['visitor_id'] = isset($data['visitor_id']) ? $data['visitor_id'] : null;
        $this->container['visits'] = isset($data['visits']) ? $data['visits'] : null;
        $this->container['last_timestamp'] = isset($data['last_timestamp']) ? $data['last_timestamp'] : null;
        $this->container['pagination_key'] = isset($data['pagination_key']) ? $data['pagination_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['visitor_id'] === null) {
            $invalidProperties[] = "'visitor_id' can't be null";
        }
        if ($this->container['visits'] === null) {
            $invalidProperties[] = "'visits' can't be null";
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
     * Gets visitor_id
     *
     * @return string
     */
    public function getVisitorId()
    {
        return $this->container['visitor_id'];
    }

    /**
     * Sets visitor_id
     *
     * @param string $visitor_id visitor_id
     *
     * @return $this
     */
    public function setVisitorId($visitor_id)
    {
        $this->container['visitor_id'] = $visitor_id;

        return $this;
    }

    /**
     * Gets visits
     *
     * @return \Fingerprint\ServerAPI\Model\ResponseVisits[]
     */
    public function getVisits()
    {
        return $this->container['visits'];
    }

    /**
     * Sets visits
     *
     * @param \Fingerprint\ServerAPI\Model\ResponseVisits[] $visits visits
     *
     * @return $this
     */
    public function setVisits($visits)
    {
        $this->container['visits'] = $visits;

        return $this;
    }

    /**
     * Gets last_timestamp
     *
     * @return int
     */
    public function getLastTimestamp()
    {
        return $this->container['last_timestamp'];
    }

    /**
     * Sets last_timestamp
     *
     * @param int $last_timestamp ⚠️ Deprecated paging attribute, please use `paginationKey` instead. Timestamp of the last visit in the current page of results.
     *
     * @return $this
     */
    public function setLastTimestamp($last_timestamp)
    {
        $this->container['last_timestamp'] = $last_timestamp;

        return $this;
    }

    /**
     * Gets pagination_key
     *
     * @return string
     */
    public function getPaginationKey()
    {
        return $this->container['pagination_key'];
    }

    /**
     * Sets pagination_key
     *
     * @param string $pagination_key Request ID of the last visit in the current page of results. Use this value in the following request as the `paginationKey` parameter to get the next page of results.
     *
     * @return $this
     */
    public function setPaginationKey($pagination_key)
    {
        $this->container['pagination_key'] = $pagination_key;

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
