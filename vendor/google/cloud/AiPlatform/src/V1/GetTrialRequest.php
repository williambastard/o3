<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vizier_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [VizierService.GetTrial][google.cloud.aiplatform.v1.VizierService.GetTrial].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetTrialRequest</code>
 */
class GetTrialRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Trial resource.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Trial resource.
     *           Format:
     *           `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VizierService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Trial resource.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Trial resource.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

