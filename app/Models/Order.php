<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function addresses(){
        return $this->belongsTo(Address::class)->withTimestamps();
    }
    public function cart(){

        return $this->hasOne(Cart::class)->withTimestamps();
    }
    public function products(){

        return $this->belongsToMany(Product::class,'cart_product_order')->withTimestamps();
    }
}
