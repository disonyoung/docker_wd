<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xieyi extends Model
{
    use HasFactory;
    protected $fillable = [
        'intermediary_id',
        'settle_intermediary_id',
        'partner_id',
        'city_id',
        'agreement',
        'type',
        'price',
        'rule',
        ];

    public function zhongjie()
    {
        return $this->belongsTo(Zhongjie::class,'intermediary_id','id');
    }

    public function jszhongjie()
    {
        return $this->belongsTo(Zhongjie::class,'settle_intermediary_id','id');
    }

    public function zhenying()
    {
        return $this->belongsTo(Zhenying::class,'partner_id','id');
    }

    public function city()
    {
        return $this->belongsTo(city::class,'city_id','id');
    }
}
