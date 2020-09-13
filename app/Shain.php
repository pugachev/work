<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shain extends Model
{
    protected $table = 'shain';
    protected $fillable = [
        'shain_name', 'sex', 'post','address','telno','email',
    ];
}
