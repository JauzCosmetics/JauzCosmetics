<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function productos()
    {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('table', @compact('products')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

    public function usuario()
    {
        $users = User::all(); // Nos saca todos los productos de la BBDD
        return view('table', @compact('users')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

    public function crear()
    {
        return view('admin.crear');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|min:0|numeric',
            'stock' => 'required|min:0|integer',
            'description' => 'required|min:8'
        ]);

        $errors = $request->has('errors');

        if (!$errors) {
            $newProduct = new Product;
            $newProduct->name = $request->name;
            $newProduct->price = $request->price;
            $newProduct->stock = $request->stock;
            $newProduct->description = $request->description;
            //$newProduct -> fotosProd = $request -> fotosProd;
            //$newProduct -> category_id = $request -> category_id;
            $newProduct->save();
            return back()->with('mensaje', 'Producto agregado exitosamente');
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }
    public function editar($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.editar', @compact('product'));
    }

    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|min:0|numeric',
            'stock' => 'required|min:0|integer',
            'description' => 'required|min:8'
        ]);

        $errors = $request->has('errors');


        if (!$errors) {
            $updateProduct = Product::findOrFail($id);
            $updateProduct->name = $request->name;
            $updateProduct->price = $request->price;
            $updateProduct->stock = $request->stock;
            $updateProduct->description = $request->description;
            /*          $updateProduct -> fotosProd = $request -> fotosProd;
                $updateProduct -> category_id = $request -> category_id;  */
            $updateProduct->save();
            return back()->with('mensaje', 'Producto actualizado');
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }

    public function eliminar($id)
    {
        $deleteProduct = Product::findOrFail($id);
        $deleteProduct->delete();
        return back()->with('mensaje', 'Producto eliminado');
    }

    public function maquillaje()
    {
        $products = Product::maquillaje(3); // Nos saca todos los productos de la BBDD
        $category = 'maquillaje';
        return view('table', @compact('products', 'category')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }
    public function accesorio()
    {
        $products = Product::all()->accesorio(1); // Nos saca todos los productos de la BBDD
        $category = 'accesorio';
        return view('table', @compact('products', 'category')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }
}
