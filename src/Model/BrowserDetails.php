<?php
/**
 * BrowserDetails
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
 * BrowserDetails Class Doc Comment
 *
 * @category Class
 * @package  Fingerprint\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BrowserDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BrowserDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'browser_name' => 'string',
'browser_major_version' => 'string',
'browser_full_version' => 'string',
'os' => 'string',
'os_version' => 'string',
'device' => 'string',
'user_agent' => 'string',
'bot_probability' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'browser_name' => null,
'browser_major_version' => null,
'browser_full_version' => null,
'os' => null,
'os_version' => null,
'device' => null,
'user_agent' => null,
'bot_probability' => null    ];

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
        'browser_name' => 'browserName',
'browser_major_version' => 'browserMajorVersion',
'browser_full_version' => 'browserFullVersion',
'os' => 'os',
'os_version' => 'osVersion',
'device' => 'device',
'user_agent' => 'userAgent',
'bot_probability' => 'botProbability'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'browser_name' => 'setBrowserName',
'browser_major_version' => 'setBrowserMajorVersion',
'browser_full_version' => 'setBrowserFullVersion',
'os' => 'setOs',
'os_version' => 'setOsVersion',
'device' => 'setDevice',
'user_agent' => 'setUserAgent',
'bot_probability' => 'setBotProbability'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'browser_name' => 'getBrowserName',
'browser_major_version' => 'getBrowserMajorVersion',
'browser_full_version' => 'getBrowserFullVersion',
'os' => 'getOs',
'os_version' => 'getOsVersion',
'device' => 'getDevice',
'user_agent' => 'getUserAgent',
'bot_probability' => 'getBotProbability'    ];

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
        $this->container['browser_name'] = isset($data['browser_name']) ? $data['browser_name'] : null;
        $this->container['browser_major_version'] = isset($data['browser_major_version']) ? $data['browser_major_version'] : null;
        $this->container['browser_full_version'] = isset($data['browser_full_version']) ? $data['browser_full_version'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['os_version'] = isset($data['os_version']) ? $data['os_version'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
        $this->container['bot_probability'] = isset($data['bot_probability']) ? $data['bot_probability'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['browser_name'] === null) {
            $invalidProperties[] = "'browser_name' can't be null";
        }
        if ($this->container['browser_major_version'] === null) {
            $invalidProperties[] = "'browser_major_version' can't be null";
        }
        if ($this->container['browser_full_version'] === null) {
            $invalidProperties[] = "'browser_full_version' can't be null";
        }
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ($this->container['os_version'] === null) {
            $invalidProperties[] = "'os_version' can't be null";
        }
        if ($this->container['device'] === null) {
            $invalidProperties[] = "'device' can't be null";
        }
        if ($this->container['user_agent'] === null) {
            $invalidProperties[] = "'user_agent' can't be null";
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
     * Gets browser_name
     *
     * @return string
     */
    public function getBrowserName()
    {
        return $this->container['browser_name'];
    }

    /**
     * Sets browser_name
     *
     * @param string $browser_name browser_name
     *
     * @return $this
     */
    public function setBrowserName($browser_name)
    {
        $this->container['browser_name'] = $browser_name;

        return $this;
    }

    /**
     * Gets browser_major_version
     *
     * @return string
     */
    public function getBrowserMajorVersion()
    {
        return $this->container['browser_major_version'];
    }

    /**
     * Sets browser_major_version
     *
     * @param string $browser_major_version browser_major_version
     *
     * @return $this
     */
    public function setBrowserMajorVersion($browser_major_version)
    {
        $this->container['browser_major_version'] = $browser_major_version;

        return $this;
    }

    /**
     * Gets browser_full_version
     *
     * @return string
     */
    public function getBrowserFullVersion()
    {
        return $this->container['browser_full_version'];
    }

    /**
     * Sets browser_full_version
     *
     * @param string $browser_full_version browser_full_version
     *
     * @return $this
     */
    public function setBrowserFullVersion($browser_full_version)
    {
        $this->container['browser_full_version'] = $browser_full_version;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os os
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets os_version
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->container['os_version'];
    }

    /**
     * Sets os_version
     *
     * @param string $os_version os_version
     *
     * @return $this
     */
    public function setOsVersion($os_version)
    {
        $this->container['os_version'] = $os_version;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string $device device
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string $user_agent user_agent
     *
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets bot_probability
     *
     * @return int
     */
    public function getBotProbability()
    {
        return $this->container['bot_probability'];
    }

    /**
     * Sets bot_probability
     *
     * @param int $bot_probability bot_probability
     *
     * @return $this
     */
    public function setBotProbability($bot_probability)
    {
        $this->container['bot_probability'] = $bot_probability;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
