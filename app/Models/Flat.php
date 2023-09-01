<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    protected $fillable = [
        'segment', 'flat', 'surface', 'status', 'price', 'file_pdf', 'file_priv'
    ];
}
