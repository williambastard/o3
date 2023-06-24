<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A closed time interval. It extends from the start time to the end time, and includes both: `[startTime, endTime]`. Valid time intervals depend on the [`MetricKind`](https://cloud.google.com/monitoring/api/ref_v3/rest/v3/projects.metricDescriptors#MetricKind) of the metric value. The end time must not be earlier than the start time. When writing data points, the start time must not be more than 25 hours in the past and the end time must not be more than five minutes in the future.
 * * For `GAUGE` metrics, the `startTime` value is technically optional; if
 *   no value is specified, the start time defaults to the value of the
 *   end time, and the interval represents a single point in time. If both
 *   start and end times are specified, they must be identical. Such an
 *   interval is valid only for `GAUGE` metrics, which are point-in-time
 *   measurements. The end time of a new interval must be at least a
 *   millisecond after the end time of the previous interval.
 * * For `DELTA` metrics, the start time and end time must specify a
 *   non-zero interval, with subsequent points specifying contiguous and
 *   non-overlapping intervals. For `DELTA` metrics, the start time of
 *   the next interval must be at least a millisecond after the end time
 *   of the previous interval.
 * * For `CUMULATIVE` metrics, the start time and end time must specify a
 *   non-zero interval, with subsequent points specifying the same
 *   start time and increasing end times, until an event resets the
 *   cumulative value to zero and sets a new start time for the following
 *   points. The new start time must be at least a millisecond after the
 *   end time of the previous interval.
 * * The start time of a new interval must be at least a millisecond after the
 *   end time of the previous interval because intervals are closed. If the
 *   start time of a new interval is the same as the end time of the previous
 *   interval, then data written at the new start time could overwrite data
 *   written at the previous end time.
 *
 * Generated from protobuf message <code>google.monitoring.v3.TimeInterval</code>
 */
class TimeInterval extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The end of the time interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * Optional. The beginning of the time interval.  The default value
     * for the start time is the end time. The start time must not be
     * later than the end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Required. The end of the time interval.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Optional. The beginning of the time interval.  The default value
     *           for the start time is the end time. The start time must not be
     *           later than the end time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The end of the time interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Required. The end of the time interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Optional. The beginning of the time interval.  The default value
     * for the start time is the end time. The start time must not be
     * later than the end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Optional. The beginning of the time interval.  The default value
     * for the start time is the end time. The start time must not be
     * later than the end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

}
