<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgProduct extends Model
{
    use HasFactory;



    public function products(){
        return $this->belongsTo(Product::class)->withTimestamps();
    }

    public function imgSplit($imgs, $product){

        $nameProduct = $product->name;
        $arrayImg = array($imgs);
        $i = 0;

        foreach($arrayImg as $img){

        $img = explode('" "', $img);

        $renameImg = Str::replace( $img, ($nameProduct.$i.'.jpeg'), $img);
        $i++;

        $imgs->name = $renameImg;
        // $imgs->url = ; me falta saber como elegir la ruta donde se iran guardando las imágenes
        $imgs->product_id = $product->id;

        $imgs->save();

        }
    }


}
// array en laravel
