<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPerformanceSummaryResponseBody\rdsPerformanceInfos;
use AlibabaCloud\Tea\Model;

class DescribeRdsPerformanceSummaryResponseBody extends Model
{
    /**
     * @var rdsPerformanceInfos[]
     */
    public $rdsPerformanceInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'rdsPerformanceInfos' => 'RdsPerformanceInfos',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsPerformanceInfos) {
            $res['RdsPerformanceInfos'] = [];
            if (null !== $this->rdsPerformanceInfos && \is_array($this->rdsPerformanceInfos)) {
                $n = 0;
                foreach ($this->rdsPerformanceInfos as $item) {
                    $res['RdsPerformanceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeRdsPerformanceSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsPerformanceInfos'])) {
            if (!empty($map['RdsPerformanceInfos'])) {
                $model->rdsPerformanceInfos = [];
                $n                          = 0;
                foreach ($map['RdsPerformanceInfos'] as $item) {
                    $model->rdsPerformanceInfos[$n++] = null !== $item ? rdsPerformanceInfos::fromMap($item) : $item;
                }
            }
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
