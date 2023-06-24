<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to generate a report.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.RunReportRequest</code>
 */
class RunReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Within a batch request, this property should either be unspecified or
     * consistent with the batch-level property.
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
     */
    private $property = '';
    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     */
    private $dimensions;
    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     */
    private $metrics;
    /**
     * Date ranges of data to read. If multiple date ranges are requested, each
     * response row will contain a zero based date range index. If two date
     * ranges overlap, the event data for the overlapping days is included in the
     * response rows for both date ranges. In a cohort request, this `dateRanges`
     * must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.DateRange date_ranges = 4;</code>
     */
    private $date_ranges;
    /**
     * Dimension filters allow you to ask for only specific dimension values in
     * the report. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 5;</code>
     */
    private $dimension_filter = null;
    /**
     * The filter clause of metrics. Applied after aggregating the report's rows,
     * similar to SQL having-clause. Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 6;</code>
     */
    private $metric_filter = null;
    /**
     * The row count of the start row. The first row is counted as row 0.
     * When paging, the first request does not specify offset; or equivalently,
     * sets offset to 0; the first request returns the first `limit` of rows. The
     * second request sets offset to the `limit` of the first request; the second
     * request returns the second `limit` of rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 7;</code>
     */
    private $offset = 0;
    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 100,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `limit` to a higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     */
    private $limit = 0;
    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 9;</code>
     */
    private $metric_aggregations;
    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 10;</code>
     */
    private $order_bys;
    /**
     * A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the property's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11;</code>
     */
    private $currency_code = '';
    /**
     * Cohort group associated with this request. If there is a cohort group
     * in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortSpec cohort_spec = 12;</code>
     */
    private $cohort_spec = null;
    /**
     * If false or unspecified, each row with all metrics equal to 0 will not be
     * returned. If true, these rows will be returned if they are not separately
     * removed by a filter.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13;</code>
     */
    private $keep_empty_rows = false;
    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 14;</code>
     */
    private $return_property_quota = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           A Google Analytics GA4 property identifier whose events are tracked.
     *           Specified in the URL path and not the body. To learn more, see [where to
     *           find your Property
     *           ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     *           Within a batch request, this property should either be unspecified or
     *           consistent with the batch-level property.
     *           Example: properties/1234
     *     @type array<\Google\Analytics\Data\V1beta\Dimension>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           The dimensions requested and displayed.
     *     @type array<\Google\Analytics\Data\V1beta\Metric>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           The metrics requested and displayed.
     *     @type array<\Google\Analytics\Data\V1beta\DateRange>|\Google\Protobuf\Internal\RepeatedField $date_ranges
     *           Date ranges of data to read. If multiple date ranges are requested, each
     *           response row will contain a zero based date range index. If two date
     *           ranges overlap, the event data for the overlapping days is included in the
     *           response rows for both date ranges. In a cohort request, this `dateRanges`
     *           must be unspecified.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $dimension_filter
     *           Dimension filters allow you to ask for only specific dimension values in
     *           the report. To learn more, see [Fundamentals of Dimension
     *           Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     *           for examples. Metrics cannot be used in this filter.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $metric_filter
     *           The filter clause of metrics. Applied after aggregating the report's rows,
     *           similar to SQL having-clause. Dimensions cannot be used in this filter.
     *     @type int|string $offset
     *           The row count of the start row. The first row is counted as row 0.
     *           When paging, the first request does not specify offset; or equivalently,
     *           sets offset to 0; the first request returns the first `limit` of rows. The
     *           second request sets offset to the `limit` of the first request; the second
     *           request returns the second `limit` of rows.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type int|string $limit
     *           The number of rows to return. If unspecified, 10,000 rows are returned. The
     *           API returns a maximum of 100,000 rows per request, no matter how many you
     *           ask for. `limit` must be positive.
     *           The API can also return fewer rows than the requested `limit`, if there
     *           aren't as many dimension values as the `limit`. For instance, there are
     *           fewer than 300 possible values for the dimension `country`, so when
     *           reporting on only `country`, you can't get more than 300 rows, even if you
     *           set `limit` to a higher value.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $metric_aggregations
     *           Aggregation of metrics. Aggregated metric values will be shown in rows
     *           where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *     @type array<\Google\Analytics\Data\V1beta\OrderBy>|\Google\Protobuf\Internal\RepeatedField $order_bys
     *           Specifies how rows are ordered in the response.
     *     @type string $currency_code
     *           A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     *           If the field is empty, the report uses the property's default currency.
     *     @type \Google\Analytics\Data\V1beta\CohortSpec $cohort_spec
     *           Cohort group associated with this request. If there is a cohort group
     *           in the request the 'cohort' dimension must be present.
     *     @type bool $keep_empty_rows
     *           If false or unspecified, each row with all metrics equal to 0 will not be
     *           returned. If true, these rows will be returned if they are not separately
     *           removed by a filter.
     *     @type bool $return_property_quota
     *           Toggles whether to return the current state of this Analytics Property's
     *           quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Within a batch request, this property should either be unspecified or
     * consistent with the batch-level property.
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Within a batch request, this property should either be unspecified or
     * consistent with the batch-level property.
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;

        return $this;
    }

    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     * @param array<\Google\Analytics\Data\V1beta\Dimension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\Dimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     * @param array<\Google\Analytics\Data\V1beta\Metric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Date ranges of data to read. If multiple date ranges are requested, each
     * response row will contain a zero based date range index. If two date
     * ranges overlap, the event data for the overlapping days is included in the
     * response rows for both date ranges. In a cohort request, this `dateRanges`
     * must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.DateRange date_ranges = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDateRanges()
    {
        return $this->date_ranges;
    }

    /**
     * Date ranges of data to read. If multiple date ranges are requested, each
     * response row will contain a zero based date range index. If two date
     * ranges overlap, the event data for the overlapping days is included in the
     * response rows for both date ranges. In a cohort request, this `dateRanges`
     * must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.DateRange date_ranges = 4;</code>
     * @param array<\Google\Analytics\Data\V1beta\DateRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDateRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\DateRange::class);
        $this->date_ranges = $arr;

        return $this;
    }

    /**
     * Dimension filters allow you to ask for only specific dimension values in
     * the report. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 5;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getDimensionFilter()
    {
        return $this->dimension_filter;
    }

    public function hasDimensionFilter()
    {
        return isset($this->dimension_filter);
    }

    public function clearDimensionFilter()
    {
        unset($this->dimension_filter);
    }

    /**
     * Dimension filters allow you to ask for only specific dimension values in
     * the report. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 5;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setDimensionFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->dimension_filter = $var;

        return $this;
    }

    /**
     * The filter clause of metrics. Applied after aggregating the report's rows,
     * similar to SQL having-clause. Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 6;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getMetricFilter()
    {
        return $this->metric_filter;
    }

    public function hasMetricFilter()
    {
        return isset($this->metric_filter);
    }

    public function clearMetricFilter()
    {
        unset($this->metric_filter);
    }

    /**
     * The filter clause of metrics. Applied after aggregating the report's rows,
     * similar to SQL having-clause. Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 6;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setMetricFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->metric_filter = $var;

        return $this;
    }

    /**
     * The row count of the start row. The first row is counted as row 0.
     * When paging, the first request does not specify offset; or equivalently,
     * sets offset to 0; the first request returns the first `limit` of rows. The
     * second request sets offset to the `limit` of the first request; the second
     * request returns the second `limit` of rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 7;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * The row count of the start row. The first row is counted as row 0.
     * When paging, the first request does not specify offset; or equivalently,
     * sets offset to 0; the first request returns the first `limit` of rows. The
     * second request sets offset to the `limit` of the first request; the second
     * request returns the second `limit` of rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 100,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `limit` to a higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 100,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `limit` to a higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricAggregations()
    {
        return $this->metric_aggregations;
    }

    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricAggregations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Analytics\Data\V1beta\MetricAggregation::class);
        $this->metric_aggregations = $arr;

        return $this;
    }

    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBys()
    {
        return $this->order_bys;
    }

    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 10;</code>
     * @param array<\Google\Analytics\Data\V1beta\OrderBy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\OrderBy::class);
        $this->order_bys = $arr;

        return $this;
    }

    /**
     * A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the property's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the property's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Cohort group associated with this request. If there is a cohort group
     * in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortSpec cohort_spec = 12;</code>
     * @return \Google\Analytics\Data\V1beta\CohortSpec|null
     */
    public function getCohortSpec()
    {
        return $this->cohort_spec;
    }

    public function hasCohortSpec()
    {
        return isset($this->cohort_spec);
    }

    public function clearCohortSpec()
    {
        unset($this->cohort_spec);
    }

    /**
     * Cohort group associated with this request. If there is a cohort group
     * in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortSpec cohort_spec = 12;</code>
     * @param \Google\Analytics\Data\V1beta\CohortSpec $var
     * @return $this
     */
    public function setCohortSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\CohortSpec::class);
        $this->cohort_spec = $var;

        return $this;
    }

    /**
     * If false or unspecified, each row with all metrics equal to 0 will not be
     * returned. If true, these rows will be returned if they are not separately
     * removed by a filter.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13;</code>
     * @return bool
     */
    public function getKeepEmptyRows()
    {
        return $this->keep_empty_rows;
    }

    /**
     * If false or unspecified, each row with all metrics equal to 0 will not be
     * returned. If true, these rows will be returned if they are not separately
     * removed by a filter.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setKeepEmptyRows($var)
    {
        GPBUtil::checkBool($var);
        $this->keep_empty_rows = $var;

        return $this;
    }

    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 14;</code>
     * @return bool
     */
    public function getReturnPropertyQuota()
    {
        return $this->return_property_quota;
    }

    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnPropertyQuota($var)
    {
        GPBUtil::checkBool($var);
        $this->return_property_quota = $var;

        return $this;
    }

}

