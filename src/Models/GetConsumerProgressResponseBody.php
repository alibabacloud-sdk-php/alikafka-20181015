<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models;

use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress;
use AlibabaCloud\Tea\Model;

class GetConsumerProgressResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var consumerProgress
     */
    public $consumerProgress;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'consumerProgress' => 'ConsumerProgress',
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
        if (null !== $this->consumerProgress) {
            $res['ConsumerProgress'] = null !== $this->consumerProgress ? $this->consumerProgress->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerProgressResponseBody
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
        if (isset($map['ConsumerProgress'])) {
            $model->consumerProgress = consumerProgress::fromMap($map['ConsumerProgress']);
        }

        return $model;
    }
}
