<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zhongjie extends Model
{
    use HasFactory;

    public function zuoxfs()
    {
        return $this->hasMany(Zuoxf::class,'zj_id','id');
    }
}
