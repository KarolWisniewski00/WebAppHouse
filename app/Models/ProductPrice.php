<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $fillable = [
        'flat_id',
        'flat2_id',
        'flat3_id',
        'old_price',
        'new_price',
        'changed_by',
    ];
}
