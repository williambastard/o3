<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1\Listing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reference to a shared dataset. It is an existing BigQuery dataset with a
 * collection of objects such as tables and views that you want to share
 * with subscribers.
 * When subscriber's subscribe to a listing, Analytics Hub creates a linked
 * dataset in
 * the subscriber's project. A Linked dataset is an opaque, read-only BigQuery
 * dataset that serves as a _symbolic link_ to a shared dataset.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.Listing.BigQueryDatasetSource</code>
 */
class BigQueryDatasetSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.resource_reference) = {</code>
     */
    private $dataset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Resource name of the dataset source for this listing.
     *           e.g. `projects/myproject/datasets/123`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigQueryDatasetSource::class, \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing_BigQueryDatasetSource::class);

