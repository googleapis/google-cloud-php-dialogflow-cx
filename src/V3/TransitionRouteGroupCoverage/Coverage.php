<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Coverage result message for one transition route group.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage.Coverage</code>
 */
class Coverage extends \Google\Protobuf\Internal\Message
{
    /**
     * Transition route group metadata. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRouteGroup route_group = 1;</code>
     */
    protected $route_group = null;
    /**
     * The list of transition routes and coverage in the transition route group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage.Coverage.Transition transitions = 2;</code>
     */
    private $transitions;
    /**
     * The percent of transition routes in the transition route group that are
     * covered.
     *
     * Generated from protobuf field <code>float coverage_score = 3;</code>
     */
    protected $coverage_score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroup $route_group
     *           Transition route group metadata. Only name and displayName will be set.
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage\Coverage\Transition>|\Google\Protobuf\Internal\RepeatedField $transitions
     *           The list of transition routes and coverage in the transition route group.
     *     @type float $coverage_score
     *           The percent of transition routes in the transition route group that are
     *           covered.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * Transition route group metadata. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRouteGroup route_group = 1;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroup|null
     */
    public function getRouteGroup()
    {
        return $this->route_group;
    }

    public function hasRouteGroup()
    {
        return isset($this->route_group);
    }

    public function clearRouteGroup()
    {
        unset($this->route_group);
    }

    /**
     * Transition route group metadata. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRouteGroup route_group = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroup $var
     * @return $this
     */
    public function setRouteGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroup::class);
        $this->route_group = $var;

        return $this;
    }

    /**
     * The list of transition routes and coverage in the transition route group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage.Coverage.Transition transitions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransitions()
    {
        return $this->transitions;
    }

    /**
     * The list of transition routes and coverage in the transition route group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage.Coverage.Transition transitions = 2;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage\Coverage\Transition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage\Coverage\Transition::class);
        $this->transitions = $arr;

        return $this;
    }

    /**
     * The percent of transition routes in the transition route group that are
     * covered.
     *
     * Generated from protobuf field <code>float coverage_score = 3;</code>
     * @return float
     */
    public function getCoverageScore()
    {
        return $this->coverage_score;
    }

    /**
     * The percent of transition routes in the transition route group that are
     * covered.
     *
     * Generated from protobuf field <code>float coverage_score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setCoverageScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->coverage_score = $var;

        return $this;
    }

}


