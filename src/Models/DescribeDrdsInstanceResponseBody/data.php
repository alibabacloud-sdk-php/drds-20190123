<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponseBody\data\readOnlyDBInstanceIds;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponseBody\data\vips;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $versionAction;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $mysqlVersion;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $expireDate;

    /**
     * @var string
     */
    public $masterInstanceId;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $machineType;

    /**
     * @var string
     */
    public $instanceSeries;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instRole;

    /**
     * @var string
     */
    public $orderInstanceId;

    /**
     * @var vips
     */
    public $vips;

    /**
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;
    protected $_name = [
        'type'                  => 'Type',
        'status'                => 'Status',
        'createTime'            => 'CreateTime',
        'versionAction'         => 'VersionAction',
        'storageType'           => 'StorageType',
        'networkType'           => 'NetworkType',
        'label'                 => 'Label',
        'mysqlVersion'          => 'MysqlVersion',
        'instanceSpec'          => 'InstanceSpec',
        'vpcCloudInstanceId'    => 'VpcCloudInstanceId',
        'description'           => 'Description',
        'version'               => 'Version',
        'expireDate'            => 'ExpireDate',
        'masterInstanceId'      => 'MasterInstanceId',
        'commodityCode'         => 'CommodityCode',
        'machineType'           => 'MachineType',
        'instanceSeries'        => 'InstanceSeries',
        'productVersion'        => 'ProductVersion',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'drdsInstanceId'        => 'DrdsInstanceId',
        'zoneId'                => 'ZoneId',
        'instRole'              => 'InstRole',
        'orderInstanceId'       => 'OrderInstanceId',
        'vips'                  => 'Vips',
        'readOnlyDBInstanceIds' => 'ReadOnlyDBInstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->versionAction) {
            $res['VersionAction'] = $this->versionAction;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->mysqlVersion) {
            $res['MysqlVersion'] = $this->mysqlVersion;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->instanceSeries) {
            $res['InstanceSeries'] = $this->instanceSeries;
        }
        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instRole) {
            $res['InstRole'] = $this->instRole;
        }
        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }
        if (null !== $this->vips) {
            $res['Vips'] = null !== $this->vips ? $this->vips->toMap() : null;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['VersionAction'])) {
            $model->versionAction = $map['VersionAction'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['MysqlVersion'])) {
            $model->mysqlVersion = $map['MysqlVersion'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['InstanceSeries'])) {
            $model->instanceSeries = $map['InstanceSeries'];
        }
        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstRole'])) {
            $model->instRole = $map['InstRole'];
        }
        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }
        if (isset($map['Vips'])) {
            $model->vips = vips::fromMap($map['Vips']);
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }

        return $model;
    }
}
