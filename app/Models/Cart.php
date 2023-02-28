<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function users(){
        
        return $this->hasOne(User::class);

    }

    public function products()
    {
        //Necesitamos el withPivot para poder acceder al atributo amount.
        return $this->belongsToMany(Product::class, 'product_cart')->withTimestamps()->withPivot('amount');
    }

}