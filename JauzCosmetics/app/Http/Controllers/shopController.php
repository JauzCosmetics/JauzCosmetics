<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ShopController extends Controller
{

    public function maquillaje()
    {
        $products = Product::maquillaje(3); // Nos saca todos los productos de la BBDD
        $category = 'maquillaje';
        return view('showProducts', @compact('products','category')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }
    public function accesorio()
    {
        $products = Product::accesorio(1); // Nos saca todos los productos de la BBDD
        $category = 'accesorio';
        return view('showProducts', @compact('products','category')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

    public function productos()
    {
        $products = Product::all();
        // Nos saca todos los productos de la BBDD

        return view('index', @compact('products')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }


}