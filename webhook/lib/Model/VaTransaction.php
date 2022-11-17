<?php
/**
 * VaTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Webhook\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>Ph2.5向けに作成したもの</p>
 *
 * OpenAPI spec version: 1.1.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ganb\Webhook\Client\Model;

use \ArrayAccess;
use \Ganb\Webhook\Client\ObjectSerializer;

/**
 * VaTransaction Class Doc Comment
 *
 * @category Class
 * @description 振込入金口座入金明細情報
 * @package  Ganb\Webhook\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VaTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VaTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'va_id' => 'string',
        'transaction_date' => 'string',
        'value_date' => 'string',
        'va_branch_code' => 'string',
        'va_branch_name_kana' => 'string',
        'va_account_number' => 'string',
        'va_account_name_kana' => 'string',
        'deposit_amount' => 'string',
        'remitter_name_kana' => 'string',
        'payment_bank_name' => 'string',
        'payment_branch_name' => 'string',
        'partner_name' => 'string',
        'remarks' => 'string',
        'item_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'va_id' => null,
        'transaction_date' => null,
        'value_date' => null,
        'va_branch_code' => null,
        'va_branch_name_kana' => null,
        'va_account_number' => null,
        'va_account_name_kana' => null,
        'deposit_amount' => null,
        'remitter_name_kana' => null,
        'payment_bank_name' => null,
        'payment_branch_name' => null,
        'partner_name' => null,
        'remarks' => null,
        'item_key' => null
    ];

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
        'va_id' => 'vaId',
        'transaction_date' => 'transactionDate',
        'value_date' => 'valueDate',
        'va_branch_code' => 'vaBranchCode',
        'va_branch_name_kana' => 'vaBranchNameKana',
        'va_account_number' => 'vaAccountNumber',
        'va_account_name_kana' => 'vaAccountNameKana',
        'deposit_amount' => 'depositAmount',
        'remitter_name_kana' => 'remitterNameKana',
        'payment_bank_name' => 'paymentBankName',
        'payment_branch_name' => 'paymentBranchName',
        'partner_name' => 'partnerName',
        'remarks' => 'remarks',
        'item_key' => 'itemKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'va_id' => 'setVaId',
        'transaction_date' => 'setTransactionDate',
        'value_date' => 'setValueDate',
        'va_branch_code' => 'setVaBranchCode',
        'va_branch_name_kana' => 'setVaBranchNameKana',
        'va_account_number' => 'setVaAccountNumber',
        'va_account_name_kana' => 'setVaAccountNameKana',
        'deposit_amount' => 'setDepositAmount',
        'remitter_name_kana' => 'setRemitterNameKana',
        'payment_bank_name' => 'setPaymentBankName',
        'payment_branch_name' => 'setPaymentBranchName',
        'partner_name' => 'setPartnerName',
        'remarks' => 'setRemarks',
        'item_key' => 'setItemKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'va_id' => 'getVaId',
        'transaction_date' => 'getTransactionDate',
        'value_date' => 'getValueDate',
        'va_branch_code' => 'getVaBranchCode',
        'va_branch_name_kana' => 'getVaBranchNameKana',
        'va_account_number' => 'getVaAccountNumber',
        'va_account_name_kana' => 'getVaAccountNameKana',
        'deposit_amount' => 'getDepositAmount',
        'remitter_name_kana' => 'getRemitterNameKana',
        'payment_bank_name' => 'getPaymentBankName',
        'payment_branch_name' => 'getPaymentBranchName',
        'partner_name' => 'getPartnerName',
        'remarks' => 'getRemarks',
        'item_key' => 'getItemKey'
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
        $this->container['va_id'] = isset($data['va_id']) ? $data['va_id'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['value_date'] = isset($data['value_date']) ? $data['value_date'] : null;
        $this->container['va_branch_code'] = isset($data['va_branch_code']) ? $data['va_branch_code'] : null;
        $this->container['va_branch_name_kana'] = isset($data['va_branch_name_kana']) ? $data['va_branch_name_kana'] : null;
        $this->container['va_account_number'] = isset($data['va_account_number']) ? $data['va_account_number'] : null;
        $this->container['va_account_name_kana'] = isset($data['va_account_name_kana']) ? $data['va_account_name_kana'] : null;
        $this->container['deposit_amount'] = isset($data['deposit_amount']) ? $data['deposit_amount'] : null;
        $this->container['remitter_name_kana'] = isset($data['remitter_name_kana']) ? $data['remitter_name_kana'] : null;
        $this->container['payment_bank_name'] = isset($data['payment_bank_name']) ? $data['payment_bank_name'] : null;
        $this->container['payment_branch_name'] = isset($data['payment_branch_name']) ? $data['payment_branch_name'] : null;
        $this->container['partner_name'] = isset($data['partner_name']) ? $data['partner_name'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['item_key'] = isset($data['item_key']) ? $data['item_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['va_id'] === null) {
            $invalidProperties[] = "'va_id' can't be null";
        }
        if ((mb_strlen($this->container['va_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'va_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['va_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'va_id', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['transaction_date'] === null) {
            $invalidProperties[] = "'transaction_date' can't be null";
        }
        if ((mb_strlen($this->container['transaction_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'transaction_date', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['transaction_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'transaction_date', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['value_date'] === null) {
            $invalidProperties[] = "'value_date' can't be null";
        }
        if ((mb_strlen($this->container['value_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'value_date', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['value_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'value_date', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['va_branch_code'] === null) {
            $invalidProperties[] = "'va_branch_code' can't be null";
        }
        if ((mb_strlen($this->container['va_branch_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'va_branch_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['va_branch_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'va_branch_code', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['va_branch_name_kana'] === null) {
            $invalidProperties[] = "'va_branch_name_kana' can't be null";
        }
        if ((mb_strlen($this->container['va_branch_name_kana']) > 15)) {
            $invalidProperties[] = "invalid value for 'va_branch_name_kana', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['va_branch_name_kana']) < 1)) {
            $invalidProperties[] = "invalid value for 'va_branch_name_kana', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['va_account_number'] === null) {
            $invalidProperties[] = "'va_account_number' can't be null";
        }
        if ((mb_strlen($this->container['va_account_number']) > 7)) {
            $invalidProperties[] = "invalid value for 'va_account_number', the character length must be smaller than or equal to 7.";
        }

        if ((mb_strlen($this->container['va_account_number']) < 7)) {
            $invalidProperties[] = "invalid value for 'va_account_number', the character length must be bigger than or equal to 7.";
        }

        if ($this->container['va_account_name_kana'] === null) {
            $invalidProperties[] = "'va_account_name_kana' can't be null";
        }
        if ((mb_strlen($this->container['va_account_name_kana']) > 40)) {
            $invalidProperties[] = "invalid value for 'va_account_name_kana', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['va_account_name_kana']) < 1)) {
            $invalidProperties[] = "invalid value for 'va_account_name_kana', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['deposit_amount'] === null) {
            $invalidProperties[] = "'deposit_amount' can't be null";
        }
        if ((mb_strlen($this->container['deposit_amount']) > 20)) {
            $invalidProperties[] = "invalid value for 'deposit_amount', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['deposit_amount']) < 1)) {
            $invalidProperties[] = "invalid value for 'deposit_amount', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['remitter_name_kana'] === null) {
            $invalidProperties[] = "'remitter_name_kana' can't be null";
        }
        if ((mb_strlen($this->container['remitter_name_kana']) > 48)) {
            $invalidProperties[] = "invalid value for 'remitter_name_kana', the character length must be smaller than or equal to 48.";
        }

        if ((mb_strlen($this->container['remitter_name_kana']) < 1)) {
            $invalidProperties[] = "invalid value for 'remitter_name_kana', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['payment_bank_name'] === null) {
            $invalidProperties[] = "'payment_bank_name' can't be null";
        }
        if ((mb_strlen($this->container['payment_bank_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'payment_bank_name', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['payment_bank_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_bank_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['payment_branch_name'] === null) {
            $invalidProperties[] = "'payment_branch_name' can't be null";
        }
        if ((mb_strlen($this->container['payment_branch_name']) > 15)) {
            $invalidProperties[] = "invalid value for 'payment_branch_name', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['payment_branch_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_branch_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['partner_name'] === null) {
            $invalidProperties[] = "'partner_name' can't be null";
        }
        if ((mb_strlen($this->container['partner_name']) > 10)) {
            $invalidProperties[] = "invalid value for 'partner_name', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['partner_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'partner_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) > 255)) {
            $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) < 1)) {
            $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['item_key'] === null) {
            $invalidProperties[] = "'item_key' can't be null";
        }
        if ((mb_strlen($this->container['item_key']) > 24)) {
            $invalidProperties[] = "invalid value for 'item_key', the character length must be smaller than or equal to 24.";
        }

        if ((mb_strlen($this->container['item_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'item_key', the character length must be bigger than or equal to 1.";
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
     * Gets va_id
     *
     * @return string
     */
    public function getVaId()
    {
        return $this->container['va_id'];
    }

    /**
     * Sets va_id
     *
     * @param string $va_id 振込入金口座ID 半角数字 振込入金口座を識別するID
     *
     * @return $this
     */
    public function setVaId($va_id)
    {
        if ((mb_strlen($va_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $va_id when calling VaTransaction., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($va_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $va_id when calling VaTransaction., must be bigger than or equal to 10.');
        }

        $this->container['va_id'] = $va_id;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param string $transaction_date 取引日 半角文字 YYYY-MM-DD形式
     *
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        if ((mb_strlen($transaction_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $transaction_date when calling VaTransaction., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($transaction_date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $transaction_date when calling VaTransaction., must be bigger than or equal to 10.');
        }

        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets value_date
     *
     * @return string
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param string $value_date 起算日 半角文字 YYYY-MM-DD形式
     *
     * @return $this
     */
    public function setValueDate($value_date)
    {
        if ((mb_strlen($value_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $value_date when calling VaTransaction., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($value_date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $value_date when calling VaTransaction., must be bigger than or equal to 10.');
        }

        $this->container['value_date'] = $value_date;

        return $this;
    }

    /**
     * Gets va_branch_code
     *
     * @return string
     */
    public function getVaBranchCode()
    {
        return $this->container['va_branch_code'];
    }

    /**
     * Sets va_branch_code
     *
     * @param string $va_branch_code 支店コード 半角数字
     *
     * @return $this
     */
    public function setVaBranchCode($va_branch_code)
    {
        if ((mb_strlen($va_branch_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $va_branch_code when calling VaTransaction., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($va_branch_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $va_branch_code when calling VaTransaction., must be bigger than or equal to 3.');
        }

        $this->container['va_branch_code'] = $va_branch_code;

        return $this;
    }

    /**
     * Gets va_branch_name_kana
     *
     * @return string
     */
    public function getVaBranchNameKana()
    {
        return $this->container['va_branch_name_kana'];
    }

    /**
     * Sets va_branch_name_kana
     *
     * @param string $va_branch_name_kana 支店名カナ 半角文字
     *
     * @return $this
     */
    public function setVaBranchNameKana($va_branch_name_kana)
    {
        if ((mb_strlen($va_branch_name_kana) > 15)) {
            throw new \InvalidArgumentException('invalid length for $va_branch_name_kana when calling VaTransaction., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($va_branch_name_kana) < 1)) {
            throw new \InvalidArgumentException('invalid length for $va_branch_name_kana when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['va_branch_name_kana'] = $va_branch_name_kana;

        return $this;
    }

    /**
     * Gets va_account_number
     *
     * @return string
     */
    public function getVaAccountNumber()
    {
        return $this->container['va_account_number'];
    }

    /**
     * Sets va_account_number
     *
     * @param string $va_account_number 口座番号 半角数字
     *
     * @return $this
     */
    public function setVaAccountNumber($va_account_number)
    {
        if ((mb_strlen($va_account_number) > 7)) {
            throw new \InvalidArgumentException('invalid length for $va_account_number when calling VaTransaction., must be smaller than or equal to 7.');
        }
        if ((mb_strlen($va_account_number) < 7)) {
            throw new \InvalidArgumentException('invalid length for $va_account_number when calling VaTransaction., must be bigger than or equal to 7.');
        }

        $this->container['va_account_number'] = $va_account_number;

        return $this;
    }

    /**
     * Gets va_account_name_kana
     *
     * @return string
     */
    public function getVaAccountNameKana()
    {
        return $this->container['va_account_name_kana'];
    }

    /**
     * Sets va_account_name_kana
     *
     * @param string $va_account_name_kana 口座名義カナ 半角文字
     *
     * @return $this
     */
    public function setVaAccountNameKana($va_account_name_kana)
    {
        if ((mb_strlen($va_account_name_kana) > 40)) {
            throw new \InvalidArgumentException('invalid length for $va_account_name_kana when calling VaTransaction., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($va_account_name_kana) < 1)) {
            throw new \InvalidArgumentException('invalid length for $va_account_name_kana when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['va_account_name_kana'] = $va_account_name_kana;

        return $this;
    }

    /**
     * Gets deposit_amount
     *
     * @return string
     */
    public function getDepositAmount()
    {
        return $this->container['deposit_amount'];
    }

    /**
     * Sets deposit_amount
     *
     * @param string $deposit_amount 入金金額 半角数字
     *
     * @return $this
     */
    public function setDepositAmount($deposit_amount)
    {
        if ((mb_strlen($deposit_amount) > 20)) {
            throw new \InvalidArgumentException('invalid length for $deposit_amount when calling VaTransaction., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($deposit_amount) < 1)) {
            throw new \InvalidArgumentException('invalid length for $deposit_amount when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['deposit_amount'] = $deposit_amount;

        return $this;
    }

    /**
     * Gets remitter_name_kana
     *
     * @return string
     */
    public function getRemitterNameKana()
    {
        return $this->container['remitter_name_kana'];
    }

    /**
     * Sets remitter_name_kana
     *
     * @param string $remitter_name_kana 振込依頼人名カナ 半角文字
     *
     * @return $this
     */
    public function setRemitterNameKana($remitter_name_kana)
    {
        if ((mb_strlen($remitter_name_kana) > 48)) {
            throw new \InvalidArgumentException('invalid length for $remitter_name_kana when calling VaTransaction., must be smaller than or equal to 48.');
        }
        if ((mb_strlen($remitter_name_kana) < 1)) {
            throw new \InvalidArgumentException('invalid length for $remitter_name_kana when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['remitter_name_kana'] = $remitter_name_kana;

        return $this;
    }

    /**
     * Gets payment_bank_name
     *
     * @return string
     */
    public function getPaymentBankName()
    {
        return $this->container['payment_bank_name'];
    }

    /**
     * Sets payment_bank_name
     *
     * @param string $payment_bank_name 仕向金融機関名カナ 半角文字
     *
     * @return $this
     */
    public function setPaymentBankName($payment_bank_name)
    {
        if ((mb_strlen($payment_bank_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $payment_bank_name when calling VaTransaction., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($payment_bank_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_bank_name when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['payment_bank_name'] = $payment_bank_name;

        return $this;
    }

    /**
     * Gets payment_branch_name
     *
     * @return string
     */
    public function getPaymentBranchName()
    {
        return $this->container['payment_branch_name'];
    }

    /**
     * Sets payment_branch_name
     *
     * @param string $payment_branch_name 仕向支店名カナ 半角文字
     *
     * @return $this
     */
    public function setPaymentBranchName($payment_branch_name)
    {
        if ((mb_strlen($payment_branch_name) > 15)) {
            throw new \InvalidArgumentException('invalid length for $payment_branch_name when calling VaTransaction., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($payment_branch_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_branch_name when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['payment_branch_name'] = $payment_branch_name;

        return $this;
    }

    /**
     * Gets partner_name
     *
     * @return string
     */
    public function getPartnerName()
    {
        return $this->container['partner_name'];
    }

    /**
     * Sets partner_name
     *
     * @param string $partner_name サービス企業名 全角文字 振込入金口座契約サービス企業名
     *
     * @return $this
     */
    public function setPartnerName($partner_name)
    {
        if ((mb_strlen($partner_name) > 10)) {
            throw new \InvalidArgumentException('invalid length for $partner_name when calling VaTransaction., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($partner_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $partner_name when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['partner_name'] = $partner_name;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string $remarks 摘要内容 全半角文字 該当データがない場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        if (!is_null($remarks) && (mb_strlen($remarks) > 255)) {
            throw new \InvalidArgumentException('invalid length for $remarks when calling VaTransaction., must be smaller than or equal to 255.');
        }
        if (!is_null($remarks) && (mb_strlen($remarks) < 1)) {
            throw new \InvalidArgumentException('invalid length for $remarks when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets item_key
     *
     * @return string
     */
    public function getItemKey()
    {
        return $this->container['item_key'];
    }

    /**
     * Sets item_key
     *
     * @param string $item_key 明細キー 半角数字 口座ID毎に設定される明細キー（明細データtimestamp（μs））
     *
     * @return $this
     */
    public function setItemKey($item_key)
    {
        if ((mb_strlen($item_key) > 24)) {
            throw new \InvalidArgumentException('invalid length for $item_key when calling VaTransaction., must be smaller than or equal to 24.');
        }
        if ((mb_strlen($item_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $item_key when calling VaTransaction., must be bigger than or equal to 1.');
        }

        $this->container['item_key'] = $item_key;

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


