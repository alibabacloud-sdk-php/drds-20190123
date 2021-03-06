<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody\dbInstances;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody\dbInstances\dbInstance\readOnlyInstances;
use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $dmInstanceId;

    /**
     * @var string
     */
    public $connectUrl;

    /**
     * @var int
     */
    public $readWeight;

    /**
     * @var string
     */
    public $rdsInstType;

    /**
     * @var int
     */
    public $remainDays;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $dbInstType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var readOnlyInstances
     */
    public $readOnlyInstances;
    protected $_name = [
        'expireTime'        => 'ExpireTime',
        'payType'           => 'PayType',
        'DBInstanceStatus'  => 'DBInstanceStatus',
        'networkType'       => 'NetworkType',
        'port'              => 'Port',
        'engineVersion'     => 'EngineVersion',
        'dmInstanceId'      => 'DmInstanceId',
        'connectUrl'        => 'ConnectUrl',
        'readWeight'        => 'ReadWeight',
        'rdsInstType'       => 'RdsInstType',
        'remainDays'        => 'RemainDays',
        'DBInstanceId'      => 'DBInstanceId',
        'dbInstType'        => 'DbInstType',
        'engine'            => 'Engine',
        'readOnlyInstances' => 'ReadOnlyInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->dmInstanceId) {
            $res['DmInstanceId'] = $this->dmInstanceId;
        }
        if (null !== $this->connectUrl) {
            $res['ConnectUrl'] = $this->connectUrl;
        }
        if (null !== $this->readWeight) {
            $res['ReadWeight'] = $this->readWeight;
        }
        if (null !== $this->rdsInstType) {
            $res['RdsInstType'] = $this->rdsInstType;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->readOnlyInstances) {
            $res['ReadOnlyInstances'] = null !== $this->readOnlyInstances ? $this->readOnlyInstances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DmInstanceId'])) {
            $model->dmInstanceId = $map['DmInstanceId'];
        }
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['ReadWeight'])) {
            $model->readWeight = $map['ReadWeight'];
        }
        if (isset($map['RdsInstType'])) {
            $model->rdsInstType = $map['RdsInstType'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ReadOnlyInstances'])) {
            $model->readOnlyInstances = readOnlyInstances::fromMap($map['ReadOnlyInstances']);
        }

        return $model;
    }
}
