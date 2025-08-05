<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat2 extends Model
{
    protected $fillable = [
        'segment',
        'flat',
        'surface',
        'price_surface',
        'status',
        'price',
        'file_pdf',
        'file_priv'
    ];
    public function lowestPriceLast30Days()
    {
        $minPrice = $this->prices()
            ->where('created_at', '>=', now()->subDays(30))
            ->min('new_price');

        return $minPrice ?? $this->price;
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }
}
