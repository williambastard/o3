<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/image.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class Image
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Classification::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/cloud/automl/v1/image.protogoogle.cloud.automl.v1+google/cloud/automl/v1/classification.proto"r
"ImageClassificationDatasetMetadataL
classification_type (2*.google.cloud.automl.v1.ClassificationTypeB�A"%
#ImageObjectDetectionDatasetMetadata"�
 ImageClassificationModelMetadata
base_model_id (	B�A*
train_budget_milli_node_hours (B�A(
train_cost_milli_node_hours (B�A
stop_reason (	B�A

model_type (	B�A
node_qps (B�A

node_count (B�A"�
!ImageObjectDetectionModelMetadata

model_type (	B�A

node_count (B�A
node_qps (B�A
stop_reason (	B�A*
train_budget_milli_node_hours (B�A(
train_cost_milli_node_hours (B�A"E
*ImageClassificationModelDeploymentMetadata

node_count (B�A"F
+ImageObjectDetectionModelDeploymentMetadata

node_count (B�AB�
com.google.cloud.automl.v1B
ImageProtoPZ<google.golang.org/genproto/googleapis/cloud/automl/v1;automl�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

