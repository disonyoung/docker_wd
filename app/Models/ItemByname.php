<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemByname extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_byname',
        'item_id',
        'xieyi_id',
    ];

    public function xieyi()
    {
        return $this->belongsTo(xieyi::class,'xieyi_id','id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }
}
