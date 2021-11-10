<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/keyword_plan_ad_group_keyword.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class KeywordPlanAdGroupKeyword
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v8/enums/keyword_match_type.protogoogle.ads.googleads.v8.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
!com.google.ads.googleads.v8.enumsBKeywordMatchTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Egoogle/ads/googleads/v8/resources/keyword_plan_ad_group_keyword.proto!google.ads.googleads.v8.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
KeywordPlanAdGroupKeywordQ
resource_name (	B:�A�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeywordT
keyword_plan_ad_group (	B0�A-
+googleads.googleapis.com/KeywordPlanAdGroupH �
id	 (B�AH�
text
 (	H�X

match_type (2D.google.ads.googleads.v8.enums.KeywordMatchTypeEnum.KeywordMatchType
cpc_bid_micros (H�
negative (B�AH�:��A�
2googleads.googleapis.com/KeywordPlanAdGroupKeywordUcustomers/{customer_id}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword_id}B
_keyword_plan_ad_groupB
_idB
_textB
_cpc_bid_microsB
	_negativeB�
%com.google.ads.googleads.v8.resourcesBKeywordPlanAdGroupKeywordProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

