<?php

namespace App\Models;
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 2019-04-17
 * Time: 16:25
 */

class Article extends Base
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'clc_articles';

    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 模型日期列的存储格式
     *
     * @var string
     */
    protected $dateFormat = 'U';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
}