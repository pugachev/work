<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uriage extends Model
{
    protected $table = 'uriage';
    protected $fillable = [
        'uriage_date', 'shohin_id', 'suryo','shain_id','kokyaku_id',
    ];
}
