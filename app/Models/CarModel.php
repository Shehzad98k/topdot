<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'title',
        'value',
    ];

    //a car model belongs to a base car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    
    //a model can be purchased multiple times
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
