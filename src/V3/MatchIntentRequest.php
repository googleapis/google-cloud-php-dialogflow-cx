<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/session.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request of [MatchIntent][].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.MatchIntentRequest</code>
 */
class MatchIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session this query is sent to.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/sessions/<Session ID>` or `projects/<Project ID>/locations/<Location
     * ID>/agents/<Agent ID>/environments/<Environment ID>/sessions/<Session ID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $session = '';
    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     */
    protected $query_params = null;
    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query_input = null;
    /**
     * Persist session parameter changes from `query_params`.
     *
     * Generated from protobuf field <code>bool persist_parameter_changes = 5;</code>
     */
    protected $persist_parameter_changes = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Required. The name of the session this query is sent to.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/sessions/<Session ID>` or `projects/<Project ID>/locations/<Location
     *           ID>/agents/<Agent ID>/environments/<Environment ID>/sessions/<Session ID>`.
     *           If `Environment ID` is not specified, we assume default 'draft'
     *           environment.
     *           It's up to the API caller to choose an appropriate `Session ID`. It can be
     *           a random number or some type of session identifiers (preferably hashed).
     *           The length of the `Session ID` must not exceed 36 characters.
     *           For more information, see the [sessions
     *           guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     *     @type \Google\Cloud\Dialogflow\Cx\V3\QueryParameters $query_params
     *           The parameters of this query.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\QueryInput $query_input
     *           Required. The input specification.
     *     @type bool $persist_parameter_changes
     *           Persist session parameter changes from `query_params`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the session this query is sent to.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/sessions/<Session ID>` or `projects/<Project ID>/locations/<Location
     * ID>/agents/<Agent ID>/environments/<Environment ID>/sessions/<Session ID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The name of the session this query is sent to.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/sessions/<Session ID>` or `projects/<Project ID>/locations/<Location
     * ID>/agents/<Agent ID>/environments/<Environment ID>/sessions/<Session ID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\QueryParameters|null
     */
    public function getQueryParams()
    {
        return $this->query_params;
    }

    public function hasQueryParams()
    {
        return isset($this->query_params);
    }

    public function clearQueryParams()
    {
        unset($this->query_params);
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\QueryInput|null
     */
    public function getQueryInput()
    {
        return $this->query_input;
    }

    public function hasQueryInput()
    {
        return isset($this->query_input);
    }

    public function clearQueryInput()
    {
        unset($this->query_input);
    }

    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\QueryInput $var
     * @return $this
     */
    public function setQueryInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\QueryInput::class);
        $this->query_input = $var;

        return $this;
    }

    /**
     * Persist session parameter changes from `query_params`.
     *
     * Generated from protobuf field <code>bool persist_parameter_changes = 5;</code>
     * @return bool
     */
    public function getPersistParameterChanges()
    {
        return $this->persist_parameter_changes;
    }

    /**
     * Persist session parameter changes from `query_params`.
     *
     * Generated from protobuf field <code>bool persist_parameter_changes = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPersistParameterChanges($var)
    {
        GPBUtil::checkBool($var);
        $this->persist_parameter_changes = $var;

        return $this;
    }

}

