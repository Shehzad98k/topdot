<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_model_id',
        'state_id',
        'price',
    ];

    //a purchase is made by a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    //a car model is purchased
    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }
    
    //a is delivered to a state location
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    //a sale can be made to a state multiple times
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
