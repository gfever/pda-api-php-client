<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/balance.proto

namespace PdaApi\PhpClient\Balance;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PdaApi.PhpClient.Balance.Balance</code>
 */
class Balance extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>.PdaApi.PhpClient.Balance.Properties properties = 2;</code>
     */
    private $properties = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \PdaApi\PhpClient\Balance\Properties $properties
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Protos\Balance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, true);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PdaApi.PhpClient.Balance.Properties properties = 2;</code>
     * @return \PdaApi\PhpClient\Balance\Properties
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Generated from protobuf field <code>.PdaApi.PhpClient.Balance.Properties properties = 2;</code>
     * @param \PdaApi\PhpClient\Balance\Properties $var
     * @return $this
     */
    public function setProperties($var)
    {
        GPBUtil::checkMessage($var, \PdaApi\PhpClient\Balance\Properties::class);
        $this->properties = $var;

        return $this;
    }
}
