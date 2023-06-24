<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [FeaturestoreService.CreateFeature][google.cloud.aiplatform.v1.FeaturestoreService.CreateFeature].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateFeatureRequest</code>
 */
class CreateFeatureRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the EntityType to create a Feature.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The Feature to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Feature feature = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $feature = null;
    /**
     * Required. The ID to use for the Feature, which will become the final component of
     * the Feature's resource name.
     * This value may be up to 128 characters, and valid characters are
     * `[a-z0-9_]`. The first character cannot be a number.
     * The value must be unique within an EntityType.
     *
     * Generated from protobuf field <code>string feature_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $feature_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the EntityType to create a Feature.
     *           Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *     @type \Google\Cloud\AIPlatform\V1\Feature $feature
     *           Required. The Feature to create.
     *     @type string $feature_id
     *           Required. The ID to use for the Feature, which will become the final component of
     *           the Feature's resource name.
     *           This value may be up to 128 characters, and valid characters are
     *           `[a-z0-9_]`. The first character cannot be a number.
     *           The value must be unique within an EntityType.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the EntityType to create a Feature.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the EntityType to create a Feature.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The Feature to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Feature feature = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Feature|null
     */
    public function getFeature()
    {
        return $this->feature;
    }

    public function hasFeature()
    {
        return isset($this->feature);
    }

    public function clearFeature()
    {
        unset($this->feature);
    }

    /**
     * Required. The Feature to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Feature feature = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Feature $var
     * @return $this
     */
    public function setFeature($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Feature::class);
        $this->feature = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the Feature, which will become the final component of
     * the Feature's resource name.
     * This value may be up to 128 characters, and valid characters are
     * `[a-z0-9_]`. The first character cannot be a number.
     * The value must be unique within an EntityType.
     *
     * Generated from protobuf field <code>string feature_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFeatureId()
    {
        return $this->feature_id;
    }

    /**
     * Required. The ID to use for the Feature, which will become the final component of
     * the Feature's resource name.
     * This value may be up to 128 characters, and valid characters are
     * `[a-z0-9_]`. The first character cannot be a number.
     * The value must be unique within an EntityType.
     *
     * Generated from protobuf field <code>string feature_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFeatureId($var)
    {
        GPBUtil::checkString($var, True);
        $this->feature_id = $var;

        return $this;
    }

}

