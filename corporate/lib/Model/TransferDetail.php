<?php
/**
 * TransferDetail
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
 * TransferDetail Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transfer_status' => 'string',
        'transfer_status_name' => 'string',
        'transfer_type_name' => 'string',
        'is_fee_free_use' => 'bool',
        'is_fee_point_use' => 'bool',
        'point_name' => 'string',
        'fee_later_payment_flg' => 'bool',
        'transfer_detail_fee' => 'string',
        'total_debit_amount' => 'string',
        'transfer_applies' => '\Ganb\Corporate\Client\Model\TransferApply[]',
        'transfer_accepts' => '\Ganb\Corporate\Client\Model\TransferAccept[]',
        'transfer_responses' => '\Ganb\Corporate\Client\Model\TransferResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transfer_status' => null,
        'transfer_status_name' => null,
        'transfer_type_name' => null,
        'is_fee_free_use' => null,
        'is_fee_point_use' => null,
        'point_name' => null,
        'fee_later_payment_flg' => null,
        'transfer_detail_fee' => null,
        'total_debit_amount' => null,
        'transfer_applies' => null,
        'transfer_accepts' => null,
        'transfer_responses' => null
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
        'transfer_status' => 'transferStatus',
        'transfer_status_name' => 'transferStatusName',
        'transfer_type_name' => 'transferTypeName',
        'is_fee_free_use' => 'isFeeFreeUse',
        'is_fee_point_use' => 'isFeePointUse',
        'point_name' => 'pointName',
        'fee_later_payment_flg' => 'feeLaterPaymentFlg',
        'transfer_detail_fee' => 'transferDetailFee',
        'total_debit_amount' => 'totalDebitAmount',
        'transfer_applies' => 'transferApplies',
        'transfer_accepts' => 'transferAccepts',
        'transfer_responses' => 'transferResponses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transfer_status' => 'setTransferStatus',
        'transfer_status_name' => 'setTransferStatusName',
        'transfer_type_name' => 'setTransferTypeName',
        'is_fee_free_use' => 'setIsFeeFreeUse',
        'is_fee_point_use' => 'setIsFeePointUse',
        'point_name' => 'setPointName',
        'fee_later_payment_flg' => 'setFeeLaterPaymentFlg',
        'transfer_detail_fee' => 'setTransferDetailFee',
        'total_debit_amount' => 'setTotalDebitAmount',
        'transfer_applies' => 'setTransferApplies',
        'transfer_accepts' => 'setTransferAccepts',
        'transfer_responses' => 'setTransferResponses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transfer_status' => 'getTransferStatus',
        'transfer_status_name' => 'getTransferStatusName',
        'transfer_type_name' => 'getTransferTypeName',
        'is_fee_free_use' => 'getIsFeeFreeUse',
        'is_fee_point_use' => 'getIsFeePointUse',
        'point_name' => 'getPointName',
        'fee_later_payment_flg' => 'getFeeLaterPaymentFlg',
        'transfer_detail_fee' => 'getTransferDetailFee',
        'total_debit_amount' => 'getTotalDebitAmount',
        'transfer_applies' => 'getTransferApplies',
        'transfer_accepts' => 'getTransferAccepts',
        'transfer_responses' => 'getTransferResponses'
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
        $this->container['transfer_status'] = isset($data['transfer_status']) ? $data['transfer_status'] : null;
        $this->container['transfer_status_name'] = isset($data['transfer_status_name']) ? $data['transfer_status_name'] : null;
        $this->container['transfer_type_name'] = isset($data['transfer_type_name']) ? $data['transfer_type_name'] : null;
        $this->container['is_fee_free_use'] = isset($data['is_fee_free_use']) ? $data['is_fee_free_use'] : null;
        $this->container['is_fee_point_use'] = isset($data['is_fee_point_use']) ? $data['is_fee_point_use'] : null;
        $this->container['point_name'] = isset($data['point_name']) ? $data['point_name'] : null;
        $this->container['fee_later_payment_flg'] = isset($data['fee_later_payment_flg']) ? $data['fee_later_payment_flg'] : null;
        $this->container['transfer_detail_fee'] = isset($data['transfer_detail_fee']) ? $data['transfer_detail_fee'] : null;
        $this->container['total_debit_amount'] = isset($data['total_debit_amount']) ? $data['total_debit_amount'] : null;
        $this->container['transfer_applies'] = isset($data['transfer_applies']) ? $data['transfer_applies'] : null;
        $this->container['transfer_accepts'] = isset($data['transfer_accepts']) ? $data['transfer_accepts'] : null;
        $this->container['transfer_responses'] = isset($data['transfer_responses']) ? $data['transfer_responses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['transfer_status']) && (mb_strlen($this->container['transfer_status']) > 3)) {
            $invalidProperties[] = "invalid value for 'transfer_status', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['transfer_status']) && (mb_strlen($this->container['transfer_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_status', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['transfer_status_name']) && (mb_strlen($this->container['transfer_status_name']) > 10)) {
            $invalidProperties[] = "invalid value for 'transfer_status_name', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['transfer_status_name']) && (mb_strlen($this->container['transfer_status_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_status_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['transfer_type_name']) && (mb_strlen($this->container['transfer_type_name']) > 6)) {
            $invalidProperties[] = "invalid value for 'transfer_type_name', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['transfer_type_name']) && (mb_strlen($this->container['transfer_type_name']) < 4)) {
            $invalidProperties[] = "invalid value for 'transfer_type_name', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['point_name']) && (mb_strlen($this->container['point_name']) > 32)) {
            $invalidProperties[] = "invalid value for 'point_name', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['point_name']) && (mb_strlen($this->container['point_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'point_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['transfer_detail_fee']) && (mb_strlen($this->container['transfer_detail_fee']) > 20)) {
            $invalidProperties[] = "invalid value for 'transfer_detail_fee', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['transfer_detail_fee']) && (mb_strlen($this->container['transfer_detail_fee']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_detail_fee', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['total_debit_amount']) && (mb_strlen($this->container['total_debit_amount']) > 20)) {
            $invalidProperties[] = "invalid value for 'total_debit_amount', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['total_debit_amount']) && (mb_strlen($this->container['total_debit_amount']) < 1)) {
            $invalidProperties[] = "invalid value for 'total_debit_amount', the character length must be bigger than or equal to 1.";
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
     * Gets transfer_status
     *
     * @return string
     */
    public function getTransferStatus()
    {
        return $this->container['transfer_status'];
    }

    /**
     * Sets transfer_status
     *
     * @param string $transfer_status 振込ステータス 半角数字 2:申請中、3:差戻、4:取下げ、5:期限切れ、8:承認取消/予約取消、 11:予約中、12:手続中、13:リトライ中、 20:手続済、22:資金返却、24:組戻手続中、25:組戻済、26:組戻不成立、 40:手続不成立
     *
     * @return $this
     */
    public function setTransferStatus($transfer_status)
    {
        if (!is_null($transfer_status) && (mb_strlen($transfer_status) > 3)) {
            throw new \InvalidArgumentException('invalid length for $transfer_status when calling TransferDetail., must be smaller than or equal to 3.');
        }
        if (!is_null($transfer_status) && (mb_strlen($transfer_status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transfer_status when calling TransferDetail., must be bigger than or equal to 1.');
        }

        $this->container['transfer_status'] = $transfer_status;

        return $this;
    }

    /**
     * Gets transfer_status_name
     *
     * @return string
     */
    public function getTransferStatusName()
    {
        return $this->container['transfer_status_name'];
    }

    /**
     * Sets transfer_status_name
     *
     * @param string $transfer_status_name 振込ステータス名 全角文字
     *
     * @return $this
     */
    public function setTransferStatusName($transfer_status_name)
    {
        if (!is_null($transfer_status_name) && (mb_strlen($transfer_status_name) > 10)) {
            throw new \InvalidArgumentException('invalid length for $transfer_status_name when calling TransferDetail., must be smaller than or equal to 10.');
        }
        if (!is_null($transfer_status_name) && (mb_strlen($transfer_status_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transfer_status_name when calling TransferDetail., must be bigger than or equal to 1.');
        }

        $this->container['transfer_status_name'] = $transfer_status_name;

        return $this;
    }

    /**
     * Gets transfer_type_name
     *
     * @return string
     */
    public function getTransferTypeName()
    {
        return $this->container['transfer_type_name'];
    }

    /**
     * Sets transfer_type_name
     *
     * @param string $transfer_type_name 種類 全角文字 振込振替　または　定額自動振込　を表示
     *
     * @return $this
     */
    public function setTransferTypeName($transfer_type_name)
    {
        if (!is_null($transfer_type_name) && (mb_strlen($transfer_type_name) > 6)) {
            throw new \InvalidArgumentException('invalid length for $transfer_type_name when calling TransferDetail., must be smaller than or equal to 6.');
        }
        if (!is_null($transfer_type_name) && (mb_strlen($transfer_type_name) < 4)) {
            throw new \InvalidArgumentException('invalid length for $transfer_type_name when calling TransferDetail., must be bigger than or equal to 4.');
        }

        $this->container['transfer_type_name'] = $transfer_type_name;

        return $this;
    }

    /**
     * Gets is_fee_free_use
     *
     * @return bool
     */
    public function getIsFeeFreeUse()
    {
        return $this->container['is_fee_free_use'];
    }

    /**
     * Sets is_fee_free_use
     *
     * @param bool $is_fee_free_use 振込無料回数利用可否 振込利用回数の利用可否（無料回数の利用可否の設定であり、実際の利用有無ではありません）
     *
     * @return $this
     */
    public function setIsFeeFreeUse($is_fee_free_use)
    {
        $this->container['is_fee_free_use'] = $is_fee_free_use;

        return $this;
    }

    /**
     * Gets is_fee_point_use
     *
     * @return bool
     */
    public function getIsFeePointUse()
    {
        return $this->container['is_fee_point_use'];
    }

    /**
     * Sets is_fee_point_use
     *
     * @param bool $is_fee_point_use ポイント利用可否 ポイント会社の利用可否
     *
     * @return $this
     */
    public function setIsFeePointUse($is_fee_point_use)
    {
        $this->container['is_fee_point_use'] = $is_fee_point_use;

        return $this;
    }

    /**
     * Gets point_name
     *
     * @return string
     */
    public function getPointName()
    {
        return $this->container['point_name'];
    }

    /**
     * Sets point_name
     *
     * @param string $point_name ポイント会社名 全角文字 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setPointName($point_name)
    {
        if (!is_null($point_name) && (mb_strlen($point_name) > 32)) {
            throw new \InvalidArgumentException('invalid length for $point_name when calling TransferDetail., must be smaller than or equal to 32.');
        }
        if (!is_null($point_name) && (mb_strlen($point_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $point_name when calling TransferDetail., must be bigger than or equal to 1.');
        }

        $this->container['point_name'] = $point_name;

        return $this;
    }

    /**
     * Gets fee_later_payment_flg
     *
     * @return bool
     */
    public function getFeeLaterPaymentFlg()
    {
        return $this->container['fee_later_payment_flg'];
    }

    /**
     * Sets fee_later_payment_flg
     *
     * @param bool $fee_later_payment_flg 手数料後払区分 「true=後払い」以外の場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setFeeLaterPaymentFlg($fee_later_payment_flg)
    {
        $this->container['fee_later_payment_flg'] = $fee_later_payment_flg;

        return $this;
    }

    /**
     * Gets transfer_detail_fee
     *
     * @return string
     */
    public function getTransferDetailFee()
    {
        return $this->container['transfer_detail_fee'];
    }

    /**
     * Sets transfer_detail_fee
     *
     * @param string $transfer_detail_fee 明細手数料 半角数字 振り込み完了時以外は、予定の手数料
     *
     * @return $this
     */
    public function setTransferDetailFee($transfer_detail_fee)
    {
        if (!is_null($transfer_detail_fee) && (mb_strlen($transfer_detail_fee) > 20)) {
            throw new \InvalidArgumentException('invalid length for $transfer_detail_fee when calling TransferDetail., must be smaller than or equal to 20.');
        }
        if (!is_null($transfer_detail_fee) && (mb_strlen($transfer_detail_fee) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transfer_detail_fee when calling TransferDetail., must be bigger than or equal to 1.');
        }

        $this->container['transfer_detail_fee'] = $transfer_detail_fee;

        return $this;
    }

    /**
     * Gets total_debit_amount
     *
     * @return string
     */
    public function getTotalDebitAmount()
    {
        return $this->container['total_debit_amount'];
    }

    /**
     * Sets total_debit_amount
     *
     * @param string $total_debit_amount 合計出金金額 半角数字 手数料+振込金額　ただし、振込完了時以外は、予定の手数料
     *
     * @return $this
     */
    public function setTotalDebitAmount($total_debit_amount)
    {
        if (!is_null($total_debit_amount) && (mb_strlen($total_debit_amount) > 20)) {
            throw new \InvalidArgumentException('invalid length for $total_debit_amount when calling TransferDetail., must be smaller than or equal to 20.');
        }
        if (!is_null($total_debit_amount) && (mb_strlen($total_debit_amount) < 1)) {
            throw new \InvalidArgumentException('invalid length for $total_debit_amount when calling TransferDetail., must be bigger than or equal to 1.');
        }

        $this->container['total_debit_amount'] = $total_debit_amount;

        return $this;
    }

    /**
     * Gets transfer_applies
     *
     * @return \Ganb\Corporate\Client\Model\TransferApply[]
     */
    public function getTransferApplies()
    {
        return $this->container['transfer_applies'];
    }

    /**
     * Sets transfer_applies
     *
     * @param \Ganb\Corporate\Client\Model\TransferApply[] $transfer_applies 振込申請情報 振込申請情報のリスト
     *
     * @return $this
     */
    public function setTransferApplies($transfer_applies)
    {
        $this->container['transfer_applies'] = $transfer_applies;

        return $this;
    }

    /**
     * Gets transfer_accepts
     *
     * @return \Ganb\Corporate\Client\Model\TransferAccept[]
     */
    public function getTransferAccepts()
    {
        return $this->container['transfer_accepts'];
    }

    /**
     * Sets transfer_accepts
     *
     * @param \Ganb\Corporate\Client\Model\TransferAccept[] $transfer_accepts 振込受付情報 振込受付情報のリスト 該当する情報が無い場合は空のリストを返却
     *
     * @return $this
     */
    public function setTransferAccepts($transfer_accepts)
    {
        $this->container['transfer_accepts'] = $transfer_accepts;

        return $this;
    }

    /**
     * Gets transfer_responses
     *
     * @return \Ganb\Corporate\Client\Model\TransferResponse[]
     */
    public function getTransferResponses()
    {
        return $this->container['transfer_responses'];
    }

    /**
     * Sets transfer_responses
     *
     * @param \Ganb\Corporate\Client\Model\TransferResponse[] $transfer_responses 振込レスポンス情報 振込レスポンス情報のリスト 該当する情報が無い場合は空のリストを返却
     *
     * @return $this
     */
    public function setTransferResponses($transfer_responses)
    {
        $this->container['transfer_responses'] = $transfer_responses;

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


