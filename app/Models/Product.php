<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'is_available',
    ];

    public function establishments()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function menu_products()
    {
        return $this->belongsToMany(Menu_products::class);
    }

    public function order_products()
    {
        return $this->belongsToMany(Order_Products::class);
    }
}
