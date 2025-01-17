<?php
/**
 * CreateSubscription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;

/**
 * CreateSubscription Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateSubscription implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer' => 'string',
        'plan' => 'string',
        'amount' => 'int',
        'quantity' => 'int',
        'test' => 'bool',
        'handle' => 'string',
        'metadata' => 'map[string,object]',
        'source' => 'string',
        'signup_method' => 'string',
        'conditional_create' => 'bool',
        'create_customer' => '\Reepay\Model\CreateCustomer',
        'plan_version' => 'int',
        'amount_incl_vat' => 'bool',
        'generate_handle' => 'bool',
        'start_date' => 'string',
        'end_date' => 'string',
        'grace_duration' => 'int',
        'no_trial' => 'bool',
        'no_setup_fee' => 'bool',
        'subscription_discounts' => '\Reepay\Model\CreateSubscriptionDiscount[]',
        'coupon_codes' => 'string[]',
        'add_ons' => '\Reepay\Model\CreateSubscriptionAddOn[]',
        'additional_costs' => '\Reepay\Model\CreateSubscriptionAdditionalCost[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer' => null,
        'plan' => null,
        'amount' => 'int32',
        'quantity' => 'int32',
        'test' => null,
        'handle' => null,
        'metadata' => null,
        'source' => null,
        'signup_method' => null,
        'conditional_create' => null,
        'create_customer' => null,
        'plan_version' => 'int32',
        'amount_incl_vat' => null,
        'generate_handle' => null,
        'start_date' => null,
        'end_date' => null,
        'grace_duration' => 'int64',
        'no_trial' => null,
        'no_setup_fee' => null,
        'subscription_discounts' => null,
        'coupon_codes' => null,
        'add_ons' => null,
        'additional_costs' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'customer' => 'customer',
        'plan' => 'plan',
        'amount' => 'amount',
        'quantity' => 'quantity',
        'test' => 'test',
        'handle' => 'handle',
        'metadata' => 'metadata',
        'source' => 'source',
        'signup_method' => 'signup_method',
        'conditional_create' => 'conditional_create',
        'create_customer' => 'create_customer',
        'plan_version' => 'plan_version',
        'amount_incl_vat' => 'amount_incl_vat',
        'generate_handle' => 'generate_handle',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'grace_duration' => 'grace_duration',
        'no_trial' => 'no_trial',
        'no_setup_fee' => 'no_setup_fee',
        'subscription_discounts' => 'subscription_discounts',
        'coupon_codes' => 'coupon_codes',
        'add_ons' => 'add_ons',
        'additional_costs' => 'additional_costs'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'plan' => 'setPlan',
        'amount' => 'setAmount',
        'quantity' => 'setQuantity',
        'test' => 'setTest',
        'handle' => 'setHandle',
        'metadata' => 'setMetadata',
        'source' => 'setSource',
        'signup_method' => 'setSignupMethod',
        'conditional_create' => 'setConditionalCreate',
        'create_customer' => 'setCreateCustomer',
        'plan_version' => 'setPlanVersion',
        'amount_incl_vat' => 'setAmountInclVat',
        'generate_handle' => 'setGenerateHandle',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'grace_duration' => 'setGraceDuration',
        'no_trial' => 'setNoTrial',
        'no_setup_fee' => 'setNoSetupFee',
        'subscription_discounts' => 'setSubscriptionDiscounts',
        'coupon_codes' => 'setCouponCodes',
        'add_ons' => 'setAddOns',
        'additional_costs' => 'setAdditionalCosts'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'plan' => 'getPlan',
        'amount' => 'getAmount',
        'quantity' => 'getQuantity',
        'test' => 'getTest',
        'handle' => 'getHandle',
        'metadata' => 'getMetadata',
        'source' => 'getSource',
        'signup_method' => 'getSignupMethod',
        'conditional_create' => 'getConditionalCreate',
        'create_customer' => 'getCreateCustomer',
        'plan_version' => 'getPlanVersion',
        'amount_incl_vat' => 'getAmountInclVat',
        'generate_handle' => 'getGenerateHandle',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'grace_duration' => 'getGraceDuration',
        'no_trial' => 'getNoTrial',
        'no_setup_fee' => 'getNoSetupFee',
        'subscription_discounts' => 'getSubscriptionDiscounts',
        'coupon_codes' => 'getCouponCodes',
        'add_ons' => 'getAddOns',
        'additional_costs' => 'getAdditionalCosts'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }





    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['test'] = isset($data['test']) ? $data['test'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['signup_method'] = isset($data['signup_method']) ? $data['signup_method'] : null;
        $this->container['conditional_create'] = isset($data['conditional_create']) ? $data['conditional_create'] : null;
        $this->container['create_customer'] = isset($data['create_customer']) ? $data['create_customer'] : null;
        $this->container['plan_version'] = isset($data['plan_version']) ? $data['plan_version'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
        $this->container['generate_handle'] = isset($data['generate_handle']) ? $data['generate_handle'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['grace_duration'] = isset($data['grace_duration']) ? $data['grace_duration'] : null;
        $this->container['no_trial'] = isset($data['no_trial']) ? $data['no_trial'] : null;
        $this->container['no_setup_fee'] = isset($data['no_setup_fee']) ? $data['no_setup_fee'] : null;
        $this->container['subscription_discounts'] = isset($data['subscription_discounts']) ? $data['subscription_discounts'] : null;
        $this->container['coupon_codes'] = isset($data['coupon_codes']) ? $data['coupon_codes'] : null;
        $this->container['add_ons'] = isset($data['add_ons']) ? $data['add_ons'] : null;
        $this->container['additional_costs'] = isset($data['additional_costs']) ? $data['additional_costs'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['plan'] === null) {
            $invalid_properties[] = "'plan' can't be null";
        }
        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if ($this->container['signup_method'] === null) {
            $invalid_properties[] = "'signup_method' can't be null";
        }
        if (!is_null($this->container['plan_version']) && ($this->container['plan_version'] < 1)) {
            $invalid_properties[] = "invalid value for 'plan_version', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['grace_duration']) && ($this->container['grace_duration'] < 0)) {
            $invalid_properties[] = "invalid value for 'grace_duration', must be bigger than or equal to 0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['plan'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0) {
            return false;
        }
        if ($this->container['quantity'] < 1) {
            return false;
        }
        if ($this->container['signup_method'] === null) {
            return false;
        }
        if ($this->container['plan_version'] < 1) {
            return false;
        }
        if ($this->container['grace_duration'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets customer
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param string $customer Customer handle of existing customer. Customer can also be provided in same operation by supplying the parameter `create_customer`.
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets plan
     * @return string
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     * @param string $plan Plan handle
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Optional custom per quantity plan price. If provided the plan price billed for each billing period will be overridden by this price.
     * @return $this
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateSubscription., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling CreateSubscription., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets test
     * @return bool
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     * @param bool $test Test flag. If given it will be verified that the account state matches the intended create state.
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

        return $this;
    }

    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique handle for the subscription. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. Must be provided if generate_handle not defined.
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,object]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,object] $metadata Custom metadata.
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source The payment method source if signup method `source`. Either an existing payment method for the customer, e.g. existing card id `ca_...` or a card token `ct_...` generated with [Reepay Token](https://docs.reepay.com/token/) or [Reepay JS Library](https://docs.reepay.com/js/).
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets signup_method
     * @return string
     */
    public function getSignupMethod()
    {
        return $this->container['signup_method'];
    }

    /**
     * Sets signup_method
     * @param string $signup_method The signup method, how to get payment information from customer, one of the following: `source`, `email`, `link`. The `source` method takes a token (e.g. card token `ct_..`) or a reference to an existing customer payment method (e.g. card `ca_..`). The method `email` will send an email to customer requesting payment information with a link to a hosted page. The method `link` does not do anything but the hosted page link in the subscription object can be provided to the customer as a link to enter payment information.
     * @return $this
     */
    public function setSignupMethod($signup_method)
    {
        $this->container['signup_method'] = $signup_method;

        return $this;
    }

    /**
     * Gets conditional_create
     * @return bool
     */
    public function getConditionalCreate()
    {
        return $this->container['conditional_create'];
    }

    /**
     * Sets conditional_create
     * @param bool $conditional_create If the subscription is eligible to bill for the first period right away, this option will make the creation conditional on a successful payment of the first invoice. Will require a signup method of `source`. Default is false.
     * @return $this
     */
    public function setConditionalCreate($conditional_create)
    {
        $this->container['conditional_create'] = $conditional_create;

        return $this;
    }

    /**
     * Gets create_customer
     * @return \Reepay\Model\CreateCustomer
     */
    public function getCreateCustomer()
    {
        return $this->container['create_customer'];
    }

    /**
     * Sets create_customer
     * @param \Reepay\Model\CreateCustomer $create_customer Create customer and subscription in an atomic operation
     * @return $this
     */
    public function setCreateCustomer($create_customer)
    {
        $this->container['create_customer'] = $create_customer;

        return $this;
    }

    /**
     * Gets plan_version
     * @return int
     */
    public function getPlanVersion()
    {
        return $this->container['plan_version'];
    }

    /**
     * Sets plan_version
     * @param int $plan_version Optional plan version, default is to use newest version of plan
     * @return $this
     */
    public function setPlanVersion($plan_version)
    {

        if (!is_null($plan_version) && ($plan_version < 1)) {
            throw new \InvalidArgumentException('invalid value for $plan_version when calling CreateSubscription., must be bigger than or equal to 1.');
        }

        $this->container['plan_version'] = $plan_version;

        return $this;
    }

    /**
     * Gets amount_incl_vat
     * @return bool
     */
    public function getAmountInclVat()
    {
        return $this->container['amount_incl_vat'];
    }

    /**
     * Sets amount_incl_vat
     * @param bool $amount_incl_vat Whether the optional amount is including VAT. Defaults to true.
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

        return $this;
    }

    /**
     * Gets generate_handle
     * @return bool
     */
    public function getGenerateHandle()
    {
        return $this->container['generate_handle'];
    }

    /**
     * Sets generate_handle
     * @param bool $generate_handle Auto generate handle on the form sub-[sequence_number]
     * @return $this
     */
    public function setGenerateHandle($generate_handle)
    {
        $this->container['generate_handle'] = $generate_handle;

        return $this;
    }

    /**
     * Gets start_date
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param string $start_date Date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` from which the subscription is eligible to schedule first invoice. If no time part is given start of day will be used. A start date in the past can be used, but no more than one period length in the past. A start date in the past can result in an instant invoice for a past billing period start. Default value is current date and time.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param string $end_date Fixed date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` where the subscription will automatically cancel. The subscription will expire at the end of the billing period containing the end date. Default is no fixed end date.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets grace_duration
     * @return int
     */
    public function getGraceDuration()
    {
        return $this->container['grace_duration'];
    }

    /**
     * Sets grace_duration
     * @param int $grace_duration A grace duration in seconds from the creation of a subscription where no dunning process is started for a failing invoice. This allows a certain amount of time for the customer to sign up with a payment method.
     * @return $this
     */
    public function setGraceDuration($grace_duration)
    {

        if (!is_null($grace_duration) && ($grace_duration < 0)) {
            throw new \InvalidArgumentException('invalid value for $grace_duration when calling CreateSubscription., must be bigger than or equal to 0.');
        }

        $this->container['grace_duration'] = $grace_duration;

        return $this;
    }

    /**
     * Gets no_trial
     * @return bool
     */
    public function getNoTrial()
    {
        return $this->container['no_trial'];
    }

    /**
     * Sets no_trial
     * @param bool $no_trial Override plan trial settings and disable trial
     * @return $this
     */
    public function setNoTrial($no_trial)
    {
        $this->container['no_trial'] = $no_trial;

        return $this;
    }

    /**
     * Gets no_setup_fee
     * @return bool
     */
    public function getNoSetupFee()
    {
        return $this->container['no_setup_fee'];
    }

    /**
     * Sets no_setup_fee
     * @param bool $no_setup_fee Override plan setup fee settings and disable fee
     * @return $this
     */
    public function setNoSetupFee($no_setup_fee)
    {
        $this->container['no_setup_fee'] = $no_setup_fee;

        return $this;
    }

    /**
     * Gets subscription_discounts
     * @return \Reepay\Model\CreateSubscriptionDiscount[]
     */
    public function getSubscriptionDiscounts()
    {
        return $this->container['subscription_discounts'];
    }

    /**
     * Sets subscription_discounts
     * @param \Reepay\Model\CreateSubscriptionDiscount[] $subscription_discounts Discounts to attach to subscription
     * @return $this
     */
    public function setSubscriptionDiscounts($subscription_discounts)
    {
        $this->container['subscription_discounts'] = $subscription_discounts;

        return $this;
    }

    /**
     * Gets coupon_codes
     * @return string[]
     */
    public function getCouponCodes()
    {
        return $this->container['coupon_codes'];
    }

    /**
     * Sets coupon_codes
     * @param string[] $coupon_codes Coupon codes to redeem for subscription
     * @return $this
     */
    public function setCouponCodes($coupon_codes)
    {
        $this->container['coupon_codes'] = $coupon_codes;

        return $this;
    }

    /**
     * Gets add_ons
     * @return \Reepay\Model\CreateSubscriptionAddOn[]
     */
    public function getAddOns()
    {
        return $this->container['add_ons'];
    }

    /**
     * Sets add_ons
     * @param \Reepay\Model\CreateSubscriptionAddOn[] $add_ons Add-ons to attach to subscription. The same add-on can only be attached to subscription once unless unique handles are supplied for the subscription add-on.
     * @return $this
     */
    public function setAddOns($add_ons)
    {
        $this->container['add_ons'] = $add_ons;

        return $this;
    }

    /**
     * Gets additional_costs
     * @return \Reepay\Model\CreateSubscriptionAdditionalCost[]
     */
    public function getAdditionalCosts()
    {
        return $this->container['additional_costs'];
    }

    /**
     * Sets additional_costs
     * @param \Reepay\Model\CreateSubscriptionAdditionalCost[] $additional_costs Additional costs to add to subscription at creation time
     * @return $this
     */
    public function setAdditionalCosts($additional_costs)
    {
        $this->container['additional_costs'] = $additional_costs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


