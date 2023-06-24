<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/common.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.gaming.v1.OperationStatus</code>
 */
class OperationStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Whether the operation is done or still in progress.
     *
     * Generated from protobuf field <code>bool done = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $done = false;
    /**
     * The error code in case of failures.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.OperationStatus.ErrorCode error_code = 2;</code>
     */
    private $error_code = 0;
    /**
     * The human-readable error message.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     */
    private $error_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $done
     *           Output only. Whether the operation is done or still in progress.
     *     @type int $error_code
     *           The error code in case of failures.
     *     @type string $error_message
     *           The human-readable error message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Whether the operation is done or still in progress.
     *
     * Generated from protobuf field <code>bool done = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Output only. Whether the operation is done or still in progress.
     *
     * Generated from protobuf field <code>bool done = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setDone($var)
    {
        GPBUtil::checkBool($var);
        $this->done = $var;

        return $this;
    }

    /**
     * The error code in case of failures.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.OperationStatus.ErrorCode error_code = 2;</code>
     * @return int
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * The error code in case of failures.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.OperationStatus.ErrorCode error_code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Gaming\V1\OperationStatus\ErrorCode::class);
        $this->error_code = $var;

        return $this;
    }

    /**
     * The human-readable error message.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * The human-readable error message.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

}
