<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2\Condition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query terms that we want to match on.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Condition.QueryTerm</code>
 */
class QueryTerm extends \Google\Protobuf\Internal\Message
{
    /**
     * The value of the term to match on.
     * Value cannot be empty.
     * Value can have at most 3 terms if specified as a partial match. Each
     * space separated string is considered as one term.
     * Example) "a b c" is 3 terms and allowed, " a b c d" is 4 terms and not
     * allowed for partial match.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    private $value = '';
    /**
     * Whether this is supposed to be a full or partial match.
     *
     * Generated from protobuf field <code>bool full_match = 2;</code>
     */
    private $full_match = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The value of the term to match on.
     *           Value cannot be empty.
     *           Value can have at most 3 terms if specified as a partial match. Each
     *           space separated string is considered as one term.
     *           Example) "a b c" is 3 terms and allowed, " a b c d" is 4 terms and not
     *           allowed for partial match.
     *     @type bool $full_match
     *           Whether this is supposed to be a full or partial match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The value of the term to match on.
     * Value cannot be empty.
     * Value can have at most 3 terms if specified as a partial match. Each
     * space separated string is considered as one term.
     * Example) "a b c" is 3 terms and allowed, " a b c d" is 4 terms and not
     * allowed for partial match.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value of the term to match on.
     * Value cannot be empty.
     * Value can have at most 3 terms if specified as a partial match. Each
     * space separated string is considered as one term.
     * Example) "a b c" is 3 terms and allowed, " a b c d" is 4 terms and not
     * allowed for partial match.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Whether this is supposed to be a full or partial match.
     *
     * Generated from protobuf field <code>bool full_match = 2;</code>
     * @return bool
     */
    public function getFullMatch()
    {
        return $this->full_match;
    }

    /**
     * Whether this is supposed to be a full or partial match.
     *
     * Generated from protobuf field <code>bool full_match = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setFullMatch($var)
    {
        GPBUtil::checkBool($var);
        $this->full_match = $var;

        return $this;
    }

}


