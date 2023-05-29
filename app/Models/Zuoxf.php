<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zuoxf extends Model
{
    use HasFactory;

    /**
     * Zuoxf::updateOrCreate(),在更新字段的时候发现，没有在这里录入字段的，无法更新值到数据库表里。
     */
    protected $fillable = [
        'zuoxf_id',
        'settledate',
        'item',
        'intermediary_id',
        'city_id',
        'partner_id',
        'settle_intermediary_id',
        'intermediary',
        'city',
        'partner',
        'settle_intermediary',
        'sales',
        'managers',
        'services',
        'rear_services',
        'manpower',
        'xieyi_id',
        'amount',
        'payment_date',
        'cost_no',
    ];

//    public function zhongjie()
//    {
//        return $this->belongsTo(Zhongjie::class,'zj_id','id');
//    }

    public function zhengying()
    {
        return $this->belongsTo(Zhenying::class,'partner_id','id');
    }

    public function zhongjie()
    {
        return $this->belongsTo(Zhongjie::class,'intermediary_id','id');
    }

    public function city()
    {
        return $this->belongsTo(city::class,'city_id','id');
    }

    public function xieyi()
    {
        return $this->belongsTo(xieyi::class,'xieyi_id','id');
    }

    public function zuoxf_renlbs()
    {
        return $this->hasMany(Zuoxf_renlb::class,'zuoxf_id','id');
    }
}
