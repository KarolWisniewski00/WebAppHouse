<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraPrice extends Model
{
    protected $fillable = [
        'extra_id',
        'old_price',
        'new_price',
        'changed_by',
    ];
}
