<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/custom_interest_type.proto

namespace Google\Ads\GoogleAds\V8\Enums\CustomInterestTypeEnum;

use UnexpectedValueException;

/**
 * Enum containing possible custom interest types.
 *
 * Protobuf type <code>google.ads.googleads.v8.enums.CustomInterestTypeEnum.CustomInterestType</code>
 */
class CustomInterestType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Allows brand advertisers to define custom affinity audience lists.
     *
     * Generated from protobuf enum <code>CUSTOM_AFFINITY = 2;</code>
     */
    const CUSTOM_AFFINITY = 2;
    /**
     * Allows advertisers to define custom intent audience lists.
     *
     * Generated from protobuf enum <code>CUSTOM_INTENT = 3;</code>
     */
    const CUSTOM_INTENT = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CUSTOM_AFFINITY => 'CUSTOM_AFFINITY',
        self::CUSTOM_INTENT => 'CUSTOM_INTENT',
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
class_alias(CustomInterestType::class, \Google\Ads\GoogleAds\V8\Enums\CustomInterestTypeEnum_CustomInterestType::class);

