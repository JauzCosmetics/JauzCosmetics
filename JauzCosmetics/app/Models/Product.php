<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    use HasFactory;

    public function carts(){
        return $this->belongsToMany(Cart::class)->withTimestamps();
    }

    public static function maquillaje(int $param){
        return Product::where('category', 'maquillaje')->paginate($param);
    }
    public static function accesorio(int $param){
        return Product::where('category', 'accesorio')->paginate($param);
    }

    public static function allProducts(int $param){
        return Product::query()->paginate($param);
    }

    public static function productos(){
        return DB::table('products')-> orderBy ( 'id' , 'desc' )->limit(3)->get();;
    }


    public function imgProducts(){
        return $this->hasOne(ImgProduct::class);
    }
}
