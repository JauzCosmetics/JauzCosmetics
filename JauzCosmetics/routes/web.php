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


Route::prefix('/admin')->namespace('App\\Http\\Controllers\\Admin')-> group (function(){
    Route::get('admin', [ AdminController::class, 'admin' ]);
    Route::get('admin.detalle/{id?}', [ AdminController::class, 'detalle' ]) -> name('admin.detalle');
    Route::post('admin', [ AdminController::class, 'crear' ]) -> name('admin.crear');
    Route::get('admin.editar/{id}', [ AdminController::class, 'editar' ]) -> name('admin.editar'); 
    Route::put('admin.editar/{id}', [ AdminController::class, 'actualizar' ]) -> name('admin.actualizar'); 
    Route::delete('eliminar/{id}', [ AdminController::class, 'eliminar' ]) -> name('admin.eliminar');
});