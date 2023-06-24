<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_models.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Artifacts of resources. Artifacts are unique (single-value) per resource
 * and are used to store metadata that is too large or numerous to be stored
 * directly on the resource. Since artifacts are stored separately from parent
 * resources, they should generally be used for metadata that is needed
 * infrequently, i.e., not for display in primary views of the resource but
 * perhaps displayed or downloaded upon request. The `ListArtifacts` method
 * allows artifacts to be quickly enumerated and checked for presence without
 * downloading their (potentially-large) contents.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.Artifact</code>
 */
class Artifact extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * A content type specifier for the artifact.
     * Content type specifiers are Media Types
     * (https://en.wikipedia.org/wiki/Media_type) with a possible "schema"
     * parameter that specifies a schema for the stored information.
     * Content types can specify compression. Currently only GZip compression is
     * supported (indicated with "+gzip").
     *
     * Generated from protobuf field <code>string mime_type = 4;</code>
     */
    private $mime_type = '';
    /**
     * Output only. The size of the artifact in bytes. If the artifact is gzipped, this is
     * the size of the uncompressed artifact.
     *
     * Generated from protobuf field <code>int32 size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $size_bytes = 0;
    /**
     * Output only. A SHA-256 hash of the artifact's contents. If the artifact is gzipped,
     * this is the hash of the uncompressed artifact.
     *
     * Generated from protobuf field <code>string hash = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $hash = '';
    /**
     * Input only. The contents of the artifact.
     * Provided by API callers when artifacts are created or replaced.
     * To access the contents of an artifact, use GetArtifactContents.
     *
     * Generated from protobuf field <code>bytes contents = 7 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $contents = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation timestamp.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Last update timestamp.
     *     @type string $mime_type
     *           A content type specifier for the artifact.
     *           Content type specifiers are Media Types
     *           (https://en.wikipedia.org/wiki/Media_type) with a possible "schema"
     *           parameter that specifies a schema for the stored information.
     *           Content types can specify compression. Currently only GZip compression is
     *           supported (indicated with "+gzip").
     *     @type int $size_bytes
     *           Output only. The size of the artifact in bytes. If the artifact is gzipped, this is
     *           the size of the uncompressed artifact.
     *     @type string $hash
     *           Output only. A SHA-256 hash of the artifact's contents. If the artifact is gzipped,
     *           this is the hash of the uncompressed artifact.
     *     @type string $contents
     *           Input only. The contents of the artifact.
     *           Provided by API callers when artifacts are created or replaced.
     *           To access the contents of an artifact, use GetArtifactContents.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryModels::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * A content type specifier for the artifact.
     * Content type specifiers are Media Types
     * (https://en.wikipedia.org/wiki/Media_type) with a possible "schema"
     * parameter that specifies a schema for the stored information.
     * Content types can specify compression. Currently only GZip compression is
     * supported (indicated with "+gzip").
     *
     * Generated from protobuf field <code>string mime_type = 4;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * A content type specifier for the artifact.
     * Content type specifiers are Media Types
     * (https://en.wikipedia.org/wiki/Media_type) with a possible "schema"
     * parameter that specifies a schema for the stored information.
     * Content types can specify compression. Currently only GZip compression is
     * supported (indicated with "+gzip").
     *
     * Generated from protobuf field <code>string mime_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Output only. The size of the artifact in bytes. If the artifact is gzipped, this is
     * the size of the uncompressed artifact.
     *
     * Generated from protobuf field <code>int32 size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSizeBytes()
    {
        return $this->size_bytes;
    }

    /**
     * Output only. The size of the artifact in bytes. If the artifact is gzipped, this is
     * the size of the uncompressed artifact.
     *
     * Generated from protobuf field <code>int32 size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt32($var);
        $this->size_bytes = $var;

        return $this;
    }

    /**
     * Output only. A SHA-256 hash of the artifact's contents. If the artifact is gzipped,
     * this is the hash of the uncompressed artifact.
     *
     * Generated from protobuf field <code>string hash = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Output only. A SHA-256 hash of the artifact's contents. If the artifact is gzipped,
     * this is the hash of the uncompressed artifact.
     *
     * Generated from protobuf field <code>string hash = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->hash = $var;

        return $this;
    }

    /**
     * Input only. The contents of the artifact.
     * Provided by API callers when artifacts are created or replaced.
     * To access the contents of an artifact, use GetArtifactContents.
     *
     * Generated from protobuf field <code>bytes contents = 7 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Input only. The contents of the artifact.
     * Provided by API callers when artifacts are created or replaced.
     * To access the contents of an artifact, use GetArtifactContents.
     *
     * Generated from protobuf field <code>bytes contents = 7 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, False);
        $this->contents = $var;

        return $this;
    }

}

