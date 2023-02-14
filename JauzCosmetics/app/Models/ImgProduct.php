<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgProduct extends Model
{
    use HasFactory;



    public function product(){
        return $this->belongsTo(Product::class);
    }

    public static function imagenes($id){
        return ImgProduct::where('product_id', $id);
    }
}
