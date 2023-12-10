<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat3 extends Model
{
    protected $fillable = [
        'segment', 'flat', 'surface', 'price_surface', 'status', 'price', 'file_pdf', 'file_priv'
    ];
}
