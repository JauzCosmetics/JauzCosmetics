<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ImgProduct;
use App\Models\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function productos()
    {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('table', @compact('products')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

    public function usuarios()
    {
        $users = User::all(); // Nos saca todos los productos de la BBDD
        return view('admin.users', @compact('users')); //Compact nos recoge todo los elementos que encontremos en la base de datos
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
            $newProduct->category = $request->category;
            $newProduct->save();

            $i = 0;
            foreach ($request->img as $imagen) {
              $img= new ImgProduct();

              $imageName =$newProduct -> id.'_'.$i.'.'.$imagen->extension();
              $img->name = $imageName;
              $imagen->move(public_path('assets/img/'.$newProduct->id), $imageName);
              $img->product_id = $newProduct->id;
              $img->save();
              $i++;
           }

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
        $deleteImg = ImgProduct::where('product_id', $id);
        $deleteImg->delete();

        $deleteProduct = Product::findOrFail($id);
        $deleteProduct->delete();


        notify()->success('Producto eliminado ');

        return back();
    }


    public function editarUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.editarUser', @compact('user'));
    }

    public function actualizarUser(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|password',
            'rol' => 'required'
        ]);

        $errors = $request->has('errors');


        if (!$errors) {
            $updateUser = User::findOrFail($id);

            $updateUser->name = $request->name;
            $updateUser->price = $request->price;
            $updateUser->stock = $request->stock;
            $updateUser->description = $request->description;
            /*          $updateProduct -> fotosProd = $request -> fotosProd;
                $updateProduct -> category_id = $request -> category_id;  */
            $updateUser->save();
            return back()->with('mensaje', 'Producto actualizado');
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }

    }

    public function eliminarUser($id)
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
