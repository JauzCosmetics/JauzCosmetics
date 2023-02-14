<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    
    public function showCart(Request $request){
        
        $cart = Cart::where('user_id', Auth::id());
        $products = $cart->products();
        return view('cart', @compact('products')); 
    }

    public function add(Request $request){
       
        $product = Product::find($request->product_id);

        Cart::add(
            $product->id, 
            $product->name, 
            $product->price, 
            $product->stock, 
            $product->description, 
            array("urlfoto"=>$product->urlfoto)
           
        );
        
        return back()->with('success',"$product->nombre ¡se ha agregado con éxito al carrito!");
   
    }

    public function confirmarProducts(){
        
        return view('checkout');
    }

    public function cart(){
        
        return view('checkout');
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

    public function cartContent(){
        $cartContent = Cart::all();
        return view('cart', @compact('cartContent'));;
    }

}