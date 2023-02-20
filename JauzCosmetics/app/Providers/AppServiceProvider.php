<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

     //TODO asi deberia estar
/*     public function boot()
    {
        $cart = Cart::where('user_id',Auth::id())->first();
        $cartProducts = $cart->products;
        Paginator::useBootstrap();
        view()->share('cartProducts',$cartProducts);
    } */

    //Funciona forzando un usuario
    public function boot()
    {
        $cart = Cart::all(/* 'user_id',Auth::id() */)/* ->first() */;
        $cartProducts = $cart[0]->products;
        Paginator::useBootstrap();
        view()->share('cartProducts',$cartProducts);
    }
}
