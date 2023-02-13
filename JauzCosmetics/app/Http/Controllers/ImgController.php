<?php

namespace App\Http\Controllers;

use App\Models\ImgProduct;
use App\Models\Product;

class ImgController extends Controller
{
    public function imagenes()
    {
        $img = ImgProduct::all();

        return view('index', @compact('img')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }
}
