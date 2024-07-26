<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/data_store_connection.proto

namespace Google\Cloud\Dialogflow\Cx\V3\DataStoreConnectionSignals;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Search snippet details.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SearchSnippet</code>
 */
class SearchSnippet extends \Google\Protobuf\Internal\Message
{
    /**
     * Title of the enclosing document.
     *
     * Generated from protobuf field <code>string document_title = 1;</code>
     */
    protected $document_title = '';
    /**
     * Uri for the document. Present if specified for the document.
     *
     * Generated from protobuf field <code>string document_uri = 2;</code>
     */
    protected $document_uri = '';
    /**
     * Text included in the prompt.
     *
     * Generated from protobuf field <code>string text = 3;</code>
     */
    protected $text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $document_title
     *           Title of the enclosing document.
     *     @type string $document_uri
     *           Uri for the document. Present if specified for the document.
     *     @type string $text
     *           Text included in the prompt.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\DataStoreConnection::initOnce();
        parent::__construct($data);
    }

    /**
     * Title of the enclosing document.
     *
     * Generated from protobuf field <code>string document_title = 1;</code>
     * @return string
     */
    public function getDocumentTitle()
    {
        return $this->document_title;
    }

    /**
     * Title of the enclosing document.
     *
     * Generated from protobuf field <code>string document_title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->document_title = $var;

        return $this;
    }

    /**
     * Uri for the document. Present if specified for the document.
     *
     * Generated from protobuf field <code>string document_uri = 2;</code>
     * @return string
     */
    public function getDocumentUri()
    {
        return $this->document_uri;
    }

    /**
     * Uri for the document. Present if specified for the document.
     *
     * Generated from protobuf field <code>string document_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->document_uri = $var;

        return $this;
    }

    /**
     * Text included in the prompt.
     *
     * Generated from protobuf field <code>string text = 3;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Text included in the prompt.
     *
     * Generated from protobuf field <code>string text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}

