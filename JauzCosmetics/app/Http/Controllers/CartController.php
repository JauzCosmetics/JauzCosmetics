<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function showCart()
    {
        $user = User::find(Auth::id());
        $products=$user->cart->products;
        return view('cart', @compact('products')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }

    public function addProduct(Request $request){
       
        $user = User::find(Auth::id());
        $cart=$user->cart;
        $product = Product::find($request->product_id);

        $cart->products()->attach(1);
        
        return back()->with('success',"$product->nombre ¡se ha agregado con éxito al carrito!");
   
    }
    
    public function removeitem(Request $request) {
        $product = Product::where('id', $request->id)->firstOrFail();
        Cart::remove([
        'id' => $request->id,
        ]);
        return back()->with('success',"Producto eliminado con éxito de su carrito.");
    }

    
    
    public function clear(){
        Cart::clear();
        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");
    }
}