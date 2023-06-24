<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/annotation_payload.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class AnnotationPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Detection::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Tables::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextExtraction::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextSentiment::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Translation::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
4google/cloud/automl/v1beta1/annotation_payload.protogoogle.cloud.automl.v1beta1+google/cloud/automl/v1beta1/detection.proto(google/cloud/automl/v1beta1/tables.proto1google/cloud/automl/v1beta1/text_extraction.proto0google/cloud/automl/v1beta1/text_sentiment.proto-google/cloud/automl/v1beta1/translation.proto"�
AnnotationPayloadI
translation (22.google.cloud.automl.v1beta1.TranslationAnnotationH O
classification (25.google.cloud.automl.v1beta1.ClassificationAnnotationH ]
image_object_detection (2;.google.cloud.automl.v1beta1.ImageObjectDetectionAnnotationH Z
video_classification	 (2:.google.cloud.automl.v1beta1.VideoClassificationAnnotationH [
video_object_tracking (2:.google.cloud.automl.v1beta1.VideoObjectTrackingAnnotationH P
text_extraction (25.google.cloud.automl.v1beta1.TextExtractionAnnotationH N
text_sentiment (24.google.cloud.automl.v1beta1.TextSentimentAnnotationH ?
tables
 (2-.google.cloud.automl.v1beta1.TablesAnnotationH 
annotation_spec_id (	
display_name (	B
detailB�
com.google.cloud.automl.v1beta1PZAgoogle.golang.org/genproto/googleapis/cloud/automl/v1beta1;automl�Google\\Cloud\\AutoMl\\V1beta1�Google::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

