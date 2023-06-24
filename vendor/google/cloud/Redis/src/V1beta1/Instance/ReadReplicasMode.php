<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1beta1/cloud_redis.proto

namespace Google\Cloud\Redis\V1beta1\Instance;

use UnexpectedValueException;

/**
 * Read replicas mode.
 *
 * Protobuf type <code>google.cloud.redis.v1beta1.Instance.ReadReplicasMode</code>
 */
class ReadReplicasMode
{
    /**
     * If not set, Memorystore Redis backend will default to
     * READ_REPLICAS_DISABLED.
     *
     * Generated from protobuf enum <code>READ_REPLICAS_MODE_UNSPECIFIED = 0;</code>
     */
    const READ_REPLICAS_MODE_UNSPECIFIED = 0;
    /**
     * If disabled, read endpoint will not be provided and the instance cannot
     * scale up or down the number of replicas.
     *
     * Generated from protobuf enum <code>READ_REPLICAS_DISABLED = 1;</code>
     */
    const READ_REPLICAS_DISABLED = 1;
    /**
     * If enabled, read endpoint will be provided and the instance can scale
     * up and down the number of replicas. Not valid for basic tier.
     *
     * Generated from protobuf enum <code>READ_REPLICAS_ENABLED = 2;</code>
     */
    const READ_REPLICAS_ENABLED = 2;

    private static $valueToName = [
        self::READ_REPLICAS_MODE_UNSPECIFIED => 'READ_REPLICAS_MODE_UNSPECIFIED',
        self::READ_REPLICAS_DISABLED => 'READ_REPLICAS_DISABLED',
        self::READ_REPLICAS_ENABLED => 'READ_REPLICAS_ENABLED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadReplicasMode::class, \Google\Cloud\Redis\V1beta1\Instance_ReadReplicasMode::class);

