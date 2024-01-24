<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\DBNodes;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The ID of the node in the apsaradb for PolarDB cluster.
     *
     * @example pi-***************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description The role of a node in the apsaradb for PolarDB cluster. Valid values:
     *
     *   **Reader**
     *   **Writer**
     *
     * @example Reader
     *
     * @var string
     */
    public $DBNodeRole;

    /**
     * @description The status of the nodes in the PolarDB cluster.
     *
     * @example Running
     *
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @description The ID of the zone where the node of the PolarDB cluster resides.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBNodeId'     => 'DBNodeId',
        'DBNodeRole'   => 'DBNodeRole',
        'DBNodeStatus' => 'DBNodeStatus',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->DBNodeRole) {
            $res['DBNodeRole'] = $this->DBNodeRole;
        }
        if (null !== $this->DBNodeStatus) {
            $res['DBNodeStatus'] = $this->DBNodeStatus;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['DBNodeRole'])) {
            $model->DBNodeRole = $map['DBNodeRole'];
        }
        if (isset($map['DBNodeStatus'])) {
            $model->DBNodeStatus = $map['DBNodeStatus'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
