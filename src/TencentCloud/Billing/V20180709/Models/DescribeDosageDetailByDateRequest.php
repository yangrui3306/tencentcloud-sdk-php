<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStartDate() 获取查询账单开始日期，如 2019-01-01
 * @method void setStartDate(string $StartDate) 设置查询账单开始日期，如 2019-01-01
 * @method string getEndDate() 获取查询账单结束日期，如 2019-01-01
 * @method void setEndDate(string $EndDate) 设置查询账单结束日期，如 2019-01-01
 * @method string getProductCode() 获取视频业务：
10194   互动直播-核心机房           :
10195   互动直播-边缘机房

cdn业务：
10180：CDN静态加速流量(国内)
10181：CDN静态加速带宽(国内)
10182：CDN静态加速普通流量
10183：CDN静态加速普通带宽
10231：CDN静态加速流量(海外)
10232：CDN静态加速带宽(海外)

100967：弹性公网IP-按流量计费
101065：公网负载均衡-按流量计费
 * @method void setProductCode(string $ProductCode) 设置视频业务：
10194   互动直播-核心机房           :
10195   互动直播-边缘机房

cdn业务：
10180：CDN静态加速流量(国内)
10181：CDN静态加速带宽(国内)
10182：CDN静态加速普通流量
10183：CDN静态加速普通带宽
10231：CDN静态加速流量(海外)
10232：CDN静态加速带宽(海外)

100967：弹性公网IP-按流量计费
101065：公网负载均衡-按流量计费
 * @method string getDomain() 获取查询域名 例如 www.qq.com
非CDN业务查询时可以设置为空
 * @method void setDomain(string $Domain) 设置查询域名 例如 www.qq.com
非CDN业务查询时可以设置为空
 * @method string getInstanceID() 获取1、如果为空，则返回EIP或CLB所有实例的明细；
2、如果传入实例名，则返回该实例明细
 * @method void setInstanceID(string $InstanceID) 设置1、如果为空，则返回EIP或CLB所有实例的明细；
2、如果传入实例名，则返回该实例明细
 */

/**
 *DescribeDosageDetailByDate请求参数结构体
 */
class DescribeDosageDetailByDateRequest extends AbstractModel
{
    /**
     * @var string 查询账单开始日期，如 2019-01-01
     */
    public $StartDate;

    /**
     * @var string 查询账单结束日期，如 2019-01-01
     */
    public $EndDate;

    /**
     * @var string 视频业务：
10194   互动直播-核心机房           :
10195   互动直播-边缘机房

cdn业务：
10180：CDN静态加速流量(国内)
10181：CDN静态加速带宽(国内)
10182：CDN静态加速普通流量
10183：CDN静态加速普通带宽
10231：CDN静态加速流量(海外)
10232：CDN静态加速带宽(海外)

100967：弹性公网IP-按流量计费
101065：公网负载均衡-按流量计费
     */
    public $ProductCode;

    /**
     * @var string 查询域名 例如 www.qq.com
非CDN业务查询时可以设置为空
     */
    public $Domain;

    /**
     * @var string 1、如果为空，则返回EIP或CLB所有实例的明细；
2、如果传入实例名，则返回该实例明细
     */
    public $InstanceID;
    /**
     * @param string $StartDate 查询账单开始日期，如 2019-01-01
     * @param string $EndDate 查询账单结束日期，如 2019-01-01
     * @param string $ProductCode 视频业务：
10194   互动直播-核心机房           :
10195   互动直播-边缘机房

cdn业务：
10180：CDN静态加速流量(国内)
10181：CDN静态加速带宽(国内)
10182：CDN静态加速普通流量
10183：CDN静态加速普通带宽
10231：CDN静态加速流量(海外)
10232：CDN静态加速带宽(海外)

100967：弹性公网IP-按流量计费
101065：公网负载均衡-按流量计费
     * @param string $Domain 查询域名 例如 www.qq.com
非CDN业务查询时可以设置为空
     * @param string $InstanceID 1、如果为空，则返回EIP或CLB所有实例的明细；
2、如果传入实例名，则返回该实例明细
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
