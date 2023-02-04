<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function productos() {
        $products = Product::all(); // Nos saca todas los productos de la BBDD
        return view('admin', compact('products'));
    }
    
    public function detalle($id) {
        $products = Product::findOrFail($id);
        return view('admin', compact('products'));
    }    

    public function crear(Request $request) {
        $newProduct = new Product;
        $newProduct -> nombre = $request -> nombre;
        $newProduct -> description = $request -> description;
        $request -> validate([ 'nombre' => 'required', 'description' => 'required' ]);
        $newProduct -> save();
        return back() -> with('mensaje', 'Producto agregado exitosamente');
    }
    public function editar($id) {
        $products = Product::findOrFail($id);
        return view('admin', compact('products'));
        }
        public function actualizar(Request $request, $id) {
        $request -> validate([
        'nombre' => 'required',
        'description' => 'required'
        ]);
        $updateProduct = Product::findOrFail($id);
        $updateProduct -> nombre = $request -> nombre;
        $updateProduct -> description = $request -> description;
        $updateProduct -> save();
        return back() -> with('mensaje', 'Producto actualizado');
    }

    public function eliminar($id) {
        $deleteProduct = Product::findOrFail($id);
        $deleteProduct -> delete();
        return back() -> with('mensaje', 'Producto eliminado');
    }
}
