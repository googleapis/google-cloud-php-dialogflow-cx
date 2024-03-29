<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/webhook.proto

namespace Google\Cloud\Dialogflow\Cx\V3\WebhookResponse\FulfillmentResponse;

use UnexpectedValueException;

/**
 * Defines merge behavior for `messages`.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.WebhookResponse.FulfillmentResponse.MergeBehavior</code>
 */
class MergeBehavior
{
    /**
     * Not specified. `APPEND` will be used.
     *
     * Generated from protobuf enum <code>MERGE_BEHAVIOR_UNSPECIFIED = 0;</code>
     */
    const MERGE_BEHAVIOR_UNSPECIFIED = 0;
    /**
     * `messages` will be appended to the list of messages waiting to be sent
     * to the user.
     *
     * Generated from protobuf enum <code>APPEND = 1;</code>
     */
    const APPEND = 1;
    /**
     * `messages` will replace the list of messages waiting to be sent to the
     * user.
     *
     * Generated from protobuf enum <code>REPLACE = 2;</code>
     */
    const REPLACE = 2;

    private static $valueToName = [
        self::MERGE_BEHAVIOR_UNSPECIFIED => 'MERGE_BEHAVIOR_UNSPECIFIED',
        self::APPEND => 'APPEND',
        self::REPLACE => 'REPLACE',
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


