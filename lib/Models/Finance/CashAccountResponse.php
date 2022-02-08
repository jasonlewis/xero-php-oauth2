<?php
/**
 * CashAccountResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Finance API
 *
 * The Finance API is a collection of endpoints which customers can use in the course of a loan application, which may assist lenders to gain the confidence they need to provide capital.
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Finance;

use \ArrayAccess;
use \XeroAPI\XeroPHP\FinanceObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * CashAccountResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CashAccountResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashAccountResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unreconciled_amount_pos' => 'double',
        'unreconciled_amount_neg' => 'double',
        'starting_balance' => 'double',
        'account_balance' => 'double',
        'balance_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'unreconciled_amount_pos' => 'double',
        'unreconciled_amount_neg' => 'double',
        'starting_balance' => 'double',
        'account_balance' => 'double',
        'balance_currency' => null
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
        'unreconciled_amount_pos' => 'unreconciledAmountPos',
        'unreconciled_amount_neg' => 'unreconciledAmountNeg',
        'starting_balance' => 'startingBalance',
        'account_balance' => 'accountBalance',
        'balance_currency' => 'balanceCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unreconciled_amount_pos' => 'setUnreconciledAmountPos',
        'unreconciled_amount_neg' => 'setUnreconciledAmountNeg',
        'starting_balance' => 'setStartingBalance',
        'account_balance' => 'setAccountBalance',
        'balance_currency' => 'setBalanceCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unreconciled_amount_pos' => 'getUnreconciledAmountPos',
        'unreconciled_amount_neg' => 'getUnreconciledAmountNeg',
        'starting_balance' => 'getStartingBalance',
        'account_balance' => 'getAccountBalance',
        'balance_currency' => 'getBalanceCurrency'
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
        $this->container['unreconciled_amount_pos'] = isset($data['unreconciled_amount_pos']) ? $data['unreconciled_amount_pos'] : null;
        $this->container['unreconciled_amount_neg'] = isset($data['unreconciled_amount_neg']) ? $data['unreconciled_amount_neg'] : null;
        $this->container['starting_balance'] = isset($data['starting_balance']) ? $data['starting_balance'] : null;
        $this->container['account_balance'] = isset($data['account_balance']) ? $data['account_balance'] : null;
        $this->container['balance_currency'] = isset($data['balance_currency']) ? $data['balance_currency'] : null;
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
     * Gets unreconciled_amount_pos
     *
     * @return double|null
     */
    public function getUnreconciledAmountPos()
    {
        return $this->container['unreconciled_amount_pos'];
    }

    /**
     * Sets unreconciled_amount_pos
     *
     * @param double|null $unreconciled_amount_pos Total value of transactions in the journals which are not reconciled to bank statement lines, and have a positive (debit) value.
     *
     * @return $this
     */
    public function setUnreconciledAmountPos($unreconciled_amount_pos)
    {

        $this->container['unreconciled_amount_pos'] = $unreconciled_amount_pos;

        return $this;
    }



    /**
     * Gets unreconciled_amount_neg
     *
     * @return double|null
     */
    public function getUnreconciledAmountNeg()
    {
        return $this->container['unreconciled_amount_neg'];
    }

    /**
     * Sets unreconciled_amount_neg
     *
     * @param double|null $unreconciled_amount_neg Total value of transactions in the journals which are not reconciled to bank statement lines, and have a negative (credit) value.
     *
     * @return $this
     */
    public function setUnreconciledAmountNeg($unreconciled_amount_neg)
    {

        $this->container['unreconciled_amount_neg'] = $unreconciled_amount_neg;

        return $this;
    }



    /**
     * Gets starting_balance
     *
     * @return double|null
     */
    public function getStartingBalance()
    {
        return $this->container['starting_balance'];
    }

    /**
     * Sets starting_balance
     *
     * @param double|null $starting_balance Starting (or historic) balance from the journals (manually keyed in by users on account creation - unverified).
     *
     * @return $this
     */
    public function setStartingBalance($starting_balance)
    {

        $this->container['starting_balance'] = $starting_balance;

        return $this;
    }



    /**
     * Gets account_balance
     *
     * @return double|null
     */
    public function getAccountBalance()
    {
        return $this->container['account_balance'];
    }

    /**
     * Sets account_balance
     *
     * @param double|null $account_balance Current cash at bank accounting value from the journals.
     *
     * @return $this
     */
    public function setAccountBalance($account_balance)
    {

        $this->container['account_balance'] = $account_balance;

        return $this;
    }



    /**
     * Gets balance_currency
     *
     * @return string|null
     */
    public function getBalanceCurrency()
    {
        return $this->container['balance_currency'];
    }

    /**
     * Sets balance_currency
     *
     * @param string|null $balance_currency Currency which the cashAccount transactions relate to.
     *
     * @return $this
     */
    public function setBalanceCurrency($balance_currency)
    {

        $this->container['balance_currency'] = $balance_currency;

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
            FinanceObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

