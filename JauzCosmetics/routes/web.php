<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/article', function () {
    return view('article');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/maquillaje', [ShopController::class, 'maquillaje'])->name('maquillaje');
Route::get('/accesorio', [ShopController::class, 'accesorio'])->name('accesorio');

/* Agrupamos las rutas que van a ser controladas por las funciones de adminController.
Con prefix tomará */

    Route::prefix('/admin')->namespace('App\\Http\\Controllers\\Admin')->group(function () {
        Route::get('', [AdminController::class, 'productos'])->name('admin.productos');
        Route::get('/crear', [AdminController::class, 'crear'])->name('admin.crear');
        Route::post('/crear', [AdminController::class, 'guardar'])->name('admin.guardar');

        Route::get('/editar/{id}', [AdminController::class, 'editar'])->name('admin.editar');
        Route::put('/editar/{id}', [AdminController::class, 'actualizar'])->name('admin.actualizar');
        Route::delete('/eliminar/{id}', [AdminController::class, 'eliminar'])->name('admin.eliminar');
    });