<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceMonitorResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceMonitorResponseBody\data\values;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the metric.
     *
     * @example cpu
     *
     * @var string
     */
    public $key;

    /**
     * @description The number of nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The unit of the metric value.
     *
     * @example %
     *
     * @var string
     */
    public $unit;

    /**
     * @description The details of the monitoring data of the metric.
     *
     * @var values[]
     */
    public $values;
    protected $_name = [
        'key'     => 'Key',
        'nodeNum' => 'NodeNum',
        'unit'    => 'Unit',
        'values'  => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->values) {
            $res['Values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['Values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n             = 0;
                foreach ($map['Values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
