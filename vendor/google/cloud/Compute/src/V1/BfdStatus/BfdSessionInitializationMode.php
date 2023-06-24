<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\BfdStatus;

use UnexpectedValueException;

/**
 * The BFD session initialization mode for this BGP peer. If set to ACTIVE, the Cloud Router will initiate the BFD session for this BGP peer. If set to PASSIVE, the Cloud Router will wait for the peer router to initiate the BFD session for this BGP peer. If set to DISABLED, BFD is disabled for this BGP peer.
 *
 * Protobuf type <code>google.cloud.compute.v1.BfdStatus.BfdSessionInitializationMode</code>
 */
class BfdSessionInitializationMode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_BFD_SESSION_INITIALIZATION_MODE = 0;</code>
     */
    const UNDEFINED_BFD_SESSION_INITIALIZATION_MODE = 0;
    /**
     * Generated from protobuf enum <code>ACTIVE = 314733318;</code>
     */
    const ACTIVE = 314733318;
    /**
     * Generated from protobuf enum <code>DISABLED = 516696700;</code>
     */
    const DISABLED = 516696700;
    /**
     * Generated from protobuf enum <code>PASSIVE = 462813959;</code>
     */
    const PASSIVE = 462813959;

    private static $valueToName = [
        self::UNDEFINED_BFD_SESSION_INITIALIZATION_MODE => 'UNDEFINED_BFD_SESSION_INITIALIZATION_MODE',
        self::ACTIVE => 'ACTIVE',
        self::DISABLED => 'DISABLED',
        self::PASSIVE => 'PASSIVE',
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


