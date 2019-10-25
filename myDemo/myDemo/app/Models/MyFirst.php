<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyFirst extends Model
{
    protected $table = 'posts';//确定表名
    protected $guarded = [];//字段可以赋值
}
