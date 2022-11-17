<?php
/**
 * TransferApplyDetail
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
 * TransferApplyDetail Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Personal\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferApplyDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferApplyDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apply_datetime' => 'string',
        'apply_status' => 'string',
        'apply_user' => 'string',
        'apply_comment' => 'string',
        'approval_user' => 'string',
        'approval_comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'apply_datetime' => null,
        'apply_status' => null,
        'apply_user' => null,
        'apply_comment' => null,
        'approval_user' => null,
        'approval_comment' => null
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
        'apply_datetime' => 'applyDatetime',
        'apply_status' => 'applyStatus',
        'apply_user' => 'applyUser',
        'apply_comment' => 'applyComment',
        'approval_user' => 'approvalUser',
        'approval_comment' => 'approvalComment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apply_datetime' => 'setApplyDatetime',
        'apply_status' => 'setApplyStatus',
        'apply_user' => 'setApplyUser',
        'apply_comment' => 'setApplyComment',
        'approval_user' => 'setApprovalUser',
        'approval_comment' => 'setApprovalComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apply_datetime' => 'getApplyDatetime',
        'apply_status' => 'getApplyStatus',
        'apply_user' => 'getApplyUser',
        'apply_comment' => 'getApplyComment',
        'approval_user' => 'getApprovalUser',
        'approval_comment' => 'getApprovalComment'
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
        $this->container['apply_datetime'] = isset($data['apply_datetime']) ? $data['apply_datetime'] : null;
        $this->container['apply_status'] = isset($data['apply_status']) ? $data['apply_status'] : null;
        $this->container['apply_user'] = isset($data['apply_user']) ? $data['apply_user'] : null;
        $this->container['apply_comment'] = isset($data['apply_comment']) ? $data['apply_comment'] : null;
        $this->container['approval_user'] = isset($data['approval_user']) ? $data['approval_user'] : null;
        $this->container['approval_comment'] = isset($data['approval_comment']) ? $data['approval_comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['apply_datetime']) && (mb_strlen($this->container['apply_datetime']) > 25)) {
            $invalidProperties[] = "invalid value for 'apply_datetime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['apply_datetime']) && (mb_strlen($this->container['apply_datetime']) < 25)) {
            $invalidProperties[] = "invalid value for 'apply_datetime', the character length must be bigger than or equal to 25.";
        }

        if (!is_null($this->container['apply_status']) && (mb_strlen($this->container['apply_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'apply_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['apply_status']) && (mb_strlen($this->container['apply_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'apply_status', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['apply_user']) && (mb_strlen($this->container['apply_user']) > 45)) {
            $invalidProperties[] = "invalid value for 'apply_user', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['apply_user']) && (mb_strlen($this->container['apply_user']) < 1)) {
            $invalidProperties[] = "invalid value for 'apply_user', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['apply_comment']) && (mb_strlen($this->container['apply_comment']) > 20)) {
            $invalidProperties[] = "invalid value for 'apply_comment', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['apply_comment']) && (mb_strlen($this->container['apply_comment']) < 1)) {
            $invalidProperties[] = "invalid value for 'apply_comment', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['approval_user']) && (mb_strlen($this->container['approval_user']) > 45)) {
            $invalidProperties[] = "invalid value for 'approval_user', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['approval_user']) && (mb_strlen($this->container['approval_user']) < 1)) {
            $invalidProperties[] = "invalid value for 'approval_user', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['approval_comment']) && (mb_strlen($this->container['approval_comment']) > 20)) {
            $invalidProperties[] = "invalid value for 'approval_comment', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['approval_comment']) && (mb_strlen($this->container['approval_comment']) < 1)) {
            $invalidProperties[] = "invalid value for 'approval_comment', the character length must be bigger than or equal to 1.";
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
     * Gets apply_datetime
     *
     * @return string
     */
    public function getApplyDatetime()
    {
        return $this->container['apply_datetime'];
    }

    /**
     * Sets apply_datetime
     *
     * @param string $apply_datetime 振込申請受付日時 半角文字 YYYY-MM-DDTHH:MM:SS+09:00形式 この申請の受付日時 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setApplyDatetime($apply_datetime)
    {
        if (!is_null($apply_datetime) && (mb_strlen($apply_datetime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $apply_datetime when calling TransferApplyDetail., must be smaller than or equal to 25.');
        }
        if (!is_null($apply_datetime) && (mb_strlen($apply_datetime) < 25)) {
            throw new \InvalidArgumentException('invalid length for $apply_datetime when calling TransferApplyDetail., must be bigger than or equal to 25.');
        }

        $this->container['apply_datetime'] = $apply_datetime;

        return $this;
    }

    /**
     * Gets apply_status
     *
     * @return string
     */
    public function getApplyStatus()
    {
        return $this->container['apply_status'];
    }

    /**
     * Sets apply_status
     *
     * @param string $apply_status 振込申請ステータス 半角数字 0：未申請、1：申請中、2：差戻、3：取下げ、4：期限切れ、5：承認済、6：承認取消、7：自動承認 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setApplyStatus($apply_status)
    {
        if (!is_null($apply_status) && (mb_strlen($apply_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $apply_status when calling TransferApplyDetail., must be smaller than or equal to 1.');
        }
        if (!is_null($apply_status) && (mb_strlen($apply_status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $apply_status when calling TransferApplyDetail., must be bigger than or equal to 1.');
        }

        $this->container['apply_status'] = $apply_status;

        return $this;
    }

    /**
     * Gets apply_user
     *
     * @return string
     */
    public function getApplyUser()
    {
        return $this->container['apply_user'];
    }

    /**
     * Sets apply_user
     *
     * @param string $apply_user 申請者 全半角文字 申請をしたユーザ名 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setApplyUser($apply_user)
    {
        if (!is_null($apply_user) && (mb_strlen($apply_user) > 45)) {
            throw new \InvalidArgumentException('invalid length for $apply_user when calling TransferApplyDetail., must be smaller than or equal to 45.');
        }
        if (!is_null($apply_user) && (mb_strlen($apply_user) < 1)) {
            throw new \InvalidArgumentException('invalid length for $apply_user when calling TransferApplyDetail., must be bigger than or equal to 1.');
        }

        $this->container['apply_user'] = $apply_user;

        return $this;
    }

    /**
     * Gets apply_comment
     *
     * @return string
     */
    public function getApplyComment()
    {
        return $this->container['apply_comment'];
    }

    /**
     * Sets apply_comment
     *
     * @param string $apply_comment 申請者コメント 全半角文字 申請したユーザのコメント 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setApplyComment($apply_comment)
    {
        if (!is_null($apply_comment) && (mb_strlen($apply_comment) > 20)) {
            throw new \InvalidArgumentException('invalid length for $apply_comment when calling TransferApplyDetail., must be smaller than or equal to 20.');
        }
        if (!is_null($apply_comment) && (mb_strlen($apply_comment) < 1)) {
            throw new \InvalidArgumentException('invalid length for $apply_comment when calling TransferApplyDetail., must be bigger than or equal to 1.');
        }

        $this->container['apply_comment'] = $apply_comment;

        return $this;
    }

    /**
     * Gets approval_user
     *
     * @return string
     */
    public function getApprovalUser()
    {
        return $this->container['approval_user'];
    }

    /**
     * Sets approval_user
     *
     * @param string $approval_user 決裁者 全半角文字 承認をしたユーザ名 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setApprovalUser($approval_user)
    {
        if (!is_null($approval_user) && (mb_strlen($approval_user) > 45)) {
            throw new \InvalidArgumentException('invalid length for $approval_user when calling TransferApplyDetail., must be smaller than or equal to 45.');
        }
        if (!is_null($approval_user) && (mb_strlen($approval_user) < 1)) {
            throw new \InvalidArgumentException('invalid length for $approval_user when calling TransferApplyDetail., must be bigger than or equal to 1.');
        }

        $this->container['approval_user'] = $approval_user;

        return $this;
    }

    /**
     * Gets approval_comment
     *
     * @return string
     */
    public function getApprovalComment()
    {
        return $this->container['approval_comment'];
    }

    /**
     * Sets approval_comment
     *
     * @param string $approval_comment 決裁者コメント 全半角文字 承認をしたユーザのコメント 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setApprovalComment($approval_comment)
    {
        if (!is_null($approval_comment) && (mb_strlen($approval_comment) > 20)) {
            throw new \InvalidArgumentException('invalid length for $approval_comment when calling TransferApplyDetail., must be smaller than or equal to 20.');
        }
        if (!is_null($approval_comment) && (mb_strlen($approval_comment) < 1)) {
            throw new \InvalidArgumentException('invalid length for $approval_comment when calling TransferApplyDetail., must be bigger than or equal to 1.');
        }

        $this->container['approval_comment'] = $approval_comment;

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


