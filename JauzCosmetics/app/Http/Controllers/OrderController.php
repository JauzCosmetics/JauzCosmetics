<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function buy($total){
        $order = new Order;
        $order->user_id = User::find(Auth::id())->id;
        $order->total_price=$total;
        $order->pago='Bizum';
        $order->address = 'Calle pitumba';
        $productInCart = Auth::user()->cart->products;
        $order->save();

        foreach ($productInCart as $product) {
            $order->products()->attach($product->id,['amount'=>$product->pivot->amount]);
        }
        

        $order->total = Auth::user()->cart->total;

        Auth::user()->cart->products()->detach();
        Auth::user()->cart->total = 0;
        Auth::user()->cart->save();

        return view('/order');
    }

    public function showOrder(){
        $order = Order::all();
        $order = Order::paginate(5);
        return view('admin.orders', @compact('order'));
    }
}
