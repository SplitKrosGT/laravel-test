<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Заполняемые поля
    protected $fillable = ['name', 'price'];

    // Связь с заказами
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
