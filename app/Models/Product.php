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
        'image_path',
        'establishment_id'
    ];

    protected $hidden = [
        'id',
    ];

    public function establishments()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
