<?php
/**
 * ProductsResponse
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
 * ProductsResponse Class Doc Comment
 *
 * @category Class
 * @description Contains all the information from each activated product - Fingerprint Pro or Bot Detection
 * @package  Fingerprint\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identification' => '\Fingerprint\ServerAPI\Model\ProductsResponseIdentification',
'botd' => '\Fingerprint\ServerAPI\Model\ProductsResponseBotd',
'ip_info' => '\Fingerprint\ServerAPI\Model\SignalResponseIpInfo',
'incognito' => '\Fingerprint\ServerAPI\Model\SignalResponseIncognito',
'root_apps' => '\Fingerprint\ServerAPI\Model\SignalResponseRootApps',
'emulator' => '\Fingerprint\ServerAPI\Model\SignalResponseEmulator',
'cloned_app' => '\Fingerprint\ServerAPI\Model\SignalResponseClonedApp',
'factory_reset' => '\Fingerprint\ServerAPI\Model\SignalResponseFactoryReset',
'jailbroken' => '\Fingerprint\ServerAPI\Model\SignalResponseJailbroken',
'frida' => '\Fingerprint\ServerAPI\Model\SignalResponseFrida',
'ip_blocklist' => '\Fingerprint\ServerAPI\Model\SignalResponseIpBlocklist',
'tor' => '\Fingerprint\ServerAPI\Model\SignalResponseTor',
'privacy_settings' => '\Fingerprint\ServerAPI\Model\SignalResponsePrivacySettings',
'virtual_machine' => '\Fingerprint\ServerAPI\Model\SignalResponseVirtualMachine',
'vpn' => '\Fingerprint\ServerAPI\Model\SignalResponseVpn',
'proxy' => '\Fingerprint\ServerAPI\Model\SignalResponseProxy',
'tampering' => '\Fingerprint\ServerAPI\Model\SignalResponseTampering',
'raw_device_attributes' => '\Fingerprint\ServerAPI\Model\SignalResponseRawDeviceAttributes'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identification' => null,
'botd' => null,
'ip_info' => null,
'incognito' => null,
'root_apps' => null,
'emulator' => null,
'cloned_app' => null,
'factory_reset' => null,
'jailbroken' => null,
'frida' => null,
'ip_blocklist' => null,
'tor' => null,
'privacy_settings' => null,
'virtual_machine' => null,
'vpn' => null,
'proxy' => null,
'tampering' => null,
'raw_device_attributes' => null    ];

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
        'identification' => 'identification',
'botd' => 'botd',
'ip_info' => 'ipInfo',
'incognito' => 'incognito',
'root_apps' => 'rootApps',
'emulator' => 'emulator',
'cloned_app' => 'clonedApp',
'factory_reset' => 'factoryReset',
'jailbroken' => 'jailbroken',
'frida' => 'frida',
'ip_blocklist' => 'ipBlocklist',
'tor' => 'tor',
'privacy_settings' => 'privacySettings',
'virtual_machine' => 'virtualMachine',
'vpn' => 'vpn',
'proxy' => 'proxy',
'tampering' => 'tampering',
'raw_device_attributes' => 'rawDeviceAttributes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identification' => 'setIdentification',
'botd' => 'setBotd',
'ip_info' => 'setIpInfo',
'incognito' => 'setIncognito',
'root_apps' => 'setRootApps',
'emulator' => 'setEmulator',
'cloned_app' => 'setClonedApp',
'factory_reset' => 'setFactoryReset',
'jailbroken' => 'setJailbroken',
'frida' => 'setFrida',
'ip_blocklist' => 'setIpBlocklist',
'tor' => 'setTor',
'privacy_settings' => 'setPrivacySettings',
'virtual_machine' => 'setVirtualMachine',
'vpn' => 'setVpn',
'proxy' => 'setProxy',
'tampering' => 'setTampering',
'raw_device_attributes' => 'setRawDeviceAttributes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identification' => 'getIdentification',
'botd' => 'getBotd',
'ip_info' => 'getIpInfo',
'incognito' => 'getIncognito',
'root_apps' => 'getRootApps',
'emulator' => 'getEmulator',
'cloned_app' => 'getClonedApp',
'factory_reset' => 'getFactoryReset',
'jailbroken' => 'getJailbroken',
'frida' => 'getFrida',
'ip_blocklist' => 'getIpBlocklist',
'tor' => 'getTor',
'privacy_settings' => 'getPrivacySettings',
'virtual_machine' => 'getVirtualMachine',
'vpn' => 'getVpn',
'proxy' => 'getProxy',
'tampering' => 'getTampering',
'raw_device_attributes' => 'getRawDeviceAttributes'    ];

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
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['botd'] = isset($data['botd']) ? $data['botd'] : null;
        $this->container['ip_info'] = isset($data['ip_info']) ? $data['ip_info'] : null;
        $this->container['incognito'] = isset($data['incognito']) ? $data['incognito'] : null;
        $this->container['root_apps'] = isset($data['root_apps']) ? $data['root_apps'] : null;
        $this->container['emulator'] = isset($data['emulator']) ? $data['emulator'] : null;
        $this->container['cloned_app'] = isset($data['cloned_app']) ? $data['cloned_app'] : null;
        $this->container['factory_reset'] = isset($data['factory_reset']) ? $data['factory_reset'] : null;
        $this->container['jailbroken'] = isset($data['jailbroken']) ? $data['jailbroken'] : null;
        $this->container['frida'] = isset($data['frida']) ? $data['frida'] : null;
        $this->container['ip_blocklist'] = isset($data['ip_blocklist']) ? $data['ip_blocklist'] : null;
        $this->container['tor'] = isset($data['tor']) ? $data['tor'] : null;
        $this->container['privacy_settings'] = isset($data['privacy_settings']) ? $data['privacy_settings'] : null;
        $this->container['virtual_machine'] = isset($data['virtual_machine']) ? $data['virtual_machine'] : null;
        $this->container['vpn'] = isset($data['vpn']) ? $data['vpn'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['tampering'] = isset($data['tampering']) ? $data['tampering'] : null;
        $this->container['raw_device_attributes'] = isset($data['raw_device_attributes']) ? $data['raw_device_attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets identification
     *
     * @return \Fingerprint\ServerAPI\Model\ProductsResponseIdentification
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param \Fingerprint\ServerAPI\Model\ProductsResponseIdentification $identification identification
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets botd
     *
     * @return \Fingerprint\ServerAPI\Model\ProductsResponseBotd
     */
    public function getBotd()
    {
        return $this->container['botd'];
    }

    /**
     * Sets botd
     *
     * @param \Fingerprint\ServerAPI\Model\ProductsResponseBotd $botd botd
     *
     * @return $this
     */
    public function setBotd($botd)
    {
        $this->container['botd'] = $botd;

        return $this;
    }

    /**
     * Gets ip_info
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseIpInfo
     */
    public function getIpInfo()
    {
        return $this->container['ip_info'];
    }

    /**
     * Sets ip_info
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseIpInfo $ip_info ip_info
     *
     * @return $this
     */
    public function setIpInfo($ip_info)
    {
        $this->container['ip_info'] = $ip_info;

        return $this;
    }

    /**
     * Gets incognito
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseIncognito
     */
    public function getIncognito()
    {
        return $this->container['incognito'];
    }

    /**
     * Sets incognito
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseIncognito $incognito incognito
     *
     * @return $this
     */
    public function setIncognito($incognito)
    {
        $this->container['incognito'] = $incognito;

        return $this;
    }

    /**
     * Gets root_apps
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseRootApps
     */
    public function getRootApps()
    {
        return $this->container['root_apps'];
    }

    /**
     * Sets root_apps
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseRootApps $root_apps root_apps
     *
     * @return $this
     */
    public function setRootApps($root_apps)
    {
        $this->container['root_apps'] = $root_apps;

        return $this;
    }

    /**
     * Gets emulator
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseEmulator
     */
    public function getEmulator()
    {
        return $this->container['emulator'];
    }

    /**
     * Sets emulator
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseEmulator $emulator emulator
     *
     * @return $this
     */
    public function setEmulator($emulator)
    {
        $this->container['emulator'] = $emulator;

        return $this;
    }

    /**
     * Gets cloned_app
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseClonedApp
     */
    public function getClonedApp()
    {
        return $this->container['cloned_app'];
    }

    /**
     * Sets cloned_app
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseClonedApp $cloned_app cloned_app
     *
     * @return $this
     */
    public function setClonedApp($cloned_app)
    {
        $this->container['cloned_app'] = $cloned_app;

        return $this;
    }

    /**
     * Gets factory_reset
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseFactoryReset
     */
    public function getFactoryReset()
    {
        return $this->container['factory_reset'];
    }

    /**
     * Sets factory_reset
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseFactoryReset $factory_reset factory_reset
     *
     * @return $this
     */
    public function setFactoryReset($factory_reset)
    {
        $this->container['factory_reset'] = $factory_reset;

        return $this;
    }

    /**
     * Gets jailbroken
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseJailbroken
     */
    public function getJailbroken()
    {
        return $this->container['jailbroken'];
    }

    /**
     * Sets jailbroken
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseJailbroken $jailbroken jailbroken
     *
     * @return $this
     */
    public function setJailbroken($jailbroken)
    {
        $this->container['jailbroken'] = $jailbroken;

        return $this;
    }

    /**
     * Gets frida
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseFrida
     */
    public function getFrida()
    {
        return $this->container['frida'];
    }

    /**
     * Sets frida
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseFrida $frida frida
     *
     * @return $this
     */
    public function setFrida($frida)
    {
        $this->container['frida'] = $frida;

        return $this;
    }

    /**
     * Gets ip_blocklist
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseIpBlocklist
     */
    public function getIpBlocklist()
    {
        return $this->container['ip_blocklist'];
    }

    /**
     * Sets ip_blocklist
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseIpBlocklist $ip_blocklist ip_blocklist
     *
     * @return $this
     */
    public function setIpBlocklist($ip_blocklist)
    {
        $this->container['ip_blocklist'] = $ip_blocklist;

        return $this;
    }

    /**
     * Gets tor
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseTor
     */
    public function getTor()
    {
        return $this->container['tor'];
    }

    /**
     * Sets tor
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseTor $tor tor
     *
     * @return $this
     */
    public function setTor($tor)
    {
        $this->container['tor'] = $tor;

        return $this;
    }

    /**
     * Gets privacy_settings
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponsePrivacySettings
     */
    public function getPrivacySettings()
    {
        return $this->container['privacy_settings'];
    }

    /**
     * Sets privacy_settings
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponsePrivacySettings $privacy_settings privacy_settings
     *
     * @return $this
     */
    public function setPrivacySettings($privacy_settings)
    {
        $this->container['privacy_settings'] = $privacy_settings;

        return $this;
    }

    /**
     * Gets virtual_machine
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseVirtualMachine
     */
    public function getVirtualMachine()
    {
        return $this->container['virtual_machine'];
    }

    /**
     * Sets virtual_machine
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseVirtualMachine $virtual_machine virtual_machine
     *
     * @return $this
     */
    public function setVirtualMachine($virtual_machine)
    {
        $this->container['virtual_machine'] = $virtual_machine;

        return $this;
    }

    /**
     * Gets vpn
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseVpn
     */
    public function getVpn()
    {
        return $this->container['vpn'];
    }

    /**
     * Sets vpn
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseVpn $vpn vpn
     *
     * @return $this
     */
    public function setVpn($vpn)
    {
        $this->container['vpn'] = $vpn;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseProxy
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseProxy $proxy proxy
     *
     * @return $this
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

        return $this;
    }

    /**
     * Gets tampering
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseTampering
     */
    public function getTampering()
    {
        return $this->container['tampering'];
    }

    /**
     * Sets tampering
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseTampering $tampering tampering
     *
     * @return $this
     */
    public function setTampering($tampering)
    {
        $this->container['tampering'] = $tampering;

        return $this;
    }

    /**
     * Gets raw_device_attributes
     *
     * @return \Fingerprint\ServerAPI\Model\SignalResponseRawDeviceAttributes
     */
    public function getRawDeviceAttributes()
    {
        return $this->container['raw_device_attributes'];
    }

    /**
     * Sets raw_device_attributes
     *
     * @param \Fingerprint\ServerAPI\Model\SignalResponseRawDeviceAttributes $raw_device_attributes raw_device_attributes
     *
     * @return $this
     */
    public function setRawDeviceAttributes($raw_device_attributes)
    {
        $this->container['raw_device_attributes'] = $raw_device_attributes;

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
