<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取需要过滤的字段。
 * @method void setName(string $Name) 设置需要过滤的字段。
 * @method array getValues() 获取字段的过滤值。
 * @method void setValues(array $Values) 设置字段的过滤值。
 */

/**
 *用于条件过滤查询
 */
class Filter extends AbstractModel
{
    /**
     * @var string 需要过滤的字段。
     */
    public $Name;

    /**
     * @var array 字段的过滤值。
     */
    public $Values;
    /**
     * @param string $Name 需要过滤的字段。
     * @param array $Values 字段的过滤值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}