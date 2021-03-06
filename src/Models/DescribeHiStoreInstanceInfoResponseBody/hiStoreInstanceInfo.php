<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHiStoreInstanceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class hiStoreInstanceInfo extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $machineSpec;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $rpmVersion;

    /**
     * @var string
     */
    public $historeInstanceId;
    protected $_name = [
        'gmtCreate'         => 'GmtCreate',
        'machineSpec'       => 'MachineSpec',
        'diskSize'          => 'DiskSize',
        'rpmVersion'        => 'RpmVersion',
        'historeInstanceId' => 'HistoreInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->machineSpec) {
            $res['MachineSpec'] = $this->machineSpec;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->rpmVersion) {
            $res['RpmVersion'] = $this->rpmVersion;
        }
        if (null !== $this->historeInstanceId) {
            $res['HistoreInstanceId'] = $this->historeInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hiStoreInstanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['MachineSpec'])) {
            $model->machineSpec = $map['MachineSpec'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['RpmVersion'])) {
            $model->rpmVersion = $map['RpmVersion'];
        }
        if (isset($map['HistoreInstanceId'])) {
            $model->historeInstanceId = $map['HistoreInstanceId'];
        }

        return $model;
    }
}
