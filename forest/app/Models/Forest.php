<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forest extends Model
{
    //テーブル名
    protected $table = 'forests';

    //可変項目
    protected $fillable = 
    [
        'ja',
        'en'
    ];
}
