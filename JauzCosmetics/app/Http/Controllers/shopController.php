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

    public function products()
    {
        
        $products = Product::allProducts(2);
        $category = 'allProducts';
        return view('showProducts', @compact('products','category')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }
    public function productos()
    {
        $products = Product::productos();

        return view('index', @compact('products')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

    public function detalle($id)
    {
        $product = Product::findOrFail($id);
        return view('article', @compact('product')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

}
