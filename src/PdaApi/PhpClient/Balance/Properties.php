<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/balance.proto

namespace PdaApi\PhpClient\Balance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PdaApi.PhpClient.Balance.Properties</code>
 */
class Properties extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 currency = 1;</code>
     */
    private $currency = 0;
    /**
     * Generated from protobuf field <code>int32 userId = 2;</code>
     */
    private $userId = 0;
    /**
     * Generated from protobuf field <code>int32 nodeId = 3;</code>
     */
    private $nodeId = 0;
    /**
     * Generated from protobuf field <code>float amount = 4;</code>
     */
    private $amount = 0.0;
    /**
     * Generated from protobuf field <code>bool is_active = 5;</code>
     */
    private $is_active = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $currency
     *     @type int $userId
     *     @type int $nodeId
     *     @type float $amount
     *     @type bool $is_active
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\Balance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 currency = 1;</code>
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Generated from protobuf field <code>int32 currency = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkInt32($var);
        $this->currency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 userId = 2;</code>
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>int32 userId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->userId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 nodeId = 3;</code>
     * @return int
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * Generated from protobuf field <code>int32 nodeId = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkInt32($var);
        $this->nodeId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float amount = 4;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>float amount = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkFloat($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_active = 5;</code>
     * @return bool
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Generated from protobuf field <code>bool is_active = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsActive($var)
    {
        GPBUtil::checkBool($var);
        $this->is_active = $var;

        return $this;
    }

}

