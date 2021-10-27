<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCustomDataExportSrcDstTablesResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCustomDataExportSrcDstTablesResponseBody\dataExportSrcDstTables\dstTables;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCustomDataExportSrcDstTablesResponseBody\dataExportSrcDstTables\srcTables;
use AlibabaCloud\Tea\Model;

class dataExportSrcDstTables extends Model
{
    /**
     * @var dstTables
     */
    public $dstTables;

    /**
     * @var srcTables
     */
    public $srcTables;
    protected $_name = [
        'dstTables' => 'DstTables',
        'srcTables' => 'SrcTables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstTables) {
            $res['DstTables'] = null !== $this->dstTables ? $this->dstTables->toMap() : null;
        }
        if (null !== $this->srcTables) {
            $res['SrcTables'] = null !== $this->srcTables ? $this->srcTables->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataExportSrcDstTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstTables'])) {
            $model->dstTables = dstTables::fromMap($map['DstTables']);
        }
        if (isset($map['SrcTables'])) {
            $model->srcTables = srcTables::fromMap($map['SrcTables']);
        }

        return $model;
    }
}
