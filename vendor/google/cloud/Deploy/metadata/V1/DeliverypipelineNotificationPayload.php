<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/deliverypipeline_notification_payload.proto

namespace GPBMetadata\Google\Cloud\Deploy\V1;

class DeliverypipelineNotificationPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Deploy\V1\LogEnums::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/cloud/deploy/v1/deliverypipeline_notification_payload.protogoogle.cloud.deploy.v1"{
!DeliveryPipelineNotificationEvent
message (	
delivery_pipeline (	*
type (2.google.cloud.deploy.v1.TypeB�
com.google.cloud.deploy.v1B(DeliveryPipelineNotificationPayloadProtoPZ<google.golang.org/genproto/googleapis/cloud/deploy/v1;deploybproto3'
        , true);

        static::$is_initialized = true;
    }
}
