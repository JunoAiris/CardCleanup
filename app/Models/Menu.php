<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'password',
        'is_active',
    ];

    public function establishments()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function menu_products()
    {
        return $this->belongsToMany(Establishment::class);
    }

    public function orders()
    {
        return $this->hasOne(Order::class);
    }
}
