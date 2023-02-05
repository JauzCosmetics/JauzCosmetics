<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ShopController extends Controller
{

    public function maquillaje() {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('maquillaje', compact('products')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }
    public function accesorio() {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('accesorio', compact('products')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

    public function productos() {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('index', compact('products')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

    public function paginate()
    {
        $products = Product::paginate(2);
        return view('maquillaje', @compact('products'));
    }

    public function paginateAcces()
    {
        $products = Product::paginate(2);
        return view('accesorio', @compact('products'));
    }
}
