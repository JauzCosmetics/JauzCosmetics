<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ImgController;
use App\Http\Controllers\Imgtroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [ShopController::class, 'productos'])->name('index');


Route::get('/article/{id?}', [ShopController::class, 'detalle'])->name('article.details');
Route::post('/article/{id?}',  [CartController::class, 'addProduct'])->name('cart.addProduct');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {

    return view('about');
});

Route::get('/admin/crear', function () {
    return view('admin/crear');
});
Route::get('/admin/editar', function () {
    return view('admin/editar');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/index', function () {
    return view('index');
})->middleware('auth');




Route::get('/maquillaje', [ShopController::class, 'maquillaje'])->name('maquillaje');
Route::get('/accesorio', [ShopController::class, 'accesorio'])->name('accesorio');
Route::get('/allProducts', [ShopController::class, 'products'])->name('allProducts');


Route::get('table', [AdminController::class, 'productos'])->name('table');

Route::get('/profile', [AddressController::class, 'allAddresses'])->name('profile');
Route::post('crear_direccion/{id?}', [ AddressController::class, 'crear']) -> name('crear_direccion');
/* Agrupamos las rutas que van a ser controladas por las funciones de adminController.
Con prefix tomará */

Route::prefix('/admin')->middleware(['auth','isAdmin'])->namespace('App\\Http\\Controllers\\AdminController')->group(function () {

    Route::get('', [AdminController::class, 'productos'])->name('admin.productos');

    Route::get('/users', [AdminController::class, 'usuarios'])->name('admin.usuarios');

    Route::get('/crear', [AdminController::class, 'crear'])->name('admin.crear');
    Route::post('/crear', [AdminController::class, 'guardar'])->name('admin.guardar');

    Route::get('/editar/{id}', [AdminController::class, 'editar'])->name('admin.editar');
    Route::put('/editar/{id}', [AdminController::class, 'actualizar'])->name('admin.actualizar');

    Route::delete('/eliminar/{id}', [AdminController::class, 'eliminar'])->name('admin.eliminar');
});

Route::prefix('/cart')->namespace('App\\Http\\Controllers\\CartController')->group(function () {
    Route::get('', [CartController::class, 'showCart'])->name('cart.details');
    Route::delete('/eliminar/{id}', [CartController::class, 'eliminar'])->name('cart.eliminar');
    Route::get('/moreAmount/{id}', [CartController::class, 'moreAmount'])->name('cart.moreAmount');
    Route::get('/lessAmount/{id}', [CartController::class, 'lessAmount'])->name('cart.lessAmount');
});

