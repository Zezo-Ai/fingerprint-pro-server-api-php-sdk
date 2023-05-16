<?php
/**
 * IPLocation
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
 * Fingerprint Pro Server API allows you to get information about visitors and about individual events in a server environment. This API can be used for data exports, decision-making, and data analysis scenarios.
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
 * IPLocation Class Doc Comment
 *
 * @category Class
 * @package  Fingerprint\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IPLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IPLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accuracy_radius' => 'int',
'latitude' => 'double',
'longitude' => 'double',
'postal_code' => 'string',
'timezone' => 'string',
'city' => '\Fingerprint\ServerAPI\Model\IPLocationCity',
'country' => '\Fingerprint\ServerAPI\Model\Location',
'continent' => '\Fingerprint\ServerAPI\Model\Location',
'subdivisions' => '\Fingerprint\ServerAPI\Model\Subdivision[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accuracy_radius' => null,
'latitude' => 'double',
'longitude' => 'double',
'postal_code' => null,
'timezone' => 'timezone',
'city' => null,
'country' => null,
'continent' => null,
'subdivisions' => null    ];

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
        'accuracy_radius' => 'accuracyRadius',
'latitude' => 'latitude',
'longitude' => 'longitude',
'postal_code' => 'postalCode',
'timezone' => 'timezone',
'city' => 'city',
'country' => 'country',
'continent' => 'continent',
'subdivisions' => 'subdivisions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accuracy_radius' => 'setAccuracyRadius',
'latitude' => 'setLatitude',
'longitude' => 'setLongitude',
'postal_code' => 'setPostalCode',
'timezone' => 'setTimezone',
'city' => 'setCity',
'country' => 'setCountry',
'continent' => 'setContinent',
'subdivisions' => 'setSubdivisions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accuracy_radius' => 'getAccuracyRadius',
'latitude' => 'getLatitude',
'longitude' => 'getLongitude',
'postal_code' => 'getPostalCode',
'timezone' => 'getTimezone',
'city' => 'getCity',
'country' => 'getCountry',
'continent' => 'getContinent',
'subdivisions' => 'getSubdivisions'    ];

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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accuracy_radius'] === null) {
            $invalidProperties[] = "'accuracy_radius' can't be null";
        }
        if ($this->container['latitude'] === null) {
            $invalidProperties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalidProperties[] = "'longitude' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['continent'] === null) {
            $invalidProperties[] = "'continent' can't be null";
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
     * Gets accuracy_radius
     *
     * @return int
     */
    public function getAccuracyRadius()
    {
        return $this->container['accuracy_radius'];
    }

    /**
     * Sets accuracy_radius
     *
     * @param int $accuracy_radius accuracy_radius
     *
     * @return $this
     */
    public function setAccuracyRadius($accuracy_radius)
    {
        $this->container['accuracy_radius'] = $accuracy_radius;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets city
     *
     * @return \Fingerprint\ServerAPI\Model\IPLocationCity
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param \Fingerprint\ServerAPI\Model\IPLocationCity $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Fingerprint\ServerAPI\Model\Location
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Fingerprint\ServerAPI\Model\Location $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets continent
     *
     * @return \Fingerprint\ServerAPI\Model\Location
     */
    public function getContinent()
    {
        return $this->container['continent'];
    }

    /**
     * Sets continent
     *
     * @param \Fingerprint\ServerAPI\Model\Location $continent continent
     *
     * @return $this
     */
    public function setContinent($continent)
    {
        $this->container['continent'] = $continent;

        return $this;
    }

    /**
     * Gets subdivisions
     *
     * @return \Fingerprint\ServerAPI\Model\Subdivision[]
     */
    public function getSubdivisions()
    {
        return $this->container['subdivisions'];
    }

    /**
     * Sets subdivisions
     *
     * @param \Fingerprint\ServerAPI\Model\Subdivision[] $subdivisions subdivisions
     *
     * @return $this
     */
    public function setSubdivisions($subdivisions)
    {
        $this->container['subdivisions'] = $subdivisions;

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
