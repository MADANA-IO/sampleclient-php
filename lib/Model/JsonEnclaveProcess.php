<?php
/**
 * JsonEnclaveProcess
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * madana-api
 *
 * <h1>Using the madana-api</h1>        <p>This documentation contains a Quickstart Guide, relating client functionality and information about the available         endpoints and used datamodels.   </p>       <p> The madana-api and its implementations are still in heavy development. This means that there may be problems in our protocols, or there may be mistakes in our implementations. We take security vulnerabilities very seriously. If you discover a security issue, please bring it to our attention right away! If you find a vulnerability that may affect live deployments -- for example, by exposing a remote execution exploit -- please send your report privately to info@madana.io. Please DO NOT file a public issue. If the issue is a protocol weakness that cannot be immediately exploited or something not yet deployed, just discuss it openly   </p>   <br>   <p> Note: Not all functionality might be acessible without having accquired and api-license token. For more information visit <a href=\"https://www.madana.io\">www.madana.io</a> </p>       <br>
 *
 * The version of the OpenAPI document: 0.5.0-master.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * JsonEnclaveProcess Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class JsonEnclaveProcess implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'json_EnclaveProcess';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'process' => '\OpenAPI\Client\Model\JsonProcess',
        'port_mapping' => 'map[string,string]',
        'status' => 'string',
        'ports' => '\OpenAPI\Client\Model\JsonEnclavePort[]',
        'enclave_inputstream' => 'object',
        'console_output' => 'string',
        'internal_attesation_server' => 'string',
        'internal_wireguard_server' => 'string',
        'wg_interface' => '\OpenAPI\Client\Model\JsonWireguardInterface',
        'internal_ident' => 'string',
        'startup_time' => 'string',
        'remote_control_server' => 'string',
        'startup_cmd' => 'string',
        'ending_time' => 'string',
        'public_ident' => 'string',
        'wireguard_server' => 'string',
        'attestation_server' => 'string',
        'internal_remote_control_server' => 'string',
        'enclave_ident' => 'string',
        'signer_ident' => 'string',
        'wireguard_public_key' => 'string',
        'environment' => '\OpenAPI\Client\Model\JsonEnvironment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'process' => null,
        'port_mapping' => null,
        'status' => null,
        'ports' => null,
        'enclave_inputstream' => null,
        'console_output' => null,
        'internal_attesation_server' => null,
        'internal_wireguard_server' => null,
        'wg_interface' => null,
        'internal_ident' => null,
        'startup_time' => null,
        'remote_control_server' => null,
        'startup_cmd' => null,
        'ending_time' => null,
        'public_ident' => null,
        'wireguard_server' => null,
        'attestation_server' => null,
        'internal_remote_control_server' => null,
        'enclave_ident' => null,
        'signer_ident' => null,
        'wireguard_public_key' => null,
        'environment' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'process' => 'process',
        'port_mapping' => 'portMapping',
        'status' => 'status',
        'ports' => 'ports',
        'enclave_inputstream' => 'enclaveInputstream',
        'console_output' => 'consoleOutput',
        'internal_attesation_server' => 'internalAttesationServer',
        'internal_wireguard_server' => 'internalWireguardServer',
        'wg_interface' => 'wgInterface',
        'internal_ident' => 'internalIdent',
        'startup_time' => 'startupTime',
        'remote_control_server' => 'remoteControlServer',
        'startup_cmd' => 'startupCMD',
        'ending_time' => 'endingTime',
        'public_ident' => 'publicIdent',
        'wireguard_server' => 'wireguardServer',
        'attestation_server' => 'attestationServer',
        'internal_remote_control_server' => 'internalRemoteControlServer',
        'enclave_ident' => 'enclaveIdent',
        'signer_ident' => 'signerIdent',
        'wireguard_public_key' => 'wireguardPublicKey',
        'environment' => 'environment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'process' => 'setProcess',
        'port_mapping' => 'setPortMapping',
        'status' => 'setStatus',
        'ports' => 'setPorts',
        'enclave_inputstream' => 'setEnclaveInputstream',
        'console_output' => 'setConsoleOutput',
        'internal_attesation_server' => 'setInternalAttesationServer',
        'internal_wireguard_server' => 'setInternalWireguardServer',
        'wg_interface' => 'setWgInterface',
        'internal_ident' => 'setInternalIdent',
        'startup_time' => 'setStartupTime',
        'remote_control_server' => 'setRemoteControlServer',
        'startup_cmd' => 'setStartupCmd',
        'ending_time' => 'setEndingTime',
        'public_ident' => 'setPublicIdent',
        'wireguard_server' => 'setWireguardServer',
        'attestation_server' => 'setAttestationServer',
        'internal_remote_control_server' => 'setInternalRemoteControlServer',
        'enclave_ident' => 'setEnclaveIdent',
        'signer_ident' => 'setSignerIdent',
        'wireguard_public_key' => 'setWireguardPublicKey',
        'environment' => 'setEnvironment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'process' => 'getProcess',
        'port_mapping' => 'getPortMapping',
        'status' => 'getStatus',
        'ports' => 'getPorts',
        'enclave_inputstream' => 'getEnclaveInputstream',
        'console_output' => 'getConsoleOutput',
        'internal_attesation_server' => 'getInternalAttesationServer',
        'internal_wireguard_server' => 'getInternalWireguardServer',
        'wg_interface' => 'getWgInterface',
        'internal_ident' => 'getInternalIdent',
        'startup_time' => 'getStartupTime',
        'remote_control_server' => 'getRemoteControlServer',
        'startup_cmd' => 'getStartupCmd',
        'ending_time' => 'getEndingTime',
        'public_ident' => 'getPublicIdent',
        'wireguard_server' => 'getWireguardServer',
        'attestation_server' => 'getAttestationServer',
        'internal_remote_control_server' => 'getInternalRemoteControlServer',
        'enclave_ident' => 'getEnclaveIdent',
        'signer_ident' => 'getSignerIdent',
        'wireguard_public_key' => 'getWireguardPublicKey',
        'environment' => 'getEnvironment'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['process'] = $data['process'] ?? null;
        $this->container['port_mapping'] = $data['port_mapping'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['ports'] = $data['ports'] ?? null;
        $this->container['enclave_inputstream'] = $data['enclave_inputstream'] ?? null;
        $this->container['console_output'] = $data['console_output'] ?? null;
        $this->container['internal_attesation_server'] = $data['internal_attesation_server'] ?? null;
        $this->container['internal_wireguard_server'] = $data['internal_wireguard_server'] ?? null;
        $this->container['wg_interface'] = $data['wg_interface'] ?? null;
        $this->container['internal_ident'] = $data['internal_ident'] ?? null;
        $this->container['startup_time'] = $data['startup_time'] ?? null;
        $this->container['remote_control_server'] = $data['remote_control_server'] ?? null;
        $this->container['startup_cmd'] = $data['startup_cmd'] ?? null;
        $this->container['ending_time'] = $data['ending_time'] ?? null;
        $this->container['public_ident'] = $data['public_ident'] ?? null;
        $this->container['wireguard_server'] = $data['wireguard_server'] ?? null;
        $this->container['attestation_server'] = $data['attestation_server'] ?? null;
        $this->container['internal_remote_control_server'] = $data['internal_remote_control_server'] ?? null;
        $this->container['enclave_ident'] = $data['enclave_ident'] ?? null;
        $this->container['signer_ident'] = $data['signer_ident'] ?? null;
        $this->container['wireguard_public_key'] = $data['wireguard_public_key'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
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
     * Gets process
     *
     * @return \OpenAPI\Client\Model\JsonProcess|null
     */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
     * Sets process
     *
     * @param \OpenAPI\Client\Model\JsonProcess|null $process process
     *
     * @return self
     */
    public function setProcess($process)
    {
        $this->container['process'] = $process;

        return $this;
    }

    /**
     * Gets port_mapping
     *
     * @return map[string,string]|null
     */
    public function getPortMapping()
    {
        return $this->container['port_mapping'];
    }

    /**
     * Sets port_mapping
     *
     * @param map[string,string]|null $port_mapping 
     *
     * @return self
     */
    public function setPortMapping($port_mapping)
    {
        $this->container['port_mapping'] = $port_mapping;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets ports
     *
     * @return \OpenAPI\Client\Model\JsonEnclavePort[]|null
     */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
     * Sets ports
     *
     * @param \OpenAPI\Client\Model\JsonEnclavePort[]|null $ports 
     *
     * @return self
     */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;

        return $this;
    }

    /**
     * Gets enclave_inputstream
     *
     * @return object|null
     */
    public function getEnclaveInputstream()
    {
        return $this->container['enclave_inputstream'];
    }

    /**
     * Sets enclave_inputstream
     *
     * @param object|null $enclave_inputstream 
     *
     * @return self
     */
    public function setEnclaveInputstream($enclave_inputstream)
    {
        $this->container['enclave_inputstream'] = $enclave_inputstream;

        return $this;
    }

    /**
     * Gets console_output
     *
     * @return string|null
     */
    public function getConsoleOutput()
    {
        return $this->container['console_output'];
    }

    /**
     * Sets console_output
     *
     * @param string|null $console_output 
     *
     * @return self
     */
    public function setConsoleOutput($console_output)
    {
        $this->container['console_output'] = $console_output;

        return $this;
    }

    /**
     * Gets internal_attesation_server
     *
     * @return string|null
     */
    public function getInternalAttesationServer()
    {
        return $this->container['internal_attesation_server'];
    }

    /**
     * Sets internal_attesation_server
     *
     * @param string|null $internal_attesation_server 
     *
     * @return self
     */
    public function setInternalAttesationServer($internal_attesation_server)
    {
        $this->container['internal_attesation_server'] = $internal_attesation_server;

        return $this;
    }

    /**
     * Gets internal_wireguard_server
     *
     * @return string|null
     */
    public function getInternalWireguardServer()
    {
        return $this->container['internal_wireguard_server'];
    }

    /**
     * Sets internal_wireguard_server
     *
     * @param string|null $internal_wireguard_server 
     *
     * @return self
     */
    public function setInternalWireguardServer($internal_wireguard_server)
    {
        $this->container['internal_wireguard_server'] = $internal_wireguard_server;

        return $this;
    }

    /**
     * Gets wg_interface
     *
     * @return \OpenAPI\Client\Model\JsonWireguardInterface|null
     */
    public function getWgInterface()
    {
        return $this->container['wg_interface'];
    }

    /**
     * Sets wg_interface
     *
     * @param \OpenAPI\Client\Model\JsonWireguardInterface|null $wg_interface wg_interface
     *
     * @return self
     */
    public function setWgInterface($wg_interface)
    {
        $this->container['wg_interface'] = $wg_interface;

        return $this;
    }

    /**
     * Gets internal_ident
     *
     * @return string|null
     */
    public function getInternalIdent()
    {
        return $this->container['internal_ident'];
    }

    /**
     * Sets internal_ident
     *
     * @param string|null $internal_ident 
     *
     * @return self
     */
    public function setInternalIdent($internal_ident)
    {
        $this->container['internal_ident'] = $internal_ident;

        return $this;
    }

    /**
     * Gets startup_time
     *
     * @return string|null
     */
    public function getStartupTime()
    {
        return $this->container['startup_time'];
    }

    /**
     * Sets startup_time
     *
     * @param string|null $startup_time 
     *
     * @return self
     */
    public function setStartupTime($startup_time)
    {
        $this->container['startup_time'] = $startup_time;

        return $this;
    }

    /**
     * Gets remote_control_server
     *
     * @return string|null
     */
    public function getRemoteControlServer()
    {
        return $this->container['remote_control_server'];
    }

    /**
     * Sets remote_control_server
     *
     * @param string|null $remote_control_server 
     *
     * @return self
     */
    public function setRemoteControlServer($remote_control_server)
    {
        $this->container['remote_control_server'] = $remote_control_server;

        return $this;
    }

    /**
     * Gets startup_cmd
     *
     * @return string|null
     */
    public function getStartupCmd()
    {
        return $this->container['startup_cmd'];
    }

    /**
     * Sets startup_cmd
     *
     * @param string|null $startup_cmd 
     *
     * @return self
     */
    public function setStartupCmd($startup_cmd)
    {
        $this->container['startup_cmd'] = $startup_cmd;

        return $this;
    }

    /**
     * Gets ending_time
     *
     * @return string|null
     */
    public function getEndingTime()
    {
        return $this->container['ending_time'];
    }

    /**
     * Sets ending_time
     *
     * @param string|null $ending_time 
     *
     * @return self
     */
    public function setEndingTime($ending_time)
    {
        $this->container['ending_time'] = $ending_time;

        return $this;
    }

    /**
     * Gets public_ident
     *
     * @return string|null
     */
    public function getPublicIdent()
    {
        return $this->container['public_ident'];
    }

    /**
     * Sets public_ident
     *
     * @param string|null $public_ident 
     *
     * @return self
     */
    public function setPublicIdent($public_ident)
    {
        $this->container['public_ident'] = $public_ident;

        return $this;
    }

    /**
     * Gets wireguard_server
     *
     * @return string|null
     */
    public function getWireguardServer()
    {
        return $this->container['wireguard_server'];
    }

    /**
     * Sets wireguard_server
     *
     * @param string|null $wireguard_server 
     *
     * @return self
     */
    public function setWireguardServer($wireguard_server)
    {
        $this->container['wireguard_server'] = $wireguard_server;

        return $this;
    }

    /**
     * Gets attestation_server
     *
     * @return string|null
     */
    public function getAttestationServer()
    {
        return $this->container['attestation_server'];
    }

    /**
     * Sets attestation_server
     *
     * @param string|null $attestation_server 
     *
     * @return self
     */
    public function setAttestationServer($attestation_server)
    {
        $this->container['attestation_server'] = $attestation_server;

        return $this;
    }

    /**
     * Gets internal_remote_control_server
     *
     * @return string|null
     */
    public function getInternalRemoteControlServer()
    {
        return $this->container['internal_remote_control_server'];
    }

    /**
     * Sets internal_remote_control_server
     *
     * @param string|null $internal_remote_control_server 
     *
     * @return self
     */
    public function setInternalRemoteControlServer($internal_remote_control_server)
    {
        $this->container['internal_remote_control_server'] = $internal_remote_control_server;

        return $this;
    }

    /**
     * Gets enclave_ident
     *
     * @return string|null
     */
    public function getEnclaveIdent()
    {
        return $this->container['enclave_ident'];
    }

    /**
     * Sets enclave_ident
     *
     * @param string|null $enclave_ident 
     *
     * @return self
     */
    public function setEnclaveIdent($enclave_ident)
    {
        $this->container['enclave_ident'] = $enclave_ident;

        return $this;
    }

    /**
     * Gets signer_ident
     *
     * @return string|null
     */
    public function getSignerIdent()
    {
        return $this->container['signer_ident'];
    }

    /**
     * Sets signer_ident
     *
     * @param string|null $signer_ident 
     *
     * @return self
     */
    public function setSignerIdent($signer_ident)
    {
        $this->container['signer_ident'] = $signer_ident;

        return $this;
    }

    /**
     * Gets wireguard_public_key
     *
     * @return string|null
     */
    public function getWireguardPublicKey()
    {
        return $this->container['wireguard_public_key'];
    }

    /**
     * Sets wireguard_public_key
     *
     * @param string|null $wireguard_public_key 
     *
     * @return self
     */
    public function setWireguardPublicKey($wireguard_public_key)
    {
        $this->container['wireguard_public_key'] = $wireguard_public_key;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return \OpenAPI\Client\Model\JsonEnvironment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \OpenAPI\Client\Model\JsonEnvironment|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


