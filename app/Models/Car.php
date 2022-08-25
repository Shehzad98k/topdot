<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'value',
    ];

    //a car model belongs to a base car
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }
}
