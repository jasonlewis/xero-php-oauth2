<?php
/**
 * EarningsOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollNz;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * EarningsOrder Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EarningsOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EarningsOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'statutory_deduction_category' => '\XeroAPI\XeroPHP\Models\PayrollNz\StatutoryDeductionCategory',
        'liability_account_id' => 'string',
        'current_record' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'statutory_deduction_category' => null,
        'liability_account_id' => 'uuid',
        'current_record' => null
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
        'id' => 'id',
        'name' => 'name',
        'statutory_deduction_category' => 'statutoryDeductionCategory',
        'liability_account_id' => 'liabilityAccountId',
        'current_record' => 'currentRecord'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'statutory_deduction_category' => 'setStatutoryDeductionCategory',
        'liability_account_id' => 'setLiabilityAccountId',
        'current_record' => 'setCurrentRecord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'statutory_deduction_category' => 'getStatutoryDeductionCategory',
        'liability_account_id' => 'getLiabilityAccountId',
        'current_record' => 'getCurrentRecord'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['statutory_deduction_category'] = isset($data['statutory_deduction_category']) ? $data['statutory_deduction_category'] : null;
        $this->container['liability_account_id'] = isset($data['liability_account_id']) ? $data['liability_account_id'] : null;
        $this->container['current_record'] = isset($data['current_record']) ? $data['current_record'] : true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Xero unique identifier for an earning rate
     *
     * @return $this
     */
    public function setId($id)
    {

        $this->container['id'] = $id;

        return $this;
    }



    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the earning order
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets statutory_deduction_category
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollNz\StatutoryDeductionCategory|null
     */
    public function getStatutoryDeductionCategory()
    {
        return $this->container['statutory_deduction_category'];
    }

    /**
     * Sets statutory_deduction_category
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollNz\StatutoryDeductionCategory|null $statutory_deduction_category statutory_deduction_category
     *
     * @return $this
     */
    public function setStatutoryDeductionCategory($statutory_deduction_category)
    {

        $this->container['statutory_deduction_category'] = $statutory_deduction_category;

        return $this;
    }



    /**
     * Gets liability_account_id
     *
     * @return string|null
     */
    public function getLiabilityAccountId()
    {
        return $this->container['liability_account_id'];
    }

    /**
     * Sets liability_account_id
     *
     * @param string|null $liability_account_id Xero identifier for Liability Account
     *
     * @return $this
     */
    public function setLiabilityAccountId($liability_account_id)
    {

        $this->container['liability_account_id'] = $liability_account_id;

        return $this;
    }



    /**
     * Gets current_record
     *
     * @return bool|null
     */
    public function getCurrentRecord()
    {
        return $this->container['current_record'];
    }

    /**
     * Sets current_record
     *
     * @param bool|null $current_record Identifier of a record is active or not.
     *
     * @return $this
     */
    public function setCurrentRecord($current_record)
    {

        $this->container['current_record'] = $current_record;

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
        return json_encode(
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


