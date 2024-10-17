<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Заполняемые поля
    protected $fillable = ['name', 'email', 'password'];

    // Связь с заказами
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Хранение пароля в зашифрованном виде
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
