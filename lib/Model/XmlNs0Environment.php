<?php
/**
 * XmlNs0Environment
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
 * The version of the OpenAPI document: 0.5.0-master.38
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
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
 * XmlNs0Environment Class Doc Comment
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
class XmlNs0Environment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'xml_ns0_environment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => 'string[]',
        'default_run_configuration' => '\OpenAPI\Client\Model\XmlNs0RunConfig',
        'description' => 'string',
        'ipfs_hash' => 'string',
        'name' => 'string',
        'packages' => 'string[]',
        'published' => 'bool',
        'root_hash_offset' => 'string',
        'roothash' => 'string',
        'size' => 'string',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content' => null,
        'default_run_configuration' => null,
        'description' => null,
        'ipfs_hash' => null,
        'name' => null,
        'packages' => null,
        'published' => null,
        'root_hash_offset' => null,
        'roothash' => null,
        'size' => null,
        'uuid' => null
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
        'content' => 'content',
        'default_run_configuration' => 'defaultRunConfiguration',
        'description' => 'description',
        'ipfs_hash' => 'ipfsHash',
        'name' => 'name',
        'packages' => 'packages',
        'published' => 'published',
        'root_hash_offset' => 'rootHashOffset',
        'roothash' => 'roothash',
        'size' => 'size',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'default_run_configuration' => 'setDefaultRunConfiguration',
        'description' => 'setDescription',
        'ipfs_hash' => 'setIpfsHash',
        'name' => 'setName',
        'packages' => 'setPackages',
        'published' => 'setPublished',
        'root_hash_offset' => 'setRootHashOffset',
        'roothash' => 'setRoothash',
        'size' => 'setSize',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'default_run_configuration' => 'getDefaultRunConfiguration',
        'description' => 'getDescription',
        'ipfs_hash' => 'getIpfsHash',
        'name' => 'getName',
        'packages' => 'getPackages',
        'published' => 'getPublished',
        'root_hash_offset' => 'getRootHashOffset',
        'roothash' => 'getRoothash',
        'size' => 'getSize',
        'uuid' => 'getUuid'
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
        $this->container['content'] = $data['content'] ?? null;
        $this->container['default_run_configuration'] = $data['default_run_configuration'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['ipfs_hash'] = $data['ipfs_hash'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['packages'] = $data['packages'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
        $this->container['root_hash_offset'] = $data['root_hash_offset'] ?? null;
        $this->container['roothash'] = $data['roothash'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
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
     * Gets content
     *
     * @return string[]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string[]|null $content 
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets default_run_configuration
     *
     * @return \OpenAPI\Client\Model\XmlNs0RunConfig|null
     */
    public function getDefaultRunConfiguration()
    {
        return $this->container['default_run_configuration'];
    }

    /**
     * Sets default_run_configuration
     *
     * @param \OpenAPI\Client\Model\XmlNs0RunConfig|null $default_run_configuration default_run_configuration
     *
     * @return self
     */
    public function setDefaultRunConfiguration($default_run_configuration)
    {
        $this->container['default_run_configuration'] = $default_run_configuration;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ipfs_hash
     *
     * @return string|null
     */
    public function getIpfsHash()
    {
        return $this->container['ipfs_hash'];
    }

    /**
     * Sets ipfs_hash
     *
     * @param string|null $ipfs_hash 
     *
     * @return self
     */
    public function setIpfsHash($ipfs_hash)
    {
        $this->container['ipfs_hash'] = $ipfs_hash;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return string[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param string[]|null $packages 
     *
     * @return self
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published 
     *
     * @return self
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets root_hash_offset
     *
     * @return string|null
     */
    public function getRootHashOffset()
    {
        return $this->container['root_hash_offset'];
    }

    /**
     * Sets root_hash_offset
     *
     * @param string|null $root_hash_offset 
     *
     * @return self
     */
    public function setRootHashOffset($root_hash_offset)
    {
        $this->container['root_hash_offset'] = $root_hash_offset;

        return $this;
    }

    /**
     * Gets roothash
     *
     * @return string|null
     */
    public function getRoothash()
    {
        return $this->container['roothash'];
    }

    /**
     * Sets roothash
     *
     * @param string|null $roothash 
     *
     * @return self
     */
    public function setRoothash($roothash)
    {
        $this->container['roothash'] = $roothash;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size 
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid 
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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


