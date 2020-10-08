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
 * The version of the OpenAPI document: 0.4.15
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta2
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
 */
class JsonEnclaveProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

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
        'startup_cmd' => 'string',
        'internal_wireguard_server' => 'string',
        'signer_ident' => 'string',
        'process' => '\OpenAPI\Client\Model\JsonProcess',
        'remote_control_server' => 'string',
        'internal_ident' => 'string',
        'environment' => '\OpenAPI\Client\Model\JsonEnvironment',
        'wireguard_server' => 'string',
        'ending_time' => 'string',
        'attestation_server' => 'string',
        'wg_interface' => '\OpenAPI\Client\Model\JsonWireguardInterface',
        'startup_time' => 'string',
        'status' => 'string',
        'enclave_ident' => 'string',
        'console_output' => 'string',
        'internal_remote_control_server' => 'string',
        'public_ident' => 'string',
        'internal_attesation_server' => 'string',
        'enclave_inputstream' => 'object',
        'wireguard_public_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'startup_cmd' => null,
        'internal_wireguard_server' => null,
        'signer_ident' => null,
        'process' => null,
        'remote_control_server' => null,
        'internal_ident' => null,
        'environment' => null,
        'wireguard_server' => null,
        'ending_time' => null,
        'attestation_server' => null,
        'wg_interface' => null,
        'startup_time' => null,
        'status' => null,
        'enclave_ident' => null,
        'console_output' => null,
        'internal_remote_control_server' => null,
        'public_ident' => null,
        'internal_attesation_server' => null,
        'enclave_inputstream' => null,
        'wireguard_public_key' => null
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
        'startup_cmd' => 'startupCMD',
        'internal_wireguard_server' => 'internalWireguardServer',
        'signer_ident' => 'signerIdent',
        'process' => 'process',
        'remote_control_server' => 'remoteControlServer',
        'internal_ident' => 'internalIdent',
        'environment' => 'environment',
        'wireguard_server' => 'wireguardServer',
        'ending_time' => 'endingTime',
        'attestation_server' => 'attestationServer',
        'wg_interface' => 'wgInterface',
        'startup_time' => 'startupTime',
        'status' => 'status',
        'enclave_ident' => 'enclaveIdent',
        'console_output' => 'consoleOutput',
        'internal_remote_control_server' => 'internalRemoteControlServer',
        'public_ident' => 'publicIdent',
        'internal_attesation_server' => 'internalAttesationServer',
        'enclave_inputstream' => 'enclaveInputstream',
        'wireguard_public_key' => 'wireguardPublicKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'startup_cmd' => 'setStartupCmd',
        'internal_wireguard_server' => 'setInternalWireguardServer',
        'signer_ident' => 'setSignerIdent',
        'process' => 'setProcess',
        'remote_control_server' => 'setRemoteControlServer',
        'internal_ident' => 'setInternalIdent',
        'environment' => 'setEnvironment',
        'wireguard_server' => 'setWireguardServer',
        'ending_time' => 'setEndingTime',
        'attestation_server' => 'setAttestationServer',
        'wg_interface' => 'setWgInterface',
        'startup_time' => 'setStartupTime',
        'status' => 'setStatus',
        'enclave_ident' => 'setEnclaveIdent',
        'console_output' => 'setConsoleOutput',
        'internal_remote_control_server' => 'setInternalRemoteControlServer',
        'public_ident' => 'setPublicIdent',
        'internal_attesation_server' => 'setInternalAttesationServer',
        'enclave_inputstream' => 'setEnclaveInputstream',
        'wireguard_public_key' => 'setWireguardPublicKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'startup_cmd' => 'getStartupCmd',
        'internal_wireguard_server' => 'getInternalWireguardServer',
        'signer_ident' => 'getSignerIdent',
        'process' => 'getProcess',
        'remote_control_server' => 'getRemoteControlServer',
        'internal_ident' => 'getInternalIdent',
        'environment' => 'getEnvironment',
        'wireguard_server' => 'getWireguardServer',
        'ending_time' => 'getEndingTime',
        'attestation_server' => 'getAttestationServer',
        'wg_interface' => 'getWgInterface',
        'startup_time' => 'getStartupTime',
        'status' => 'getStatus',
        'enclave_ident' => 'getEnclaveIdent',
        'console_output' => 'getConsoleOutput',
        'internal_remote_control_server' => 'getInternalRemoteControlServer',
        'public_ident' => 'getPublicIdent',
        'internal_attesation_server' => 'getInternalAttesationServer',
        'enclave_inputstream' => 'getEnclaveInputstream',
        'wireguard_public_key' => 'getWireguardPublicKey'
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
        $this->container['startup_cmd'] = isset($data['startup_cmd']) ? $data['startup_cmd'] : null;
        $this->container['internal_wireguard_server'] = isset($data['internal_wireguard_server']) ? $data['internal_wireguard_server'] : null;
        $this->container['signer_ident'] = isset($data['signer_ident']) ? $data['signer_ident'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['remote_control_server'] = isset($data['remote_control_server']) ? $data['remote_control_server'] : null;
        $this->container['internal_ident'] = isset($data['internal_ident']) ? $data['internal_ident'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['wireguard_server'] = isset($data['wireguard_server']) ? $data['wireguard_server'] : null;
        $this->container['ending_time'] = isset($data['ending_time']) ? $data['ending_time'] : null;
        $this->container['attestation_server'] = isset($data['attestation_server']) ? $data['attestation_server'] : null;
        $this->container['wg_interface'] = isset($data['wg_interface']) ? $data['wg_interface'] : null;
        $this->container['startup_time'] = isset($data['startup_time']) ? $data['startup_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enclave_ident'] = isset($data['enclave_ident']) ? $data['enclave_ident'] : null;
        $this->container['console_output'] = isset($data['console_output']) ? $data['console_output'] : null;
        $this->container['internal_remote_control_server'] = isset($data['internal_remote_control_server']) ? $data['internal_remote_control_server'] : null;
        $this->container['public_ident'] = isset($data['public_ident']) ? $data['public_ident'] : null;
        $this->container['internal_attesation_server'] = isset($data['internal_attesation_server']) ? $data['internal_attesation_server'] : null;
        $this->container['enclave_inputstream'] = isset($data['enclave_inputstream']) ? $data['enclave_inputstream'] : null;
        $this->container['wireguard_public_key'] = isset($data['wireguard_public_key']) ? $data['wireguard_public_key'] : null;
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
     * @return $this
     */
    public function setStartupCmd($startup_cmd)
    {
        $this->container['startup_cmd'] = $startup_cmd;

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
     * @return $this
     */
    public function setInternalWireguardServer($internal_wireguard_server)
    {
        $this->container['internal_wireguard_server'] = $internal_wireguard_server;

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
     * @return $this
     */
    public function setSignerIdent($signer_ident)
    {
        $this->container['signer_ident'] = $signer_ident;

        return $this;
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
     * @return $this
     */
    public function setProcess($process)
    {
        $this->container['process'] = $process;

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
     * @return $this
     */
    public function setRemoteControlServer($remote_control_server)
    {
        $this->container['remote_control_server'] = $remote_control_server;

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
     * @return $this
     */
    public function setInternalIdent($internal_ident)
    {
        $this->container['internal_ident'] = $internal_ident;

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
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

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
     * @return $this
     */
    public function setWireguardServer($wireguard_server)
    {
        $this->container['wireguard_server'] = $wireguard_server;

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
     * @return $this
     */
    public function setEndingTime($ending_time)
    {
        $this->container['ending_time'] = $ending_time;

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
     * @return $this
     */
    public function setAttestationServer($attestation_server)
    {
        $this->container['attestation_server'] = $attestation_server;

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
     * @return $this
     */
    public function setWgInterface($wg_interface)
    {
        $this->container['wg_interface'] = $wg_interface;

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
     * @return $this
     */
    public function setStartupTime($startup_time)
    {
        $this->container['startup_time'] = $startup_time;

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
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @return $this
     */
    public function setEnclaveIdent($enclave_ident)
    {
        $this->container['enclave_ident'] = $enclave_ident;

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
     * @return $this
     */
    public function setConsoleOutput($console_output)
    {
        $this->container['console_output'] = $console_output;

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
     * @return $this
     */
    public function setInternalRemoteControlServer($internal_remote_control_server)
    {
        $this->container['internal_remote_control_server'] = $internal_remote_control_server;

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
     * @return $this
     */
    public function setPublicIdent($public_ident)
    {
        $this->container['public_ident'] = $public_ident;

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
     * @return $this
     */
    public function setInternalAttesationServer($internal_attesation_server)
    {
        $this->container['internal_attesation_server'] = $internal_attesation_server;

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
     * @return $this
     */
    public function setEnclaveInputstream($enclave_inputstream)
    {
        $this->container['enclave_inputstream'] = $enclave_inputstream;

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
     * @return $this
     */
    public function setWireguardPublicKey($wireguard_public_key)
    {
        $this->container['wireguard_public_key'] = $wireguard_public_key;

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


