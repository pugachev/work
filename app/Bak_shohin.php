<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bak_shohin extends Model
{
    protected $table = 'bak_shohin';
    protected $fillable = [
        'shohin_name', 'category', 'shiire_tanka','hanbai_tanka',
    ];
}
