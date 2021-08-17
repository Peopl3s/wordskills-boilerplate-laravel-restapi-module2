<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirportModel extends Model
{
    use HasFactory;
    // если таблица уже существует и мы не пользуемся миграциями (crteate_table...)
    protected $table = 'airports';

    protected $fillable = [
        'name',
        'city',
        'iota'
    ];
}
