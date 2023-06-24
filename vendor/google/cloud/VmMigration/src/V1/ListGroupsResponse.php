<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for 'ListGroups' request.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.ListGroupsResponse</code>
 */
class ListGroupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The list of groups response.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.Group groups = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $groups;
    /**
     * Output only. A token, which can be sent as `page_token` to retrieve the
     * next page. If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $next_page_token = '';
    /**
     * Output only. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VMMigration\V1\Group>|\Google\Protobuf\Internal\RepeatedField $groups
     *           Output only. The list of groups response.
     *     @type string $next_page_token
     *           Output only. A token, which can be sent as `page_token` to retrieve the
     *           next page. If this field is omitted, there are no subsequent pages.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Output only. Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The list of groups response.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.Group groups = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Output only. The list of groups response.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.Group groups = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\VMMigration\V1\Group>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VMMigration\V1\Group::class);
        $this->groups = $arr;

        return $this;
    }

    /**
     * Output only. A token, which can be sent as `page_token` to retrieve the
     * next page. If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Output only. A token, which can be sent as `page_token` to retrieve the
     * next page. If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Output only. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Output only. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

