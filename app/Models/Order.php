<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_number',
        'status',
        'total_value',
        'establishment_id',
    ];

    protected $hidden = [
        'id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}
