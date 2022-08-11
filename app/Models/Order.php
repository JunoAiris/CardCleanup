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
        'cpf',
    ];

    public function order_product()
    {
        return $this->hasMany(Phone::class);
    }

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function menus()
    {
        return $this->belongsTo(Menu::class);
    }
}
