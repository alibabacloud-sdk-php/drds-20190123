<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponseBody\dbInstance;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDbInstanceResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dbInstance
     */
    public $dbInstance;
    protected $_name = [
        'success'    => 'Success',
        'requestId'  => 'RequestId',
        'dbInstance' => 'DbInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dbInstance) {
            $res['DbInstance'] = null !== $this->dbInstance ? $this->dbInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsDbInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DbInstance'])) {
            $model->dbInstance = dbInstance::fromMap($map['DbInstance']);
        }

        return $model;
    }
}
