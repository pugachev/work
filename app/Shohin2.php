<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shohin2 extends Model
{
    protected $table = 'shohin2';
    protected $fillable = [
        'shohin_name', 'category', 'shiire_tanka','hanbai_tanka',
    ];
}
