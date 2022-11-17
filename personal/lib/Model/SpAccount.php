<?php
/**
 * SpAccount
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Personal\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/personal/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/personal/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
 *
 * OpenAPI spec version: 1.1.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ganb\Personal\Client\Model;

use \ArrayAccess;
use \Ganb\Personal\Client\ObjectSerializer;

/**
 * SpAccount Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Personal\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SpAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SpAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'sp_account_type_code' => 'string',
        'sp_account_type_code_name' => 'string',
        'sp_account_name' => 'string',
        'sp_account_branch_code' => 'string',
        'sp_account_branch_name' => 'string',
        'sp_account_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'sp_account_type_code' => null,
        'sp_account_type_code_name' => null,
        'sp_account_name' => null,
        'sp_account_branch_code' => null,
        'sp_account_branch_name' => null,
        'sp_account_number' => null
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
        'account_id' => 'accountId',
        'sp_account_type_code' => 'spAccountTypeCode',
        'sp_account_type_code_name' => 'spAccountTypeCodeName',
        'sp_account_name' => 'spAccountName',
        'sp_account_branch_code' => 'spAccountBranchCode',
        'sp_account_branch_name' => 'spAccountBranchName',
        'sp_account_number' => 'spAccountNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'sp_account_type_code' => 'setSpAccountTypeCode',
        'sp_account_type_code_name' => 'setSpAccountTypeCodeName',
        'sp_account_name' => 'setSpAccountName',
        'sp_account_branch_code' => 'setSpAccountBranchCode',
        'sp_account_branch_name' => 'setSpAccountBranchName',
        'sp_account_number' => 'setSpAccountNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'sp_account_type_code' => 'getSpAccountTypeCode',
        'sp_account_type_code_name' => 'getSpAccountTypeCodeName',
        'sp_account_name' => 'getSpAccountName',
        'sp_account_branch_code' => 'getSpAccountBranchCode',
        'sp_account_branch_name' => 'getSpAccountBranchName',
        'sp_account_number' => 'getSpAccountNumber'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['sp_account_type_code'] = isset($data['sp_account_type_code']) ? $data['sp_account_type_code'] : null;
        $this->container['sp_account_type_code_name'] = isset($data['sp_account_type_code_name']) ? $data['sp_account_type_code_name'] : null;
        $this->container['sp_account_name'] = isset($data['sp_account_name']) ? $data['sp_account_name'] : null;
        $this->container['sp_account_branch_code'] = isset($data['sp_account_branch_code']) ? $data['sp_account_branch_code'] : null;
        $this->container['sp_account_branch_name'] = isset($data['sp_account_branch_name']) ? $data['sp_account_branch_name'] : null;
        $this->container['sp_account_number'] = isset($data['sp_account_number']) ? $data['sp_account_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ((mb_strlen($this->container['account_id']) > 29)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be smaller than or equal to 29.";
        }

        if ((mb_strlen($this->container['account_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be bigger than or equal to 12.";
        }

        if ($this->container['sp_account_type_code'] === null) {
            $invalidProperties[] = "'sp_account_type_code' can't be null";
        }
        if ((mb_strlen($this->container['sp_account_type_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'sp_account_type_code', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['sp_account_type_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'sp_account_type_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['sp_account_type_code_name'] === null) {
            $invalidProperties[] = "'sp_account_type_code_name' can't be null";
        }
        if ((mb_strlen($this->container['sp_account_type_code_name']) > 3)) {
            $invalidProperties[] = "invalid value for 'sp_account_type_code_name', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['sp_account_type_code_name']) < 3)) {
            $invalidProperties[] = "invalid value for 'sp_account_type_code_name', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['sp_account_name'] === null) {
            $invalidProperties[] = "'sp_account_name' can't be null";
        }
        if ((mb_strlen($this->container['sp_account_name']) > 10)) {
            $invalidProperties[] = "invalid value for 'sp_account_name', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['sp_account_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'sp_account_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sp_account_branch_code']) && (mb_strlen($this->container['sp_account_branch_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'sp_account_branch_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['sp_account_branch_code']) && (mb_strlen($this->container['sp_account_branch_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'sp_account_branch_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['sp_account_branch_name']) && (mb_strlen($this->container['sp_account_branch_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'sp_account_branch_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['sp_account_branch_name']) && (mb_strlen($this->container['sp_account_branch_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'sp_account_branch_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sp_account_number']) && (mb_strlen($this->container['sp_account_number']) > 7)) {
            $invalidProperties[] = "invalid value for 'sp_account_number', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['sp_account_number']) && (mb_strlen($this->container['sp_account_number']) < 7)) {
            $invalidProperties[] = "invalid value for 'sp_account_number', the character length must be bigger than or equal to 7.";
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id 口座ID 半角英数字 つかいわけ口座を識別するID
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        if ((mb_strlen($account_id) > 29)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling SpAccount., must be smaller than or equal to 29.');
        }
        if ((mb_strlen($account_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling SpAccount., must be bigger than or equal to 12.');
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets sp_account_type_code
     *
     * @return string
     */
    public function getSpAccountTypeCode()
    {
        return $this->container['sp_account_type_code'];
    }

    /**
     * Sets sp_account_type_code
     *
     * @param string $sp_account_type_code つかいわけ口座種別コード 半角数字 ・1=親口座 ・2=子口座
     *
     * @return $this
     */
    public function setSpAccountTypeCode($sp_account_type_code)
    {
        if ((mb_strlen($sp_account_type_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_type_code when calling SpAccount., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($sp_account_type_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_type_code when calling SpAccount., must be bigger than or equal to 1.');
        }

        $this->container['sp_account_type_code'] = $sp_account_type_code;

        return $this;
    }

    /**
     * Gets sp_account_type_code_name
     *
     * @return string
     */
    public function getSpAccountTypeCodeName()
    {
        return $this->container['sp_account_type_code_name'];
    }

    /**
     * Sets sp_account_type_code_name
     *
     * @param string $sp_account_type_code_name つかいわけ口座種別コード名称 全角文字 つかいわけ口座種別コードの名称
     *
     * @return $this
     */
    public function setSpAccountTypeCodeName($sp_account_type_code_name)
    {
        if ((mb_strlen($sp_account_type_code_name) > 3)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_type_code_name when calling SpAccount., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($sp_account_type_code_name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_type_code_name when calling SpAccount., must be bigger than or equal to 3.');
        }

        $this->container['sp_account_type_code_name'] = $sp_account_type_code_name;

        return $this;
    }

    /**
     * Gets sp_account_name
     *
     * @return string
     */
    public function getSpAccountName()
    {
        return $this->container['sp_account_name'];
    }

    /**
     * Sets sp_account_name
     *
     * @param string $sp_account_name つかいわけ口座名 全半角英数記号文字
     *
     * @return $this
     */
    public function setSpAccountName($sp_account_name)
    {
        if ((mb_strlen($sp_account_name) > 10)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_name when calling SpAccount., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($sp_account_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_name when calling SpAccount., must be bigger than or equal to 1.');
        }

        $this->container['sp_account_name'] = $sp_account_name;

        return $this;
    }

    /**
     * Gets sp_account_branch_code
     *
     * @return string
     */
    public function getSpAccountBranchCode()
    {
        return $this->container['sp_account_branch_code'];
    }

    /**
     * Sets sp_account_branch_code
     *
     * @param string $sp_account_branch_code 支店コード 半角数字 つかいわけ口座種別コードが「2=子口座」の場合のみ設定 該当しない場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setSpAccountBranchCode($sp_account_branch_code)
    {
        if (!is_null($sp_account_branch_code) && (mb_strlen($sp_account_branch_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_branch_code when calling SpAccount., must be smaller than or equal to 3.');
        }
        if (!is_null($sp_account_branch_code) && (mb_strlen($sp_account_branch_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_branch_code when calling SpAccount., must be bigger than or equal to 3.');
        }

        $this->container['sp_account_branch_code'] = $sp_account_branch_code;

        return $this;
    }

    /**
     * Gets sp_account_branch_name
     *
     * @return string
     */
    public function getSpAccountBranchName()
    {
        return $this->container['sp_account_branch_name'];
    }

    /**
     * Sets sp_account_branch_name
     *
     * @param string $sp_account_branch_name 支店名 全角文字 つかいわけ口座種別コードが「2=子口座」の場合のみ設定 該当しない場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setSpAccountBranchName($sp_account_branch_name)
    {
        if (!is_null($sp_account_branch_name) && (mb_strlen($sp_account_branch_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_branch_name when calling SpAccount., must be smaller than or equal to 30.');
        }
        if (!is_null($sp_account_branch_name) && (mb_strlen($sp_account_branch_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_branch_name when calling SpAccount., must be bigger than or equal to 1.');
        }

        $this->container['sp_account_branch_name'] = $sp_account_branch_name;

        return $this;
    }

    /**
     * Gets sp_account_number
     *
     * @return string
     */
    public function getSpAccountNumber()
    {
        return $this->container['sp_account_number'];
    }

    /**
     * Sets sp_account_number
     *
     * @param string $sp_account_number 口座番号 半角数字 つかいわけ口座種別コードが「2=子口座」の場合のみ設定 該当しない場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setSpAccountNumber($sp_account_number)
    {
        if (!is_null($sp_account_number) && (mb_strlen($sp_account_number) > 7)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_number when calling SpAccount., must be smaller than or equal to 7.');
        }
        if (!is_null($sp_account_number) && (mb_strlen($sp_account_number) < 7)) {
            throw new \InvalidArgumentException('invalid length for $sp_account_number when calling SpAccount., must be bigger than or equal to 7.');
        }

        $this->container['sp_account_number'] = $sp_account_number;

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


