<?php
/**
 * VaIssueRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/corporation/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/corporation/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
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

namespace Ganb\Corporate\Client\Model;

use \ArrayAccess;
use \Ganb\Corporate\Client\ObjectSerializer;

/**
 * VaIssueRequest Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VaIssueRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VaIssueRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'va_type_code' => 'string',
        'issue_request_count' => 'string',
        'ra_id' => 'string',
        'va_contract_auth_key' => 'string',
        'va_holder_name_kana' => 'string',
        'va_holder_name_pos' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'va_type_code' => null,
        'issue_request_count' => null,
        'ra_id' => null,
        'va_contract_auth_key' => null,
        'va_holder_name_kana' => null,
        'va_holder_name_pos' => null
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
        'va_type_code' => 'vaTypeCode',
        'issue_request_count' => 'issueRequestCount',
        'ra_id' => 'raId',
        'va_contract_auth_key' => 'vaContractAuthKey',
        'va_holder_name_kana' => 'vaHolderNameKana',
        'va_holder_name_pos' => 'vaHolderNamePos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'va_type_code' => 'setVaTypeCode',
        'issue_request_count' => 'setIssueRequestCount',
        'ra_id' => 'setRaId',
        'va_contract_auth_key' => 'setVaContractAuthKey',
        'va_holder_name_kana' => 'setVaHolderNameKana',
        'va_holder_name_pos' => 'setVaHolderNamePos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'va_type_code' => 'getVaTypeCode',
        'issue_request_count' => 'getIssueRequestCount',
        'ra_id' => 'getRaId',
        'va_contract_auth_key' => 'getVaContractAuthKey',
        'va_holder_name_kana' => 'getVaHolderNameKana',
        'va_holder_name_pos' => 'getVaHolderNamePos'
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
        $this->container['va_type_code'] = isset($data['va_type_code']) ? $data['va_type_code'] : null;
        $this->container['issue_request_count'] = isset($data['issue_request_count']) ? $data['issue_request_count'] : null;
        $this->container['ra_id'] = isset($data['ra_id']) ? $data['ra_id'] : null;
        $this->container['va_contract_auth_key'] = isset($data['va_contract_auth_key']) ? $data['va_contract_auth_key'] : null;
        $this->container['va_holder_name_kana'] = isset($data['va_holder_name_kana']) ? $data['va_holder_name_kana'] : null;
        $this->container['va_holder_name_pos'] = isset($data['va_holder_name_pos']) ? $data['va_holder_name_pos'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['va_type_code'] === null) {
            $invalidProperties[] = "'va_type_code' can't be null";
        }
        if ((mb_strlen($this->container['va_type_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'va_type_code', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['va_type_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'va_type_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['issue_request_count'] === null) {
            $invalidProperties[] = "'issue_request_count' can't be null";
        }
        if ((mb_strlen($this->container['issue_request_count']) > 4)) {
            $invalidProperties[] = "invalid value for 'issue_request_count', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['issue_request_count']) < 1)) {
            $invalidProperties[] = "invalid value for 'issue_request_count', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ra_id']) && (mb_strlen($this->container['ra_id']) > 29)) {
            $invalidProperties[] = "invalid value for 'ra_id', the character length must be smaller than or equal to 29.";
        }

        if (!is_null($this->container['ra_id']) && (mb_strlen($this->container['ra_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'ra_id', the character length must be bigger than or equal to 12.";
        }

        if (!is_null($this->container['va_contract_auth_key']) && (mb_strlen($this->container['va_contract_auth_key']) > 400)) {
            $invalidProperties[] = "invalid value for 'va_contract_auth_key', the character length must be smaller than or equal to 400.";
        }

        if (!is_null($this->container['va_contract_auth_key']) && (mb_strlen($this->container['va_contract_auth_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'va_contract_auth_key', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['va_holder_name_kana']) && (mb_strlen($this->container['va_holder_name_kana']) > 40)) {
            $invalidProperties[] = "invalid value for 'va_holder_name_kana', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['va_holder_name_kana']) && (mb_strlen($this->container['va_holder_name_kana']) < 1)) {
            $invalidProperties[] = "invalid value for 'va_holder_name_kana', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['va_holder_name_pos']) && (mb_strlen($this->container['va_holder_name_pos']) > 1)) {
            $invalidProperties[] = "invalid value for 'va_holder_name_pos', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['va_holder_name_pos']) && (mb_strlen($this->container['va_holder_name_pos']) < 1)) {
            $invalidProperties[] = "invalid value for 'va_holder_name_pos', the character length must be bigger than or equal to 1.";
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
     * Gets va_type_code
     *
     * @return string
     */
    public function getVaTypeCode()
    {
        return $this->container['va_type_code'];
    }

    /**
     * Sets va_type_code
     *
     * @param string $va_type_code 振込入金口座　種類コード 半角数字 ・1=期限型 ・2=継続型
     *
     * @return $this
     */
    public function setVaTypeCode($va_type_code)
    {
        if ((mb_strlen($va_type_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $va_type_code when calling VaIssueRequest., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($va_type_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $va_type_code when calling VaIssueRequest., must be bigger than or equal to 1.');
        }

        $this->container['va_type_code'] = $va_type_code;

        return $this;
    }

    /**
     * Gets issue_request_count
     *
     * @return string
     */
    public function getIssueRequestCount()
    {
        return $this->container['issue_request_count'];
    }

    /**
     * Sets issue_request_count
     *
     * @param string $issue_request_count 発行口座数 半角数字 1回のリクエストで1,000口座まで発行可能
     *
     * @return $this
     */
    public function setIssueRequestCount($issue_request_count)
    {
        if ((mb_strlen($issue_request_count) > 4)) {
            throw new \InvalidArgumentException('invalid length for $issue_request_count when calling VaIssueRequest., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($issue_request_count) < 1)) {
            throw new \InvalidArgumentException('invalid length for $issue_request_count when calling VaIssueRequest., must be bigger than or equal to 1.');
        }

        $this->container['issue_request_count'] = $issue_request_count;

        return $this;
    }

    /**
     * Gets ra_id
     *
     * @return string
     */
    public function getRaId()
    {
        return $this->container['ra_id'];
    }

    /**
     * Sets ra_id
     *
     * @param string $ra_id 入金口座ID 半角数字 科目コードが以下の口座IDのみ受け付けます ・01=普通預金（有利息） ・02=普通預金（決済用） 銀行契約の場合は必須
     *
     * @return $this
     */
    public function setRaId($ra_id)
    {
        if (!is_null($ra_id) && (mb_strlen($ra_id) > 29)) {
            throw new \InvalidArgumentException('invalid length for $ra_id when calling VaIssueRequest., must be smaller than or equal to 29.');
        }
        if (!is_null($ra_id) && (mb_strlen($ra_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $ra_id when calling VaIssueRequest., must be bigger than or equal to 12.');
        }

        $this->container['ra_id'] = $ra_id;

        return $this;
    }

    /**
     * Gets va_contract_auth_key
     *
     * @return string
     */
    public function getVaContractAuthKey()
    {
        return $this->container['va_contract_auth_key'];
    }

    /**
     * Sets va_contract_auth_key
     *
     * @param string $va_contract_auth_key 振込入金口座API認証情報 半角英数字 銀行契約の方はNULLを設定 提携企業の方が、契約された顧客の発行を依頼される場合は必須 提携企業以外の方が値を設定されている場合は「400 Bad Request」を返却
     *
     * @return $this
     */
    public function setVaContractAuthKey($va_contract_auth_key)
    {
        if (!is_null($va_contract_auth_key) && (mb_strlen($va_contract_auth_key) > 400)) {
            throw new \InvalidArgumentException('invalid length for $va_contract_auth_key when calling VaIssueRequest., must be smaller than or equal to 400.');
        }
        if (!is_null($va_contract_auth_key) && (mb_strlen($va_contract_auth_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $va_contract_auth_key when calling VaIssueRequest., must be bigger than or equal to 1.');
        }

        $this->container['va_contract_auth_key'] = $va_contract_auth_key;

        return $this;
    }

    /**
     * Gets va_holder_name_kana
     *
     * @return string
     */
    public function getVaHolderNameKana()
    {
        return $this->container['va_holder_name_kana'];
    }

    /**
     * Sets va_holder_name_kana
     *
     * @param string $va_holder_name_kana 追加名義カナ 半角文字 振込入金口座名義（※）に任意の文字を追加する場合は指定してください ※ご登録されている「法人名カナ」  追加名義カナで指定できる文字数 = 40 - 振込入金口座名義の文字数 合計が40文字を超える場合は、追加名義カナの後部から文字が削られます  ・使用可能な記号は「/」、「(」、「)」、「.」、「,」、「-」 ・一部の非許容文字は、許容文字に変換を行います ・濁点、半濁点は１文字として数えます ・追加名義カナを前につける場合、半角スペースは追加名義カナの右側に1文字のみ許容します ・追加名義カナを前につける場合、追加名義カナの左側に半角スペースは許容しません ・追加名義カナを前につける場合、追加名義カナの中に半角の連続スペースは許容しません
     *
     * @return $this
     */
    public function setVaHolderNameKana($va_holder_name_kana)
    {
        if (!is_null($va_holder_name_kana) && (mb_strlen($va_holder_name_kana) > 40)) {
            throw new \InvalidArgumentException('invalid length for $va_holder_name_kana when calling VaIssueRequest., must be smaller than or equal to 40.');
        }
        if (!is_null($va_holder_name_kana) && (mb_strlen($va_holder_name_kana) < 1)) {
            throw new \InvalidArgumentException('invalid length for $va_holder_name_kana when calling VaIssueRequest., must be bigger than or equal to 1.');
        }

        $this->container['va_holder_name_kana'] = $va_holder_name_kana;

        return $this;
    }

    /**
     * Gets va_holder_name_pos
     *
     * @return string
     */
    public function getVaHolderNamePos()
    {
        return $this->container['va_holder_name_pos'];
    }

    /**
     * Sets va_holder_name_pos
     *
     * @param string $va_holder_name_pos 追加名義位置 半角数字 追加名義カナを口座名義の前につけるか後ろにつけるかの指定 ・1=通常（後ろにつける） ・2=前につける 指定が無い場合は後ろにつけます
     *
     * @return $this
     */
    public function setVaHolderNamePos($va_holder_name_pos)
    {
        if (!is_null($va_holder_name_pos) && (mb_strlen($va_holder_name_pos) > 1)) {
            throw new \InvalidArgumentException('invalid length for $va_holder_name_pos when calling VaIssueRequest., must be smaller than or equal to 1.');
        }
        if (!is_null($va_holder_name_pos) && (mb_strlen($va_holder_name_pos) < 1)) {
            throw new \InvalidArgumentException('invalid length for $va_holder_name_pos when calling VaIssueRequest., must be bigger than or equal to 1.');
        }

        $this->container['va_holder_name_pos'] = $va_holder_name_pos;

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


