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
        'establishment_id',
    ];
    protected $hidden = [
        'id',
    ];

    public function establishments()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
