<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/common.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use UnexpectedValueException;

/**
 * Indicates the dialect type of a database.
 *
 * Protobuf type <code>google.spanner.admin.database.v1.DatabaseDialect</code>
 */
class DatabaseDialect
{
    /**
     * Default value. This value will create a database with the
     * GOOGLE_STANDARD_SQL dialect.
     *
     * Generated from protobuf enum <code>DATABASE_DIALECT_UNSPECIFIED = 0;</code>
     */
    const DATABASE_DIALECT_UNSPECIFIED = 0;
    /**
     * Google standard SQL.
     *
     * Generated from protobuf enum <code>GOOGLE_STANDARD_SQL = 1;</code>
     */
    const GOOGLE_STANDARD_SQL = 1;
    /**
     * PostgreSQL supported SQL.
     *
     * Generated from protobuf enum <code>POSTGRESQL = 2;</code>
     */
    const POSTGRESQL = 2;

    private static $valueToName = [
        self::DATABASE_DIALECT_UNSPECIFIED => 'DATABASE_DIALECT_UNSPECIFIED',
        self::GOOGLE_STANDARD_SQL => 'GOOGLE_STANDARD_SQL',
        self::POSTGRESQL => 'POSTGRESQL',
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
