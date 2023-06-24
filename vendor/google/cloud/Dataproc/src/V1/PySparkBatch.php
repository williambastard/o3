<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/batches.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A configuration for running an
 * [Apache
 * PySpark](https://spark.apache.org/docs/latest/api/python/getting_started/quickstart.html)
 * batch workload.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.PySparkBatch</code>
 */
class PySparkBatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The HCFS URI of the main Python file to use as the Spark driver. Must
     * be a .py file.
     *
     * Generated from protobuf field <code>string main_python_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $main_python_file_uri = '';
    /**
     * Optional. The arguments to pass to the driver. Do not include arguments
     * that can be set as batch properties, such as `--conf`, since a collision
     * can occur that causes an incorrect batch submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $args;
    /**
     * Optional. HCFS file URIs of Python files to pass to the PySpark
     * framework. Supported file types: `.py`, `.egg`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string python_file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $python_file_uris;
    /**
     * Optional. HCFS URIs of jar files to add to the classpath of the
     * Spark driver and tasks.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $jar_file_uris;
    /**
     * Optional. HCFS URIs of files to be placed in the working directory of
     * each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $file_uris;
    /**
     * Optional. HCFS URIs of archives to be extracted into the working directory
     * of each executor. Supported file types:
     * `.jar`, `.tar`, `.tar.gz`, `.tgz`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $archive_uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $main_python_file_uri
     *           Required. The HCFS URI of the main Python file to use as the Spark driver. Must
     *           be a .py file.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args
     *           Optional. The arguments to pass to the driver. Do not include arguments
     *           that can be set as batch properties, such as `--conf`, since a collision
     *           can occur that causes an incorrect batch submission.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $python_file_uris
     *           Optional. HCFS file URIs of Python files to pass to the PySpark
     *           framework. Supported file types: `.py`, `.egg`, and `.zip`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $jar_file_uris
     *           Optional. HCFS URIs of jar files to add to the classpath of the
     *           Spark driver and tasks.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $file_uris
     *           Optional. HCFS URIs of files to be placed in the working directory of
     *           each executor.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $archive_uris
     *           Optional. HCFS URIs of archives to be extracted into the working directory
     *           of each executor. Supported file types:
     *           `.jar`, `.tar`, `.tar.gz`, `.tgz`, and `.zip`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Batches::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The HCFS URI of the main Python file to use as the Spark driver. Must
     * be a .py file.
     *
     * Generated from protobuf field <code>string main_python_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMainPythonFileUri()
    {
        return $this->main_python_file_uri;
    }

    /**
     * Required. The HCFS URI of the main Python file to use as the Spark driver. Must
     * be a .py file.
     *
     * Generated from protobuf field <code>string main_python_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMainPythonFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->main_python_file_uri = $var;

        return $this;
    }

    /**
     * Optional. The arguments to pass to the driver. Do not include arguments
     * that can be set as batch properties, such as `--conf`, since a collision
     * can occur that causes an incorrect batch submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Optional. The arguments to pass to the driver. Do not include arguments
     * that can be set as batch properties, such as `--conf`, since a collision
     * can occur that causes an incorrect batch submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * Optional. HCFS file URIs of Python files to pass to the PySpark
     * framework. Supported file types: `.py`, `.egg`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string python_file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPythonFileUris()
    {
        return $this->python_file_uris;
    }

    /**
     * Optional. HCFS file URIs of Python files to pass to the PySpark
     * framework. Supported file types: `.py`, `.egg`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string python_file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPythonFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->python_file_uris = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of jar files to add to the classpath of the
     * Spark driver and tasks.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJarFileUris()
    {
        return $this->jar_file_uris;
    }

    /**
     * Optional. HCFS URIs of jar files to add to the classpath of the
     * Spark driver and tasks.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJarFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->jar_file_uris = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of files to be placed in the working directory of
     * each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileUris()
    {
        return $this->file_uris;
    }

    /**
     * Optional. HCFS URIs of files to be placed in the working directory of
     * each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->file_uris = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of archives to be extracted into the working directory
     * of each executor. Supported file types:
     * `.jar`, `.tar`, `.tar.gz`, `.tgz`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArchiveUris()
    {
        return $this->archive_uris;
    }

    /**
     * Optional. HCFS URIs of archives to be extracted into the working directory
     * of each executor. Supported file types:
     * `.jar`, `.tar`, `.tar.gz`, `.tgz`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArchiveUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->archive_uris = $arr;

        return $this;
    }

}
