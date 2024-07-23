<?php
/**
 * WebhookVisit
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
 * WebhookVisit Class Doc Comment
 *
 * @category Class
 * @package  Fingerprint\ServerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookVisit implements ModelInterface, ArrayAccess
{
    // use \Fingerprint\ServerAPI\Traits\WithRawResponse;
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookVisit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'visitor_id' => 'string',
'client_referrer' => 'string',
'user_agent' => 'string',
'bot' => '\Fingerprint\ServerAPI\Model\BotdDetectionResult',
'ip_info' => '\Fingerprint\ServerAPI\Model\IpInfoResult',
'incognito' => 'bool',
'root_apps' => '\Fingerprint\ServerAPI\Model\RootAppsResult',
'emulator' => '\Fingerprint\ServerAPI\Model\EmulatorResult',
'cloned_app' => '\Fingerprint\ServerAPI\Model\ClonedAppResult',
'factory_reset' => '\Fingerprint\ServerAPI\Model\FactoryResetResult',
'jailbroken' => '\Fingerprint\ServerAPI\Model\JailbrokenResult',
'frida' => '\Fingerprint\ServerAPI\Model\FridaResult',
'ip_blocklist' => '\Fingerprint\ServerAPI\Model\IpBlockListResult',
'tor' => '\Fingerprint\ServerAPI\Model\TorResult',
'privacy_settings' => '\Fingerprint\ServerAPI\Model\PrivacySettingsResult',
'virtual_machine' => '\Fingerprint\ServerAPI\Model\VirtualMachineResult',
'vpn' => '\Fingerprint\ServerAPI\Model\VpnResult',
'proxy' => '\Fingerprint\ServerAPI\Model\ProxyResult',
'tampering' => '\Fingerprint\ServerAPI\Model\TamperingResult',
'raw_device_attributes' => '\Fingerprint\ServerAPI\Model\RawDeviceAttributesResult',
'high_activity' => '\Fingerprint\ServerAPI\Model\HighActivityResult',
'location_spoofing' => '\Fingerprint\ServerAPI\Model\LocationSpoofingResult',
'suspect_score' => '\Fingerprint\ServerAPI\Model\SuspectScoreResult',
'request_id' => 'string',
'browser_details' => '\Fingerprint\ServerAPI\Model\BrowserDetails',
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
'last_seen_at' => '\Fingerprint\ServerAPI\Model\SeenAt'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'visitor_id' => null,
'client_referrer' => null,
'user_agent' => null,
'bot' => null,
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
'raw_device_attributes' => null,
'high_activity' => null,
'location_spoofing' => null,
'suspect_score' => null,
'request_id' => null,
'browser_details' => null,
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
'last_seen_at' => null    ];

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
'client_referrer' => 'clientReferrer',
'user_agent' => 'userAgent',
'bot' => 'bot',
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
'raw_device_attributes' => 'rawDeviceAttributes',
'high_activity' => 'highActivity',
'location_spoofing' => 'locationSpoofing',
'suspect_score' => 'suspectScore',
'request_id' => 'requestId',
'browser_details' => 'browserDetails',
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
'last_seen_at' => 'lastSeenAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'visitor_id' => 'setVisitorId',
'client_referrer' => 'setClientReferrer',
'user_agent' => 'setUserAgent',
'bot' => 'setBot',
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
'raw_device_attributes' => 'setRawDeviceAttributes',
'high_activity' => 'setHighActivity',
'location_spoofing' => 'setLocationSpoofing',
'suspect_score' => 'setSuspectScore',
'request_id' => 'setRequestId',
'browser_details' => 'setBrowserDetails',
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
'last_seen_at' => 'setLastSeenAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'visitor_id' => 'getVisitorId',
'client_referrer' => 'getClientReferrer',
'user_agent' => 'getUserAgent',
'bot' => 'getBot',
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
'raw_device_attributes' => 'getRawDeviceAttributes',
'high_activity' => 'getHighActivity',
'location_spoofing' => 'getLocationSpoofing',
'suspect_score' => 'getSuspectScore',
'request_id' => 'getRequestId',
'browser_details' => 'getBrowserDetails',
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
'last_seen_at' => 'getLastSeenAt'    ];

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
        $this->container['client_referrer'] = isset($data['client_referrer']) ? $data['client_referrer'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
        $this->container['bot'] = isset($data['bot']) ? $data['bot'] : null;
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
        $this->container['high_activity'] = isset($data['high_activity']) ? $data['high_activity'] : null;
        $this->container['location_spoofing'] = isset($data['location_spoofing']) ? $data['location_spoofing'] : null;
        $this->container['suspect_score'] = isset($data['suspect_score']) ? $data['suspect_score'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['browser_details'] = isset($data['browser_details']) ? $data['browser_details'] : null;
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
        if ($this->container['incognito'] === null) {
            $invalidProperties[] = "'incognito' can't be null";
        }
        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if ($this->container['browser_details'] === null) {
            $invalidProperties[] = "'browser_details' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
        }
        if ($this->container['visitor_found'] === null) {
            $invalidProperties[] = "'visitor_found' can't be null";
        }
        if ($this->container['first_seen_at'] === null) {
            $invalidProperties[] = "'first_seen_at' can't be null";
        }
        if ($this->container['last_seen_at'] === null) {
            $invalidProperties[] = "'last_seen_at' can't be null";
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
     * Gets client_referrer
     *
     * @return string
     */
    public function getClientReferrer()
    {
        return $this->container['client_referrer'];
    }

    /**
     * Sets client_referrer
     *
     * @param string $client_referrer client_referrer
     *
     * @return $this
     */
    public function setClientReferrer($client_referrer)
    {
        $this->container['client_referrer'] = $client_referrer;

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
     * Gets bot
     *
     * @return \Fingerprint\ServerAPI\Model\BotdDetectionResult
     */
    public function getBot()
    {
        return $this->container['bot'];
    }

    /**
     * Sets bot
     *
     * @param \Fingerprint\ServerAPI\Model\BotdDetectionResult $bot bot
     *
     * @return $this
     */
    public function setBot($bot)
    {
        $this->container['bot'] = $bot;

        return $this;
    }

    /**
     * Gets ip_info
     *
     * @return \Fingerprint\ServerAPI\Model\IpInfoResult
     */
    public function getIpInfo()
    {
        return $this->container['ip_info'];
    }

    /**
     * Sets ip_info
     *
     * @param \Fingerprint\ServerAPI\Model\IpInfoResult $ip_info ip_info
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
     * @return bool
     */
    public function getIncognito()
    {
        return $this->container['incognito'];
    }

    /**
     * Sets incognito
     *
     * @param bool $incognito Flag if user used incognito session.
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
     * @return \Fingerprint\ServerAPI\Model\RootAppsResult
     */
    public function getRootApps()
    {
        return $this->container['root_apps'];
    }

    /**
     * Sets root_apps
     *
     * @param \Fingerprint\ServerAPI\Model\RootAppsResult $root_apps root_apps
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
     * @return \Fingerprint\ServerAPI\Model\EmulatorResult
     */
    public function getEmulator()
    {
        return $this->container['emulator'];
    }

    /**
     * Sets emulator
     *
     * @param \Fingerprint\ServerAPI\Model\EmulatorResult $emulator emulator
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
     * @return \Fingerprint\ServerAPI\Model\ClonedAppResult
     */
    public function getClonedApp()
    {
        return $this->container['cloned_app'];
    }

    /**
     * Sets cloned_app
     *
     * @param \Fingerprint\ServerAPI\Model\ClonedAppResult $cloned_app cloned_app
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
     * @return \Fingerprint\ServerAPI\Model\FactoryResetResult
     */
    public function getFactoryReset()
    {
        return $this->container['factory_reset'];
    }

    /**
     * Sets factory_reset
     *
     * @param \Fingerprint\ServerAPI\Model\FactoryResetResult $factory_reset factory_reset
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
     * @return \Fingerprint\ServerAPI\Model\JailbrokenResult
     */
    public function getJailbroken()
    {
        return $this->container['jailbroken'];
    }

    /**
     * Sets jailbroken
     *
     * @param \Fingerprint\ServerAPI\Model\JailbrokenResult $jailbroken jailbroken
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
     * @return \Fingerprint\ServerAPI\Model\FridaResult
     */
    public function getFrida()
    {
        return $this->container['frida'];
    }

    /**
     * Sets frida
     *
     * @param \Fingerprint\ServerAPI\Model\FridaResult $frida frida
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
     * @return \Fingerprint\ServerAPI\Model\IpBlockListResult
     */
    public function getIpBlocklist()
    {
        return $this->container['ip_blocklist'];
    }

    /**
     * Sets ip_blocklist
     *
     * @param \Fingerprint\ServerAPI\Model\IpBlockListResult $ip_blocklist ip_blocklist
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
     * @return \Fingerprint\ServerAPI\Model\TorResult
     */
    public function getTor()
    {
        return $this->container['tor'];
    }

    /**
     * Sets tor
     *
     * @param \Fingerprint\ServerAPI\Model\TorResult $tor tor
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
     * @return \Fingerprint\ServerAPI\Model\PrivacySettingsResult
     */
    public function getPrivacySettings()
    {
        return $this->container['privacy_settings'];
    }

    /**
     * Sets privacy_settings
     *
     * @param \Fingerprint\ServerAPI\Model\PrivacySettingsResult $privacy_settings privacy_settings
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
     * @return \Fingerprint\ServerAPI\Model\VirtualMachineResult
     */
    public function getVirtualMachine()
    {
        return $this->container['virtual_machine'];
    }

    /**
     * Sets virtual_machine
     *
     * @param \Fingerprint\ServerAPI\Model\VirtualMachineResult $virtual_machine virtual_machine
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
     * @return \Fingerprint\ServerAPI\Model\VpnResult
     */
    public function getVpn()
    {
        return $this->container['vpn'];
    }

    /**
     * Sets vpn
     *
     * @param \Fingerprint\ServerAPI\Model\VpnResult $vpn vpn
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
     * @return \Fingerprint\ServerAPI\Model\ProxyResult
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param \Fingerprint\ServerAPI\Model\ProxyResult $proxy proxy
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
     * @return \Fingerprint\ServerAPI\Model\TamperingResult
     */
    public function getTampering()
    {
        return $this->container['tampering'];
    }

    /**
     * Sets tampering
     *
     * @param \Fingerprint\ServerAPI\Model\TamperingResult $tampering tampering
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
     * @return \Fingerprint\ServerAPI\Model\RawDeviceAttributesResult
     */
    public function getRawDeviceAttributes()
    {
        return $this->container['raw_device_attributes'];
    }

    /**
     * Sets raw_device_attributes
     *
     * @param \Fingerprint\ServerAPI\Model\RawDeviceAttributesResult $raw_device_attributes raw_device_attributes
     *
     * @return $this
     */
    public function setRawDeviceAttributes($raw_device_attributes)
    {
        $this->container['raw_device_attributes'] = $raw_device_attributes;

        return $this;
    }

    /**
     * Gets high_activity
     *
     * @return \Fingerprint\ServerAPI\Model\HighActivityResult
     */
    public function getHighActivity()
    {
        return $this->container['high_activity'];
    }

    /**
     * Sets high_activity
     *
     * @param \Fingerprint\ServerAPI\Model\HighActivityResult $high_activity high_activity
     *
     * @return $this
     */
    public function setHighActivity($high_activity)
    {
        $this->container['high_activity'] = $high_activity;

        return $this;
    }

    /**
     * Gets location_spoofing
     *
     * @return \Fingerprint\ServerAPI\Model\LocationSpoofingResult
     */
    public function getLocationSpoofing()
    {
        return $this->container['location_spoofing'];
    }

    /**
     * Sets location_spoofing
     *
     * @param \Fingerprint\ServerAPI\Model\LocationSpoofingResult $location_spoofing location_spoofing
     *
     * @return $this
     */
    public function setLocationSpoofing($location_spoofing)
    {
        $this->container['location_spoofing'] = $location_spoofing;

        return $this;
    }

    /**
     * Gets suspect_score
     *
     * @return \Fingerprint\ServerAPI\Model\SuspectScoreResult
     */
    public function getSuspectScore()
    {
        return $this->container['suspect_score'];
    }

    /**
     * Sets suspect_score
     *
     * @param \Fingerprint\ServerAPI\Model\SuspectScoreResult $suspect_score suspect_score
     *
     * @return $this
     */
    public function setSuspectScore($suspect_score)
    {
        $this->container['suspect_score'] = $suspect_score;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Unique identifier of the user's identification request.
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets browser_details
     *
     * @return \Fingerprint\ServerAPI\Model\BrowserDetails
     */
    public function getBrowserDetails()
    {
        return $this->container['browser_details'];
    }

    /**
     * Sets browser_details
     *
     * @param \Fingerprint\ServerAPI\Model\BrowserDetails $browser_details browser_details
     *
     * @return $this
     */
    public function setBrowserDetails($browser_details)
    {
        $this->container['browser_details'] = $browser_details;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets ip_location
     *
     * @return \Fingerprint\ServerAPI\Model\DeprecatedIPLocation
     */
    public function getIpLocation()
    {
        return $this->container['ip_location'];
    }

    /**
     * Sets ip_location
     *
     * @param \Fingerprint\ServerAPI\Model\DeprecatedIPLocation $ip_location ip_location
     *
     * @return $this
     */
    public function setIpLocation($ip_location)
    {
        $this->container['ip_location'] = $ip_location;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Timestamp of the event with millisecond precision in Unix time.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime $time Time expressed according to ISO 8601 in UTC format.
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Page URL from which the identification request was sent.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return map[string,object]
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param map[string,object] $tag A customer-provided value or an object that was sent with identification request.
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets linked_id
     *
     * @return string
     */
    public function getLinkedId()
    {
        return $this->container['linked_id'];
    }

    /**
     * Sets linked_id
     *
     * @param string $linked_id A customer-provided id that was sent with identification request.
     *
     * @return $this
     */
    public function setLinkedId($linked_id)
    {
        $this->container['linked_id'] = $linked_id;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return \Fingerprint\ServerAPI\Model\Confidence
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param \Fingerprint\ServerAPI\Model\Confidence $confidence confidence
     *
     * @return $this
     */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets visitor_found
     *
     * @return bool
     */
    public function getVisitorFound()
    {
        return $this->container['visitor_found'];
    }

    /**
     * Sets visitor_found
     *
     * @param bool $visitor_found Attribute represents if a visitor had been identified before.
     *
     * @return $this
     */
    public function setVisitorFound($visitor_found)
    {
        $this->container['visitor_found'] = $visitor_found;

        return $this;
    }

    /**
     * Gets first_seen_at
     *
     * @return \Fingerprint\ServerAPI\Model\SeenAt
     */
    public function getFirstSeenAt()
    {
        return $this->container['first_seen_at'];
    }

    /**
     * Sets first_seen_at
     *
     * @param \Fingerprint\ServerAPI\Model\SeenAt $first_seen_at first_seen_at
     *
     * @return $this
     */
    public function setFirstSeenAt($first_seen_at)
    {
        $this->container['first_seen_at'] = $first_seen_at;

        return $this;
    }

    /**
     * Gets last_seen_at
     *
     * @return \Fingerprint\ServerAPI\Model\SeenAt
     */
    public function getLastSeenAt()
    {
        return $this->container['last_seen_at'];
    }

    /**
     * Sets last_seen_at
     *
     * @param \Fingerprint\ServerAPI\Model\SeenAt $last_seen_at last_seen_at
     *
     * @return $this
     */
    public function setLastSeenAt($last_seen_at)
    {
        $this->container['last_seen_at'] = $last_seen_at;

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
