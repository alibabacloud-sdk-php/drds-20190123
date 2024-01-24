<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponseBody\dbInstance;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDbInstanceResponseBody extends Model
{
    /**
     * @description The detailed information about the returned custom ApsaraDB RDS for MySQL instance.
     *
     * @var dbInstance
     */
    public $dbInstance;

    /**
     * @description The ID of the request.
     *
     * @example 4FE09970-CA69-4144-88CA-67FB4BTY56G3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'dbInstance' => 'DbInstance',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstance) {
            $res['DbInstance'] = null !== $this->dbInstance ? $this->dbInstance->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['DbInstance'])) {
            $model->dbInstance = dbInstance::fromMap($map['DbInstance']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
