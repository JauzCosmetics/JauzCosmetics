<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function products() {
        $products = Admin::all(); // Nos saca todas los productos de la BBDD
        return view('admin', @compact('products'));
    }
    
    public function detalle($id) {
        $products = Admin::findOrFail($id);
        return view('admin', compact('products'));
    }    

    public function crear(Request $request) {
        $newProduct = new Admin;
        $newProduct -> nombre = $request -> nombre;
        $newProduct -> description = $request -> description;
        $request -> validate([ 'nombre' => 'required', 'description' => 'required' ]);
        $newProduct -> save();
        return back() -> with('mensaje', 'Producto agregado exitosamente');
    }
    public function editar($id) {
        $products = Admin::findOrFail($id);
        return view('admin', compact('products'));
        }
        public function actualizar(Request $request, $id) {
        $request -> validate([
        'nombre' => 'required',
        'description' => 'required'
        ]);
        $updateProduct = Admin::findOrFail($id);
        $updateProduct -> nombre = $request -> nombre;
        $updateProduct -> description = $request -> description;
        $updateProduct -> save();
        return back() -> with('mensaje', 'Producto actualizado');
    }

    public function eliminar($id) {
        $deleteProduct = Admin::findOrFail($id);
        $deleteProduct -> delete();
        return back() -> with('mensaje', 'Producto eliminado');
    }
}
