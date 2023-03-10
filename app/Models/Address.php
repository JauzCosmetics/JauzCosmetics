<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
 
    public function orders()
    {
        return $this->hasMany(Order::class)->withTimestamps();
    }
    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
