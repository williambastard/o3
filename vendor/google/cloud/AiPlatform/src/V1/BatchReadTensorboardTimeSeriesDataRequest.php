<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [TensorboardService.BatchReadTensorboardTimeSeriesData][google.cloud.aiplatform.v1.TensorboardService.BatchReadTensorboardTimeSeriesData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchReadTensorboardTimeSeriesDataRequest</code>
 */
class BatchReadTensorboardTimeSeriesDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Tensorboard containing TensorboardTimeSeries to
     * read data from. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`.
     * The TensorboardTimeSeries referenced by [time_series][google.cloud.aiplatform.v1.BatchReadTensorboardTimeSeriesDataRequest.time_series] must be sub
     * resources of this Tensorboard.
     *
     * Generated from protobuf field <code>string tensorboard = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $tensorboard = '';
    /**
     * Required. The resource names of the TensorboardTimeSeries to read data from. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>repeated string time_series = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $time_series;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tensorboard
     *           Required. The resource name of the Tensorboard containing TensorboardTimeSeries to
     *           read data from. Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}`.
     *           The TensorboardTimeSeries referenced by [time_series][google.cloud.aiplatform.v1.BatchReadTensorboardTimeSeriesDataRequest.time_series] must be sub
     *           resources of this Tensorboard.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $time_series
     *           Required. The resource names of the TensorboardTimeSeries to read data from. Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Tensorboard containing TensorboardTimeSeries to
     * read data from. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`.
     * The TensorboardTimeSeries referenced by [time_series][google.cloud.aiplatform.v1.BatchReadTensorboardTimeSeriesDataRequest.time_series] must be sub
     * resources of this Tensorboard.
     *
     * Generated from protobuf field <code>string tensorboard = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTensorboard()
    {
        return $this->tensorboard;
    }

    /**
     * Required. The resource name of the Tensorboard containing TensorboardTimeSeries to
     * read data from. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`.
     * The TensorboardTimeSeries referenced by [time_series][google.cloud.aiplatform.v1.BatchReadTensorboardTimeSeriesDataRequest.time_series] must be sub
     * resources of this Tensorboard.
     *
     * Generated from protobuf field <code>string tensorboard = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTensorboard($var)
    {
        GPBUtil::checkString($var, True);
        $this->tensorboard = $var;

        return $this;
    }

    /**
     * Required. The resource names of the TensorboardTimeSeries to read data from. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>repeated string time_series = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimeSeries()
    {
        return $this->time_series;
    }

    /**
     * Required. The resource names of the TensorboardTimeSeries to read data from. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>repeated string time_series = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimeSeries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->time_series = $arr;

        return $this;
    }

}

