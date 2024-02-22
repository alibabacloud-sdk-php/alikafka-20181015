<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models;

use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetTopicStatusResponseBody\topicStatus;
use AlibabaCloud\Tea\Model;

class GetTopicStatusResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @example E475C7E2-8C35-46EF-BE7D-5D2A9F5D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var topicStatus
     */
    public $topicStatus;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'topicStatus' => 'TopicStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->topicStatus) {
            $res['TopicStatus'] = null !== $this->topicStatus ? $this->topicStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTopicStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TopicStatus'])) {
            $model->topicStatus = topicStatus::fromMap($map['TopicStatus']);
        }

        return $model;
    }
}
