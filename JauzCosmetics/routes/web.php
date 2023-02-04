<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('index');
});

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

Route::get('/product', function () {
    return view('product');
})->name('product');

/* Agrupamos las rutas que van a ser controladas por las funciones de adminController.
Con prefix tomará */
Route::prefix('/admin')->namespace('App\\Http\\Controllers\\Admin')-> group (function(){ 
    Route::get('',[ AdminController::class, 'productos' ])-> name('admin.productos'); 
    Route::get('.crear', [ AdminController::class, 'crear' ]) -> name('admin.crear');
    Route::get('.editar/{id}', [ AdminController::class, 'editar' ]) -> name('admin.editar'); 
    Route::put('.editar/{id}', [ AdminController::class, 'actualizar' ]) -> name('admin.actualizar'); 
    Route::delete('eliminar/{id}', [ AdminController::class, 'eliminar' ]) -> name('admin.eliminar');
}); 