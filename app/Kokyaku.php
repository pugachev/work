<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kokyaku extends Model
{
    protected $table = 'kokyaku';
    protected $fillable = [
        'kokyaku_name', 'post', 'address','telno','email',
    ];
}
