<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shohin extends Model
{
    protected $table = 'shohin';
    protected $fillable = [
        'shohin_name', 'category', 'shiire_tanka','hanbai_tanka',
    ];
}
