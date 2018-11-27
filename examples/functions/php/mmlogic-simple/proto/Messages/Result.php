<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/protobuf-spec/messages.proto

namespace Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Simple message to return success/failure and error status.
 *
 * Generated from protobuf message <code>messages.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     */
    private $success = false;
    /**
     * Generated from protobuf field <code>string error = 2;</code>
     */
    private $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $success
     *     @type string $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api\ProtobufSpec\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 2;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}
