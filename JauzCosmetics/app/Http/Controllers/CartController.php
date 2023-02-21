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
        $products = $user->cart->products;
        $total = 0;
        foreach ($products as $product){
            $total = $total + ($product->price * $product->pivot->amount);
        }
        return view('cart', @compact('products','total')); //Compact nos recoge todo los elementos que encontremos en la base de datos
    }


    public function addProduct(Request $request, $id)
    {

        $user = User::find(Auth::id());
        $cart = $user->cart;
        $product = Product::find($request->product_id);
        if (!$cart->products->contains($id)) {
            
            $cart->products()->attach($id,['amount'=>1]);
            return back()->with('success', "$product->nombre ¡se ha agregado con éxito al carrito!");
        }else{
            $cart->products()->where('product_id', $id)->increment('amount');
            return back();
        }


    }

    public function eliminar(Request $request, $id)
    {
        $user = User::find(Auth::id());
        $cart = $user->cart;
        $product = Product::find($request->product_id);

        $cart->products()->detach($id);

        return back();
    }

    public function moreAmount($id)
    {
        $user = User::find(Auth::id());
        $cart = $user->cart;

        $cart->products()->where('product_id',$id)->increment('amount');

        return back();
    }
    public function lessAmount($id)
    {
        $user = User::find(Auth::id());
        $cart = $user->cart;

        $cart->products()->where('product_id',$id)->decrement('amount');

        return back();
    }

    public function clear()
    {
        Cart::clear();
        return back()->with('success', "The shopping cart has successfully beed added to the shopping cart!");
    }
}
