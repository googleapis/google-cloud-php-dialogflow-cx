<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/response_message.proto

namespace Google\Cloud\Dialogflow\Cx\V3\ResponseMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A text or ssml response that is preferentially used for TTS output audio
 * synthesis, as described in the comment on the ResponseMessage message.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ResponseMessage.OutputAudioText</code>
 */
class OutputAudioText extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Whether the playback of this message can be interrupted by
     * the end user's speech and the client can then starts the next Dialogflow
     * request.
     *
     * Generated from protobuf field <code>bool allow_playback_interruption = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $allow_playback_interruption = false;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           The raw text to be synthesized.
     *     @type string $ssml
     *           The SSML text to be synthesized. For more information, see
     *           [SSML](/speech/text-to-speech/docs/ssml).
     *     @type bool $allow_playback_interruption
     *           Output only. Whether the playback of this message can be interrupted by
     *           the end user's speech and the client can then starts the next Dialogflow
     *           request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * The raw text to be synthesized.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->readOneof(1);
    }

    public function hasText()
    {
        return $this->hasOneof(1);
    }

    /**
     * The raw text to be synthesized.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The SSML text to be synthesized. For more information, see
     * [SSML](/speech/text-to-speech/docs/ssml).
     *
     * Generated from protobuf field <code>string ssml = 2;</code>
     * @return string
     */
    public function getSsml()
    {
        return $this->readOneof(2);
    }

    public function hasSsml()
    {
        return $this->hasOneof(2);
    }

    /**
     * The SSML text to be synthesized. For more information, see
     * [SSML](/speech/text-to-speech/docs/ssml).
     *
     * Generated from protobuf field <code>string ssml = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSsml($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Output only. Whether the playback of this message can be interrupted by
     * the end user's speech and the client can then starts the next Dialogflow
     * request.
     *
     * Generated from protobuf field <code>bool allow_playback_interruption = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getAllowPlaybackInterruption()
    {
        return $this->allow_playback_interruption;
    }

    /**
     * Output only. Whether the playback of this message can be interrupted by
     * the end user's speech and the client can then starts the next Dialogflow
     * request.
     *
     * Generated from protobuf field <code>bool allow_playback_interruption = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowPlaybackInterruption($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_playback_interruption = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}


