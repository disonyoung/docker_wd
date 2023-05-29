<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zuoxf_renlb extends Model
{
    use HasFactory;

//    protected $guarded = ['jsriqi'];

    protected $fillable = [
        'settledate',
        'item',
        'sales_id',
        'name',
        'job',
        'status',
        'train_date',
        'entry_date',
        'online_date',
        'position',
    ];

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

    public function zuoxf()
    {
        return $this->belongsTo(Zuoxf::class,'zuoxf_id','id');
    }

    public function xieyi()
    {
        return $this->belongsTo(xieyi::class,'xieyi_id','id');
    }
}
