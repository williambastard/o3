<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1\BigQueryDestinationConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Destination datasets are created so that hierarchy of the destination data
 * objects matches the source hierarchy.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.BigQueryDestinationConfig.SourceHierarchyDatasets</code>
 */
class SourceHierarchyDatasets extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.datastream.v1.BigQueryDestinationConfig.SourceHierarchyDatasets.DatasetTemplate dataset_template = 2;</code>
     */
    private $dataset_template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastream\V1\BigQueryDestinationConfig\SourceHierarchyDatasets\DatasetTemplate $dataset_template
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datastream.v1.BigQueryDestinationConfig.SourceHierarchyDatasets.DatasetTemplate dataset_template = 2;</code>
     * @return \Google\Cloud\Datastream\V1\BigQueryDestinationConfig\SourceHierarchyDatasets\DatasetTemplate|null
     */
    public function getDatasetTemplate()
    {
        return $this->dataset_template;
    }

    public function hasDatasetTemplate()
    {
        return isset($this->dataset_template);
    }

    public function clearDatasetTemplate()
    {
        unset($this->dataset_template);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datastream.v1.BigQueryDestinationConfig.SourceHierarchyDatasets.DatasetTemplate dataset_template = 2;</code>
     * @param \Google\Cloud\Datastream\V1\BigQueryDestinationConfig\SourceHierarchyDatasets\DatasetTemplate $var
     * @return $this
     */
    public function setDatasetTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\BigQueryDestinationConfig\SourceHierarchyDatasets\DatasetTemplate::class);
        $this->dataset_template = $var;

        return $this;
    }

}

