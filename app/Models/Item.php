<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'byname',
        'xieyi_id',
        'city_id',
        'partner_id',
        'intermediary_id',
        'settle_intermediary_id',
    ];

    public function xieyi()
    {
        return $this->belongsTo(xieyi::class,'xieyi_id','id');
    }
}
