<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'category',
        'Major_subject',
        'Secondary_subject',
        'item_id',
        'item_name',
        'city_id',
        'partner_id',
        'cost',
    ];
}
