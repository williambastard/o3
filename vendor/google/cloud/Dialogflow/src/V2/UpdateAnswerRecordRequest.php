<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/answer_record.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AnswerRecords.UpdateAnswerRecord][google.cloud.dialogflow.v2.AnswerRecords.UpdateAnswerRecord].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateAnswerRecordRequest</code>
 */
class UpdateAnswerRecordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Answer record to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AnswerRecord answer_record = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $answer_record = null;
    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\AnswerRecord $answer_record
     *           Required. Answer record to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The mask to control which fields get updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AnswerRecord::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Answer record to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AnswerRecord answer_record = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\AnswerRecord|null
     */
    public function getAnswerRecord()
    {
        return $this->answer_record;
    }

    public function hasAnswerRecord()
    {
        return isset($this->answer_record);
    }

    public function clearAnswerRecord()
    {
        unset($this->answer_record);
    }

    /**
     * Required. Answer record to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AnswerRecord answer_record = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\AnswerRecord $var
     * @return $this
     */
    public function setAnswerRecord($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\AnswerRecord::class);
        $this->answer_record = $var;

        return $this;
    }

    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

